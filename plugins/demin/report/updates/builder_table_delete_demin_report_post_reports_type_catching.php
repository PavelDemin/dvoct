<?php namespace Demin\Report\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDeminReportPostReportsTypeCatching extends Migration
{
    public function up()
    {
        Schema::dropIfExists('demin_report_post_reports_type_catching');
    }
    
    public function down()
    {
        Schema::create('demin_report_post_reports_type_catching', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_report_id');
            $table->integer('type_catching_id');
        });
    }
}
