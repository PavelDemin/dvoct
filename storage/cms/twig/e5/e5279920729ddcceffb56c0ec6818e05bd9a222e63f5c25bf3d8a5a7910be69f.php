<?php

/* /home/pavel/htdocs/www/themes/dv/partials/category_menu/default.htm */
class __TwigTemplate_df9a8645be98edcc8c6755d25a0fa14742608861ca7617c0fba35d873cae972f extends Twig_Template
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
        echo "
<h3 class=\"section-title\">Меню разделов</h3>
<div class=\"block\">
    <nav class=\"sub-nav\">
        <ul class=\"sub-nav__list\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "            ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", array());
            // line 10
            echo "            <li ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == ($context["currentCategorySlug"] ?? null))) {
                echo "class=\"sub-nav__item-active\"";
            }
            echo " class=\"sub-nav__item\"><a class=\"sub-nav__link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</a>";
            if (($context["postCount"] ?? null)) {
                echo "<span class=\"sub-nav__count\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/category_menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  41 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = __SELF__.categories %}
{% set currentCategorySlug = __SELF__.currentCategorySlug %}

<h3 class=\"section-title\">Меню разделов</h3>
<div class=\"block\">
    <nav class=\"sub-nav\">
        <ul class=\"sub-nav__list\">
            {% for category in categories %}
            {% set postCount = category.post_count %}
            <li {% if category.slug == currentCategorySlug %}class=\"sub-nav__item-active\"{% endif %} class=\"sub-nav__item\"><a class=\"sub-nav__link\" href=\"{{ category.url }}\">{{ category.name }}</a>{% if postCount %}<span class=\"sub-nav__count\">{{ postCount }}</span>{% endif %}</li>
            {% endfor %}
        </ul>
    </nav>
</div>", "/home/pavel/htdocs/www/themes/dv/partials/category_menu/default.htm", "");
    }
}
