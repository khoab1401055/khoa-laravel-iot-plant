<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Phan Tân Khoa',
            'email' => 'ptkhoa2110@gmail.com',
            'phone' => '0769948805',
            'address' => 'Tân Lộc, Thốt Nốt, Cần Thơ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
