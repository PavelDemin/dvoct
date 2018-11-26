<?php

/* /home/pavel/htdocs/www/themes/dv/partials/video/new.htm */
class __TwigTemplate_55dca9a84d7b8129d3240ca768f5db3ff1ff8922423897581ad13befecb03d33 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 3
            echo "<div class=\"post\">
    <figure class=\"post__figure post__figure--video\">
        <a href=\"";
            // line 5
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["video"], "slug", array())));
            echo "\">
            <img alt=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "image", array()), "getThumb", array(0 => 200, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\">
            <span class=\"icon-video\"></span>
        </a>
    </figure>
    <header class=\"post__header\">
        <div class=\"post__info\">
            <h4 class=\"post__title\">
                <a href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-post", array("slug" => twig_get_attribute($this->env, $this->source, $context["video"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
            echo "</a>
            </h4>
        </div>
    </header>

</div><!--.post-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/video/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  37 => 6,  33 => 5,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set videos = __SELF__.videos %}
{% for video in videos %}
<div class=\"post\">
    <figure class=\"post__figure post__figure--video\">
        <a href=\"{{ 'video/video-post'|page({ slug: video.slug }) }}\">
            <img alt=\"{{video.title }}\" src=\"{{ video.image.getThumb(200,150,'crop') }}\">
            <span class=\"icon-video\"></span>
        </a>
    </figure>
    <header class=\"post__header\">
        <div class=\"post__info\">
            <h4 class=\"post__title\">
                <a href=\"{{ 'video/video-post'|page({ slug: video.slug }) }}\">{{video.title }}</a>
            </h4>
        </div>
    </header>

</div><!--.post-->
{% endfor %}", "/home/pavel/htdocs/www/themes/dv/partials/video/new.htm", "");
    }
}
