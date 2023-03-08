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

/* reservation/add.html.twig */
class __TwigTemplate_f29344717021770d7c2baada33b04d79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/add.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservation/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Ajouter une réservation</h5>
           ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                             <div class=\"form-group\">
                                                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "numero", [], "any", false, false, false, 12), 'label', ["label" => "Numéro :"]);
        echo "
                                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "numero", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "numero", [], "any", false, false, false, 14), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'label', ["label" => "Email :"]);
        echo "
                                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "userName", [], "any", false, false, false, 24), 'label', ["label" => "userName :"]);
        echo "
                                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "userName", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "userName", [], "any", false, false, false, 26), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                            <div class=\"form-group\">
                                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "numeroTel", [], "any", false, false, false, 29), 'label', ["label" => "NuméroTel :"]);
        echo "
                                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "numeroTel", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "numeroTel", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                            </br>
                                            <div class=\"form-group\">
                                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "service", [], "any", false, false, false, 35), 'label', ["label" => "Service :"]);
        echo "
                                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "service", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "service", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                            <div class=\"form-group\">
                                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateR", [], "any", false, false, false, 40), 'label', ["label" => "Date :"]);
        echo "
                                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateR", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateR", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div></br>
                                                        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; background-color: #f1c40f; color: #fff; font-size: 18px; padding: 10px 20px;\">Enregistrer</button>
    
                                            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
</div>
            </div>
                </div>
          </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 46,  162 => 42,  158 => 41,  154 => 40,  148 => 37,  144 => 36,  140 => 35,  133 => 31,  129 => 30,  125 => 29,  119 => 26,  115 => 25,  111 => 24,  104 => 20,  100 => 19,  96 => 18,  89 => 14,  85 => 13,  81 => 12,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %} 

    {% block body %}
     <div class= \"container\">
       
            <div class=\"card\">
        <div class=\"card-header\"></div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Ajouter une réservation</h5>
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
        {% endblock %}
    ", "reservation/add.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reservation\\add.html.twig");
    }
}
