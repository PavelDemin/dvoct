<?php

/* /home/pavel/htdocs/www/themes/dv/partials/report/counter_comments.htm */
class __TwigTemplate_3f101c1d08d9ae4fac3dae7610ad4a5bb46ddc44eb03ddbf62bde94f869c7431 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["qty"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/report/counter_comments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ qty }}", "/home/pavel/htdocs/www/themes/dv/partials/report/counter_comments.htm", "");
    }
}
