<?php

/* /vagrant/www/dvoct/themes/dv/partials/tag/cloud.htm */
class __TwigTemplate_da0720ae7973dbdbbd1f4bd5a3e8060000eea6334b27664236d2047a9f53c810 extends Twig_Template
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
        $context["tags"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tags", array());
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 3
            echo "<li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/tag/cloud.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tags = __SELF__.tags %}
{% for tag in tags %}
<li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/{{tag.slug}}\">{{ tag.name }}</a></li>
{% endfor %}", "/vagrant/www/dvoct/themes/dv/partials/tag/cloud.htm", "");
    }
}
