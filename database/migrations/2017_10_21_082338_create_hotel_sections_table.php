<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelSectionsTable extends Migration
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
            $table->string('fatitle')->nullable();
            $table->string('entitle')->nullable();
            $table->string('capacity')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->text('box_description')->nullable();
            $table->string('bg_photo')->nullable();
            $table->string('capacity2')->nullable();
            $table->string('photo2')->nullable();
            $table->text('description2')->nullable();
            $table->text('box_description2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_sections');
    }
}
