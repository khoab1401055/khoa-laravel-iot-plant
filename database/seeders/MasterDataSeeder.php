<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Devices Type
        DB::table('master_data')->insert([
            'name' => 'Device Type',
            'alias' => 'main',
            'related_table' => 'devices_type',
            'related_column' => 'table_redirect',
            'status' => 1,
            'description' => 'Mạch chính',

        ]);
        DB::table('master_data')->insert([
            'name' => 'Device Type',
            'alias' => 'module',
            'related_table' => 'devices_type',
            'related_column' => 'table_redirect',
            'status' => 1,
            'description' => 'Mạch module',

        ]);

    // Module Type
        DB::table('master_data')->insert([
            'name' => 'Module Type',
            'alias' => 'Wifi',
            'related_table' => 'devices_module',
            'related_column' => 'table_redirect',
            'status' => 1,
            'description' => 'Module để kết nối wifi',

        ]);

        DB::table('master_data')->insert([
            'name' => 'Module Type',
            'alias' => 'Compatible',
            'related_table' => 'devices_module',
            'related_column' => 'table_redirect',
            'status' => 1,
            'description' => 'Mạch có thể lập trình trên nó',
        ]);
        DB::table('master_data')->insert([
            'name' => 'Module Type',
            'alias' => 'pH',
            'related_table' => 'devices_module',
            'related_column' => 'table_redirect',
            'status' => 1,
            'description' => 'Mạch đo pH',
        ]);
        DB::table('master_data')->insert([
            'name' => 'Module Type',
            'alias' => 'Humidity',
            'related_table' => 'devices_module',
            'related_column' => 'table_redirect',
            'status' => 1,
        ]);

         // Devices Status
        DB::table('master_data')->insert([
            'name' => 'Deivery Status',
            'alias' => 'In Stock',
            'related_table' => 'devices_master',
            'related_column' => 'delivery_status_id',
            'status' => 1,
        ]);
        DB::table('master_data')->insert([
            'name' => 'Deivery Status',
            'alias' => 'In Use',
            'related_table' => 'devices_master',
            'related_column' => 'delivery_status_id',
            'status' => 1,
        ]);
        DB::table('master_data')->insert([
            'name' => 'Deivery Status',
            'alias' => 'In transit',
            'related_table' => 'devices_master',
            'related_column' => 'delivery_status_id',
            'status' => 1,
        ]);
        }
}
