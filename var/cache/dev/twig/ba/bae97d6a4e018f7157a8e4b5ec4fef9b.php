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

/* editClient.html.twig */
class __TwigTemplate_db5867c9fb248a1f384be22c7a4eca6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editClient.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "editClient.html.twig", 1);
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

        echo "Edit Client!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<body>
<main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Edit Client</h1>
    </div><!-- End Page Title -->

<div class=\"container\">
        <div class=\"container\">
                <div class=\"row my-5\">
                    <div class=\"col-md-8 mx-auto\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    Edit Client
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div class=\"col-12\">
                            <label for=\"yourName\" class=\"form-label\">Name Client</label>
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email Client</label>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Phone Number Client</label>
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 41, $this->source); })()), "numTel", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 43, $this->source); })()), "numTel", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Password Client</label>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"invalid-feedback\">Please enter your password!</div>
                            </div>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Confirme Password Client</label>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"invalid-feedback\">Please confirme your password!</div>
                            </div>
                            </br>
                            <div class=\"col-12\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">Save change</button>
                            </div>
                        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 61, $this->source); })()), 'form_end');
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
        return "editClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 61,  163 => 54,  156 => 50,  150 => 47,  143 => 43,  138 => 41,  131 => 37,  126 => 35,  119 => 31,  114 => 29,  108 => 26,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Edit Client!{% endblock %}



{% block body %}
<body>
<main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Edit Client</h1>
    </div><!-- End Page Title -->

<div class=\"container\">
        <div class=\"container\">
                <div class=\"row my-5\">
                    <div class=\"col-md-8 mx-auto\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    Edit Client
                                </h3>
                            </div>
                            <div class=\"card-body\">
                                {{ form_start(client,{attr:{novalidate:'novalidate'}}) }}
                            <div class=\"col-12\">
                            <label for=\"yourName\" class=\"form-label\">Name Client</label>
                            {{ form_widget(client.username,{'attr':{'class':'form-control'}}) }}
                            </div>
                            {{ form_errors(client.username,{'attr':{'class':'text-danger'}}) }}
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email Client</label>
                            {{ form_widget(client.email,{'attr':{'class':'form-control'}}) }}
                            </div>
                            {{ form_errors(client.email,{'attr':{'class':'text-danger'}}) }}
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Phone Number Client</label>
                            {{ form_widget(client.numTel,{'attr':{'class':'form-control'}}) }}
                            </div>
                            {{ form_errors(client.numTel,{'attr':{'class':'text-danger'}}) }}
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Password Client</label>
                            {{ form_widget(client.password.first,{'attr':{'class':'form-control'}}) }}
                            <div class=\"invalid-feedback\">Please enter your password!</div>
                            </div>
                            {{ form_errors(client.password,{'attr':{'class':'text-danger'}}) }}
                            </br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Confirme Password Client</label>
                            {{ form_widget(client.password.second,{'attr':{'class':'form-control'}}) }}
                            <div class=\"invalid-feedback\">Please confirme your password!</div>
                            </div>
                            </br>
                            <div class=\"col-12\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">Save change</button>
                            </div>
                        {{ form_end(client) }}
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
</div>
</main>
       </body>     
{% endblock %}", "editClient.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\editClient.html.twig");
    }
}
