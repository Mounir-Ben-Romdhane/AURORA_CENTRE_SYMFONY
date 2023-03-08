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

/* addClient.html.twig */
class __TwigTemplate_ab57db5c2106d6a4ddcea9b0b3ac9b55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addClient.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "addClient.html.twig", 1);
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

        echo "Ajouter un client !";
        
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
      <h1>Ajouter un client</h1>
    </div><!-- End Page Title -->

  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "      <div class=\"alert alert-success\">
          ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      <div class=\"container\">
        <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Ajouter un client
                                    </h3>
                                </div>
                                <div class=\"card-body\">
                            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourName\" class=\"form-label\">Nom Client</label>
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "style" => "width:662px;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email Client</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "style" => "width:662px;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                                <label for=\"yourEmail\" class=\"form-label\">Numéro de téléphone client</label>
                                <div>
                                    <div class=\"input-group has-validation\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">+216</span>
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 49, $this->source); })()), "numTel", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "style" => "text-align:center;"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 53, $this->source); })()), "numTel", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger", "style" => "width:662px;text-align:center;"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\" >Adresse complète client</label>
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 57, $this->source); })()), "fullAddress", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "style" => "width:662px;text-align:center;"]]);
        echo "
                            </div>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 59, $this->source); })()), "fullAddress", [], "any", false, false, false, 59), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Mot de passe Client</label>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), "first", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "width:662px;text-align:center;"]]);
        echo "
                            <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                            </div>
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Confirmer le mot de passe du client</label>
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 70, $this->source); })()), "password", [], "any", false, false, false, 70), "second", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "style" => "width:662px;text-align:center;"]]);
        echo " 
                            </div>
                            <br>
                            <br>
                            <div class=\"col-12\" align=\"centre\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\" >Ajouter un client</button>
                            </div>
                        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 77, $this->source); })()), 'form_end');
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
        return "addClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 77,  200 => 70,  193 => 66,  187 => 63,  180 => 59,  175 => 57,  168 => 53,  161 => 49,  151 => 42,  146 => 40,  139 => 36,  134 => 34,  127 => 30,  114 => 19,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Ajouter un client !{% endblock %}

{% block body %}
<body>

  <main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Ajouter un client</h1>
    </div><!-- End Page Title -->

  {% for message in app.flashes('Success') %}
      <div class=\"alert alert-success\">
          {{ message }}
      </div>
  {% endfor %}
      <div class=\"container\">
        <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Ajouter un client
                                    </h3>
                                </div>
                                <div class=\"card-body\">
                            {{ form_start(client,{attr:{novalidate:'novalidate'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourName\" class=\"form-label\">Nom Client</label>
                            {{ form_widget(client.username,{'attr':{'class':'form-control', 'style':'width:662px;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(client.username,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\">Email Client</label>
                            {{ form_widget(client.email,{'attr':{'class':'form-control', 'style':'width:662px;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(client.email,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                                <label for=\"yourEmail\" class=\"form-label\">Numéro de téléphone client</label>
                                <div>
                                    <div class=\"input-group has-validation\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">+216</span>
                                        {{ form_widget(client.numTel,{'attr':{'class':'form-control' , 'style':'text-align:center;'}}) }}
                                    </div>
                                </div>
                            </div>
                            {{ form_errors(client.numTel,{'attr':{'class':'text-danger', 'style':'width:662px;text-align:center;'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourEmail\" class=\"form-label\" >Adresse complète client</label>
                            {{ form_widget(client.fullAddress,{'attr':{'class':'form-control' , 'style':'width:662px;text-align:center;'}}) }}
                            </div>
                            {{ form_errors(client.fullAddress,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Mot de passe Client</label>
                            {{ form_widget(client.password.first,{'attr':{'class':'form-control', 'style':'width:662px;text-align:center;'}}) }}
                            <div class=\"invalid-feedback\">S'il vous plait entrez votre mot de passe !</div>
                            </div>
                            {{ form_errors(client.password,{'attr':{'class':'text-danger'}}) }}
                            <br>
                            <div class=\"col-12\">
                            <label for=\"yourPassword\" class=\"form-label\">Confirmer le mot de passe du client</label>
                            {{ form_widget(client.password.second,{'attr':{'class':'form-control', 'style':'width:662px;text-align:center;'}}) }} 
                            </div>
                            <br>
                            <br>
                            <div class=\"col-12\" align=\"centre\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\" >Ajouter un client</button>
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

            
{% endblock %}", "addClient.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\addClient.html.twig");
    }
}
