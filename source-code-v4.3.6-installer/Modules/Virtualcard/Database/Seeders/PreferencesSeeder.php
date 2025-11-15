<?php

namespace Modules\Virtualcard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PreferencesSeeder extends Seeder
{
    public function run(): void
    {
        Model::unguard();

        $preferencesData = [
            ['category' => 'virtualcard', 'field' => 'kyc', 'value' => 'No'],
            ['category' => 'virtualcard', 'field' => 'card_creator', 'value' => 'Both'],
            [
                'category' => 'virtualcard', 
                'field' => 'holder_limit', 
                'value' => checkDemoEnvironment() ? 5 : 3
            ],
            [
                'category' => 'virtualcard', 
                'field' => 'card_limit', 
                'value' => checkDemoEnvironment() ? 10 : 5
            ],
            ['category' => 'virtualcard', 'field' => 'category', 'value' => 'virtual_card']
        ];

        \App\Models\Preference::insert($preferencesData);
    }
}
