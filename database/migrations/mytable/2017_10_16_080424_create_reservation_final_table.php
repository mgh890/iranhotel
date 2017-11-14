<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_final', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('voucher')->nullable();
            $table->string('total_price')->nullable();
            $table->string('hotel_name')->nullable();
            $table->string('pay_type',100)->nullable();
            $table->string('refid')->nullable();
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
        Schema::dropIfExists('reservation_final');
    }
}
