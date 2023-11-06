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

/* evenement/download.html.twig */
class __TwigTemplate_62a80153949cfc68f73e4e7a25ebfa3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/download.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/download.html.twig"));

        $this->parent = $this->loadTemplate("evenement/base-pdf.html.twig", "evenement/download.html.twig", 1);
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
 <p>Liste des évènements</p>
 <table class=\"table table-striped\">
           ";
        // line 10
        echo "
          ";
        // line 12
        echo "                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">TITRE</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">IMAGE</th>
                        <th scope=\"col\">DATE</th>
                        <th scope=\"col\">TYPE</th>
                    </tr>
                </thead>
                 <tbody>
                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauEvenement"]) || array_key_exists("tableauEvenement", $context) ? $context["tableauEvenement"] : (function () { throw new RuntimeError('Variable "tableauEvenement" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titreev", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionev", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>
                        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/evenement/" . twig_get_attribute($this->env, $this->source, $context["i"], "imageev", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"photo de profil\"></td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "dateev", [], "any", false, false, false, 30), "format", [0 => "Y-m-d-H:i"], "method", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "typeev", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    </tr>   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      </tbody>        
</table>
 
 
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

        echo "Liste des évènements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 6,  129 => 34,  120 => 31,  116 => 30,  112 => 29,  107 => 27,  103 => 26,  99 => 25,  96 => 24,  92 => 23,  79 => 12,  76 => 10,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"evenement/base-pdf.html.twig\" %}



 {% block body %}
 <title>{% block title %}Liste des évènements{% endblock %}</title>
 <p>Liste des évènements</p>
 <table class=\"table table-striped\">
           {#{{form(studentSearch)}}#}

          {#  <table class=\"table table-light table_hover table_bordered\"> #}
                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">TITRE</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">IMAGE</th>
                        <th scope=\"col\">DATE</th>
                        <th scope=\"col\">TYPE</th>
                    </tr>
                </thead>
                 <tbody>
                 {% for i in tableauEvenement %}
                    <tr>
                        <td>{{i.id}}</td>
                        <td>{{i.titreev}}</td>
                        <td>{{i.descriptionev}}</td>
                        <td>
                        <img src=\"{{asset('uploads/evenement/'~ i.imageev)}}\" alt=\"photo de profil\"></td>
                        <td>{{i.dateev.format('Y-m-d-H:i')}}</td>
                        <td>{{i.typeev}}</td>
                    </tr>   
                    {% endfor %}
      </tbody>        
</table>
 
 
 {% endblock %}

", "evenement/download.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\evenement\\download.html.twig");
    }
}
