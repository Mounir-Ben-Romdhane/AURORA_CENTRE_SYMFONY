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

/* evenement/data.html.twig */
class __TwigTemplate_d22aa891e18638f9339e16d4db58dafb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/data.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        


        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" 
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

         <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        
        
    </head>






    <body>
<nav class=\"navbar navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Liste des évènements :</a>
</nav>

    </br>
      <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
            <table class=\"table table-striped\">
           ";
        // line 38
        echo "
          ";
        // line 40
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauEvenement"]) || array_key_exists("tableauEvenement", $context) ? $context["tableauEvenement"] : (function () { throw new RuntimeError('Variable "tableauEvenement" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            echo "                    <tr>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titreev", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionev", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                        <td>
                        <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/evenement/" . twig_get_attribute($this->env, $this->source, $context["i"], "imageev", [], "any", false, false, false, 58))), "html", null, true);
            echo "\" alt=\"photo de profil\"></td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "dateev", [], "any", false, false, false, 59), "format", [0 => "Y-m-d-H:i"], "method", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "typeev", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>

                        
                    </tr>   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_data_download");
        echo "\"><button type=\"button\" class=\"btn btn-success badge-pill\">télécharger la liste</button></a>
      </tbody>
</table>
</div>
            </div>
                </div>
          </div>
    </div>
    </body>
    
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 65,  126 => 60,  122 => 59,  118 => 58,  113 => 56,  109 => 55,  105 => 54,  102 => 53,  98 => 52,  84 => 40,  81 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        


        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" 
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

         <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        
        
    </head>






    <body>
<nav class=\"navbar navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">Liste des évènements :</a>
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
                    <a href=\"{{ path('app_evenement_data_download') }}\"><button type=\"button\" class=\"btn btn-success badge-pill\">télécharger la liste</button></a>
      </tbody>
</table>
</div>
            </div>
                </div>
          </div>
    </div>
    </body>
    
</html>


", "evenement/data.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\evenement\\data.html.twig");
    }
}
