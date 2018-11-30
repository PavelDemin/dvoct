<?php

/* /home/pavel/htdocs/www/themes/dv/partials/article/post.htm */
class __TwigTemplate_7160e9a1d966f6e2223a3784fd00eb7c20ea1a50c02497e2d7d49bf9386fceb7 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "<div class=\"bread-crumb\"><span class=\"bread-crumb__item\"><a class=\"bread-crumb__link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("articles/articles-list");
        echo "\">Статьи</a></span>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "    <span class=\"bread-crumb__item\"><a class=\"bread-crumb__link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</a></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <span class=\"bread-crumb__item\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</span>
</div>
<article class=\"block\">
    <header class=\"block__header\">
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "        <a href=\"#\"><img class=\"block__image\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", array(0 => 200, 1 => 150, 2 => "crop"), "method"), "html", null, true);
                echo "\"></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo "        <h1 class=\"block__title block__title-post\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"block-info\">
            <div class=\"block-info__date\">Добавлено:&nbsp;<span>";
        // line 17
        echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "%e %BP, %Y"));
        echo "</span></div>
            <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
            <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
        </div>
    </header>
            <div class=\"block__text block__text-indent\">
                ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", array());
        echo "
            </div>
    <footer class=\"block-footer\">
        <div class=\"block-tag\">
            <ul class=\"block-tag__list\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "                <li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>
        </div>
        <div class=\"block__share\">Поделиться статьей:</div>
        <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
    </footer>
</article>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/article/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  101 => 29,  97 => 28,  89 => 23,  80 => 17,  74 => 15,  71 => 14,  60 => 12,  55 => 11,  53 => 10,  45 => 6,  34 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}
<div class=\"bread-crumb\"><span class=\"bread-crumb__item\"><a class=\"bread-crumb__link\" href=\"{{ 'articles/articles-list'|page }}\">Статьи</a></span>
    {% for category in post.categories %}
    <span class=\"bread-crumb__item\"><a class=\"bread-crumb__link\" href=\"{{ category.url }}\">{{ category.name }}</a></span>
    {% endfor %}
    <span class=\"bread-crumb__item\">{{ post.title }}</span>
</div>
<article class=\"block\">
    <header class=\"block__header\">
        {% if post.featured_images.count %}
        {% for image in post.featured_images %}
        <a href=\"#\"><img class=\"block__image\" alt=\"{{ post.title }}\" src=\"{{ image.getThumb(200,150, 'crop') }}\"></a>
        {% endfor %}
        {% endif %}
        <h1 class=\"block__title block__title-post\">{{ post.title }}</h1>
        <div class=\"block-info\">
            <div class=\"block-info__date\">Добавлено:&nbsp;<span>{{ post.published_at|rudate(\"%e %BP, %Y\") }}</span></div>
            <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
            <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
        </div>
    </header>
            <div class=\"block__text block__text-indent\">
                {{ post.content_html|raw }}
            </div>
    <footer class=\"block-footer\">
        <div class=\"block-tag\">
            <ul class=\"block-tag__list\">
                {% for tag in post.tags %}
                <li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/{{tag.slug}}\">{{ tag.name }}</a></li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"block__share\">Поделиться статьей:</div>
        <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
    </footer>
</article>", "/home/pavel/htdocs/www/themes/dv/partials/article/post.htm", "");
    }
}
