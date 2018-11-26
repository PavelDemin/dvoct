<?php 
class Cms5bf71928231d3298609395_7ea7e860aefb450cd8234dcd062625c8Class extends Cms\Classes\PageCode
{
public function onEnd() {
$this->layout->components['SeoCmsPage']->seo_title = "Статьи на тему - " .$this['category']['name'];
}
}
