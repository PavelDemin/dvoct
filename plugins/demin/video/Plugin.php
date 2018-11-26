<?php namespace Demin\Video;

use Backend;
use System\Classes\PluginBase;
use Event;
use Demin\Video\Models\Video;

/**
 * video Plugin Information File
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
            'name'        => 'Видео',
            'description' => 'Раздел видео',
            'author'      => 'demin',
            'icon'        => 'icon-play-circle-o'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        //return []; // Remove this line to activate

        return [
            'Demin\Video\Components\VideoList' => 'VideoList',
            'Demin\Video\Components\VideoPost' => 'VideoPost',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {


        return [
            'demin.video.access_videos' => [
                'tab' => 'Видео',
                'label' => 'Управление видео'
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
            'video' => [
                'label'       => 'Видео',
                'url'         => Backend::url('demin/video/video'),
                'icon'        => 'icon-play-circle-o',
                'permissions' => ['demin.video.*'],
                'order'       => 500,
                'sideMenu' => [
                    'postreport' => [
                        'label'       => 'Список видеороликов',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('demin/video/video'),
                    ],


                ]
            ],
        ];
    }


    public function boot() {
        Event::listen('offline.sitesearch.query', function ($query) {

            // Search your plugin's contents
            $items = Video::where('title', 'like', "%${query}%")
                ->orWhere('content', 'like', "%${query}%")
                ->get();

            // Now build a results array
            $results = $items->map(function ($item) use ($query) {

                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;

                return [
                    'title'     => $item->title,
                    'text'      => $item->content,
                    'url'       => '/video/' . $item->slug,
                    'thumb'     => $item->image, // Instance of System\Models\File
                    'relevance' => $relevance, // higher relevance results in a higher
                    // position in the results listing
                    // 'meta' => 'data',       // optional, any other information you want
                    // to associate with this result
                ];
            });

            return [
                'provider' => 'Видео', // The badge to display for this result
                'results'  => $results,
            ];
        });
    }
}
