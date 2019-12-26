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
                'password' => '$2y$10$yOH214H4KlY5EFUlSSFwNuQMNa2fceQ0Y2i3uD5xEEw4dZ43mIZjW',
                'id_cms_privileges' => 1,
                'created_at' => '2019-10-06 19:37:33',
                'updated_at' => '2019-11-24 06:44:43',
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
                'url_schollar' => '',
                'url_dikti' => '',
                'nip' => NULL,
                'nidn' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'bidang_keahlian' => NULL,
                'id_dikti' => NULL,
                'id_schollar' => NULL,
                'id_scopus' => NULL,
                'id_orchid' => NULL,
                'programstudi_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ersa Azis Mansyur',
                'photo' => 'uploads/1/2019-10/a.jpg',
                'email' => 'ersaazis24m@gmail.com',
                'password' => '$2y$10$WBu2OCWv0Mc9FyaWLDI32e1rSnVwPCaPKeLZYpeP.oyjtpcARHRkC',
                'id_cms_privileges' => 3,
                'created_at' => '2019-10-07 00:52:46',
                'updated_at' => '2019-11-24 04:54:16',
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
                'url_schollar' => '',
                'url_dikti' => '',
                'nip' => NULL,
                'nidn' => NULL,
                'tanggal_lahir' => NULL,
                'alamat' => NULL,
                'bidang_keahlian' => NULL,
                'id_dikti' => NULL,
                'id_schollar' => NULL,
                'id_scopus' => NULL,
                'id_orchid' => NULL,
                'programstudi_id' => NULL,
            ),
        ));
        
        
    }
}