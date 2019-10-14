<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            /**
             * Now, i'm thinking projects should be available to free users too but only for the first month or 1 project only unless you upgrade
             * A user can invite other photographers to work on a project in pro plan
             */
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->string('cover_url')->nullable();
            $table->string('category');
            $table->integer('user_id');
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
        Schema::dropIfExists('projects');
    }
}
