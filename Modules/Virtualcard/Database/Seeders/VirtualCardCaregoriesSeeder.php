<?php

namespace Modules\Virtualcard\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Virtualcard\Entities\VirtualcardCategory;

class VirtualCardCaregoriesSeeder extends Seeder
{
    public function run(): void
    {
        Model::unguard();

        $categories = [
            ['name' => 'Health', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'General', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Services', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Airlines', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Transport', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Accommodation', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Utilities', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Shopping', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Financial', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Furniture', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hardware', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Groceries', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Fuel', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Entertainment', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Software', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Restaurants', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Advertising', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cash', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Education', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Government', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        VirtualcardCategory::insert($categories);
    }
}
