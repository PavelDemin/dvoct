<?php namespace Demin\Video\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Video Back-end Controller
 */
class Video extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['demin.video.access_videos'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Demin.Video', 'video', 'video');
    }
}