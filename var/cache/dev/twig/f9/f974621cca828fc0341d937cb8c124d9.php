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

/* FrontOffice/front/index.html.twig */
class __TwigTemplate_3d6d833ddfea2a07aa317bded0a198c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/front/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/front/index.html.twig", 1);
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

\t<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
\t\t<div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste d'evenements
\t\t\t</h4>

\t\t</div>


\t</div>

\t";
        // line 20
        echo "\t<div class=\"table-responsive\">


\t\t<table border=\"2\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t<th>Image</th>\t
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Prix</th>


\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 41
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "Lieu", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Evenements/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 56))), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"></td>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_qr", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t</tbody>
\t\t</div>


\t</table>
\t";
        // line 109
        echo "\t";
        // line 110
        echo "

\t<div class=\"action-btn\">
\t\t<a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chart");
        echo "\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Voir evenement par categorie</a>


\t</div>


\t<div style=\"margin-left: 526px;\">
\t\t<style>
\t\t\t.pagination {
\t\t\t\theight: 40px;
\t\t\t\tmargin: 20px 10px;
\t\t\t}

\t\t\t.pagination ul {
\t\t\t\tdisplay: inline-block;
\t\t\t\t*display: inline;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tmargin-left: 0;
\t\t\t\t-webkit-border-radius: 3px;
\t\t\t\t-moz-border-radius: 3px;
\t\t\t\tborder-radius: 3px;
\t\t\t\t*zoom: 1;
\t\t\t\t-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\t-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\t.pagination li {
\t\t\t\tdisplay: inline;
\t\t\t}

\t\t\t.pagination a,
\t\t\t.pagination span {
\t\t\t\tfloat: left;
\t\t\t\tpadding: 0 14px;
\t\t\t\tline-height: 38px;
\t\t\t\ttext-decoration: none;
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder: 1px solid #dddddd;
\t\t\t\tborder-left-width: 0;
\t\t\t}

\t\t\t.pagination a:hover,
\t\t\t.pagination .active a,
\t\t\t.pagination .active span {
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\t.pagination .active a,
\t\t\t.pagination .active span {
\t\t\t\tcolor: #999999;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t.pagination .disabled span,
\t\t\t.pagination .disabled a,
\t\t\t.pagination .disabled a:hover {
\t\t\t\tcolor: #999999;
\t\t\t\tcursor: default;
\t\t\t\tbackground-color: transparent;
\t\t\t}

\t\t\t.pagination li:first-child a,
\t\t\t.pagination li:first-child span {
\t\t\t\tborder-left-width: 1px;
\t\t\t\t-webkit-border-radius: 3px 0 0 3px;
\t\t\t\t-moz-border-radius: 3px 0 0 3px;
\t\t\t\tborder-radius: 3px 0 0 3px;
\t\t\t}

\t\t\t.pagination li:last-child a,
\t\t\t.pagination li:last-child span {
\t\t\t\t-webkit-border-radius: 0 3px 3px 0;
\t\t\t\t-moz-border-radius: 0 3px 3px 0;
\t\t\t\tborder-radius: 0 3px 3px 0;
\t\t\t}

\t\t\t.pagination-centered {
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.pagination-right {
\t\t\t\ttext-align: right;
\t\t\t}
\t\t</style>
\t\t";
        // line 200
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 200, $this->source); })()));
        echo "

\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 200,  222 => 113,  217 => 110,  215 => 109,  208 => 86,  199 => 82,  183 => 71,  173 => 64,  165 => 59,  159 => 56,  153 => 53,  147 => 50,  140 => 46,  134 => 43,  130 => 41,  125 => 40,  103 => 20,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}evenement index
{% endblock %}

{% block body %}


\t<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
\t\t<div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste d'evenements
\t\t\t</h4>

\t\t</div>


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
\t\t\t\t\t<th>Image</th>\t
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
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_qr', {'id': evenement.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</div>


\t</table>
\t{# <li class=\"dm-pagination__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"paging-option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                             add pagination links
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% if currentPage > 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <a href=\"{{ path('app_evenement_index', {'page': currentPage - 1}) }}\"class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-left\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% for page in 1..totalPages %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                {% if page == currentPage %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                {{ page }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <a href=\"{{ path('app_evenement_index', {'page': page}) }}\">{{ page }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% if currentPage < totalPages %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <a href=\"{{ path('app_evenement_index', {'page': currentPage + 1}) }}\" class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-right\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </li> #}
\t{# <a href=\"{{ path('app_evenement_new') }}\">Create new</a> #}


\t<div class=\"action-btn\">
\t\t<a href=\"{{ path('chart') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Voir evenement par categorie</a>


\t</div>


\t<div style=\"margin-left: 526px;\">
\t\t<style>
\t\t\t.pagination {
\t\t\t\theight: 40px;
\t\t\t\tmargin: 20px 10px;
\t\t\t}

\t\t\t.pagination ul {
\t\t\t\tdisplay: inline-block;
\t\t\t\t*display: inline;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tmargin-left: 0;
\t\t\t\t-webkit-border-radius: 3px;
\t\t\t\t-moz-border-radius: 3px;
\t\t\t\tborder-radius: 3px;
\t\t\t\t*zoom: 1;
\t\t\t\t-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\t-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\t.pagination li {
\t\t\t\tdisplay: inline;
\t\t\t}

\t\t\t.pagination a,
\t\t\t.pagination span {
\t\t\t\tfloat: left;
\t\t\t\tpadding: 0 14px;
\t\t\t\tline-height: 38px;
\t\t\t\ttext-decoration: none;
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder: 1px solid #dddddd;
\t\t\t\tborder-left-width: 0;
\t\t\t}

\t\t\t.pagination a:hover,
\t\t\t.pagination .active a,
\t\t\t.pagination .active span {
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\t.pagination .active a,
\t\t\t.pagination .active span {
\t\t\t\tcolor: #999999;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t.pagination .disabled span,
\t\t\t.pagination .disabled a,
\t\t\t.pagination .disabled a:hover {
\t\t\t\tcolor: #999999;
\t\t\t\tcursor: default;
\t\t\t\tbackground-color: transparent;
\t\t\t}

\t\t\t.pagination li:first-child a,
\t\t\t.pagination li:first-child span {
\t\t\t\tborder-left-width: 1px;
\t\t\t\t-webkit-border-radius: 3px 0 0 3px;
\t\t\t\t-moz-border-radius: 3px 0 0 3px;
\t\t\t\tborder-radius: 3px 0 0 3px;
\t\t\t}

\t\t\t.pagination li:last-child a,
\t\t\t.pagination li:last-child span {
\t\t\t\t-webkit-border-radius: 0 3px 3px 0;
\t\t\t\t-moz-border-radius: 0 3px 3px 0;
\t\t\t\tborder-radius: 0 3px 3px 0;
\t\t\t}

\t\t\t.pagination-centered {
\t\t\t\ttext-align: center;
\t\t\t}

\t\t\t.pagination-right {
\t\t\t\ttext-align: right;
\t\t\t}
\t\t</style>
\t\t{{knp_pagination_render(evenements) }}

\t</div>

{% endblock %}
", "FrontOffice/front/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\front\\index.html.twig");
    }
}
