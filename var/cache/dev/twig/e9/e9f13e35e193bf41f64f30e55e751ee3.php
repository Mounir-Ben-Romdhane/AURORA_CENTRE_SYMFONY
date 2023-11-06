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

/* reclamation/afficheback.html.twig */
class __TwigTemplate_6b87d18ae54e63b134526b5d74ac0736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficheback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficheback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation/afficheback.html.twig", 1);
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

        echo "Liste des Reclamation !";
        
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
        echo "<style>
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
  background-color: #1E90FF;
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
  color:#fff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: #1E90FF;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: #1E90FF;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
</style>
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
<body >

  <main id=\"main\" class=\"main\">
  <div>

        <div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des reclamation</h3>
        </div><!-- End Page Title -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"data_table\">

        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            echo "            <div class=\"alert alert-success\" style=\"text-align:center;\">
                ";
            // line 136
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
    
  </div>    
</div>

        </div>

          <table class=\"table table-striped table-bordered\">
            <thead class=\"table-primary\">
                <tr>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Nom Client</th>
        <th scope=\"col\">Email</th>
                <th scope=\"col\">Date Reclamation</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Etat</th>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Actions</th>

                </tr>
            </thead>
            <tbody id=\"myTable\">
                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 165, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 166
            echo "                      <tr>
                              <td scope=\"row\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                              <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
                              <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "emailreclamation", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                              <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "datereclamation", [], "any", false, false, false, 170), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 170), "html", null, true);
            echo "</td>
                              <td>";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 171), "html", null, true);
            echo "</td>
                              <td>
                              ";
            // line 173
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 173) == 0)) {
                // line 174
                echo "                               <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/script.js"), "html", null, true);
                echo "\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" 
                                    onclick=\"delayAction(event,this)\" href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accepter_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\">Accepter</a>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                echo "\">Refuser</a>
                                    
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 180
$context["reclamation"], "status", [], "any", false, false, false, 180) == 1)) {
                // line 181
                echo "                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                echo "\">Refuser</a>
                                ";
            } else {
                // line 184
                echo "                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" 
                                    onclick=\"delayAction(event,this)\" href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accepter_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 185)]), "html", null, true);
                echo "\">Accepter</a>

                              ";
            }
            // line 188
            echo "                              </td> <td>
                              ";
            // line 189
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 189) == 0)) {
                // line 190
                echo "                                <button type=\"button\" class=\"btn btn-sm btn-success\">En cours</button>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 191
$context["reclamation"], "status", [], "any", false, false, false, 191) == 1)) {
                // line 192
                echo "                                <button type=\"button\" class=\"btn btn-sm btn-success\">Accepter</button>
                                ";
            } else {
                // line 194
                echo "                                <button type=\"button\" class=\"btn btn-sm btn-danger\">Refuser</button>
                              ";
            }
            // line 196
            echo "                              </td>
                              <td>
                                   <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterback_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                          <i class=\"bi bi-plus\"></i>
                      </a>
                      <a href=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateback_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 201)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i>
                      </a>
                                  <a href=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteback_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 204)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" 
                                  onclick=\"confirmAction(event)\">
                                      <i class=\"fa fa-trash\"></i>
                                  </a>
                                  <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheback_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 208)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                          <i class=\"fa fa-eye\"></i>
                      </a>
                                  <script>
                                    function confirmAction(event) {
                                      // display a confirmation dialog box
                                      if (!confirm('Are you sure you want to delete this claim ?')) {
                                        event.preventDefault(); // cancel the default navigation behavior
                                      }
                                    }
                                  </script>
                              </td>
                              

                              
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "   
            </tbody>
            <tfoot>
                <tr>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Nom Client</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Date Reclamation</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Etat</th>
        <th scope=\"col\">Status</th>
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
<div class=\"d-flex justify-content-center\">
        ";
        // line 252
        twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 252, $this->source); })()), "SetPageRange", [0 => 3], "method", false, false, false, 252);
        // line 253
        echo "        ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 253, $this->source); })()), "pagination.html.twig");
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/afficheback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 253,  514 => 252,  484 => 224,  461 => 208,  454 => 204,  448 => 201,  442 => 198,  438 => 196,  434 => 194,  430 => 192,  428 => 191,  425 => 190,  423 => 189,  420 => 188,  414 => 185,  411 => 184,  406 => 182,  403 => 181,  401 => 180,  396 => 178,  391 => 176,  385 => 174,  383 => 173,  378 => 171,  374 => 170,  370 => 169,  366 => 168,  362 => 167,  359 => 166,  355 => 165,  327 => 139,  318 => 136,  315 => 135,  311 => 134,  228 => 53,  218 => 52,  205 => 48,  201 => 47,  197 => 46,  193 => 45,  189 => 44,  185 => 43,  181 => 41,  171 => 40,  158 => 36,  153 => 34,  147 => 31,  142 => 29,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des Reclamation !{% endblock %}

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
<style>
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
  background-color: #1E90FF;
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
  color:#fff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: #1E90FF;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: #1E90FF;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
