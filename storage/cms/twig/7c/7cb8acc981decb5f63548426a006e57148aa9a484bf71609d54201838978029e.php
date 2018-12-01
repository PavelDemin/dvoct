<?php

/* /vagrant/www/dvoct/themes/dv/partials/report/block_list.htm */
class __TwigTemplate_fd2670f7c8498d4a59abb6d3e52af0ce8aa621067848d2a088c4c06d37f7f808 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 2
            echo "    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\">
                <img class=\"block__image\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["report"], "image", array()), "getThumb", array(0 => 230, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["report"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "title", array()), "html", null, true);
            echo "</a></h2>
                <div class=\"block__text\">";
            // line 7
            echo call_user_func_array($this->env->getFunction('substr')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["report"], "content", array()), 200, "..."));
            echo "</div>
            </header>
            <div class=\"block-info\">
                <div class=\"block-info__date\">";
            // line 10
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
            // line 21
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/report/block_list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  49 => 10,  43 => 7,  37 => 6,  33 => 5,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for report in reports %}
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
    {% endfor %}", "/vagrant/www/dvoct/themes/dv/partials/report/block_list.htm", "");
    }
}
