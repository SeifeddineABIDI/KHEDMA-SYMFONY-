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

/* pdf_generator/index.html.twig */
class __TwigTemplate_c285d88561c7d19eed806448e9c11f29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Tableau des  metiers</title>
</head>
<body >
<h1 style=\"text-align: center; color: red\">5edma</h1>


   <h1 style=\"text-align: center;\"><span style=\"color: #0077B6;\">les metier  disponibles</span></h1>

    <table border=\"2\" class=\"table\" style=\"margin: 80px\">
    
        <thead c>
            <tr>
              
                <th style=\"color: #0077B9;\">Nom</th>
                <th style=\"color: #0077B9;\">Type</th>
                <th style=\"color: #0077B9;\">Description</th>
                ";
        // line 22
        echo "                ";
        // line 23
        echo "             
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["metier"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 28
            echo "            <tr>
              
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "type", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                ";
            // line 34
            echo "                ";
            // line 37
            echo "                  ";
            // line 38
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
</table>


</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  104 => 40,  98 => 38,  96 => 37,  94 => 34,  90 => 32,  86 => 31,  82 => 30,  78 => 28,  73 => 27,  67 => 23,  65 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Tableau des  metiers</title>
</head>
<body >
<h1 style=\"text-align: center; color: red\">5edma</h1>


   <h1 style=\"text-align: center;\"><span style=\"color: #0077B6;\">les metier  disponibles</span></h1>

    <table border=\"2\" class=\"table\" style=\"margin: 80px\">
    
        <thead c>
            <tr>
              
                <th style=\"color: #0077B9;\">Nom</th>
                <th style=\"color: #0077B9;\">Type</th>
                <th style=\"color: #0077B9;\">Description</th>
                {# <th style=\"color: #0077B9;\">image</th> #}
                {# <th style=\"color: #0077B9;\">localisation</th> #}
             
            </tr>
        </thead>
        <tbody>
        {% for metier in metier %}
            <tr>
              
                <td>{{ metier.nom }}</td>
                <td>{{ metier.type }}</td>
                <td>{{ metier.description }}</td>
                {# <td>{{ metier.freelancer }}</td> #}
                {# {% if image_data is not empty  %}
                    <img src=\"{{ image_data}}\">
                {% endif %} #}
                  {# <td>{{ metier.sousmetier.user.adresse }}</td> #}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</table>


</body>
</html>
", "pdf_generator/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\pdf_generator\\index.html.twig");
    }
}
