<?php namespace Demin\Report\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostReportsTable extends Migration
{

    public function up()
    {
        Schema::create('demin_report_post_reports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 150);
            $table->string('slug', 150);
            $table->string('url_to_forum', 255);
            $table->text('content');
            $table->integer('count_views')->default(0);;
            $table->string('user', 200)->default('admin');
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->double('lon',8,5)->nullable();;
            $table->double('lat',7,5)->nullable();;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demin_report_post_reports');
    }

}
