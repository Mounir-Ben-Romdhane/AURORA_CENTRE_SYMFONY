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

/* profil/profilClient.html.twig */
class __TwigTemplate_5cccbc1caafbc7f25b49515534b5a273 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilClient.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "profil/profilClient.html.twig", 1);
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

        echo "Edit Client!";
        
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
        echo "<body >
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

                                <li class=\"dropdown\"><a href=\"#\" style=\"color:#ffc800;\"><span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
        echo "</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                        <li>
                                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 29
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
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                                <i class=\"bi bi-box-arrow-right\"></i>
                                                <span>Sign Out</span>
                                            </a>
                                        </li>
                                    </ul><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->

        </nav>


        
        <!-- Masthead-->
         <header class=\"masthead\">
                <main id=\"main\" class=\"main\">
                

    <div class=\"pagetitle\">
      <h1 style=\"color:#ffc800;\">Profile</h1>
    </div><!-- End Page Title -->
    <div align=\"center\">
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 60
            echo "                            <div class=\"alert alert-success w-50\">
                                ";
            // line 61
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [0 => "Warning"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "                <div class=\"alert alert-warning w-50\">
                    ";
            // line 66
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [0 => "Danger"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "                <div class=\"alert alert-danger w-50\">
                    ";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
        <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">
            <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-8 d-flex flex-column align-items-center justify-content-center\">
            <div class=\"containerr\">
                <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <h2 style=\"color:black;\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "email", [], "any", false, false, false, 85), "html", null, true);
        echo "</h2>
                    <h3 style=\"color:black;\">Client</h3>
                    <div class=\"social-links mt-2\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\" style=\"color:black;\"></i></a>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
            </div>

            <div class=\"col-xl-8\">
            
            <div class=\"containerr\">
                <div class=\"card-body pt-3\">
                <!-- Bordered Tabs -->
                <ul class=\"nav nav-tabs nav-tabs-bordered\">

                    <li class=\"nav-item\">
                    <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" style=\"color:#ffc800;\">À propos</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\" style=\"color:#ffc800;\">Editer le profil</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\" style=\"color:#ffc800;\">Changer le mot de passe</button>
                    </li>

                </ul>
                <div class=\"tab-content pt-2\">

                    <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                        <h5 class=\"card-title\" style=\"color:black;\">About</h5>
                        <p class=\"small fst-italic\"style=\"color:black;\">Client AURORA.</p>

                        <h5 class=\"card-title\" style=\"color:black;\">Détails du profil</h5>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label \" style=\"color:black;\">Nom et prénom</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "username", [], "any", false, false, false, 130), "html", null, true);
        echo "</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Role</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">Simple Client</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Adresse</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "fullAddress", [], "any", false, false, false, 140), "html", null, true);
        echo "</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Téléphone</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">(+216) ";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "numTel", [], "any", false, false, false, 145), "html", null, true);
        echo "</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">E-mail</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "email", [], "any", false, false, false, 150), "html", null, true);
        echo "</div>
                        </div>

                    </div>

                    <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                    <!-- Profile Edit Form -->
                    ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 158, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row mb-3\">
                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Profile Image</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\">
                            <div class=\"pt-2\">
                            <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                            </div>
                        </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Name complète</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 173, $this->source); })()), "username", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 175, $this->source); })()), "username", [], "any", false, false, false, 175), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Address</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 181, $this->source); })()), "fullAddress", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 183, $this->source); })()), "fullAddress", [], "any", false, false, false, 183), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Numéro téléphone</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 189, $this->source); })()), "numTel", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                            ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 191, $this->source); })()), "numTel", [], "any", false, false, false, 191), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Twitter Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Facebook Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Instagram Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\"style=\"color:black;\">Linkedin Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                        </div>
                        </br>
                        </br>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-warning\" style=\"color:white;\">Sauvegarder les modifications</button>
                        </div>
                        </div>
                    ";
        // line 226
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 226, $this->source); })()), 'form_end');
        echo "
                    <!-- End Profile Edit Form -->

                    </div>

                    <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                    <!-- Change Password Form -->

                    ";
        // line 234
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 234, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row mb-3\">
                            <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Entrer votre Mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 238, $this->source); })()), "password", [], "any", false, false, false, 238), "first", [], "any", false, false, false, 238), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"invalid-feedback\">S'il vous plait entrez une mot de passe valide!</div>
                            </div>
                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 241, $this->source); })()), "password", [], "any", false, false, false, 241), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                        <br>

                        <div class=\"row mb-3\">
                            <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Confirmation votre mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 248, $this->source); })()), "password", [], "any", false, false, false, 248), "second", [], "any", false, false, false, 248), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-warning\" style=\"color:white;\">Change Password</button>
                        </div>
                    ";
        // line 255
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 255, $this->source); })()), 'form_end');
        echo "

                    </div>

                </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section> 
