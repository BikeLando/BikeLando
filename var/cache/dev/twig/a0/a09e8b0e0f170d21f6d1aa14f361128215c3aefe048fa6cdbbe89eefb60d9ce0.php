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

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <style>
        body {
            background-image: url(";
        // line 9
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
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<!-- Główny kontener -->
<div class=\"container\">
    <!-- Tytuł -->
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "flashbag", [], "any", false, false, false, 55), "get", [0 => "notice"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 56
            echo "        <div class=\"alert alert-success\">
            ";
            // line 57
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    <div class=\"row\">
        <div class=\"col\">
            <h1 style=\"float: left;\">BikeLando</h1>
        </div>
        <div class=\"col\">
            <audio controls autoplay loop style=\"float: right\">
                <source src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\" type='audio/mpeg'>
                <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\">Pobierz</a>
            </audio>
        </div>
    </div>
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) {
            // line 76
            echo "            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
            echo ",
                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
        ";
        }
        // line 82
        echo "        </div>
        ";
        // line 83
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), null))) {
            // line 84
            echo "        <div class=\"col\">
            <form class=\"form-inline\" style=\"float: right\">
                <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" type=\"button\" class=\"btn btn-outline-dark\">Zaloguj się</a>
            </form>
        </div>
    </div>
    <!-- Rejestracja i nowe hasło-->
    <div class=\"row\">
        <div class=\"col\">
            <a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
            echo "\" class=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
        </div>
    </div>
    ";
        }
        // line 98
        echo "    <!-- Menu -->
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <nav class=\"nav navbar-light\" style=\"float: left\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
                    </nav>
                    <nav class=\"nav navbar-light\" style=\"float: right\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "email", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">Twoje konto</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_tours", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "email", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\">Twoje trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent;\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tours", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">Dodaj trase</a>
                    </nav>
                </div>
            </div>
        ";
        }
        // line 115
        echo "
        ";
        // line 116
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), null))) {
            // line 117
            echo "    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
            </nav>
        </div>
    </div>
        ";
        }
        // line 127
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
        // line 139
        echo "                        <img class=\"d-block w-100\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/1.png"), "html", null, true);
        echo "\" alt=\"Pierwszy slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/2.png"), "html", null, true);
        echo "\" alt=\"Drugi slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 145
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
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 160
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 161
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
        return array (  356 => 161,  346 => 160,  327 => 5,  316 => 180,  314 => 160,  296 => 145,  290 => 142,  283 => 139,  270 => 127,  262 => 122,  258 => 121,  254 => 120,  249 => 117,  247 => 116,  244 => 115,  236 => 110,  232 => 109,  228 => 108,  222 => 105,  218 => 104,  214 => 103,  209 => 100,  207 => 99,  204 => 98,  197 => 94,  193 => 93,  183 => 86,  179 => 84,  177 => 83,  174 => 82,  167 => 78,  163 => 77,  160 => 76,  158 => 75,  147 => 67,  143 => 66,  135 => 60,  126 => 57,  123 => 56,  119 => 55,  112 => 51,  108 => 50,  104 => 49,  61 => 9,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
<div class=\"container\">
    <!-- Tytuł -->
    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\">
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
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
            {% if app.user %}
            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako {{ app.user.username }},
                <a href=\"{{ path('app_logout') }}\" class=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
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
    <!-- Rejestracja i nowe hasło-->
    <div class=\"row\">
        <div class=\"col\">
            <a href=\"{{ path('app_register')}}\" class=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"{{ path('reset')}}\" class=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
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
