<?php

/* /vagrant/www/dvoct/themes/dv/partials/slider/slider.htm */
class __TwigTemplate_c50c2e753b548f65abe6dec721a38ba6c3f6e34edf46114ca4d67c6cc43e9d63 extends Twig_Template
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
        $context["reports"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "rs", array());
        // line 2
        echo "<div class=\"slider\">
    <div class=\"slider__nav slider__nav-prev\"><i class=\"icon-angle-circled-left\"></i></div>
    <div class=\"slider__nav slider__nav-next\"><i class=\"icon-angle-circled-right\"></i></div>
    <div class=\"slider__dots\">  </div>
    <ul class=\"slider__list\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 8
            echo "        <li class=\"slider__item\"><img class=\"slider__image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["report"], "image", array()), "getThumb", array(0 => 622, 1 => 260, 2 => "crop"), "method"), "html", null, true);
            echo "\"><a class=\"slider-dropdown\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">
            <h2 class=\"slider-dropdown__title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", array()), "html", null, true);
            echo "</h2><span class=\"slider-dropdown__desc\">";
            echo call_user_func_array($this->env->getFunction('substr')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "content", array()), 220, "..."));
            echo "</span></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/slider/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  43 => 9,  36 => 8,  32 => 7,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set reports = __SELF__.rs %}
<div class=\"slider\">
    <div class=\"slider__nav slider__nav-prev\"><i class=\"icon-angle-circled-left\"></i></div>
    <div class=\"slider__nav slider__nav-next\"><i class=\"icon-angle-circled-right\"></i></div>
    <div class=\"slider__dots\">  </div>
    <ul class=\"slider__list\">
{% for report in reports %}
        <li class=\"slider__item\"><img class=\"slider__image\" src=\"{{ report.image.getThumb(622,260, 'crop') }}\"><a class=\"slider-dropdown\" href=\"{{ 'reports/report-post'|page({ slug: report.slug }) }}\">
            <h2 class=\"slider-dropdown__title\">{{ report.title }}</h2><span class=\"slider-dropdown__desc\">{{ substr(report.content,220,'...') }}</span></a></li>
{% endfor %}
    </ul>
</div>", "/vagrant/www/dvoct/themes/dv/partials/slider/slider.htm", "");
    }
}
