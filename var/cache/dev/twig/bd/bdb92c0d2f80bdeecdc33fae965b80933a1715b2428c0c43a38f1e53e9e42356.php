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

/* account/index.html.twig */
class __TwigTemplate_b581edb55bd34d61e98bc0f40728ecc49066a77f842fa0820d858b60eb435e6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BikeLando - Twoje konto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "<!-- infomacja o użytkowniku -->
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            echo " <!--zalogowany -->
    <div class=\"row\" id=\"zakladki\">
        <div class=\"col\">
            <div class=\"card bg-transparent border-dark\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Twoje Konto</h5>
                    <p class=\"card-text\">Tu odnajdziesz podsumowanie swoich dokonań w BikeLando.</p>
                    <table class=\"table table-dark\" style=\"width: 80%\">
                        <thead>
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope=\"col\">Dodane trasy</th>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["ile_dodano"]) || array_key_exists("ile_dodano", $context) ? $context["ile_dodano"] : (function () { throw new RuntimeError('Variable "ile_dodano" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Dodane oceny</th>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["ile_ocen"]) || array_key_exists("ile_ocen", $context) ? $context["ile_ocen"] : (function () { throw new RuntimeError('Variable "ile_ocen" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Dodane kilometry</th>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["sum_km"]) || array_key_exists("sum_km", $context) ? $context["sum_km"] : (function () { throw new RuntimeError('Variable "sum_km" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Średnia ocena</th>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["srednia"]) || array_key_exists("srednia", $context) ? $context["srednia"] : (function () { throw new RuntimeError('Variable "srednia" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Okrążenia ziemi</th>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["ob_ziemi"]) || array_key_exists("ob_ziemi", $context) ? $context["ob_ziemi"] : (function () { throw new RuntimeError('Variable "ob_ziemi" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</td>
                        </tr>
                        </tbody>
                    </table>

                    <a class=\"nav-link btn btn-outline-dark\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Edytuj</a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), null))) {
            echo " <!--nie zalogowany -->
        <div class=\"alert alert-danger\" role=\"alert\">
            Część dostępna wyłącznie dla użytkowników portalu, cofnij się do części dostępnej powszechnie <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\" class=\"alert-link\"> Kliknij </a>.
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 52,  156 => 50,  153 => 49,  144 => 43,  136 => 38,  129 => 34,  122 => 30,  115 => 26,  108 => 22,  90 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Aleksandra Rawicz #}
{% extends 'base.html.twig' %}

{% block title %}BikeLando - Twoje konto{% endblock %}

{% block body %}<!-- infomacja o użytkowniku -->
    {% if app.user %} <!--zalogowany -->
    <div class=\"row\" id=\"zakladki\">
        <div class=\"col\">
            <div class=\"card bg-transparent border-dark\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Twoje Konto</h5>
                    <p class=\"card-text\">Tu odnajdziesz podsumowanie swoich dokonań w BikeLando.</p>
                    <table class=\"table table-dark\" style=\"width: 80%\">
                        <thead>
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope=\"col\">Dodane trasy</th>
                            <td>{{ ile_dodano }}</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Dodane oceny</th>
                            <td>{{ ile_ocen }}</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Dodane kilometry</th>
                            <td>{{ sum_km }}</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Średnia ocena</th>
                            <td>{{ srednia }}</td>
                        </tr>
                        <tr>
                            <th scope=\"col\">Okrążenia ziemi</th>
                            <td>{{ ob_ziemi }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <a class=\"nav-link btn btn-outline-dark\" href=\"{{ path('edit',{'id':app.user.email}) }}\">Edytuj</a>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if app.user == null %} <!--nie zalogowany -->
        <div class=\"alert alert-danger\" role=\"alert\">
            Część dostępna wyłącznie dla użytkowników portalu, cofnij się do części dostępnej powszechnie <a href=\"{{ path('index') }}\" class=\"alert-link\"> Kliknij </a>.
        </div>
    {% endif %}
{% endblock %}", "account/index.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\account\\index.html.twig");
    }
}