</main>

        
        
        </header>
        
    
       
        
    </body>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/profilClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 255,  424 => 248,  414 => 241,  408 => 238,  401 => 234,  390 => 226,  352 => 191,  347 => 189,  338 => 183,  333 => 181,  324 => 175,  319 => 173,  301 => 158,  290 => 150,  282 => 145,  274 => 140,  261 => 130,  213 => 85,  200 => 74,  191 => 71,  188 => 70,  183 => 69,  174 => 66,  171 => 65,  166 => 64,  157 => 61,  154 => 60,  150 => 59,  126 => 38,  114 => 29,  108 => 26,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Edit Client!{% endblock %}



{% block body %}
<body >
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <div class=\"pt-1 pb-1\">
                    <h4 class=\"card-title text-center pb-1 fs-2\" style=\"color:#ffc800;\"><i>AURORA<i></h4>
                  </div>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

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

        </nav>


        
        <!-- Masthead-->
         <header class=\"masthead\">
                <main id=\"main\" class=\"main\">
                

    <div class=\"pagetitle\">
      <h1 style=\"color:#ffc800;\">Profile</h1>
    </div><!-- End Page Title -->
    <div align=\"center\">
    {% for message in app.flashes('Success') %}
                            <div class=\"alert alert-success w-50\">
                                {{ message }}
                            </div>
                        {% endfor %}
            {% for message in app.flashes('Warning') %}
                <div class=\"alert alert-warning w-50\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('Danger') %}
                <div class=\"alert alert-danger w-50\">
                    {{ message }}
                </div>
            {% endfor %}
        </div>
        <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">
            <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-8 d-flex flex-column align-items-center justify-content-center\">
            <div class=\"containerr\">
                <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <h2 style=\"color:black;\">{{ app.user.email }}</h2>
                    <h3 style=\"color:black;\">Client</h3>
                    <div class=\"social-links mt-2\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\" style=\"color:black;\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\" style=\"color:black;\"></i></a>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
            </div>

            <div class=\"col-xl-8\">
            
            <div class=\"containerr\">
                <div class=\"card-body pt-3\">
                <!-- Bordered Tabs -->
                <ul class=\"nav nav-tabs nav-tabs-bordered\">

                    <li class=\"nav-item\">
                    <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" style=\"color:#ffc800;\">À propos</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\" style=\"color:#ffc800;\">Editer le profil</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\" style=\"color:#ffc800;\">Changer le mot de passe</button>
                    </li>

                </ul>
                <div class=\"tab-content pt-2\">

                    <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                        <h5 class=\"card-title\" style=\"color:black;\">About</h5>
                        <p class=\"small fst-italic\"style=\"color:black;\">Client AURORA.</p>

                        <h5 class=\"card-title\" style=\"color:black;\">Détails du profil</h5>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label \" style=\"color:black;\">Nom et prénom</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">{{ app.user.username }}</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Role</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">Simple Client</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Adresse</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">{{ app.user.fullAddress }}</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">Téléphone</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">(+216) {{ app.user.numTel }}</div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 label\" style=\"color:black;\">E-mail</div>
                            <div class=\"col-lg-9 col-md-8\" style=\"color:black;\">{{ app.user.email }}</div>
                        </div>

                    </div>

                    <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                    <!-- Profile Edit Form -->
                    {{ form_start(modifForm) }}
                        <div class=\"row mb-3\">
                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Profile Image</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\">
                            <div class=\"pt-2\">
                            <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                            </div>
                        </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Name complète</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.username,{'attr':{'class':'form-control'}})}}
                        </div>
                        {{ form_errors(modifForm.username,{'attr':{'class':'form-control'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Address</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.fullAddress,{'attr':{'class':'form-control'}}) }}
                        </div>
                            {{ form_errors(modifForm.fullAddress,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Numéro téléphone</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.numTel,{'attr':{'class':'form-control'}}) }}
                        </div>
                            {{ form_errors(modifForm.numTel,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Twitter Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Facebook Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Instagram Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\"style=\"color:black;\">Linkedin Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                        </div>
                        </br>
                        </br>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-warning\" style=\"color:white;\">Sauvegarder les modifications</button>
                        </div>
                        </div>
                    {{ form_end(modifForm) }}
                    <!-- End Profile Edit Form -->

                    </div>

                    <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                    <!-- Change Password Form -->

                    {{ form_start(passForm) }}
                        <div class=\"row mb-3\">
                            <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Entrer votre Mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                {{ form_widget(passForm.password.first,{'attr':{'class':'form-control'}}) }}
                                <div class=\"invalid-feedback\">S'il vous plait entrez une mot de passe valide!</div>
                            </div>
                            {{ form_errors(passForm.password,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        <br>

                        <div class=\"row mb-3\">
                            <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\" style=\"color:black;\">Confirmation votre mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                {{ form_widget(passForm.password.second,{'attr':{'class':'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-warning\" style=\"color:white;\">Change Password</button>
                        </div>
                    {{ form_end(passForm) }}

                    </div>

                </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section> 
</main>

        
        
        </header>
        
    
       
        
    </body>  
{% endblock %}", "profil/profilClient.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\profil\\profilClient.html.twig");
    }
}
