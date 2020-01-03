<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kategori Dokumen',
                'type' => 'Route',
                'path' => 'AdminKategoriDokumenControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-tags',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2019-10-07 02:54:00',
                'updated_at' => '2019-10-07 04:31:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dokumen Dosen',
                'type' => 'Route',
                'path' => 'AdminDokumenDosenControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-file',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2019-10-07 02:57:05',
                'updated_at' => '2019-12-28 15:28:01',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Data Mengajar',
                'type' => 'Route',
                'path' => 'AdminDataMengajarControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-book',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2019-10-07 03:04:05',
                'updated_at' => '2019-12-28 15:27:52',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Data Pendidikan',
                'type' => 'Route',
                'path' => 'AdminDataPendidikanControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-graduation-cap',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2019-10-07 03:06:25',
                'updated_at' => '2019-12-28 15:27:47',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Data Penelitian',
                'type' => 'Route',
                'path' => 'AdminDataPenelitianControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-thumb-tack',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 6,
                'created_at' => '2019-10-07 03:10:09',
                'updated_at' => '2019-12-28 15:27:33',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'User Manajemen',
                'type' => 'Module',
                'path' => 'users',
                'color' => 'normal',
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2019-10-07 03:30:23',
                'updated_at' => '2019-10-07 03:39:16',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Program Studi',
                'type' => 'Route',
                'path' => 'AdminProgramstudiControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-flag',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 7,
                'created_at' => '2019-11-24 13:46:52',
                'updated_at' => '2019-11-24 13:56:03',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'STATUS ANTRIAN PROSES',
                'type' => 'Statistic',
                'path' => 'statistic_builder/show/status-antrian',
                'color' => 'normal',
                'icon' => 'fa fa-list',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 1,
                'id_cms_privileges' => 1,
                'sorting' => NULL,
                'created_at' => '2019-12-11 00:43:12',
                'updated_at' => '2019-12-11 00:44:56',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Dashboard',
                'type' => 'Statistic',
                'path' => 'statistic_builder/show/dashboard',
                'color' => 'normal',
                'icon' => NULL,
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 1,
                'id_cms_privileges' => 1,
                'sorting' => NULL,
                'created_at' => '2019-12-11 00:46:15',
                'updated_at' => '2019-12-11 00:46:27',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Kerjasama',
                'type' => 'Route',
                'path' => 'AdminMouControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-file-text',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 8,
                'created_at' => '2019-12-26 18:39:43',
                'updated_at' => '2020-01-01 16:16:05',
            ),
        ));
        
        
    }
}