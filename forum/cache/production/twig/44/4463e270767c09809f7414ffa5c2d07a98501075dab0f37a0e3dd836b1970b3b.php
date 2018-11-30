<?php

/* acp_upload.html */
class __TwigTemplate_fc395701d911f487889fa849057849429dceff69225f86b00e3f02a282419f3b extends Twig_Template
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
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 2
            $asset_file = "//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('134');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        } else {
            // line 4
            $asset_file = (("" . (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null)) . "ext/boardtools/upload/vendor/fortawesome/font-awesome/css/font-awesome.min.css");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('134');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        }
        // line 6
        $asset_file = "css/jquery.qtip.min.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 7
        $asset_file = "css/upload.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 8
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            $asset_file = "css/upload.rtl.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('134');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        }
        // line 9
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_upload.html", 9)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 10
        echo "
<div id=\"upload_ext_wrapper\">
\t<a name=\"maincontent\"></a>
\t<div id=\"upload_extensions_title_block\"><a href=\"";
        // line 13
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" id=\"upload_extensions_title\"><i class=\"fa fa-upload\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_TITLE");
        echo "</a><div id=\"upload_extensions_title_links\"><a href=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "&amp;action=details\" class=\"upload_details_link\"><i class=\"fa fa-info-circle\"></i></a><a href=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "&amp;action=details&amp;ext_show=faq\" class=\"upload_faq_link\"><i class=\"fa fa-question-circle\"></i></a><span id=\"upload_extensions_links_show_slider\"><i class=\"fa fa-ellipsis-v\"></i></span></div></div>
\t<span class=\"upload_ext_error_show\" title=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("EXT_LOAD_ERROR_SHOW");
        echo "\"><i class=\"fa fa-warning\"></i></span>
\t";
        // line 15
        if (((isset($context["UPLOAD_EXT_NEW_UPDATE"]) ? $context["UPLOAD_EXT_NEW_UPDATE"] : null) &&  !(isset($context["S_UPLOAD_DETAILS"]) ? $context["S_UPLOAD_DETAILS"] : null))) {
            echo "<a href=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "&amp;action=details\" class=\"upload_details_link upload_ext_update_button upload_ext_updates_info_link\"><i class=\"fa fa-refresh\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("EXT_UPDATES_AVAILABLE");
            echo "</a>";
        }
        // line 16
        echo "\t<p>";
        echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_DESCRIPTION");
        echo "</p>
\t<div id=\"upload_loading\"><span id=\"upload_loading_text\">";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "</span><span id=\"upload_loading_status\"></span></div>
\t<div id=\"upload_loading_error_wrapper\" title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("EXT_LOAD_ERROR_EXPLAIN");
        echo "\"><span id=\"upload_loading_error\">";
        echo $this->env->getExtension('phpbb')->lang("EXT_LOAD_ERROR");
        echo "</span><span id=\"upload_loading_timeout\">";
        echo $this->env->getExtension('phpbb')->lang("EXT_LOAD_TIMEOUT");
        echo "</span><span id=\"upload_loading_error_status\" data-load-error-solutions-title=\"";
        echo $this->env->getExtension('phpbb')->lang("POSSIBLE_SOLUTIONS");
        echo "\" data-load-error-solutions=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_LOAD_SOLUTIONS");
        echo "\"></span></div>
\t<div id=\"upload_main_wrapper\">
\t\t<div id=\"upload_main\" data-page-action=\"";
        // line 20
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" data-load-action=\"";
        echo (isset($context["S_LOAD_ACTION"]) ? $context["S_LOAD_ACTION"] : null);
        echo "\" data-page-url=\"";
        echo (isset($context["U_MAIN_PAGE_URL"]) ? $context["U_MAIN_PAGE_URL"] : null);
        echo "\">
