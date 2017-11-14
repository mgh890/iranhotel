<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTemporaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_temporary', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('payment_start',10)->nullable();
            $table->string('hotel_id')->nullable();
            $table->string('transfer_type',20)->nullable();
            $table->string('enter_number')->nullable();
            $table->string('enter_time')->nullable();
            $table->string('out_number')->nullable();
            $table->string('out_time')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('reservation_temporary');
    }
}
