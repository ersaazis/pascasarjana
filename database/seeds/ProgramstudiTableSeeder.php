<?php

use Illuminate\Database\Seeder;

class ProgramstudiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('programstudi')->delete();
        
        \DB::table('programstudi')->insert(array (
            0 => 
            array (
                'id' => 1,
            'nama' => 'Ilmu Hukum (S2)',
                'created_at' => '2019-11-24 13:51:39',
                'updated_at' => '2019-11-26 11:39:44',
            ),
            1 => 
            array (
                'id' => 2,
            'nama' => 'Ekonomi Islam (S2)',
                'created_at' => '2019-11-24 13:51:54',
                'updated_at' => '2019-11-26 11:39:24',
            ),
            2 => 
            array (
                'id' => 3,
            'nama' => 'Studi Agama-Agama (S3)',
                'created_at' => '2019-11-24 13:52:07',
                'updated_at' => '2019-11-26 11:39:01',
            ),
            3 => 
            array (
                'id' => 4,
            'nama' => 'Pendidikan Agama Islam (S2)',
                'created_at' => '2019-11-24 13:52:17',
                'updated_at' => '2019-11-26 11:38:41',
            ),
            4 => 
            array (
                'id' => 5,
            'nama' => 'Hukum Keluarga (S2)',
                'created_at' => '2019-11-24 13:52:27',
                'updated_at' => '2019-11-26 11:38:19',
            ),
            5 => 
            array (
                'id' => 6,
            'nama' => 'Manajemen Pendidikan Islam (S2)',
                'created_at' => '2019-11-24 13:52:35',
                'updated_at' => '2019-11-26 11:38:07',
            ),
            6 => 
            array (
                'id' => 7,
            'nama' => 'Komunikasi Penyiaran Islam (S2)',
                'created_at' => '2019-11-24 13:52:45',
                'updated_at' => '2019-11-26 11:37:53',
            ),
            7 => 
            array (
                'id' => 8,
            'nama' => 'Ilmu Al-Qur’an dan Tafsir (S2)',
                'created_at' => '2019-11-24 13:52:51',
                'updated_at' => '2019-11-26 11:37:37',
            ),
            8 => 
            array (
                'id' => 9,
            'nama' => 'Ilmu Hadits (S2)',
                'created_at' => '2019-11-24 13:52:58',
                'updated_at' => '2019-11-26 11:37:26',
            ),
            9 => 
            array (
                'id' => 10,
            'nama' => 'Pendidikan Bahasa Arab (S2)',
                'created_at' => '2019-11-24 13:53:04',
                'updated_at' => '2019-11-26 11:37:10',
            ),
            10 => 
            array (
                'id' => 11,
            'nama' => 'Hukum Ekonomi Syari’ah (S2)',
                'created_at' => '2019-11-24 13:53:11',
                'updated_at' => '2019-11-26 11:36:57',
            ),
            11 => 
            array (
                'id' => 12,
            'nama' => 'Sejarah Peradaban Islam (S2)',
                'created_at' => '2019-11-24 13:53:18',
                'updated_at' => '2019-11-26 11:36:48',
            ),
            12 => 
            array (
                'id' => 13,
            'nama' => 'Pendidikan Islam (S3)',
                'created_at' => '2019-11-26 11:40:24',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
            'nama' => 'Hukum Islam (S3)',
                'created_at' => '2019-11-26 11:40:31',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
            'nama' => 'Studi Agama-Agama (S2)',
                'created_at' => '2019-11-26 11:41:11',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}