\t\t\t";
        // line 21
        if ((isset($context["S_NEXT_STEP"]) ? $context["S_NEXT_STEP"] : null)) {
            // line 22
            echo "\t\t\t<div class=\"successbox notice\">
\t\t\t\t<p>";
            // line 23
            echo (isset($context["S_NEXT_STEP"]) ? $context["S_NEXT_STEP"] : null);
            echo "</p>
\t\t\t</div>
\t\t\t";
        } elseif (        // line 25
(isset($context["S_EXT_LIST"]) ? $context["S_EXT_LIST"] : null)) {
            // line 26
            echo "\t\t\t";
            $location = "acp_upload_list.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_list.html", "acp_upload.html", 26)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 27
            echo "\t\t\t";
        } elseif ((isset($context["S_ZIP_PACKAGES"]) ? $context["S_ZIP_PACKAGES"] : null)) {
            // line 28
            echo "\t\t\t";
            $location = "acp_upload_zip_packages.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_zip_packages.html", "acp_upload.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "\t\t\t";
        } elseif ((isset($context["S_UNINSTALLED"]) ? $context["S_UNINSTALLED"] : null)) {
            // line 30
            echo "\t\t\t";
            $location = "acp_upload_uninstalled.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_uninstalled.html", "acp_upload.html", 30)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 31
            echo "\t\t\t";
        } elseif ((isset($context["S_DETAILS"]) ? $context["S_DETAILS"] : null)) {
            // line 32
            echo "\t\t\t";
            $location = "acp_upload_details.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_details.html", "acp_upload.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 33
            echo "\t\t\t";
        } elseif ((isset($context["S_UPLOAD_DETAILS"]) ? $context["S_UPLOAD_DETAILS"] : null)) {
            // line 34
            echo "\t\t\t";
            $location = "acp_ext_details.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_ext_details.html", "acp_upload.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 35
            echo "\t\t\t";
        } elseif ((isset($context["S_EXT_ERROR"]) ? $context["S_EXT_ERROR"] : null)) {
            // line 36
            echo "\t\t\t";
            $location = "acp_upload_error.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_error.html", "acp_upload.html", 36)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 37
            echo "\t\t\t";
        } else {
            // line 38
            echo "\t\t\t";
            $location = "acp_upload_main.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_upload_main.html", "acp_upload.html", 38)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 39
            echo "\t\t\t";
        }
        // line 40
        echo "\t\t\t<br style=\"clear:both\" />
\t\t</div>
\t</div>
</div>
<div id=\"upload_temp_container\"></div>
<div id=\"upload_modal_box_wrapper\"><div id=\"upload_modal_box\"></div></div>
<div id=\"upload_refresh_notice_wrapper\"><div id=\"upload_refresh_notice\"><i class=\"fa fa-warning\"></i><span>";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("EXT_REFRESH_NOTICE");
        echo "</span><a href=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" class=\"page_refresh_link\"><i class=\"fa fa-refresh\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("EXT_REFRESH_PAGE");
        echo "</a><span class=\"upload_refresh_notice_close\">&times;</span></div></div>

