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

/* baseFronts.html.twig */
class __TwigTemplate_0fd38c5033b6966e0108da0e5e0f5109 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFronts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFronts.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </head>
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 737
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <!-- Favicons -->
  <link href=\"assets/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/assets/css/style.css\" rel=\"stylesheet\">
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <!-- Favicons -->
            <link href=\"assetss/img/favicon.png\" rel=\"icon\">
            <link href=\"assetss/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

            <!-- Google Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"assetss/vendor/aos/aos.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"assetss/css/style.css\" rel=\"stylesheet\">
            <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"css/styles.css\" rel=\"stylesheet\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "         <!-- Vendor JS Files -->
  <script src=\"assets/assets/vendor/apexcharts/apexcharts.min.js\"></script>
  <script src=\"assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/assets/vendor/chart.js/chart.umd.js\"></script>
  <script src=\"assets/assets/vendor/echarts/echarts.min.js\"></script>
  <script src=\"assets/assets/vendor/quill/quill.min.js\"></script>
  <script src=\"assets/assets/vendor/simple-datatables/simple-datatables.js\"></script>
  <script src=\"assets/assets/vendor/tinymce/tinymce.min.js\"></script>
  <script src=\"assets/assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/assets/js/main.js\"></script>
            ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            <!-- Vendor JS Files -->
            <script src=\"assetss/vendor/aos/aos.js\"></script>
            <script src=\"assetss/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"assetss/vendor/glightbox/js/glightbox.min.js\"></script>
            <script src=\"assetss/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
            <script src=\"assetss/vendor/swiper/swiper-bundle.min.js\"></script>
            <script src=\"assetss/vendor/waypoints/noframework.waypoints.js\"></script>
            <script src=\"assetss/vendor/php-email-form/validate.js\"></script>

            <!-- Template Main JS File -->
            <script src=\"assetss/js/main.js\"></script>
            <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"assets/img/lall-logo-_1_ copy.svg\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "                                <li class=\"nav-item dropdown pe-3\" >

                                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\" style=\"color:yellow;\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "username", [], "any", false, false, false, 117), "html", null, true);
            echo "</span>
                                </a><!-- End Profile Iamge Icon -->

                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                    <li class=\"dropdown-header\">
                                    <h6 >";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "useridentifier", [], "any", false, false, false, 122), "html", null, true);
            echo "</h6>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 152
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
            // line 161
            echo "                                <li class=\"dropdown\" ><a href=\"#\"><span>S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
                                    <li><a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a></li>
                                    </ul>
                                </li>
                            ";
        }
        // line 168
        echo "                        </div>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"masthead-subheading\">Welcome To Our Centre !</div>
                <div class=\"masthead-heading text-uppercase\">It's Nice To Meet You</div>
                <a class=\"btn btn-primary btn-xl text-uppercase\" href=\"#services\">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class=\"page-section\" id=\"services\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Services</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">E-Commerce</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Responsive Design</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Web Security</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Threads</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Window</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class=\"page-section\" id=\"about\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">About</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/1.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>2009-2011</h4>
                                <h4 class=\"subheading\">Our Humble Beginnings</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/2.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>March 2011</h4>
                                <h4 class=\"subheading\">An Agency is Born</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/3.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>December 2015</h4>
                                <h4 class=\"subheading\">Transition to Full Service</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/4.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>July 2020</h4>
                                <h4 class=\"subheading\">Phase Two Expansion</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class=\"page-section bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"...\" />
                            <h4>Parveen Anand</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"...\" />
                            <h4>Diana Petersen</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"...\" />
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\"><p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class=\"py-5\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/microsoft.svg\" alt=\"...\" aria-label=\"Microsoft Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/google.svg\" alt=\"...\" aria-label=\"Google Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/facebook.svg\" alt=\"...\" aria-label=\"Facebook Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/ibm.svg\" alt=\"...\" aria-label=\"IBM Logo\" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                    <div class=\"row align-items-stretch mb-5\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <!-- Name input-->
                                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                            </div>
                            <div class=\"form-group\">
                                <!-- Email address input-->
                                <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" data-sb-validations=\"required,email\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                            </div>
                            <div class=\"form-group mb-md-0\">
                                <!-- Phone number input-->
                                <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-textarea mb-md-0\">
                                <!-- Message input-->
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" data-sb-validations=\"required\"></textarea>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center text-white mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3\">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class=\"text-center\"><button class=\"btn btn-primary btn-xl text-uppercase disabled\" id=\"submitButton\" type=\"submit\">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; Your Website 2022</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFronts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  331 => 168,  324 => 164,  320 => 163,  316 => 161,  304 => 152,  271 => 122,  263 => 117,  258 => 114,  256 => 113,  241 => 100,  231 => 99,  198 => 75,  184 => 63,  174 => 62,  133 => 31,  110 => 10,  100 => 9,  81 => 8,  70 => 737,  68 => 99,  65 => 98,  62 => 62,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>{% block title %}Welcome !{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <!-- Favicons -->
  <link href=\"assets/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/assets/css/style.css\" rel=\"stylesheet\">
            {{ encore_entry_link_tags('app') }}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <!-- Favicons -->
            <link href=\"assetss/img/favicon.png\" rel=\"icon\">
            <link href=\"assetss/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

            <!-- Google Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"assetss/vendor/aos/aos.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
            <link href=\"assetss/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"assetss/css/style.css\" rel=\"stylesheet\">
            <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"css/styles.css\" rel=\"stylesheet\" />
        {% endblock %}
         {% block javascripts %}
         <!-- Vendor JS Files -->
  <script src=\"assets/assets/vendor/apexcharts/apexcharts.min.js\"></script>
  <script src=\"assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/assets/vendor/chart.js/chart.umd.js\"></script>
  <script src=\"assets/assets/vendor/echarts/echarts.min.js\"></script>
  <script src=\"assets/assets/vendor/quill/quill.min.js\"></script>
  <script src=\"assets/assets/vendor/simple-datatables/simple-datatables.js\"></script>
  <script src=\"assets/assets/vendor/tinymce/tinymce.min.js\"></script>
  <script src=\"assets/assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/assets/js/main.js\"></script>
            {{ encore_entry_script_tags('app') }}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            <!-- Vendor JS Files -->
            <script src=\"assetss/vendor/aos/aos.js\"></script>
            <script src=\"assetss/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"assetss/vendor/glightbox/js/glightbox.min.js\"></script>
            <script src=\"assetss/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
            <script src=\"assetss/vendor/swiper/swiper-bundle.min.js\"></script>
            <script src=\"assetss/vendor/waypoints/noframework.waypoints.js\"></script>
            <script src=\"assetss/vendor/php-email-form/validate.js\"></script>

            <!-- Template Main JS File -->
            <script src=\"assetss/js/main.js\"></script>
            <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        {% endblock %}
    </head>
    {% block body %}
    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#page-top\"><img src=\"assets/img/lall-logo-_1_ copy.svg\" alt=\"...\" /></a>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                           {% if app.user %}
                                <li class=\"nav-item dropdown pe-3\" >

                                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\" style=\"color:yellow;\">{{ app.user.username }}</span>
                                </a><!-- End Profile Iamge Icon -->

                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                    <li class=\"dropdown-header\">
                                    <h6 >{{ app.user.useridentifier }}</h6>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                    </li>
                                    <li>
                                    <hr class=\"dropdown-divider\">
                                    </li>
                                    <li>
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
                                <li class=\"dropdown\" ><a href=\"#\"><span>S'authentifier</span> <i class=\"bi bi-chevron-down\"></i></a>
                                    <ul>
                                    <li><a href=\"{{path('app_login')}}\">Login</a></li>
                                    <li><a href=\"{{path('app_register')}}\">Register</a></li>
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
                <div class=\"masthead-subheading\">Welcome To Our Centre !</div>
                <div class=\"masthead-heading text-uppercase\">It's Nice To Meet You</div>
                <a class=\"btn btn-primary btn-xl text-uppercase\" href=\"#services\">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class=\"page-section\" id=\"services\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Services</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">E-Commerce</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Responsive Design</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Web Security</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Threads</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Window</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class=\"page-section\" id=\"about\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">About</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/1.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>2009-2011</h4>
                                <h4 class=\"subheading\">Our Humble Beginnings</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/2.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>March 2011</h4>
                                <h4 class=\"subheading\">An Agency is Born</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/3.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>December 2015</h4>
                                <h4 class=\"subheading\">Transition to Full Service</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/4.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>July 2020</h4>
                                <h4 class=\"subheading\">Phase Two Expansion</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class=\"page-section bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"...\" />
                            <h4>Parveen Anand</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Parveen Anand LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"...\" />
                            <h4>Diana Petersen</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Diana Petersen LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"...\" />
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker Twitter Profile\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker Facebook Profile\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Larry Parker LinkedIn Profile\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\"><p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class=\"py-5\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/microsoft.svg\" alt=\"...\" aria-label=\"Microsoft Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/google.svg\" alt=\"...\" aria-label=\"Google Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/facebook.svg\" alt=\"...\" aria-label=\"Facebook Logo\" /></a>
                    </div>
                    <div class=\"col-md-3 col-sm-6 my-3\">
                        <a href=\"#!\"><img class=\"img-fluid img-brand d-block mx-auto\" src=\"assets/img/logos/ibm.svg\" alt=\"...\" aria-label=\"IBM Logo\" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                    <div class=\"row align-items-stretch mb-5\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <!-- Name input-->
                                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                            </div>
                            <div class=\"form-group\">
                                <!-- Email address input-->
                                <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" data-sb-validations=\"required,email\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                            </div>
                            <div class=\"form-group mb-md-0\">
                                <!-- Phone number input-->
                                <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-textarea mb-md-0\">
                                <!-- Message input-->
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" data-sb-validations=\"required\"></textarea>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center text-white mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3\">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class=\"text-center\"><button class=\"btn btn-primary btn-xl text-uppercase disabled\" id=\"submitButton\" type=\"submit\">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; Your Website 2022</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-xmark me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    {% endblock %}
</html>
", "baseFronts.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\baseFronts.html.twig");
    }
}
