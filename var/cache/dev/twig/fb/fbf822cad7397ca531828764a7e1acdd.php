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

/* reservation/affichage.html.twig */
class __TwigTemplate_bac8e88cf027919fe5755095f7bcd50a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/affichage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/affichage.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservation/affichage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des réservations !";
        
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
        echo "
<body>
    <main id=\"main\" class=\"main\">

<div>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "            <div class=\"alert alert-success\" style=\"text-align:center;\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des réservations</h3>
        </div><!-- End Page Title -->
    

     <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
            <table class=\"table table-striped\">
           ";
        // line 32
        echo "
          ";
        // line 34
        echo "                <thead  class=\"thead-dark\">
                      <tr>
                         <th scope=\"col\">ID</th>
                        <th scope=\"col\">Numero</th>
                        <th scope=\"col\">UserName</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">NumeroTel</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Service</th>
                        <th class=\"text-right\">Actions</th>
                    </tr>
                </thead>
                 <tbody>
                  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numero", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "userName", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numeroTel", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "dateR", [], "any", false, false, false, 54), "format", [0 => "Y-m-d-H:i"], "method", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "Service", [], "any", false, false, false, 55), "titreS", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>



                      <td>
                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatereservation", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-secondary btn-sm mr-2\">Editer</button></a>
                        <form method=\"post\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletereservation", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 62))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Supprimer</button>
                    </form>

                        </td>
                    </tr>  
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
      </tbody>
</table>
    ";
        // line 76
        echo "      </tbody>
</table>
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
        return "reservation/affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 76,  205 => 69,  192 => 62,  188 => 61,  184 => 60,  176 => 55,  172 => 54,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  149 => 48,  145 => 47,  130 => 34,  127 => 32,  112 => 18,  103 => 15,  100 => 14,  96 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %} 


{% block title %}Liste des réservations !{% endblock %}

    {% block body %}

<body>
    <main id=\"main\" class=\"main\">

<div>

{% for message in app.flashes('Success') %}
            <div class=\"alert alert-success\" style=\"text-align:center;\">
                {{ message }}
            </div>
        {% endfor %}

<div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des réservations</h3>
        </div><!-- End Page Title -->
    

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
                         <th scope=\"col\">ID</th>
                        <th scope=\"col\">Numero</th>
                        <th scope=\"col\">UserName</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">NumeroTel</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Service</th>
                        <th class=\"text-right\">Actions</th>
                    </tr>
                </thead>
                 <tbody>
                  {% for i in tableau %}
                    <tr>
                        <td>{{i.id}}</td>
                        <td>{{i.numero}}</td>
                        <td>{{i.userName}}</td>
                        <td>{{i.email}}</td>
                        <td>{{i.numeroTel}}</td>
                        <td>{{i.dateR.format('Y-m-d-H:i')}}</td>
                        <td>{{i.Service.titreS}}</td>



                      <td>
                        <a href=\"{{ path('app_updatereservation',{id:i.id}) }}\"><button type=\"button\" class=\"btn btn-outline-secondary btn-sm mr-2\">Editer</button></a>
                        <form method=\"post\" action=\"{{ path('app_deletereservation', {'id': i.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ i.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Supprimer</button>
                    </form>

                        </td>
                    </tr>  
                    {% endfor %}

      </tbody>
</table>
    {# <div class=\"d-flex justify-content-center\">
  <a href=\"{{ path('app_addreservation') }}\">
    <button type=\"button\" class=\"btn btn-outline-success\" style=\"width:150px\">Ajouter</button>
</div>#}
      </tbody>
</table>
</div>
            </div>
                </div>
          </div>
          </div>
          </main>
          </body>
        {% endblock %}
    ", "reservation/affichage.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reservation\\affichage.html.twig");
    }
}
