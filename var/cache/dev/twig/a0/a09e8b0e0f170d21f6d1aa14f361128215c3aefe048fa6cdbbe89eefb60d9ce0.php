<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_e05b0bca78f9583fc2900566ad95626673522d50b181e72f26f24f8ad87fbb3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <style>
        body {
            background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/IMG_1825.JPG"), "html", null, true);
        echo ");
            background-position: top center;
            background-attachment: fixed;
        }

        input[type=email], input[type=password], input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .map-container-3{
              overflow:hidden;
              padding-bottom:25%;
              position:relative;
              height:0;
          }
        .map-container-3 iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        .container {
            background-color: #E0F2F1;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 15px;
            box-shadow: 5px 5px 10px
        }
    </style>
</head>
<body>

<!-- skrypty do bootstrapa i jquery -->
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<!-- Główny kontener -->
<div class=\"container\" style=\"box-shadow: 5px 5px 10px\">
    <!-- Tytuł -->

    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "flashbag", [], "any", false, false, false, 57), "get", [0 => "notice"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "        <div class=\"alert alert-success\">
            ";
            // line 59
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "flashbag", [], "any", false, false, false, 63), "get", [0 => "warning"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 64
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 65
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    <div class=\"row\">
        <div class=\"col\">
            <h1 style=\"float: left;\">BikeLando</h1>
        </div>
        <div class=\"col\">
            <audio controls autoplay loop style=\"float: right\">
                <source src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\" type='audio/mpeg'>
                <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\">Pobierz</a>
            </audio>
        </div>
    </div>
    <div style=\"margin: 16px\"></div>
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
            ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
            // line 85
            echo "            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
            echo ",
                <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"badge badge-link\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
        ";
        }
        // line 91
        echo "        </div>
        ";
        // line 92
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), null))) {
            // line 93
            echo "        <div class=\"col\">
            <form class=\"form-inline\" style=\"float: right\">
                <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" type=\"button\" class=\"btn btn-outline-dark\">Zaloguj się</a>
            </form>
        </div>
    </div>
<div style=\"margin: 16px\"></div>
    <!-- Rejestracja i nowe hasło-->
    <div class=\"row\">
        <div class=\"col\">
            <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"badge badge-link\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
            echo "\" class=\"badge badge-link\" style=\"float: right\">Nie pamietam hasła</a>
        </div>
    </div>
    ";
        }
        // line 108
        echo "    <!-- Menu -->
        ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) {
            // line 110
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <nav class=\"nav navbar-light\" style=\"float: left\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
                    </nav>
                    <nav class=\"nav navbar-light\" style=\"float: right\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "email", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">Twoje konto</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_tours", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "email", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">Twoje trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent;\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tours", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "email", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\">Dodaj trase</a>
                    </nav>
                </div>
            </div>
        ";
        }
        // line 125
        echo "
        ";
        // line 126
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), null))) {
            // line 127
            echo "    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
            </nav>
        </div>
    </div>
        ";
        }
        // line 137
        echo "    <!-- Pokaz slajdów -->
    <div class=\"row\">
        <div class=\"col\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        ";
        // line 149
        echo "                        <img class=\"d-block w-100\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/1.png"), "html", null, true);
        echo "\" alt=\"Pierwszy slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/2.png"), "html", null, true);
        echo "\" alt=\"Drugi slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/3.png"), "html", null, true);
        echo "\" alt=\"Trzeci slajd\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Poprzednie</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Następne</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Zakładki z manu -->
    ";
        // line 170
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BikeLando";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 171
        echo "        <div class=\"row\" id=\"zakladki\">
            <div class=\"col\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-header bg-transparent border-dark\">
                        Witaj podróżniku
                    </div>
                    <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                            <p>Zawitałeś na portal stworzony właśnie dla Ciebie! Dla podróżnika!</p>
                            <p>Jesteśmy portalem zrzeszającym ludzi, którzy czasem lubią zdjąć korporacyjne uniformy, założyć kask i gnać ku zachodzącemu słońcu!</p>
                            <p>Na naszej stronie znajdziesz niesamowite trasy rowerowe. Począwszy od tych pozornie zwykłych, skończywszy na tych, co zaprowadzą cię na koniec tęczy!</p>
                            <p>Możesz tu dodać rownież swoje oulubione ścieżki, a my napenwo odwdzięczymy się tym samym.</p>
                            <footer class=\"blockquote-footer\">Notatka autorów <cite title=\"Source Title\">15.06.2020</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 171,  368 => 170,  349 => 6,  338 => 190,  336 => 170,  318 => 155,  312 => 152,  305 => 149,  292 => 137,  284 => 132,  280 => 131,  276 => 130,  271 => 127,  269 => 126,  266 => 125,  258 => 120,  254 => 119,  250 => 118,  244 => 115,  240 => 114,  236 => 113,  231 => 110,  229 => 109,  226 => 108,  219 => 104,  215 => 103,  204 => 95,  200 => 93,  198 => 92,  195 => 91,  188 => 87,  184 => 86,  181 => 85,  179 => 84,  167 => 75,  163 => 74,  155 => 68,  146 => 65,  143 => 64,  139 => 63,  136 => 62,  127 => 59,  124 => 58,  120 => 57,  112 => 52,  108 => 51,  104 => 50,  61 => 10,  55 => 7,  51 => 6,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Aleksandra Rawicz Adam Hilaruk Małgorzata Wieteska #}
