<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($table)
    {
        Schema::create($table, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hotel_id')->nullable();
            $table->string('faname')->nullable();
            $table->string('enname')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('star')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->string('mapx')->nullable();
            $table->string('mapy')->nullable();
            $table->string('hotelfacilities_id')->nullable();
            $table->string('roomfacilities_id')->nullable();
            $table->string('hotelservice_id')->nullable();
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_infos');
    }
}
