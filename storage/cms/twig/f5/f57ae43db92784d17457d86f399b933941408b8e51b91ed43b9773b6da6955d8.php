<?php

/* /home/pavel/htdocs/www/themes/dv/pages/tagSearch.htm */
class __TwigTemplate_83b81747b78bfff34f1e16f9a6dc8e76a2bd3f18c1e175bdd5ab5e569091efea extends Twig_Template
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
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 7
            echo "    <h3 class=\"section-title\">Статьи на тему \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "\"</h3>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tag::search-tag"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/tagSearch.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 9,  43 => 7,  39 => 6,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3\">
    {% component 'category_menu' %}
    {% component 'popularPosts' %}
</div>
<div class=\"col-md-9\">
    {% for tag in tags %}
    <h3 class=\"section-title\">Статьи на тему \"{{tag.name}}\"</h3>
    {% endfor %}
    {% component 'tag::search-tag' %}
</div>", "/home/pavel/htdocs/www/themes/dv/pages/tagSearch.htm", "");
    }
}
