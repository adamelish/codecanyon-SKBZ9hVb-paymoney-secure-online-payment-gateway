<?php

namespace Modules\Virtualcard\Database\Seeders;

use Illuminate\Database\Seeder;

class VirtualcardDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Already installed but running in console
        if (checkDemoEnvironment() && app()->runningInConsole()) {
            $this->call(TransactionTypeSeeder::class);
            $this->call(PreferencesSeeder::class);
            $this->call(VirtualCardCaregoriesSeeder::class);
            $this->call(MetaSeeder::class);
            $this->call(EmailSmsTemplatesTableSeeder::class);
            $this->call(PermissionSeeder::class);
            $this->call(PermissionRoleSeeder::class);
        }
    }
}
