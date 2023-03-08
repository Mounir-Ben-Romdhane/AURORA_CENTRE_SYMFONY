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

/* showClient.html.twig */
class __TwigTemplate_08faff72bfbbe5a7b6573b9c2489e124 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "showClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "showClient.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "showClient.html.twig", 1);
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

        echo "Afficher client !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>

  <main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Afficher client</h1>
    </div><!-- End Page Title -->

  
       <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Client id : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "
                                    </h3>
                                </div>
                                </br>

                                <div class=\"card-body\">
                                    <div class=\"card\">
                                       Client name : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), "html", null, true);
        echo "
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Email : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Adresse complète : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 37, $this->source); })()), "fullAddress", [], "any", false, false, false, 37), "html", null, true);
        echo "
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Numero telephone : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 41, $this->source); })()), "numTel", [], "any", false, false, false, 41), "html", null, true);
        echo "
                                    </div>
                                    </br>
                                    ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })()), "isVerified", [], "any", false, false, false, 44) == 1)) {
            // line 45
            echo "                                        <div class=\"card\">
                                            <p> Statut de compte : Compte vérifie</p>
                                        </div>
                                        ";
        } else {
            // line 49
            echo "                                        <div class=\"card\">
                                             <p>Statut de compte : Compte non vérifie</p>
                                        </div>
                                        
                                    ";
        }
        // line 54
        echo "                                    
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
        return "showClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  150 => 49,  144 => 45,  142 => 44,  136 => 41,  129 => 37,  122 => 33,  115 => 29,  105 => 22,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Afficher client !{% endblock %}


{% block body %}
<body>

  <main id=\"main\" class=\"main\">

  <div class=\"pagetitle\">
      <h1>Afficher client</h1>
    </div><!-- End Page Title -->

  
       <div class=\"container\">
                    <div class=\"row my-5\">
                        <div class=\"col-md-8 mx-auto\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">
                                        Client id : {{ client.id }}
                                    </h3>
                                </div>
                                </br>

                                <div class=\"card-body\">
                                    <div class=\"card\">
                                       Client name : {{ client.username }}
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Email : {{ client.email }}
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Adresse complète : {{ client.fullAddress }}
                                    </div>
                                    </br>
                                    <div class=\"card\">
                                        Client Numero telephone : {{ client.numTel }}
                                    </div>
                                    </br>
                                    {% if client.isVerified == 1 %}
                                        <div class=\"card\">
                                            <p> Statut de compte : Compte vérifie</p>
                                        </div>
                                        {% else %}
                                        <div class=\"card\">
                                             <p>Statut de compte : Compte non vérifie</p>
                                        </div>
                                        
                                    {% endif %}
                                    
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    
        </div>
        

  </main>

  

</body>

            
{% endblock %}", "showClient.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\showClient.html.twig");
    }
}
