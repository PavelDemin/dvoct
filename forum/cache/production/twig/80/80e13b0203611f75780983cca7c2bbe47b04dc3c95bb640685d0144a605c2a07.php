<?php

/* overall_footer.html */
class __TwigTemplate_cdf509591be5880efac297bed9ce5a9ac059f0d0f5ac2c89fe34585626fa58fc extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 12
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 13
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 16
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 17
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 18
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 21
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 45
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 46
        echo "</div>
<div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-12 footer-composition\">
          <footer class=\"footer\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-md-5 col-sm-7\">
                  <nav class=\"menu-footer\">
                    <ul class=\"menu-footer__list\">
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Главная</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Форум</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Статьи</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Главная</a></li>
                    </ul>
                    <ul class=\"menu-footer__list\">
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Главная</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Форум</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Статьи</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Главная</a></li>
                    </ul>
                    <ul class=\"menu-footer__list\">
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Реклама на портале</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Форум</a></li>
                      <li class=\"menu-footer__item\"><a class=\"menu-footer__link\" href=\"#\">Статьи</a></li>
                    </ul>
                  </nav>
                </div>
                <div class=\"col-md-4 offset-md-3 col-sm-5\">
                  <div class=\"footer-right-block\">
                    <div class=\"social\">
                      <div class=\"social__item\"><a class=\"social__link\" href=\"#\"><i class=\"ficon-vkontakte\"></i></a></div>
                      <div class=\"social__item\"><a class=\"social__link\" href=\"#\"><i class=\"ficon-whatsapp\"></i></a></div>
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
          <div class=\"footer-copy\"><span>© 2009 - 2018 DV-FISHING.RU &nbsp;</span><span class=\"footer-copy__hide\">Копирование и публикация материалов без активной ссылки на первоисточник запрещены.                                     </span></div>
        </div>
      </div>
    </div>
<script src=\"";
        // line 94
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 95
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 96
        echo "<script src=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/libs/slick/slick.min.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
<script src=\"";
        // line 97
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/assets/js/main.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
<script src=\"";
        // line 98
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 99
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('35');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 100
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('35');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 101
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 102
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 107
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 114
        echo "
";
        // line 115
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 116
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 134
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 141
        echo "
";
        // line 142
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 143
        echo "
";
        // line 144
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 144)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 145
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 147
        // line 148
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 148,  319 => 147,  314 => 145,  300 => 144,  297 => 143,  292 => 142,  289 => 141,  279 => 134,  275 => 133,  271 => 132,  267 => 131,  246 => 116,  244 => 115,  241 => 114,  231 => 107,  224 => 102,  222 => 101,  211 => 100,  200 => 99,  194 => 98,  188 => 97,  181 => 96,  173 => 95,  169 => 94,  119 => 46,  115 => 45,  92 => 27,  77 => 23,  73 => 21,  65 => 18,  62 => 17,  59 => 16,  53 => 13,  50 => 12,  47 => 11,  46 => 10,  42 => 8,  30 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
