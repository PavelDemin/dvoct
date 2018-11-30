<?php

/* /home/pavel/htdocs/www/themes/dv/partials/eventsfishing/event.htm */
class __TwigTemplate_a358293f63b4bcb0aa9214dff7518525ae9bf738722a1e732302af8720fad880 extends Twig_Template
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
        $context["eventsfish"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "eventsfish", array());
        // line 2
        $context["typefish"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "typefish", array());
        // line 3
        $context["cities"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cities", array());
        // line 4
        echo "<h1>Текущие предложения рыбаков:</h1>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventsfish"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 7
            echo "<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "description", array()), "html", null, true);
            echo "</p>
<p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["q"], "user", array()), "name", array()), "html", null, true);
            echo "</p>
<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["q"], "user", array()), "getAvatarThumb", array(0 => 230, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\" >
<p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["q"], "city", array()), "city", array()), "html", null, true);
            echo "</p>
<p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["q"], "type_fishing", array()), "name", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

<div class=\"button_go_fishing\">
    <button class=\"submit\" id=\"want_to_fishing\">Я хочу на рыбалку!</button>
    <button class=\"submit\" id=\"invite_to_fishing\">Приглашаю на рыбалку!</button>
</div>
<form id=\"form1\"
      data-request=\"onEventFish\"
      class=\"contact_form\"
      data-request-validate
      data-request-flash
      role=\"form\">
    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    <ul>
        <li>
            <h2>Хочу на рыбалку!</h2>
        </li>
        <li>
            <label for=\"description\">Описание:</label>
            <textarea id=\"description\" name=\"description\" placeholder=\"Опишите куда хотите на рыбалку, дайте больше информации о себе.\"></textarea>
            <span data-validate-for=\"description\"></span>
        </li>
        <li>
            <label for=\"start_date\">Начальная дата:</label>
            <input type=\"date\" id=\"start_date\" name=\"start_date\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
            <span class=\"form_hint\">Когда начать искать рыбаков?</span>
        </li>
        <li>
            <label for=\"end_date\">Конечная дата:</label>
            <input type=\"date\" id=\"end_date\" name=\"end_date\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
            <span class=\"form_hint\">Когда закончить поиски?</span>
        </li>
        <li>
            <label for=\"type_fishing_id\">Способ ловли:</label>

            <select id=\"type_fishing_id\" class=\"js-example-basic-single\" name=\"type_fishing_id\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typefish"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 55
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </select>
        </li>
        <li>
            <label for=\"city_id\">Ваш город:</label>
            <select id=\"city_id\" name=\"city_id\">
                <option value=\"2\" selected=\"selected\">duplicate</option>
            </select>
            <span data-validate-for=\"city_id\"></span>
        </li>

        <li>
            <button class=\"submit\" type=\"submit\">Отправить</button>
        </li>
    </ul>
</form>


<form id=\"form2\"
      class=\"pure-form pure-form-stacked\"

      data-request=\"onEventFish\"
      role=\"form\">
    <fieldset>
        <div class=\"pure-control-group\">
            <label for=\"is_offer\">Вы приглашаете?</label>
            <input type=\"checkbox\" id=\"is_offer\" name=\"is_offer\">
        </div>
        <div class=\"pure-control-group\">
            <label for=\"fishing_place\">Место рыбалки:</label>
            <input class=\"pure-input-2-3\" id=\"fishing_place\" type=\"text\" name=\"fishing_place\"  placeholder=\"Укажите место предпологаемой рыбалки\">
        </div>
        <label>
            <span>Описание:</span>
            <textarea class=\"pure-input-2-3\" name=\"description\" placeholder=\"Опишите в подробностях предстоящую рыбалку\"></textarea>
        </label>
        <label>
            <span>Начальная дата:</span>
            <input class=\"pure-input-2-3\" type=\"date\" name=\"start_date\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
        </label>
        <label>
            <span>Конечная дата:</span>
            <input class=\"pure-input-2-3\" type=\"date\" name=\"end_date\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
        </label>
        <label>
            <span class=\"pure-input-2-3\">Способ ловли:</span>
            <select class=\"pure-input-2-3\" name=\"type_fishing_id\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
        <label>
            <span>Ваш город:</span>
            <select class=\"pure-input-2-3\" name=\"city_id\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
        <label>
            <span>Долгота:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"lon\" placeholder=\"Долгота\">
        </label>
        <label>
            <span>Широта:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"lat\" placeholder=\"Широта\">
        </label>
        <label>
            <span>Пользователь:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"user_id\" placeholder=\"ID пользователя\">
        </label>
        <button type=\"submit\">Отправить</button>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/pavel/htdocs/www/themes/dv/partials/eventsfishing/event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 98,  168 => 94,  129 => 57,  118 => 55,  114 => 54,  104 => 47,  96 => 42,  77 => 26,  63 => 14,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  37 => 7,  33 => 6,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set eventsfish = __SELF__.eventsfish %}
{% set typefish = __SELF__.typefish %}
{% set cities = __SELF__.cities %}
<h1>Текущие предложения рыбаков:</h1>

