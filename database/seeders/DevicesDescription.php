<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesDescription extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices_description')->insert([
            'name' => 'Arduino Mega 2560 Compatible',
            'device_code' => 'RMG2560',
            'name_alias' => 'Mạch Mega 2560 CH340',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_description')->insert([
            'name' => 'Wifi ESP8266 NodeMCU Lua D1 Mini',
            'device_code' => 'ESP8266',
            'name_alias' => 'Kit RF Thu Phát Wifi ESP8266 NodeMCU Lua D1 Mini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('devices_description')->insert([
            'name' => 'Soil Moisture Sensor',
            'device_code' => 'SMS',
            'name_alias' => 'Cảm Biến Độ Ẩm Đất Soil Moisture Sensor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      


      
    }
}
