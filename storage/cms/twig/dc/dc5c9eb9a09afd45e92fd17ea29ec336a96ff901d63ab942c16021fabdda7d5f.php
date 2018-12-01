<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/list.htm */
class __TwigTemplate_cc02f57fb8170aa76b63a19f3f6342b129f4d5e58aac33b11bd1cade63561027 extends Twig_Template
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
        $context["reports"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div class=\"block-list\" id=\"blockList\">
";
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reports'] = ($context["reports"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("report/block_list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>
<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>

    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > 1)) {
            // line 21
            echo "    <ul class=\"pagination\">
        ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) > 1)) {
                // line 23
                echo "        <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) - 1)));
                echo "\">Назад</a>
        <li>...</li>
        ";
            }
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) == $context["page"])) {
                    // line 28
                    echo "        <li class=\"pagination-active\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</li>
        ";
                } else {
                    // line 30
                    echo "        <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
        ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()))) {
                // line 34
                echo "        <li>...</li>
        <a href=\"";
                // line 35
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) + 1)));
                echo "\">Далее</a>
        ";
            }
            // line 37
            echo "    </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  99 => 35,  96 => 34,  93 => 33,  87 => 32,  79 => 30,  73 => 28,  70 => 27,  65 => 26,  58 => 23,  56 => 22,  53 => 21,  51 => 20,  40 => 11,  35 => 10,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set reports = __SELF__.posts %}
<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>
<div class=\"block-list\" id=\"blockList\">
{% partial \"report/block_list\" reports=reports %}
</div>
<div class=\"content-sort\">
    <div class=\"content-sort__text\">Сортировать по: </div>
    <ul class=\"content-sort__list\">
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">дате</a><i class=\"icon-down-big\"></i></li>
        <li class=\"content-sort__item\"><a class=\"content-sort__link\" href=\"#\">просмотрам</a><i class=\"icon-up-big\"></i></li>
    </ul>
</div>

    {% if reports.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if reports.currentPage > 1 %}
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (reports.currentPage-1) }) }}\">Назад</a>
        <li>...</li>
        {% endif %}
        {% for page in 1..reports.lastPage %}
        {% if reports.currentPage == page %}
        <li class=\"pagination-active\">{{ page }}</li>
        {% else %}
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        {% endif %}
        {% endfor %}
        {% if reports.lastPage > reports.currentPage %}
        <li>...</li>
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (reports.currentPage+1) }) }}\">Далее</a>
        {% endif %}
    </ul>
    {% endif %}", "/vagrant/www/dvoct/themes/dv/partials/report/list.htm", "");
    }
}
