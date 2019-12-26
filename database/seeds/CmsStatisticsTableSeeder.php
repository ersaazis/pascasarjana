<?php

use Illuminate\Database\Seeder;

class CmsStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistics')->delete();
        
        \DB::table('cms_statistics')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'STATUS ANTRIAN',
                'slug' => 'status-antrian',
                'created_at' => '2019-12-11 00:35:47',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'created_at' => '2019-12-11 00:45:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}