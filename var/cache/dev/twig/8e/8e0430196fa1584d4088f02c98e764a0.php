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

/* listClients.html.twig */
class __TwigTemplate_de40d406916a6e36692a8beef4cc5141 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listClients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listClients.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "listClients.html.twig", 1);
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

        echo "Liste des clients !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <!-- Favicons -->

  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
  

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->

  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/styleBack.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  

  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "  <!-- Vendor JS Files -->

  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/vfs_fonts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "<body >
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

        <div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des clients</h3>
        </div><!-- End Page Title -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"data_table\">

        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            echo "            <div class=\"alert alert-success\" style=\"text-align:center;\">
                ";
            // line 80
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
<br>

         <div class=\"sidebar-search\">
          <div class=\"input-group custom-search-form\">
            <div class=\"search-box\">
              <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Rechercher client...\">
      
              </div>    
          </div>

        </div>

        <div align=RIGHT>
              <form action=\"\">
                <label >Trier par :</label>
                <select id=\"orderBy\" name=\"client\" onchange=\"location = this.value;\">
                  <option value=\"\"></option>
                  <option value=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_name_client");
        echo "\">Name</option>
                  <option value=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_email_client");
        echo "\">Email</option>
                  <option value=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_tel_client");
        echo "\">Tel</option>
                  <option value=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_address_client");
        echo "\">Addresse</option>
                  <option value=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_status_client");
        echo "\">Status</option>
                  <option value=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trier_etat_client");
        echo "\">Etat</option>
                </select>
              </a>
      </form>
      </div>
<br>
          <table class=\"table table-striped table-bordered\">
            <thead class=\"table-primary\">
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Tel</th>
                    <th scope=\"col\">Adresse complète</th>
                     <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Etat</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"myTable\">
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 126
            echo "                      <tr>
                              <td scope=\"row\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "username", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
                              <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                              <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "numTel", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                              <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "fullAddress", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                              <td>
                              ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "isVerified", [], "any", false, false, false, 132) == 1)) {
                // line 133
                echo "                                <button type=\"button\" class=\"btn btn-sm btn-success\">Compte vérifie</button>
                                ";
            } else {
                // line 135
                echo "                                <button type=\"button\" class=\"btn btn-sm btn-danger\">Compte non vérifie</button>
                              ";
            }
            // line 137
            echo "                              </td>
                              <td>
                              ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "etat", [], "any", false, false, false, 139) == 1)) {
                // line 140
                echo "                                <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/script.js"), "html", null, true);
                echo "\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_block_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                echo "\">Bloqué client</a>
                                ";
            } else {
                // line 144
                echo "                                <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/script.js"), "html", null, true);
                echo "\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" onclick=\"delayAction(event,this)\"
                                    href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deblock_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 146)]), "html", null, true);
                echo "\">Débloqué client</a>
                              ";
            }
            // line 148
            echo "                              </td>
                              <td>
                                  <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                      <i class=\"fa fa-eye\"></i>
                                  </a>
                                  <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" 
                                  onclick=\"confirmAction(event)\">
                                      <i class=\"fa fa-trash\"></i>
                                  </a>
                                  <script>
                                    function confirmAction(event) {
                                      // display a confirmation dialog box
                                      if (!confirm('Are you sure you want to delete this client ?')) {
                                        event.preventDefault(); // cancel the default navigation behavior
                                      }
                                    }
                                  </script>
                              </td>
                              
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "   
            </tbody>
            <tfoot>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Tel</th>
                    <th scope=\"col\">Adresse complète</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Etat</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </tfoot>
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
        return "listClients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 168,  405 => 153,  399 => 150,  395 => 148,  390 => 146,  384 => 144,  379 => 142,  373 => 140,  371 => 139,  367 => 137,  363 => 135,  359 => 133,  357 => 132,  352 => 130,  348 => 129,  344 => 128,  340 => 127,  337 => 126,  333 => 125,  311 => 106,  307 => 105,  303 => 104,  299 => 103,  295 => 102,  291 => 101,  271 => 83,  262 => 80,  259 => 79,  255 => 78,  228 => 53,  218 => 52,  205 => 48,  201 => 47,  197 => 46,  193 => 45,  189 => 44,  185 => 43,  181 => 41,  171 => 40,  158 => 36,  153 => 34,  147 => 31,  142 => 29,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des clients !{% endblock %}

