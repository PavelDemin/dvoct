<?php

/* /home/pavel/htdocs/www/themes/dv/partials/relatedpost/related.htm */
class __TwigTemplate_22b1bed5519a3674c87b53d7937b1b186a9647068f6429836752092287834115 extends Twig_Template
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
        echo "<h3 class=\"section-title\">Похожие статьи</h3>
<div class=\"block-list block-list-related\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\"><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\"><img class=\"block__image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 65, 1 => 65, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                <div class=\"block__text\">";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()))), 0, 100), "html", null, true);
            echo "...</div>
            </header><a class=\"block__link\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">Читать далее...</a>
        </article>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/relatedpost/related.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  63 => 14,  54 => 10,  50 => 9,  44 => 8,  38 => 7,  34 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}
<h3 class=\"section-title\">Похожие статьи</h3>
<div class=\"block-list block-list-related\">
    {% for post in posts %}
    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\"><a href=\"{{ post.url }}\"><img class=\"block__image\" src=\"{{ post.featured_images.first.getThumb(65, 65, 'crop') }}\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                <div class=\"block__text\">{{ html_strip(post.summary) |slice(0,100) }}...</div>
            </header><a class=\"block__link\" href=\"{{ post.url }}\">Читать далее...</a>
        </article>
    </div>
    {% else %}
    <p>{{ noPostsMessage }}</p>
    {% endfor %}
</div>", "/home/pavel/htdocs/www/themes/dv/partials/relatedpost/related.htm", "");
    }
}
