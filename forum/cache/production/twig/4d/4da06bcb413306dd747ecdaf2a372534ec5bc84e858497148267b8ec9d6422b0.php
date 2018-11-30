<?php

/* @gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html */
class __TwigTemplate_4cff2e8c8e3c449376328b3bf1f9cdf68212937d5b1c6c6cbed5eb692e4dcec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["S_THANKS_LIST"]) ? $context["S_THANKS_LIST"] : null)) {
            // line 2
            echo "<div class=\"stat-block thanks-list\">
\t<h3><a href=\"";
            // line 3
            echo (isset($context["U_THANKS_LIST"]) ? $context["U_THANKS_LIST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TOP_THANKS_LIST");
            echo "</a></h3>
\t<p>";
            // line 4
            echo (isset($context["THANKS_LIST"]) ? $context["THANKS_LIST"] : null);
            echo "</p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_THANKS_LIST -->*/
/* <div class="stat-block thanks-list">*/
/* 	<h3><a href="{U_THANKS_LIST}">{L_TOP_THANKS_LIST}</a></h3>*/
/* 	<p>{THANKS_LIST}</p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
