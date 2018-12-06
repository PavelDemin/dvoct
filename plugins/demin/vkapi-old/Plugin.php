<?php namespace Demin\Vkapi;

use Backend;
//use Eseath\VK\VK;
use System\Classes\PluginBase;
use App;
use Illuminate\Foundation\AliasLoader;
use Demin\Vkapi\Models\Vkpost;

/**
 * vkapi Plugin Information File
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
            'name'        => 'VK API',
            'description' => 'Плагин реализует интерфейс VK API',
            'author'      => 'demin',
            'icon'        => 'icon-vk'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        App::register('\Eseath\VK\VKServiceProvider');
        $alias = AliasLoader::getInstance()->alias('VK', 'Eseath\VK\Facades\VK');
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
      //  return []; // Remove this line to activate

        return [
            'Demin\Vkapi\Components\Vkpost' => 'Vkpost',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'demin.vkapi.some_permission' => [
                'tab' => 'vkapi',
                'label' => 'Some permission'
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
        //return []; // Remove this line to activate

        return [
            'vkapi' => [
                'label'       => 'VK API',
                'url'         => Backend::url('demin/vkapi/vkposts'),
                'icon'        => 'icon-vk',
                'permissions' => ['demin.vkapi.*'],
                'order'       => 500,
                'sideMenu' => [
                    'vkpost' => [
                        'label'       => 'Публикации',
                        'icon'        => 'icon-list-alt',
                        'url'         => Backend::url('demin/vkapi/vkposts'),
                    ],
                    'addvkpost' => [
                        'label'       => 'Добавить',
                        'icon'        => 'icon-plus-square',
                        'url'         => Backend::url('demin/vkapi/vkposts/create'),
                    ],

                ]
            ],
        ];
    }

    /*public function registerSchedule($schedule)
    {
        $schedule->call(function () {
            $vk = new Vkpost();
            $vk->set_wall_post();
        })->everyMinute();
    }*/

}
