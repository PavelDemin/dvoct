<?php namespace Demin\Report\Components;

use Cms\Classes\ComponentBase;
use Demin\Report\Models\PostReport;

class ReportMap extends ComponentBase
{



    public function componentDetails()
    {
        return [
            'name'        => 'Карта отчетов',
            'description' => 'Вывод карты рыболовных отчетов'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->addJs('http://api-maps.yandex.ru/2.1/?lang=ru_RU&coordorder=longlat');
        $this->addJs('assets/js/mapbasics.js');
    }


}