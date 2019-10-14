<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('photo_id');
            $table->boolean('is_loggedin');
            $table->string('client_id')->unique(); //client id here is the 2-year old cookie we store on the computer of everyone that visits our site!
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
        Schema::dropIfExists('views');
    }
}
