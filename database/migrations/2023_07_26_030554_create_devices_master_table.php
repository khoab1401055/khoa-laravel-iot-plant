<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_master', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('device_id');
            $table->string('name_alias')->nullable();
            $table->float('weight')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('delivery_status_id')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable(); // Thêm cột updated_by
            $table->unsignedBigInteger('created_by')->nullable(); // Thêm cột created_by
            $table->timestamps();
            $table->foreign('delivery_status_id')->references('id')->on('master_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices_master');
    }
}
