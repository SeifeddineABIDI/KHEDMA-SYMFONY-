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

/* BackOffice/raiting/index.html.twig */
class __TwigTemplate_84487299bbe24a77ece754a750c41e84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/raiting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/raiting/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/raiting/index.html.twig", 1);
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

        echo "Raiting index
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
        echo "\t<h1>Raiting index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Raiting</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raitings"]) || array_key_exists("raitings", $context) ? $context["raitings"] : (function () { throw new RuntimeError('Variable "raitings" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["raiting"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raiting"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raiting"], "raiting", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>


\t\t\t\t\t<td>
\t\t\t\t\t\t<h3>Add your vote
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"stars \">
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t\t<input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"product-item__content text-capitalize\">
\t\t\t\t\t\t\t<!-- Start: Product Ratings -->
\t\t\t\t\t\t\t<div class=\"stars-rating d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star-half-alt active\"></span>
\t\t\t\t\t\t\t\t<span class=\"stars-rating__point\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raiting"], "raiting", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"stars-rating__review\">
\t\t\t\t\t\t\t\t\t<span>778</span>
\t\t\t\t\t\t\t\t\tReviews</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: Product Ratings -->
\t\t\t\t\t\t\t<!-- Start: Product Brand -->
\t\t\t\t\t\t\t<span class=\"product-details-brandName\">Brand:<span>Louis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                          Poulsen</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"product-desc-price\" style=\"color:#A40E1C;\">
\t\t\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raiting"], "raiting", [], "any", false, false, false, 58), "html", null, true);
            echo "
\t\t\t\t\t\t\t\tPoints
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_raiting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["raiting"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_raiting_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["raiting"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t</td>


\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raiting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_raiting_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/raiting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  191 => 76,  182 => 72,  171 => 66,  167 => 65,  157 => 58,  143 => 47,  114 => 21,  110 => 20,  107 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Raiting index
{% endblock %}

{% block body %}
\t<h1>Raiting index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Raiting</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for raiting in raitings %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ raiting.id }}</td>
\t\t\t\t\t<td>{{ raiting.raiting }}</td>


\t\t\t\t\t<td>
\t\t\t\t\t\t<h3>Add your vote
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"stars \">
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"lar la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t\t<input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"product-item__content text-capitalize\">
\t\t\t\t\t\t\t<!-- Start: Product Ratings -->
\t\t\t\t\t\t\t<div class=\"stars-rating d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star active\"></span>
\t\t\t\t\t\t\t\t<span class=\"star-icon las la-star-half-alt active\"></span>
\t\t\t\t\t\t\t\t<span class=\"stars-rating__point\">{{ raiting.raiting}}</span>
\t\t\t\t\t\t\t\t<span class=\"stars-rating__review\">
\t\t\t\t\t\t\t\t\t<span>778</span>
\t\t\t\t\t\t\t\t\tReviews</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: Product Ratings -->
\t\t\t\t\t\t\t<!-- Start: Product Brand -->
\t\t\t\t\t\t\t<span class=\"product-details-brandName\">Brand:<span>Louis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                          Poulsen</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"product-desc-price\" style=\"color:#A40E1C;\">
\t\t\t\t\t\t\t\t{{ raiting.raiting}}
\t\t\t\t\t\t\t\tPoints
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_raiting_show', {'id': raiting.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_raiting_edit', {'id': raiting.id}) }}\">edit</a>
\t\t\t\t\t</td>


\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_raiting_new') }}\">Create new</a>
{% endblock %}
", "BackOffice/raiting/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\BackOffice\\raiting\\index.html.twig");
    }
}
