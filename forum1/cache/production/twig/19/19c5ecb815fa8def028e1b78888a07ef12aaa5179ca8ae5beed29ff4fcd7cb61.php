<?php

/* acp_upload_details.html */
class __TwigTemplate_5aacc0060c4be7614e4faedf472125d524b4139fa3497532289770916d457778 extends Twig_Template
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
        if ((isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null)) {
            $value = (("" . (isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null)) . "");
            $context['definition']->set('EXTENSION_NAME', $value);
        } else {
            // line 2
            $value = (("" . (isset($context["META_NAME"]) ? $context["META_NAME"] : null)) . "");
            $context['definition']->set('EXTENSION_NAME', $value);
        }
        // line 3
        echo "<a href=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" id=\"upload_load_main\">";
        echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_TITLE");
        echo "</a> &raquo; <a href=\"";
        echo (isset($context["U_ACTION_LIST"]) ? $context["U_ACTION_LIST"] : null);
        echo "\" id=\"upload_load_main_list\">";
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</a> &raquo; <strong>";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTENSION_NAME", array());
        echo "</strong>
<a href=\"";
        // line 4
        echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
        echo "\" class=\"ext_reload_link upload_get_details_link\" data-ext-name=\"";
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_RELOAD_PAGE");
        echo "\"><i class=\"fa fa-refresh\"></i></a>
<hr class=\"upload_ext_navigation\" />
<div id=\"extension_details_name_wrapper\">
\t<h1 class=\"ExtensionName";
        // line 7
        if ((isset($context["NOT_AVAILABLE"]) ? $context["NOT_AVAILABLE"] : null)) {
            echo " ext_not_available";
        }
        echo "\">
\t\t<i class=\"fa fa-cog\"></i> ";
        // line 8
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTENSION_NAME", array());
        echo "
\t\t<span data-ext-name=\"";
        // line 9
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "\" data-ext-update-enabled=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_ENABLED");
        echo "\" data-ext-update-disabled=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_DISABLED");
        echo "\" data-ext-update-purged=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_PURGED");
        echo "\" data-ext-update-error=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_UPDATE_ERROR");
        echo "\" data-ext-update-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_UPDATE_TIMEOUT");
        echo "\" data-ext-update-enable=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_UPDATE_ENABLE");
        echo "\" data-ext-update-check-filetree=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_UPDATE_CHECK_FILETREE");
        echo "\">
\t\t\t<a href=\"";
        // line 10
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "&amp;action=";
        if ((isset($context["S_IS_ENABLED"]) ? $context["S_IS_ENABLED"] : null)) {
            echo "disable";
        } else {
            echo "enable";
        }
        echo "&amp;ext_name=";
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "\" class=\"extension_toggle_wrapper ";
        if ((isset($context["S_IS_ENABLED"]) ? $context["S_IS_ENABLED"] : null)) {
            echo "extension_toggle_enabled";
        } else {
            echo "extension_toggle_disabled";
        }
        if (( !(isset($context["S_IS_ENABLED"]) ? $context["S_IS_ENABLED"] : null) &&  !(isset($context["S_IS_DISABLED"]) ? $context["S_IS_DISABLED"] : null))) {
            echo " extension_toggle_purged";
        }
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_ENABLE_DISABLE");
        echo "\"><span class=\"extension_toggle\"><i class=\"fa fa-power-off\"></i></span></a>
\t\t\t<a href=\"";
        // line 11
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "&amp;action=purge&amp;ext_name=";
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "\" class=\"extension_remove_data_button\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EXT_PURGE");
        echo "\"><i class=\"fa fa-trash\"></i></a>
\t\t</span>
\t</h1>
\t";
        // line 14
        if ((isset($context["META_VERSION"]) ? $context["META_VERSION"] : null)) {
            // line 15
            echo "\t";
            if (((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) && (isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null))) {
                // line 16
                echo "\t<div class=\"description_bubble small_bubble ext_version_bubble\">
\t\t<span class=\"description_name\">";
                // line 17
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo "</span>
\t\t<span class=\"description_value description_value_ok\" id=\"meta_version\" title=\"";
                // line 18
                echo (isset($context["UP_TO_DATE_MSG"]) ? $context["UP_TO_DATE_MSG"] : null);
                echo "\">";
                echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
                echo "</span>
\t</div>
\t";
            } elseif ((            // line 20
(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) &&  !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null))) {
                // line 21
                echo "\t<div class=\"description_bubble small_bubble ext_version_bubble\">
\t\t<span class=\"description_name\">";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo "</span>
\t\t<span class=\"description_value description_value_old\" id=\"meta_version\" title=\"";
                // line 23
                echo (isset($context["UP_TO_DATE_MSG"]) ? $context["UP_TO_DATE_MSG"] : null);
                echo "\">";
                echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
                echo "</span>
\t\t";
                // line 24
                if ((isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null)) {
                    // line 25
                    echo "\t\t<i class=\"fa fa-cog show_ext_updates\"></i>
\t\t<div id=\"description_updates\">
\t\t\t";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                        // line 28
                        echo "\t\t\t<span class=\"description_updates_latest_version\">";
                        echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
                        echo "</span>
\t\t\t<span class=\"description_updates_extension_latest_version\">";
                        // line 29
                        echo $this->getAttribute($context["updates_available"], "current", array());
                        echo "</span>
\t\t\t";
                        // line 30
                        if ($this->getAttribute($context["updates_available"], "download", array())) {
                            // line 31
                            echo "\t\t\t<span class=\"extension_update_link\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_LATEST");
                            echo "\"><i class=\"fa fa-refresh fa-fw\"></i>";
                            echo $this->env->getExtension('phpbb')->lang("UPDATE");
                            echo "</span>
\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t";
                        if ($this->getAttribute($context["updates_available"], "announcement", array())) {
                            // line 34
                            echo "\t\t\t<a href=\"";
                            echo $this->getAttribute($context["updates_available"], "announcement", array());
                            echo "\" class=\"extension_announcement_link\" title=\"";
                            echo $this->getAttribute($context["updates_available"], "announcement", array());
                            echo "\" target=\"_blank\"><i class=\"fa fa-bullhorn fa-fw\"></i>";
                            echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                            echo "</a>
\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t<div id=\"update_ext_confirm\">
\t\t\t\t<form id=\"upload_ext_update\" action=\"";
                        // line 37
                        echo (isset($context["U_UPLOAD"]) ? $context["U_UPLOAD"] : null);
                        echo "\" method=\"post\">
\t\t\t\t\t<span id=\"update_ext_confirm_title\"><i class=\"fa fa-refresh fa-lg\"></i> ";
                        // line 38
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPLOAD_UPDATE");
                        echo "</span>
\t\t\t\t\t<p class=\"ext_upload_form_explain\">";
                        // line 39
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPLOAD_UPDATE_EXPLAIN");
                        echo "</p>
\t\t\t\t\t<textarea id=\"update_confirm_address\" name=\"remote_upload\" readonly=\"readonly\" rows=\"5\">";
                        // line 40
                        echo $this->getAttribute($context["updates_available"], "download", array());
                        echo "</textarea>
\t\t\t\t\t";
                        // line 41
                        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                        echo "
\t\t\t\t\t";
                        // line 42
                        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                        echo "
\t\t\t\t\t<span id=\"br_form_upload\"></span>
\t\t\t\t\t";
                        // line 44
                        if ($this->getAttribute($context["updates_available"], "checksum", array())) {
                            // line 45
                            echo "\t\t\t\t\t<p class=\"ext_upload_form_explain\">";
                            echo $this->env->getExtension('phpbb')->lang("CHECKSUM");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " ";
                            echo $this->getAttribute($context["updates_available"], "checksum", array());
                            echo "</p>
\t\t\t\t\t<input type=\"hidden\" name=\"ext_checksum\" value=\"";
                            // line 46
                            echo $this->getAttribute($context["updates_available"], "checksum", array());
                            echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"ext_checksum_type\" value=\"md5\" />
\t\t\t\t\t";
                        }
                        // line 49
                        echo "\t\t\t\t\t<input type=\"checkbox\" name=\"keepext\" id=\"keepext\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EXT_UPLOAD_SAVE_ZIP");
                        echo "\" />
\t\t\t\t\t<label for=\"keepext\">";
                        // line 50
                        echo $this->env->getExtension('phpbb')->lang("EXT_UPLOAD_SAVE_ZIP");
                        echo "</label>
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                        // line 51
                        echo $this->env->getExtension('phpbb')->lang("UPDATE");
                        echo "\" id=\"upload_ext_update_submit\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t</div>
\t\t";
                }
                // line 57
                echo "\t</div>
\t";
            } else {
                // line 59
                echo "\t<div class=\"description_bubble small_bubble ext_version_bubble\">
\t\t<span class=\"description_name\">";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo "</span>
\t\t<span class=\"description_value\" id=\"meta_version\">";
                // line 61
                echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
                echo "</span>
\t</div>
\t";
            }
            // line 64
            echo "\t";
        }
        // line 65
        echo "</div>
