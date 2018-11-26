<?php

/* /home/pavel/htdocs/www/themes/dv/partials/tag/search-tag.htm */
class __TwigTemplate_0c5983d2324e5837e5b8f9da617e2dfcb695be451e74b83d9c97d1aaefe899bd extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "<div class=\"block-list\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "nahlyst")) {
                    // line 9
                    echo "                ";
                    $context["category_color"] = "block__lable-SeaGreen";
                    // line 10
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "hand-made")) {
                    // line 11
                    echo "                ";
                    $context["category_color"] = "block__lable-YellowGreen";
                    // line 12
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "fider")) {
                    // line 13
                    echo "                ";
                    $context["category_color"] = "block__lable-Olive";
                    // line 14
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "karpfishing")) {
                    // line 15
                    echo "                ";
                    $context["category_color"] = "block__lable-IndianRed";
                    // line 16
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "rybackie-bajki")) {
                    // line 17
                    echo "                ";
                    $context["category_color"] = "block__lable-FireBrick";
                    // line 18
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "poplavochnaya-udochka")) {
                    // line 19
                    echo "                ";
                    $context["category_color"] = "block__lable-HotPink";
                    // line 20
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "vidy-ryb")) {
                    // line 21
                    echo "                ";
                    $context["category_color"] = "block__lable-DarkOrange";
                    // line 22
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == "ekipirovka-rybolova")) {
                    // line 23
                    echo "                ";
                    $context["category_color"] = "block__lable-Maroon";
                    // line 24
                    echo "                ";
                }
                // line 25
                echo "                <div class=\"block__lable ";
                echo twig_escape_filter($this->env, ($context["category_color"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</div><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                <img class=\"block__image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 230, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                <div class=\"block__text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('html_strip')->getCallable(), array("strip", twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()))), 0, 200), "html", null, true);
            echo "...</div>
            </header>
            <div class=\"block-info\">
                <div class=\"block-info__date\">";
            // line 32
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "%e %BP, %Y"));
            echo "</div>
                <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
                <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
            </div>
            <footer class=\"block-footer\">
                <div class=\"block-tag\">
                    <ul class=\"block-tag__list\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 40
                echo "                        <li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </ul>
                </div>
                <div class=\"block__share\">Поделиться статьей:</div>
                <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
            </footer>
        </article>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>

";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 55
            echo "<ul class=\"pagination\">
    ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 57
                echo "    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">Назад</a>
    <li>...</li>
    ";
            }
            // line 60
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 61
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) {
                    // line 62
                    echo "    <li class=\"pagination-active\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</li>
    ";
                } else {
                    // line 64
                    echo "    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
    ";
                }
                // line 66
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()))) {
                // line 68
                echo "    <li>...</li>
    <a href=\"";
                // line 69
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Далее</a>
    ";
            }
            // line 71
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/tag/search-tag.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  221 => 69,  218 => 68,  215 => 67,  209 => 66,  201 => 64,  195 => 62,  192 => 61,  187 => 60,  180 => 57,  178 => 56,  175 => 55,  173 => 54,  169 => 52,  160 => 50,  148 => 42,  137 => 40,  133 => 39,  123 => 32,  117 => 29,  111 => 28,  106 => 27,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 7,  33 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}
<div class=\"block-list\">
    {% for post in posts %}
    <div class=\"block-list__item\">
        <article class=\"block\">
            <header class=\"block__header\">
                {% for category in post.categories %}
                {% if category.slug == 'nahlyst' %}
                {% set category_color = 'block__lable-SeaGreen' %}
                {% elseif category.slug == 'hand-made'%}
                {% set category_color = 'block__lable-YellowGreen' %}
                {% elseif category.slug == 'fider'%}
                {% set category_color = 'block__lable-Olive' %}
                {% elseif category.slug == 'karpfishing'%}
                {% set category_color = 'block__lable-IndianRed' %}
                {% elseif category.slug == 'rybackie-bajki'%}
                {% set category_color = 'block__lable-FireBrick' %}
                {% elseif category.slug == 'poplavochnaya-udochka'%}
                {% set category_color = 'block__lable-HotPink' %}
                {% elseif category.slug == 'vidy-ryb'%}
                {% set category_color = 'block__lable-DarkOrange' %}
                {% elseif category.slug == 'ekipirovka-rybolova'%}
                {% set category_color = 'block__lable-Maroon' %}
                {% endif %}
                <div class=\"block__lable {{category_color}}\">{{ category.name }}</div><a href=\"{{ post.url }}\">
                {% endfor %}
                <img class=\"block__image\" src=\"{{ post.featured_images.first.getThumb(230,150, 'crop') }}\"></a>
                <h2 class=\"block__title\"><a class=\"block__link\" href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                <div class=\"block__text\">{{ html_strip(post.summary)|slice(0,200) }}...</div>
            </header>
            <div class=\"block-info\">
                <div class=\"block-info__date\">{{ post.published_at|rudate(\"%e %BP, %Y\") }}</div>
                <div class=\"block-info__view\"><i class=\"icon-eye\"></i><span class=\"block-info__text\">12588</span></div>
                <div class=\"block-info__comment\"><a class=\"block-info__link\" href=\"#\"><i class=\"icon-comment\"></i><span class=\"block-info__text\">12588</span></a></div>
            </div>
            <footer class=\"block-footer\">
                <div class=\"block-tag\">
                    <ul class=\"block-tag__list\">
                        {% for tag in post.tags %}
                        <li class=\"block-tag__item\"><a class=\"block-tag__link\" href=\"/articles/tags/{{tag.slug}}\">{{ tag.name }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"block__share\">Поделиться статьей:</div>
                <div class=\"ya-share2\" data-services=\"collections,vkontakte,facebook,odnoklassniki,moimir,whatsapp\"></div>
            </footer>
        </article>
    </div>
    {% else %}
    <p>{{ noPostsMessage }}</p>
    {% endfor %}
</div>

{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">Назад</a>
    <li>...</li>
    {% endif %}
    {% for page in 1..posts.lastPage %}
    {% if posts.currentPage == page %}
    <li class=\"pagination-active\">{{ page }}</li>
    {% else %}
    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    {% endif %}
    {% endfor %}
    {% if posts.lastPage > posts.currentPage %}
    <li>...</li>
    <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Далее</a>
    {% endif %}
</ul>
{% endif %}", "/home/pavel/htdocs/www/themes/dv/partials/tag/search-tag.htm", "");
    }
}
