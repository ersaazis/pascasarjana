<?php

use Illuminate\Database\Seeder;

class CmsMenusPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus_privileges')->delete();
        
        \DB::table('cms_menus_privileges')->insert(array (
            0 => 
            array (
                'id' => 3,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 1,
            ),
            1 => 
            array (
                'id' => 27,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 3,
            ),
            2 => 
            array (
                'id' => 28,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 3,
            ),
            3 => 
            array (
                'id' => 29,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 1,
            ),
            4 => 
            array (
                'id' => 31,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 3,
            ),
            5 => 
            array (
                'id' => 32,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 1,
            ),
            6 => 
            array (
                'id' => 38,
                'id_cms_menus' => 9,
                'id_cms_privileges' => 3,
            ),
            7 => 
            array (
                'id' => 39,
                'id_cms_menus' => 9,
                'id_cms_privileges' => 1,
            ),
            8 => 
            array (
                'id' => 40,
                'id_cms_menus' => NULL,
                'id_cms_privileges' => 2,
            ),
            9 => 
            array (
                'id' => 43,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 3,
            ),
            10 => 
            array (
                'id' => 44,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 2,
            ),
            11 => 
            array (
                'id' => 45,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 4,
            ),
            12 => 
            array (
                'id' => 46,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 1,
            ),
            13 => 
            array (
                'id' => 47,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 3,
            ),
            14 => 
            array (
                'id' => 48,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 2,
            ),
            15 => 
            array (
                'id' => 49,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 4,
            ),
            16 => 
            array (
                'id' => 50,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 1,
            ),
            17 => 
            array (
                'id' => 51,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 3,
            ),
            18 => 
            array (
                'id' => 52,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 2,
            ),
            19 => 
            array (
                'id' => 53,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 4,
            ),
            20 => 
            array (
                'id' => 54,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 1,
            ),
            21 => 
            array (
                'id' => 55,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 3,
            ),
            22 => 
            array (
                'id' => 56,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 2,
            ),
            23 => 
            array (
                'id' => 57,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 4,
            ),
            24 => 
            array (
                'id' => 58,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 1,
            ),
            25 => 
            array (
                'id' => 62,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 3,
            ),
            26 => 
            array (
                'id' => 63,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 4,
            ),
            27 => 
            array (
                'id' => 64,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 1,
            ),
            28 => 
            array (
                'id' => 66,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 3,
            ),
            29 => 
            array (
                'id' => 67,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 4,
            ),
            30 => 
            array (
                'id' => 68,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 1,
            ),
            31 => 
            array (
                'id' => 69,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 2,
            ),
            32 => 
            array (
                'id' => 70,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 4,
            ),
        ));
        
        
    }
}