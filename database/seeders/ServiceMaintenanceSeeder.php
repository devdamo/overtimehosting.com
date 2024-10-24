<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceMaintenance;

class ServiceMaintenanceSeeder extends Seeder
{
    public function run()
    {
        ServiceMaintenance::create([
            'service_name' => 'Web server Plesk',
            'reason' => 'Scheduled update',
            'priority' => 'high',
            'start_date' => now(),
            'end_date' => now()->addHours(2),
        ]);
    }
}
