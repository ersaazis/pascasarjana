<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('iseed',[
            'tables'=>'cms_apicustom,cms_apikey,cms_dashboard,cms_email_queues,cms_email_templates,cms_menus,cms_menus_privileges,cms_moduls,cms_notifications,cms_privileges,cms_privileges_roles,cms_settings,cms_statistic_components,cms_statistics,kategori_dokumen,programstudi',
            '--force'
        ]);
    }
}