{% block stylesheets %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <!-- Favicons -->

  <link href=\"{{asset('/assets/img/favicon.png')}}\" rel=\"icon\">
  <link href=\"{{asset('/assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">
  

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->

  <link href=\"{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('/css/styleBack.css')}}\" rel=\"stylesheet\">

  <link href=\"{{asset('/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  

  <link href=\"{{asset('/css/datatables.min.css')}}\" rel=\"stylesheet\">

  <link href=\"{{asset('/css/style.css')}}\" rel=\"stylesheet\">

{% endblock %}

{% block javascripts %}
  <!-- Vendor JS Files -->

  <script src=\"{{asset('/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('/js/jquery-3.6.0.min.js')}}\"></script>
  <script src=\"{{asset('/js/datatables.min.js')}}\"></script>
  <script src=\"{{asset('/js/pdfmake.min.js')}}\"></script>
  <script src=\"{{asset('/js/vfs_fonts.min.js')}}\"></script>
  <script src=\"{{asset('/js/custom.js')}}\"></script>

{% endblock %}

{% block body %}
<body >
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

        <div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des clients</h3>
        </div><!-- End Page Title -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"data_table\">

        {% for message in app.flashes('Success') %}
            <div class=\"alert alert-success\" style=\"text-align:center;\">
                {{ message }}
            </div>
        {% endfor %}

<br>

         <div class=\"sidebar-search\">
          <div class=\"input-group custom-search-form\">
            <div class=\"search-box\">
              <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Rechercher client...\">
      
              </div>    
          </div>

        </div>

        <div align=RIGHT>
              <form action=\"\">
                <label >Trier par :</label>
                <select id=\"orderBy\" name=\"client\" onchange=\"location = this.value;\">
                  <option value=\"\"></option>
                  <option value=\"{{ path('app_trier_name_client') }}\">Name</option>
                  <option value=\"{{ path('app_trier_email_client') }}\">Email</option>
                  <option value=\"{{ path('app_trier_tel_client') }}\">Tel</option>
                  <option value=\"{{ path('app_trier_address_client') }}\">Addresse</option>
                  <option value=\"{{ path('app_trier_status_client') }}\">Status</option>
                  <option value=\"{{ path('app_trier_etat_client') }}\">Etat</option>
                </select>
              </a>
      </form>
      </div>
<br>
          <table class=\"table table-striped table-bordered\">
            <thead class=\"table-primary\">
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Tel</th>
                    <th scope=\"col\">Adresse complète</th>
                     <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Etat</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"myTable\">
                {% for client in clients %}
                      <tr>
                              <td scope=\"row\">{{client.username}}</td>
                              <td>{{client.email}}</td>
                              <td>{{client.numTel}}</td>
                              <td>{{client.fullAddress}}</td>
                              <td>
                              {% if client.isVerified == 1 %}
                                <button type=\"button\" class=\"btn btn-sm btn-success\">Compte vérifie</button>
                                {% else %}
                                <button type=\"button\" class=\"btn btn-sm btn-danger\">Compte non vérifie</button>
                              {% endif %}
                              </td>
                              <td>
                              {% if client.etat == 1 %}
                                <script src=\"{{asset('/js/script.js')}}\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"{{ path('app_block_client',{id : client.id}) }}\">Bloqué client</a>
                                {% else %}
                                <script src=\"{{asset('/js/script.js')}}\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" onclick=\"delayAction(event,this)\"
                                    href=\"{{ path('app_deblock_client',{id : client.id}) }}\">Débloqué client</a>
                              {% endif %}
                              </td>
                              <td>
                                  <a href=\"{{ path('app_show_client',{id : client.id}) }}\" class=\"btn btn-sm btn-primary\">
                                      <i class=\"fa fa-eye\"></i>
                                  </a>
                                  <a href=\"{{ path('app_delete_client',{id : client.id}) }}\" class=\"btn btn-sm btn-danger\" 
                                  onclick=\"confirmAction(event)\">
                                      <i class=\"fa fa-trash\"></i>
                                  </a>
                                  <script>
                                    function confirmAction(event) {
                                      // display a confirmation dialog box
                                      if (!confirm('Are you sure you want to delete this client ?')) {
                                        event.preventDefault(); // cancel the default navigation behavior
                                      }
                                    }
                                  </script>
                              </td>
                              
                      </tr>
                  {% endfor %}   
            </tbody>
            <tfoot>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Tel</th>
                    <th scope=\"col\">Adresse complète</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Etat</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </tfoot>
        </table>

        </div>
      </div>
    </div>
  </div>
</div>

  </main>

  

</body>


{% endblock %}", "listClients.html.twig", "C:\\xampp\\htdocs\\PIDEV_copier\\templates\\listClients.html.twig");
    }
}