{% for q in eventsfish %}
<p>{{ q.description }}</p>
<p>{{ q.user.name }}</p>
<img src=\"{{ q.user.getAvatarThumb(230,150,'crop') }}\" >
<p>{{ q.city.city }}</p>
<p>{{ q.type_fishing.name }}</p>

{% endfor %}


<div class=\"button_go_fishing\">
    <button class=\"submit\" id=\"want_to_fishing\">Я хочу на рыбалку!</button>
    <button class=\"submit\" id=\"invite_to_fishing\">Приглашаю на рыбалку!</button>
</div>
<form id=\"form1\"
      data-request=\"onEventFish\"
      class=\"contact_form\"
      data-request-validate
      data-request-flash
      role=\"form\">
    {{ form_token() }}

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    <ul>
        <li>
            <h2>Хочу на рыбалку!</h2>
        </li>
        <li>
            <label for=\"description\">Описание:</label>
            <textarea id=\"description\" name=\"description\" placeholder=\"Опишите куда хотите на рыбалку, дайте больше информации о себе.\"></textarea>
            <span data-validate-for=\"description\"></span>
        </li>
        <li>
            <label for=\"start_date\">Начальная дата:</label>
            <input type=\"date\" id=\"start_date\" name=\"start_date\" value=\"{{ 'now'|date('Y-m-d') }}\">
            <span class=\"form_hint\">Когда начать искать рыбаков?</span>
        </li>
        <li>
            <label for=\"end_date\">Конечная дата:</label>
            <input type=\"date\" id=\"end_date\" name=\"end_date\" value=\"{{ 'now'|date('Y-m-d') }}\">
            <span class=\"form_hint\">Когда закончить поиски?</span>
        </li>
        <li>
            <label for=\"type_fishing_id\">Способ ловли:</label>

            <select id=\"type_fishing_id\" class=\"js-example-basic-single\" name=\"type_fishing_id\">
                {% for type in typefish %}
                <option value=\"{{ type.id }}\">{{ type.name }}</option>
                {% endfor %}
            </select>
        </li>
        <li>
            <label for=\"city_id\">Ваш город:</label>
            <select id=\"city_id\" name=\"city_id\">
                <option value=\"2\" selected=\"selected\">duplicate</option>
            </select>
            <span data-validate-for=\"city_id\"></span>
        </li>

        <li>
            <button class=\"submit\" type=\"submit\">Отправить</button>
        </li>
    </ul>
</form>


<form id=\"form2\"
      class=\"pure-form pure-form-stacked\"

      data-request=\"onEventFish\"
      role=\"form\">
    <fieldset>
        <div class=\"pure-control-group\">
            <label for=\"is_offer\">Вы приглашаете?</label>
            <input type=\"checkbox\" id=\"is_offer\" name=\"is_offer\">
        </div>
        <div class=\"pure-control-group\">
            <label for=\"fishing_place\">Место рыбалки:</label>
            <input class=\"pure-input-2-3\" id=\"fishing_place\" type=\"text\" name=\"fishing_place\"  placeholder=\"Укажите место предпологаемой рыбалки\">
        </div>
        <label>
            <span>Описание:</span>
            <textarea class=\"pure-input-2-3\" name=\"description\" placeholder=\"Опишите в подробностях предстоящую рыбалку\"></textarea>
        </label>
        <label>
            <span>Начальная дата:</span>
            <input class=\"pure-input-2-3\" type=\"date\" name=\"start_date\" value=\"{{ 'now'|date('Y-m-d') }}\">
        </label>
        <label>
            <span>Конечная дата:</span>
            <input class=\"pure-input-2-3\" type=\"date\" name=\"end_date\" value=\"{{ 'now'|date('Y-m-d') }}\">
        </label>
        <label>
            <span class=\"pure-input-2-3\">Способ ловли:</span>
            <select class=\"pure-input-2-3\" name=\"type_fishing_id\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
        <label>
            <span>Ваш город:</span>
            <select class=\"pure-input-2-3\" name=\"city_id\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
        <label>
            <span>Долгота:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"lon\" placeholder=\"Долгота\">
        </label>
        <label>
            <span>Широта:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"lat\" placeholder=\"Широта\">
        </label>
        <label>
            <span>Пользователь:</span>
            <input class=\"pure-input-2-3\" type=\"text\" name=\"user_id\" placeholder=\"ID пользователя\">
        </label>
        <button type=\"submit\">Отправить</button>
    </fieldset>
</form>", "/home/pavel/htdocs/www/themes/dv/partials/eventsfishing/event.htm", "");
    }
}
