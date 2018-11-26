<?php 
class Cms5bf720ff212b2212575801_2415ac34ea9d8218c292cbfc8f1bd475Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $post = DB::table('rainlab_blog_posts')->where('slug', $this->param('slug'))->first();
if (!$post) return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
}
