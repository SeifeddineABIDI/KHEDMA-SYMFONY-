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

/* BackOffice/categorie/index.html.twig */
class __TwigTemplate_1214ed03c686c3039684a84154c260f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/categorie/index.html.twig", 1);
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

        echo "categorie index
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
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste des Categorie
\t\t\t</h4>

\t\t</div>

\t\t";
        // line 19
        echo "
\t</div>

\t";
        // line 23
        echo "

\t<table border=\"2\" class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>nom</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Archive</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            echo "\t\t\t\t<tr>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "type", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>";
            // line 48
            echo ((twig_get_attribute($this->env, $this->source, $context["categorie"], "archive", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t</div>

\t\t\t\t\t<td>
\t\t\t\t\t\t<ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"show\">
\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"edit\">
\t\t\t\t\t\t\t\t\t<i class=\"uil uil-edit\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
            // line 75
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t</tbody>
\t</table>
\t";
        // line 103
        echo "\t";
        // line 104
        echo "\t<div class=\"action-btn\">
\t\t<a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        echo "\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Add New categorie</a>

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 105,  194 => 104,  192 => 103,  188 => 83,  179 => 79,  171 => 75,  163 => 59,  155 => 54,  146 => 48,  139 => 44,  133 => 41,  127 => 38,  123 => 36,  118 => 35,  104 => 23,  99 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}categorie index
{% endblock %}

{% block body %}

\t<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
\t\t<div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
\t\t\t<h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste des Categorie
\t\t\t</h4>

\t\t</div>

\t\t{# <form action=\"/\" class=\"d-flex align-items-center user-member__form my-sm-0 my-2\">
\t\t\t<img src=\"/BackOffice/img/svg/search.svg\" alt=\"search\" class=\"svg\">
\t\t\t<input class=\"form-control me-sm-2 border-0 box-shadow-none\" type=\"search\" placeholder=\"Search by Titre\" aria-label=\"Search\">
\t\t</form> #}

\t</div>

\t{# <h1 style=\"text-align: center;\"><span style=\"color: #0077B6;\">categorie index</span></h1> #}


\t<table border=\"2\" class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>nom</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Archive</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for categorie in categories %}
\t\t\t\t<tr>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>{{ categorie.id }}</td>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>{{ categorie.nom }}</td>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>{{ categorie.type }}</td>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<td>{{ categorie.archive ? 'Yes' : 'No' }}</td>
\t\t\t\t\t</div>

\t\t\t\t\t<td>
\t\t\t\t\t\t<ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_show', {'id': categorie.id}) }}\" class=\"show\">
\t\t\t\t\t\t\t\t\t<i class=\"uil uil-eye\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\" class=\"edit\">
\t\t\t\t\t\t\t\t\t<i class=\"uil uil-edit\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t{# <li>
\t\t\t\t\t\t\t                                                <a href=\"{{ path('app_user_ban', {'id': user.id}) }}\" 
\t\t\t\t\t\t\t                                                    value=\"{{ csrf_token('delete' ~ user.id) }}\" class=\"remove\">
\t\t\t\t\t\t\t                                                    <i class=\"fa-solid fa-user-slash\"></i>
\t\t\t\t\t\t\t                                                </a>
\t\t\t\t\t\t\t                                            </li>
\t\t\t\t\t\t\t                                            <li>
\t\t\t\t\t\t\t                                                <a href=\"{{ path('app_user_unban', {'id': user.id}) }}\" class=\"edit\">
\t\t\t\t\t\t\t                                                    <i class=\"fa-brands fa-creative-commons-by\"></i>
\t\t\t\t\t\t\t                                                </a>
\t\t\t\t\t\t\t                                            </li> #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t{# <li class=\"dm-pagination__item\">
\t                        <div class=\"paging-option\">
\t                             add pagination links
\t                            {% if currentPage > 1 %}
\t                                <a href=\"{{ path('app_categorie_index', {'page': currentPage - 1}) }}\"class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-left\"></span></a>
\t                            {% endif %}
\t                            {% for page in 1..totalPages %}
\t                                {% if page == currentPage %}
\t                                {{ page }}
\t                                {% else %}
\t                                <a href=\"{{ path('app_categorie_index', {'page': page}) }}\">{{ page }}</a>
\t                                {% endif %}
\t                            {% endfor %}
\t                            {% if currentPage < totalPages %}
\t                                <a href=\"{{ path('app_categorie_index', {'page': currentPage + 1}) }}\" class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-right\"></span></a>
\t                            {% endif %}
\t                        </div>
\t                        </li> #}
\t{# <a href=\"{{ path('app_categorie_new') }}\">Create new</a> #}
\t<div class=\"action-btn\">
\t\t<a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
\t\t\t<i class=\"las la-plus fs-16\"></i>Add New categorie</a>

\t</div>
{% endblock %}
", "BackOffice/categorie/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\categorie\\index.html.twig");
    }
}
