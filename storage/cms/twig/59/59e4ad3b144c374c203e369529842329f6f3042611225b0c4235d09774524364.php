<?php

/* /vagrant/www/dvoct/themes/dv/partials/header.htm */
class __TwigTemplate_95bfcbd7035dfad138ea233c4ad9d101661435a97e11e627e9c18e4dc5d215f1 extends Twig_Template
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
        echo "<div class=\"container-fluid wrapper\">
    <div class=\"row\">
        <div class=\"col-12 header-composition\">
            <header class=\"header\">
                <div class=\"container\">
                    <div class=\"row justify-content-between align-items-start\">
                        <div class=\"col-md-3 col-sm-4 col-8 logo\"><span class=\"logo__image\"><a href=\"#\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/logo.png");
        echo "\"></a></span>
                            <h1 class=\"logo__title\">Рыбалка в Хабаровском крае</h1>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-4 offset-md-2\">
                            <div class=\"social\">
                                <div class=\"social__item\"><a class=\"social__link\" href=\"https://vk.com/club118899369\" target=\"_blank\"><i class=\"icon-vkontakte\"></i></a></div>
                                <div class=\"social__item\"><a class=\"social__link\" href=\"https://dv-fishing.ru/forum/viewtopic.php?f=21&t=2626\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-0\">
                            <form class=\"search\" action=\"#\" method=\"GET\">
                                <input class=\"search__input\" name=\"q\" type=\"text\" placeholder=\"Поиск по сайту...\">
                                <button class=\"search__btn\" type=\"submit\" id=\"button\"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 login-wrap\">
            <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-md-auto offset-md-8\">
                        <div class=\"login\"><span class=\"login__welcome\">Здравствуйте,</span><span class=\"login__user\">&nbsp;Гость!</span><a class=\"login__link\" href=\"#\">Войти</a><a class=\"login__link\" href=\"#\">Регистрация</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 menu-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-auto\">
                        <div class=\"menu-mobile\"><span class=\"menu-mobile__item\">
                    <button class=\"menu-mobile__icon\"><span>Меню<i class=\"icon-menu\"></i></span></button></span><span class=\"menu-mobile__item\">               <a class=\"menu-mobile__link\" href=\"#\"><i class=\"icon-login\"></i></a><a class=\"menu-mobile__link\" href=\"#\"><i class=\"icon-user\"></i></a></span></div>
                        <nav class=\"menu\">
                            <ul class=\"menu__list menu__list-mobile\">
                                <li class=\"menu__item menu__item-active\"><a class=\"menu__link\" href=\"/\">Главная</a></li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"/forum\">Форум</a></li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("articles/articles-list");
        echo "\">Статьи</a>
                                    ";
        // line 50
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("header_menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 51
        echo "                                </li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-list");
        echo "\">Рыболовные отчеты</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("maps");
        echo "\">Карта</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-list");
        echo "\">Видео</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">О портале</a></li>
                                <li class=\"menu__item menu__item-tablet menu__item-mobile-hide\"><i class=\"icon-dot-3\"></i></li>
                            </ul>
                            <button class=\"menu__close\"><i class=\"icon-window-close\"></i></button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 55,  95 => 54,  91 => 53,  87 => 52,  84 => 51,  80 => 50,  76 => 49,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid wrapper\">
    <div class=\"row\">
        <div class=\"col-12 header-composition\">
            <header class=\"header\">
                <div class=\"container\">
                    <div class=\"row justify-content-between align-items-start\">
                        <div class=\"col-md-3 col-sm-4 col-8 logo\"><span class=\"logo__image\"><a href=\"#\"><img src=\"{{ 'assets/image/logo.png'|theme }}\"></a></span>
                            <h1 class=\"logo__title\">Рыбалка в Хабаровском крае</h1>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-4 offset-md-2\">
                            <div class=\"social\">
                                <div class=\"social__item\"><a class=\"social__link\" href=\"https://vk.com/club118899369\" target=\"_blank\"><i class=\"icon-vkontakte\"></i></a></div>
                                <div class=\"social__item\"><a class=\"social__link\" href=\"https://dv-fishing.ru/forum/viewtopic.php?f=21&t=2626\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-0\">
                            <form class=\"search\" action=\"#\" method=\"GET\">
                                <input class=\"search__input\" name=\"q\" type=\"text\" placeholder=\"Поиск по сайту...\">
                                <button class=\"search__btn\" type=\"submit\" id=\"button\"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 login-wrap\">
            <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-md-auto offset-md-8\">
                        <div class=\"login\"><span class=\"login__welcome\">Здравствуйте,</span><span class=\"login__user\">&nbsp;Гость!</span><a class=\"login__link\" href=\"#\">Войти</a><a class=\"login__link\" href=\"#\">Регистрация</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 menu-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-auto\">
                        <div class=\"menu-mobile\"><span class=\"menu-mobile__item\">
                    <button class=\"menu-mobile__icon\"><span>Меню<i class=\"icon-menu\"></i></span></button></span><span class=\"menu-mobile__item\">               <a class=\"menu-mobile__link\" href=\"#\"><i class=\"icon-login\"></i></a><a class=\"menu-mobile__link\" href=\"#\"><i class=\"icon-user\"></i></a></span></div>
                        <nav class=\"menu\">
                            <ul class=\"menu__list menu__list-mobile\">
                                <li class=\"menu__item menu__item-active\"><a class=\"menu__link\" href=\"/\">Главная</a></li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"/forum\">Форум</a></li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"{{ 'articles/articles-list'|page }}\">Статьи</a>
                                    {% component 'header_menu' %}
                                </li>
                                <li class=\"menu__item\"><a class=\"menu__link\" href=\"{{ 'reports/report-list'|page }}\">Рыболовные отчеты</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"{{ 'maps'|page }}\">Карта</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"{{ 'video/video-list'|page }}\">Видео</a></li>
                                <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"{{ 'about'|page }}\">О портале</a></li>
                                <li class=\"menu__item menu__item-tablet menu__item-mobile-hide\"><i class=\"icon-dot-3\"></i></li>
                            </ul>
                            <button class=\"menu__close\"><i class=\"icon-window-close\"></i></button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/vagrant/www/dvoct/themes/dv/partials/header.htm", "");
    }
}
