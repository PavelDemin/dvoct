<?php

/* /vagrant/www/dvoct/plugins/demin/report/components/reportlist/default.htm */
class __TwigTemplate_4815014438e7c41213499078e58448d6cfe87b7fa640d82674f41c87a2836ac3 extends Twig_Template
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
        $context["report"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "<h4><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "url_to_forum", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "title", array()), "html", null, true);
        echo "</a></h4>
<p>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "content", array());
        echo "</p>
<a href=\"#\"><img
        data-src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "path", array()), "html", null, true);
        echo "\"
        src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "path", array()), "html", null, true);
        echo "\"
        alt=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "description", array()), "html", null, true);
        echo "\"
        style=\"width: 150px\" /></a>

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 11
            echo "<ul class=\"pagination\">
    ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 13
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 18
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()))) {
                // line 23
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 25
            echo "</ul>
";
        }
        // line 27
        echo "



";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/plugins/demin/report/components/reportlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  98 => 25,  92 => 23,  90 => 22,  87 => 21,  76 => 18,  71 => 17,  67 => 16,  64 => 15,  58 => 13,  56 => 12,  53 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set report = __SELF__.posts %}
<h4><a href=\"{{ report.url_to_forum }}\">{{ report.title }}</a></h4>
<p>{{ report.content|raw }}</p>
<a href=\"#\"><img
        data-src=\"{{ report.image.path }}\"
        src=\"{{ report.image.path }}\"
        alt=\"{{ report.image.description }}\"
        style=\"width: 150px\" /></a>

{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..posts.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if posts.lastPage > posts.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}




", "/vagrant/www/dvoct/plugins/demin/report/components/reportlist/default.htm", "");
    }
}
