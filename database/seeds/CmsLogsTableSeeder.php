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
                'description' => 'eam24maret@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-01-01 15:30:35',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'eam24maret@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-01-01 15:31:30',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'cepy@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 4,
                'created_at' => '2020-01-01 15:31:59',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/edit-save/4',
                'description' => 'Memperbaharui data Cepy Slamet pada Users Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$ZnhxRgqqCQAo4xLCFrgf4u7qJNi8lOMDL.2WUbhwloeCPCVxuRB.G</td><td></td></tr><tr><td>auto_update</td><td>0</td><td>1</td></tr></tbody></table>',
                'id_cms_users' => 4,
                'created_at' => '2020-01-01 15:33:57',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'cepy@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 4,
                'created_at' => '2020-01-01 15:34:03',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'eam24maret@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-01-01 15:58:35',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/11',
                'description' => 'Memperbaharui data Kerjasama pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>MOU</td><td>Kerjasama</td></tr><tr><td>sorting</td><td>8</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2020-01-01 16:16:05',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'url' => 'http://localhost:8000/admin/mou/action-selected',
                'description' => 'Menghapus data 31,30 pada Kerjasama',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2020-01-01 16:31:29',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}