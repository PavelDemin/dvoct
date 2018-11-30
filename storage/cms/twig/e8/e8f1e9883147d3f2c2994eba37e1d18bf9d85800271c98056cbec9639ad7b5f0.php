<?php

/* /home/pavel/htdocs/www/themes/dv/partials/report/list.htm */
class __TwigTemplate_66c49080474f831cf7268265f45912fff7dfe6319fa3e909b09c55b39e6524b4 extends Twig_Template
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
        echo "<div class=\"block-list\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 4
            echo "    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\">
                <img class=\"block__image\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["report"], "image", array()), "getThumb", array(0 => 230, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", array()), "html", null, true);
            echo "</a></h2>
                <div class=\"block__text\">";
            // line 9
            echo call_user_func_array($this->env->getFunction('substr')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "content", array()), 200, "..."));
            echo "</div>
            </header>
            <div class=\"block-info\">
                <div class=\"block-info__date\">";
            // line 12
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "published_at", array()), "%e %BP, %Y"));
            echo "</div>
                <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
                <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
            </div>
            <footer class=\"block-footer\">
                <div class=\"block__share\">Поделиться статьей:</div>
                <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
            </footer>
        </article>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>

    ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > 1)) {
            // line 28
            echo "    <ul class=\"pagination\">
        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) > 1)) {
                // line 30
                echo "        <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) - 1)));
                echo "\">Назад</a>
        <li>...</li>
        ";
            }
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) == $context["page"])) {
                    // line 35
                    echo "        <li class=\"active\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</li>
        ";
                } else {
                    // line 37
                    echo "        <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
        ";
                }
                // line 39
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()))) {
                // line 41
                echo "        <li>...</li>
        <a href=\"";
                // line 42
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "currentPage", array()) + 1)));
                echo "\">Далее</a>
        ";
            }
            // line 44
            echo "    </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/report/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  131 => 42,  128 => 41,  125 => 40,  119 => 39,  111 => 37,  105 => 35,  102 => 34,  97 => 33,  90 => 30,  88 => 29,  85 => 28,  83 => 27,  79 => 25,  70 => 23,  54 => 12,  48 => 9,  42 => 8,  38 => 7,  33 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set reports = __SELF__.posts %}
<div class=\"block-list\">
{% for report in reports %}
    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\">
                <img class=\"block__image\" src=\"{{ report.image.getThumb(230,150,'crop') }}\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}\">{{report.title }}</a></h2>
                <div class=\"block__text\">{{ substr(report.content,200,'...') }}</div>
            </header>
            <div class=\"block-info\">
                <div class=\"block-info__date\">{{ report.published_at|rudate(\"%e %BP, %Y\") }}</div>
                <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
                <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
            </div>
            <footer class=\"block-footer\">
                <div class=\"block__share\">Поделиться статьей:</div>
                <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
            </footer>
        </article>
    </div>
    {% else %}
    <p>{{ noPostsMessage }}</p>
    {% endfor %}
</div>

    {% if reports.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if reports.currentPage > 1 %}
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (reports.currentPage-1) }) }}\">Назад</a>
        <li>...</li>
        {% endif %}
        {% for page in 1..reports.lastPage %}
        {% if reports.currentPage == page %}
        <li class=\"active\">{{ page }}</li>
        {% else %}
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        {% endif %}
        {% endfor %}
        {% if reports.lastPage > reports.currentPage %}
        <li>...</li>
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (reports.currentPage+1) }) }}\">Далее</a>
        {% endif %}
    </ul>
    {% endif %}", "/home/pavel/htdocs/www/themes/dv/partials/report/list.htm", "");
    }
}
