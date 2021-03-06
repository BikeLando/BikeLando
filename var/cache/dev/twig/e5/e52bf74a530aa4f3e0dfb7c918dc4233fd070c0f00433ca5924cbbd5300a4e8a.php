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

/* register/index.html.twig */
class __TwigTemplate_8c046e35b5651a371fd977538610a27975e3e6ff05092ace0b83f29ea5f40fd9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 1);
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

        echo "BikeLando - Rejestracja";
        
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
        echo "     <div class=\"col\">
         <form class=\"form-inline\" style=\"float: right\">
             <div class=\"form-group mb-1\">
                 <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria- describedby=\"emailHelp\" placeholder=\"Email\">
             </div>
             <div class=\"form-group mx-sm-1 mb-1\">
                 <input type=\"password\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Hasło\">
             </div>
             <button type=\"submit\" class=\"btn btn-outline-dark mb-1\">Zaloguj się</button>
         </form>
     </div>
     </div>
     <!-- Rejestracja i nowe hasło-->
     <div class=\"row\">
         <div class=\"col\">
             <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
             <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
        echo "\" lass=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
         </div>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 25
        echo "<div class=\"row\">
    <div class=\"col\">
        <nav class=\"nav navbar-light\">
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Strona główna</a>
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tours");
        echo "\">Trasy</a>
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">O nas</a>
        </nav>
    </div>
</div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"row\" id=\"zakladki\">
        <div class=\"col\">
            <div class=\"card-group\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Rejestracja</h5>
                        <form>
                            <div class=\"form-group row\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Hasło</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Hasło\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Dołącz</button>
                                </div>
                            </div>
                        </form>
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
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 37,  164 => 36,  148 => 30,  144 => 29,  140 => 28,  135 => 25,  125 => 24,  111 => 20,  107 => 19,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}BikeLando - Rejestracja{% endblock %}
 {% block body1 %}
     <div class=\"col\">
         <form class=\"form-inline\" style=\"float: right\">
             <div class=\"form-group mb-1\">
                 <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria- describedby=\"emailHelp\" placeholder=\"Email\">
             </div>
             <div class=\"form-group mx-sm-1 mb-1\">
                 <input type=\"password\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Hasło\">
             </div>
             <button type=\"submit\" class=\"btn btn-outline-dark mb-1\">Zaloguj się</button>
         </form>
     </div>
     </div>
     <!-- Rejestracja i nowe hasło-->
     <div class=\"row\">
         <div class=\"col\">
             <a href=\"{{ path('register')}}\" lass=\"badge badge-light\" style=\"float: right; margin-left: 10px\">Dołącz do nas!</a>
             <a href=\"{{ path('reset')}}\" lass=\"badge badge-light\" style=\"float: right\">Nie pamietam hasła</a>
         </div>
     </div>
 {% endblock %}
{%  block body2 %}
<div class=\"row\">
    <div class=\"col\">
        <nav class=\"nav navbar-light\">
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('home') }}\">Strona główna</a>
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('tours') }}\">Trasy</a>
            <a class=\"nav-link btn btn-outline-dark \" style=\"border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom-color: transparent\" href=\"{{ path('about') }}\">O nas</a>
        </nav>
    </div>
</div>

    {% endblock %}
{% block body %}
    <div class=\"row\" id=\"zakladki\">
        <div class=\"col\">
            <div class=\"card-group\">
                <div class=\"card bg-transparent border-dark\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Rejestracja</h5>
                        <form>
                            <div class=\"form-group row\">
                                <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Hasło</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Hasło\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Dołącz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}", "register/index.html.twig", "C:\\xampp\\htdocs\\bikelando\\templates\\register\\index.html.twig");
    }
}
