<?php

/* /home/pavel/htdocs/www/plugins/anandpatel/seoextension/components/blogpost/default.htm */
class __TwigTemplate_44c46fe006161d898f84e14c6b622470336bcd54317e549b761dc89fca1026b6 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('meta'        );
        // line 2
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", array())) {
            // line 4
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", array())) {
            // line 8
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", array())));
            echo "</title>
    ";
        } else {
            // line 10
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array())));
            echo "</title>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", array())) {
            // line 14
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", array())) {
            // line 18
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", array())) {
            // line 22
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", array()), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
            echo "
    ";
        }
        // line 26
        echo "
        <meta name=\"robots\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_index", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_follow", array()), "html", null, true);
        echo "\">

    ";
        // line 29
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), array(($context["post"] ?? null)));
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/plugins/anandpatel/seoextension/components/blogpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 1,  107 => 31,  102 => 29,  95 => 27,  92 => 26,  86 => 24,  80 => 22,  78 => 21,  75 => 20,  69 => 18,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  53 => 12,  47 => 10,  41 => 8,  39 => 7,  36 => 6,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put meta %}
{% default %}
    {% if post.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{post.redirect_url}}\" />
    {% endif %}

    {% if post.seo_title %}
        <title>{{ post.seo_title | generateTitle}}</title>
    {% else %}
        <title>{{ post.title | generateTitle }}</title>
    {% endif %}

    {% if post.seo_description %}
        <meta name=\"description\" content=\"{{post.seo_description}}\">
    {% endif %}

    {% if post.seo_keywords %}
        <meta name=\"keywords\" content=\"{{post.seo_keywords}}\">
    {% endif %}

    {% if post.canonical_url %}
        <link rel=\"canonical\" href=\"{{post.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

        <meta name=\"robots\" content=\"{{post.robot_index}},{{post.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {{ post|generateOgTags }}
{% endput %}
", "/home/pavel/htdocs/www/plugins/anandpatel/seoextension/components/blogpost/default.htm", "");
    }
}
