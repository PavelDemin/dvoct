<?php

/* /home/pavel/htdocs/www/themes/dv/partials/report/post.htm */
class __TwigTemplate_63a4d33531a3b91d185ac2b2124c5c2f54547f476b922e7767e3857b91d35a88 extends Twig_Template
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
        $context["report"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "
<div class=\"breadcrumb\">
    <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-list");
        echo "\">Рыболовные отчеты</a> > ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "title", array()), "html", null, true);
        echo "
</div>
<div class=\"post post--big\">
    <header class=\"post__header post__header__big\">
        <figure class=\"post__figure press--left\">
            <img    data-src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "filename", array()), "html", null, true);
        echo "\"
                    src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "path", array()), "html", null, true);
        echo "\"
                    alt=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "image", array()), "description", array()), "html", null, true);
        echo "\"
                    style=\"width: 200px\" />
        </figure>
        <div class=\"post__info post__info--big clearfix\">

            <h3 class=\"title--big\">
                ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "title", array()), "html", null, true);
        echo "
            </h3>

            <div class=\"post__date\">
                Опубликовано: ";
        // line 21
        echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "published_at", array()), "%e %BP, %Y"));
        echo "
            </div>
            <div class=\"autor__name\">
                Автор:
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "user", array()), "html", null, true);
        echo "
            </div>
            <!--\t<div class=\"rating\">
                    Рейтинг статьи:
                    <div class=\"rating-stars\">
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                    </div>
                    <span class=\"assessment\">
                        3.5/5 <a href=\"#\">Оценить</a>
                    </span>
                </div>-->

        ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("share"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "
        </div>
    </header>

    <div class=\"post__text\" style=\"float: left; width: 480px\">
        <div class=\"content\">
            ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "content", array());
        echo "
        </div>
           <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "url_to_forum", array()), "html", null, true);
        echo "\" class=\"go_to_forum_bnt\">Читать дальше...</a>
    </div>
    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "lon", array())) {
            // line 53
            echo "    <style>
        #map {
            width: 350px; height: 200px; margin: 0px; float: right;
        }
    </style>
    <div id=\"map\"></div>

    ";
        }
        // line 61
        echo "    <div style=\"clear: both\"></div>
    <hr>
    <footer class=\"post__footer clearfix\">


    </footer>
</div><!--.post-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/report/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  113 => 53,  111 => 52,  106 => 50,  101 => 48,  93 => 42,  89 => 41,  70 => 25,  63 => 21,  56 => 17,  47 => 11,  43 => 10,  39 => 9,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set report = __SELF__.post %}

<div class=\"breadcrumb\">
    <a href=\"{{ 'reports/report-list'|page }}\">Рыболовные отчеты</a> > {{ report.title }}
</div>
<div class=\"post post--big\">
    <header class=\"post__header post__header__big\">
        <figure class=\"post__figure press--left\">
            <img    data-src=\"{{ report.image.filename }}\"
                    src=\"{{ report.image.path }}\"
                    alt=\"{{ report.image.description }}\"
                    style=\"width: 200px\" />
        </figure>
        <div class=\"post__info post__info--big clearfix\">

            <h3 class=\"title--big\">
                {{ report.title }}
            </h3>

            <div class=\"post__date\">
                Опубликовано: {{ report.published_at|rudate(\"%e %BP, %Y\") }}
            </div>
            <div class=\"autor__name\">
                Автор:
                {{ report.user }}
            </div>
            <!--\t<div class=\"rating\">
                    Рейтинг статьи:
                    <div class=\"rating-stars\">
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                        <input type=\"hidden\" value=\"2\"/>
                    </div>
                    <span class=\"assessment\">
                        3.5/5 <a href=\"#\">Оценить</a>
                    </span>
                </div>-->

        {% partial \"share\" %}

        </div>
    </header>

    <div class=\"post__text\" style=\"float: left; width: 480px\">
        <div class=\"content\">
            {{ report.content|raw }}
        </div>
           <a href=\"{{ report.url_to_forum }}\" class=\"go_to_forum_bnt\">Читать дальше...</a>
    </div>
    {% if report.lon %}
    <style>
        #map {
            width: 350px; height: 200px; margin: 0px; float: right;
        }
    </style>
    <div id=\"map\"></div>

    {% endif %}
    <div style=\"clear: both\"></div>
    <hr>
    <footer class=\"post__footer clearfix\">


    </footer>
</div><!--.post-->", "/home/pavel/htdocs/www/themes/dv/partials/report/post.htm", "");
    }
}
