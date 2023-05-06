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

/* FrontOffice/partials/pagination.html.twig */
class __TwigTemplate_6ec9c93ace164d5c1dd5b30ed5732773 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/partials/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/partials/pagination.html.twig"));

        // line 1
        echo "<div class=\"pagination\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 2, $this->source); })()), "totalPages", [], "any", false, false, false, 2) > 1)) {
            // line 3
            echo "        <ul>
            ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 4, $this->source); })()), "currentPage", [], "any", false, false, false, 4) != 1)) {
                // line 5
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })()), ["page" => 1]);
                echo "\">&laquo;</a></li>
            ";
            }
            // line 7
            echo "
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()), "totalPages", [], "any", false, false, false, 8)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "                ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 9, $this->source); })()), "currentPage", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "                    <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
                ";
                } elseif (((((                // line 11
$context["page"] == (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "currentPage", [], "any", false, false, false, 11) + 1)) || ($context["page"] == (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "currentPage", [], "any", false, false, false, 11) + 2))) || ($context["page"] == (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "currentPage", [], "any", false, false, false, 11) - 1))) || ($context["page"] == (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "currentPage", [], "any", false, false, false, 11) - 2)))) {
                    // line 12
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 12, $this->source); })()), ["page" => $context["page"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
            ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "currentPage", [], "any", false, false, false, 16) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "totalPages", [], "any", false, false, false, 16))) {
                // line 17
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "totalPages", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">&raquo;</a></li>
            ";
            }
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  101 => 19,  95 => 17,  93 => 16,  90 => 15,  84 => 14,  76 => 12,  74 => 11,  69 => 10,  66 => 9,  62 => 8,  59 => 7,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pagination\">
    {% if pagination.totalPages > 1 %}
        <ul>
            {% if pagination.currentPage != 1 %}
                <li><a href=\"{{ path(route, {page: 1}) }}\">&laquo;</a></li>
            {% endif %}

            {% for page in 1..pagination.totalPages %}
                {% if page == pagination.currentPage %}
                    <li class=\"active\"><span>{{ page }}</span></li>
                {% elseif page == pagination.currentPage + 1 or page == pagination.currentPage + 2 or page == pagination.currentPage - 1 or page == pagination.currentPage - 2 %}
                    <li><a href=\"{{ path(route, {page: page}) }}\">{{ page }}</a></li>
                {% endif %}
            {% endfor %}

            {% if pagination.currentPage != pagination.totalPages %}
                <li><a href=\"{{ path(route, {page: pagination.totalPages}) }}\">&raquo;</a></li>
            {% endif %}
        </ul>
    {% endif %}
</div>
", "FrontOffice/partials/pagination.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\partials\\pagination.html.twig");
    }
}
