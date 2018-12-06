<?php namespace Demin\Vkapi\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateVkpostsTable extends Migration
{
    public function up()
    {
        Schema::create('demin_vkapi_vkposts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 150);
            $table->string('url', 150);
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('demin_vkapi_vkposts');
    }
}
