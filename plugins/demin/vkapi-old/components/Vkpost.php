<?php namespace Demin\Vkapi\Components;

use Cms\Classes\ComponentBase;
use VK;

class Vkpost extends ComponentBase
{

    public $vkdata;
    //public $vkerror;

    public function componentDetails()
    {
        return [
            'name'        => 'vkpost Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        self::test();
    }

    public function test() {
        //$date = new \DateTime();
        $this->vkdata = date("Y-m-d H:i:s");

    }




}