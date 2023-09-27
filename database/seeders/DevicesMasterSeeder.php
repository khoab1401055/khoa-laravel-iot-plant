<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices_master')->insert([      
            'sensor_node_id' => 1,
            'device_description_id' => 1,


            
            'weight' => 0.1,
            'is_active' => true,
            'delivery_status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_master')->insert([
            'device_description_id' => 2,

            'sensor_node_id' => 1,
            'weight' => 0.1,
            'is_active' => true,
            'delivery_status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_master')->insert([
            'device_description_id' => 3,

            'sensor_node_id' => 1,
            'weight' => 0.1,
            'is_active' => true,
            'delivery_status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
