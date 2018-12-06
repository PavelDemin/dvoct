<?php

/* @vse_scrolltotop/event/overall_header_head_append.html */
class __TwigTemplate_63dcac066a9336a46aeef6c478ebd7d6a5d068b1c77cad775d7977674e8f3ff4 extends Twig_Template
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
        $asset_file = "@vse_scrolltotop/scrolltotop.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('134');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);    }

    public function getTemplateName()
    {
        return "@vse_scrolltotop/event/overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- INCLUDECSS @vse_scrolltotop/scrolltotop.css -->*/
/* */
