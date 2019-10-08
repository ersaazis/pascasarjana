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
                'created_at' => '2019-10-07 07:56:42',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Bahan Ajar',
                'created_at' => '2019-10-07 07:58:59',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Sertifikat',
                'created_at' => '2019-10-07 07:59:22',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Silabus',
                'created_at' => '2019-10-07 08:00:09',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'RPS',
                'created_at' => '2019-10-07 08:00:27',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Surat Tugas',
                'created_at' => '2019-10-07 08:00:52',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Karya Ilmiah',
                'created_at' => '2019-10-07 08:01:29',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}