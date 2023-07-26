<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerialNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_serial_numbers')->insert([
            'serial_number' => 'SN001',
            'product_date' => '2023-07-01',
            'expiration_date' => '2025-07-01',
            'device_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
