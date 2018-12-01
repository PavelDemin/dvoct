<?php

/* /vagrant/www/dvoct/themes/dv/partials/header_menu/default.htm */
class __TwigTemplate_9391ea3ebd363af1f7c3bb53ad94172d632d2797429b7e247fbd510bf9159ff5 extends Twig_Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", array());
        // line 2
        $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentCategorySlug", array());
        // line 3
        echo "<ul class=\"menu__list menu__list-dropdown\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "    ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", array());
            // line 6
            echo "    <li class=\"menu__item menu__item-dropdown\">
    <a class=\"menu__link\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/header_menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  40 => 7,  37 => 6,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = __SELF__.categories %}
{% set currentCategorySlug = __SELF__.currentCategorySlug %}
<ul class=\"menu__list menu__list-dropdown\">
    {% for category in categories %}
    {% set postCount = category.post_count %}
    <li class=\"menu__item menu__item-dropdown\">
    <a class=\"menu__link\" href=\"{{ category.url }}\">{{ category.name }}</a>
    </li>
    {% endfor %}
</ul>", "/vagrant/www/dvoct/themes/dv/partials/header_menu/default.htm", "");
    }
}
