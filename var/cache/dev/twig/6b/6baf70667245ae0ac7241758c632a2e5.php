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

/* participationns/download.html.twig */
class __TwigTemplate_b5d4ab43a5a01dc5f839ab563b011d11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "evenement/base-pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/download.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/download.html.twig"));

        $this->parent = $this->loadTemplate("evenement/base-pdf.html.twig", "participationns/download.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<html style=\"border: 1px solid black; padding: 10px;\">
<a href=\"#\">
                 <img src=\"assets/assets/img/aurora.png\" alt=\"\" class=\"rounded-circle\" style=\"width:50px;height:30px;\">
              </a>

              <img />

      <center><h2><FONT face=\"Script\" color=\"red\" size=\"50pt\"><u> <I>AURORA  </I></u></FONT></h2></center>
<br>
 


    <center><h2><FONT face=\"Script\" color=\"\" size=\"30pt\"> <I>Liste des participants  </I></FONT></h2></center>
 
 <br>
 <br>
 <table class=\"table table-striped\">
           ";
        // line 25
        echo "
          ";
        // line 27
        echo "                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">USERNAME</th>
                        <th scope=\"col\">EMAIL</th>
                        <th scope=\"col\">TELEPHONE</th>
                    </tr>
                </thead>
                 <tbody>
                 ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauParticipationns"]) || array_key_exists("tableauParticipationns", $context) ? $context["tableauParticipationns"] : (function () { throw new RuntimeError('Variable "tableauParticipationns" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                    <tr>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionPn", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "usernameev", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emailev", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numtelev", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    </tr>   


                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

                   

      </tbody>
</table>

<br>
<br>



<section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h8 class=\"section-heading text-uppercase\">Contact</h8>
                    <h10 class=\"section-subheading text-muted\">Télephone: 97 312 558</h10>
                </div>
                <br>
                <div class=\"text-center\">
                    <h8 class=\"section-heading text-uppercase\">Local</h8>
                    <h10 class=\"section-subheading text-muted\">Esprit, Cité El Ghazela, 5080</10>
                </div>

                <div class=\"text-center\">
                    <h11 class=\"section-heading text-uppercase\">1</h11>
                </div>
                
                
            </div>
        </section>


  </html>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des participants";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participationns/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 6,  141 => 49,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  110 => 38,  106 => 37,  94 => 27,  91 => 25,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"evenement/base-pdf.html.twig\" %}



 {% block body %}
 <title>{% block title %}Liste des participants{% endblock %}</title>
<html style=\"border: 1px solid black; padding: 10px;\">
<a href=\"#\">
                 <img src=\"assets/assets/img/aurora.png\" alt=\"\" class=\"rounded-circle\" style=\"width:50px;height:30px;\">
              </a>

              <img />

      <center><h2><FONT face=\"Script\" color=\"red\" size=\"50pt\"><u> <I>AURORA  </I></u></FONT></h2></center>
<br>
 


    <center><h2><FONT face=\"Script\" color=\"\" size=\"30pt\"> <I>Liste des participants  </I></FONT></h2></center>
 
 <br>
 <br>
 <table class=\"table table-striped\">
           {#{{form(studentSearch)}}#}

          {#  <table class=\"table table-light table_hover table_bordered\"> #}
                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">USERNAME</th>
                        <th scope=\"col\">EMAIL</th>
                        <th scope=\"col\">TELEPHONE</th>
                    </tr>
                </thead>
                 <tbody>
                 {% for i in tableauParticipationns %}
                    <tr>
                        <td>{{i.id}}</td>
                        <td>{{i.descriptionPn}}</td>
                        <td>{{i.usernameev}}</td>
                        <td>{{i.emailev}}</td>
                        <td>{{i.numtelev}}</td>
                    </tr>   


                    
                    {% endfor %}


                   

      </tbody>
</table>

<br>
<br>



<section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h8 class=\"section-heading text-uppercase\">Contact</h8>
                    <h10 class=\"section-subheading text-muted\">Télephone: 97 312 558</h10>
                </div>
                <br>
                <div class=\"text-center\">
                    <h8 class=\"section-heading text-uppercase\">Local</h8>
                    <h10 class=\"section-subheading text-muted\">Esprit, Cité El Ghazela, 5080</10>
                </div>

                <div class=\"text-center\">
                    <h11 class=\"section-heading text-uppercase\">1</h11>
                </div>
                
                
            </div>
        </section>


  </html>
 {% endblock %}



", "participationns/download.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\participationns\\download.html.twig");
    }
}
