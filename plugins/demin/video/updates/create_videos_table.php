<?php namespace Demin\Video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateVideosTable extends Migration
{

    public function up()
    {
        Schema::create('demin_video_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 150);
            $table->string('slug', 150);
            $table->string('url_video', 255);
            $table->text('content');
            $table->string('user', 200)->default('admin');
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demin_video_videos');
    }

}