";
        // line 66
        if ((isset($context["META_VERSION"]) ? $context["META_VERSION"] : null)) {
            // line 67
            echo "<div id=\"ext_versioncheck_error_box\" class=\"errorbox notice\"";
            if ( !(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
                echo " style=\"display:block;\"";
            }
            echo ">
\t<p class=\"ext_versioncheck_error_box_title\"";
            // line 68
            if (( !(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) && ((isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 0))) {
                echo " style=\"display:block;\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
            echo "</p>
\t<p class=\"ext_versioncheck_error_box_reason\">";
            // line 69
            if ( !(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
                echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
            }
            echo "</p>
\t<p class=\"ext_versioncheck_error_box_link\"";
            // line 70
            if (( !(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) && ((isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 0))) {
                echo " style=\"display:block;\"";
            }
            echo "><a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\" class=\"ext_versioncheck_force_link\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
</div>
";
        }
        // line 73
        if ((isset($context["EXT_ENABLE_STATUS"]) ? $context["EXT_ENABLE_STATUS"] : null)) {
            // line 74
            echo "<div class=\"ext_uploaded_notice\">
\t<h1><i class=\"fa fa-check\" id=\"uploaded_ok\"></i>";
            // line 75
            echo (isset($context["EXT_ENABLE_STATUS"]) ? $context["EXT_ENABLE_STATUS"] : null);
            echo "</h1>
</div>
";
        }
        // line 78
        if (((((isset($context["EXT_UPLOADED"]) ? $context["EXT_UPLOADED"] : null) || (isset($context["EXT_UPDATED"]) ? $context["EXT_UPDATED"] : null)) || (isset($context["EXT_LANGUAGE_UPLOADED"]) ? $context["EXT_LANGUAGE_UPLOADED"] : null)) || (isset($context["EXT_LANGUAGES_RESTORED"]) ? $context["EXT_LANGUAGES_RESTORED"] : null))) {
            // line 79
            echo "<div class=\"ext_uploaded_notice\">
\t<h1><i class=\"fa fa-check\" id=\"uploaded_ok\"></i>";
            // line 80
            if ((isset($context["EXT_LANGUAGES_RESTORED"]) ? $context["EXT_LANGUAGES_RESTORED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("EXT_LANGUAGES_RESTORED");
            } elseif ((isset($context["EXT_LANGUAGE_UPLOADED"]) ? $context["EXT_LANGUAGE_UPLOADED"] : null)) {
                echo (isset($context["EXT_LANGUAGE_UPLOADED"]) ? $context["EXT_LANGUAGE_UPLOADED"] : null);
            } elseif ((isset($context["EXT_UPDATED"]) ? $context["EXT_UPDATED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("EXT_UPDATED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("EXT_UPLOADED");
            }
            echo "</h1>
\t";
            // line 81
            if ((isset($context["EXT_OLD_ZIP_SAVED"]) ? $context["EXT_OLD_ZIP_SAVED"] : null)) {
                echo "<p>";
                echo (isset($context["EXT_OLD_ZIP_SAVED"]) ? $context["EXT_OLD_ZIP_SAVED"] : null);
                if ((isset($context["EXT_RESTORE_DIRECTORIES"]) ? $context["EXT_RESTORE_DIRECTORIES"] : null)) {
                    echo "<br />";
                    echo (isset($context["EXT_RESTORE_DIRECTORIES"]) ? $context["EXT_RESTORE_DIRECTORIES"] : null);
                    echo " <a href=\"";
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "&amp;action=restore_languages&amp;ext_name=";
                    echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                    echo "&amp;archive=";
                    echo (isset($context["S_EXT_LANGS_RESTORE_ZIP"]) ? $context["S_EXT_LANGS_RESTORE_ZIP"] : null);
                    echo "\" data-ext-restore=\"";
                    echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                    echo "&amp;archive=";
                    echo (isset($context["S_EXT_LANGS_RESTORE_ZIP"]) ? $context["S_EXT_LANGS_RESTORE_ZIP"] : null);
                    echo "\" class=\"ext_restore_languages\">";
                    echo $this->env->getExtension('phpbb')->lang("RESTORE");
                    echo "</a>.";
                }
                echo "</p>";
            }
            // line 82
            echo "</div>
";
        }
        // line 84
        if ((isset($context["EXT_UPDATED"]) ? $context["EXT_UPDATED"] : null)) {
            // line 85
            echo "<div class=\"ext_updated_notice\">
\t<h1><i class=\"fa fa-refresh\"></i> ";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_UPDATED");
            echo "</h1>
\t<p>";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_UPDATED_EXPLAIN");
            echo "</p>
</div>
";
        }
        // line 90
        if ((isset($context["S_EXTENSION_CHECKSUM_NOT_PROVIDED"]) ? $context["S_EXTENSION_CHECKSUM_NOT_PROVIDED"] : null)) {
            // line 91
            echo "<div class=\"ext_updated_notice\">
\t<h1><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE");
            echo "</h1>
\t<p>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("ACP_UPLOAD_EXT_NO_CHECKSUM");
            echo "</p>
</div>
";
        }
        // line 96
        if (((isset($context["NOT_AVAILABLE"]) ? $context["NOT_AVAILABLE"] : null) && ((isset($context["S_IS_ENABLED"]) ? $context["S_IS_ENABLED"] : null) || (isset($context["S_IS_DISABLED"]) ? $context["S_IS_DISABLED"] : null)))) {
            // line 97
            echo "<div class=\"ext_broken_notice\">
\t<h1><i class=\"fa fa-warning\"></i> ";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_BROKEN_TITLE");
            echo "</h1>
\t<span>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_BROKEN_EXPLAIN");
            echo "</span>
</div>
";
        }
        // line 102
        echo "<div class=\"ext_details_container\">
\t<div class=\"ext_details_tabs\">
\t\t<ul>
\t\t\t<li class=\"tab";
        // line 105
        if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "details")) {
            echo " activetab";
        }
        echo "\" id=\"ext_details_main_tab\"><a href=\"";
        echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
        echo "&amp;ext_show=details\"><i class=\"fa fa-book\"></i> <span>";
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS");
        echo "</span></a></li>
\t\t\t";
        // line 106
        if ((isset($context["EXT_DETAILS_README"]) ? $context["EXT_DETAILS_README"] : null)) {
            echo "<li class=\"tab";
            if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "readme")) {
                echo " activetab";
            }
            echo "\" id=\"ext_details_readme_tab\"><a href=\"";
            echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
            echo "&amp;ext_show=readme\"><i class=\"fa fa-info\"></i> <span>";
            echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS_README");
            echo "</span></a></li>";
        }
        // line 107
        echo "\t\t\t";
        if ((isset($context["EXT_DETAILS_CHANGELOG"]) ? $context["EXT_DETAILS_CHANGELOG"] : null)) {
            echo "<li class=\"tab";
            if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "changelog")) {
                echo " activetab";
            }
            echo "\" id=\"ext_details_changelog_tab\"><a href=\"";
            echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
            echo "&amp;ext_show=changelog\"><i class=\"fa fa-pencil\"></i> <span>";
            echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS_CHANGELOG");
            echo "</span></a></li>";
        }
        // line 108
        echo "\t\t\t<li class=\"tab";
        if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "languages")) {
            echo " activetab";
        }
        echo "\" id=\"ext_details_languages_tab\"><a href=\"";
        echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
        echo "&amp;ext_show=languages\"><i class=\"fa fa-language\"></i> <span>";
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS_LANGUAGES");
        echo "</span></a></li>
\t\t\t<li class=\"tab";
        // line 109
        if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "filetree")) {
            echo " activetab";
        }
        echo "\" id=\"ext_details_filetree_tab\"><a href=\"";
        echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
        echo "&amp;ext_show=filetree\"><i class=\"fa fa-sitemap\"></i> <span>";
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS_FILETREE");
        echo "</span></a></li>
\t\t\t<li class=\"tab";
        // line 110
        if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "tools")) {
            echo " activetab";
        }
        echo "\" id=\"ext_details_tools_tab\"><a href=\"";
        echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
        echo "&amp;ext_show=tools\"><i class=\"fa fa-wrench\"></i> <span>";
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS_TOOLS");
        echo "</span></a></li>
