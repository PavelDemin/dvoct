<?php

/* /home/pavel/htdocs/www/themes/dv/pages/poisk-po-tegam.htm */
class __TwigTemplate_8d874e5e1bb020b1d2e598d4f7d70a822663b1a71e5617c9c476229c26fcf098 extends Twig_Template
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
        echo "<div class=\"sidebar press--right\">
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("category_menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_last_post_forum"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_cloud_tag"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "\t\t\t\t
</div><!--.sidebar-->
<div class=\"main-content press--left\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 10
            echo "\t<h3>Статьи на тему \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "\"</h3>
\t<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<!--\t<div class=\"b-filter\">
\t\t<form action=\"\">
\t\t\t<div class=\"filter__title\">
\t\t\t\tПоиск по фильтру:
\t\t\t</div>
\t\t\t<div class=\"select-metka\">
\t\t\t\t<select name=\"\" id=\"\">
\t\t\t\t\t<option>Выберите метку...</option>
\t\t\t\t\t<option class=\"gorbusha\">Горбуша</option>
\t\t\t\t\t<option class=\"taimen\">Таймень</option>
\t\t\t\t\t<option class=\"cpining\">Спиннинг</option>
\t\t\t\t\t<option class=\"ultralait\">Ультралайт</option>
\t\t\t\t\t<option class=\"karpfishing\">Карпфишинг</option>
\t\t\t\t\t<option class=\"fider\">Фидер</option>
\t\t\t\t\t<option class=\"sazan\">Сазан</option>
\t\t\t\t\t<option class=\"beliy-amur\">Белый амур</option>
\t\t\t\t\t<option class=\"amur\">Амур</option>
\t\t\t\t\t<option class=\"habarovsk\">Хабаровск</option>
\t\t\t\t\t<option class=\"bikin\">Бикин</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"select-info\">
\t\t\t\t<select name=\"\" id=\"\">
\t\t\t\t\t<option value=\"\">Сортировать по...</option>
\t\t\t\t\t<option value=\"\">По дате</option>
\t\t\t\t\t<option value=\"\">По количеству просмотров</option>
\t\t\t\t\t<option value=\"\">По рейтингу</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"filter__clean\">
\t\t\t\t<a href=\"#\">Сбросить фильтр</a>
\t\t\t</div>
\t\t</form>
\t</div>--><!--.b-filter-->

\t<div class=\"list-posts list-posts--alignment clearfix\">
\t\t";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tag::search-tag"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "\t</div>
</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/poisk-po-tegam.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  99 => 49,  61 => 13,  51 => 10,  47 => 9,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--right\">
{% component 'category_menu' %}
{% component 'popularPosts' %}
{% partial \"widget_last_post_forum\" %}
{% partial \"widget_cloud_tag\" %}
\t\t\t\t
</div><!--.sidebar-->
<div class=\"main-content press--left\">
{% for tag in tags %}
\t<h3>Статьи на тему \"{{tag.name}}\"</h3>
\t<hr>
{% endfor %}
<!--\t<div class=\"b-filter\">
\t\t<form action=\"\">
\t\t\t<div class=\"filter__title\">
\t\t\t\tПоиск по фильтру:
\t\t\t</div>
\t\t\t<div class=\"select-metka\">
\t\t\t\t<select name=\"\" id=\"\">
\t\t\t\t\t<option>Выберите метку...</option>
\t\t\t\t\t<option class=\"gorbusha\">Горбуша</option>
\t\t\t\t\t<option class=\"taimen\">Таймень</option>
\t\t\t\t\t<option class=\"cpining\">Спиннинг</option>
\t\t\t\t\t<option class=\"ultralait\">Ультралайт</option>
\t\t\t\t\t<option class=\"karpfishing\">Карпфишинг</option>
\t\t\t\t\t<option class=\"fider\">Фидер</option>
\t\t\t\t\t<option class=\"sazan\">Сазан</option>
\t\t\t\t\t<option class=\"beliy-amur\">Белый амур</option>
\t\t\t\t\t<option class=\"amur\">Амур</option>
\t\t\t\t\t<option class=\"habarovsk\">Хабаровск</option>
\t\t\t\t\t<option class=\"bikin\">Бикин</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"select-info\">
\t\t\t\t<select name=\"\" id=\"\">
\t\t\t\t\t<option value=\"\">Сортировать по...</option>
\t\t\t\t\t<option value=\"\">По дате</option>
\t\t\t\t\t<option value=\"\">По количеству просмотров</option>
\t\t\t\t\t<option value=\"\">По рейтингу</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"filter__clean\">
\t\t\t\t<a href=\"#\">Сбросить фильтр</a>
\t\t\t</div>
\t\t</form>
\t</div>--><!--.b-filter-->

\t<div class=\"list-posts list-posts--alignment clearfix\">
\t\t{% component 'tag::search-tag' %}
\t</div>
</div><!--.main-content-->", "/home/pavel/htdocs/www/themes/dv/pages/poisk-po-tegam.htm", "");
    }
}
