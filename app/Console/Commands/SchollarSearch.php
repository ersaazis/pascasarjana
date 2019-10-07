<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SchollarSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scholar:search {name}';

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
        $name = $this->argument('name');
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
                $i=0;
                $hasil['hasil']=true;
                $hasil['foto']="https://scholar.google.com/citations?view_op=medium_photo&user=".$cariId[1];
                while ($i < count($karyaIlmiah[1])) {
                    $hasil['data'][$i]['url']=str_replace("&amp;", "&","https://scholar.google.co.id".$karyaIlmiah[1][$i]);
                    $hasil['data'][$i]['judul']=$karyaIlmiah[2][$i];
                    $hasil['data'][$i]['penulis']=$karyaIlmiah[3][$i];
                    $hasil['data'][$i]['publis']=str_replace(array('<span class="gs_oph">','</span>'), "", $karyaIlmiah[4][$i]);
                    $hasil['data'][$i]['tahun']=$karyaIlmiah[5][$i];
                    $i++;
                }
            }
        }
        else {
            $hasil['hasil']=false;
            $hasil['foto']=null;
            $hasil['data']=array();
        }
        print_r($hasil);
    }
}
