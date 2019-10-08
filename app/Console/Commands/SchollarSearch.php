<?php

namespace App\Console\Commands;

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
    protected $signature = 'scholar:search {id}';

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
        $query=DB::table('cms_users')->where('id',$id)->where('id_cms_privileges',2);
        $data=$query->first();
        if(empty($data)){
            $this->error('User Tidak Ditemukan !');
            exit();
        }

        $name=$data->name;
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
                preg_match_all("/data-href=\"(.*)\" class=\"gsc_a_at\">(.*)<\/a><div class=\"gs_gray\">(.*)<\/div><div class=\"gs_gray\">(.*)<\/div>.*<span class=\"gsc_a_h gsc_a_hc gs_ibl\">(.*)<\/span>/U", $content, $karyaIlmiah);
                // print_r($karyaIlmiah);
                $this->info('Data Ditemukan !');
                $i=0;
                $url="https://scholar.google.com/citations?view_op=medium_photo&user=".$cariId[1];
                $contents = file_get_contents($url);
                Storage::disk('public')->put($cariId[1].".jpg", $contents);
                $query->update(['photo'=>'storage/'.$cariId[1].".jpg"]);
                while ($i < count($karyaIlmiah[1])) {
                    DB::table('data_penelitian')->insert([
                        'url'=>str_replace("&amp;", "&","https://scholar.google.co.id".$karyaIlmiah[1][$i]),
                        'judul'=>htmlspecialchars($karyaIlmiah[2][$i]),
                        'penulis'=>htmlspecialchars($karyaIlmiah[3][$i]),
                        'publis'=>htmlspecialchars(str_replace(array('<span class="gs_oph">','</span>'), "", $karyaIlmiah[4][$i])),
                        'tahun'=>$karyaIlmiah[5][$i],
                        "user_id"=>$id,
                    ]);
                    $i++;
                }
            }
        }
        else {
            $this->error('Data Tidak Ditemukan !');
        }
        $query->update(['proses_update'=>0]);
    }
}
