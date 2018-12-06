<?php namespace Demin\Report\Components;

use Cms\Classes\ComponentBase;
use Demin\Report\Models\PostReport;
use App;

class ReportPost extends ComponentBase
{

   // public $slug;

    public $post;

    public function componentDetails()
    {
        return [
            'name'        => 'Запись отчета',
            'description' => 'Отображение записи отчета'
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


    protected function loadPost() {
        $slug = $this->property('slug');
        $post = PostReport::where('slug', $slug)->first();
        PostReport::where('slug', $slug)->increment('count_views');
        return $post;
    }

    public function onRun() {
        $this->post = $this->loadPost();
    }

}