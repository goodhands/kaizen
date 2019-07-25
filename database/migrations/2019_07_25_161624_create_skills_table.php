<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            /**
             * In the case a user needs to add a skill that we do 
             * not already have, we want to know the user that created it.
             */
            $table->integer('createdby_user')->nullable(); //user_id | nullable in case it already exists
            $table->string('label');
            $table->string('slug');
            $table->timestamps();
        });

        /**
         * Pivot table
         */
        Schema::create('skill_user',  function (Blueprint $table) {
            $table->primary(['user_id', 'skill_id']);
            $table->integer('skill_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
        Schema::dropIfExists('skill_user');
    }
}
