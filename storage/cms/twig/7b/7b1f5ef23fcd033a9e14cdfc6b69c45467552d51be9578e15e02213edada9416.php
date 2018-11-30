<?php

/* /home/pavel/htdocs/www/themes/dv/pages/articles/articles-list.htm */
class __TwigTemplate_65cb15a6eb258fad366d775733e4f81eb55809438df83991218f72e044fa5b5b extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("category_menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Последние статьи</h3>
    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/articles/articles-list.htm";
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
    {% component 'category_menu' %}
    {% component 'popularPosts' %}
</div>
<div class=\"col-md-9\">
    <h3 class=\"section-title\">Последние статьи</h3>
    {% component \"article\" %}
</div>", "/home/pavel/htdocs/www/themes/dv/pages/articles/articles-list.htm", "");
    }
}