<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}BikeLando{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <style>
        body {
            background-image: url({{ asset('grafic/IMG_1825.JPG') }});
            background-position: top center;
            background-attachment: fixed;
        }

        input[type=email], input[type=password], input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .map-container-3{
              overflow:hidden;
              padding-bottom:25%;
              position:relative;
              height:0;
          }
        .map-container-3 iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        .container {
            background-color: #E0F2F1;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 15px;
            box-shadow: 5px 5px 10px
        }
    </style>
</head>
<body>

<!-- skrypty do bootstrapa i jquery -->
<script src=\"{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<!-- Główny kontener -->
<div class=\"container\" style=\"box-shadow: 5px 5px 10px\">
    <!-- Tytuł -->

    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('warning') %}
        <div class=\"alert alert-warning\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col\">
            <h1 style=\"float: left;\">BikeLando</h1>
        </div>
        <div class=\"col\">
            <audio controls autoplay loop style=\"float: right\">
                <source src=\"{{ asset('Music/Loona.mp3') }}\" type='audio/mpeg'>
                <a href=\"{{ asset('Music/Loona.mp3') }}\">Pobierz</a>
            </audio>
        </div>
    </div>
    <div style=\"margin: 16px\"></div>
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
            {% if app.user %}
            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako {{ app.user.username }},
                <a href=\"{{ path('app_logout') }}\" class=\"badge badge-link\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
        {% endif %}
        </div>
        {%  if app.user == null %}
        <div class=\"col\">
            <form class=\"form-inline\" style=\"float: right\">
                <a href=\"{{ path('app_login') }}\" type=\"button\" class=\"btn btn-outline-dark\">Zaloguj się</a>
            </form>
        </div>
    </div>
<div style=\"margin: 16px\"></div>
    <!-- Rejestracja i nowe hasło-->
    <div class=\"row\">
        <div class=\"col\">
            <a href=\"{{ path('app_register')}}\" class=\"badge badge-link\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"{{ path('reset')}}\" class=\"badge badge-link\" style=\"float: right\">Nie pamietam hasła</a>
        </div>
    </div>
    {% endif %}
    <!-- Menu -->
        {% if app.user %}
            <div class=\"row\">
                <div class=\"col\">
                    <nav class=\"nav navbar-light\" style=\"float: left\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('home') }}\">Strona główna</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('tours') }}\">Trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('about') }}\">O nas</a>
                    </nav>
                    <nav class=\"nav navbar-light\" style=\"float: right\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('account',{'user':app.user.email})}}\">Twoje konto</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('user_tours',{'user':app.user.email})}}\">Twoje trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent;\" href=\"{{ path('add_tours',{'user':app.user.email})}}\">Dodaj trase</a>
                    </nav>
                </div>
            </div>
        {%  endif %}

        {%  if app.user == null %}
    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('home') }}\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('tours') }}\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('about') }}\">O nas</a>
            </nav>
        </div>
    </div>
        {% endif %}
    <!-- Pokaz slajdów -->
    <div class=\"row\">
        <div class=\"col\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        {# the image lives at \"public/grafic/logo.png\" #}
                        <img class=\"d-block w-100\" src=\"{{ asset('grafic/1.png') }}\" alt=\"Pierwszy slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"{{ asset('grafic/2.png') }}\" alt=\"Drugi slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"{{ asset('grafic/3.png') }}\" alt=\"Trzeci slajd\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Poprzednie</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Następne</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Zakładki z manu -->
    {% block body %}
        <div class=\"row\" id=\"zakladki\">
            <div class=\"col\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-header bg-transparent border-dark\">
                        Witaj podróżniku
                    </div>
                    <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                            <p>Zawitałeś na portal stworzony właśnie dla Ciebie! Dla podróżnika!</p>
                            <p>Jesteśmy portalem zrzeszającym ludzi, którzy czasem lubią zdjąć korporacyjne uniformy, założyć kask i gnać ku zachodzącemu słońcu!</p>
                            <p>Na naszej stronie znajdziesz niesamowite trasy rowerowe. Począwszy od tych pozornie zwykłych, skończywszy na tych, co zaprowadzą cię na koniec tęczy!</p>
                            <p>Możesz tu dodać rownież swoje oulubione ścieżki, a my napenwo odwdzięczymy się tym samym.</p>
                            <footer class=\"blockquote-footer\">Notatka autorów <cite title=\"Source Title\">15.06.2020</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\base.html.twig");
    }
}
