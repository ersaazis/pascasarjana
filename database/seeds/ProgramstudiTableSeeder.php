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
                'nama' => 'Ilmu Hukum',
                'created_at' => '2019-11-24 13:51:39',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Ekonomi Syari’ah',
                'created_at' => '2019-11-24 13:51:54',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Religious Studies',
                'created_at' => '2019-11-24 13:52:07',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Pendidikan Agama Islam',
                'created_at' => '2019-11-24 13:52:17',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'nama' => 'Hukum Keluarga (AS)',
                'created_at' => '2019-11-24 13:52:27',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Manajemen Pendidikan Islam',
                'created_at' => '2019-11-24 13:52:35',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Komunikasi dan Penyiaran Islam',
                'created_at' => '2019-11-24 13:52:45',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Al-Qur’an dan Tafsir',
                'created_at' => '2019-11-24 13:52:51',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Al-Hadits',
                'created_at' => '2019-11-24 13:52:58',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'Pendidikan Bahasa Arab',
                'created_at' => '2019-11-24 13:53:04',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'Hukum Ekonomi Syari’ah',
                'created_at' => '2019-11-24 13:53:11',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'Sejarah Kebudayaan Islam',
                'created_at' => '2019-11-24 13:53:18',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}