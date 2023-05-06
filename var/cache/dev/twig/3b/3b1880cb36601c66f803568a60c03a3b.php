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

/* BackOffice/evenement/_form.html.twig */
class __TwigTemplate_bb58acb162d621c4af8b3a67f0f093d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"edit-profile__body\">
\t<form>
\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'label', ["label" => "Titre"]);
        echo "
\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'label', ["label" => "description"]);
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'errors');
        echo "
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Lieu", [], "any", false, false, false, 22), 'label', ["label" => "Lieu"]);
        echo "
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Lieu", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Lieu", [], "any", false, false, false, 24), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'label', ["label" => "prix"]);
        echo "
\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "categorie", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "categorie", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "categorie", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t</div>

\t\t<button class=\"btn btn-info btn-default btn-squared btn-transparent-info \">";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 50, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
\t\t</button>

\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/evenement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  149 => 50,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  122 => 38,  118 => 37,  109 => 31,  105 => 30,  101 => 29,  93 => 24,  89 => 23,  85 => 22,  76 => 16,  72 => 15,  68 => 14,  60 => 9,  56 => 8,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

<div class=\"edit-profile__body\">
\t<form>
\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.titre, 'Titre') }}
\t\t\t{{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.titre) }}
\t\t</div>

\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.description, 'description') }}
\t\t\t{{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.description) }}
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.Lieu, 'Lieu') }}
\t\t\t{{ form_widget(form.Lieu, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.Lieu) }}
\t\t</div>

\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.date) }}
\t\t\t{{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.date) }}
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.prix, 'prix') }}
\t\t\t{{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.prix) }}
\t\t</div>


\t\t<div class=\"form-group mb-25\">
\t\t\t<label for=\"name1\"></label>
\t\t\t{{ form_label(form.categorie) }}
\t\t\t{{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.categorie) }}
\t\t</div>

\t\t<button class=\"btn btn-info btn-default btn-squared btn-transparent-info \">{{ button_label|default('Save') }}
\t\t</button>

\t\t{{ form_end(form) }}
", "BackOffice/evenement/_form.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\evenement\\_form.html.twig");
    }
}
