<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRulesTable extends Migration
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
            $table->text('person')->nullable();
            $table->text('child')->nullable();
            $table->text('inter_out')->nullable();
            $table->text('cancel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rules');
    }
}
