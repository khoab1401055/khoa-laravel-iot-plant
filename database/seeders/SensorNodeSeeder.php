<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorNodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensor_nodes')->insert([
            'name' => 'Cụm cảm biến nhà Khoa',
            'description' => 'Sensor đang có thể đo độ pH, kết nối Wifi',
            'farm_id' => 1, // Thay 1 bằng id của farm tương ứng
            'created_by' => 1,
            'updated_by' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sensor_nodes')->insert([
            'name' => 'Sensor Node 2',
            'description' => 'Mô tả Sensor Node 2',
            'farm_id' => null, // Thay 1 bằng id của farm tương ứng
            'created_by' => 1,
            'updated_by' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sensor_nodes')->insert([
            'name' => 'Sensor Node 3',
            'description' => 'Mô tả Sensor Node 3',
            'farm_id' => null, // Thay 1 bằng id của farm tương ứng
            'created_by' => 1,
            'updated_by' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sensor_nodes')->insert([
            'name' => 'Sensor Node 4',
            'description' => 'Mô tả Sensor Node 4',
            'farm_id' => null, // Thay 1 bằng id của farm tương ứng
            'created_by' => 1,
            'updated_by' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
