<?php

/* themes/cclub/templates/page--front.html.twig */
class __TwigTemplate_bb8142da71c0cba03bd2da099c75e91185f8d72742716b4a2cff0cdaf63bec04 extends Twig_Template
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
        $tags = array("if" => 150, "block" => 151, "set" => 160);
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






<section>
\t<div class=\"container search-area\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 search-f hidden-xs\" >
\t\t\t\t<form class = \"my-search\" action=\"\" method=\"post\"><input class=\"search-input\" type=\"text\"><input class = \"submit-btn\" type=\"submit\" value= \"Поиск...\"></form>

\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\"><p class=\"discont-p\">Дисконтная карта <br>
Оформление за 5 минут</p></div>
<div class=\"col-md-1\"></div>
\t\t\t<div class=\"col-md-2 col-xs-6 disc-wr\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<botton class=\"disc\">СКИДКА 20%</botton>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section>
\t<div class=\"container slider-block\">
\t\t<div class=\"row col-md-8\">
\t\t\t<!-- 2. Add images to <div class=\"fotorama\"></div>. -->
\t\t\t\t<div class=\"fotorama main-slider\">
  \t\t\t\t\t\t<img src=\"";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/sl1.jpg\">
\t\t\t\t\t\t  <img src=\"http://s.fotorama.io/2.jpg\">
\t\t\t\t</div>


\t\t</div>
\t\t<div class=\"col-md-4\"><img src=\"";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/2.jpg\" alt=\"\"></div>
\t</div>
</section>


<section>
\t<div class=\"container block-wrap\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 1</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 2</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 3</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"content-section\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 content-class\">


\t\t\t";
        // line 150
        echo "      \t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 151
            echo "        \t\t\t";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 156
            echo "      \t\t";
        }
        // line 157
        echo "
\t\t";
        // line 159
        echo "      ";
        // line 160
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 161
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 162
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 163
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 164
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 167
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 170
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 171
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 174
            echo "        ";
        }
        // line 175
        echo "
        ";
        // line 177
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 178
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 181
            echo "        ";
        }
        // line 182
        echo "
        ";
        // line 184
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 185
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 188
            echo "        ";
        }
        // line 189
        echo "
        ";
        // line 191
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 192
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 195
            echo "        ";
        }
        // line 196
        echo "
        ";
        // line 198
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "      </section>


\t\t</div>
\t</div>
</div>
</section>

<section class=\"my-footer-wrapp\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12 my-footer\">
FOOTER
FOOTER
";
        // line 216
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 217
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 223
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

    // line 151
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 152
        echo "          \t\t\t\t<aside class=\"col-sm-3\" role=\"complementary\">
            \t\t\t\t";
        // line 153
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          \t\t\t\t</aside>
        \t\t\t";
    }

    // line 171
    public function block_highlighted($context, array $blocks = array())
    {
        // line 172
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 178
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 179
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 185
    public function block_action_links($context, array $blocks = array())
    {
        // line 186
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 192
    public function block_help($context, array $blocks = array())
    {
        // line 193
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 198
    public function block_content($context, array $blocks = array())
    {
        // line 199
        echo "          <a id=\"main-content\"></a>
          ";
        // line 200
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 217
    public function block_footer($context, array $blocks = array())
    {
        // line 218
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/cclub/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 219,  393 => 218,  390 => 217,  384 => 200,  381 => 199,  378 => 198,  371 => 193,  368 => 192,  361 => 186,  358 => 185,  351 => 179,  348 => 178,  341 => 172,  338 => 171,  331 => 153,  328 => 152,  325 => 151,  311 => 223,  307 => 217,  305 => 216,  289 => 202,  286 => 198,  283 => 196,  280 => 195,  277 => 192,  274 => 191,  271 => 189,  268 => 188,  265 => 185,  262 => 184,  259 => 182,  256 => 181,  253 => 178,  250 => 177,  247 => 175,  244 => 174,  241 => 171,  238 => 170,  232 => 167,  230 => 164,  229 => 163,  228 => 162,  227 => 161,  226 => 160,  224 => 159,  221 => 157,  218 => 156,  215 => 151,  212 => 150,  178 => 118,  169 => 112,  83 => 29,  77 => 26,  50 => 1,);
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






<section>
\t<div class=\"container search-area\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 search-f hidden-xs\" >
\t\t\t\t<form class = \"my-search\" action=\"\" method=\"post\"><input class=\"search-input\" type=\"text\"><input class = \"submit-btn\" type=\"submit\" value= \"Поиск...\"></form>

\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\"><p class=\"discont-p\">Дисконтная карта <br>
Оформление за 5 минут</p></div>
<div class=\"col-md-1\"></div>
\t\t\t<div class=\"col-md-2 col-xs-6 disc-wr\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<botton class=\"disc\">СКИДКА 20%</botton>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section>
\t<div class=\"container slider-block\">
\t\t<div class=\"row col-md-8\">
\t\t\t<!-- 2. Add images to <div class=\"fotorama\"></div>. -->
\t\t\t\t<div class=\"fotorama main-slider\">
  \t\t\t\t\t\t<img src=\"{{ directory }}/images/sl1.jpg\">
\t\t\t\t\t\t  <img src=\"http://s.fotorama.io/2.jpg\">
\t\t\t\t</div>


\t\t</div>
\t\t<div class=\"col-md-4\"><img src=\"{{ directory }}/images/2.jpg\" alt=\"\"></div>
\t</div>
</section>


<section>
\t<div class=\"container block-wrap\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 1</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 2</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"\">Статья 3</a>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolor expedita officiis odit, ullam maxime officia! Cupiditate sunt animi molestias eaque iure quibusdam eius, aut, iste rerum repudiandae veritatis. Ex.</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


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
FOOTER
FOOTER
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
