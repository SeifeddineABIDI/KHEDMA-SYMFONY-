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

/* BackOffice/back/index.html.twig */
class __TwigTemplate_aeeebf40ed0901911ee5be3b4f028f4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/back/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/back/index.html.twig", 1);
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

        echo "Annonce Back";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
    <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
        <h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste Annonces </h4>
    </div>




</div>


<table border=\"2\" class=\"table\">

    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Classification</th>
            <th>Archive</th>
            <th>Client</th>
            <th></th>
          ";
        // line 31
        echo "        </tr>
    </thead>
    <tbody>
       ";
        // line 34
        if (twig_test_empty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
        
    ";
        } else {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 41
                echo "        <tr>
            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                ((twig_get_attribute($this->env, $this->source, $context["annonce"], "date", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "date", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "classification", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
             
            <td>";
                // line 47
                echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "archive", [], "any", false, false, false, 47)) ? ("Yes") : ("No"));
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 48), "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
            <td>
                <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                    <li>
                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_show_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"show\">
                            <i class=\"uil uil-eye\"></i>
                        </a>
                    </li>
                 
                </ul>
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " 
    ";
        }
        // line 63
        echo "    </tbody>
</table>

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
        // line 146
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 146, $this->source); })()));
        echo "
                    
                                     </div>

        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 146,  185 => 63,  181 => 61,  166 => 52,  157 => 48,  153 => 47,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  133 => 41,  128 => 40,  121 => 35,  119 => 34,  114 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Annonce Back{% endblock %}

{% block body %}


<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
    <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
        <h4 class=\"text-capitalize fw-500 breadcrumb-title\">Liste Annonces </h4>
    </div>




</div>


<table border=\"2\" class=\"table\">

    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Classification</th>
            <th>Archive</th>
            <th>Client</th>
            <th></th>
          {#  <th>Actions</th> #}
        </tr>
    </thead>
    <tbody>
       {% if annonces is empty %}
        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
        
    {% else %}
        {% for annonce in annonces %}
        <tr>
            <td>{{ annonce.id }}</td>
            <td>{{ annonce.titre }}</td>
            <td>{{ annonce.date ? annonce.date|date('Y-m-d') : '' }}</td>
            <td>{{ annonce.classification.nom }}</td>
             
            <td>{{ annonce.archive ? 'Yes' : 'No' }}</td>
            <td>{{ annonce.user.nom }} {{ annonce.user.prenom }}</td>
            <td>
                <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                    <li>
                        <a href=\"{{ path('app_annonce_show_admin', {'id': annonce.id}) }}\" class=\"show\">
                            <i class=\"uil uil-eye\"></i>
                        </a>
                    </li>
                 
                </ul>
            </td>
        </tr>
        {% endfor %}
 
    {% endif %}
    </tbody>
</table>

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
                                {{knp_pagination_render(annonces) }}
                    
                                     </div>

        
{% endblock %}
", "BackOffice/back/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\BackOffice\\back\\index.html.twig");
    }
}
