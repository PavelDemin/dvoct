<?php

/* /vagrant/www/dvoct/themes/dv/partials/footer.htm */
class __TwigTemplate_f8e7bd4b5250489dc5ff3b9609db33ea2c6d5c21336bcbae6acf9f5a402c9c77 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12 footer-composition\">
            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-7\">
                            <nav class=\"menu-footer\">
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"/\">Главная</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reports/report-list");
        echo "\">Отчеты</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("articles/articles-list");
        echo "\">Статьи</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video/video-list");
        echo "\">Видео</a></li>
                                </ul>
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"/forum\">Форум</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("maps");
        echo "\">Карта</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">О портале</a></li>
                                </ul>
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("adv");
        echo "\">Реклама на портале</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class=\"col-md-4 offset-md-3 col-sm-5\">
                            <div class=\"footer-right-block\">
                                <div class=\"social\">
                                    <div class=\"social__item\"><a class=\"social__link\" href=\"https://vk.com/club118899369\" target=\"_blank\"><i class=\"icon-vkontakte\"></i></a></div>
                                    <div class=\"social__item\"><a class=\"social__link\" href=\"https://dv-fishing.ru/forum/viewtopic.php?f=21&t=2626\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></div>
                                </div>
                                <div class=\"stat\"><img src=\"../assets/image/hit.gif\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col\">
            <div class=\"footer-copy\"><span>© 2009 - ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " DV-FISHING.RU &nbsp;</span><span class=\"footer-copy__hide\">Копирование и публикация материалов без активной ссылки на первоисточник запрещены.                                     </span></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/vagrant/www/dvoct/themes/dv/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 42,  64 => 22,  60 => 21,  54 => 18,  50 => 17,  43 => 13,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12 footer-composition\">
            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-7\">
                            <nav class=\"menu-footer\">
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"/\">Главная</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'reports/report-list'|page }}\">Отчеты</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'articles/articles-list'|page }}\">Статьи</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'video/video-list'|page }}\">Видео</a></li>
                                </ul>
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"/forum\">Форум</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'maps'|page }}\">Карта</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'about'|page }}\">О портале</a></li>
                                </ul>
                                <ul class=\"menu-footer__list\">
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'adv'|page }}\">Реклама на портале</a></li>
                                    <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"{{ 'contacts'|page }}\">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class=\"col-md-4 offset-md-3 col-sm-5\">
                            <div class=\"footer-right-block\">
                                <div class=\"social\">
                                    <div class=\"social__item\"><a class=\"social__link\" href=\"https://vk.com/club118899369\" target=\"_blank\"><i class=\"icon-vkontakte\"></i></a></div>
                                    <div class=\"social__item\"><a class=\"social__link\" href=\"https://dv-fishing.ru/forum/viewtopic.php?f=21&t=2626\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></div>
                                </div>
                                <div class=\"stat\"><img src=\"../assets/image/hit.gif\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col\">
            <div class=\"footer-copy\"><span>© 2009 - {{\"now\"|date(\"Y\")}} DV-FISHING.RU &nbsp;</span><span class=\"footer-copy__hide\">Копирование и публикация материалов без активной ссылки на первоисточник запрещены.                                     </span></div>
        </div>
    </div>
</div>", "/vagrant/www/dvoct/themes/dv/partials/footer.htm", "");
    }
}
