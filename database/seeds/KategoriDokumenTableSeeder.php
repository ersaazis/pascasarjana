<?php

use Illuminate\Database\Seeder;

class KategoriDokumenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_dokumen')->delete();
        
        \DB::table('kategori_dokumen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Bahan Ajar',
                'created_at' => '2019-11-07 18:56:24',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Sertifikat',
                'created_at' => '2019-11-07 18:56:35',
                'updated_at' => '2019-11-07 18:57:26',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'HKI',
                'created_at' => '2019-11-07 18:56:41',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Silabus',
                'created_at' => '2019-11-07 18:56:49',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'RPS',
                'created_at' => '2019-11-07 18:56:52',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Surat Tugas',
                'created_at' => '2019-11-07 18:56:59',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Artikel',
                'created_at' => '2019-11-07 18:57:10',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Jurnal',
                'created_at' => '2019-11-07 18:57:14',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}