<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->integer('user_id');
            /**
             * This area may be stored in cache so we don't have to compute every time.
             * Also, I might just run a job that will process the image after it has been uploaded.
             */
            $table->string('asset_url'); //aws or whatever
            $table->string('asset_size')->nullable(); //bytes
            $table->string('asset_format')->nullable(); // (any image format or video format.)
            $table->dateTime('last_upload')->nullable(); // this may be computed by a job after every upload. we want to know the last time you posted something!
            $table->string('upload_speed'); // (in microseconds) -> created at upload time. How much time between when you clicked upload and when we received the stuff.
            /**
             * End area
             */
            $table->boolean('was_drafted')->default(0); //was this item saved as draft before it was uploaded?
            $table->boolean('is_project')->default(0); //was this item uploaded as part of a project?
            $table->boolean('is_team')->default(0); //was this picture uploaded as part of a team work or under a team?
            /**
             * Morph:=> for the purpose of adding a project or a single photo
             */
            $table->morphs('experience'); //creates experence_id and experience_type :+> id means {`project_id` in the project table} or {`commons_id` in the commons table}
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
        Schema::dropIfExists('photos');
    }
}
