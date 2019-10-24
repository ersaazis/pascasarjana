<?php

namespace App\Console\Commands;

use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Illuminate\Console\Command;
use DB;
use Storage;

class SchollarSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scholar:search {id} {id_user=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cari Penelitian Dosen';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->argument('id');
        $id_user = $this->argument('id_user');
        $query=DB::table('cms_users')->where('id',$id)->where('id_cms_privileges',2);
        $data=$query->first();
        if(empty($data)){
            $this->error('User Tidak Ditemukan !');
            $config['content'] = "Tidak dapat menemukan data user";
            $config['to'] = CRUDBooster::adminPath('users/detail/'.$id);
            $config['id_cms_users'] = [$id_user];
        }
        else {
            $name=$data->name;
            $auto_update=$data->auto_update;

            if($auto_update == 0 and $id_user == 0)
                goto skip;

            $client = new \GuzzleHttp\Client();
            $url = "https://scholar.google.co.id/citations?view_op=search_authors&hl=id&mauthors=".$name;
            $response = $client->request('GET', $url);
            $body = $response->getBody();
            $content = $body->getContents();
            $cekUser=preg_match_all("/<div class=\"gsc_1usr\">(.*)<\/div>/U", $content, $user);

            $hasil=array();
            if($cekUser){
                $cekId=preg_match("/;user=(.*)\"/U",$user[0][0],$cariId);
                if($cekId){
                    $url = "https://scholar.google.co.id/citations?hl=id&user=".$cariId[1]."&cstart=0&pagesize=999999999";
                    $response = $client->request('GET', $url);
                    $body = $response->getBody();
                    $content = $body->getContents();
                    preg_match_all("/data-href=\"(.*)\" class=\"gsc_a_at\">(.*)<\/a><div class=\"gs_gray\">(.*)<\/div><div class=\"gs_gray\">(.*)<\/div><\/td><td class=\"gsc_a_c\"><a href=\"(.*)\" class=\"gsc_a_ac gs_ibl\">(.*)<\/a><\/td><td class=\"gsc_a_y\"><span class=\"gsc_a_h gsc_a_hc gs_ibl\">(.*)<\/span><\/td><\/tr>/U", $content, $karyaIlmiah);
                    // preg_match_all("/data-href=\"(.*)\" class=\"gsc_a_at\">(.*)<\/a><div class=\"gs_gray\">(.*)<\/div><div class=\"gs_gray\">(.*)<\/div>.*<span class=\"gsc_a_h gsc_a_hc gs_ibl\">(.*)<\/span>/U", $content, $karyaIlmiah);
                    // print_r($karyaIlmiah);
                    $this->info('Data Ditemukan !');
                    $i=0;
                    $url="https://scholar.google.com/citations?view_op=medium_photo&user=".$cariId[1];
                    $contents = file_get_contents($url);
                    Storage::disk('public')->put($cariId[1].".jpg", $contents);
                    $query->update(['photo'=>'storage/'.$cariId[1].".jpg"]);
                    while ($i < count($karyaIlmiah[1])) {
                        $signature=md5(json_encode([
                            $karyaIlmiah[1][$i],
                            $karyaIlmiah[2][$i],$karyaIlmiah[3][$i],
                            $karyaIlmiah[4][$i],$karyaIlmiah[5][$i],
                            $karyaIlmiah[6][$i],$karyaIlmiah[7][$i],
                        ]));
                        if($id_user == 0){
                            $check=DB::table('data_penelitian')->where('signature',$signature)->count();
                            if($check > 0){
                                $i++;
                                continue;
                            }
                        }
                        DB::table('data_penelitian')->insert([
                            'url'=>str_replace("&amp;", "&","https://scholar.google.co.id".$karyaIlmiah[1][$i]),
                            'judul'=>htmlspecialchars($karyaIlmiah[2][$i]),
                            'penulis'=>htmlspecialchars($karyaIlmiah[3][$i]),
                            'publis'=>htmlspecialchars(strip_tags($karyaIlmiah[4][$i])),
                            'url_titasi'=>$karyaIlmiah[5][$i],
                            'titasi'=>(int) $karyaIlmiah[6][$i],
                            'tahun'=>$karyaIlmiah[7][$i],
                            "signature"=>$signature,
                            "user_id"=>$id,
                        ]);
                        $i++;
                    }
                    $config['content'] = "(V) Schollar Google untuk ".$name;
                    $config['to'] = CRUDBooster::adminPath('users/detail/'.$id);
                    $config['id_cms_users'] = [$id_user];
                }
            }
            else {
                $config['content'] = "(X) Schollar Google untuk".$name;
                $config['to'] = CRUDBooster::adminPath('users/detail/'.$id);
                $config['id_cms_users'] = [$id_user];
                $this->error('Data Tidak Ditemukan !');
            }
            $query->update(['proses_update'=>0]);
            if($id_user != 0)
                CRUDBooster::sendNotification($config);
        }
        skip:
    }
}
