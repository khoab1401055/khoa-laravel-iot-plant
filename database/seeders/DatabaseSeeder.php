<?php

namespace Database\Seeders;

use App\Http\Controllers\HomeController;
use App\Http\Livewire\FarmsList;
use App\Models\LoggableModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(HomeController $homeController)
    {
        try {
            DB::beginTransaction();

            $this->call(RolesAndPermissionsSeeder::class);
            $this->call(MasterDataSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(DevicesMasterSeeder::class);
            $this->call(SensorNodeSeeder::class);
            $this->call(DeviceLocationSeeder::class);
            $this->call(SerialNumbersSeeder::class);
            $this->call(DevicesTypeSeeder::class);
            $this->call(DevicesModuleSeeder::class);
            $this->call(CustomerSeeder::class);
            $this->call(FarmSeeder::class);
            $this->call(TranslationsSeeder::class);
            $this->call(TranslationsSeederVi::class);
            $homeController->provincesAPI();
            DB::commit();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            DB::rollBack();
        }
    }
}
