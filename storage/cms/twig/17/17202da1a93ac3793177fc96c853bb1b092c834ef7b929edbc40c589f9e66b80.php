<?php

/* /home/pavel/htdocs/www/themes/dv/partials/widget_cloud_tag.htm */
class __TwigTemplate_0f2abbe68aabfc202ac404873d9537ddcb57fb98d7994c8126a6410b2cc13675 extends Twig_Template
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
        echo "<div class=\"widget widget__tags\">
\t<h3>Облако тегов</h3>
\t<div class=\"widget__tags__content\">
\t\t<div class=\"btn__group\">
\t\t\t";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tag::cloud"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/widget_cloud_tag.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget widget__tags\">
\t<h3>Облако тегов</h3>
\t<div class=\"widget__tags__content\">
\t\t<div class=\"btn__group\">
\t\t\t{% component 'tag::cloud' %}
\t\t</div>
\t</div>
</div>", "/home/pavel/htdocs/www/themes/dv/partials/widget_cloud_tag.htm", "");
    }
}
