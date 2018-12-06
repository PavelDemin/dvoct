<?php

/* /vagrant/www/dvoct/themes/dv/partials/account/signin.htm */
class __TwigTemplate_fc1c64df12cae8fdab0adf592d2477747328b9ef20cb40476fac1ef889add720 extends Twig_Template
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
        echo "<div class=\"user_status_block\">
";
        // line 2
        if ( !($context["user"] ?? null)) {
            // line 3
            echo "    
\t\t\t\t\t<div class=\"l-container clearfix\">
\t\t\t\t\t\t<div class=\"press--right\">
\t\t\t\t\t\t\t<span class=\"user-status\">Здравствуйте, <span class=\"st-yellow\">Гость</span>!</span>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link-login\">Вход</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\" class=\"link-reg\">Регистрация</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-login__centering l-container\">
\t\t\t\t\t\t<div class=\"form-login animated\">
\t\t\t\t\t\t<a href=\"#\" class=\"form-login__close\"></a>
\t\t\t\t\t\t\t<form data-request=\"onSignin\" action=\"\" method=\"POST\" id=\"form-login\">
\t\t\t\t\t\t\t\t<div class=\"form\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Логин\" name=\"login\" id=\"userSigninLogin\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" placeholder=\"Пароль\" id=\"userSigninPassword\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Запомнить меня
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--large\" type=\"submit\">Войти</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t

";
        } else {
            // line 37
            echo "
\t\t\t\t\t<div class=\"l-container clearfix\">
\t\t\t\t\t\t<div class=\"press--right\">
\t\t\t\t\t\t\t<span class=\"user-status\">Здравствуйте, <span class=\"st-yellow\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "</span>!</span>
\t\t\t\t\t\t<!--\t<a href =\"#\" class=\"user-profile\">Сообщения<span class=\"soobshenia\" title=\"Личные сообщения\">5</span></a>
\t\t\t\t\t\t\t<a href =\"";
            // line 42
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("profile");
            echo "\" class=\"user-profile\">Профиль</a>-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href =\"#\" data-request=\"onLogout\" class=\"user-status\">Выход</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

";
        }
        // line 50
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 50,  77 => 42,  72 => 40,  67 => 37,  35 => 8,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"user_status_block\">
{% if not user %}
    
\t\t\t\t\t<div class=\"l-container clearfix\">
\t\t\t\t\t\t<div class=\"press--right\">
\t\t\t\t\t\t\t<span class=\"user-status\">Здравствуйте, <span class=\"st-yellow\">Гость</span>!</span>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link-login\">Вход</a>
\t\t\t\t\t\t\t<a href=\"{{ 'register'|page }}\" class=\"link-reg\">Регистрация</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-login__centering l-container\">
\t\t\t\t\t\t<div class=\"form-login animated\">
\t\t\t\t\t\t<a href=\"#\" class=\"form-login__close\"></a>
\t\t\t\t\t\t\t<form data-request=\"onSignin\" action=\"\" method=\"POST\" id=\"form-login\">
\t\t\t\t\t\t\t\t<div class=\"form\" novalidate=\"novalidate\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Логин\" name=\"login\" id=\"userSigninLogin\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" placeholder=\"Пароль\" id=\"userSigninPassword\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Запомнить меня
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn--large\" type=\"submit\">Войти</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t

{% else %}

\t\t\t\t\t<div class=\"l-container clearfix\">
\t\t\t\t\t\t<div class=\"press--right\">
\t\t\t\t\t\t\t<span class=\"user-status\">Здравствуйте, <span class=\"st-yellow\">{{ user.name }}</span>!</span>
\t\t\t\t\t\t<!--\t<a href =\"#\" class=\"user-profile\">Сообщения<span class=\"soobshenia\" title=\"Личные сообщения\">5</span></a>
\t\t\t\t\t\t\t<a href =\"{{ 'profile'|page }}\" class=\"user-profile\">Профиль</a>-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href =\"#\" data-request=\"onLogout\" class=\"user-status\">Выход</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

{% endif %}
</div>", "/vagrant/www/dvoct/themes/dv/partials/account/signin.htm", "");
    }
}