";
        // line 48
        $asset_file = "js/php_file_tree_jquery.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 49
        $asset_file = "js/jquery.form.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 50
        $asset_file = "js/jquery.qtip.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 51
        $asset_file = "js/loading_progress.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 52
        $asset_file = "js/upload.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 53
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_upload.html", 53)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 53,  334 => 52,  323 => 51,  312 => 50,  301 => 49,  290 => 48,  281 => 46,  273 => 40,  270 => 39,  257 => 38,  254 => 37,  241 => 36,  238 => 35,  225 => 34,  222 => 33,  209 => 32,  206 => 31,  193 => 30,  190 => 29,  177 => 28,  174 => 27,  161 => 26,  159 => 25,  154 => 23,  151 => 22,  149 => 21,  141 => 20,  128 => 18,  124 => 17,  119 => 16,  111 => 15,  107 => 14,  97 => 13,  92 => 10,  80 => 9,  67 => 8,  56 => 7,  45 => 6,  33 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_ALLOW_CDN -->*/
/* <!-- INCLUDECSS //maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css -->*/
/* <!-- ELSE -->*/
/* <!-- INCLUDECSS {ROOT_PATH}ext/boardtools/upload/vendor/fortawesome/font-awesome/css/font-awesome.min.css -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDECSS css/jquery.qtip.min.css -->*/
/* <!-- INCLUDECSS css/upload.css -->*/
/* <!-- IF S_CONTENT_DIRECTION == 'rtl' --><!-- INCLUDECSS css/upload.rtl.css --><!-- ENDIF -->*/
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div id="upload_ext_wrapper">*/
/* 	<a name="maincontent"></a>*/
/* 	<div id="upload_extensions_title_block"><a href="{U_ACTION}" id="upload_extensions_title"><i class="fa fa-upload"></i> {L_ACP_UPLOAD_EXT_TITLE}</a><div id="upload_extensions_title_links"><a href="{U_ACTION}&amp;action=details" class="upload_details_link"><i class="fa fa-info-circle"></i></a><a href="{U_ACTION}&amp;action=details&amp;ext_show=faq" class="upload_faq_link"><i class="fa fa-question-circle"></i></a><span id="upload_extensions_links_show_slider"><i class="fa fa-ellipsis-v"></i></span></div></div>*/
/* 	<span class="upload_ext_error_show" title="{L_EXT_LOAD_ERROR_SHOW}"><i class="fa fa-warning"></i></span>*/
/* 	<!-- IF UPLOAD_EXT_NEW_UPDATE and not S_UPLOAD_DETAILS --><a href="{U_ACTION}&amp;action=details" class="upload_details_link upload_ext_update_button upload_ext_updates_info_link"><i class="fa fa-refresh"></i> {L_EXT_UPDATES_AVAILABLE}</a><!-- ENDIF -->*/
/* 	<p>{L_ACP_UPLOAD_EXT_DESCRIPTION}</p>*/
/* 	<div id="upload_loading"><span id="upload_loading_text">{L_LOADING}</span><span id="upload_loading_status"></span></div>*/
/* 	<div id="upload_loading_error_wrapper" title="{L_EXT_LOAD_ERROR_EXPLAIN}"><span id="upload_loading_error">{L_EXT_LOAD_ERROR}</span><span id="upload_loading_timeout">{L_EXT_LOAD_TIMEOUT}</span><span id="upload_loading_error_status" data-load-error-solutions-title="{L_POSSIBLE_SOLUTIONS}" data-load-error-solutions="{L_EXT_LOAD_SOLUTIONS}"></span></div>*/
/* 	<div id="upload_main_wrapper">*/
/* 		<div id="upload_main" data-page-action="{U_ACTION}" data-load-action="{S_LOAD_ACTION}" data-page-url="{U_MAIN_PAGE_URL}">*/
/* 			<!-- IF S_NEXT_STEP -->*/
/* 			<div class="successbox notice">*/
/* 				<p>{S_NEXT_STEP}</p>*/
/* 			</div>*/
/* 			<!-- ELSEIF S_EXT_LIST -->*/
/* 			<!-- INCLUDE acp_upload_list.html -->*/
/* 			<!-- ELSEIF S_ZIP_PACKAGES -->*/
/* 			<!-- INCLUDE acp_upload_zip_packages.html -->*/
/* 			<!-- ELSEIF S_UNINSTALLED -->*/
/* 			<!-- INCLUDE acp_upload_uninstalled.html -->*/
/* 			<!-- ELSEIF S_DETAILS -->*/
/* 			<!-- INCLUDE acp_upload_details.html -->*/
/* 			<!-- ELSEIF S_UPLOAD_DETAILS -->*/
/* 			<!-- INCLUDE acp_ext_details.html -->*/
/* 			<!-- ELSEIF S_EXT_ERROR -->*/
/* 			<!-- INCLUDE acp_upload_error.html -->*/
/* 			<!-- ELSE -->*/
/* 			<!-- INCLUDE acp_upload_main.html -->*/
/* 			<!-- ENDIF -->*/
/* 			<br style="clear:both" />*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div id="upload_temp_container"></div>*/
/* <div id="upload_modal_box_wrapper"><div id="upload_modal_box"></div></div>*/
/* <div id="upload_refresh_notice_wrapper"><div id="upload_refresh_notice"><i class="fa fa-warning"></i><span>{L_EXT_REFRESH_NOTICE}</span><a href="{U_ACTION}" class="page_refresh_link"><i class="fa fa-refresh"></i> {L_EXT_REFRESH_PAGE}</a><span class="upload_refresh_notice_close">&times;</span></div></div>*/
/* */
/* <!-- INCLUDEJS js/php_file_tree_jquery.js -->*/
/* <!-- INCLUDEJS js/jquery.form.js -->*/
/* <!-- INCLUDEJS js/jquery.qtip.min.js -->*/
/* <!-- INCLUDEJS js/loading_progress.js -->*/
/* <!-- INCLUDEJS js/upload.js -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
