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

/* reclamation/affiche.html.twig */
class __TwigTemplate_6b0b76873c86e81330b21d3f215bfe0a extends Template
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
        // line 2
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/affiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/affiche.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "reclamation/affiche.html.twig", 2);
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

        echo "List des Reclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<style>
table {
  table-layout: fixed;
  width: 100%;
}

th {
  white-space: nowrap;
}

td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.search-box{
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
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

</style>

<body id=\"page-top\">
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

        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">

            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_reclamation");
        echo "\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_reclamation_byemail");
        echo "\">Consulter mes Reclamation</a></li>
                                    </ul>
                        </li>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121)) {
            // line 122
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "username", [], "any", false, false, false, 123), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilClient");
            echo "\">
                                                <i class=\"bi bi-person\"></i>
                                                <span>My Profile</span>
                                            </a>
                                        </li>
                                        <li style=\"color:#ffc800;\">
                                            <hr class=\"dropdown-divider\">
                                        </li>   
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                                <i class=\"bi bi-box-arrow-right\"></i>
                                                <span>Sign Out</span>
                                            </a>
                                        </li>
                                    </ul><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->
                            ";
        } else {
            // line 143
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 152
        echo "                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>

          
        </nav>       
        <!-- Masthead-->
        <header class=\"masthead\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>

        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "session", [], "any", false, false, false, 170), "flashBag", [], "any", false, false, false, 170), "all", [], "any", false, false, false, 170));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 171
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 172
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 173
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
        <h2>Cherche une Reclamation</h2>
        <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
    
  </div>    
</div>

        </div>
        
        <form action=\"\">
  <label for=\"Reclamation\">Trier par:</label>
 <select id=\"orderBy\" name=\"Reclamation\" onchange=\"location = this.value;\">
 <option value=\"\"></option>
   <option value=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbytype");
        echo "\">Type, A à Z</option>
   <option value=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbytypeDESC");
        echo "\">Type, Z à A</option>
   <option value=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbynom");
        echo "\">Nom A à Z </option>
   <option value=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbynomDESC");
        echo "\">Nom Z à A</option>
   <option value=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbydate");
        echo "\">Date de Reclamation, Croissants</option>
   <option value=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_orderbydateDESC");
        echo "\">Date de Reclamation, Décroissants</option>
</select>
</a>
</form>
        <div class=\"row\">
        

        ";
        // line 206
        if ( !twig_test_empty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 206, $this->source); })()))) {
            // line 207
            echo "        
            <table class=\"table table-striped table-hover\">
            <thead>
                
                <tr>
                    <th scope=\"col\">type</th>
                    <th scope=\"col\">email</th>
                    <th scope=\"col\">description</th>
                    <th scope=\"col\">status</th>
                    <th scope=\"col\">date reclamation</th>
                    <th scope=\"col\">envoyer un message</th>
                    <th scope=\"col\">mise a jour</th>
                    <th scope=\"col\">PDF</th>
                    
                </tr>
                </thead>
  <tbody id=\"myTable\">
                ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 224, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 225
                echo "                    <tr>
                        <td>";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 226), "html", null, true);
                echo "</td>
                        <td>";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "emailreclamation", [], "any", false, false, false, 227), "html", null, true);
                echo "
                        <td>";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 228), "html", null, true);
                echo "</td>
                        ";
                // line 229
                if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 229) == 0)) {
                    // line 230
                    echo "                                <td>En cours</td>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 231
$context["reclamation"], "status", [], "any", false, false, false, 231) == 1)) {
                    // line 232
                    echo "                                <td>Accepter</td>
                                ";
                } else {
                    // line 234
                    echo "                                <td>Refuser</td>
                              ";
                }
                // line 236
                echo "                        
                        <td>";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "datereclamation", [], "any", false, false, false, 237), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 237), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                echo "\"><button type=\"button\">ajouter reponse</button></a></td>
                        <td><a href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 239)]), "html", null, true);
                echo "\"><button type=\"button\">mise a jour</button></a></td>
                        <td><a href=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamationpdf", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 240)]), "html", null, true);
                echo "\"><button type=\"button\">PDF</button></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                </tbody>
            </table>
            <script>
function openForm() {
  document.getElementById(\"myForm\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"myForm\").style.display = \"none\";
}
</script>
           
        ";
        } else {
            // line 256
            echo "            <p>No article found.</p>
        ";
        }
        // line 258
        echo "    </div>
    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "session", [], "any", false, false, false, 259), "flashBag", [], "any", false, false, false, 259), "all", [], "any", false, false, false, 259));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 260
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 261
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 262
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "

