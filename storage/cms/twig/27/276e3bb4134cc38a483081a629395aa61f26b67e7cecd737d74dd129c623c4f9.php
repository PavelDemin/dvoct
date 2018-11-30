<?php

/* /home/pavel/htdocs/www/themes/dv/pages/index-page-old.htm */
class __TwigTemplate_0749c60b5db509c97bdb695b8b3acd3bc30cd8c0ed6519b732eca77949aa7334 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"sidebar press--left\">
\t";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article::new_article"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "\t<!--<div class=\"widget widget__forum\">
\t\t<h3>Последнее на форуме</h3>
\t\t<div class=\"widget__forum__list\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Болталка</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Плавсредства. Виды и выбор</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Одиночные путешествия</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Вся рыбалка в России станет платной?!</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Поздравляем!</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Щука</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">р. Горин</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Болталка</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Плавсредства. Виды и выбор</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Одиночные путешествия</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"redirect-link\">
\t\t\t<a href=\"/forum\">Перейти в раздел статей</a>
\t\t</div>
\t</div>-->
\t<!--.widget__forum-->

</div><!--.sidebar-->

<div class=\"main-content press--right\">
\t<div class=\"clearfix\">
\t\t<div class=\"timeline press--left\">
\t\t\t<div class=\"b-slider\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<h3 class=\"press--left\">Лучшие рыболовные отчеты</h3>
\t\t\t\t\t<div class=\"redirect-link press--right\">
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-list");
        echo "\">Перейти в раздел отчетов</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider__items\">
\t\t\t\t\t<ul id=\"out-of-the-box-demo\">
\t\t\t\t\t\t";
        // line 59
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider::slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider-control\">
\t\t\t\t\t<a href=\"#\" class=\"slider--prev\"></a>
\t\t\t\t\t<a href=\"#\" class=\"slider--next\"></a>
\t\t\t\t</div>
\t\t\t</div><!--.b-slider-->

\t\t\t<h3>Отчеты о рыбалке</h3>
\t\t\t<div class=\"list-posts\">
\t\t\t\t";
        // line 70
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("report::index"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 71
        echo "\t\t\t</div><!--.list-posts-->
\t\t\t<div class=\"redirect-link\">
\t\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-list");
        echo "\">Перейти в раздел отчетов</a>
\t\t\t</div>
\t\t</div><!--.timeline-->
\t\t<div class=\"sidebar press--right\">

\t\t\t<div class=\"widget widget__post\">
\t\t\t\t<h3>Видео обзоры</h3>
\t\t\t\t<div class=\"list-posts\">
\t\t\t\t\t";
        // line 81
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("video::new"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"redirect-link\">
\t\t\t\t\t<a href=\"";
        // line 84
        echo "video";
        echo "\">Перейти в раздел видео</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_cloud_tag"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "\t\t</div><!--.sidebar-->

\t</div>

</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/index-page-old.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 88,  140 => 87,  134 => 84,  130 => 82,  126 => 81,  115 => 73,  111 => 71,  107 => 70,  95 => 60,  91 => 59,  83 => 54,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--left\">
\t{% component 'article::new_article' %}
\t<!--<div class=\"widget widget__forum\">
\t\t<h3>Последнее на форуме</h3>
\t\t<div class=\"widget__forum__list\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Болталка</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Плавсредства. Виды и выбор</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Одиночные путешествия</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Вся рыбалка в России станет платной?!</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Поздравляем!</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Щука</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">р. Горин</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Болталка</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Плавсредства. Виды и выбор</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Одиночные путешествия</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"redirect-link\">
\t\t\t<a href=\"/forum\">Перейти в раздел статей</a>
\t\t</div>
\t</div>-->
\t<!--.widget__forum-->

</div><!--.sidebar-->

<div class=\"main-content press--right\">
\t<div class=\"clearfix\">
\t\t<div class=\"timeline press--left\">
\t\t\t<div class=\"b-slider\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<h3 class=\"press--left\">Лучшие рыболовные отчеты</h3>
\t\t\t\t\t<div class=\"redirect-link press--right\">
\t\t\t\t\t\t<a href=\"{{'reports/report-list'|page}}\">Перейти в раздел отчетов</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider__items\">
\t\t\t\t\t<ul id=\"out-of-the-box-demo\">
\t\t\t\t\t\t{% component 'slider::slider' %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"slider-control\">
\t\t\t\t\t<a href=\"#\" class=\"slider--prev\"></a>
\t\t\t\t\t<a href=\"#\" class=\"slider--next\"></a>
\t\t\t\t</div>
\t\t\t</div><!--.b-slider-->

\t\t\t<h3>Отчеты о рыбалке</h3>
\t\t\t<div class=\"list-posts\">
\t\t\t\t{% component 'report::index' %}
\t\t\t</div><!--.list-posts-->
\t\t\t<div class=\"redirect-link\">
\t\t\t\t<a href=\"{{'reports/report-list'|page}}\">Перейти в раздел отчетов</a>
\t\t\t</div>
\t\t</div><!--.timeline-->
\t\t<div class=\"sidebar press--right\">

\t\t\t<div class=\"widget widget__post\">
\t\t\t\t<h3>Видео обзоры</h3>
\t\t\t\t<div class=\"list-posts\">
\t\t\t\t\t{% component 'video::new' %}
\t\t\t\t</div>
\t\t\t\t<div class=\"redirect-link\">
\t\t\t\t\t<a href=\"{{ 'video' }}\">Перейти в раздел видео</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% partial \"widget_cloud_tag\" %}
\t\t</div><!--.sidebar-->

\t</div>

</div><!--.main-content-->", "/home/pavel/htdocs/www/themes/dv/pages/index-page-old.htm", "");
    }
}
