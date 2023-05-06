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

/* FrontOffice/annonce/pagination-template.html.twig */
class __TwigTemplate_a5827329909175d22b923b9b0ad67c33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pagination' => [$this, 'block_pagination'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/pagination-template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/pagination-template.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/annonce/pagination-template.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        // line 4
        echo "    ";
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 4, $this->source); })()) > 1)) {
            // line 5
            echo "        <nav aria-label=\"Page navigation\">
            <ul class=\"pagination\">
                ";
            // line 7
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 7, $this->source); })()) == 1)) {
                // line 8
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                ";
            } else {
                // line 14
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 15, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 15, $this->source); })()) - 1)])), "html", null, true);
                echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                ";
            }
            // line 20
            echo "
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "                    ";
                if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    echo "                        <li class=\"page-item active\">
                            <a class=\"page-link\" href=\"#\">";
                    // line 24
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        </li>
                    ";
                } else {
                    // line 27
                    echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 28, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                ";
            // line 33
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 33, $this->source); })()) == (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                ";
            } else {
                // line 40
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 41, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 41, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 41, $this->source); })()) => ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 41, $this->source); })()) + 1)])), "html", null, true);
                echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                ";
            }
            // line 46
            echo "            </ul>
        </nav>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/annonce/pagination-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  148 => 41,  145 => 40,  137 => 34,  135 => 33,  132 => 32,  126 => 31,  118 => 28,  115 => 27,  109 => 24,  106 => 23,  103 => 22,  99 => 21,  96 => 20,  88 => 15,  85 => 14,  77 => 8,  75 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block pagination %}
    {% if pageCount > 1 %}
        <nav aria-label=\"Page navigation\">
            <ul class=\"pagination\">
                {% if current == 1 %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): current - 1})) }}\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                        </a>
                    </li>
                {% endif %}

                {% for page in pagesInRange %}
                    {% if page == current %}
                        <li class=\"page-item active\">
                            <a class=\"page-link\" href=\"#\">{{ page }}</a>
                        </li>
                    {% else %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if current == pageCount %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): current + 1})) }}\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    {% endif %}
{% endblock %}
", "FrontOffice/annonce/pagination-template.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\annonce\\pagination-template.html.twig");
    }
}
