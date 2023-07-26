<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSerialNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_serial_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->date('product_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->foreignId('device_id')->constrained('devices_master');
            $table->unsignedBigInteger('updated_by')->nullable(); // Thêm cột updated_by
            $table->unsignedBigInteger('created_by')->nullable(); // Thêm cột created_by
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_serial_numbers');
    }
}
