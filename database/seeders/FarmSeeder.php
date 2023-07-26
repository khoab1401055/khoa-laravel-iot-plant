<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farms')->insert([
            'description' => 'Farm trồng trên ban công, chủ yếu trồng các loại cây gia vị.',
            'name_code' => 'FARM001',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => null,
            'customer_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
