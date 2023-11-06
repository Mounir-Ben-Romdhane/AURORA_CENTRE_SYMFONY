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

/* security/reset_password.html.twig */
class __TwigTemplate_403daf37562e9823cc3452b54d4259c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "security/reset_password.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                <div class=\"col-12\">
                    <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Entrer votre Mot de passe</b></label>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                    </div>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                  <br>
                  <div class=\"col-12\">
                  <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Confirmation votre mot de passe</b></label>
                  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), "second", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                  </div>
                  <br>
                <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\">réinitialiser le mot de passe</button>
                <br>
                <br>
                <div class=\"col-12\">
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                </div>
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 54, $this->source); })()), 'form_end');
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
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  148 => 52,  138 => 45,  131 => 41,  125 => 38,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            {{ form_start(passForm) }}
                <div class=\"col-12\">
                    <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Entrer votre Mot de passe</b></label>
                    {{ form_widget(passForm.password.first,{'attr':{'class':'form-control'}}) }}
                    <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                    </div>
                {{ form_errors(passForm.password,{'attr':{'class':'text-danger'}}) }}
                  <br>
                  <div class=\"col-12\">
                  <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Confirmation votre mot de passe</b></label>
                  {{ form_widget(passForm.password.second,{'attr':{'class':'form-control'}}) }} 
                  </div>
                  <br>
                <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\">réinitialiser le mot de passe</button>
                <br>
                <br>
                <div class=\"col-12\">
                <a href=\"{{ path('app_front') }}\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                </div>
            {{ form_end(passForm) }}

            
          </div>
        </div>
        
            
</div>
        </div>
        </div>
                
           

        
        
        </header>
        
    
       
        
    </body>

{% endblock %}
", "security/reset_password.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\security\\reset_password.html.twig");
    }
}
