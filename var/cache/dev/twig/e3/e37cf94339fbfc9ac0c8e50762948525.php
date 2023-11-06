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

/* evenement/test.html.twig */
class __TwigTemplate_36a2c6d5666e9ffd1d24415bae01630b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/test.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "evenement/test.html.twig", 1);
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

        echo "List evenements !";
        
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
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"assets/img/lall-logo-_1_ copy.svg\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" style=\"color:#ffc800;\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenementAffichageFront");
        echo "\">Evenements</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "
                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 24
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
            // line 33
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
            // line 41
            echo "                            
                                <li class=\"dropdown\" ><a href=\"#\"><span >S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                    <li><a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 50
        echo "                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\">
            
            <div class=\"container\">
                <div class=\"masthead-heading text-uppercase\">EVENEMENTS</div>
                <div class=\"masthead-subheading\" >Profitez chers clients !</div>
            </div>
        </header>
 












        <!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
        
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 80
            echo "                <div class=\"alert alert-success\" style=\"text-align:center;\">
                    ";
            // line 81
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "

<div align=RIGHT>
        <form action=\"\">
  <label for=\"Reclamation\">Trier par:</label>
 <select id=\"orderBy\" name=\"Reclamation\" onchange=\"location = this.value;\">
 <option value=\"\"></option>
  <option value=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_triertitreev_evenement");
        echo "\">Titre</option>
  <option value=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_triertypeev_evenement");
        echo "\">Type</option>
  <option value=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trierdateev_evenement");
        echo "\">Date</option>
</select>
</a>
</form>
</div>
    </br>

                <div class=\"row\">

                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauEvenement"]) || array_key_exists("tableauEvenement", $context) ? $context["tableauEvenement"] : (function () { throw new RuntimeError('Variable "tableauEvenement" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . twig_get_attribute($this->env, $this->source, $context["i"], "imageev", [], "any", false, false, false, 111))), "html", null, true);
            echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titreev", [], "any", false, false, false, 114), "html", null, true);
            echo "</div>
                                <div class=\"portfolio-caption-subheading text-muted\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "typeev", [], "any", false, false, false, 115), "html", null, true);
            echo "</div>
                                <div class=\"portfolio-caption-subheading text-muted\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descriptionev", [], "any", false, false, false, 116), "html", null, true);
            echo "</div>
                                <p class=\"item-intro text-muted\">";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dateev", [], "any", false, false, false, 117), "d-m-Y"), "html", null, true);
            echo "</p>


                                <strong><div class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addParticipationns", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\">Participer</a></div></strong>



                   
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "

                    
                  

                </div>
            </div>
        </section>
      
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauEvenement"]) || array_key_exists("tableauEvenement", $context) ? $context["tableauEvenement"] : (function () { throw new RuntimeError('Variable "tableauEvenement" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 139
            echo "        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                      
                            
                            <div class=\"col-lg-8\">
                                    

                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    
                                    <h2 class=\"text-uppercase\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ii"], "titreev", [], "any", false, false, false, 153), "html", null, true);
            echo "</h2>
                                    <p class=\"item-intro text-muted\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ii"], "typeev", [], "any", false, false, false, 154), "html", null, true);
            echo "</p>
                                     <p class=\"item-intro text-muted\">";
            // line 155
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ii"], "dateev", [], "any", false, false, false, 155), "d-m-Y"), "html", null, true);
            echo "</p>
                                     

                                    <img class=\"img-fluid d-block mx-auto\" src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/evenement/" . twig_get_attribute($this->env, $this->source, $context["ii"], "imageev", [], "any", false, false, false, 158))), "html", null, true);
            echo "\" alt=\"...\" />
                                    <p>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ii"], "descriptionev", [], "any", false, false, false, 159), "html", null, true);
            echo "</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong></strong>
                                            
                                        </li>
                                        <li>
                                            <strong></strong>
                                            
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addParticipationns", ["id" => twig_get_attribute($this->env, $this->source, $context["ii"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Participer
                                    </button>
                                    
                                </div>
                                
                            </div>
                        

                        </div>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ii'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "    </body>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 190,  350 => 170,  336 => 159,  332 => 158,  326 => 155,  322 => 154,  318 => 153,  302 => 139,  298 => 138,  287 => 129,  272 => 120,  266 => 117,  262 => 116,  258 => 115,  254 => 114,  248 => 111,  238 => 103,  234 => 102,  222 => 93,  218 => 92,  214 => 91,  205 => 84,  196 => 81,  193 => 80,  189 => 79,  158 => 50,  150 => 45,  146 => 44,  141 => 41,  130 => 33,  118 => 24,  112 => 21,  109 => 20,  107 => 19,  99 => 14,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}List evenements !{% endblock %}
    {% block body %}

    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"assets/img/lall-logo-_1_ copy.svg\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
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
                <div class=\"masthead-heading text-uppercase\">EVENEMENTS</div>
                <div class=\"masthead-subheading\" >Profitez chers clients !</div>
            </div>
        </header>
 












        <!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
        
            {% for message in app.flashes('Success') %}
                <div class=\"alert alert-success\" style=\"text-align:center;\">
                    {{ message }}
                </div>
            {% endfor %}


<div align=RIGHT>
        <form action=\"\">
  <label for=\"Reclamation\">Trier par:</label>
 <select id=\"orderBy\" name=\"Reclamation\" onchange=\"location = this.value;\">
 <option value=\"\"></option>
  <option value=\"{{ path('app_triertitreev_evenement') }}\">Titre</option>
  <option value=\"{{ path('app_triertypeev_evenement') }}\">Type</option>
  <option value=\"{{ path('app_trierdateev_evenement') }}\">Date</option>
</select>
</a>
</form>
</div>
    </br>

                <div class=\"row\">

                        {% for i in tableauEvenement %}

                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{asset('uploads/users/'~ i.imageev)}}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">{{i.titreev}}</div>
                                <div class=\"portfolio-caption-subheading text-muted\">{{i.typeev}}</div>
                                <div class=\"portfolio-caption-subheading text-muted\">{{i.descriptionev}}</div>
                                <p class=\"item-intro text-muted\">{{i.dateev | date('d-m-Y')}}</p>


                                <strong><div class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_addParticipationns',{'id':i.id})}}\">Participer</a></div></strong>



                   
                            </div>
                        </div>
                    </div>
                    {% endfor %}


                    
                  

                </div>
            </div>
        </section>
      
        {% for ii in tableauEvenement %}
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                      
                            
                            <div class=\"col-lg-8\">
                                    

                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    
                                    <h2 class=\"text-uppercase\">{{ii.titreev}}</h2>
                                    <p class=\"item-intro text-muted\">{{ii.typeev}}</p>
                                     <p class=\"item-intro text-muted\">{{ii.dateev | date('d-m-Y')}}</p>
                                     

                                    <img class=\"img-fluid d-block mx-auto\" src=\"{{asset('uploads/evenement/'~ ii.imageev)}}\" alt=\"...\" />
                                    <p>{{ii.descriptionev}}</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong></strong>
                                            
                                        </li>
                                        <li>
                                            <strong></strong>
                                            
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\" href=\"{{path('app_addParticipationns',{'id':ii.id})}}\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Participer
                                    </button>
                                    
                                </div>
                                
                            </div>
                        

                        </div>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        {% endfor %}
    </body>
    {% endblock %}
", "evenement/test.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\evenement\\test.html.twig");
    }
}
