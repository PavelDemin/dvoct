<?php

/* /home/pavel/htdocs/www/themes/dv/pages/gofishing.htm */
class __TwigTemplate_dea820e9331f0fd1090eed8980f13f7f8ce8cf99c938196cf7bfc9803a2f7d3a extends Twig_Template
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
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_cloud_tag"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</div><!--.sidebar-->
<div class=\"main-content press--left\">
    <div class=\"main-content press--left\">
        <div class=\"post post--big\">

";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("eventsfishing::event"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
        </div>
</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/gofishing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  40 => 5,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--right\">
    {% component 'popularPosts' %}
    {% partial \"widget_last_post_forum\" %}
    {% partial \"widget_cloud_tag\" %}
</div><!--.sidebar-->
<div class=\"main-content press--left\">
    <div class=\"main-content press--left\">
        <div class=\"post post--big\">

{% component 'eventsfishing::event' %}

        </div>
</div><!--.main-content-->", "/home/pavel/htdocs/www/themes/dv/pages/gofishing.htm", "");
    }
}
