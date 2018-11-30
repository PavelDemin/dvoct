<?php namespace Demin\Report\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Type Catching Back-end Controller
 */
class TypeCatching extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Demin.Report', 'report', 'typecatching');
    }
}
