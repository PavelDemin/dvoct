<?php namespace Demin\Report\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTypeCatchingTable extends Migration
{

    public function up()
    {

        Schema::create('demin_report_type_catching', function ($table) {
            $table->increments('id');
            $table->string('name');
        });

    }

    public function down()
    {
        Schema::drop('demin_report_type_catching');
    }

}