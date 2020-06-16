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

/* user_tours/index.html.twig */
class __TwigTemplate_a7fdd70aa94d9cee03ca9e376bbcab83baee62eb5956d88fe4a9b86ae50a2579 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body1' => [$this, 'block_body1'],
            'body2' => [$this, 'block_body2'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_tours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_tours/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_tours/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BikeLando - Twoje trasy";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body1"));

        // line 4
        echo "        <div class=\"col\">
            <h5 style=\"float: right;\">Zalogowany jako email</h5>
        </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\" style=\"float: left\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
        echo "\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">O nas</a>
            </nav>
            <nav class=\"nav navbar-light\" style=\"float: right\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Twoje konto</a>
                <a class=\"nav-link btn btn-outline-dark active\" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_tours");
        echo "\">Twoje trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tours");
        echo "\">Dodaj trase</a>
            </nav>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    <div class=\"row\" >
        <div class=\"col\">
            <div class=\"card-group\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Wyszukaj</h5>
                        <p class=\"card-text\">Wybierz kryteria wyszukiwania</p>
                        <form>
                            <div class=\"form-row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect1\">Ocena trasy</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect2\">Trudność trasy</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect2\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect3\">Region</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect3\">
                                            <option>Dolnośląskie</option>
                                            <option>Kujawsko-Pomorskie</option>
                                            <option>Lubelskie</option>
                                            <option>Lubuskiej</option>
                                            <option>Lódzkie</option>
                                            <option>Małopolskie</option>
                                            <option>Mazowieckie</option>
                                            <option>Opolskie</option>
                                            <option>Podkarpackie</option>
                                            <option>Podlaskie</option>
                                            <option>Pomorskie</option>
                                            <option>Śląskie</option>
                                            <option>Świętokrzyskie</option>
                                            <option>Warmińsko-Mazurskie</option>
                                            <option>Wielkopolskie</option>
                                            <option>Zachodniopomorskie</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type=\"button\" class=\"btn btn-outline-info\" style=\"float: right\">Wyszukaj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class=\"row\" id=\"zakladki\">
                <div class=\"col\">
                    <div class=\"card bg-transparent border-dark\">
                        <img class=\"card-img-top\" src=\"...\" alt=\"Tu ładuje mapke z googla da sie po linku i jest to na mojej stronie\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Tutaj ładujemy tytuł</h5>
                            <p class=\"card-text\">I jak zrobimy to w pętli to będą się ładować obok siebie i będzie ładnie, a tu opis trasy damy.</p>
                        </div>
                        <div class=\"card-footer bg-transparent border-dark\">
                            <small class=\"text-muted\">Data wpisana przez usera</small>
                        </div>
                    </div>
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
        return "user_tours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 32,  165 => 31,  149 => 25,  145 => 24,  141 => 23,  135 => 20,  131 => 19,  127 => 18,  122 => 15,  112 => 14,  98 => 10,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}BikeLando - Twoje trasy{% endblock %}
    {% block body1 %}
        <div class=\"col\">
            <h5 style=\"float: right;\">Zalogowany jako email</h5>
        </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <a href=\"{{ path('home') }}\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Wyloguj</a>
            </div>
        </div>
    {% endblock %}
{% block body2 %}
    <div class=\"row\">
        <div class=\"col\">
            <nav class=\"nav navbar-light\" style=\"float: left\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('home') }}\">Strona główna</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('tours') }}\">Trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('about') }}\">O nas</a>
            </nav>
            <nav class=\"nav navbar-light\" style=\"float: right\">
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('account') }}\">Twoje konto</a>
                <a class=\"nav-link btn btn-outline-dark active\" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('user_tours') }}\">Twoje trasy</a>
                <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('add_tours') }}\">Dodaj trase</a>
            </nav>
        </div>
    </div>

{% endblock %}
{% block body %}
    <div class=\"row\" >
        <div class=\"col\">
            <div class=\"card-group\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Wyszukaj</h5>
                        <p class=\"card-text\">Wybierz kryteria wyszukiwania</p>
                        <form>
                            <div class=\"form-row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect1\">Ocena trasy</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect2\">Trudność trasy</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect2\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleFormControlSelect3\">Region</label>
                                        <select class=\"form-control\" id=\"exampleFormControlSelect3\">
                                            <option>Dolnośląskie</option>
                                            <option>Kujawsko-Pomorskie</option>
                                            <option>Lubelskie</option>
                                            <option>Lubuskiej</option>
                                            <option>Lódzkie</option>
                                            <option>Małopolskie</option>
                                            <option>Mazowieckie</option>
                                            <option>Opolskie</option>
                                            <option>Podkarpackie</option>
                                            <option>Podlaskie</option>
                                            <option>Pomorskie</option>
                                            <option>Śląskie</option>
                                            <option>Świętokrzyskie</option>
                                            <option>Warmińsko-Mazurskie</option>
                                            <option>Wielkopolskie</option>
                                            <option>Zachodniopomorskie</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type=\"button\" class=\"btn btn-outline-info\" style=\"float: right\">Wyszukaj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class=\"row\" id=\"zakladki\">
                <div class=\"col\">
                    <div class=\"card bg-transparent border-dark\">
                        <img class=\"card-img-top\" src=\"...\" alt=\"Tu ładuje mapke z googla da sie po linku i jest to na mojej stronie\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Tutaj ładujemy tytuł</h5>
                            <p class=\"card-text\">I jak zrobimy to w pętli to będą się ładować obok siebie i będzie ładnie, a tu opis trasy damy.</p>
                        </div>
                        <div class=\"card-footer bg-transparent border-dark\">
                            <small class=\"text-muted\">Data wpisana przez usera</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user_tours/index.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\user_tours\\index.html.twig");
    }
}
