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

/* profil/index.html.twig */
class __TwigTemplate_42eec86b30473a1f9b73191dc30c82f8 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "profil/index.html.twig", 1);
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

        echo "Edit Profile Admin!";
        
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
        echo "<body>
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Profile</h1>
    </div><!-- End Page Title -->
    <div align=\"center\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                            <div class=\"alert alert-success w-50\">
                                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "Warning"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                <div class=\"alert alert-warning w-50\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "Danger"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                <div class=\"alert alert-danger w-50\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
        <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">

            <div class=\"card\">
                <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "image", [], "any", false, false, false, 38))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                <h2>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "</h2>
                <h3>Admin</h3>
                <div class=\"social-links mt-2\">
                    <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>

            </div>

            <div class=\"col-xl-8\">

            <div class=\"card\">
                <div class=\"card-body pt-3\">
                <!-- Bordered Tabs -->
                <ul class=\"nav nav-tabs nav-tabs-bordered\">

                    <li class=\"nav-item\">
                    <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">À propos</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Editer le profil</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">Changer le mot de passe</button>
                    </li>

                </ul>
                <div class=\"tab-content pt-2\">

                    <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                    <h5 class=\"card-title\">About</h5>
                    <p class=\"small fst-italic\">Admin AURORA.</p>

                    <h5 class=\"card-title\">Détails du profil</h5>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label \">Nom et prénom</div>
                        <div class=\"col-lg-9 col-md-8\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Role</div>
                        <div class=\"col-lg-9 col-md-8\">Chef service</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Adresse</div>
                        <div class=\"col-lg-9 col-md-8\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "fullAddress", [], "any", false, false, false, 92), "html", null, true);
        echo "</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Téléphone</div>
                        <div class=\"col-lg-9 col-md-8\">(+216) ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "numTel", [], "any", false, false, false, 97), "html", null, true);
        echo "</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">E-mail</div>
                        <div class=\"col-lg-9 col-md-8\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "email", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                    </div>

                    </div>

                    <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                    <!-- Profile Edit Form -->
                    ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifImage"]) || array_key_exists("modifImage", $context) ? $context["modifImage"] : (function () { throw new RuntimeError('Variable "modifImage" does not exist.', 110, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row mb-3\">
                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "image", [], "any", false, false, false, 114))), "html", null, true);
        echo "\" alt=\"Profile\">
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifImage"]) || array_key_exists("modifImage", $context) ? $context["modifImage"] : (function () { throw new RuntimeError('Variable "modifImage" does not exist.', 115, $this->source); })()), "photo", [], "any", false, false, false, 115), 'row');
        echo "
                            <div class=\"pt-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></button>
                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                            </div>
                            
                        </div>
                        </div>
                    ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifImage"]) || array_key_exists("modifImage", $context) ? $context["modifImage"] : (function () { throw new RuntimeError('Variable "modifImage" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
                    ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 124, $this->source); })()), 'form_start');
        echo "    
                        <div class=\"row mb-3\">
                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Name complète</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 128, $this->source); })()), "username", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 130, $this->source); })()), "username", [], "any", false, false, false, 130), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 136, $this->source); })()), "fullAddress", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 138, $this->source); })()), "fullAddress", [], "any", false, false, false, 138), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Numéro téléphone</label>
                        <div class=\"col-md-8 col-lg-9\">
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 144, $this->source); })()), "numTel", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 146, $this->source); })()), "numTel", [], "any", false, false, false, 146), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                        </div>
                        </br>
                        </br>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder les modifications</button>
                        </div>
                        </div>
                    ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifForm"]) || array_key_exists("modifForm", $context) ? $context["modifForm"] : (function () { throw new RuntimeError('Variable "modifForm" does not exist.', 181, $this->source); })()), 'form_end');
        echo "
                    <!-- End Profile Edit Form -->

                    </div>

                    <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                    <!-- Change Password Form -->

                    ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 189, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row mb-3\">
                            <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Entrer votre Mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 193, $this->source); })()), "password", [], "any", false, false, false, 193), "first", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"invalid-feedback\">S'il vous plait entrez une mot de passe valide!</div>
                            </div>
                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 196, $this->source); })()), "password", [], "any", false, false, false, 196), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                        <br>

                        <div class=\"row mb-3\">
                            <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Confirmation votre mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 203, $this->source); })()), "password", [], "any", false, false, false, 203), "second", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                        </div>
                    ";
        // line 210
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 210, $this->source); })()), 'form_end');
        echo "

                    </div>

                </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section>
