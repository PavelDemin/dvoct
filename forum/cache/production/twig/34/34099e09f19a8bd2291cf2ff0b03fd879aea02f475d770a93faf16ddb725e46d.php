<?php

/* @sheer_postbookmark/event/overall_header_head_append.html */
class __TwigTemplate_7dc2f9f3c093874a7ff3db8371a3e70374ea259dbec62e92470f2ae0d9eb1480 extends Twig_Template
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
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null))) {
            // line 2
            $asset_file = "@sheer_postbookmark/post_bookmarks.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('134');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 3
            $asset_file = "@sheer_postbookmark/postbookmark.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('134');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
    }

    public function getTemplateName()
    {
        return "@sheer_postbookmark/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_VIEWTOPIC or S_POST_ACTION -->*/
/* <!-- INCLUDECSS @sheer_postbookmark/post_bookmarks.css -->*/
/* <!-- INCLUDEJS @sheer_postbookmark/postbookmark.js -->*/
/* <!-- ENDIF -->*/
/* */
