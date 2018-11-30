<?php

/* /home/pavel/htdocs/www/themes/dv/partials/report/filter.htm */
class __TwigTemplate_baeca880048e2360d92fd77049f12d46914f04c49790662c3cb86245e2132ffb extends Twig_Template
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
        echo "<h3 class=\"section-title\">Фильтровать</h3>
<div class=\"block\">
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSave", array("class" => "form-horizontal")));
        echo "
    <label for=\"typeCatching\">Тип ловли:</label>
    <select id=\"typeCatching\" name=\"typeCatching\">
        <option></option>
    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/report/filter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"section-title\">Фильтровать</h3>
<div class=\"block\">
    {{ form_ajax('onSave', { class: 'form-horizontal'}) }}
    <label for=\"typeCatching\">Тип ловли:</label>
    <select id=\"typeCatching\" name=\"typeCatching\">
        <option></option>
    {{ form_close() }}
</div>", "/home/pavel/htdocs/www/themes/dv/partials/report/filter.htm", "");
    }
}
