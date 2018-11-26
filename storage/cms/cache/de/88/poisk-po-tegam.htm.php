<?php 
class Cms5bec136c8335e834285659_558ff0435f93d143525abf8431a8facaClass extends Cms\Classes\PageCode
{
public function onEnd() {
    $this['tags'] = DB::table('rahman_blogtags_tags')->select('name')->where('slug',$this->param('slug'))->get();
    foreach ($this['tags'] as $k => $v) {
       $this->layout->components['SeoCmsPage']->seo_title = "Статьи на тему &laquo;" .$v->name. "&raquo;";
    }
}
}
