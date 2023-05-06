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

/* FrontOffice/annonce/_form.html.twig */
class __TwigTemplate_40d85a4a867f11e0bd4e7aa73acde264 extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/_form.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/annonce/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
";
        // line 27
        echo "                                    <div class=\"edit-profile__body\">
                                        <form>
                                            <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'label', ["label" => "Titre"]);
        echo "
                                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), 'errors');
        echo "
                                            </div>
                                       
                                    
                                            <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "date", [], "any", false, false, false, 39), 'label');
        echo "
                                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "date", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'errors');
        echo "
                                            </div>

                                            ";
        // line 54
        echo "                                             <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "classification", [], "any", false, false, false, 56), 'label');
        echo "
                                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "classification", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "classification", [], "any", false, false, false, 58), 'errors');
        echo "
                                            </div>
                                            ";
        // line 72
        echo "
     <button class=\"btn btn-info btn-default btn-squared btn-transparent-info \">";
        // line 73
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 73, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
                                    </button> 

";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/annonce/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 76,  130 => 73,  127 => 72,  122 => 58,  118 => 57,  114 => 56,  110 => 54,  104 => 41,  100 => 40,  96 => 39,  87 => 33,  83 => 32,  79 => 31,  73 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block body %}
    {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
{# <div class=\"container-fluid\">

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"user-info-tab w-100 bg-white global-shadow radius-xl mb-50\">
                <div class=\"ap-tab-wrapper border-bottom \">
                    <ul class=\"nav px-30 ap-tab-main text-capitalize\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <li class=\"nav-item\">
                        </li>
                        <li class=\"nav-item\">
                        </li>
                        <li class=\"nav-item\">
                        </li>
                    </ul>
                </div>
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade  show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xxl-4 col-10\">
                                <div class=\"mt-sm-40 mb-sm-50 mt-20 mb-20\">
                                    <div class=\"user-tab-info-title mb-sm-40 mb-20 text-capitalize\">
                                        
                                    </div> #}
                                    <div class=\"edit-profile__body\">
                                        <form>
                                            <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                {{ form_label(form.titre, 'Titre') }}
                                                {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.titre) }}
                                            </div>
                                       
                                    
                                            <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                {{ form_label(form.date) }}
                                                {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.date) }}
                                            </div>

                                            {#  <div class=\"form-group\">
                                             <div class=\"countryOption\">
                                                <label for=\"countryOption\">
                                                   Classification
                                                </label>
                                                <select class=\"js-example-basic-single js-states form-control\" id=\"countryOption\">
    
                                                </select>
                                             </div> 
                                          </div> #}
                                             <div class=\"form-group mb-25\">
                                                <label for=\"name1\"></label>
                                                {{ form_label(form.classification) }}
                                                {{ form_widget(form.classification, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.classification) }}
                                            </div>
                                            {# <div class=\"form-group status-radio add-product-status-radio mb-20\">
                                             <label class=\"mb-15\">Archive</label>
                                             <div class=\"d-flex\">
                                                <div class=\"radio-horizontal-list d-flex flex-wrap\">


                                                   <div class=\"radio-theme-default custom-radio \">
                                                      <input class=\"radio\" type=\"radio\" name=\"radio-optional\" value=0 id=\"radio-hl1\">
                                                      <label for=\"radio-hl1\">
                                                         
                                                      </label>
                                                   </div> #}

     <button class=\"btn btn-info btn-default btn-squared btn-transparent-info \">{{ button_label|default('Save') }}
                                    </button> 

{{ form_end(form) }}
{% endblock %}
", "FrontOffice/annonce/_form.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\FrontOffice\\annonce\\_form.html.twig");
    }
}
