<?php namespace Demin\Report\Components;

use Cms\Classes\ComponentBase;
use Demin\Report\Models\PostReport;

class ReportSlider extends ComponentBase
{

    public $rs;

    public function componentDetails()
    {
        return [
            'name'        => 'ReportSlider Component',
            'description' => 'Организация слайдера отчетов'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    protected function getReports() {

        return PostReport::where('published', TRUE)->orderBy('count_views','desc')->limit('5')->get();
    }

    public function onRun() {
        $this->rs = $this->getReports();
    }

}