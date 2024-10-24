<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;
use App\Models\Filter;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Seller::create(['name' => 'OvertimeHosting']);
        Seller::create(['name' => 'Shadow Hosting']);

        Filter::create(['name' => 'AMD']);
        Filter::create(['name' => 'INTEL']);
        Filter::create(['name' => 'ARM']);
    }
}
