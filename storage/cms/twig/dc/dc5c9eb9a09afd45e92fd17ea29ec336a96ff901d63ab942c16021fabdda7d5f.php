<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/list.htm */
class __TwigTemplate_cc02f57fb8170aa76b63a19f3f6342b129f4d5e58aac33b11bd1cade63561027 extends Twig_Template
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
        echo "<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div class=\"block-list\" id=\"blockList\">
";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reports'] = ($context["reports"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("report/block_list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</div>
<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div id=\"main-pagination\">
";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reports'] = ($context["reports"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("report/paginate"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  38 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div class=\"block-list\" id=\"blockList\">
{% partial \"report/block_list\" reports=reports %}
</div>
<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div id=\"main-pagination\">
{% partial \"report/paginate\" reports=reports %}  
</div>", "/vagrant/www/dvoct/themes/dv/partials/report/list.htm", "");
    }
}
