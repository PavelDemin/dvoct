<?php

/* /home/pavel/htdocs/www/themes/dv/pages/reports/report-list.htm */
class __TwigTemplate_954dbae481dcdc33005b1b09b154c0891d8f1063353be97449833b2dc2d5a8af extends Twig_Template
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
        echo "<div class=\"col-md-3\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Рыболовные отчеты</h3>
    ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("report::list"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/reports/report-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3\">
    {% component 'popularPosts' %}
</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Рыболовные отчеты</h3>
    {% component 'report::list' %}
</div>", "/home/pavel/htdocs/www/themes/dv/pages/reports/report-list.htm", "");
    }
}
