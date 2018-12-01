<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/filter.htm */
class __TwigTemplate_b9825a37b307bc98018a1e5d68433e6e56a4f4635e86e61439d378b10809ba59 extends Twig_Template
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
        echo "<h3 class=\"section-title\">Фильтровать</h3>
<div class=\"block\">
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onFilterTypeCatching", array("class" => "FilterTypeCatching", "update" => array("report/block_list" => "#blockList"))));
        echo "
    <label for=\"typeCatching\">Вид ловли:</label>
    <select id=\"typeCatching\" name=\"typeCatching\">
    \t<option value=\"\">Все виды</option>
    \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_catching"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 8
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "name", array()), "html", null, true);
            echo "</option>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select> 
    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/filter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  49 => 10,  38 => 8,  34 => 7,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"section-title\">Фильтровать</h3>
<div class=\"block\">
    {{ form_ajax('onFilterTypeCatching', { class: 'FilterTypeCatching', update: { 'report/block_list': '#blockList' } }) }}
    <label for=\"typeCatching\">Вид ловли:</label>
    <select id=\"typeCatching\" name=\"typeCatching\">
    \t<option value=\"\">Все виды</option>
    \t{% for var in type_catching %}
        <option value=\"{{var.id}}\">{{var.name}}</option>
     {% endfor %}
    </select> 
    {{ form_close() }}
</div>", "/vagrant/www/dvoct/themes/dv/partials/report/filter.htm", "");
    }
}
