<?php

/* /home/pavel/htdocs/www/themes/dv/partials/cloud_tags_block.htm */
class __TwigTemplate_4b9903d8310084f27a45d32b72ca2751fe758ca9424535688296e0bc83dc97cb extends Twig_Template
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
        return "/home/pavel/htdocs/www/themes/dv/partials/cloud_tags_block.htm";
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
</div>", "/home/pavel/htdocs/www/themes/dv/partials/cloud_tags_block.htm", "");
    }
}
