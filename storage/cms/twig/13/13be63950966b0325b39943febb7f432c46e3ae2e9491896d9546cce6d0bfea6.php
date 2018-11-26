<?php

/* /home/pavel/htdocs/www/themes/dv/pages/about.htm */
class __TwigTemplate_959a505b7d09b96d12af5c268dcff80e8f4591dd3ff4c5c5cf38d8c687da26b1 extends Twig_Template
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
        echo "<div class=\"sidebar press--right\">


";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("popularPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_last_post_forum"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widget_cloud_tag"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "\t\t\t\t
\t\t\t\t</div><!--.sidebar-->

\t\t\t\t<div class=\"main-content press--left\">
\t\t\t\t    <div class=\"post post--big\">
                        <h1>О проекте</h1>
                        <p></p>
                        <p><b>DV-FISHING.RU</b> дальневосточный не коммерческий сайт, созданный для общения любителей рыбалки, охоты и активного отдыха на природе.
                        Сайт существует с 2009 года, перенес несколько крупных обновлений, одно из последних в ноябре 2016 года. Портал заметно преобразился и насытился
                        новым уникальным функционалом. Одно из нововведений это <b>рыболовная карта</b>! На ней будут отмечаться уловистые точки, кликнув по которой, вы попадете на страницу с отчетом
                        из этого места. По старой традиции у нас есть замечательный <b>форум</b>, где вы можете поделится своими мыслями или подчерпнуть информацию от более опытных рыбаков, да и вообще уютно провести время в хорошей компании единомышленников!
                            Форум это не место, форум это люди.</p>
                    </div>
\t\t\t\t</div><!--.main-content-->";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar press--right\">


{% component 'popularPosts' %}
{% partial \"widget_last_post_forum\" %}
{% partial \"widget_cloud_tag\" %}
\t\t\t\t
\t\t\t\t</div><!--.sidebar-->

\t\t\t\t<div class=\"main-content press--left\">
\t\t\t\t    <div class=\"post post--big\">
                        <h1>О проекте</h1>
                        <p></p>
                        <p><b>DV-FISHING.RU</b> дальневосточный не коммерческий сайт, созданный для общения любителей рыбалки, охоты и активного отдыха на природе.
                        Сайт существует с 2009 года, перенес несколько крупных обновлений, одно из последних в ноябре 2016 года. Портал заметно преобразился и насытился
                        новым уникальным функционалом. Одно из нововведений это <b>рыболовная карта</b>! На ней будут отмечаться уловистые точки, кликнув по которой, вы попадете на страницу с отчетом
                        из этого места. По старой традиции у нас есть замечательный <b>форум</b>, где вы можете поделится своими мыслями или подчерпнуть информацию от более опытных рыбаков, да и вообще уютно провести время в хорошей компании единомышленников!
                            Форум это не место, форум это люди.</p>
                    </div>
\t\t\t\t</div><!--.main-content-->", "/home/pavel/htdocs/www/themes/dv/pages/about.htm", "");
    }
}
