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

/* reclamation/add.html.twig */
class __TwigTemplate_44c29270d0c5f3943fb7012369334468 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "reclamation/add.html.twig", 1);
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

        echo "Reclamation";
        
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
    .reclamation {
  position: relative;
  height: 560px;
  width: 405px;
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
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>

                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <li class=\"dropdown\" ><a  href=\"#\">reclamation<i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_reclamation");
        echo "\">Envoyer une Reclamation</a></li>
                                    <li class=\"dropdownitem\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_reclamation");
        echo "\">Consulter mes Reclamation</a></li>
                                    </ul>
                        </li>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 71
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
            // line 80
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
            // line 88
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 97
        echo "                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>
          
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\" style=\"padding-top: 70px;\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>
        <div class=\"row\">
        <div class=\"reclamation\">
    <div class=\"col-md-12\">
   
        <h1> envoyer une reclamation </h1>

      <div class=\"form-container\">
    ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-field\">
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122), 'label');
        echo "
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123), 'widget');
        echo "
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "type", [], "any", false, false, false, 124), 'errors');
        echo "
    </div>
    <div class=\"form-field\">
        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "nom", [], "any", false, false, false, 127), 'label');
        echo "
        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "nom", [], "any", false, false, false, 128), 'widget');
        echo "
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "nom", [], "any", false, false, false, 129), 'errors');
        echo "
    </div>
    <div class=\"form-field\">
        <label>Email</label>
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "emailreclamation", [], "any", false, false, false, 133), 'widget');
        echo "
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "emailreclamation", [], "any", false, false, false, 134), 'errors');
        echo "
    </div>
    <div class=\"form-field\">
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137), 'label');
        echo "
        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "description", [], "any", false, false, false, 138), 'widget');
        echo "
        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "description", [], "any", false, false, false, 139), 'errors');
        echo "
    </div>
    
    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "save", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "button -regular center"]]);
        echo "
    ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
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
        return "reclamation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 143,  293 => 142,  287 => 139,  283 => 138,  279 => 137,  273 => 134,  269 => 133,  262 => 129,  258 => 128,  254 => 127,  248 => 124,  244 => 123,  240 => 122,  235 => 120,  210 => 97,  202 => 92,  198 => 91,  193 => 88,  182 => 80,  170 => 71,  164 => 68,  161 => 67,  159 => 66,  151 => 61,  147 => 60,  138 => 54,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}
{% block title %}Reclamation{% endblock %}
    

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
    .reclamation {
  position: relative;
  height: 560px;
  width: 405px;
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
          
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\" style=\"padding-top: 70px;\">
        
            <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">
        
        </div>
        <div class=\"row\">
        <div class=\"reclamation\">
    <div class=\"col-md-12\">
   
        <h1> envoyer une reclamation </h1>

      <div class=\"form-container\">
    {{ form_start(form,{'attr':{'novalidate':'novalidate'}})}}
    <div class=\"form-field\">
        {{ form_label(form.type) }}
        {{ form_widget(form.type) }}
        {{ form_errors(form.type) }}
    </div>
    <div class=\"form-field\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}
        {{ form_errors(form.nom) }}
    </div>
    <div class=\"form-field\">
        <label>Email</label>
        {{ form_widget(form.emailreclamation) }}
        {{ form_errors(form.emailreclamation) }}
    </div>
    <div class=\"form-field\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description) }}
        {{ form_errors(form.description) }}
    </div>
    
    {{form_widget(form.save,{'attr': {'class': 'button -regular center'}})}}
    {{ form_end(form) }}
</div> 
  
          
        </div>
      </div>
      </div>
                </div>   

        </header>
        
        
     
    </body> 
  {% endblock %}   
", "reclamation/add.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reclamation\\add.html.twig");
    }
}
