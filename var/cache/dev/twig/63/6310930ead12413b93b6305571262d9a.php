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

/* security/login.html.twig */
class __TwigTemplate_9d6b00bf14fda93927a73bdbea9a4215 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "
<body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>
        </nav>


        
            <!-- Masthead-->
            <header class=\"masthead\">
                <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center\">

                

              <div class=\"containerr\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-1\">
                    <h5 class=\"card-title text-center pb-2 fs-1\" style=\"color:white;\">Connectez-vous à votre compte</h5>
                    <p class=\"text-center pb-4 fs-6\" style=\"color:white;\">Entrer votre Email &amp; mot de passe pour se connecter</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate=\"\" method=\"post\">
                  
                        ";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageData", [], "any", false, false, false, 39), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 41
        echo "
                        ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "isVerified", [], "any", false, false, false, 42) == false))) {
            // line 43
            echo "                        <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" 
                            aria-label=\"close\"></button>
                            <div class=\"alert-message\">
                                <strong>Votre compte n'est pas activé </strong>, 
                                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resend_verif");
            echo "\">renvoyer le lien d'activation</a>
                            </div>
                        </div>
                        ";
        }
        // line 52
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "isVerified", [], "any", false, false, false, 52) == true)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "etat", [], "any", false, false, false, 52) == true))) {
            // line 53
            echo "                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" 
                                aria-label=\"close\"></button>
                                <div class=\"alert-message\">
                                    <strong>Votre compte est activé </strong>
                                </div>
                            </div>
                        ";
        }
        // line 61
        echo "
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 64
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", [0 => "Warning"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "                            <div class=\"alert alert-warning\">
                                ";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", [0 => "Danger"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 74
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\" style=\"color:#ffc800;\"><b>Email</b></label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"email\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Exemple@gmail.com\" style=\"text-align:center;\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        <div class=\"invalid-feedback\">Veuillez saisir votre e-mail.</div>
                      </div>
                    </div>
                    
                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\" ><b>Password</b></label>
                      <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"********\" style=\"text-align:center;\" class=\"form-control\" autocomplete=\"current-password\" required>
                      <div class=\"invalid-feedback\">s'il vous plait entrez votre mot de passe!</div>
                    </div>
                    <div class=\"col-12\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    </div>

                    <div class=\"col-12\" align=\"start\" style=\"margin-left:20px;\">
                      
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\" >
                        <label class=\"form-check-label\" for=\"rememberMe\" style=\"color:#ffc800;\"><b>Je souhaite étre identifié automatiquement</b></label>
                      
                      </div>
                    
                    <div class=\"col-12\">
                      <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\"><b>Login</b></button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\" style=\"color:#ffc800;\"><b>Tu n'a pas de compte ? </b><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" style=\"color:white;\"><b> Créer un compte !</b></a></p>
                    </div>
                    
                        <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                        <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oublie_pass");
        echo "\" align=\"end\"><b>Mot de passe oublié</b></a>
                  </form>

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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 112,  260 => 111,  254 => 108,  236 => 93,  221 => 81,  215 => 77,  206 => 74,  203 => 73,  198 => 72,  189 => 69,  186 => 68,  181 => 67,  172 => 64,  169 => 63,  165 => 62,  162 => 61,  152 => 53,  149 => 52,  142 => 48,  135 => 43,  133 => 42,  130 => 41,  124 => 39,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

<body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>
        </nav>


        
            <!-- Masthead-->
            <header class=\"masthead\">
                <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center\">

                

              <div class=\"containerr\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-1\">
                    <h5 class=\"card-title text-center pb-2 fs-1\" style=\"color:white;\">Connectez-vous à votre compte</h5>
                    <p class=\"text-center pb-4 fs-6\" style=\"color:white;\">Entrer votre Email &amp; mot de passe pour se connecter</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate=\"\" method=\"post\">
                  
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        {% if app.user and app.user.isVerified == false %}
                        <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" 
                            aria-label=\"close\"></button>
                            <div class=\"alert-message\">
                                <strong>Votre compte n'est pas activé </strong>, 
                                <a href=\"{{ path('resend_verif') }}\">renvoyer le lien d'activation</a>
                            </div>
                        </div>
                        {% endif %}
                        {% if app.user and app.user.isVerified == true  and app.user.etat == true %}
                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" 
                                aria-label=\"close\"></button>
                                <div class=\"alert-message\">
                                    <strong>Votre compte est activé </strong>
                                </div>
                            </div>
                        {% endif %}

                        {% for message in app.flashes('Success') %}
                            <div class=\"alert alert-success\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('Warning') %}
                            <div class=\"alert alert-warning\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('Danger') %}
                            <div class=\"alert alert-danger\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\" style=\"color:#ffc800;\"><b>Email</b></label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"Exemple@gmail.com\" style=\"text-align:center;\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        <div class=\"invalid-feedback\">Veuillez saisir votre e-mail.</div>
                      </div>
                    </div>
                    
                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\" style=\"color:#ffc800;\" ><b>Password</b></label>
                      <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"********\" style=\"text-align:center;\" class=\"form-control\" autocomplete=\"current-password\" required>
                      <div class=\"invalid-feedback\">s'il vous plait entrez votre mot de passe!</div>
                    </div>
                    <div class=\"col-12\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                    >
                    </div>

                    <div class=\"col-12\" align=\"start\" style=\"margin-left:20px;\">
                      
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" value=\"true\" id=\"rememberMe\" >
                        <label class=\"form-check-label\" for=\"rememberMe\" style=\"color:#ffc800;\"><b>Je souhaite étre identifié automatiquement</b></label>
                      
                      </div>
                    
                    <div class=\"col-12\">
                      <button class=\"btn btn-warning w-50\" type=\"submit\" style=\"color:white;\"><b>Login</b></button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\" style=\"color:#ffc800;\"><b>Tu n'a pas de compte ? </b><a href=\"{{ path('app_register')}}\" style=\"color:white;\"><b> Créer un compte !</b></a></p>
                    </div>
                    
                        <a href=\"{{ path('app_front') }}\" align=\"start\"><b>Retour à la page d'accueil</b></a>
                        <a href=\"{{ path('app_oublie_pass') }}\" align=\"end\"><b>Mot de passe oublié</b></a>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>
        
            

                
           

        
        
        </header>
        
    
       
        
    </body>

{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\security\\login.html.twig");
    }
}
