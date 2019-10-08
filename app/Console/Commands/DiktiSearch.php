<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DiktiSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dikti:search {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cari Profil Dosen';

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
        $url = "https://api-frontend.ristekdikti.go.id/search_dosen";
        $myBody['nama'] = $name;
        $myBody['nip'] = "";
        $myBody['pt'] = "Universitas Islam Negeri Sunan Gunung Djati";
        $myBody['prodi'] = "";
        $response = $client->request('POST', $url, [
            'json' => $myBody
        ]);
        $body = $response->getBody();
        $content = json_decode($body->getContents(), true)['dosen'];
        if(count($content) > 0){
            $url = "https://api-frontend.ristekdikti.go.id/detail_dosen/".$content[0]['id'];
            $response = $client->request('GET', $url);
            $body = $response->getBody();
            $content = json_decode($body->getContents(), true);
            unset($content['dataumum']['foto']);
            $this->info('Data Ditemukan !');
            foreach ($content['datamengajar'] as $value) {
                DB::table('data_mengajar')->insert([
                    "id_smt"=>$value['id_smt'],
                    "nm_kls"=>$value['nm_kls'],
                    "kode_mk"=>$value['kode_mk'],
                    "nm_mk"=>$value['nm_mk'],
                    "namapt"=>$value['namapt'],
                    "user_id"=>$id
                ]);
            }
            foreach ($content['datapendidikan'] as $value) {
                DB::table('data_pendidikan')->insert([
                    "thn_lulus"=>$value['thn_lulus'],
                    "nm_sp_formal"=>$value['nm_sp_formal'],
                    "namajenjang"=>$value['namajenjang'],
                    "singkat_gelar"=>$value['singkat_gelar'],
                    "user_id"=>$id,
                ]);
            }
            $query->update([
                "jenis_kelamin"=>($content['dataumum']['jk'] == "L")?"Laki-Laki":"Perempuan",
                "tmpt_lahir"=>$content['dataumum']['tmpt_lahir'],
                "namapt"=>$content['dataumum']['namapt'],
                "namaprodi"=>$content['dataumum']['namaprodi'],
                "statuskeaktifan"=>$content['dataumum']['statuskeaktifan'],
                "pend_tinggi"=>$content['dataumum']['pend_tinggi'],
                "fungsional"=>$content['dataumum']['fungsional'],
                "ikatankerja"=>$content['dataumum']['ikatankerja']
            ]);
        }
        else{
            $this->error('Data Tidak Ditemukan !');
        }

    }
}
