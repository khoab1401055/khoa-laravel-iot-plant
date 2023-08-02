<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices_module')->insert([
            'master_data_id' => 4,
            'devices_master_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_module')->insert([
            'master_data_id' => 4,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_module')->insert([
            'master_data_id' => 3,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_module')->insert([
            'master_data_id' => 1,
            'devices_master_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_module')->insert([
            'master_data_id' => 1,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_module')->insert([
            'master_data_id' => 2,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
