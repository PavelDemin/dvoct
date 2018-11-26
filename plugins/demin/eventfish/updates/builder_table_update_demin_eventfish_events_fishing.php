<?php namespace demin\Eventfish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeminEventfishEventsFishing extends Migration
{
    public function up()
    {
        Schema::table('demin_eventfish_events_fishing', function($table)
        {
            $table->boolean('is_offer')->nullable(false)->change();
            $table->string('fishing_place', 255)->nullable()->change();
            $table->text('description')->nullable(false)->change();
            $table->integer('lon')->nullable()->change();
            $table->integer('lat')->nullable()->change();
            $table->dateTime('start_date')->nullable(false)->change();
            $table->dateTime('end_date')->nullable(false)->change();
            $table->boolean('status')->nullable(false)->change();
            $table->boolean('is_verified')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('demin_eventfish_events_fishing', function($table)
        {
            $table->boolean('is_offer')->nullable()->change();
            $table->string('fishing_place', 255)->nullable(false)->change();
            $table->text('description')->nullable()->change();
            $table->integer('lon')->nullable(false)->change();
            $table->integer('lat')->nullable(false)->change();
            $table->dateTime('start_date')->nullable()->change();
            $table->dateTime('end_date')->nullable()->change();
            $table->boolean('status')->nullable()->change();
            $table->boolean('is_verified')->nullable()->change();
        });
    }
}
