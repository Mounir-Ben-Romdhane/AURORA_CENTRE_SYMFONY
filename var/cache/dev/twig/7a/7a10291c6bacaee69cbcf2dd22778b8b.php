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

/* security/reset_password_request.html.twig */
class __TwigTemplate_06af831d94299cd5dd123721fb6e1ac4 extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_request.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "security/reset_password_request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réanitialisation de mot de passe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>
        </nav>


        
        <!-- Masthead-->
        <header class=\"masthead\">

        <div class=\"container\">
          <div class=\"row justify-content-center\">
            
        <div class=\"col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              
              <div class=\"containerr \">

                <div class=\"card-body\">
              
             <h1>Réanitialisation de mot de passe</h1>
             <br>
             <br>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "

                <div class=\"col-12\">
                    <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Entrer votre e-mail</b></label>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                <br>
                <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\">Envoyer</button>
                <br>
                <br>
                <div class=\"col-12\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                </div>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

            
          </div>
        </div>
        
            

            </div>
          </div>
        </div>    
           

        
        
        </header>
        
    
       
        
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/reset_password_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  140 => 47,  131 => 41,  126 => 39,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Réanitialisation de mot de passe{% endblock %}

{% block body %}

<body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>
        </nav>


        
        <!-- Masthead-->
        <header class=\"masthead\">

        <div class=\"container\">
          <div class=\"row justify-content-center\">
            
        <div class=\"col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              
              <div class=\"containerr \">

                <div class=\"card-body\">
              
             <h1>Réanitialisation de mot de passe</h1>
             <br>
             <br>
            {{ form_start(requestPassForm) }}

                <div class=\"col-12\">
                    <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Entrer votre e-mail</b></label>
                    {{ form_widget(requestPassForm.email,{'attr':{'class':'form-control'}}) }}
                    </div>
                    {{ form_errors(requestPassForm.email,{'attr':{'class':'text-danger'}}) }}
                <br>
                <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\">Envoyer</button>
                <br>
                <br>
                <div class=\"col-12\">
                <a href=\"{{ path('app_front') }}\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                </div>
            {{ form_end(requestPassForm) }}

            
          </div>
        </div>
        
            

            </div>
          </div>
        </div>    
           

        
        
        </header>
        
    
       
        
    </body>

{% endblock %}
", "security/reset_password_request.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\security\\reset_password_request.html.twig");
    }
}
