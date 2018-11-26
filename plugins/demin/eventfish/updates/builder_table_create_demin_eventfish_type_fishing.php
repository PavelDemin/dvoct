<?php namespace demin\Eventfish\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeminEventfishTypeFishing extends Migration
{
    public function up()
    {
        Schema::create('demin_eventfish_type_fishing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('demin_eventfish_type_fishing');
    }
}
