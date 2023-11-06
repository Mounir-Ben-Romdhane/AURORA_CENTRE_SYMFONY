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
class __TwigTemplate_cd9f758135cbbaab4bdc65560ac8e493 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "register/index.html.twig", 1);
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

        echo "Créer un compte!";
        
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
                        <div class=\"col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center\">


                            <div class=\"containerr\">

                                <div class=\"card-body\">

                                        <div class=\"pt-2 pb-1\">
                                            <h5 class=\"card-title text-center pb-2 fs-1\" style=\"color:white;\">Créer un compte</h5>
                                            <p class=\"text-center small\" style=\"color:white;\">Entrez vos informations personnelles pour créer un compte</p>
                                        </div>

                                        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                            <div class=\"col-12\">
                                            <label for=\"yourName\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre nom</b></label>
                                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "style" => "width:600px;text-align:center;"]]);
        echo "
                                            </div>
                                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre Email</b></label>
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "style" => "width:600px;text-align:center;"]]);
        echo "
                                            </div>
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            <br>
                                            <div class=\"col-12\">
                                                <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre numéro de téléphone</b></label>
                                                <div>
                                                    <div class=\"input-group has-validation\">
                                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">+216</span>
                                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "numTel", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "style" => "text-align:center;"]]);
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "numTel", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre adresse complète</b></label>
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "fullAddress", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "style" => "width:600px;text-align:center;"]]);
        echo "
                                            </div>
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "fullAddress", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Mot de passe</b></label>
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "password", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "style" => "width:600px;text-align:center;"]]);
        echo "
                                            <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                                            </div>
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), "first", [], "any", false, false, false, 68), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Confirmer le mot de passe</b></label>
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "style" => "width:600px;text-align:center;"]]);
        echo " 
                                            <br>
                                            <div class=\"col-12\" align=\"start\" style=\"margin-left:20px;\">
                                                
                                                <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"#ffc800\" id=\"acceptTerms\" required=\"\">
                                                <label class=\"form-check-label\" for=\"acceptTerms\" style=\"color:#ffc800;\"><b>Je suis d'accord et j'accepte les</b> <a href=\"#\" style=\"color:white;\"><b>termes et conditions</b></a></label>
                                                <div class=\"invalid-feedback\">Vous devez accepter avant de soumettre.</div>
                                            </div>
                                            <br>

                                            <div class=\"col-12\">
                                            <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\"><b>Create Account</b></button>
                                            </div>
                                            <br>
                                            
                                            <div class=\"col-12\">
                                            <p class=\"small mb-0\" style=\"color:#ffc800;\"><b>Vous avez déjà un compte ? </b><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" style=\"color:white;\"><b>Connexion</b></a></p>
                                            </div>
                                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "

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
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 90,  208 => 88,  189 => 72,  182 => 68,  176 => 65,  169 => 61,  164 => 59,  157 => 55,  150 => 51,  140 => 44,  135 => 42,  128 => 38,  123 => 36,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Créer un compte!{% endblock %}

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
                        <div class=\"col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center\">


                            <div class=\"containerr\">

                                <div class=\"card-body\">

                                        <div class=\"pt-2 pb-1\">
                                            <h5 class=\"card-title text-center pb-2 fs-1\" style=\"color:white;\">Créer un compte</h5>
                                            <p class=\"text-center small\" style=\"color:white;\">Entrez vos informations personnelles pour créer un compte</p>
                                        </div>

                                        {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                                            <div class=\"col-12\">
                                            <label for=\"yourName\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre nom</b></label>
                                            {{ form_widget(form.username,{'attr':{'class':'form-control' , 'style':'width:600px;text-align:center;'}}) }}
                                            </div>
                                            {{ form_errors(form.username,{'attr':{'class':'text-danger'}}) }}
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre Email</b></label>
                                            {{ form_widget(form.email,{'attr':{'class':'form-control' , 'style':'width:600px;text-align:center;'}}) }}
                                            </div>
                                            {{ form_errors(form.email,{'attr':{'class':'text-danger'}}) }}
                                            <br>
                                            <div class=\"col-12\">
                                                <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre numéro de téléphone</b></label>
                                                <div>
                                                    <div class=\"input-group has-validation\">
                                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">+216</span>
                                                        {{ form_widget(form.numTel,{'attr':{'class':'form-control' , 'style':'text-align:center;'}}) }}
                                                    </div>
                                                </div>
                                            </div>
                                            {{ form_errors(form.numTel,{'attr':{'class':'text-danger'}}) }}
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\" style=\"color:#ffc800;\"><b>Votre adresse complète</b></label>
                                            {{ form_widget(form.fullAddress,{'attr':{'class':'form-control' , 'style':'width:600px;text-align:center;'}}) }}
                                            </div>
                                            {{ form_errors(form.fullAddress,{'attr':{'class':'text-danger'}}) }}
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Mot de passe</b></label>
                                            {{ form_widget(form.password.first,{'attr':{'class':'form-control' , 'style':'width:600px;text-align:center;'}}) }}
                                            <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                                            </div>
                                            {{ form_errors(form.password.first,{'attr':{'class':'text-danger'}}) }}
                                            <br>
                                            <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\"><b>Confirmer le mot de passe</b></label>
                                            {{ form_widget(form.password.second,{'attr':{'class':'form-control' , 'style':'width:600px;text-align:center;'}}) }} 
                                            <br>
                                            <div class=\"col-12\" align=\"start\" style=\"margin-left:20px;\">
                                                
                                                <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"#ffc800\" id=\"acceptTerms\" required=\"\">
                                                <label class=\"form-check-label\" for=\"acceptTerms\" style=\"color:#ffc800;\"><b>Je suis d'accord et j'accepte les</b> <a href=\"#\" style=\"color:white;\"><b>termes et conditions</b></a></label>
                                                <div class=\"invalid-feedback\">Vous devez accepter avant de soumettre.</div>
                                            </div>
                                            <br>

                                            <div class=\"col-12\">
                                            <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\"><b>Create Account</b></button>
                                            </div>
                                            <br>
                                            
                                            <div class=\"col-12\">
                                            <p class=\"small mb-0\" style=\"color:#ffc800;\"><b>Vous avez déjà un compte ? </b><a href=\"{{path('app_login')}}\" style=\"color:white;\"><b>Connexion</b></a></p>
                                            </div>
                                        {{ form_end(form) }}

                                </div>
                        </div>
                    </div>
                </div>
        </header>
        </body>

{% endblock %}
", "register/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\register\\index.html.twig");
    }
}
