<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersPackagesTable extends Migration
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
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('PassportID')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('orders_packages');
    }
}
