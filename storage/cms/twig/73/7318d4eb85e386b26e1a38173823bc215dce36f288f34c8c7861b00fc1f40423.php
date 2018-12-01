<?php

/* /vagrant/www/dvoct/themes/dv/partials/cloud_tags_block.htm */
class __TwigTemplate_50eb648a1d15d0e1da21bcb140c9437203e31117141d9a89d5cdfa5170a8b478 extends Twig_Template
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
        echo "<h3><a class=\"section-title\" href=\"#\">Облако тегов</a></h3>
<div class=\"block\">
    <div class=\"block-tag\">
        <ul class=\"block-tag__list\">
            ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tag::cloud"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/cloud_tags_block.htm";
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
        return new Twig_Source("<h3><a class=\"section-title\" href=\"#\">Облако тегов</a></h3>
<div class=\"block\">
    <div class=\"block-tag\">
        <ul class=\"block-tag__list\">
            {% component 'tag::cloud' %}
        </ul>
    </div>
</div>", "/vagrant/www/dvoct/themes/dv/partials/cloud_tags_block.htm", "");
    }
}
