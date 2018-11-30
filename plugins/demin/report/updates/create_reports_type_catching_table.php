<?php namespace Demin\Report\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateReportsTypeCatchingTable extends Migration
{

    public function up()
    {
        
        Schema::create('post_report_typecatching', function($table)
        {
            $table->integer('post_report_id')->unsigned();
            $table->integer('type_catching_id')->unsigned();
            $table->primary(['post_report_id', 'type_catching_id']);
        });

    }

    public function down()
    {
        Schema::drop('postreport_typecatching');
    }

}