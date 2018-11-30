<?php

/* /home/pavel/htdocs/www/themes/dv/pages/articles/article-post.htm */
class __TwigTemplate_9cf7bb1bc2fdedc24ca3d979743100bd0b0e9585f440c1d9adca645d1a892269 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = ($context["post"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoBlogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<div class=\"col-md-3\">
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("category_menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "</div>
<div class=\"col-md-9\">
    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article::post"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("relatedpost::related"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/articles/article-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  48 => 8,  44 => 7,  40 => 5,  35 => 4,  31 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'SeoBlogPost' data=post %}
<div class=\"col-md-3\">
    {% component 'category_menu' %}
    {% component 'popularPosts' %}
</div>
<div class=\"col-md-9\">
    {% component 'article::post' %}
    {% component 'relatedpost::related' %}
</div>", "/home/pavel/htdocs/www/themes/dv/pages/articles/article-post.htm", "");
    }
}
