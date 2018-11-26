<?php namespace demin\Eventfish;

use Demin\Eventfish\Components\EventsFishing;
use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{

   public function registerComponents()
    {
        return [
            'Demin\EventFish\Components\EventsFishing' => 'EventsFishing',
        ];
    }

    public function registerSettings()
    {
    }


}
