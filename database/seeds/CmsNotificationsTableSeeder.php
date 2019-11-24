<?php

use Illuminate\Database\Seeder;

class CmsNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_notifications')->delete();
        
        \DB::table('cms_notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_users' => 2,
            'content' => '(V) Schollar Google untuk Cepy Slamet',
                'url' => 'http://localhost/admin/users/detail/3',
                'is_read' => 1,
                'created_at' => '2019-11-07 05:44:10',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_users' => 2,
            'content' => '(V) Forlap Ristekdikti untuk CEPY SLAMET',
                'url' => 'http://localhost/admin/users/detail/3',
                'is_read' => 1,
                'created_at' => '2019-11-07 05:44:12',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_cms_users' => 2,
            'content' => '(V) Schollar Google untuk Cepy Slamet',
                'url' => 'http://localhost/admin/users/detail/4',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:48:55',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_cms_users' => 2,
            'content' => '(V) Forlap Ristekdikti untuk CEPY SLAMET',
                'url' => 'http://localhost/admin/users/detail/4',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:49:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_cms_users' => 2,
            'content' => '(V) Schollar Google untuk asdasd',
                'url' => 'http://localhost/admin/users/detail/5',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:49:10',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_cms_users' => 2,
            'content' => '(X) Forlap Ristekdikti untuk',
                'url' => 'http://localhost/admin/users/detail/5',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:49:14',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_cms_users' => 2,
            'content' => '(V) Schollar Google untuk Cepy Slamet',
                'url' => 'http://localhost/admin/users/detail/6',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:51:42',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_cms_users' => 2,
            'content' => '(V) Forlap Ristekdikti untuk CEPY SLAMET',
                'url' => 'http://localhost/admin/users/detail/6',
                'is_read' => 1,
                'created_at' => '2019-11-07 06:51:43',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_cms_users' => 2,
            'content' => '(V) Schollar Google untuk Ali Ramdhani',
                'url' => 'http://localhost/admin/users/detail/7',
                'is_read' => 1,
                'created_at' => '2019-11-07 18:52:05',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_cms_users' => 2,
            'content' => '(V) Forlap Ristekdikti untuk MUHAMMAD ALI RAMDHANI',
                'url' => 'http://localhost/admin/users/detail/7',
                'is_read' => 1,
                'created_at' => '2019-11-07 18:52:07',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}