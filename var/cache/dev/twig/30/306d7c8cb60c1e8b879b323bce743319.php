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

/* service/serviceList.html.twig */
class __TwigTemplate_bbf5bd4f833c472f794b8d4bf13db7a9 extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/serviceList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/serviceList.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "service/serviceList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"dropdown\" ><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serviceShow");
        echo "\">Services<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationList");
        echo "\">Liste Réservations</a></li>
                                    </ul>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_reclamation");
        echo "\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_reclamation");
        echo "\">Consulter mes Reclamation</a></li>
                                    </ul>
                        </li>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 38
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
            // line 47
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
            // line 55
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 64
        echo "                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>
     
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
            <div align=\"center\">
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            echo "                                        <div class=\"alert alert-success w-50\">
                                            ";
            // line 77
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                        </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </div>
                <div class=\"masthead-subheading\">SERVICES</div>
                <div class=\"masthead-heading text-uppercase\">Profitez chers clients !</div>
            </div>
        </header>
<br>
<br>

<div class=\"container\">

  <div class=\"row text-center justify-content-center\">
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauServiceFront"]) || array_key_exists("tableauServiceFront", $context) ? $context["tableauServiceFront"] : (function () { throw new RuntimeError('Variable "tableauServiceFront" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 92
            echo "      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">

          <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
            <div class=\"portfolio-hover\">
              <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"href=\"app_serviceDetails\"></i></div>
            </div>
            <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 99))), "html", null, true);
            echo "\" alt=\"photo\">
          </a>
<br>
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titreS", [], "any", false, false, false, 104), "html", null, true);
            echo "</h5>
              <p class=\"card-text\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "typeS", [], "any", false, false, false, 105), "html", null, true);
            echo "</p>
            </div>
            <ul class=\"list-group list-group-flush\">

            </ul>
            <div class=\"card-body\">
            <div class=\"portfolio-caption-subheading text-muted\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionS", [], "any", false, false, false, 111), "html", null, true);
            echo "</div><br>
            
          <form action=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addreservation", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\">
          ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114)) {
                // line 115
                echo "           <button type=\"submit\" class=\"btn btn-primary\"  style=\"background-color:#ffc800;border-color:#ffc800\" font-size=\" 15px;\" padding=\"10px 20px;\">Réserver</button>
           ";
            }
            // line 117
            echo "
          </form>
              

            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "  </div>
</div>



                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "service/serviceList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 126,  275 => 117,  271 => 115,  269 => 114,  265 => 113,  260 => 111,  251 => 105,  247 => 104,  239 => 99,  230 => 92,  226 => 91,  213 => 80,  204 => 77,  201 => 76,  197 => 75,  184 => 64,  176 => 59,  172 => 58,  167 => 55,  156 => 47,  144 => 38,  138 => 35,  135 => 34,  133 => 33,  125 => 28,  121 => 27,  112 => 21,  106 => 18,  101 => 16,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}Welcome !{% endblock %}
 
    {% block body %}
    
    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"dropdown\" ><a href=\"{{path('app_serviceShow')}}\">Services<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"{{path('app_reservationList')}}\">Liste Réservations</a></li>
                                    </ul>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_evenementAffichageFront')}}\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"{{path('ajouter_reclamation')}}\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"{{path('affiche_reclamation')}}\">Consulter mes Reclamation</a></li>
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
     
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
            <div align=\"center\">
                        {% for message in app.flashes('Success') %}
                                        <div class=\"alert alert-success w-50\">
                                            {{ message }}
                                        </div>
                         {% endfor %}
            </div>
                <div class=\"masthead-subheading\">SERVICES</div>
                <div class=\"masthead-heading text-uppercase\">Profitez chers clients !</div>
            </div>
        </header>
<br>
<br>

<div class=\"container\">

  <div class=\"row text-center justify-content-center\">
    {% for i in tableauServiceFront %}
      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">

          <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
            <div class=\"portfolio-hover\">
              <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"href=\"app_serviceDetails\"></i></div>
            </div>
            <img src=\"{{asset('uploads/users/'~ i.image)}}\" alt=\"photo\">
          </a>
<br>
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">{{ i.titreS }}</h5>
              <p class=\"card-text\">{{ i.typeS }}</p>
            </div>
            <ul class=\"list-group list-group-flush\">

            </ul>
            <div class=\"card-body\">
            <div class=\"portfolio-caption-subheading text-muted\">{{ i.descriptionS}}</div><br>
            
          <form action=\"{{ path('app_addreservation',{'id':i.id}) }}\">
          {% if app.user %}
           <button type=\"submit\" class=\"btn btn-primary\"  style=\"background-color:#ffc800;border-color:#ffc800\" font-size=\" 15px;\" padding=\"10px 20px;\">Réserver</button>
           {% endif %}

          </form>
              

            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>



                        {% endblock %}



", "service/serviceList.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\service\\serviceList.html.twig");
    }
}
