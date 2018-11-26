<?php namespace Demin\Report\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Db;
use Flash;


/**
 * Post Report Back-end Controller
 */
class PostReport extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['demin.report.access_reports'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Demin.Report', 'report', 'postreport');
    }

    public function onDeletePostReport() {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (Db::table('demin_report_post_reports')->where('id', $objectId)->count() == 1) {
                    Db::table('demin_report_post_reports')->where('id', $objectId)->delete();
                }
            }

            Flash::success('Отчет успешно удален!');
        }

        return $this->listRefresh('manage');
    }
}