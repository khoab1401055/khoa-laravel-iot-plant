<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DevicesDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_description', function (Blueprint $table) {
            $table->id();
            $table->string('device_code');
            $table->text('description')->nullable();
            $table->string('name')->nullable();            
            $table->string('name_alias')->nullable();
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
        Schema::dropIfExists('devices_description');

    }
}
