<?php

/* /home/pavel/htdocs/www/themes/dv/partials/share.htm */
class __TwigTemplate_1c30358495652fc611f7fb6489425ebf4f03ea339bdb57487aec2b5c02c30ec9 extends Twig_Template
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
        echo "<div class=\"shareit press--right\">
\t\t\t\t\t\t\t\t\t<span class=\"shareit__title\">
\t\t\t\t\t\t\t\t\t\tПоделиться:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"post-soc\">
\t\t\t\t\t\t\t\t\t\t<a href=\"http://vk.com/share.php?url=";
        // line 6
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"))), "html", null, true);
        echo "\" target='_blank'>
                                            <span class=\"icon-vk-small\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://twitter.com/home?status=";
        // line 9
        echo twig_escape_filter($this->env, twig_urlencode_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) . " ") . call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")))), "html", null, true);
        echo "\" title=\"Share on Twitter\" target=\"_blank\">
                                            <span class=\"icon-twitter\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://connect.ok.ru/offer?url=";
        // line 12
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"))), "html", null, true);
        echo "\" target='_blank'>
                                            <span class=\"icon-ok-small\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://plus.google.com/share?url=";
        // line 15
        echo twig_escape_filter($this->env, twig_urlencode_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) . " ") . call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")))), "html", null, true);
        echo "\" title=\"Share on Google+\" target=\"_blank\">
                                            <span class=\"icon-google\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://connect.mail.ru/share?url=";
        // line 18
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"))), "html", null, true);
        echo "u&amp;title=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\" target='_blank'>
                                            <span class=\"icon-mail\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t</span>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/share.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  48 => 15,  42 => 12,  36 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"shareit press--right\">
\t\t\t\t\t\t\t\t\t<span class=\"shareit__title\">
\t\t\t\t\t\t\t\t\t\tПоделиться:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"post-soc\">
\t\t\t\t\t\t\t\t\t\t<a href=\"http://vk.com/share.php?url={{(url_current())|url_encode }}\" target='_blank'>
                                            <span class=\"icon-vk-small\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://twitter.com/home?status={{ (this.page.title ~ ' ' ~ url_current())|url_encode }}\" title=\"Share on Twitter\" target=\"_blank\">
                                            <span class=\"icon-twitter\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://connect.ok.ru/offer?url={{(url_current())|url_encode }}\" target='_blank'>
                                            <span class=\"icon-ok-small\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://plus.google.com/share?url={{(this.page.title ~ ' ' ~ url_current())|url_encode }}\" title=\"Share on Google+\" target=\"_blank\">
                                            <span class=\"icon-google\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://connect.mail.ru/share?url={{(url_current())|url_encode}}u&amp;title={{this.page.title}}\" target='_blank'>
                                            <span class=\"icon-mail\"></span>
                                        </a>
\t\t\t\t\t\t\t\t\t</span>
</div>", "/home/pavel/htdocs/www/themes/dv/partials/share.htm", "");
    }
}
