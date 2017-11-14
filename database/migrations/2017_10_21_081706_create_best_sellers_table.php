<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestSellersTable extends Migration
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
            $table->string('city_name')->nullable();
            $table->string('hotel_name_1')->nullable();
            $table->string('hotel_name_2')->nullable();
            $table->string('hotel_name_3')->nullable();
            $table->string('star_1')->nullable();
            $table->string('star_2',10)->nullable();
            $table->string('star_3',10)->nullable();
            $table->string('discount_1')->nullable();
            $table->string('discount_2',10)->nullable();
            $table->string('discount_3',10)->nullable();
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('link_3')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('best_sellers');
    }
}
