<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelCommentsTable extends Migration
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
            $table->string('hotel_id')->nullable();
            $table->string('plus',10)->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('star')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('status',25)->nullable();
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
        Schema::dropIfExists('hotel_comments');
    }
}
