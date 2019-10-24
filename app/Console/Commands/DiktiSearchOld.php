<?php

namespace App\Console\Commands;

use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Illuminate\Console\Command;
use DB;

class DiktiSearchOld extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'diktiold:search {id} {id_user=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mencari Data Dikti Yang lama';

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
    private function getDosen($url,$id){
		$hasil=array(
			"profil"=>array(),
			"foto"=>"",
			"riwayat_pendidikan"=>array(),
			"riwayat_mengajar"=>array()
		);
		
		$data=file_get_contents($url);
		//profil
        preg_match("/<table class='table1'>(.*?)<\/table>/si", $data, $profilALL);
		preg_match_all("/<td>(.*)<\/td>/U", $profilALL[1], $profil);
        
		//foto
		preg_match("/<img class='img-polaroid' src='(.*?)' \/>/si", $data, $foto);
		//pendidikan
		preg_match("/<div class='tab-pane' id='riwayatpendidikan'>.*?<table class='table table-bordered'>(.*?)<\/table>.*?<\/div>/si", $data, $riwayat_pendidikan);
		preg_match_all("/<tr class='tmiddle'>.*?<td class='tcenter'>.*?<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<td class='tcenter'>(.*?)<\/td>.*?<\/tr>/si", $riwayat_pendidikan[1], $riwayat_pendidikan);
		//mengajar
		preg_match("/<div class='tab-pane' id='riwayatmengajar'>.*?<table class=\"table table-bordered\">(.*?)<\/table>.*?<\/div>/si", $data, $riwayat_mengajar);
		preg_match_all('/<tr class="tmiddle">.*?<td class="tcenter">.*?<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<td>(.*?)<\/td>.*?<\/tr>/si', $riwayat_mengajar[1], $riwayat_mengajar);
		$hasil["profil"]=$profil[1];
		$hasil["foto"]=$foto[1];
		for($i=0;$i<count($riwayat_pendidikan[1]);$i++){
			$hasil["riwayat_pendidikan"][]=array(
				'dosen_id'=>$id,
				'perguruan_tinggi'=>$riwayat_pendidikan[1][$i],
				'gelar'=>$riwayat_pendidikan[2][$i],
				'tgl_ijazah'=>is_numeric($riwayat_pendidikan[3][$i])?$riwayat_pendidikan[3][$i]:0,
				'jenjang'=>$riwayat_pendidikan[4][$i]
			);
		}
		for($i=0;$i<count($riwayat_mengajar[1]);$i++){
			$hasil["riwayat_mengajar"][]=array(
				'dosen_id'=>$id,
				'semester'=>$riwayat_mengajar[1][$i],
				'kd_matkul'=>$riwayat_mengajar[2][$i],
				'nm_matkul'=>htmlspecialchars($riwayat_mengajar[3][$i]),
				'kd_kelas'=>$riwayat_mengajar[4][$i],
				'perguruan_tinggi'=>$riwayat_mengajar[5][$i]
			);
		}
		return $hasil;
    }
    public function handle()
    {
        $config=array();
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
            $client = new \GuzzleHttp\Client(['cookies' => true]);
            $url = "https://forlap.ristekdikti.go.id/dosen/search";
            $response = $client->request('POST', $url, [
                "form_params" =>[
                    "captcha_value_1"=>"1",
                    "captcha_value_2"=>"2",
                    "dummy"=>"201004   Universitas Islam Negeri Sunan Gunung Djati",
                    "id_sp"=>"1A7732DB-E0B5-47C9-AA8A-CDC9A392BF49",
                    "keyword"=>$name,
                    "kode_pengaman"=>"3"
                ]
            ]);
            $body = $response->getBody();
            $content = $body->getContents();
            $cekUser=preg_match_all("/<a href=\"https:\/\/forlap.ristekdikti.go.id\/dosen\/detail\/(.*)\">(.*)<\/a>/U", $content, $user);
            if($cekUser){
                $url="https://forlap.ristekdikti.go.id/dosen/detail/".$user[1][0];
                $dataDosen=$this->getDosen($url,$id);
                // print_r($dataDosen);
                foreach ($dataDosen['riwayat_mengajar'] as $value) {
                    DB::table('data_mengajar')->insert([
                        "id_smt"=>$value['semester'],
                        "nm_kls"=>$value['kd_kelas'],
                        "kode_mk"=>$value['kd_matkul'],
                        "nm_mk"=>$value['nm_matkul'],
                        "namapt"=>$value['perguruan_tinggi'],
                        "user_id"=>$id
                    ]);
                }
                foreach ($dataDosen['riwayat_pendidikan'] as $value) {
                    DB::table('data_pendidikan')->insert([
                        "thn_lulus"=>$value['tgl_ijazah'],
                        "nm_sp_formal"=>$value['perguruan_tinggi'],
                        "namajenjang"=>$value['jenjang'],
                        "singkat_gelar"=>$value['gelar'],
                        "user_id"=>$id,
                    ]);
                }
                $query->update([
                    "name"=>$dataDosen['profil'][0],
                    "jenis_kelamin"=>$dataDosen['profil'][3],
                    "tmpt_lahir"=>NULL,
                    "namapt"=>$dataDosen['profil'][1],
                    "namaprodi"=>$dataDosen['profil'][2],
                    "statuskeaktifan"=>$dataDosen['profil'][7],
                    "pend_tinggi"=>$dataDosen['profil'][5],
                    "fungsional"=>$dataDosen['profil'][4],
                    "ikatankerja"=>$dataDosen['profil'][6]
                ]);
                $config['content'] = "(V) Forlap Ristekdikti untuk ".$dataDosen['profil'][0];
                $config['to'] = CRUDBooster::adminPath('users/detail/'.$id);
                $config['id_cms_users'] = [$id_user];
            }
            else {
                $config['content'] = "(X) Forlap Ristekdikti untuk".$dataDosen['profil'][0];
                $config['to'] = CRUDBooster::adminPath('users/detail/'.$id);
                $config['id_cms_users'] = [$id_user];
            }
        }
        if($id_user != 0)
            CRUDBooster::sendNotification($config);
    }
}
