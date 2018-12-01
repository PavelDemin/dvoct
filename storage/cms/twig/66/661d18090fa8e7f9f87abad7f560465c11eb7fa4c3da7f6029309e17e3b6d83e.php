<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/index.htm */
class __TwigTemplate_bbf6ce4cd17f1064dd7adbff6a1f49d0944efc84cbfa621beefc87b518826191 extends Twig_Template
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
        echo "<h3><a class=\"section-title\" href=\"#\">Последние отчеты</a></h3>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 4
            echo "<article class=\"block\">
    <header class=\"block__header\"><a href=\"";
            // line 5
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">
        <picture>
            <source media=\"(max-width: 991px)\" srcset=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["report"], "image", array()), "getThumb", array(0 => 200, 1 => 163, 2 => "crop"), "method"), "html", null, true);
            echo "\"><img class=\"block__image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["report"], "image", array()), "getThumb", array(0 => 200, 1 => 163, 2 => "crop"), "method"), "html", null, true);
            echo "\">
        </picture></a>
        <div class=\"block-info\">
            <div class=\"block-info__date\">";
            // line 10
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "published_at", array()), "%e %BP, %Y"));
            echo "</div>
            <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "count_views", array()), "html", null, true);
            echo "</span></div>
            <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "#comments\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">125</span></a></div>
        </div>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 14
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", array()), "html", null, true);
            echo "</a></h2>
        <div class=\"block__text block__text-indent\">";
            // line 15
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", call_user_func_array($this->env->getFunction('substr')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "content", array()), 300, "..."))));
            echo "</div>
    </header><a class=\"block__link block__link-btn\" href=\"";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">Читать дальше...</a>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  67 => 15,  61 => 14,  56 => 12,  52 => 11,  48 => 10,  40 => 7,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set reports = __SELF__.posts %}
<h3><a class=\"section-title\" href=\"#\">Последние отчеты</a></h3>
{% for report in reports %}
<article class=\"block\">
    <header class=\"block__header\"><a href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}\">
        <picture>
            <source media=\"(max-width: 991px)\" srcset=\"{{ report.image.getThumb(200,163, 'crop') }}\"><img class=\"block__image\" src=\"{{ report.image.getThumb(200,163, 'crop') }}\">
        </picture></a>
        <div class=\"block-info\">
            <div class=\"block-info__date\">{{ report.published_at|rudate(\"%e %BP, %Y\") }}</div>
            <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">{{ report.count_views}}</span></div>
            <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}#comments\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">125</span></a></div>
        </div>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}\">{{ report.title }}</a></h2>
        <div class=\"block__text block__text-indent\">{{ html_strip(substr(report.content,300,'...')) }}</div>
    </header><a class=\"block__link block__link-btn\" href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}\">Читать дальше...</a>
</article>
{% endfor %}", "/vagrant/www/dvoct/themes/dv/partials/report/index.htm", "");
    }
}
