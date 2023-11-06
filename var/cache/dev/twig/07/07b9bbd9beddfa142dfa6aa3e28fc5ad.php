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

/* service/affichage.html.twig */
class __TwigTemplate_d05538bc65b19ec66da0d44775fe6c76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/affichage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/affichage.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "service/affichage.html.twig", 1);
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

        echo "Liste des Services !";
        
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
        echo "     
  
   
    <style>
      .table tbody tr:hover{
        background-color:#ddd;
      }
    search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: #44509c;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: #646fb3;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
    </style>

    
    
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
    \$(document).ready(function(){
      \$(\"#search\").on(\"keyup\", function() {
        var value = \$(this).val().toLowerCase();
        \$(\"#myTable tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
     });
    });
  });
</script>
<main id=\"main\" class=\"main\">

<div>

";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "            <div class=\"alert alert-success\" style=\"text-align:center;\">
                ";
            // line 90
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
<div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des Services</h3>
        </div><!-- End Page Title -->
     <div class= \"container\">


       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
<div class=\"d-flex justify-content-center\">
       <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
  </div>    
</div>
        </div>
        </div>
        <table class=\"table table-striped\">


           <table class=\"table table-light table_hover table_bordered\"> 
                <thead  class=\"thead-dark\">
                      <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">TITRE</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">TYPE</th>
                        <th scope=\"col\">image</th>
                        <th scope=\"col\">DATE</th>
                     

                        <th class=\"text-right\">Actions</th>
                    </tr>
                </thead>
                 <tbody id=\"myTable\">
                 ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauService"]) || array_key_exists("tableauService", $context) ? $context["tableauService"] : (function () { throw new RuntimeError('Variable "tableauService" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 134
            echo "                    <tr>
                        <td >";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                        <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titreS", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                        <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionS", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
                        <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "typeS", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 140)) {
                // line 141
                echo "                          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 141))), "html", null, true);
                echo "\" style=\"width:50px\" alt=\"photo\">   
                        ";
            } else {
                // line 143
                echo "                          No Image available
                        ";
            }
            // line 145
            echo "                        </td>
                        <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "dateS", [], "any", false, false, false, 146), "format", [0 => "Y-m-d-H:i"], "method", false, false, false, 146), "html", null, true);
            echo "</td>
                        <td>
                        <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateservice", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-secondary btn-sm mr-2\">Editer</button></a>
                        <form method=\"post\" action=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteservice", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 150))), "html", null, true);
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
        // line 157
        echo "
      </tbody>
</table>
<div class=\"d-flex justify-content-center\">
  <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addservice");
        echo "\">
    <button type=\"button\" class=\"btn btn-outline-success\" style=\"width:150px\">Ajouter</button><br>
</div><br>
<div class=\"d-flex justify-content-center\">
  <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trierservice");
        echo "\">
    <button type=\"button\" class=\"btn btn-success badge-pill\" style=\"width:200px\" background-color: red; color: white; >Trier avec le titre</button></a>
</div><br>
   
<div class=\"d-flex justify-content-center\">
  <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trierservice2");
        echo "\">
    <button type=\"button\" class=\"btn btn-success badge-pill\" style=\"width:200px\" background-color: red; color: white; >Trier avec la date</button></a>
</div>
   
</div>
            </div>
                </div>
          </div>
  </div>
         </main>


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "service/affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 170,  306 => 165,  299 => 161,  293 => 157,  280 => 150,  276 => 149,  272 => 148,  267 => 146,  264 => 145,  260 => 143,  254 => 141,  252 => 140,  247 => 138,  243 => 137,  239 => 136,  235 => 135,  232 => 134,  228 => 133,  186 => 93,  177 => 90,  174 => 89,  170 => 88,  88 => 8,  78 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %} 


{% block title %}Liste des Services !{% endblock %}


{% block body %}
     
  
   
    <style>
      .table tbody tr:hover{
        background-color:#ddd;
      }
    search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: #44509c;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: #646fb3;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
    </style>

    
    
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
    \$(document).ready(function(){
      \$(\"#search\").on(\"keyup\", function() {
        var value = \$(this).val().toLowerCase();
        \$(\"#myTable tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
     });
    });
  });
</script>
<main id=\"main\" class=\"main\">

<div>

{% for message in app.flashes('Success') %}
            <div class=\"alert alert-success\" style=\"text-align:center;\">
                {{ message }}
            </div>
        {% endfor %}

<div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des Services</h3>
        </div><!-- End Page Title -->
     <div class= \"container\">


       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Détails</h5>
<div class=\"d-flex justify-content-center\">
       <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
  </div>    
</div>
        </div>
        </div>
        <table class=\"table table-striped\">


           <table class=\"table table-light table_hover table_bordered\"> 
                <thead  class=\"thead-dark\">
                      <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">TITRE</th>
                        <th scope=\"col\">DESCRIPTION</th>
                        <th scope=\"col\">TYPE</th>
                        <th scope=\"col\">image</th>
                        <th scope=\"col\">DATE</th>
                     

                        <th class=\"text-right\">Actions</th>
                    </tr>
                </thead>
                 <tbody id=\"myTable\">
                 {% for i in tableauService %}
                    <tr>
                        <td >{{i.id}}</td>
                        <td>{{i.titreS}}</td>
                        <td>{{i.descriptionS}}</td>
                        <td>{{i.typeS}}</td>
                        <td>
                        {% if i.image %}
                          <img src=\"{{asset('uploads/users/'~ i.image)}}\" style=\"width:50px\" alt=\"photo\">   
                        {% else %}
                          No Image available
                        {% endif %}
                        </td>
                        <td>{{i.dateS.format('Y-m-d-H:i')}}</td>
                        <td>
                        <a href=\"{{ path('app_updateservice',{id:i.id}) }}\"><button type=\"button\" class=\"btn btn-outline-secondary btn-sm mr-2\">Editer</button></a>
                        <form method=\"post\" action=\"{{ path('app_deleteservice', {'id': i.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ i.id) }}\">
                          <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Supprimer</button>
                        </form>

                        </td>
                    </tr>  
                    {% endfor %}

      </tbody>
</table>
<div class=\"d-flex justify-content-center\">
  <a href=\"{{ path('app_addservice') }}\">
    <button type=\"button\" class=\"btn btn-outline-success\" style=\"width:150px\">Ajouter</button><br>
</div><br>
<div class=\"d-flex justify-content-center\">
  <a href=\"{{ path('app_trierservice') }}\">
    <button type=\"button\" class=\"btn btn-success badge-pill\" style=\"width:200px\" background-color: red; color: white; >Trier avec le titre</button></a>
</div><br>
   
<div class=\"d-flex justify-content-center\">
  <a href=\"{{ path('app_trierservice2') }}\">
    <button type=\"button\" class=\"btn btn-success badge-pill\" style=\"width:200px\" background-color: red; color: white; >Trier avec la date</button></a>
</div>
   
</div>
            </div>
                </div>
          </div>
  </div>
         </main>


        {% endblock %}
    ", "service/affichage.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\service\\affichage.html.twig");
    }
}
