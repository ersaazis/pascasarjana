<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DiktiSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dikti:search {name}';

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
        $name = $this->argument('name');

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
        $hasil=array();
        if(count($content) > 0){
            $hasil['hasil']=true;
            $url = "https://api-frontend.ristekdikti.go.id/detail_dosen/".$content[0]['id'];
            $response = $client->request('GET', $url);
            $body = $response->getBody();
            $content = json_decode($body->getContents(), true);
            unset($content['dataumum']['foto']);
            $hasil['data']=$content;
        }
        else{
            $hasil['hasil']=false;
            $hasil['data']=array();
        }

        print_r($hasil);
    }
}
