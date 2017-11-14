<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTemporaryExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_temporary_extra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_temporary_id')->nullable();
            $table->string('service_id')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_price')->nullable();
            $table->string('night',30)->nullable();
            $table->string('count',30)->nullable();
            $table->string('type',30)->nullable();
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
        Schema::dropIfExists('reservation_temporary_extra');
    }
}
