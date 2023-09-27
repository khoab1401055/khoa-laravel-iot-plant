<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_module', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_data_id');
            $table->unsignedBigInteger('devices_master_id');
            $table->text('description')->nullable();

            // Thêm các trường khác mà bạn muốn lưu trong bảng devices_type
            $table->timestamps();

            $table->foreign('master_data_id')->references('id')->on('master_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices_module');
    }
}
