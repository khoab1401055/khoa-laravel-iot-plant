<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farm_location')->insert([
            'farm_id' => 1,
            'latitude' => 10.6896201,
            'longitude' => 106.5859572,
            'location' => 'B2-1703',
            'address' => '349',
            'street'=>'đường Tân Túc',
            'ward'=>'thị trấn Tân Túc',
            'district'=>'Bình Chánh',
            'city'=>'Thành phố Hồ Chí Minh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
