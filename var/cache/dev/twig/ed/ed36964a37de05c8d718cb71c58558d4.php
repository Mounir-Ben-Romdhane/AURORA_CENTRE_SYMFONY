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

/* reponse/afficheback.html.twig */
class __TwigTemplate_8f3ee47019da7ddb9f3c90d34e134a79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/afficheback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/afficheback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reponse/afficheback.html.twig", 1);
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

        echo "List Client!";
        
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
          <h1>List Des Reclamation</h1>
        </div><!-- End Page Title -->

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th scope=\"col\">Id</th>
        <th scope=\"col\">Reponse</th>
        <th scope=\"col\">date reponse</th>
      </tr>
    </thead>
    <tbody>
       ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responses"]) || array_key_exists("responses", $context) ? $context["responses"] : (function () { throw new RuntimeError('Variable "responses" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 32
            echo "          <tr>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "reponse", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "datereponse", [], "any", false, false, false, 35), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 35), "html", null, true);
            echo "</td>
                  <td>
                      
                      <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateback_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i>
                      </a>
                      <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">
                          <i class=\"fa fa-trash\"></i>
                      </a>
                      <td>
                  
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
    </tbody>
  </table>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "session", [], "any", false, false, false, 50), "flashBag", [], "any", false, false, false, 50), "all", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 51
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 52
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 53
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "  </main>
  
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reponse/afficheback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 57,  194 => 56,  185 => 53,  180 => 52,  175 => 51,  171 => 50,  166 => 47,  153 => 41,  147 => 38,  141 => 35,  137 => 34,  133 => 33,  130 => 32,  126 => 31,  114 => 21,  105 => 18,  102 => 17,  98 => 16,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}List Client!{% endblock %}



{% block body %}
<body>

  <main id=\"main\" class=\"main\">

      <div class=\"pagetitle\">
          <h1>List Des Reclamation</h1>
        </div><!-- End Page Title -->

    {% for message in app.flashes('Success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th scope=\"col\">Id</th>
        <th scope=\"col\">Reponse</th>
        <th scope=\"col\">date reponse</th>
      </tr>
    </thead>
    <tbody>
       {% for response in responses %}
          <tr>
                  <td>{{response.id}}</td>
                  <td>{{response.reponse}}</td>
                  <td>{{response.datereponse.format('Y-m-d H:i:s')}}</td>
                  <td>
                      
                      <a href=\"{{path('updateback_reponse',{'id':response.id})}}\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i>
                      </a>
                      <a href=\"{{path('delete_reponse',{'id':response.id})}}\" class=\"btn btn-sm btn-danger\">
                          <i class=\"fa fa-trash\"></i>
                      </a>
                      <td>
                  
          </tr>
      {% endfor %}    
    </tbody>
  </table>
{% for type, messages in app.session.flashBag.all %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
  </main>
  
</body>
{% endblock %}", "reponse/afficheback.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reponse\\afficheback.html.twig");
    }
}
