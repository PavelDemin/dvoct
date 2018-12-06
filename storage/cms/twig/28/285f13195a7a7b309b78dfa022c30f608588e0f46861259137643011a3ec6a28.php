<?php

/* /vagrant/www/dvoct/themes/dv/partials/account/register.htm */
class __TwigTemplate_f2fb8690b60d9682d0c85ea749e792147d68926e76a7ddee465919e00ec02cd2 extends Twig_Template
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
        echo "<form
        data-request=\"onRegister\">
    <div class=\"form-group\">
        <label for=\"registerName\">Full Name</label>
        <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerEmail\">Email</label>
        <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerPassword\">Password</label>
        <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Регистрация</button>
</form>
<ul>

</ul>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/account/register.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form
        data-request=\"onRegister\">
    <div class=\"form-group\">
        <label for=\"registerName\">Full Name</label>
        <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerEmail\">Email</label>
        <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
    </div>

    <div class=\"form-group\">
        <label for=\"registerPassword\">Password</label>
        <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Регистрация</button>
</form>
<ul>

</ul>", "/vagrant/www/dvoct/themes/dv/partials/account/register.htm", "");
    }
}
