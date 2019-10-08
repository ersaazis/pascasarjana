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
            12 => 
            array (
                'id' => 13,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'admin@crudbooster.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 07:49:04',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/edit-save/1',
                'description' => 'Memperbaharui data Super Admin pada Users Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2019-10/ersa.jpg</td></tr><tr><td>email</td><td>admin@crudbooster.com</td><td>eam24maret@gmail.com</td></tr><tr><td>password</td><td>$2y$10$7XIm92YMO/y5oNbi./biTOwaoOmXEncr9idVRHA9H2YEwIjc/LLTy</td><td>$2y$10$d47lM8V8ghqd41oIaAbHEebYB9xsvZCatdLUbYS9BPProhpi0XSeS</td></tr><tr><td>id_cms_privileges</td><td>1</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr><tr><td>jenis_kelamin</td><td></td><td></td></tr><tr><td>tmpt_lahir</td><td></td><td></td></tr><tr><td>namapt</td><td></td><td></td></tr><tr><td>namaprodi</td><td></td><td></td></tr><tr><td>statuskeaktifan</td><td></td><td></td></tr><tr><td>pend_tinggi</td><td></td><td></td></tr><tr><td>fungsional</td><td></td><td></td></tr><tr><td>ikatankerja</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 07:50:22',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/add-save',
                'description' => 'Tambah data baru Ersa Azis Mansyur pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 07:52:46',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'eam24maret@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-07 07:53:12',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'ersaazis24m@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 07:53:25',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Bahan Ajar pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 07:56:43',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Bahan Ajar pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 07:58:59',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Sertifikat pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 07:59:22',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Silabus pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 08:00:09',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru RPS pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 08:00:27',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Surat Tugas pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 08:00:52',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/kategori_dokumen/add-save',
                'description' => 'Tambah data baru Karya Ilmiah pada Kategori Dokumen',
                'details' => '',
                'id_cms_users' => 2,
                'created_at' => '2019-10-07 08:01:29',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'eam24maret@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 06:35:22',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/edit-save/1',
                'description' => 'Memperbaharui data Super Admin pada Users Management',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$d47lM8V8ghqd41oIaAbHEebYB9xsvZCatdLUbYS9BPProhpi0XSeS</td><td>$2y$10$ZnhxRgqqCQAo4xLCFrgf4u7qJNi8lOMDL.2WUbhwloeCPCVxuRB.G</td></tr><tr><td>id_cms_privileges</td><td>1</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr><tr><td>jenis_kelamin</td><td></td><td></td></tr><tr><td>tmpt_lahir</td><td></td><td></td></tr><tr><td>namapt</td><td></td><td></td></tr><tr><td>namaprodi</td><td></td><td></td></tr><tr><td>statuskeaktifan</td><td></td><td></td></tr><tr><td>pend_tinggi</td><td></td><td></td></tr><tr><td>fungsional</td><td></td><td></td></tr><tr><td>ikatankerja</td><td></td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 06:53:51',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/add',
                'description' => 'Mencoba menambah data Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 07:51:14',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'eam24maret@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 08:25:16',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'cepy@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 4,
                'created_at' => '2019-10-08 08:25:25',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'cepy@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 4,
                'created_at' => '2019-10-08 08:26:16',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'eam24maret@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 15:13:58',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'yana@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 5,
                'created_at' => '2019-10-08 15:49:00',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/logout',
                'description' => 'yana@gmail.com keluar',
                'details' => '',
                'id_cms_users' => 5,
                'created_at' => '2019-10-08 16:23:26',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/login',
                'description' => 'cepy@gmail.com login dengan IP Address 127.0.0.1',
                'details' => '',
                'id_cms_users' => 6,
                'created_at' => '2019-10-08 16:23:37',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/action-selected',
                'description' => 'Menghapus data 6,5 pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 17:51:25',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                'url' => 'http://localhost:8000/admin/users/delete/7',
                'description' => 'Menghapus data Cepy Slamet pada Users Management',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2019-10-08 17:57:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}