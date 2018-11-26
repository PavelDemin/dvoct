<?php

/* /home/pavel/htdocs/www/themes/dv/partials/test.htm */
class __TwigTemplate_fbed33c711f7838d9cc22c7ae9edb79f01eba3943fe167146d05507972a6107f extends Twig_Template
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
        echo "<h1>Members!!</h1>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/test.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Members!!</h1>", "/home/pavel/htdocs/www/themes/dv/partials/test.htm", "");
    }
}
