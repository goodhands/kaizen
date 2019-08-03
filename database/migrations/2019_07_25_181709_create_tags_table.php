<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('slug');
            $table->timestamps();
        });

        /**
         * Pivot table
         */
        Schema::create('photo_tag', function (Blueprint $table) {
            $table->primary(['tag_id', 'photo_id']);
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('photo_id');
            $table->timestamps();

            //onDelete: of either records, delete the corresponding record on the pivot table
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
