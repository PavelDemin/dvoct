<?php namespace demin\Eventfish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeminEventfishEventsFishing extends Migration
{
    public function up()
    {
        Schema::create('demin_eventfish_events_fishing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('is_offer')->nullable();
            $table->string('fishing_place');
            $table->integer('type_fishing_id');
            $table->text('description')->nullable();
            $table->integer('lon')->nullable();
            $table->integer('lat')->nullable();
            $table->integer('city_id');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->integer('user_id');
            $table->boolean('status')->nullable();
            $table->boolean('is_verified')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('demin_eventfish_events_fishing');
    }
}
