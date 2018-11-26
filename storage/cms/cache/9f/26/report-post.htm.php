<?php 
class Cms5bec132054d78002527418_08cd87abfc20739fe8b8fef6b3ad82b0Class extends Cms\Classes\PageCode
{
public function onStart() {
    $this->addJs('http://api-maps.yandex.ru/2.1/?lang=ru_RU&coordorder=longlat');
    $this->addJs('assets/js/report_map.js');
    $post = DB::table('demin_report_post_reports')->where('slug', $this->param('slug'))->first();
    if (!$post) return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
public function onEnd() {
    // Overwrite for better SEO.
    $this->layout->components['SeoCmsPage']->seo_title = $this->components['report']->post->title;
    //$this->layout->components['SeoCmsPage']->seo_description = 'My dynamic description.';
}
}
