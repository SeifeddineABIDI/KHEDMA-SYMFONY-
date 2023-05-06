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

/* FrontOffice/annonce/tri.html.twig */
class __TwigTemplate_19f5a0901b01cee9ca1f2b0864d22971 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/tri.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/tri.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/annonce/tri.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des annonces</h1>

    <table>
        <thead>
            <tr>
                <th>
                    ";
        // line 10
        if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 10, $this->source); })()) == "titre")) {
            // line 11
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "titre_desc"]);
            echo "\">Titre <i class=\"fas fa-sort-down\"></i></a>
                    ";
        } elseif ((        // line 12
(isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 12, $this->source); })()) == "titre_desc")) {
            // line 13
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "titre"]);
            echo "\">Titre <i class=\"fas fa-sort-up\"></i></a>
                    ";
        } else {
            // line 15
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "titre"]);
            echo "\">Titre</a>
                    ";
        }
        // line 17
        echo "                </th>
                <th>
                    ";
        // line 19
        if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 19, $this->source); })()) == "date")) {
            // line 20
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "date_desc"]);
            echo "\">Date <i class=\"fas fa-sort-down\"></i></a>
                    ";
        } elseif ((        // line 21
(isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 21, $this->source); })()) == "date_desc")) {
            // line 22
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "date"]);
            echo "\">Date <i class=\"fas fa-sort-up\"></i></a>
                    ";
        } else {
            // line 24
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "date"]);
            echo "\">Date</a>
                    ";
        }
        // line 26
        echo "                </th>
                <th>
                    ";
        // line 28
        if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 28, $this->source); })()) == "classification")) {
            // line 29
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "classification_desc"]);
            echo "\">Classification <i class=\"fas fa-sort-down\"></i></a>
                    ";
        } elseif ((        // line 30
(isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 30, $this->source); })()) == "classification_desc")) {
            // line 31
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "classification"]);
            echo "\">Classification <i class=\"fas fa-sort-up\"></i></a>
                    ";
        } else {
            // line 33
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index", ["tri" => "classification"]);
            echo "\">Classification</a>
                    ";
        }
        // line 35
        echo "                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 40
            echo "                <tr>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "date", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "classification", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    ";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 49, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/annonce/tri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  177 => 46,  168 => 43,  164 => 42,  160 => 41,  157 => 40,  153 => 39,  147 => 35,  141 => 33,  135 => 31,  133 => 30,  128 => 29,  126 => 28,  122 => 26,  116 => 24,  110 => 22,  108 => 21,  103 => 20,  101 => 19,  97 => 17,  91 => 15,  85 => 13,  83 => 12,  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block body %}
    <h1>Liste des annonces</h1>

    <table>
        <thead>
            <tr>
                <th>
                    {% if tri == 'titre' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'titre_desc'}) }}\">Titre <i class=\"fas fa-sort-down\"></i></a>
                    {% elseif tri == 'titre_desc' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'titre'}) }}\">Titre <i class=\"fas fa-sort-up\"></i></a>
                    {% else %}
                        <a href=\"{{ path('annonce_index', {'tri': 'titre'}) }}\">Titre</a>
                    {% endif %}
                </th>
                <th>
                    {% if tri == 'date' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'date_desc'}) }}\">Date <i class=\"fas fa-sort-down\"></i></a>
                    {% elseif tri == 'date_desc' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'date'}) }}\">Date <i class=\"fas fa-sort-up\"></i></a>
                    {% else %}
                        <a href=\"{{ path('annonce_index', {'tri': 'date'}) }}\">Date</a>
                    {% endif %}
                </th>
                <th>
                    {% if tri == 'classification' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'classification_desc'}) }}\">Classification <i class=\"fas fa-sort-down\"></i></a>
                    {% elseif tri == 'classification_desc' %}
                        <a href=\"{{ path('annonce_index', {'tri': 'classification'}) }}\">Classification <i class=\"fas fa-sort-up\"></i></a>
                    {% else %}
                        <a href=\"{{ path('annonce_index', {'tri': 'classification'}) }}\">Classification</a>
                    {% endif %}
                </th>
            </tr>
        </thead>
        <tbody>
            {% for annonce in annonces %}
                <tr>
                    <td>{{ annonce.titre }}</td>
                    <td>{{ annonce.date|date('d/m/Y') }}</td>
                    <td>{{ annonce.classification.nom }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    {{ knp_pagination_render(annonces) }}
{% endblock %}
", "FrontOffice/annonce/tri.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\annonce\\tri.html.twig");
    }
}
