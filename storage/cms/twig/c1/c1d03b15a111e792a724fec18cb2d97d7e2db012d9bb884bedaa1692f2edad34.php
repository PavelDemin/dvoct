<?php

/* /home/pavel/htdocs/www/themes/dv/partials/share_list.htm */
class __TwigTemplate_a2cd3e7af6d92764724305085302140b2c027be4c9204457b173bb0240042514 extends Twig_Template
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
        echo "<div class=\"shareit\">
    <div class=\"shareit__title\">
        Поделиться:
    </div>
    <div class=\"post-soc\">
        <a href=\"#\">
            <span class=\"icon-vk-small\"></span>
        </a>
        <a href=\"http://twitter.com/home?status=";
        // line 9
        echo twig_escape_filter($this->env, twig_urlencode_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) . " ") . call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")))), "html", null, true);
        echo "\" title=\"Share on Twitter\" target=\"_blank\">
            <span class=\"icon-twitter\"></span>
        </a>
        <a href=\"#\">
            <span class=\"icon-ok-small\"></span>
        </a>
        <a href=\"https://plus.google.com/share?url=";
        // line 15
        echo twig_escape_filter($this->env, twig_urlencode_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) . " ") . call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")))), "html", null, true);
        echo "\" title=\"Share on Google+\" target=\"_blank\">
            <span class=\"icon-google\"></span>
        </a>
        <a href=\"#\">
            <span class=\"icon-mail\"></span>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/share_list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"shareit\">
    <div class=\"shareit__title\">
        Поделиться:
    </div>
    <div class=\"post-soc\">
        <a href=\"#\">
            <span class=\"icon-vk-small\"></span>
        </a>
        <a href=\"http://twitter.com/home?status={{ (this.page.title ~ ' ' ~ url_current())|url_encode }}\" title=\"Share on Twitter\" target=\"_blank\">
            <span class=\"icon-twitter\"></span>
        </a>
        <a href=\"#\">
            <span class=\"icon-ok-small\"></span>
        </a>
        <a href=\"https://plus.google.com/share?url={{ (this.page.title ~ ' ' ~ url_current())|url_encode }}\" title=\"Share on Google+\" target=\"_blank\">
            <span class=\"icon-google\"></span>
        </a>
        <a href=\"#\">
            <span class=\"icon-mail\"></span>
        </a>
    </div>
</div>", "/home/pavel/htdocs/www/themes/dv/partials/share_list.htm", "");
    }
}
