<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_hotel_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel_id')->nullable();
            $table->string('bed_type')->nullable();
            $table->string('capacity')->nullable();
            $table->string('service_id')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_hotel_rooms');
    }
}
