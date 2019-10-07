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
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login with IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 02:38:09',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/module_generator/delete/14',
                'description' => 'Delete data Data Mengajar at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:02:26',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/add-save',
                'description' => 'Add New Data User Manajemen at Menu Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:30:23',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/7',
                'description' => 'Update data User Manajemen at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:31:22',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/6',
                'description' => 'Update data Data Penelitian at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:36:12',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/1',
                'description' => 'Update data Kategori Dokumen at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:36:28',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/2',
                'description' => 'Update data Dokumen Dosen at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:36:54',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/7',
                'description' => 'Update data User Manajemen at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:37:08',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/4',
                'description' => 'Update data Data Mengajar at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:37:22',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/5',
                'description' => 'Update data Data Pendidikan at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:37:55',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/7',
                'description' => 'Update data User Manajemen at Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 03:39:18',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/menu_management/edit-save/1',
                'description' => 'Memperbaharui data Kategori Dokumen pada Menu Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 04:31:28',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}