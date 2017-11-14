<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiHotelNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_hotel_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('utah')->nullable();
            $table->string('city_id')->nullable();
            $table->string('status', 25)->nullable();
            $table->string('city_name')->nullable();
            $table->string('priority')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_hotel_names');
    }
}
