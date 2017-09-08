<?php

/* themes/cclub/templates/page.html.twig */
class __TwigTemplate_21c8b69924cb1934fa5cad270a63b2e01e35e09a1487ec559f387ee7a58aca29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 94, "block" => 95, "set" => 104);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Coral</title>

\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<script
  src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
  integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
  crossorigin=\"anonymous\"></script>
\t<script src=\"js/bootstrap.js\" ></script>

\t<link rel=\"stylesheet\" href=\"/css/style.css\">

</head>
<body>

<header>
<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-6\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\"><img src=\"";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logo.png\" alt=\"\" class=\"img-responsive\" ></a>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-5 hidden-xs\"><p id=\"descr\" class =\"text-header text-center\"> ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo "Сайт независимого <br> Дистрибютора</p></div>
\t\t\t<div class=\"col-md-3 col-sm-3 tels\">
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (066) 555-22-11</a></p>
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (097) 555-22-11</a></p>
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (093) 555-22-11</a></p>
\t\t\t</div>

\t\t\t<div class=\"col-md-2 order-button\"><a href=\"/\"><button class=\"order-call\">Заказать звонок</button></a></div>
\t\t</div>
\t</div>
</header>



<nav class=\"navbar navbar-default\" role=\"navigation\">
\t<div class=\"container\">
\t<!—Название сайта и кнопка раскрытия меню для мобильных-->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>Меню
        <span class=\"icon-bar\"></span>
      </button>

    </div>



\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Пункт 1</a></li>
        <li><a href=\"#\">Пункт 2</a></li>
       <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Выпадающий пункт <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Подпункт</a></li>
            <li><a href=\"#\">Еще подпункт</a></li>
            <li><a href=\"#\">Еще что-то</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">И еще</a></li>
          </ul>
        </li>
        <li><a href=\"#\">Пункт 4</a></li>
        <li><a href=\"#\">Пункт 5</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
\t</div>
</nav>

</header>







<section class=\"content-section\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 content-class\">


\t\t\t";
        // line 94
        echo "      \t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 95
            echo "        \t\t\t";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 100
            echo "      \t\t";
        }
        // line 101
        echo "
\t\t";
        // line 103
        echo "      ";
        // line 104
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 105
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 106
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 107
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 108
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 111
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 114
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 115
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 118
            echo "        ";
        }
        // line 119
        echo "
        ";
        // line 121
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 122
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 125
            echo "        ";
        }
        // line 126
        echo "
        ";
        // line 128
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 129
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 132
            echo "        ";
        }
        // line 133
        echo "
        ";
        // line 135
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 136
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "      </section>


\t\t</div>
\t</div>
</div>
</section>

<section class=\"my-footer-wrapp\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 my-footer\">

";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 160
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 166
        echo "
\t\t</div>
\t</div>
</div>
</section>


<link  href=\"http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css\" rel=\"stylesheet\"> <!-- 3 KB -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js\"></script> <!-- 16 KB -->
</body>
</html>";
    }

    // line 95
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 96
        echo "          \t\t\t\t<aside class=\"col-sm-3\" role=\"complementary\">
            \t\t\t\t";
        // line 97
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          \t\t\t\t</aside>
        \t\t\t";
    }

    // line 115
    public function block_highlighted($context, array $blocks = array())
    {
        // line 116
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 122
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 123
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 129
    public function block_action_links($context, array $blocks = array())
    {
        // line 130
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 136
    public function block_help($context, array $blocks = array())
    {
        // line 137
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 142
    public function block_content($context, array $blocks = array())
    {
        // line 143
        echo "          <a id=\"main-content\"></a>
          ";
        // line 144
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 160
    public function block_footer($context, array $blocks = array())
    {
        // line 161
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 162
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/cclub/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 162,  330 => 161,  327 => 160,  321 => 144,  318 => 143,  315 => 142,  308 => 137,  305 => 136,  298 => 130,  295 => 129,  288 => 123,  285 => 122,  278 => 116,  275 => 115,  268 => 97,  265 => 96,  262 => 95,  248 => 166,  244 => 160,  242 => 159,  227 => 146,  224 => 142,  221 => 140,  218 => 139,  215 => 136,  212 => 135,  209 => 133,  206 => 132,  203 => 129,  200 => 128,  197 => 126,  194 => 125,  191 => 122,  188 => 121,  185 => 119,  182 => 118,  179 => 115,  176 => 114,  170 => 111,  168 => 108,  167 => 107,  166 => 106,  165 => 105,  164 => 104,  162 => 103,  159 => 101,  156 => 100,  153 => 95,  150 => 94,  83 => 29,  77 => 26,  50 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Coral</title>

\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<script
  src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
  integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
  crossorigin=\"anonymous\"></script>
\t<script src=\"js/bootstrap.js\" ></script>

\t<link rel=\"stylesheet\" href=\"/css/style.css\">

</head>
<body>

<header>
<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-6\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\"><img src=\"{{directory}}/images/logo.png\" alt=\"\" class=\"img-responsive\" ></a>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-5 hidden-xs\"><p id=\"descr\" class =\"text-header text-center\"> {{ site_name }}Сайт независимого <br> Дистрибютора</p></div>
\t\t\t<div class=\"col-md-3 col-sm-3 tels\">
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (066) 555-22-11</a></p>
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (097) 555-22-11</a></p>
\t\t\t\t<p class=\"phones\"><a href=\"tel:\" class=\"tel\">+38 (093) 555-22-11</a></p>
\t\t\t</div>

\t\t\t<div class=\"col-md-2 order-button\"><a href=\"/\"><button class=\"order-call\">Заказать звонок</button></a></div>
\t\t</div>
\t</div>
</header>



<nav class=\"navbar navbar-default\" role=\"navigation\">
\t<div class=\"container\">
\t<!—Название сайта и кнопка раскрытия меню для мобильных-->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>Меню
        <span class=\"icon-bar\"></span>
      </button>

    </div>



\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Пункт 1</a></li>
        <li><a href=\"#\">Пункт 2</a></li>
       <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Выпадающий пункт <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Подпункт</a></li>
            <li><a href=\"#\">Еще подпункт</a></li>
            <li><a href=\"#\">Еще что-то</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">И еще</a></li>
          </ul>
        </li>
        <li><a href=\"#\">Пункт 4</a></li>
        <li><a href=\"#\">Пункт 5</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
\t</div>
</nav>

</header>







<section class=\"content-section\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 content-class\">


\t\t\t{# Sidebar First #}
      \t\t\t{% if page.sidebar_first %}
        \t\t\t{% block sidebar_first %}
          \t\t\t\t<aside class=\"col-sm-3\" role=\"complementary\">
            \t\t\t\t{{ page.sidebar_first }}
          \t\t\t\t</aside>
        \t\t\t{% endblock %}
      \t\t{% endif %}

\t\t{# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Breadcrumbs #}
        {% if breadcrumb %}
          {% block breadcrumb %}
            {{ breadcrumb }}
          {% endblock %}
        {% endif %}

        {# Action Links #}
        {% if action_links %}
          {% block action_links %}
            <ul class=\"action-links\">{{ action_links }}</ul>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>


\t\t</div>
\t</div>
</div>
</section>

<section class=\"my-footer-wrapp\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 my-footer\">

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}

\t\t</div>
\t</div>
</div>
</section>


<link  href=\"http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css\" rel=\"stylesheet\"> <!-- 3 KB -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js\"></script> <!-- 16 KB -->
</body>
</html>";
    }
}
