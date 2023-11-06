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

/* participationns/data.html.twig */
class __TwigTemplate_fe72e83839567d5b6eec7bf124e946fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/data.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html >
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
      <a href=\"#\">
                 <img src=\"assets/assets/img/aurora.png\" alt=\"\" class=\"rounded-circle\" style=\"width:300px;height:270px;\">
              </a>

      <center><h2><FONT face=\"Script\" color=\"red\" size=\"100pt\"><u> <I>AURORA  </I></u></FONT></h2></center>
<br>
 


    <center><h2><FONT face=\"Script\" color=\"\" size=\"30pt\"> <I>Liste des participants  </I></FONT></h2></center>

       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
            <table class=\"table table-striped\">
           ";
        // line 49
        echo "
          ";
        // line 51
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauParticipationns"]) || array_key_exists("tableauParticipationns", $context) ? $context["tableauParticipationns"] : (function () { throw new RuntimeError('Variable "tableauParticipationns" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "                    <tr>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionPn", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "usernameev", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "emailev", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "numtelev", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                       
                        
                    </tr>   


                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                  <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participationns_data_download");
        echo "\"><button type=\"button\" class=\"btn btn-success badge-pill\">PDF</button></a>
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
        return "participationns/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 75,  130 => 67,  126 => 66,  122 => 65,  118 => 64,  114 => 63,  111 => 62,  107 => 61,  95 => 51,  92 => 49,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html >
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
      <a href=\"#\">
                 <img src=\"assets/assets/img/aurora.png\" alt=\"\" class=\"rounded-circle\" style=\"width:300px;height:270px;\">
              </a>

      <center><h2><FONT face=\"Script\" color=\"red\" size=\"100pt\"><u> <I>AURORA  </I></u></FONT></h2></center>
<br>
 


    <center><h2><FONT face=\"Script\" color=\"\" size=\"30pt\"> <I>Liste des participants  </I></FONT></h2></center>

       
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
                  <a href=\"{{ path('app_participationns_data_download') }}\"><button type=\"button\" class=\"btn btn-success badge-pill\">PDF</button></a>
      </tbody>
</table>
</div>

            </div>
                </div>
          </div>
    </div>
    </body>
    
</html>


", "participationns/data.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\participationns\\data.html.twig");
    }
}
