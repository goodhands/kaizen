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
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('country', 20)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('bio', 200)->nullable();
            $table->string('account_type', 10); //Team, Free or Pro
            $table->string('avatar', 50)->nullable();
            $table->string('profession', 30)->nullable(); //Child Photographer, Lifestyle Photographer, etc
            $table->boolean('is_pro'); // Bool; Pro or !Pro
            $table->rememberToken()->nullable();
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
