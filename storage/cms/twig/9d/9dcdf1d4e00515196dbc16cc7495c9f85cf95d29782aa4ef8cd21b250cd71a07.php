<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/paginate.htm */
class __TwigTemplate_f5d86e6b401f1070cbbfe0cec213ccfa01307ca3442cfb7b1fbee9621b8c0dc5 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > 1)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) > 1)) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) - 1), "html", null, true);
                echo "\">Назад</a>
            <li>...</li>
        ";
            }
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 8
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) == $context["page"])) {
                    // line 9
                    echo "                <li class=\"pagination-active\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</li>
            ";
                } else {
                    // line 11
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            ";
                }
                // line 13
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()))) {
                // line 15
                echo "            <li>...</li>
            <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) + 1), "html", null, true);
                echo "\">Далее</a>
        ";
            }
            // line 18
            echo "    </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/paginate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  71 => 16,  68 => 15,  65 => 14,  59 => 13,  51 => 11,  45 => 9,  42 => 8,  37 => 7,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if reports.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if reports.currentPage > 1 %}
            <a href=\"{{reports.currentPage-1}}\">Назад</a>
            <li>...</li>
        {% endif %}
        {% for page in 1..reports.lastPage %}
            {% if reports.currentPage == page %}
                <li class=\"pagination-active\">{{ page }}</li>
            {% else %}
                <a href=\"{{ reports.currentPage }}\">{{ page }}</a>
            {% endif %}
        {% endfor %}
        {% if reports.lastPage > reports.currentPage %}
            <li>...</li>
            <a href=\"{{reports.currentPage+1}}\">Далее</a>
        {% endif %}
    </ul>
    {% endif %}", "/vagrant/www/dvoct/themes/dv/partials/report/paginate.htm", "");
    }
}
