<?php namespace Demin\Report\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeminReportPostReportsTypeCatching extends Migration
{
    public function up()
    {
        Schema::create('demin_report_post_reports_type_catching', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_report_id');
            $table->integer('type_catching_id');
            $table->primary(['post_report_id','type_catching_id'], 'post_report_type_catching');
        });

    }

    public function down()
    {
        Schema::dropIfExists('demin_report_post_reports_type_catching');
    }
}