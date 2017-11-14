<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @param $lang
     * @return void
     */
    public function up($lang)
    {
        Schema::create($lang."_tabel", function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cellphone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($lang)
    {
        Schema::dropIfExists($lang."_tabel");
    }
}
