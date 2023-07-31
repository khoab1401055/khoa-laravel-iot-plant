<?php

namespace Database\Seeders;

use App\Http\Livewire\FarmsList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesAndPermissionsSeeder::class);

        $this->call(MasterDataSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(DevicesMasterSeeder::class);

        $this->call(DeviceLocationSeeder::class);
        $this->call(SerialNumbersSeeder::class);
        $this->call(DevicesTypeSeeder::class);
        $this->call(DevicesModuleSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(FarmSeeder::class);

        // use iotplant;
        // SELECT devices_master.name, devices_master.device_id, devices_master.name_alias,Type_Table.type_name,Module_Table.module_name FROM devices_master
        // JOIN (Select alias as type_name, devices_master_id FROM master_data JOIN devices_type ON devices_type.master_data_id = master_data.id ) Type_Table
        //  ON Type_Table.devices_master_id = devices_master.id
        // JOIN (Select alias as module_name, devices_master_id FROM master_data JOIN devices_module ON devices_module.master_data_id = master_data.id ) Module_Table
        //  ON Module_Table.devices_master_id = devices_master.id




    }
}
