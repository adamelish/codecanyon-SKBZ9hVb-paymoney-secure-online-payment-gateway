<?php

namespace Modules\Virtualcard\Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TransactionType::insert(
            [
                ['name' => 'Virtualcard_Topup'],
                ['name' => 'Virtualcard_Withdrawal'],
            ]
        );
    }
}
