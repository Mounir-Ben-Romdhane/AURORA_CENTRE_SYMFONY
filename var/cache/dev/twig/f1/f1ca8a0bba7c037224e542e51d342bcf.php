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

/* reservation/reservation.html.twig */
class __TwigTemplate_258471f2c080923b4c92a5a585bace35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "reservation/reservation.html.twig", 1);
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

        echo "Reservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    <style>
.form-container {
        display: flex;
        justify-content: center;
    }

    .form-field {
        display: block;
        margin: 10px auto;
    }
    .reservation {
  position: relative;
  height: 800px;
  width: 420px;
  margin: 100px auto;
  padding: 60px 60px;
  background: #0000ffff  
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #000;
}
.button.-regular {
  color: #202129;
  background-color: #f2f2f2;
  
  &:hover {
    color: #202129;
    background-color: #e1e2e2;
    opacity: 1;
  }
  
  &:active {
    background-color: #d5d6d6;
    opacity: 1;
  }
  
}
    </style>
<body id=\"page-top\">
        <!-- Navigation-->
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serviceShow");
        echo "\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_reclamation");
        echo "\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_reclamation");
        echo "\">Consulter mes Reclamation</a></li>
                                    </ul>
                        </li>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 72
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
            // line 81
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
            // line 89
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 98
        echo "                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\" style=\"padding-top: 70px;\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>
        <div class=\"row\">
        <div class=\"reservation\">
    <div class=\"col-md-12\">
   
        <h1> Réserver</h1><br>

      <div class=\"form-container\">
   ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                             <div class=\"form-group\">
                                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "numero", [], "any", false, false, false, 121), 'label', ["label" => "Numéro :"]);
        echo "
                                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "numero", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "numero", [], "any", false, false, false, 123), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, false, 127), 'label', ["label" => "Email :"]);
        echo "
                                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "email", [], "any", false, false, false, 129), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "userName", [], "any", false, false, false, 133), 'label', ["label" => "userName :"]);
        echo "
                                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "userName", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "userName", [], "any", false, false, false, 135), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                            <div class=\"form-group\">
                                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "numeroTel", [], "any", false, false, false, 138), 'label', ["label" => "NuméroTel :"]);
        echo "
                                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "numeroTel", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "numeroTel", [], "any", false, false, false, 140), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "service", [], "any", false, false, false, 144), 'label', ["label" => "Service :"]);
        echo "
                                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "service", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "service", [], "any", false, false, false, 146), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                            <div class=\"form-group\">
                                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "dateR", [], "any", false, false, false, 149), 'label', ["label" => "Date :"]);
        echo "
                                                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "dateR", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "dateR", [], "any", false, false, false, 151), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                                        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; background-color: #f1c40f; color: #fff; font-size: 18px; padding: 10px 20px;\">Enregistrer</button>

                                            ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), 'form_end');
        echo "
</div> 
  
          
        </div>
      </div>
      </div>
                </div>   

        </header>
        
        
     
    </body> 
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 155,  323 => 151,  319 => 150,  315 => 149,  309 => 146,  305 => 145,  301 => 144,  294 => 140,  290 => 139,  286 => 138,  280 => 135,  276 => 134,  272 => 133,  265 => 129,  261 => 128,  257 => 127,  250 => 123,  246 => 122,  242 => 121,  237 => 119,  214 => 98,  206 => 93,  202 => 92,  197 => 89,  186 => 81,  174 => 72,  168 => 69,  165 => 68,  163 => 67,  155 => 62,  151 => 61,  142 => 55,  138 => 54,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}
{% block title %}Reservation{% endblock %}
    

    {% block body %}
    <style>
.form-container {
        display: flex;
        justify-content: center;
    }

    .form-field {
        display: block;
        margin: 10px auto;
    }
    .reservation {
  position: relative;
  height: 800px;
  width: 420px;
  margin: 100px auto;
  padding: 60px 60px;
  background: #0000ffff  
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #000;
}
.button.-regular {
  color: #202129;
  background-color: #f2f2f2;
  
  &:hover {
    color: #202129;
    background-color: #e1e2e2;
    opacity: 1;
  }
  
  &:active {
    background-color: #d5d6d6;
    opacity: 1;
  }
  
}
    </style>
<body id=\"page-top\">
        <!-- Navigation-->
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_serviceShow')}}\">Services</a></li>
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
        <header class=\"masthead\" style=\"padding-top: 70px;\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>
        <div class=\"row\">
        <div class=\"reservation\">
    <div class=\"col-md-12\">
   
        <h1> Réserver</h1><br>

      <div class=\"form-container\">
   {{ form_start(form, { 'attr': {'novalidate': 'novalidate'} }) }}
                                             <div class=\"form-group\">
                                                {{ form_label(form.numero, 'Numéro :') }}
                                                {{ form_widget(form.numero, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.numero, { 'attr': {'class': 'text-danger'} }) }}
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                                {{ form_label(form.email, 'Email :') }}
                                                {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.email, { 'attr': {'class': 'text-danger'} }) }}
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                {{ form_label(form.userName, 'userName :') }}
                                                {{ form_widget(form.userName, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.userName, { 'attr': {'class': 'text-danger'} }) }}
                                            </div></br>
                                            <div class=\"form-group\">
                                                {{ form_label(form.numeroTel, 'NuméroTel :') }}
                                                {{ form_widget(form.numeroTel, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.numeroTel, { 'attr': {'class': 'text-danger'} }) }}
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                {{ form_label(form.service, 'Service :') }}
                                                {{ form_widget(form.service, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.service, { 'attr': {'class': 'text-danger'} }) }}
                                            </div></br>
                                            <div class=\"form-group\">
                                                {{ form_label(form.dateR, 'Date :') }}
                                                {{ form_widget(form.dateR, { 'attr': {'class': 'form-control'} }) }}
                                                {{ form_errors(form.dateR, { 'attr': {'class': 'text-danger'} }) }}
                                            </div></br>
                                                        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; background-color: #f1c40f; color: #fff; font-size: 18px; padding: 10px 20px;\">Enregistrer</button>

                                            {{ form_end(form) }}
</div> 
  
          
        </div>
      </div>
      </div>
                </div>   

        </header>
        
        
     
    </body> 
  {% endblock %}", "reservation/reservation.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reservation\\reservation.html.twig");
    }
}
