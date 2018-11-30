<?php

/* /home/pavel/htdocs/www/themes/dv/layouts/default.htm */
class __TwigTemplate_285cc14daab4267ac2a67c9788be20ea32ea617fc5ca2b9d6a3de555f8f0eb8f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru-RU\">
<head>
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE = edge\"><![endif]-->
    <link href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/libs/slick/slick.css", 1 => "assets/libs/bootstrap/bootstrap-grid.min.css", 2 => "assets/css/main.css"));
        // line 10
        echo "\" rel=\"stylesheet\" type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;amp;subset=cyrillic\">
    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "    <!--[if lt IE 9]>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script><![endif]-->
    ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "</head>
<body>
";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "<main class=\"container\">
    <div class=\"row\">
        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "    </div>
</main>
";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/libs/jquery/jquery-3.3.1.min.js", 1 => "assets/libs/slick/slick.min.js", 2 => "assets/js/main.js"));
        // line 30
        echo "\"></script>
";
        // line 31
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 33
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  94 => 32,  79 => 31,  76 => 30,  73 => 26,  69 => 25,  65 => 23,  63 => 22,  59 => 20,  55 => 19,  51 => 18,  47 => 16,  43 => 15,  39 => 13,  36 => 12,  32 => 10,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru-RU\">
<head>
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE = edge\"><![endif]-->
    <link href=\"{{ [
            'assets/libs/slick/slick.css',
            'assets/libs/bootstrap/bootstrap-grid.min.css',
            'assets/css/main.css'
            ]|theme }}\" rel=\"stylesheet\" type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;amp;subset=cyrillic\">
    {% styles %}
    <!--[if lt IE 9]>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script><![endif]-->
    {% component 'SeoCmsPage' %}
</head>
<body>
{% component 'session' %}
{% partial \"header\" %}
<main class=\"container\">
    <div class=\"row\">
        {% page %}
    </div>
</main>
{% partial \"footer\" %}
<script src=\"{{[
            'assets/libs/jquery/jquery-3.3.1.min.js',
            'assets/libs/slick/slick.min.js',
            'assets/js/main.js'
\t\t    ]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/home/pavel/htdocs/www/themes/dv/layouts/default.htm", "");
    }
}
