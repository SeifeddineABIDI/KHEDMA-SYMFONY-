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

/* BackOffice/user/_edit_form.html.twig */
class __TwigTemplate_a97e6ca325eb2c06acbebfe8f36bb49b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/_edit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/_edit_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'label', ["label" => "Nom"]);
        echo "</span>
                                                ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'errors');
        echo "
                                </div> 

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), 'label', ["label" => "Prenom"]);
        echo "</span>
                                                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                               <i class=\"fa-regular fa-envelope fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'label', ["label" => "E-mail"]);
        echo "</span>
                                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-phone-volume fa-fw\" style=\"color:#A40E1C;\"></i><span> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cin", [], "any", false, false, false, 25), 'label', ["label" => "CIN"]);
        echo "</span>
                                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "cin", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "cin", [], "any", false, false, false, 27), 'errors');
        echo "
                                </div>      

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "role", [], "any", false, false, false, 32), 'label', ["label" => "Role"]);
        echo "</span>
                                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "role", [], "any", false, false, false, 34), 'errors');
        echo "
                                </div> 

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-regular fa-calendar fa-fw\" style=\"color:#A40E1C;\"></i> <span>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), 'label', ["label" => "Telephone"]);
        echo "</span>
                                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "telephone", [], "any", false, false, false, 41), 'errors');
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-map-location-dot fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'label', ["label" => "Adresse"]);
        echo "</span>
                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "adresse", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "adresse", [], "any", false, false, false, 48), 'errors');
        echo "
                                </div>  


                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-droplet fa-fw\" style=\"color:#A40E1C;\"></i><span>";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "githubUsername", [], "any", false, false, false, 54), 'label', ["label" => "GitHub UserName"]);
        echo "</span>
                                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "githubUsername", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "githubUsername", [], "any", false, false, false, 56), 'errors');
        echo "
                                </div>

                                 <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-regular fa-image fa-fw\" style=\"color:#A40E1C;\"\"></i><span>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), 'label', ["label" => "Image"]);
        echo "</span>
                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'errors');
        echo "
                                </div>  

                                <div class=\"button-group d-flex  justify-content-md-end \">
                                        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
        echo "\">
                                                <button class=\"btn btn-lg btn-primary btn-submit\" style=\"background:#A40E1C;\">
                                                     ";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Add User")) : ("Add User")), "html", null, true);
        echo "
                                                </button>
                                        </a>         
                                </div>

";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/user/_edit_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 74,  198 => 69,  193 => 67,  186 => 63,  182 => 62,  178 => 61,  170 => 56,  166 => 55,  162 => 54,  153 => 48,  149 => 47,  145 => 46,  137 => 41,  133 => 40,  129 => 39,  121 => 34,  117 => 33,  113 => 32,  105 => 27,  101 => 26,  97 => 25,  89 => 20,  85 => 19,  81 => 18,  73 => 13,  69 => 12,  65 => 11,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.nom, 'Nom') }}</span>
                                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.nom) }}
                                </div> 

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.prenom, 'Prenom') }}</span>
                                                {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.prenom) }}
                                </div>

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                               <i class=\"fa-regular fa-envelope fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.email, 'E-mail') }}</span>
                                                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.email) }}
                                </div>

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-phone-volume fa-fw\" style=\"color:#A40E1C;\"></i><span> {{ form_label(form.cin, 'CIN') }}</span>
                                                {{ form_widget(form.cin, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.cin) }}
                                </div>      

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-user fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.role, 'Role') }}</span>
                                                {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.role) }}
                                </div> 

                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-regular fa-calendar fa-fw\" style=\"color:#A40E1C;\"></i> <span>{{ form_label(form.telephone, 'Telephone') }}</span>
                                                {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.telephone) }}
                                </div>
                                
                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-map-location-dot fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.adresse, 'Adresse') }}</span>
                                                {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.adresse) }}
                                </div>  


                                <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-solid fa-droplet fa-fw\" style=\"color:#A40E1C;\"></i><span>{{ form_label(form.githubUsername, 'GitHub UserName') }}</span>
                                                {{ form_widget(form.githubUsername, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.githubUsername) }}
                                </div>

                                 <div class=\"form-group\">
                                                <label for=\"name1\"></label>
                                                <i class=\"fa-regular fa-image fa-fw\" style=\"color:#A40E1C;\"\"></i><span>{{ form_label(form.image, 'Image') }}</span>
                                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                                {{ form_errors(form.image) }}
                                </div>  

                                <div class=\"button-group d-flex  justify-content-md-end \">
                                        <a href=\"{{ path('app_user_list') }}\">
                                                <button class=\"btn btn-lg btn-primary btn-submit\" style=\"background:#A40E1C;\">
                                                     {{ button_label|default('Add User') }}
                                                </button>
                                        </a>         
                                </div>

{{ form_end(form) }}


", "BackOffice/user/_edit_form.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\user\\_edit_form.html.twig");
    }
}
