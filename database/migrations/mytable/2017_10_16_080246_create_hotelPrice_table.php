<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelPrice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_id')->nullable();
            $table->string('hotel_id')->nullable();
            $table->string('room_id')->nullable();
            $table->date('date')->nullable();
            $table->integer('price')->nullable();
            $table->string('count')->nullable();
            $table->string('price_service')->nullable();
            $table->string('max_service_count')->nullable();
            $table->string('Discount_percent_show')->nullable();
            $table->string('Discount_percent_agency')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('hotelPrice');
    }
}
