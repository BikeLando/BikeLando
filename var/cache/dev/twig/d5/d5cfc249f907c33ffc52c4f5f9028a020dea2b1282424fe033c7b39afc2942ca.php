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

/* tours/index.html.twig */
class __TwigTemplate_b9ac450f10a1c35982d19e22ed27b62f56087eac86be86496baf74d7a4152899 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tours/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tours/index.html.twig", 1);
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

        echo "BikeLando - Trasy";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
        <div class=\"card-group\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}BikeLando - Trasy{% endblock %}

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
        <div class=\"card-group\">
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
{% endblock %}", "tours/index.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\tours\\index.html.twig");
    }
}