</main>
       </body>     
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 210,  385 => 203,  375 => 196,  369 => 193,  362 => 189,  351 => 181,  313 => 146,  308 => 144,  299 => 138,  294 => 136,  285 => 130,  280 => 128,  273 => 124,  269 => 123,  258 => 115,  254 => 114,  247 => 110,  236 => 102,  228 => 97,  220 => 92,  207 => 82,  161 => 39,  157 => 38,  147 => 30,  138 => 27,  135 => 26,  130 => 25,  121 => 22,  118 => 21,  113 => 20,  104 => 17,  101 => 16,  97 => 15,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Edit Profile Admin!{% endblock %}



{% block body %}
<body>
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Profile</h1>
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

            <div class=\"card\">
                <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                <img src=\"{{asset('/uploads/users/'~ app.user.image )}}\" alt=\"Profile\" class=\"rounded-circle\">
                <h2>{{ app.user.email }}</h2>
                <h3>Admin</h3>
                <div class=\"social-links mt-2\">
                    <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>

            </div>

            <div class=\"col-xl-8\">

            <div class=\"card\">
                <div class=\"card-body pt-3\">
                <!-- Bordered Tabs -->
                <ul class=\"nav nav-tabs nav-tabs-bordered\">

                    <li class=\"nav-item\">
                    <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">À propos</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Editer le profil</button>
                    </li>

                    <li class=\"nav-item\">
                    <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">Changer le mot de passe</button>
                    </li>

                </ul>
                <div class=\"tab-content pt-2\">

                    <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                    <h5 class=\"card-title\">About</h5>
                    <p class=\"small fst-italic\">Admin AURORA.</p>

                    <h5 class=\"card-title\">Détails du profil</h5>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label \">Nom et prénom</div>
                        <div class=\"col-lg-9 col-md-8\">{{ app.user.username }}</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Role</div>
                        <div class=\"col-lg-9 col-md-8\">Chef service</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Adresse</div>
                        <div class=\"col-lg-9 col-md-8\">{{ app.user.fullAddress }}</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">Téléphone</div>
                        <div class=\"col-lg-9 col-md-8\">(+216) {{ app.user.numTel }}</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 label\">E-mail</div>
                        <div class=\"col-lg-9 col-md-8\">{{ app.user.email }}</div>
                    </div>

                    </div>

                    <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                    <!-- Profile Edit Form -->
                    {{ form_start(modifImage) }}
                        <div class=\"row mb-3\">
                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <img src=\"{{asset('/uploads/users/'~ app.user.image )}}\" alt=\"Profile\">
                            {{ form_row(modifImage.photo)}}
                            <div class=\"pt-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></button>
                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                            </div>
                            
                        </div>
                        </div>
                    {{ form_end(modifImage) }}
                    {{ form_start(modifForm) }}    
                        <div class=\"row mb-3\">
                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Name complète</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.username,{'attr':{'class':'form-control'}})}}
                        </div>
                        {{ form_errors(modifForm.username,{'attr':{'class':'form-control'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.fullAddress,{'attr':{'class':'form-control'}}) }}
                        </div>
                            {{ form_errors(modifForm.fullAddress,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Numéro téléphone</label>
                        <div class=\"col-md-8 col-lg-9\">
                            {{ form_widget(modifForm.numTel,{'attr':{'class':'form-control'}}) }}
                        </div>
                            {{ form_errors(modifForm.numTel,{'attr':{'class':'text-danger'}}) }}
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                        </div>
                        </div>

                        <div class=\"row mb-3\">
                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                        <div class=\"col-md-8 col-lg-9\">
                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                        </div>
                        </br>
                        </br>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder les modifications</button>
                        </div>
                        </div>
                    {{ form_end(modifForm) }}
                    <!-- End Profile Edit Form -->

                    </div>

                    <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                    <!-- Change Password Form -->

                    {{ form_start(passForm) }}
                        <div class=\"row mb-3\">
                            <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Entrer votre Mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                {{ form_widget(passForm.password.first,{'attr':{'class':'form-control'}}) }}
                                <div class=\"invalid-feedback\">S'il vous plait entrez une mot de passe valide!</div>
                            </div>
                            {{ form_errors(passForm.password,{'attr':{'class':'text-danger'}}) }}
                        </div>
                        <br>

                        <div class=\"row mb-3\">
                            <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Confirmation votre mot de passe</label>
                            <div class=\"col-md-8 col-lg-9\">
                                {{ form_widget(passForm.password.second,{'attr':{'class':'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
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
       </body>     
{% endblock %}", "profil/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\profil\\index.html.twig");
    }
}
