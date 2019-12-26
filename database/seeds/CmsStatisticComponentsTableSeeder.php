<?php

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_statistics' => 3,
                'componentID' => '198bbe6f0f89707bf9b6a9224ba3a9b4',
                'component_name' => 'smallbox',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Jumlah Antrian","icon":"list","color":"bg-green","link":"#","sql":"select count(*) from jobs"}',
                'created_at' => '2019-12-11 00:36:21',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_statistics' => 3,
                'componentID' => 'e0df761ae71dae437c514d25b50542b2',
                'component_name' => 'table',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"Status Antrian","sql":"select id as `ID`, queue as `Jenis Antrian`, attempts as `Jumlah Pemrosesan` from jobs;"}',
                'created_at' => '2019-12-11 00:36:23',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_cms_statistics' => 3,
                'componentID' => '5d6e4240f45e60522269fcfd3f4174b2',
                'component_name' => 'panelcustom',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"Status Proses","type":"route","value":"statusproses"}',
                'created_at' => '2019-12-11 01:29:57',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}