\t\t\t";
        // line 111
        if ((isset($context["EXT_DETAILS_UPDATE"]) ? $context["EXT_DETAILS_UPDATE"] : null)) {
            echo "<li class=\"tab";
            if (((isset($context["SHOW_DETAILS_TAB"]) ? $context["SHOW_DETAILS_TAB"] : null) == "update")) {
                echo " activetab";
            }
            echo "\" id=\"ext_details_update_tab\"><a href=\"";
            echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
            echo "&amp;ext_show=update\"><i class=\"fa fa-refresh\"></i> <span>";
            echo $this->env->getExtension('phpbb')->lang("UPDATE");
            echo "</span></a></li>";
        }
        // line 112
        echo "\t\t</ul>
\t</div>
\t<div class=\"ext_details_block\" data-load-full-page=\"";
        // line 114
        echo (isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null);
        echo "\">
\t\t";
        // line 115
        if (((isset($context["EXT_DETAILS_MARKDOWN"]) ? $context["EXT_DETAILS_MARKDOWN"] : null) &&  !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
            // line 116
            echo "\t\t<div class=\"ext_details_markdown\" style=\"display:block;\">";
            echo (isset($context["EXT_DETAILS_MARKDOWN"]) ? $context["EXT_DETAILS_MARKDOWN"] : null);
            echo "</div>
\t\t";
        }
        // line 118
        echo "\t\t";
        if (((isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null) || (isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null))) {
            // line 119
            echo "\t\t<div class=\"ext_details_markdown\" id=\"ext_details_readme\">";
            echo (isset($context["EXT_DETAILS_README"]) ? $context["EXT_DETAILS_README"] : null);
            echo "</div>
\t\t<div class=\"ext_details_markdown\" id=\"ext_details_changelog\">";
            // line 120
            echo (isset($context["EXT_DETAILS_CHANGELOG"]) ? $context["EXT_DETAILS_CHANGELOG"] : null);
            echo "</div>
\t\t";
        }
        // line 122
        echo "\t\t";
        if (((isset($context["EXT_DETAILS_LANGUAGES"]) ? $context["EXT_DETAILS_LANGUAGES"] : null) || (isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
            // line 123
            echo "\t\t<div id=\"ext_languages\" data-ext-show-languages=\"";
            echo (isset($context["S_EXT_DETAILS_SHOW_LANGUAGES"]) ? $context["S_EXT_DETAILS_SHOW_LANGUAGES"] : null);
            echo "\"";
            if (( !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null) &&  !(isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null))) {
                echo " style=\"display:block;\"";
            }
            echo ">
\t\t\t";
            // line 124
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "ext_languages", array()))) {
                // line 125
                echo "\t\t\t<form method=\"post\" action=\"";
                echo (isset($context["U_DELETE_ACTION"]) ? $context["U_DELETE_ACTION"] : null);
                echo "\" data-ajax=\"language_rows_delete\">
\t\t\t\t<fieldset id=\"ext_languages_list\">
\t\t\t\t\t<span class=\"description_title ext_languages_title\">";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("EXT_LANGUAGES");
                echo "</span>
\t\t\t\t\t";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "ext_languages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ext_languages"]) {
                    // line 129
                    echo "\t\t\t\t\t<div class=\"ext_language_row\">
\t\t\t\t\t\t<span class=\"ext_language_name\">";
                    // line 130
                    echo $this->getAttribute($context["ext_languages"], "NAME", array());
                    echo "</span>
\t\t\t\t\t\t<div class=\"ext_language_actions\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"radio ext_check_box\" name=\"mark[]\" value=\"";
                    // line 132
                    echo $this->getAttribute($context["ext_languages"], "NAME", array());
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 135
                    if ( !$this->getAttribute($context["ext_languages"], "S_LAST_ROW", array())) {
                        echo "<hr class=\"dashed\" />";
                    }
                    // line 136
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext_languages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "\t\t\t\t\t<fieldset class=\"quick\">
\t\t\t\t\t\t<p class=\"small ext_mark_check\"><a href=\"#\" onclick=\"marklist('ext_languages_list', 'mark', true); return false;\">";
                // line 138
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ext_languages_list', 'mark', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></p>
\t\t\t\t\t\t<button class=\"ext_language_delete\" type=\"submit\" name=\"delmarked\"><i class=\"fa fa-trash\"></i> ";
                // line 139
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "</button>
\t\t\t\t\t</fieldset>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t\t";
            }
            // line 144
            echo "\t\t\t<form action=\"";
            echo (isset($context["U_UPLOAD"]) ? $context["U_UPLOAD"] : null);
            echo "\" method=\"post\" id=\"ext_upload\" autocomplete=\"off\" ";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
\t\t\t\t<fieldset>
\t\t\t\t\t<div id=\"ext_upload_content\">
\t\t\t\t\t\t<span class=\"ext_upload_form_name\"><i class=\"fa fa-upload fa-lg\"></i> ";
            // line 147
            echo $this->env->getExtension('phpbb')->lang("EXT_LANGUAGES_UPLOAD");
            echo "</span>
\t\t\t\t\t\t<p class=\"ext_upload_form_explain\">";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("EXT_LANGUAGES_UPLOAD_EXPLAIN");
            echo "</p>
\t\t\t\t\t\t<input type=\"text\" id=\"remote_upload\" name=\"remote_upload\" />
\t\t\t\t\t\t<input type=\"button\" id=\"button_upload\" style=\"display:none;\" value=\"";
            // line 150
            echo $this->env->getExtension('phpbb')->lang("BROWSE");
            echo "\" onclick=\"browseFile();\" />
