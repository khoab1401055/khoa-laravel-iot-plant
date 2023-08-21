<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farm_id');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('location');
            $table->string('address');
            $table->string('street');
            $table->string('district');
            $table->string('ward');
            $table->string('city');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unsignedBigInteger('updated_by')->nullable(); // Thêm cột updated_by
            $table->unsignedBigInteger('created_by')->nullable(); // Thêm cột created_by
            // $table->foreign('device_id')->references('id')->on('devices_master')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farm_location');
    }
}
