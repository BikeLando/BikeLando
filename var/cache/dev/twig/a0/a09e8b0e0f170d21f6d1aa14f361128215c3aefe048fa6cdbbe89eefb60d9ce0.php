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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <style>
        input[type=email], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<!-- skrypty do bootstrapa i jquery -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<!-- Główny kontener -->
<div class=\"container\">
    <audio controls autoplay loop style=\"float: right\">
        <source src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\" type='audio/mpeg'>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Music/Loona.mp3"), "html", null, true);
        echo "\">Pobierz</a>
    </audio>
    <!-- Tytuł -->
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "flashbag", [], "any", false, false, false, 32), "get", [0 => "notice"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "        <div class=\"alert alert-success\">
            ";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <div class=\"row\">
        <div class=\"col\">
            <h1 style=\"float: left;\">BikeLando</h1>
        </div>
    </div>
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
        </div>
        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            echo ",
                <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), null))) {
            // line 56
            echo "        <div class=\"col\">
            <form class=\"form-inline\" style=\"float: right\">
                <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" type=\"button\" class=\"btn btn-outline-dark\">Zaloguj się</a>
            </form>
        </div>
    </div>
    <!-- Rejestracja i nowe hasło-->
    <div class=\"row\">
        <div class=\"col\">
            <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
            echo "\" lass=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
        </div>
    </div>
    ";
        }
        // line 70
        echo "    <!-- Menu -->
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <nav class=\"nav navbar-light\" style=\"float: left\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
                    </nav>
                    <nav class=\"nav navbar-light\" style=\"float: right\">
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Twoje konto</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_tours");
            echo "\">Twoje trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent;\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tours", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">Dodaj trase</a>
                    </nav>
                </div>
            </div>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), null))) {
            // line 89
            echo "    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\">
                <a class=\"nav-link btn btn-outline-dark active\" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
            echo "\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">O nas</a>
            </nav>
        </div>
    </div>
        ";
        }
        // line 99
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
        // line 111
        echo "                        <img class=\"d-block w-100\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/1.png"), "html", null, true);
        echo "\" alt=\"Pierwszy slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("grafic/2.png"), "html", null, true);
        echo "\" alt=\"Drugi slajd\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 117
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
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "</div>
</body>
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

    // line 132
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 133
        echo "        <div class=\"row\" id=\"zakladki\">
            <div class=\"col\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-header bg-transparent border-dark\">
                        Witaj podróżniku
                    </div>
                    <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                            <p>Jakiś fajny tekst o tym że mozna tu duzo fajnychtras znaleść i jeździć tak duzo jak Ola.</p>
                            <footer class=\"blockquote-footer\">Notatka developera <cite title=\"Source Title\">15.06.2020</cite></footer>
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
        return array (  314 => 133,  304 => 132,  285 => 5,  273 => 149,  271 => 132,  253 => 117,  247 => 114,  240 => 111,  227 => 99,  219 => 94,  215 => 93,  211 => 92,  206 => 89,  204 => 88,  201 => 87,  193 => 82,  189 => 81,  185 => 80,  179 => 77,  175 => 76,  171 => 75,  166 => 72,  164 => 71,  161 => 70,  154 => 66,  150 => 65,  140 => 58,  136 => 56,  134 => 55,  131 => 54,  124 => 50,  120 => 49,  117 => 48,  115 => 47,  103 => 37,  94 => 34,  91 => 33,  87 => 32,  81 => 29,  77 => 28,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}BikeLando{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <style>
        input[type=email], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<!-- skrypty do bootstrapa i jquery -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<!-- Główny kontener -->
<div class=\"container\">
    <audio controls autoplay loop style=\"float: right\">
        <source src=\"{{ asset('Music/Loona.mp3') }}\" type='audio/mpeg'>
        <a href=\"{{ asset('Music/Loona.mp3') }}\">Pobierz</a>
    </audio>
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
    </div>
    <!-- Podtytuł i logowanie-->
    <div class=\"row\">
        <div class=\"col\">
            <h5 style=\"float: left;\">Portal rowerowy dla każdego</h5>
        </div>
        {% if app.user %}
            <div class=\"mb-3\" style=\"float: right\">
                Zalogowany jako {{ app.user.username }},
                <a href=\"{{ path('app_logout') }}\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
        {% endif %}

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
            <a href=\"{{ path('app_register')}}\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
            <a href=\"{{ path('reset')}}\" lass=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
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
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('account') }}\">Twoje konto</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('user_tours') }}\">Twoje trasy</a>
                        <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent;\" href=\"{{ path('add_tours',{'user':app.user.username})}}\">Dodaj trase</a>
                    </nav>
                </div>
            </div>
        {%  endif %}

        {%  if app.user == null %}
    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\">
                <a class=\"nav-link btn btn-outline-dark active\" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('home') }}\">Strona główna</a>
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
                            <p>Jakiś fajny tekst o tym że mozna tu duzo fajnychtras znaleść i jeździć tak duzo jak Ola.</p>
                            <footer class=\"blockquote-footer\">Notatka developera <cite title=\"Source Title\">15.06.2020</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
</div>
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\base.html.twig");
    }
}
