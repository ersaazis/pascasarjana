<?php

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'ersaazis24m@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-12-26 18:18:37',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}