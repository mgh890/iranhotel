<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
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
            $table->string('phone')->nullable();
            $table->string('social_name')->nullable();
            $table->string('social_link')->nullable();
            $table->string('menu_name')->nullable();
            $table->string('menu_link')->nullable();
            $table->string('city_id')->nullable();
            $table->string('type')->nullable();
            $table->string('status',11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
