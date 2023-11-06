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

/* pdf/index.html.twig */
class __TwigTemplate_74f1b7d64848555d5f5e171a2217d6b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        $this->parent = $this->loadTemplate("evenement/base-pdf.html.twig", "pdf/index.html.twig", 1);
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


              <img />

      <center><h2><FONT face=\"Script\" color=\"red\" size=\"50pt\"><u> <I>AURORA  </I></u></FONT></h2></center>
<br>
 


    <center><h2><FONT face=\"Script\" color=\"\" size=\"30pt\"> <I>Liste des participants  </I></FONT></h2></center>
 
 <br>
 <br>
 <table class=\"table table-striped\">
           ";
        // line 23
        echo "
          ";
        // line 25
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauParticipationns"]) || array_key_exists("tableauParticipationns", $context) ? $context["tableauParticipationns"] : (function () { throw new RuntimeError('Variable "tableauParticipationns" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "                    <tr>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionPn", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "usernameev", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emailev", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numtelev", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>   


                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return "pdf/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 6,  139 => 47,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  108 => 36,  104 => 35,  92 => 25,  89 => 23,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"evenement/base-pdf.html.twig\" %}



 {% block body %}
 <title>{% block title %}Liste des participants{% endblock %}</title>
<html style=\"border: 1px solid black; padding: 10px;\">


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



", "pdf/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\pdf\\index.html.twig");
    }
}
