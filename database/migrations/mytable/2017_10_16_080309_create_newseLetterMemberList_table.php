<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewseLetterMemberListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newseLetterMemberList', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('type')->nullable();
            $table->string('checked')->nullable();
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
        Schema::dropIfExists('newseLetterMemberList');
    }
}
