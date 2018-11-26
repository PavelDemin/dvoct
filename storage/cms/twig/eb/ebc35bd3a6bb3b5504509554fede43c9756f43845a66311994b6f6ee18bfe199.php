<?php

/* /home/pavel/htdocs/www/themes/dv/partials/article/last_articles_block.htm */
class __TwigTemplate_315c56a1134a3a95ec3293d346cc97e3021144aeb2131bec3d4ce303801da12e extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "<h3 class=\"section-title\">Последние статьи</h3>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "<article class=\"block\">
    <header class=\"block__header\"><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\"><img class=\"block__image\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 70, 1 => 69, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
        <div class=\"block__text\">";
            // line 7
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()))), 0, 100), "html", null, true);
            echo "...</div>
    </header><a class=\"block__link\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">Читать далее...</a>
    <footer class=\"block-footer\">
        <div class=\"block-tag\">
            <ul class=\"block-tag__list\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
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
            // line 15
            echo "            </ul>
        </div>
    </footer>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/article/last_articles_block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  64 => 13,  60 => 12,  53 => 8,  49 => 7,  43 => 6,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}
<h3 class=\"section-title\">Последние статьи</h3>
{% for post in posts %}
<article class=\"block\">
    <header class=\"block__header\"><a href=\"{{ post.url }}\"><img class=\"block__image\" alt=\"{{ post.title }}\" src=\"{{ post.featured_images.first.getThumb(70,69,'crop') }}\"></a>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ post.url }}\">{{ post.title }}</a></h2>
        <div class=\"block__text\">{{ html_strip(post.summary) |slice(0,100) }}...</div>
    </header><a class=\"block__link\" href=\"{{ post.url }}\">Читать далее...</a>
    <footer class=\"block-footer\">
        <div class=\"block-tag\">
            <ul class=\"block-tag__list\">
                {% for tag in post.tags %}
                <li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/{{tag.slug}}\">{{ tag.name }}</a></li>
                {% endfor %}
            </ul>
        </div>
    </footer>
</article>
{% endfor %}", "/home/pavel/htdocs/www/themes/dv/partials/article/last_articles_block.htm", "");
    }
}
