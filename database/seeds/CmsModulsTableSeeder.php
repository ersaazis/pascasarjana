<?php

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kategori Dokumen',
                'icon' => 'fa fa-tags',
                'path' => 'kategori_dokumen',
                'table_name' => 'kategori_dokumen',
                'controller' => 'AdminKategoriDokumenController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 02:54:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Dokumen Dosen',
                'icon' => 'fa fa-file',
                'path' => 'dokumen_dosen',
                'table_name' => 'dokumen_dosen',
                'controller' => 'AdminDokumenDosenController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 02:57:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Data Mengajar',
                'icon' => 'fa fa-glass',
                'path' => 'data_mengajar',
                'table_name' => 'data_mengajar',
                'controller' => 'AdminDataMengajarController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 03:01:34',
                'updated_at' => NULL,
                'deleted_at' => '2019-10-07 03:02:27',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Data Mengajar',
                'icon' => 'fa fa-book',
                'path' => 'data_mengajar',
                'table_name' => 'data_mengajar',
                'controller' => 'AdminDataMengajarController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 03:04:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Data Pendidikan',
                'icon' => 'fa fa-graduation-cap',
                'path' => 'data_pendidikan',
                'table_name' => 'data_pendidikan',
                'controller' => 'AdminDataPendidikanController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 03:06:24',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Data Penelitian',
                'icon' => 'fa fa-thumb-tack',
                'path' => 'data_penelitian',
                'table_name' => 'data_penelitian',
                'controller' => 'AdminDataPenelitianController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2019-10-07 03:10:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}