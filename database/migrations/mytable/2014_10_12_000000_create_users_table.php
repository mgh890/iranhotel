<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',100)->unique();
            $table->string('role');
            $table->string('password');
            $table->string('username')->nullable();
            $table->enum('status',[0,1])->default('1');
            $table->integer('lang_id')->nullable();
            $table->integer('is_admin')->nullable();
            $table->string('profile_photo')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('location_address')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('sex')->nullable();
            $table->string('job')->nullable();
            $table->string('lname')->nullable();
            $table->string('country')->nullable();
            $table->string('age')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
