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

/* BackOffice/evenement/index.html.twig */
class __TwigTemplate_8d04da93816c1c129c2d9b28ee6ec88d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/evenement/index.html.twig", 1);
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

        echo "evenement index
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
        echo "  
\t<div class=\"main-panel\">
\t\t<div class=\"content-wrapper\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb\"></ol>
\t\t\t\t</nav>
\t\t\t</div>


\t\t\t<div class=\"card\">
\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t\t\t<form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\">
\t\t\t\t\t\t<div class=\"form-group col-md-4\" style=\"display: flex; margin-top: 11px;margin-left: 50px;margin-right: 14px;padding-bottom: 7px\">

\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"id\">id</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"titre\">titre</label>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-12 grid-margin\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\"></div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
\t\t\t\t\t\t\t\t<li class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t\t<form name=\"Search-method\" id=\"Search-method\" method=\"post\" class=\"forms-sample\" style=\"display: flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #788175; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Choisir un Critére</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"id\">id</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nom\">titre</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Evenements\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 79
        echo "
\t

\t<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
\t\t<div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste d'evenements
\t\t\t</h4>

\t</div>

\t";
        // line 90
        echo "\t<div class=\"table-responsive\">


\t\t<table border=\"2\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Prix</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 110
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 119), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "Lieu", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td><img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Evenements/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 125))), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"></td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 128
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 128), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            echo "\" class=\"show\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            echo "\" class=\"edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 165
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t\t\t</tbody>
\t\t</div>
\t</table>
\t
\t<div class=\"action-btn\">
\t\t<a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Add New evenement</a>

\t</div>

<div  style=\"margin-left: 526px;\" >
        <style>
 .pagination {
    height: 40px;
    margin: 20px 10px;
}

.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    padding: 0px;
}

.pagination li {
    display: inline;
}

.pagination a,
.pagination span {
    float: left;
    padding: 0 14px;
    line-height: 38px;
    text-decoration: none;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-left-width: 0;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
    background-color: #f5f5f5;
}

.pagination .active a,
.pagination .active span {
    color: #999999;
    cursor: default;
}

.pagination .disabled span,
.pagination .disabled a,
.pagination .disabled a:hover {
    color: #999999;
    cursor: default;
    background-color: transparent;
}

.pagination li:first-child a,
.pagination li:first-child span {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}

.pagination li:last-child a,
.pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}

.pagination-centered {
    text-align: center;
}

.pagination-right {
    text-align: right;
}
 </style>
                                ";
        // line 259
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 259, $this->source); })()));
        echo "
                    
                                     </div>
\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 259,  293 => 174,  286 => 169,  277 => 165,  267 => 159,  259 => 143,  251 => 138,  242 => 132,  235 => 128,  229 => 125,  223 => 122,  217 => 119,  210 => 115,  204 => 112,  200 => 110,  195 => 109,  174 => 90,  162 => 79,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}evenement index
{% endblock %}

{% block body %}
  
\t<div class=\"main-panel\">
\t\t<div class=\"content-wrapper\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb\"></ol>
\t\t\t\t</nav>
\t\t\t</div>


\t\t\t<div class=\"card\">
\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t\t\t<form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\">
\t\t\t\t\t\t<div class=\"form-group col-md-4\" style=\"display: flex; margin-top: 11px;margin-left: 50px;margin-right: 14px;padding-bottom: 7px\">

\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"id\">id</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"titre\">titre</label>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-12 grid-margin\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div style=\"display: flex\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\"></div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
\t\t\t\t\t\t\t\t<li class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t\t<form name=\"Search-method\" id=\"Search-method\" method=\"post\" class=\"forms-sample\" style=\"display: flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #788175; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Choisir un Critére</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"id\">id</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nom\">titre</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Evenements\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# here ends trie and find   #}

\t

\t<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
\t\t<div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste d'evenements
\t\t\t</h4>

\t</div>

\t{# <h1 style=\"text-align: center;\"><span style=\"color: #0077B6;\">evenement index</span></h1> #}
\t<div class=\"table-responsive\">


\t\t<table border=\"2\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Prix</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for evenement in evenements %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.id }}</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.titre }}</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.description }}</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.Lieu }}</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td><img src=\"{{asset ('uploads/Evenements/' ~ evenement.image)}}\" width=\"150px\" height=\"150px\"></td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>{{ evenement.prix }}</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\" class=\"show\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\" class=\"edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t{# <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                <a href=\"{{ path('app_user_ban', {'id': user.id}) }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    value=\"{{ csrf_token('delete' ~ user.id) }}\" class=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    <i class=\"fa-solid fa-user-slash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                <a href=\"{{ path('app_user_unban', {'id': user.id}) }}\" class=\"edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    <i class=\"fa-brands fa-creative-commons-by\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            </li> #}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</div>
\t</table>
\t
\t<div class=\"action-btn\">
\t\t<a href=\"{{ path('app_evenement_new') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Add New evenement</a>

\t</div>

<div  style=\"margin-left: 526px;\" >
        <style>
 .pagination {
    height: 40px;
    margin: 20px 10px;
}

.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    padding: 0px;
}

.pagination li {
    display: inline;
}

.pagination a,
.pagination span {
    float: left;
    padding: 0 14px;
    line-height: 38px;
    text-decoration: none;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-left-width: 0;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
    background-color: #f5f5f5;
}

.pagination .active a,
.pagination .active span {
    color: #999999;
    cursor: default;
}

.pagination .disabled span,
.pagination .disabled a,
.pagination .disabled a:hover {
    color: #999999;
    cursor: default;
    background-color: transparent;
}

.pagination li:first-child a,
.pagination li:first-child span {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}

.pagination li:last-child a,
.pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}

.pagination-centered {
    text-align: center;
}

.pagination-right {
    text-align: right;
}
 </style>
                                {{knp_pagination_render(evenements) }}
                    
                                     </div>
\t

{% endblock %}
", "BackOffice/evenement/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\BackOffice\\evenement\\index.html.twig");
    }
}
