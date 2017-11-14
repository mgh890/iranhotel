<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTemporaryDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_temporary_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_temporary_id')->nullable();
            $table->string('hotel_id')->nullable();
            $table->string('room_id')->nullable();
            $table->string('room_name')->nullable();
            $table->string('room_count')->nullable();
            $table->date('date')->nullable();
            $table->string('room_price')->nullable();
            $table->string('service_room_price')->nullable();
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
        Schema::dropIfExists('reservation_temporary_detail');
    }
}
