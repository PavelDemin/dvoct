<?php namespace Demin\Eventfish\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('demin_eventfish_cities', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('country_id');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('region');
            $table->integer('biggest_city');
        });
    }

    public function down()
    {
        Schema::dropIfExists('demin_eventfish_cities');
    }
}
