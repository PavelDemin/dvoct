<?php

/* overall_header.html */
class __TwigTemplate_8a7ec0e9a02a133377baa8263a46d9b625541b6fda6e2b880c2767f2a12297d6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => ($context["S_FORUM_ID"] ?? null)));
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => ($context["S_TOPIC_ID"] ?? null)));
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "<link href=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/libs/slick/slick.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;amp;subset=cyrillic\">
<link href=\"";
        // line 50
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/libs/bootstrap/bootstrap-grid.min.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/css/main.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 52
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 53
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 54
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 56
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 57
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 59
        echo "
";
        // line 60
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 61
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 63
        echo "
";
        // line 64
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 65
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 67
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 69
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 72
        // line 73
        echo "
";
        // line 74
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 76
        // line 77
        echo "<!--[if lt IE 9]>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script><![endif]-->
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 80
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
<div class=\"container-fluid wrapper\">
      <div class=\"row\">
        <div class=\"col-12 header-composition\">
          <header class=\"header\">
            <div class=\"container\">
              <div class=\"row justify-content-between align-items-start\">
                <div class=\"col-md-3 col-sm-4 col-8 logo\"><span class=\"logo__image\"><a href=\"#\"><img src=\"";
        // line 87
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/image/logo.png\"></a></span>
                  <h1 class=\"logo__title\">Рыбалка в Хабаровском крае</h1>
                </div>
                <div class=\"col-md-3 col-sm-3 col-4 offset-md-2\">
                  <div class=\"social\">
                    <div class=\"social__item\"><a class=\"social__link\" href=\"#\"><i class=\"ficon-vkontakte\"></i></a></div>
                    <div class=\"social__item\"><a class=\"social__link\" href=\"#\"><i class=\"ficon-whatsapp\"></i></a></div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-5 col-0\">
                \t";
        // line 97
        // line 98
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 99
            echo "                \t<div id=\"search-box\" role=\"search\">
\t                  <form class=\"search\" action=\"";
            // line 100
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
\t                    <input class=\"search__input\" name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 101
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"Поиск по сайту\">
\t                    <button class=\"search__btn\" type=\"submit\"></button>
\t                    \t";
            // line 103
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t                  </form>
                  </div>
                  ";
        }
        // line 107
        echo "\t\t\t\t\t\t\t\t\t";
        // line 108
        echo "                </div>
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
                    <button class=\"menu-mobile__icon\"><span>Меню<i class=\"ficon-menu\"></i></span></button></span><span class=\"menu-mobile__item\">               <a class=\"menu-mobile__link\" href=\"#\"><i class=\"ficon-login\"></i></a><a class=\"menu-mobile__link\" href=\"#\"><i class=\"ficon-user\"></i></a></span></div>
                <nav class=\"menu\">
                  <ul class=\"menu__list menu__list-mobile\">
                    <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Главная</a></li>
                    <li class=\"menu__item menu__item-active\"><a class=\"menu__link\" href=\"#\">Форум</a></li>
                    <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Статьи</a>
                      <ul class=\"menu__list menu__list-dropdown\">
                        <li class=\"menu__item menu__item-dropdown\"><a class=\"menu__link\" href=\"#\">Мушки</a></li>
                        <li class=\"menu__item menu__item-dropdown\"><a class=\"menu__link\" href=\"#\">Спиннинг</a></li>
                        <li class=\"menu__item menu__item-dropdown\"><a class=\"menu__link\" href=\"#\">Нахлыст</a></li>
                      </ul>
                    </li>
                    <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Рыболовные отчеты</a></li>
                    <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"#\">Карта</a></li>
                    <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"#\">Видео</a></li>
                    <li class=\"menu__item menu__item-mobile-hide\"><a class=\"menu__link\" href=\"#\">О портале</a></li>
                    <li class=\"menu__item menu__item-tablet menu__item-mobile-hide\"><i class=\"ficon-dot-3\"></i></li>
                  </ul>
                  <button class=\"menu__close\"><i class=\"ficon-window-close\"></i></button>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
";
        // line 157
        // line 158
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t";
        // line 162
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 162)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 163
        echo "\t</div>

\t";
        // line 165
        // line 166
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 169
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 170
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 172
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 176
        echo "
\t\t";
        // line 177
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 177,  433 => 176,  423 => 172,  419 => 170,  417 => 169,  412 => 166,  411 => 165,  407 => 163,  395 => 162,  389 => 158,  388 => 157,  337 => 108,  335 => 107,  328 => 103,  321 => 101,  317 => 100,  314 => 99,  311 => 98,  310 => 97,  297 => 87,  283 => 80,  278 => 77,  277 => 76,  272 => 74,  269 => 73,  268 => 72,  260 => 69,  256 => 67,  248 => 65,  246 => 64,  243 => 63,  235 => 61,  233 => 60,  230 => 59,  222 => 57,  220 => 56,  215 => 54,  211 => 53,  207 => 52,  201 => 51,  195 => 50,  187 => 48,  170 => 33,  168 => 32,  158 => 24,  152 => 22,  150 => 21,  147 => 20,  144 => 18,  131 => 17,  118 => 16,  107 => 15,  96 => 14,  85 => 13,  74 => 12,  63 => 11,  61 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
