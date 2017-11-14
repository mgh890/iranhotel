<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
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
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table->text('service')->nullable();
            $table->text('commitment')->nullable();
            $table->text('provision')->nullable();
            $table->string('duration')->nullable();
            $table->integer('Price')->nullable();
            $table->string('author')->nullable();
            $table->string('date')->nullable();
            $table->enum('status', ['0', '1'])->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
