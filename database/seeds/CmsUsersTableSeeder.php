<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => 'uploads/1/2019-10/ersa.jpg',
                'email' => 'eam24maret@gmail.com',
                'password' => '$2y$10$ZnhxRgqqCQAo4xLCFrgf4u7qJNi8lOMDL.2WUbhwloeCPCVxuRB.G',
                'id_cms_privileges' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => '2019-10-08 06:53:50',
                'status' => 'Active',
                'jenis_kelamin' => NULL,
                'tmpt_lahir' => NULL,
                'namapt' => NULL,
                'namaprodi' => NULL,
                'statuskeaktifan' => NULL,
                'pend_tinggi' => NULL,
                'fungsional' => NULL,
                'ikatankerja' => NULL,
                'proses_update' => 1,
                'auto_update' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ersa Azis Mansyur',
                'photo' => 'uploads/1/2019-10/a.jpg',
                'email' => 'ersaazis24m@gmail.com',
                'password' => '$2y$10$5.tTOi0oUTH0fAfjmSf04.j31tOKWMIT2aWwJqntAhQwDyCbL7OyG',
                'id_cms_privileges' => 3,
                'created_at' => '2019-10-07 07:52:46',
                'updated_at' => NULL,
                'status' => NULL,
                'jenis_kelamin' => NULL,
                'tmpt_lahir' => NULL,
                'namapt' => NULL,
                'namaprodi' => NULL,
                'statuskeaktifan' => NULL,
                'pend_tinggi' => NULL,
                'fungsional' => NULL,
                'ikatankerja' => NULL,
                'proses_update' => 1,
                'auto_update' => 0,
            ),
        ));
        
        
    }
}