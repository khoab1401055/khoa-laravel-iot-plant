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
            'name' => 'Arduino Mega 2560 Compatible',
            'device_id' => 'RMG2560',
            'name_alias' => 'Mạch Mega 2560 CH340',

            'weight' => 0.1,
            'is_active' => true,
            'delivery_status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_master')->insert([
            'name' => 'Wifi ESP8266 NodeMCU Lua D1 Mini',
            'device_id' => 'ESP8266',
            'name_alias' => 'Kit RF Thu Phát Wifi ESP8266 NodeMCU Lua D1 Mini',

            'weight' => 0.1,
            'is_active' => true,
            'delivery_status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
