<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices_type')->insert([
            'master_data_id' => 1,
            'devices_master_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_type')->insert([
            'master_data_id' => 1,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('devices_type')->insert([
            'master_data_id' => 2,
            'devices_master_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