</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 266,  484 => 265,  475 => 262,  470 => 261,  465 => 260,  461 => 259,  458 => 258,  454 => 256,  439 => 243,  430 => 240,  426 => 239,  422 => 238,  418 => 237,  415 => 236,  411 => 234,  407 => 232,  405 => 231,  402 => 230,  400 => 229,  396 => 228,  392 => 227,  388 => 226,  385 => 225,  381 => 224,  362 => 207,  360 => 206,  350 => 199,  346 => 198,  342 => 197,  338 => 196,  334 => 195,  330 => 194,  311 => 177,  305 => 176,  296 => 173,  291 => 172,  286 => 171,  282 => 170,  262 => 152,  254 => 147,  250 => 146,  245 => 143,  234 => 135,  222 => 126,  216 => 123,  213 => 122,  211 => 121,  203 => 116,  199 => 115,  190 => 109,  88 => 9,  78 => 8,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"baseFront.html.twig\" %}
{% block title %}List des Reclamation{% endblock %}




{% block body %}


<style>
table {
  table-layout: fixed;
  width: 100%;
}

th {
  white-space: nowrap;
}

td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.search-box{
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
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

</style>

<body id=\"page-top\">
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

        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">

            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_evenementAffichageFront')}}\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"{{path('ajouter_reclamation')}}\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"{{path('affiche_reclamation_byemail')}}\">Consulter mes Reclamation</a></li>
                                    </ul>
                        </li>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           {% if app.user %}

                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>{{ app.user.username }}</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_profilClient') }}\">
                                                <i class=\"bi bi-person\"></i>
                                                <span>My Profile</span>
                                            </a>
                                        </li>
                                        <li style=\"color:#ffc800;\">
                                            <hr class=\"dropdown-divider\">
                                        </li>   
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
                                                <i class=\"bi bi-box-arrow-right\"></i>
                                                <span>Sign Out</span>
                                            </a>
                                        </li>
                                    </ul><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->
                            {% else %}
                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"{{path('app_login')}}\">Connexion</a></li>
                                    <li><a href=\"{{path('app_register')}}\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            {% endif %}
                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>

          
        </nav>       
        <!-- Masthead-->
        <header class=\"masthead\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>

        {% for type, messages in app.session.flashBag.all %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

        <h2>Cherche une Reclamation</h2>
        <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
    
  </div>    
</div>

        </div>
        
        <form action=\"\">
  <label for=\"Reclamation\">Trier par:</label>
 <select id=\"orderBy\" name=\"Reclamation\" onchange=\"location = this.value;\">
 <option value=\"\"></option>
   <option value=\"{{ path('reclamation_orderbytype') }}\">Type, A à Z</option>
   <option value=\"{{ path('reclamation_orderbytypeDESC') }}\">Type, Z à A</option>
   <option value=\"{{ path('reclamation_orderbynom') }}\">Nom A à Z </option>
   <option value=\"{{ path('reclamation_orderbynomDESC') }}\">Nom Z à A</option>
   <option value=\"{{ path('reclamation_orderbydate') }}\">Date de Reclamation, Croissants</option>
   <option value=\"{{ path('reclamation_orderbydateDESC') }}\">Date de Reclamation, Décroissants</option>
</select>
</a>
</form>
        <div class=\"row\">
        

        {% if reclamations is not empty %}
        
            <table class=\"table table-striped table-hover\">
            <thead>
                
                <tr>
                    <th scope=\"col\">type</th>
                    <th scope=\"col\">email</th>
                    <th scope=\"col\">description</th>
                    <th scope=\"col\">status</th>
                    <th scope=\"col\">date reclamation</th>
                    <th scope=\"col\">envoyer un message</th>
                    <th scope=\"col\">mise a jour</th>
                    <th scope=\"col\">PDF</th>
                    
                </tr>
                </thead>
  <tbody id=\"myTable\">
                {% for reclamation in reclamations %}
                    <tr>
                        <td>{{ reclamation.type }}</td>
                        <td>{{reclamation.emailreclamation}}
                        <td>{{reclamation.description}}</td>
                        {% if reclamation.status == 0 %}
                                <td>En cours</td>
                                {% elseif reclamation.status ==1 %}
                                <td>Accepter</td>
                                {% else %}
                                <td>Refuser</td>
                              {% endif %}
                        
                        <td>{{reclamation.datereclamation.format('Y-m-d H:i:s')}}</td>
                        <td><a href=\"{{path('ajouter_reponse',{'id':reclamation.id})}}\"><button type=\"button\">ajouter reponse</button></a></td>
                        <td><a href=\"{{path('update_reclamation',{'id':reclamation.id})}}\"><button type=\"button\">mise a jour</button></a></td>
                        <td><a href=\"{{path('app_reclamationpdf',{'id':reclamation.id})}}\"><button type=\"button\">PDF</button></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <script>
function openForm() {
  document.getElementById(\"myForm\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"myForm\").style.display = \"none\";
}
</script>
           
        {% else %}
            <p>No article found.</p>
        {% endif %}
    </div>
    {% for type, messages in app.session.flashBag.all %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}


</body>

{% endblock %}
", "reclamation/affiche.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reclamation\\affiche.html.twig");
    }
}
