<?php

/* /vagrant/www/dvoct/themes/dv/partials/video/last_video_block.htm */
class __TwigTemplate_6059b64d8f8d93754abd4185f4be97ff2864e3b524b3a95232806ed5ca19d46d extends Twig_Template
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
        $context["videos"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "videos", array());
        // line 2
        echo "<h3><a class=\"section-title\" href=\"#\">Видео обзоры</a></h3>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 4
            echo "<article class=\"block\">
    <header class=\"block__header block__header-video\"><a href=\"";
            // line 5
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["video"], "slug", array())));
            echo "\">
        <div class=\"block-video\">
            <div class=\"block-video__play\"></div>
        </div><img class=\"block__image\" alt=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "image", array()), "getThumb", array(0 => 200, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["video"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
            echo "</a></h2>
    </header>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/video/last_video_block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 8,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set videos = __SELF__.videos %}
<h3><a class=\"section-title\" href=\"#\">Видео обзоры</a></h3>
{% for video in videos %}
<article class=\"block\">
    <header class=\"block__header block__header-video\"><a href=\"{{ 'video/video-post'|page({ slug: video.slug }) }}\">
        <div class=\"block-video\">
            <div class=\"block-video__play\"></div>
        </div><img class=\"block__image\" alt=\"{{video.title }}\" src=\"{{ video.image.getThumb(200,150,'crop') }}\"></a>
        <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ 'video/video-post'|page({ slug: video.slug }) }}\">{{video.title }}</a></h2>
    </header>
</article>
{% endfor %}", "/vagrant/www/dvoct/themes/dv/partials/video/last_video_block.htm", "");
    }
}
