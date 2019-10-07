<?php

use Illuminate\Database\Seeder;

class CmsEmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_email_templates')->delete();
        
        \DB::table('cms_email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Email Template Forgot Password Backend',
                'slug' => 'forgot_password_backend',
                'subject' => NULL,
                'content' => '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>',
                'description' => '[password]',
                'from_name' => 'System',
                'from_email' => 'system@crudbooster.com',
                'cc_email' => NULL,
                'created_at' => '2019-10-07 02:37:35',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}