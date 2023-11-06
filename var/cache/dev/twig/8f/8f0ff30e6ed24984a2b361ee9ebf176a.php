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

/* participationns/affparticipationn.html.twig */
class __TwigTemplate_81a6650b3235e5357a72bbf9e5c093ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/affparticipationn.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/affparticipationn.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "participationns/affparticipationn.html.twig", 1);
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

        echo "List participation !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body>

 
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<nav class=\"navbar navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Liste des participationns :</a>
</nav>

    </br>
      <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
            <table class=\"table table-striped\">
           ";
        // line 33
        echo "
          ";
        // line 35
        echo "                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">USERNAME</th>
                        <th scope=\"col\">EMAIL</th>
                        <th scope=\"col\">TELEPHONE</th>

                        

                        <th class=\"text-left\">Actions</th>
                    </tr>
                </thead>
                 <tbody>
                 ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauParticipationns"]) || array_key_exists("tableauParticipationns", $context) ? $context["tableauParticipationns"] : (function () { throw new RuntimeError('Variable "tableauParticipationns" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "                    <tr>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionPn", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "usernameev", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emailev", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numtelev", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        
                        
                        <td>
                        
                      <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateParticipationnsBack", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteParticipationns", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" 
                       >
                            <i class=\"fa fa-trash\"></i>
                      </a>
                         

                        </td>
                        
                    </tr>   


                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "

<a class=\"btn btn-success mr-2\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service");
        echo "\">PDF</a>
                   

      </tbody>
</table>
</div>
            </div>
                </div>
          </div>
    </div>
    </body>


  </main><!-- End #main -->


</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participationns/affparticipationn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 76,  187 => 74,  168 => 61,  162 => 58,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  139 => 49,  135 => 48,  120 => 35,  117 => 33,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}List participation !{% endblock %}
{% block body %}
<body>

 
  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<nav class=\"navbar navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Liste des participationns :</a>
</nav>

    </br>
      <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
            <table class=\"table table-striped\">
           {#{{form(studentSearch)}}#}

          {#  <table class=\"table table-light table_hover table_bordered\"> #}
                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">USERNAME</th>
                        <th scope=\"col\">EMAIL</th>
                        <th scope=\"col\">TELEPHONE</th>

                        

                        <th class=\"text-left\">Actions</th>
                    </tr>
                </thead>
                 <tbody>
                 {% for i in tableauParticipationns %}
                    <tr>
                        <td>{{i.descriptionPn}}</td>
                        <td>{{i.usernameev}}</td>
                        <td>{{i.emailev}}</td>
                        <td>{{i.numtelev}}</td>
                        
                        
                        <td>
                        
                      <a href=\"{{ path('app_updateParticipationnsBack',{id:i.id}) }}\" class=\"btn btn-sm btn-warning\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_deleteParticipationns',{id:i.id}) }}\" class=\"btn btn-sm btn-danger\" 
                       >
                            <i class=\"fa fa-trash\"></i>
                      </a>
                         

                        </td>
                        
                    </tr>   


                    
                    {% endfor %}


<a class=\"btn btn-success mr-2\" href=\"{{ path('generator_service') }}\">PDF</a>
                   

      </tbody>
</table>
</div>
            </div>
                </div>
          </div>
    </div>
    </body>


  </main><!-- End #main -->


</body>
{% endblock %}
", "participationns/affparticipationn.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\participationns\\affparticipationn.html.twig");
    }
}
