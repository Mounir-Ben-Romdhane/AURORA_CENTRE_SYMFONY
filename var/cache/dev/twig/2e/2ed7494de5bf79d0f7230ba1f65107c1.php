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

/* participationns/addParticipationns.html.twig */
class __TwigTemplate_fe765a24bbd5675ee784a87f10c35dc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/addParticipationns.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participationns/addParticipationns.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "participationns/addParticipationns.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Participation !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "




        


        

    <body id=\"page-top\">
         <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lall-logo-_1_ copy.svg"), "html", null, true);
        echo "\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" style=\"color:#ffc800;\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 40
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
            // line 49
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
            // line 57
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 66
        echo "                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
            
                <div class=\"masthead-heading text-uppercase\">PARTICIPATION</div>
                <div class=\"masthead-subheading\" >Veuillez participer ici !</div>
            </div>
        </header>
        <!-- Services-->
        <section class=\"page-section\" id=\"\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h3 class=\"section-subheading text-muted\">Entrez vos coordonnées pour valider votre participation.</h3>
                </div>


 ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
            // line 88
            echo "
   ";
            // line 89
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 89, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "

<div align=center>

<table>

<tr>
<td> ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 96, $this->source); })()), "descriptionPn", [], "any", false, false, false, 96), 'label', ["label" => "Commentaire"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 97, $this->source); })()), "descriptionPn", [], "any", false, false, false, 97), 'widget');
            echo "</div></td>
<td>";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 98, $this->source); })()), "descriptionPn", [], "any", false, false, false, 98), 'errors');
            echo "</td>
</tr>

<tr>
<td> ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 102, $this->source); })()), "numtelev", [], "any", false, false, false, 102), 'label', ["label" => "NumTel"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 103, $this->source); })()), "numtelev", [], "any", false, false, false, 103), 'widget');
            echo "</div></td>
<td>";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 104, $this->source); })()), "numtelev", [], "any", false, false, false, 104), 'errors');
            echo "</td>
</tr>

</table>
</div>

<div align=CENTER > ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 110, $this->source); })()), "save", [], "any", false, false, false, 110), 'widget');
            echo "</div>


";
            // line 113
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 113, $this->source); })()), 'form_end');
            echo "
 ";
        } else {
            // line 115
            echo "                            
";
            // line 116
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "

<div align=center>

<table>

<tr>
<td> ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "descriptionPn", [], "any", false, false, false, 123), 'label', ["label" => "Commentaire"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "descriptionPn", [], "any", false, false, false, 124), 'widget');
            echo "</div></td>
<td>";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "descriptionPn", [], "any", false, false, false, 125), 'errors');
            echo "</td>
</tr>

<tr>
<td>";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "usernameev", [], "any", false, false, false, 129), 'label', ["label" => "Nom"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 130
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "usernameev", [], "any", false, false, false, 130), 'widget');
            echo "</div></td>
<td>";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "usernameev", [], "any", false, false, false, 131), 'errors');
            echo "</td>
</tr>

<tr>
<td>";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "emailev", [], "any", false, false, false, 135), 'label', ["label" => "Email"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 136
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "emailev", [], "any", false, false, false, 136), 'widget');
            echo "</div></td>
<td>";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "emailev", [], "any", false, false, false, 137), 'errors');
            echo "</td>
</tr>


<tr>
<td>";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "numtelev", [], "any", false, false, false, 142), 'label', ["label" => "Telephone"]);
            echo "</td>
<td><div class=\"form-control\">";
            // line 143
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "numtelev", [], "any", false, false, false, 143), 'widget');
            echo "</div></td>
<td>";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "numtelev", [], "any", false, false, false, 144), 'errors');
            echo "</td>
</tr>

</table>
</div>

<div align=CENTER > ";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "save", [], "any", false, false, false, 150), 'widget');
            echo "</div>


";
            // line 153
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_end');
            echo "
";
        }
        // line 155
        echo "













                
            </div>
        </section>

    </body>
    






        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participationns/addParticipationns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 155,  334 => 153,  328 => 150,  319 => 144,  315 => 143,  311 => 142,  303 => 137,  299 => 136,  295 => 135,  288 => 131,  284 => 130,  280 => 129,  273 => 125,  269 => 124,  265 => 123,  255 => 116,  252 => 115,  247 => 113,  241 => 110,  232 => 104,  228 => 103,  224 => 102,  217 => 98,  213 => 97,  209 => 96,  199 => 89,  196 => 88,  194 => 87,  171 => 66,  163 => 61,  159 => 60,  154 => 57,  143 => 49,  131 => 40,  125 => 37,  122 => 36,  120 => 35,  112 => 30,  104 => 25,  88 => 11,  78 => 10,  59 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"baseFront.html.twig\" %} 




{% block title %}Ajout Participation !{% endblock %}



{% block body %}





        


        

    <body id=\"page-top\">
         <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"{{ asset('assets/img/lall-logo-_1_ copy.svg')}}\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" style=\"color:#ffc800;\" href=\"{{path('app_evenementAffichageFront')}}\">Evenements</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
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
            
                <div class=\"masthead-heading text-uppercase\">PARTICIPATION</div>
                <div class=\"masthead-subheading\" >Veuillez participer ici !</div>
            </div>
        </header>
        <!-- Services-->
        <section class=\"page-section\" id=\"\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h3 class=\"section-subheading text-muted\">Entrez vos coordonnées pour valider votre participation.</h3>
                </div>


 {% if app.user %}

   {{form_start(form1,{'attr':{'novalidate':'novalidate'}})}}

<div align=center>

<table>

<tr>
<td> {{form_label(form1.descriptionPn,'Commentaire')}}</td>
<td><div class=\"form-control\">{{form_widget(form1.descriptionPn)}}</div></td>
<td>{{form_errors(form1.descriptionPn)}}</td>
</tr>

<tr>
<td> {{form_label(form1.numtelev,'NumTel')}}</td>
<td><div class=\"form-control\">{{form_widget(form1.numtelev)}}</div></td>
<td>{{form_errors(form1.numtelev)}}</td>
</tr>

</table>
</div>

<div align=CENTER > {{form_widget(form1.save)}}</div>


{{form_end(form1)}}
 {% else %}
                            
{{form_start(form,{'attr':{'novalidate':'novalidate'}})}}

<div align=center>

<table>

<tr>
<td> {{form_label(form.descriptionPn,'Commentaire')}}</td>
<td><div class=\"form-control\">{{form_widget(form.descriptionPn)}}</div></td>
<td>{{form_errors(form.descriptionPn)}}</td>
</tr>

<tr>
<td>{{form_label(form.usernameev,'Nom')}}</td>
<td><div class=\"form-control\">{{form_widget(form.usernameev)}}</div></td>
<td>{{form_errors(form.usernameev)}}</td>
</tr>

<tr>
<td>{{form_label(form.emailev,'Email')}}</td>
<td><div class=\"form-control\">{{form_widget(form.emailev)}}</div></td>
<td>{{form_errors(form.emailev)}}</td>
</tr>


<tr>
<td>{{form_label(form.numtelev,'Telephone')}}</td>
<td><div class=\"form-control\">{{form_widget(form.numtelev)}}</div></td>
<td>{{form_errors(form.numtelev)}}</td>
</tr>

</table>
</div>

<div align=CENTER > {{form_widget(form.save)}}</div>


{{form_end(form)}}
{% endif %}














                
            </div>
        </section>

    </body>
    






        
{% endblock %}", "participationns/addParticipationns.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\participationns\\addParticipationns.html.twig");
    }
}
