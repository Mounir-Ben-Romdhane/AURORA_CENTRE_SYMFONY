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

/* reclamation/update.html.twig */
class __TwigTemplate_d46c688ca9f797eccbc27b5b1182d159 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/update.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation/update.html.twig", 1);
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

        echo "Ajouter une reponse !";
        
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
        echo "<body>

  <main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Ajouter une reponse</h1>
    </div><!-- End Page Title -->
      <div class=\"container\">
        <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Ajouter une reponse
                                    </h3>
                                </div>
                                <div class=\"card-body\">
                            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">type</label>
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100%;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Nom</label>
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100%;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "emailreclamation", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100%;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "emailreclamation", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Description</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100%;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>                           
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "save", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "btn btn-primary w-100"]]);
        echo "
                            </div>
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

  </main>

  

</body>

            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  162 => 51,  157 => 49,  152 => 47,  144 => 42,  139 => 40,  132 => 36,  127 => 34,  120 => 30,  115 => 28,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Ajouter une reponse !{% endblock %}

{% block body %}
<body>

  <main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Ajouter une reponse</h1>
    </div><!-- End Page Title -->
      <div class=\"container\">
        <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Ajouter une reponse
                                    </h3>
                                </div>
                                <div class=\"card-body\">
                            {{form_start(form,{'attr':{'novalidate':'novalidate'}})}}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">type</label>
                            {{ form_widget(form.type,{'attr':{'class':'form-control', 'style':'width:100%;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(form.type,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Nom</label>
                            {{ form_widget(form.nom,{'attr':{'class':'form-control', 'style':'width:100%;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(form.nom,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email</label>
                            {{ form_widget(form.emailreclamation,{'attr':{'class':'form-control', 'style':'width:100%;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(form.emailreclamation,{'attr':{'class':'text-danger'}}) }}
                            
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Description</label>
                            {{ form_widget(form.description,{'attr':{'class':'form-control', 'style':'width:100%;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(form.description,{'attr':{'class':'text-danger'}}) }}
                            <br>                           
                            {{form_widget(form.save,{'attr':{'class':'btn btn-primary w-100'}})}}
                            </div>
                        {{ form_end(form) }}
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

  </main>

  

</body>

            
{% endblock %}", "reclamation/update.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reclamation\\update.html.twig");
    }
}
