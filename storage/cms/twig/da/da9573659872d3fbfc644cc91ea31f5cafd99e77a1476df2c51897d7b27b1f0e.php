<?php

/* /vagrant/www/dvoct/themes/dv/pages/reports/report-list.htm */
class __TwigTemplate_6d6196ce244838bc2d68018ed8eef927b04a015cadf4ddc39786aedd064ca925 extends Twig_Template
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
\t\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("report/filter"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Рыболовные отчеты</h3>
";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("report::list"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/pages/reports/report-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 7,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3\">
\t\t{% partial 'report/filter' %}
    {% component 'popularPosts' %}
</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Рыболовные отчеты</h3>
{% component 'report::list' %}
</div>", "/vagrant/www/dvoct/themes/dv/pages/reports/report-list.htm", "");
    }
}
