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
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$7XIm92YMO/y5oNbi./biTOwaoOmXEncr9idVRHA9H2YEwIjc/LLTy',
                'id_cms_privileges' => 1,
                'created_at' => '2019-10-07 02:37:33',
                'updated_at' => NULL,
                'status' => 'Active',
                'jenis_kelamin' => NULL,
                'tmpt_lahir' => NULL,
                'namapt' => NULL,
                'namaprodi' => NULL,
                'statuskeaktifan' => NULL,
                'pend_tinggi' => NULL,
                'fungsional' => NULL,
                'ikatankerja' => NULL,
            ),
        ));
        
        
    }
}