<?php 
class Cms5bfaa2e500774669370432_b3b0e926bfc2a9fa44d3e2c9d889983fClass extends Cms\Classes\PageCode
{
public function onEnd() {
$this['tags'] = DB::table('rahman_blogtags_tags')->select('name')->where('slug',$this->param('slug'))->get();
foreach ($this['tags'] as $k => $v) {
$this->layout->components['SeoCmsPage']->seo_title = "Статьи на тему &laquo;" .$v->name. "&raquo;";
}
}
}
