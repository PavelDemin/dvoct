<?php

/* /vagrant/www/dvoct/themes/dv/pages/404.htm */
class __TwigTemplate_1cdfe35a24e5d9cbad22a7e13bdc979f8372058ed018fafd5f264908eb9dcc4f extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_last_post_forum"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
</div><!--.sidebar-->

<div class=\"main-content press--left\">
    <div class=\"post post--big\">
        <h1>Нет такой страницы. Ошибка 404.</h1>
    </div>
</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--right\">
    {% component 'popularPosts' %}
    {% partial \"widget_last_post_forum\" %}

</div><!--.sidebar-->

<div class=\"main-content press--left\">
    <div class=\"post post--big\">
        <h1>Нет такой страницы. Ошибка 404.</h1>
    </div>
</div><!--.main-content-->", "/vagrant/www/dvoct/themes/dv/pages/404.htm", "");
    }
}
