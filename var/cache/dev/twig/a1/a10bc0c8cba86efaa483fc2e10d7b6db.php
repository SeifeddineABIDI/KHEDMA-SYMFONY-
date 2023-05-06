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

/* BackOffice/evenement/show.html.twig */
class __TwigTemplate_a8ceeb6083c5076a727c0cae5752c508 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/evenement/show.html.twig", 1);
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

        echo "Evenement
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<center>
\t\t<h1>Evenement</h1>
\t</center>


\t<table border=\"2\" class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Lieu</th>
\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 28, $this->source); })()), "Lieu", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prix</th>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Archive</th>
\t\t\t\t<td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "archive", [], "any", false, false, false, 40)) ? ("Yes") : ("No"));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<div class=\"button-group d-flex pt-sm-25 justify-content-md-end justify-content-start \">
\t\t<button class=\"btn btn-warning btn-xs btn-squared \">
\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">back to list</a>
\t\t</button>

\t\t<button class=\"btn btn-success btn-xs  btn-squared  \">
\t\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\">Edit</a>
\t\t</button>


\t\t";
        // line 56
        echo twig_include($this->env, $context, "BackOffice/evenement/_delete_form.html.twig");
        echo "

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 56,  160 => 52,  153 => 48,  142 => 40,  135 => 36,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evenement
{% endblock %}

{% block body %}
\t<center>
\t\t<h1>Evenement</h1>
\t</center>


\t<table border=\"2\" class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ evenement.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>{{ evenement.titre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>{{ evenement.description }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Lieu</th>
\t\t\t\t<td>{{ evenement.Lieu }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prix</th>
\t\t\t\t<td>{{ evenement.prix }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Archive</th>
\t\t\t\t<td>{{ evenement.archive ? 'Yes' : 'No' }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<div class=\"button-group d-flex pt-sm-25 justify-content-md-end justify-content-start \">
\t\t<button class=\"btn btn-warning btn-xs btn-squared \">
\t\t\t<a href=\"{{ path('app_evenement_index') }}\">back to list</a>
\t\t</button>

\t\t<button class=\"btn btn-success btn-xs  btn-squared  \">
\t\t\t<a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\">Edit</a>
\t\t</button>


\t\t{{ include('BackOffice/evenement/_delete_form.html.twig') }}

\t</div>
{% endblock %}
", "BackOffice/evenement/show.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\evenement\\show.html.twig");
    }
}
