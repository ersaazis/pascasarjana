<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CmsApicustomTableSeeder::class);
        $this->call(CmsApikeyTableSeeder::class);
        $this->call(CmsDashboardTableSeeder::class);
        $this->call(CmsEmailQueuesTableSeeder::class);
        $this->call(CmsEmailTemplatesTableSeeder::class);
        $this->call(CmsLogsTableSeeder::class);
        $this->call(CmsMenusTableSeeder::class);
        $this->call(CmsMenusPrivilegesTableSeeder::class);
        $this->call(CmsModulsTableSeeder::class);
        $this->call(CmsNotificationsTableSeeder::class);
        $this->call(CmsPrivilegesTableSeeder::class);
        $this->call(CmsPrivilegesRolesTableSeeder::class);
        $this->call(CmsSettingsTableSeeder::class);
        $this->call(CmsStatisticComponentsTableSeeder::class);
        $this->call(CmsStatisticsTableSeeder::class);
        $this->call(CmsUsersTableSeeder::class);
    }
}
