<?php

/* /home/pavel/htdocs/www/themes/dv/pages/index-page.htm */
class __TwigTemplate_ae17235b3f1e1b12d97e30c79791cf3c4d76c25ec18095f902c15faf0a0a84b9 extends Twig_Template
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
        echo "<div class=\"col-md-3 col-sm-6 order-2\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article::last_articles_block"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
<div class=\"col-md-6 order-md-2 col-sm-12 order-1\">
    ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider::slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("report::index"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</div>
<div class=\"col-md-3 col-sm-6 order-3\">
    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("video::last_video_block"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cloud_tags_block"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/index-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 10,  47 => 9,  43 => 7,  38 => 6,  34 => 5,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 col-sm-6 order-2\">
    {% component 'article::last_articles_block' %}
</div>
<div class=\"col-md-6 order-md-2 col-sm-12 order-1\">
    {% component 'slider::slider' %}
    {% component 'report::index' %}
</div>
<div class=\"col-md-3 col-sm-6 order-3\">
    {% component 'video::last_video_block' %}
    {% partial \"cloud_tags_block\" %}
</div>", "/home/pavel/htdocs/www/themes/dv/pages/index-page.htm", "");
    }
}
