<?php

/* /home/pavel/htdocs/www/themes/dv/pages/reports/report-post.htm */
class __TwigTemplate_66ec179d261ac045684540d4d1af8aae980b6b6d4b0531b8e0a2faac740fa29e extends Twig_Template
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
    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("report::post"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    
</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/reports/report-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  44 => 7,  40 => 5,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--right\">
    {% component 'popularPosts' %}
    {% partial \"widget_last_post_forum\" %}
    {% partial \"widget_cloud_tag\" %}
</div><!--.sidebar-->
<div class=\"main-content press--left\">
    {% component 'report::post' %}
    
</div><!--.main-content-->", "/home/pavel/htdocs/www/themes/dv/pages/reports/report-post.htm", "");
    }
}
