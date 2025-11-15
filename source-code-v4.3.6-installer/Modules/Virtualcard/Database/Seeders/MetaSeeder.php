<?php

namespace Modules\Virtualcard\Database\Seeders;

use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metas = [
            ['url' => 'virtualcard/holders', 'title' => 'Card Holders', 'description' => 'Card holders', 'keywords' => ''],
            ['url' => 'virtualcard/holders/create', 'title' => 'New Card Holder', 'description' => 'New Card Holder', 'keywords' => ''],
            ['url' => 'virtualcard/cards', 'title' => 'Cards', 'description' => 'Cards', 'keywords' => ''],
            ['url' => 'virtualcard/cards/create', 'title' => 'Card Create', 'description' => 'Card Create', 'keywords' => ''],
            ['url' => 'virtualcard/cards/{virtualcard}', 'title' => 'Card Details', 'description' => 'Card Details', 'keywords' => ''],
            ['url' => 'virtualcard/topups', 'title' => 'Topups', 'description' => 'Topups', 'keywords' => ''],
            ['url' => 'virtualcard/topups/create', 'title' => 'Add Funds', 'description' => 'Add Funds', 'keywords' => ''],
            ['url' => 'virtualcard/topups/confirm', 'title' => 'Confirm & Proceed', 'description' => 'Confirm & Proceed', 'keywords' => ''],
            ['url' => 'virtualcard/topups/success', 'title' => 'Topup Success', 'description' => 'Topup Success', 'keywords' => ''],
            ['url' => 'virtualcard/withdrawals', 'title' => 'Withdrawals', 'description' => 'Withdrawals', 'keywords' => ''],
            ['url' => 'virtualcard/withdrawals/create', 'title' => 'Create Withdrawal', 'description' => 'Create Withdrawal', 'keywords' => ''],
            ['url' => 'virtualcard/withdrawals/confirm', 'title' => 'Confirn Withdrawal', 'description' => 'Confirn Withdrawal', 'keywords' => ''],
            ['url' => 'virtualcard/withdrawals/success', 'title' => 'Withdrawal Success', 'description' => 'Withdrawal Success', 'keywords' => ''],
        ];

        \App\Models\Meta::insert($metas);
    }
}