\t\t\t\t\t\t<input type=\"file\" id=\"extupload\" name=\"extupload\" accept=\".zip\" onchange=\"setFileName();\" />
\t\t\t\t\t\t";
            // line 152
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t\t\t";
            // line 153
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t<span class=\"br_form_upload\"></span>
\t\t\t\t\t\t<label for=\"ext_language_code\">";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("EXT_LANGUAGE_ISO_CODE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" id=\"ext_language_code\" name=\"ext_lang_name\" />
\t\t\t\t\t\t<label for=\"ext_checksum\">";
            // line 157
            echo $this->env->getExtension('phpbb')->lang("CHECKSUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t<input type=\"radio\" name=\"ext_checksum_type\" id=\"ext_checksum_type_md5\" value=\"md5\" checked=\"checked\" />
\t\t\t\t\t\t<label for=\"ext_checksum_type_md5\">md5</label>
\t\t\t\t\t\t<input type=\"radio\" name=\"ext_checksum_type\" id=\"ext_checksum_type_sha1\" value=\"sha1\" />
\t\t\t\t\t\t<label for=\"ext_checksum_type_sha1\">sha1</label>
\t\t\t\t\t\t<input type=\"text\" id=\"ext_checksum\" name=\"ext_checksum\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"ext_name\" value=\"";
            // line 163
            echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
            echo "\" />
\t\t\t\t\t\t<button class=\"upload_ext_upload_button\" type=\"submit\" name=\"submit\" value=\"";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("UPLOAD");
            echo "\" id=\"submit\"><i class=\"fa fa-upload\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("UPLOAD");
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<i id=\"upload\" class=\"fa fa-spinner fa-3x fa-spin\"></i>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t";
        }
        // line 171
        echo "\t\t";
        if (((isset($context["EXT_DETAILS_FILETREE"]) ? $context["EXT_DETAILS_FILETREE"] : null) || (isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
            // line 172
            echo "\t\t<div id=\"filetree\"";
            if (( !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null) &&  !(isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null))) {
                echo " style=\"display:block;\"";
            }
            echo ">
\t\t\t<div id=\"filetreenames\">";
            // line 173
            echo (isset($context["FILETREE"]) ? $context["FILETREE"] : null);
            echo "</div>
\t\t\t<div id=\"filecontent_wrapper\">
\t\t\t\t<div id=\"filecontent\"><div class=\"filename\">";
            // line 175
            echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
            echo "</div><div class=\"filecontent\">";
            echo (isset($context["CONTENT"]) ? $context["CONTENT"] : null);
            echo "</div></div>
\t\t\t\t<span class=\"select_all_code\">";
            // line 176
            echo $this->env->getExtension('phpbb')->lang("SELECT_ALL_CODE");
            echo "</span>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 180
        echo "\t\t";
        if (((isset($context["EXT_DETAILS_TOOLS"]) ? $context["EXT_DETAILS_TOOLS"] : null) || (isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
            // line 181
            echo "\t\t<div id=\"ext_details_tools\"";
            if (( !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null) &&  !(isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null))) {
                echo " style=\"display:block;\"";
            }
            echo ">
\t\t\t<fieldset class=\"description_fieldset description_update_form\">
\t\t\t\t<span class=\"description_title\"><i class=\"fa fa-download fa-lg\"></i> ";
            // line 183
            echo $this->env->getExtension('phpbb')->lang("EXT_TOOLS_DOWNLOAD_TITLE");
            echo "</span>
\t\t\t\t<form action=\"";
            // line 184
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "&amp;action=download&amp;ext_name=";
            echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
            echo "\" method=\"post\">
\t\t\t\t\t<span class=\"description_update_form_explain\">";
            // line 185
            echo $this->env->getExtension('phpbb')->lang("EXT_TOOLS_DOWNLOAD");
            echo "</span>
\t\t\t\t\t<input type=\"checkbox\" name=\"ext_delete_suffix\" id=\"ext_delete_suffix\" title=\"";
            // line 186
            echo $this->env->getExtension('phpbb')->lang("EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX");
            echo "\" />
\t\t\t\t\t<label for=\"ext_delete_suffix\">";
            // line 187
            echo $this->env->getExtension('phpbb')->lang("EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX");
            echo "</label>
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 188
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD");
            echo "\" />
\t\t\t\t</form>
\t\t\t</fieldset>
\t\t</div>
\t\t";
        }
        // line 193
        echo "\t\t";
        if (((isset($context["EXT_DETAILS_UPDATE"]) ? $context["EXT_DETAILS_UPDATE"] : null) &&  !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
            // line 194
            echo "\t\t<div id=\"ext_details_content\">
\t\t\t";
            // line 195
            if ((((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) &&  !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) &&  !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
                // line 196
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                    // line 197
                    echo "\t\t\t<fieldset style=\"background-color: #fdfcd3;\">
\t\t\t\t<span class=\"extension_latest_version_title\">";
                    // line 198
                    echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
                    echo "</span>
\t\t\t\t<div class=\"extension_latest_version_wrapper\">
\t\t\t\t\t<strong class=\"extension_latest_version\">";
                    // line 200
                    echo $this->getAttribute($context["updates_available"], "current", array());
                    echo "</strong>
\t\t\t\t\t";
                    // line 201
                    if ($this->getAttribute($context["updates_available"], "announcement", array())) {
                        // line 202
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["updates_available"], "announcement", array());
                        echo "\" class=\"extension_author_link\" title=\"";
                        echo $this->getAttribute($context["updates_available"], "announcement", array());
                        echo "\" target=\"_blank\"><i class=\"fa fa-bullhorn\"></i><span>";
                        echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                        echo "</span></a>
\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t";
                    // line 206
                    if ($this->getAttribute($context["updates_available"], "download", array())) {
                        // line 207
                        echo "\t\t\t<fieldset class=\"description_fieldset description_update_form\">
\t\t\t\t<span class=\"description_title\"><i class=\"fa fa-refresh fa-lg\"></i> ";
                        // line 208
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPLOAD_UPDATE");
                        echo "</span>
\t\t\t\t<form action=\"";
                        // line 209
                        echo (isset($context["U_UPLOAD"]) ? $context["U_UPLOAD"] : null);
                        echo "\" method=\"post\">
\t\t\t\t\t<span class=\"description_update_form_explain\">";
                        // line 210
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPLOAD_UPDATE_EXPLAIN");
                        echo "</span>
\t\t\t\t\t<textarea id=\"update_get_confirm_address\" name=\"remote_upload\" readonly=\"readonly\" rows=\"5\">";
                        // line 211
                        echo $this->getAttribute($context["updates_available"], "download", array());
                        echo "</textarea>
\t\t\t\t\t";
                        // line 212
                        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                        echo "
\t\t\t\t\t";
                        // line 213
                        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                        echo "
\t\t\t\t\t<span class=\"br_form_upload\"></span>
\t\t\t\t\t";
                        // line 215
                        if ($this->getAttribute($context["updates_available"], "checksum", array())) {
                            // line 216
                            echo "\t\t\t\t\t<span class=\"description_update_form_explain\">";
                            echo $this->env->getExtension('phpbb')->lang("CHECKSUM");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " ";
                            echo $this->getAttribute($context["updates_available"], "checksum", array());
                            echo "</span>
\t\t\t\t\t<input type=\"hidden\" name=\"ext_checksum\" value=\"";
                            // line 217
                            echo $this->getAttribute($context["updates_available"], "checksum", array());
                            echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"ext_checksum_type\" value=\"md5\" />
\t\t\t\t\t";
                        }
                        // line 220
                        echo "\t\t\t\t\t<input type=\"checkbox\" name=\"keepext\" id=\"keepextupdate\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EXT_UPLOAD_SAVE_ZIP");
                        echo "\" />
\t\t\t\t\t<label for=\"keepextupdate\">";
                        // line 221
                        echo $this->env->getExtension('phpbb')->lang("EXT_UPLOAD_SAVE_ZIP");
                        echo "</label>
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                        // line 222
                        echo $this->env->getExtension('phpbb')->lang("UPDATE");
                        echo "\" />
\t\t\t\t</form>
\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "\t\t\t";
            }
            // line 228
            echo "\t\t</div>
\t\t";
        }
        // line 230
        echo "\t\t";
        if ((((((( !(isset($context["EXT_DETAILS_MARKDOWN"]) ? $context["EXT_DETAILS_MARKDOWN"] : null) &&  !(isset($context["EXT_DETAILS_LANGUAGES"]) ? $context["EXT_DETAILS_LANGUAGES"] : null)) &&  !(isset($context["EXT_DETAILS_FILETREE"]) ? $context["EXT_DETAILS_FILETREE"] : null)) &&  !(isset($context["EXT_DETAILS_UPDATE"]) ? $context["EXT_DETAILS_UPDATE"] : null)) &&  !(isset($context["EXT_DETAILS_TOOLS"]) ? $context["EXT_DETAILS_TOOLS"] : null)) || (isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null)) || (isset($context["S_LOAD_FULL_PAGE"]) ? $context["S_LOAD_FULL_PAGE"] : null))) {
            // line 231
            echo "\t\t<div id=\"ext_details_content\">
\t\t\t";
            // line 232
            if ((isset($context["NOT_AVAILABLE"]) ? $context["NOT_AVAILABLE"] : null)) {
                // line 233
                echo "\t\t\t<div class=\"errorbox\">";
                echo (isset($context["NOT_AVAILABLE"]) ? $context["NOT_AVAILABLE"] : null);
                echo "</div>
\t\t\t";
            } else {
                // line 235
                echo "\t\t\t";
                if ((isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null)) {
                    // line 236
                    echo "\t\t\t<fieldset class=\"description_fieldset\">
\t\t\t\t<span id=\"meta_description\" class=\"description_title\">";
                    // line 237
                    echo $this->env->getExtension('phpbb')->lang("DESCRIPTION");
                    echo "</span>
\t\t\t\t<p>";
                    // line 238
                    echo (isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null);
                    echo "</p>
\t\t\t</fieldset>
\t\t\t";
                }
                // line 241
                echo "\t\t\t";
                if ((((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) &&  !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) &&  !(isset($context["HAS_AJAX"]) ? $context["HAS_AJAX"] : null))) {
                    // line 242
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                        // line 243
                        echo "\t\t\t<fieldset style=\"background-color: #fdfcd3;\">
\t\t\t\t<span class=\"extension_latest_version_title\">";
                        // line 244
                        echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
                        echo "</span>
\t\t\t\t<div class=\"extension_latest_version_wrapper\">
\t\t\t\t\t<strong class=\"extension_latest_version\">";
                        // line 246
                        echo $this->getAttribute($context["updates_available"], "current", array());
                        echo "</strong>
\t\t\t\t\t";
                        // line 247
                        if ($this->getAttribute($context["updates_available"], "announcement", array())) {
                            // line 248
                            echo "\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["updates_available"], "announcement", array());
                            echo "\" class=\"extension_author_link\" title=\"";
                            echo $this->getAttribute($context["updates_available"], "announcement", array());
                            echo "\" target=\"_blank\"><i class=\"fa fa-bullhorn\"></i><span>";
                            echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                            echo "</span></a>
\t\t\t\t\t";
                        }
                        // line 250
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["updates_available"], "download", array())) {
                            // line 251
                            echo "\t\t\t\t\t<a href=\"";
                            echo (isset($context["U_EXT_DETAILS"]) ? $context["U_EXT_DETAILS"] : null);
                            echo "&amp;ext_show=update\" class=\"extension_get_update_link\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_LATEST");
                            echo "\"><i class=\"fa fa-refresh\"></i>";
                            echo $this->env->getExtension('phpbb')->lang("UPDATE");
                            echo "</a>
\t\t\t\t\t";
                        }
                        // line 253
                        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 256
                    echo "\t\t\t";
                }
                // line 257
                echo "\t\t\t<fieldset>
\t\t\t\t<div class=\"description_bubble big_bubble\">
\t\t\t\t\t<span class=\"description_name\">";
                // line 259
                echo $this->env->getExtension('phpbb')->lang("CLEAN_NAME");
                echo "</span>
\t\t\t\t\t<strong class=\"description_value\" id=\"meta_name\">";
                // line 260
                echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                echo "</strong>
\t\t\t\t</div>
\t\t\t\t";
                // line 262
                if ((isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null)) {
                    // line 263
                    echo "\t\t\t\t<div class=\"description_bubble big_bubble\">
\t\t\t\t\t<span class=\"description_name\">";
                    // line 264
                    echo $this->env->getExtension('phpbb')->lang("HOMEPAGE");
                    echo "</span>
\t\t\t\t\t<strong class=\"description_value\" id=\"meta_homepage\"><a href=\"";
                    // line 265
                    echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
                    echo "\" title=\"";
                    echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
                    echo "\" target=\"_blank\"><i class=\"fa fa-globe\"></i></a></strong>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 268
                echo "\t\t\t\t";
                if ((isset($context["META_TIME"]) ? $context["META_TIME"] : null)) {
                    // line 269
                    echo "\t\t\t\t<div class=\"description_bubble small_bubble\">
\t\t\t\t\t<span class=\"description_name\">";
                    // line 270
                    echo $this->env->getExtension('phpbb')->lang("TIME");
                    echo "</span>
\t\t\t\t\t<span class=\"description_value\" id=\"meta_time\">";
                    // line 271
                    echo (isset($context["META_TIME"]) ? $context["META_TIME"] : null);
                    echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 274
                echo "\t\t\t\t<div class=\"description_bubble small_bubble\">
\t\t\t\t\t<span class=\"description_name\">";
                // line 275
                echo $this->env->getExtension('phpbb')->lang("LICENSE");
                echo "</span>
\t\t\t\t\t<span class=\"description_value\" id=\"meta_license\">";
                // line 276
                echo (isset($context["META_LICENSE"]) ? $context["META_LICENSE"] : null);
                echo "</span>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t";
                // line 279
                if (((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null) || (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null))) {
                    // line 280
                    echo "\t\t\t<fieldset>
\t\t\t\t<span class=\"requirements_title\">";
                    // line 281
                    echo $this->env->getExtension('phpbb')->lang("REQUIREMENTS");
                    echo "</span>
\t\t\t\t";
                    // line 282
                    if ((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null)) {
                        // line 283
                        echo "\t\t\t\t<div class=\"requirements_bubble\">
\t\t\t\t\t<span class=\"requirements_name\">";
                        // line 284
                        echo $this->env->getExtension('phpbb')->lang("PHPBB_VERSION");
                        echo "</span>
\t\t\t\t\t<span class=\"requirements_value";
                        // line 285
                        if ((isset($context["META_REQUIRE_PHPBB_FAIL"]) ? $context["META_REQUIRE_PHPBB_FAIL"] : null)) {
                            echo " requirements_value_not_met";
                        }
                        echo "\" id=\"require_phpbb\">";
                        echo (isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null);
                        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 288
                    echo "\t\t\t\t";
                    if ((isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null)) {
                        // line 289
                        echo "\t\t\t\t<div class=\"requirements_bubble\">
\t\t\t\t\t<span class=\"requirements_name\">";
                        // line 290
                        echo $this->env->getExtension('phpbb')->lang("PHP_VERSION");
                        echo "</span>
\t\t\t\t\t<span class=\"requirements_value";
                        // line 291
                        if ((isset($context["META_REQUIRE_PHP_FAIL"]) ? $context["META_REQUIRE_PHP_FAIL"] : null)) {
                            echo " requirements_value_not_met";
                        }
                        echo "\" id=\"require_php\">";
                        echo (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null);
                        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 294
                    echo "\t\t\t</fieldset>
\t\t\t";
                }
                // line 296
                echo "\t\t\t<fieldset>
\t\t\t\t";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "meta_authors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
                    // line 298
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["meta_authors"], "S_FIRST_ROW", array())) {
                        // line 299
                        echo "\t\t\t\t";
                        if ($this->getAttribute($context["meta_authors"], "S_LAST_ROW", array())) {
                            // line 300
                            echo "\t\t\t\t<span class=\"requirements_title\">";
                            echo $this->env->getExtension('phpbb')->lang("DEVELOPER");
                            echo "</span>
\t\t\t\t";
                        } else {
                            // line 302
                            echo "\t\t\t\t<span class=\"requirements_title\">";
                            echo $this->env->getExtension('phpbb')->lang("DEVELOPERS");
                            echo "</span>
\t\t\t\t";
                        }
                        // line 304
                        echo "\t\t\t\t";
                    }
                    // line 305
                    echo "\t\t\t\t<div class=\"extension_author\">
\t\t\t\t\t<strong class=\"extension_author_name\">";
                    // line 306
                    echo $this->getAttribute($context["meta_authors"], "AUTHOR_NAME", array());
                    echo "</strong>
\t\t\t\t\t";
                    // line 307
                    if ($this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array())) {
                        // line 308
                        echo "\t\t\t\t\t<a href=\"mailto:";
                        echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("AUTHOR_EMAIL");
                        echo "\" class=\"extension_author_link\"><i class=\"fa fa-envelope\"></i></a>
\t\t\t\t\t";
                    }
                    // line 310
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array())) {
                        // line 311
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("AUTHOR_HOMEPAGE");
                        echo "\" class=\"extension_author_link\" target=\"_blank\"><i class=\"fa fa-globe\"></i></a>
\t\t\t\t\t";
                    }
                    // line 313
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "\t\t\t</fieldset>
\t\t";
            }
            // line 317
            echo "\t\t</div>
\t\t";
        }
        // line 319
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "acp_upload_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1111 => 319,  1107 => 317,  1103 => 315,  1096 => 313,  1088 => 311,  1085 => 310,  1077 => 308,  1075 => 307,  1071 => 306,  1068 => 305,  1065 => 304,  1059 => 302,  1053 => 300,  1050 => 299,  1047 => 298,  1043 => 297,  1040 => 296,  1036 => 294,  1026 => 291,  1022 => 290,  1019 => 289,  1016 => 288,  1006 => 285,  1002 => 284,  999 => 283,  997 => 282,  993 => 281,  990 => 280,  988 => 279,  982 => 276,  978 => 275,  975 => 274,  969 => 271,  965 => 270,  962 => 269,  959 => 268,  951 => 265,  947 => 264,  944 => 263,  942 => 262,  937 => 260,  933 => 259,  929 => 257,  926 => 256,  918 => 253,  908 => 251,  905 => 250,  895 => 248,  893 => 247,  889 => 246,  884 => 244,  881 => 243,  876 => 242,  873 => 241,  867 => 238,  863 => 237,  860 => 236,  857 => 235,  851 => 233,  849 => 232,  846 => 231,  843 => 230,  839 => 228,  836 => 227,  830 => 226,  823 => 222,  819 => 221,  814 => 220,  808 => 217,  800 => 216,  798 => 215,  793 => 213,  789 => 212,  785 => 211,  781 => 210,  777 => 209,  773 => 208,  770 => 207,  768 => 206,  764 => 204,  754 => 202,  752 => 201,  748 => 200,  743 => 198,  740 => 197,  735 => 196,  733 => 195,  730 => 194,  727 => 193,  719 => 188,  715 => 187,  711 => 186,  707 => 185,  701 => 184,  697 => 183,  689 => 181,  686 => 180,  679 => 176,  673 => 175,  668 => 173,  661 => 172,  658 => 171,  646 => 164,  642 => 163,  632 => 157,  626 => 155,  621 => 153,  617 => 152,  612 => 150,  607 => 148,  603 => 147,  594 => 144,  586 => 139,  580 => 138,  577 => 137,  571 => 136,  567 => 135,  561 => 132,  556 => 130,  553 => 129,  549 => 128,  545 => 127,  539 => 125,  537 => 124,  528 => 123,  525 => 122,  520 => 120,  515 => 119,  512 => 118,  506 => 116,  504 => 115,  500 => 114,  496 => 112,  484 => 111,  474 => 110,  464 => 109,  453 => 108,  440 => 107,  428 => 106,  418 => 105,  413 => 102,  407 => 99,  403 => 98,  400 => 97,  398 => 96,  392 => 93,  388 => 92,  385 => 91,  383 => 90,  377 => 87,  373 => 86,  370 => 85,  368 => 84,  364 => 82,  341 => 81,  329 => 80,  326 => 79,  324 => 78,  318 => 75,  315 => 74,  313 => 73,  301 => 70,  295 => 69,  287 => 68,  280 => 67,  278 => 66,  275 => 65,  272 => 64,  266 => 61,  262 => 60,  259 => 59,  255 => 57,  251 => 55,  241 => 51,  237 => 50,  232 => 49,  226 => 46,  218 => 45,  216 => 44,  211 => 42,  207 => 41,  203 => 40,  199 => 39,  195 => 38,  191 => 37,  188 => 36,  178 => 34,  175 => 33,  167 => 31,  165 => 30,  161 => 29,  156 => 28,  152 => 27,  148 => 25,  146 => 24,  140 => 23,  136 => 22,  133 => 21,  131 => 20,  124 => 18,  120 => 17,  117 => 16,  114 => 15,  112 => 14,  102 => 11,  79 => 10,  61 => 9,  57 => 8,  51 => 7,  41 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <!-- IF META_DISPLAY_NAME --><!-- DEFINE $EXTENSION_NAME = '{META_DISPLAY_NAME}' -->*/
/* <!-- ELSE --><!-- DEFINE $EXTENSION_NAME = '{META_NAME}' --><!-- ENDIF -->*/
/* <a href="{U_ACTION}" id="upload_load_main">{L_ACP_UPLOAD_EXT_TITLE}</a> &raquo; <a href="{U_ACTION_LIST}" id="upload_load_main_list">{L_EXTENSIONS_ADMIN}</a> &raquo; <strong>{$EXTENSION_NAME}</strong>*/
/* <a href="{U_EXT_DETAILS}" class="ext_reload_link upload_get_details_link" data-ext-name="{META_NAME}" title="{L_EXT_RELOAD_PAGE}"><i class="fa fa-refresh"></i></a>*/
/* <hr class="upload_ext_navigation" />*/
/* <div id="extension_details_name_wrapper">*/
/* 	<h1 class="ExtensionName<!-- IF NOT_AVAILABLE --> ext_not_available<!-- ENDIF -->">*/
/* 		<i class="fa fa-cog"></i> {$EXTENSION_NAME}*/
/* 		<span data-ext-name="{META_NAME}" data-ext-update-enabled="{L_EXT_ENABLED}" data-ext-update-disabled="{L_EXT_DISABLED}" data-ext-update-purged="{L_EXT_PURGED}" data-ext-update-error="{L_EXT_UPDATE_ERROR}" data-ext-update-timeout="{L_EXT_UPDATE_TIMEOUT}" data-ext-update-enable="{L_EXT_UPDATE_ENABLE}" data-ext-update-check-filetree="{L_EXT_UPDATE_CHECK_FILETREE}">*/
/* 			<a href="{U_ACTION}&amp;action=<!-- IF S_IS_ENABLED -->disable<!-- ELSE -->enable<!-- ENDIF -->&amp;ext_name={META_NAME}" class="extension_toggle_wrapper <!-- IF S_IS_ENABLED -->extension_toggle_enabled<!-- ELSE -->extension_toggle_disabled<!-- ENDIF --><!-- IF not S_IS_ENABLED and not S_IS_DISABLED --> extension_toggle_purged<!-- ENDIF -->" title="{L_EXT_ENABLE_DISABLE}"><span class="extension_toggle"><i class="fa fa-power-off"></i></span></a>*/
/* 			<a href="{U_ACTION}&amp;action=purge&amp;ext_name={META_NAME}" class="extension_remove_data_button" title="{L_EXT_PURGE}"><i class="fa fa-trash"></i></a>*/
/* 		</span>*/
/* 	</h1>*/
/* 	<!-- IF META_VERSION -->*/
/* 	<!-- IF S_VERSIONCHECK && S_UP_TO_DATE -->*/
/* 	<div class="description_bubble small_bubble ext_version_bubble">*/
/* 		<span class="description_name">{L_VERSION}</span>*/
/* 		<span class="description_value description_value_ok" id="meta_version" title="{UP_TO_DATE_MSG}">{META_VERSION}</span>*/
/* 	</div>*/
/* 	<!-- ELSE IF S_VERSIONCHECK && not S_UP_TO_DATE -->*/
/* 	<div class="description_bubble small_bubble ext_version_bubble">*/
/* 		<span class="description_name">{L_VERSION}</span>*/
/* 		<span class="description_value description_value_old" id="meta_version" title="{UP_TO_DATE_MSG}">{META_VERSION}</span>*/
/* 		<!-- IF HAS_AJAX -->*/
/* 		<i class="fa fa-cog show_ext_updates"></i>*/
/* 		<div id="description_updates">*/
/* 			<!-- BEGIN updates_available -->*/
/* 			<span class="description_updates_latest_version">{L_LATEST_VERSION}</span>*/
/* 			<span class="description_updates_extension_latest_version">{updates_available.current}</span>*/
/* 			<!-- IF updates_available.download -->*/
/* 			<span class="extension_update_link" title="{L_DOWNLOAD_LATEST}"><i class="fa fa-refresh fa-fw"></i>{L_UPDATE}</span>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF updates_available.announcement -->*/
/* 			<a href="{updates_available.announcement}" class="extension_announcement_link" title="{updates_available.announcement}" target="_blank"><i class="fa fa-bullhorn fa-fw"></i>{L_ANNOUNCEMENT_TOPIC}</a>*/
/* 			<!-- ENDIF -->*/
/* 			<div id="update_ext_confirm">*/
/* 				<form id="upload_ext_update" action="{U_UPLOAD}" method="post">*/
/* 					<span id="update_ext_confirm_title"><i class="fa fa-refresh fa-lg"></i> {L_EXTENSION_UPLOAD_UPDATE}</span>*/
/* 					<p class="ext_upload_form_explain">{L_EXTENSION_UPLOAD_UPDATE_EXPLAIN}</p>*/
/* 					<textarea id="update_confirm_address" name="remote_upload" readonly="readonly" rows="5">{updates_available.download}</textarea>*/
/* 					{S_FORM_TOKEN}*/
/* 					{S_HIDDEN_FIELDS}*/
/* 					<span id="br_form_upload"></span>*/
/* 					<!-- IF updates_available.checksum -->*/
/* 					<p class="ext_upload_form_explain">{L_CHECKSUM}{L_COLON} {updates_available.checksum}</p>*/
/* 					<input type="hidden" name="ext_checksum" value="{updates_available.checksum}" />*/
/* 					<input type="hidden" name="ext_checksum_type" value="md5" />*/
/* 					<!-- ENDIF -->*/
/* 					<input type="checkbox" name="keepext" id="keepext" title="{L_EXT_UPLOAD_SAVE_ZIP}" />*/
/* 					<label for="keepext">{L_EXT_UPLOAD_SAVE_ZIP}</label>*/
/* 					<input class="button1" type="submit" name="submit" value="{L_UPDATE}" id="upload_ext_update_submit" />*/
/* 				</form>*/
/* 			</div>*/
/* 			<!-- END updates_available -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	<!-- ELSE -->*/
/* 	<div class="description_bubble small_bubble ext_version_bubble">*/
/* 		<span class="description_name">{L_VERSION}</span>*/
/* 		<span class="description_value" id="meta_version">{META_VERSION}</span>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* <!-- IF META_VERSION -->*/
/* <div id="ext_versioncheck_error_box" class="errorbox notice"<!-- IF not S_VERSIONCHECK --> style="display:block;"<!-- ENDIF -->>*/
/* 	<p class="ext_versioncheck_error_box_title"<!-- IF not S_VERSIONCHECK and S_VERSIONCHECK_STATUS == 0 --> style="display:block;"<!-- ENDIF -->>{L_VERSIONCHECK_FAIL}</p>*/
/* 	<p class="ext_versioncheck_error_box_reason"><!-- IF not S_VERSIONCHECK -->{VERSIONCHECK_FAIL_REASON}<!-- ENDIF --></p>*/
/* 	<p class="ext_versioncheck_error_box_link"<!-- IF not S_VERSIONCHECK and S_VERSIONCHECK_STATUS == 0 --> style="display:block;"<!-- ENDIF -->><a href="{U_VERSIONCHECK_FORCE}" class="ext_versioncheck_force_link">{L_VERSIONCHECK_FORCE_UPDATE}</a></p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF EXT_ENABLE_STATUS -->*/
/* <div class="ext_uploaded_notice">*/
/* 	<h1><i class="fa fa-check" id="uploaded_ok"></i>{EXT_ENABLE_STATUS}</h1>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF EXT_UPLOADED || EXT_UPDATED || EXT_LANGUAGE_UPLOADED || EXT_LANGUAGES_RESTORED -->*/
/* <div class="ext_uploaded_notice">*/
/* 	<h1><i class="fa fa-check" id="uploaded_ok"></i><!-- IF EXT_LANGUAGES_RESTORED -->{L_EXT_LANGUAGES_RESTORED}<!-- ELSE IF EXT_LANGUAGE_UPLOADED -->{EXT_LANGUAGE_UPLOADED}<!-- ELSE IF EXT_UPDATED -->{L_EXT_UPDATED}<!-- ELSE -->{L_EXT_UPLOADED}<!-- ENDIF --></h1>*/
/* 	<!-- IF EXT_OLD_ZIP_SAVED --><p>{EXT_OLD_ZIP_SAVED}<!-- IF EXT_RESTORE_DIRECTORIES --><br />{EXT_RESTORE_DIRECTORIES} <a href="{U_ACTION}&amp;action=restore_languages&amp;ext_name={META_NAME}&amp;archive={S_EXT_LANGS_RESTORE_ZIP}" data-ext-restore="{META_NAME}&amp;archive={S_EXT_LANGS_RESTORE_ZIP}" class="ext_restore_languages">{L_RESTORE}</a>.<!-- ENDIF --></p><!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF EXT_UPDATED -->*/
/* <div class="ext_updated_notice">*/
/* 	<h1><i class="fa fa-refresh"></i> {L_ACP_UPLOAD_EXT_UPDATED}</h1>*/
/* 	<p>{L_ACP_UPLOAD_EXT_UPDATED_EXPLAIN}</p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_EXTENSION_CHECKSUM_NOT_PROVIDED -->*/
/* <div class="ext_updated_notice">*/
/* 	<h1><i class="fa fa-exclamation-circle"></i> {L_ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE}</h1>*/
/* 	<p>{L_ACP_UPLOAD_EXT_NO_CHECKSUM}</p>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF NOT_AVAILABLE and (S_IS_ENABLED || S_IS_DISABLED) -->*/
/* <div class="ext_broken_notice">*/
/* 	<h1><i class="fa fa-warning"></i> {L_EXTENSION_BROKEN_TITLE}</h1>*/
/* 	<span>{L_EXTENSION_BROKEN_EXPLAIN}</span>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div class="ext_details_container">*/
/* 	<div class="ext_details_tabs">*/
/* 		<ul>*/
/* 			<li class="tab<!-- IF SHOW_DETAILS_TAB == 'details' --> activetab<!-- ENDIF -->" id="ext_details_main_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=details"><i class="fa fa-book"></i> <span>{L_EXT_DETAILS}</span></a></li>*/
/* 			<!-- IF EXT_DETAILS_README --><li class="tab<!-- IF SHOW_DETAILS_TAB == 'readme' --> activetab<!-- ENDIF -->" id="ext_details_readme_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=readme"><i class="fa fa-info"></i> <span>{L_EXT_DETAILS_README}</span></a></li><!-- ENDIF -->*/
/* 			<!-- IF EXT_DETAILS_CHANGELOG --><li class="tab<!-- IF SHOW_DETAILS_TAB == 'changelog' --> activetab<!-- ENDIF -->" id="ext_details_changelog_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=changelog"><i class="fa fa-pencil"></i> <span>{L_EXT_DETAILS_CHANGELOG}</span></a></li><!-- ENDIF -->*/
/* 			<li class="tab<!-- IF SHOW_DETAILS_TAB == 'languages' --> activetab<!-- ENDIF -->" id="ext_details_languages_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=languages"><i class="fa fa-language"></i> <span>{L_EXT_DETAILS_LANGUAGES}</span></a></li>*/
/* 			<li class="tab<!-- IF SHOW_DETAILS_TAB == 'filetree' --> activetab<!-- ENDIF -->" id="ext_details_filetree_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=filetree"><i class="fa fa-sitemap"></i> <span>{L_EXT_DETAILS_FILETREE}</span></a></li>*/
/* 			<li class="tab<!-- IF SHOW_DETAILS_TAB == 'tools' --> activetab<!-- ENDIF -->" id="ext_details_tools_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=tools"><i class="fa fa-wrench"></i> <span>{L_EXT_DETAILS_TOOLS}</span></a></li>*/
/* 			<!-- IF EXT_DETAILS_UPDATE --><li class="tab<!-- IF SHOW_DETAILS_TAB == 'update' --> activetab<!-- ENDIF -->" id="ext_details_update_tab"><a href="{U_EXT_DETAILS}&amp;ext_show=update"><i class="fa fa-refresh"></i> <span>{L_UPDATE}</span></a></li><!-- ENDIF -->*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="ext_details_block" data-load-full-page="{S_LOAD_FULL_PAGE}">*/
/* 		<!-- IF EXT_DETAILS_MARKDOWN and not HAS_AJAX -->*/
/* 		<div class="ext_details_markdown" style="display:block;">{EXT_DETAILS_MARKDOWN}</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF HAS_AJAX || S_LOAD_FULL_PAGE -->*/
/* 		<div class="ext_details_markdown" id="ext_details_readme">{EXT_DETAILS_README}</div>*/
/* 		<div class="ext_details_markdown" id="ext_details_changelog">{EXT_DETAILS_CHANGELOG}</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF EXT_DETAILS_LANGUAGES || HAS_AJAX -->*/
/* 		<div id="ext_languages" data-ext-show-languages="{S_EXT_DETAILS_SHOW_LANGUAGES}"<!-- IF not HAS_AJAX and not S_LOAD_FULL_PAGE --> style="display:block;"<!-- ENDIF-->>*/
/* 			<!-- IF .ext_languages -->*/
/* 			<form method="post" action="{U_DELETE_ACTION}" data-ajax="language_rows_delete">*/
/* 				<fieldset id="ext_languages_list">*/
/* 					<span class="description_title ext_languages_title">{L_EXT_LANGUAGES}</span>*/
/* 					<!-- BEGIN ext_languages -->*/
/* 					<div class="ext_language_row">*/
/* 						<span class="ext_language_name">{ext_languages.NAME}</span>*/
/* 						<div class="ext_language_actions">*/
/* 							<input type="checkbox" class="radio ext_check_box" name="mark[]" value="{ext_languages.NAME}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- IF not ext_languages.S_LAST_ROW --><hr class="dashed" /><!-- ENDIF -->*/
/* 					<!-- END ext_languages -->*/
/* 					<fieldset class="quick">*/
/* 						<p class="small ext_mark_check"><a href="#" onclick="marklist('ext_languages_list', 'mark', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('ext_languages_list', 'mark', false); return false;">{L_UNMARK_ALL}</a></p>*/
/* 						<button class="ext_language_delete" type="submit" name="delmarked"><i class="fa fa-trash"></i> {L_DELETE_MARKED}</button>*/
/* 					</fieldset>*/
/* 				</fieldset>*/
/* 			</form>*/
/* 			<!-- ENDIF -->*/
/* 			<form action="{U_UPLOAD}" method="post" id="ext_upload" autocomplete="off" {S_FORM_ENCTYPE}>*/
/* 				<fieldset>*/
/* 					<div id="ext_upload_content">*/
/* 						<span class="ext_upload_form_name"><i class="fa fa-upload fa-lg"></i> {L_EXT_LANGUAGES_UPLOAD}</span>*/
/* 						<p class="ext_upload_form_explain">{L_EXT_LANGUAGES_UPLOAD_EXPLAIN}</p>*/
/* 						<input type="text" id="remote_upload" name="remote_upload" />*/
/* 						<input type="button" id="button_upload" style="display:none;" value="{L_BROWSE}" onclick="browseFile();" />*/
/* 						<input type="file" id="extupload" name="extupload" accept=".zip" onchange="setFileName();" />*/
/* 						{S_FORM_TOKEN}*/
/* 						{S_HIDDEN_FIELDS}*/
/* 						<span class="br_form_upload"></span>*/
/* 						<label for="ext_language_code">{L_EXT_LANGUAGE_ISO_CODE}{L_COLON}</label>*/
/* 						<input type="text" id="ext_language_code" name="ext_lang_name" />*/
/* 						<label for="ext_checksum">{L_CHECKSUM}{L_COLON}</label>*/
/* 						<input type="radio" name="ext_checksum_type" id="ext_checksum_type_md5" value="md5" checked="checked" />*/
/* 						<label for="ext_checksum_type_md5">md5</label>*/
/* 						<input type="radio" name="ext_checksum_type" id="ext_checksum_type_sha1" value="sha1" />*/
/* 						<label for="ext_checksum_type_sha1">sha1</label>*/
/* 						<input type="text" id="ext_checksum" name="ext_checksum" />*/
/* 						<input type="hidden" name="ext_name" value="{META_NAME}" />*/
/* 						<button class="upload_ext_upload_button" type="submit" name="submit" value="{L_UPLOAD}" id="submit"><i class="fa fa-upload"></i> {L_UPLOAD}</button>*/
/* 					</div>*/
/* 					<i id="upload" class="fa fa-spinner fa-3x fa-spin"></i>*/
/* 				</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF EXT_DETAILS_FILETREE || HAS_AJAX -->*/
/* 		<div id="filetree"<!-- IF not HAS_AJAX and not S_LOAD_FULL_PAGE --> style="display:block;"<!-- ENDIF-->>*/
/* 			<div id="filetreenames">{FILETREE}</div>*/
/* 			<div id="filecontent_wrapper">*/
/* 				<div id="filecontent"><div class="filename">{FILENAME}</div><div class="filecontent">{CONTENT}</div></div>*/
/* 				<span class="select_all_code">{L_SELECT_ALL_CODE}</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF EXT_DETAILS_TOOLS || HAS_AJAX -->*/
/* 		<div id="ext_details_tools"<!-- IF not HAS_AJAX and not S_LOAD_FULL_PAGE --> style="display:block;"<!-- ENDIF-->>*/
/* 			<fieldset class="description_fieldset description_update_form">*/
/* 				<span class="description_title"><i class="fa fa-download fa-lg"></i> {L_EXT_TOOLS_DOWNLOAD_TITLE}</span>*/
/* 				<form action="{U_ACTION}&amp;action=download&amp;ext_name={META_NAME}" method="post">*/
/* 					<span class="description_update_form_explain">{L_EXT_TOOLS_DOWNLOAD}</span>*/
/* 					<input type="checkbox" name="ext_delete_suffix" id="ext_delete_suffix" title="{L_EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX}" />*/
/* 					<label for="ext_delete_suffix">{L_EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX}</label>*/
/* 					<input class="button1" type="submit" name="submit" value="{L_DOWNLOAD}" />*/
/* 				</form>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF EXT_DETAILS_UPDATE and not HAS_AJAX -->*/
/* 		<div id="ext_details_content">*/
/* 			<!-- IF S_VERSIONCHECK && not S_UP_TO_DATE && not HAS_AJAX -->*/
/* 			<!-- BEGIN updates_available -->*/
/* 			<fieldset style="background-color: #fdfcd3;">*/
/* 				<span class="extension_latest_version_title">{L_LATEST_VERSION}</span>*/
/* 				<div class="extension_latest_version_wrapper">*/
/* 					<strong class="extension_latest_version">{updates_available.current}</strong>*/
/* 					<!-- IF updates_available.announcement -->*/
/* 					<a href="{updates_available.announcement}" class="extension_author_link" title="{updates_available.announcement}" target="_blank"><i class="fa fa-bullhorn"></i><span>{L_ANNOUNCEMENT_TOPIC}</span></a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</fieldset>*/
/* 			<!-- IF updates_available.download -->*/
/* 			<fieldset class="description_fieldset description_update_form">*/
/* 				<span class="description_title"><i class="fa fa-refresh fa-lg"></i> {L_EXTENSION_UPLOAD_UPDATE}</span>*/
/* 				<form action="{U_UPLOAD}" method="post">*/
/* 					<span class="description_update_form_explain">{L_EXTENSION_UPLOAD_UPDATE_EXPLAIN}</span>*/
/* 					<textarea id="update_get_confirm_address" name="remote_upload" readonly="readonly" rows="5">{updates_available.download}</textarea>*/
/* 					{S_FORM_TOKEN}*/
/* 					{S_HIDDEN_FIELDS}*/
/* 					<span class="br_form_upload"></span>*/
/* 					<!-- IF updates_available.checksum -->*/
/* 					<span class="description_update_form_explain">{L_CHECKSUM}{L_COLON} {updates_available.checksum}</span>*/
/* 					<input type="hidden" name="ext_checksum" value="{updates_available.checksum}" />*/
/* 					<input type="hidden" name="ext_checksum_type" value="md5" />*/
/* 					<!-- ENDIF -->*/
/* 					<input type="checkbox" name="keepext" id="keepextupdate" title="{L_EXT_UPLOAD_SAVE_ZIP}" />*/
/* 					<label for="keepextupdate">{L_EXT_UPLOAD_SAVE_ZIP}</label>*/
/* 					<input class="button1" type="submit" name="submit" value="{L_UPDATE}" />*/
/* 				</form>*/
/* 			</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- END updates_available -->*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF (not EXT_DETAILS_MARKDOWN and not EXT_DETAILS_LANGUAGES and not EXT_DETAILS_FILETREE and not EXT_DETAILS_UPDATE and not EXT_DETAILS_TOOLS) || HAS_AJAX || S_LOAD_FULL_PAGE -->*/
/* 		<div id="ext_details_content">*/
/* 			<!-- IF NOT_AVAILABLE -->*/
/* 			<div class="errorbox">{NOT_AVAILABLE}</div>*/
/* 			<!-- ELSE -->*/
/* 			<!-- IF META_DESCRIPTION -->*/
/* 			<fieldset class="description_fieldset">*/
/* 				<span id="meta_description" class="description_title">{L_DESCRIPTION}</span>*/
/* 				<p>{META_DESCRIPTION}</p>*/
/* 			</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_VERSIONCHECK && not S_UP_TO_DATE && not HAS_AJAX -->*/
/* 			<!-- BEGIN updates_available -->*/
/* 			<fieldset style="background-color: #fdfcd3;">*/
/* 				<span class="extension_latest_version_title">{L_LATEST_VERSION}</span>*/
/* 				<div class="extension_latest_version_wrapper">*/
/* 					<strong class="extension_latest_version">{updates_available.current}</strong>*/
/* 					<!-- IF updates_available.announcement -->*/
/* 					<a href="{updates_available.announcement}" class="extension_author_link" title="{updates_available.announcement}" target="_blank"><i class="fa fa-bullhorn"></i><span>{L_ANNOUNCEMENT_TOPIC}</span></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF updates_available.download -->*/
/* 					<a href="{U_EXT_DETAILS}&amp;ext_show=update" class="extension_get_update_link" title="{L_DOWNLOAD_LATEST}"><i class="fa fa-refresh"></i>{L_UPDATE}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</fieldset>*/
/* 			<!-- END updates_available -->*/
/* 			<!-- ENDIF -->*/
/* 			<fieldset>*/
/* 				<div class="description_bubble big_bubble">*/
/* 					<span class="description_name">{L_CLEAN_NAME}</span>*/
/* 					<strong class="description_value" id="meta_name">{META_NAME}</strong>*/
/* 				</div>*/
/* 				<!-- IF META_HOMEPAGE -->*/
/* 				<div class="description_bubble big_bubble">*/
/* 					<span class="description_name">{L_HOMEPAGE}</span>*/
/* 					<strong class="description_value" id="meta_homepage"><a href="{META_HOMEPAGE}" title="{META_HOMEPAGE}" target="_blank"><i class="fa fa-globe"></i></a></strong>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF META_TIME -->*/
/* 				<div class="description_bubble small_bubble">*/
/* 					<span class="description_name">{L_TIME}</span>*/
/* 					<span class="description_value" id="meta_time">{META_TIME}</span>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="description_bubble small_bubble">*/
/* 					<span class="description_name">{L_LICENSE}</span>*/
/* 					<span class="description_value" id="meta_license">{META_LICENSE}</span>*/
/* 				</div>*/
/* 			</fieldset>*/
/* 			<!-- IF META_REQUIRE_PHPBB || META_REQUIRE_PHP -->*/
/* 			<fieldset>*/
/* 				<span class="requirements_title">{L_REQUIREMENTS}</span>*/
/* 				<!-- IF META_REQUIRE_PHPBB -->*/
/* 				<div class="requirements_bubble">*/
/* 					<span class="requirements_name">{L_PHPBB_VERSION}</span>*/
/* 					<span class="requirements_value<!-- IF META_REQUIRE_PHPBB_FAIL --> requirements_value_not_met<!-- ENDIF -->" id="require_phpbb">{META_REQUIRE_PHPBB}</span>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF META_REQUIRE_PHP -->*/
/* 				<div class="requirements_bubble">*/
/* 					<span class="requirements_name">{L_PHP_VERSION}</span>*/
/* 					<span class="requirements_value<!-- IF META_REQUIRE_PHP_FAIL --> requirements_value_not_met<!-- ENDIF -->" id="require_php">{META_REQUIRE_PHP}</span>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 			</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 			<fieldset>*/
/* 				<!-- BEGIN meta_authors -->*/
/* 				<!-- IF meta_authors.S_FIRST_ROW -->*/
/* 				<!-- IF meta_authors.S_LAST_ROW -->*/
/* 				<span class="requirements_title">{L_DEVELOPER}</span>*/
/* 				<!-- ELSE -->*/
/* 				<span class="requirements_title">{L_DEVELOPERS}</span>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* 				<div class="extension_author">*/
/* 					<strong class="extension_author_name">{meta_authors.AUTHOR_NAME}</strong>*/
/* 					<!-- IF meta_authors.AUTHOR_EMAIL -->*/
/* 					<a href="mailto:{meta_authors.AUTHOR_EMAIL}" title="{L_AUTHOR_EMAIL}" class="extension_author_link"><i class="fa fa-envelope"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF meta_authors.AUTHOR_HOMEPAGE -->*/
/* 					<a href="{meta_authors.AUTHOR_HOMEPAGE}" title="{L_AUTHOR_HOMEPAGE}" class="extension_author_link" target="_blank"><i class="fa fa-globe"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<!-- END meta_authors -->*/
/* 			</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
