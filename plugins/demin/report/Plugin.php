<?php namespace Demin\Report;

use Backend;
use System\Classes\PluginBase;
use App;
use Event;
use Carbon\Carbon;
use Lang;
use Demin\Report\Models\PostReport;

/**
 * report Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Отчеты',
            'description' => 'Плагин реализует систему рыболовных отчетов на сайте',
            'author'      => 'demin',
            'icon'        => 'icon-anchor'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
       // return []; // Remove this line to activate

        return [
            'Demin\Report\Components\ReportList' => 'ReportList',
            'Demin\Report\Components\ReportPost' => 'ReportPost',
            'Demin\Report\Components\ReportMap' => 'ReportMap',
            'Demin\Report\Components\ReportSlider' => 'ReportSlider',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
       // return []; // Remove this line to activate

        return [
            'demin.report.access_reports' => [
                'tab' => 'Отчеты',
                'label' => 'Управление отчетами'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
       // return []; // Remove this line to activate

        return [
            'report' => [
                'label'       => 'Отчеты',
                'url'         => Backend::url('demin/report/postreport'),
                'icon'        => 'icon-anchor',
                'permissions' => ['demin.report.*'],
                'order'       => 500,
                'sideMenu' => [
                    'postreport' => [
                        'label'       => 'Список отчетов',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('demin/report/postreport'),
                    ],
                    'typecatching' => [
                        'label'       => 'Способы ловли',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('demin/report/typecatching'),
                    ],

                ]
            ],
        ];
    }


    public function boot() {
        // Check if we are currently in backend module.
    /*   if (!App::runningInBackend()) {
            return;
        }*/

        // Listen for `backend.page.beforeDisplay` event and inject js to current controller instance.
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
            $controller->addJs('http://api-maps.yandex.ru/2.1/?lang=ru_RU&coordorder=longlat');
            $controller->addJs('/plugins/demin/report/assets/js/add_point_to_map.js');
        });




    }


    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'rudate' => function($time, $format) {
                    if(! $time instanceof Carbon) {
                        $time = Carbon::parse($time);
                    }
                        $monthsPlural = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
                        $format = str_replace('%BP', $monthsPlural[$time->month-1], $format);
                        $months = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
                        $format = str_replace('%B', $months[$time->month-1], $format);
                    return $time->formatLocalized($format);
                }
             ],
            'functions' => [
                'substr' => function($str, $size, $symb) {
                    $string = $str;
                    if (mb_strlen($str) > $size)
                        $string = mb_substr($str,0,mb_strrpos(mb_substr($str,0,$size,'utf-8'),' ','utf-8'),'utf-8');
                    if (mb_strlen($string) > $size)
                        $string = mb_substr($strS);
                    if (mb_strlen($str) > mb_strlen($string))
                        $string = $string . $symb;
                    return $string;
                }
            ]
        ];
    }

}
