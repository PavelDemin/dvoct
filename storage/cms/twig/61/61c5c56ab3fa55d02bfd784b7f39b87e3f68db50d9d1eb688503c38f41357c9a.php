<?php

/* /home/pavel/htdocs/www/themes/dv/partials/article/new_article.htm */
class __TwigTemplate_5f009cd39b32c6b4a9c85b0f15051592ed9d4c60597ba96a3cb4f161692639df extends Twig_Template
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
        echo "<div class=\"widget widget__post\">
    <div class=\"list-posts\">
<h3>Последние статьи</h3>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "<div class=\"post\">
\t\t\t\t\t\t\t\t<header class=\"post__header\">
\t\t\t\t\t\t\t\t\t<figure class=\"post__figure post__figure--small press--left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\"><img alt=\"\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 70, 1 => 69, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"post__title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"post__text\">
\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()))), 0, 100), "html", null, true);
            echo "...
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">Читать полностью...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"post__footer\">
\t\t\t\t\t\t\t\t\t<div class=\"btn__group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "                                        <a class=\"btn\" href=\"/articles/tags/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
                echo "</a>
                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</div><!--.post-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
    <div class=\"redirect-link\">
        <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("articles/articles-list");
        echo "\">Перейти в раздел статей</a>
    </div>
</div><!--.widget__post-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/article/new_article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  93 => 30,  84 => 26,  73 => 24,  69 => 23,  62 => 19,  58 => 18,  48 => 13,  39 => 9,  34 => 6,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}
<div class=\"widget widget__post\">
    <div class=\"list-posts\">
<h3>Последние статьи</h3>
{% for post in posts %}
<div class=\"post\">
\t\t\t\t\t\t\t\t<header class=\"post__header\">
\t\t\t\t\t\t\t\t\t<figure class=\"post__figure post__figure--small press--left\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ post.url }}\"><img alt=\"\" src=\"{{ post.featured_images.first.getThumb(70,69,'crop') }}\"></a>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"post__title\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ post.url }}\">{{ post.title }}</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"post__text\">
\t\t\t\t\t\t\t\t{{ html_strip(post.summary) |slice(0,100) }}...
\t\t\t\t\t\t\t\t<a href=\"{{ post.url }}\">Читать полностью...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"post__footer\">
\t\t\t\t\t\t\t\t\t<div class=\"btn__group\">
\t\t\t\t\t\t\t\t\t\t{% for tag in post.tags %}
                                        <a class=\"btn\" href=\"/articles/tags/{{tag.slug}}\">{{ tag.name }}</a>
                                         {% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</div><!--.post-->
{% endfor %}
    </div>
    <div class=\"redirect-link\">
        <a href=\"{{ 'articles/articles-list'|page }}\">Перейти в раздел статей</a>
    </div>
</div><!--.widget__post-->", "/home/pavel/htdocs/www/themes/dv/partials/article/new_article.htm", "");
    }
}
