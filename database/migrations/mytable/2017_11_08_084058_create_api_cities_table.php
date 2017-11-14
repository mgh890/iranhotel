<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('utah')->nullable();
            $table->string('status', 25)->nullable();
            $table->enum('transfer',['0','1'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_cities');
    }
}
