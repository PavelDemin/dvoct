<?php namespace Demin\Video\Components;

use Cms\Classes\ComponentBase;
use Demin\Video\Models\Video;

class VideoPost extends ComponentBase
{
    public $video;

    public function componentDetails()
    {
        return [
            'name'        => 'Видео ролик',
            'description' => 'Выводит видео ролик'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => '',
                'description' => '',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
        ];
    }


    protected function loadVideo() {
        $slug = $this->property('slug');
        $video = Video::where('slug', $slug)->first();
        return $video;
    }

    public function onRun() {
        $this->video = $this->loadVideo();
    }


}