</style>
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
<body >

  <main id=\"main\" class=\"main\">
  <div>

        <div class=\"pagetitle\">
          <h3 style=\"text-align:center;color:#012970;\" >Liste des reclamation</h3>
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
        <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
    
  </div>    
</div>

        </div>

          <table class=\"table table-striped table-bordered\">
            <thead class=\"table-primary\">
                <tr>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Nom Client</th>
        <th scope=\"col\">Email</th>
                <th scope=\"col\">Date Reclamation</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Etat</th>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Actions</th>

                </tr>
            </thead>
            <tbody id=\"myTable\">
                {% for reclamation in pagination %}
                      <tr>
                              <td scope=\"row\">{{reclamation.type}}</td>
                              <td>{{reclamation.nom}}</td>
                              <td>{{reclamation.emailreclamation}}</td>
                              <td>{{reclamation.datereclamation.format('Y-m-d H:i:s')}}</td>
                              <td>{{reclamation.description}}</td>
                              <td>
                              {% if reclamation.status == 0 %}
                               <script src=\"{{asset('/js/script.js')}}\"></script>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" 
                                    onclick=\"delayAction(event,this)\" href=\"{{ path('app_accepter_reclamation',{id : reclamation.id}) }}\">Accepter</a>
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"{{ path('app_refuser_reclamation',{id : reclamation.id}) }}\">Refuser</a>
                                    
                                {% elseif reclamation.status == 1 %}
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-danger\" 
                                    onclick=\"delayAction(event,this)\" href=\"{{ path('app_refuser_reclamation',{id : reclamation.id}) }}\">Refuser</a>
                                {% else %}
                                <a id=\"myButton\" type=\"button\" class=\"btn btn-outline-success\" 
                                    onclick=\"delayAction(event,this)\" href=\"{{ path('app_accepter_reclamation',{id : reclamation.id}) }}\">Accepter</a>

                              {% endif %}
                              </td> <td>
                              {% if reclamation.status == 0 %}
                                <button type=\"button\" class=\"btn btn-sm btn-success\">En cours</button>
                                {% elseif reclamation.status ==1 %}
                                <button type=\"button\" class=\"btn btn-sm btn-success\">Accepter</button>
                                {% else %}
                                <button type=\"button\" class=\"btn btn-sm btn-danger\">Refuser</button>
                              {% endif %}
                              </td>
                              <td>
                                   <a href=\"{{path('ajouterback_reponse',{'id':reclamation.id})}}\" class=\"btn btn-sm btn-primary\">
                          <i class=\"bi bi-plus\"></i>
                      </a>
                      <a href=\"{{path('updateback_reclamation',{'id':reclamation.id})}}\" class=\"btn btn-sm btn-warning\">
                          <i class=\"fa fa-edit\"></i>
                      </a>
                                  <a href=\"{{ path('deleteback_reclamation',{id : reclamation.id}) }}\" class=\"btn btn-sm btn-danger\" 
                                  onclick=\"confirmAction(event)\">
                                      <i class=\"fa fa-trash\"></i>
                                  </a>
                                  <a href=\"{{ path('afficheback_reponse',{id : reclamation.id}) }}\" class=\"btn btn-sm btn-primary\">
                          <i class=\"fa fa-eye\"></i>
                      </a>
                                  <script>
                                    function confirmAction(event) {
                                      // display a confirmation dialog box
                                      if (!confirm('Are you sure you want to delete this claim ?')) {
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
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Nom Client</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Date Reclamation</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Etat</th>
        <th scope=\"col\">Status</th>
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
<div class=\"d-flex justify-content-center\">
        {% do pagination.SetPageRange(3) %}
        {{ knp_pagination_render(pagination, \"pagination.html.twig\") }}
    </div>

{% endblock %}", "reclamation/afficheback.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reclamation\\afficheback.html.twig");
    }
}
