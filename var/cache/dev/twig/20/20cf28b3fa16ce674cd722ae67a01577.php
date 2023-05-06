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

/* FrontOffice/classification/index.html.twig */
class __TwigTemplate_78fc51ba9072cf3d23c55b2c469af2ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/classification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/classification/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/classification/index.html.twig", 1);
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

        echo "Classification index";
        
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
        echo "   <div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
                        <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
                            <h4 class=\"text-capitalize fw-500 breadcrumb-title\"style=\"color: #0074D9; font-weight: bold;\">Liste  Classifications</h4>
                            
                        </div>

                      

                    </div>

    <table border=\"2\" class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Domaine</th>
                <th>Archive</th>
               ";
        // line 24
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classifications"]) || array_key_exists("classifications", $context) ? $context["classifications"] : (function () { throw new RuntimeError('Variable "classifications" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["classification"]) {
            // line 28
            echo "            <tr>
               <div class=\"d-flex\">
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classification"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                </div>
                <div class=\"d-flex\">
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classification"], "Nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                </div>
                <div class=\"d-flex\">
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classification"], "domaine", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                </div>
                <div class=\"d-flex\">
                <td>";
            // line 39
            echo ((twig_get_attribute($this->env, $this->source, $context["classification"], "archive", [], "any", false, false, false, 39)) ? ("Yes") : ("No"));
            echo "</td>
                </div>
                <td>
                 <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["classification"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["classification"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Edit</a>
                                            ";
            // line 67
            echo "                                            ";
            echo " 
                                        </td>
                ";
            // line 73
            echo "           </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </tbody>
    </table>

   ";
        // line 83
        echo "   ";
        // line 88
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_new");
        echo "\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Add New Classification</span>
</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/classification/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 88,  178 => 83,  173 => 79,  164 => 75,  158 => 73,  153 => 67,  149 => 43,  145 => 42,  139 => 39,  133 => 36,  127 => 33,  121 => 30,  117 => 28,  112 => 27,  107 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Classification index{% endblock %}

{% block body %}
   <div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
                        <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
                            <h4 class=\"text-capitalize fw-500 breadcrumb-title\"style=\"color: #0074D9; font-weight: bold;\">Liste  Classifications</h4>
                            
                        </div>

                      

                    </div>

    <table border=\"2\" class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Domaine</th>
                <th>Archive</th>
               {# <th>actions</th> #}
            </tr>
        </thead>
        <tbody>
        {% for classification in classifications %}
            <tr>
               <div class=\"d-flex\">
                <td>{{ classification.id }}</td>
                </div>
                <div class=\"d-flex\">
                <td>{{ classification.Nom }}</td>
                </div>
                <div class=\"d-flex\">
                <td>{{ classification.domaine }}</td>
                </div>
                <div class=\"d-flex\">
                <td>{{ classification.archive ? 'Yes' : 'No' }}</td>
                </div>
                <td>
                 <a href=\"{{ path('app_classification_show', {'id': classification.id}) }}\">Show</a>
                    <a href=\"{{ path('app_classification_edit', {'id': classification.id}) }}\">Edit</a>
                                            {# <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                                            <li>
                                                <a href=\"{{ path('app_classification_show', {'id': classification.id}) }}\" class=\"show\">
                                                    <i class=\"uil uil-eye\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('app_classification_edit', {'id': classification.id}) }}\" class=\"edit\">
                                                    <i class=\"uil uil-edit\"></i>
                                                </a>
                                            </li>
                                            
                                            {# <li>
                                                <a href=\"{{ path('app_user_ban', {'id': user.id}) }}\" 
                                                    value=\"{{ csrf_token('delete' ~ user.id) }}\" class=\"remove\">
                                                    <i class=\"fa-solid fa-user-slash\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('app_user_unban', {'id': user.id}) }}\" class=\"edit\">
                                                    <i class=\"fa-brands fa-creative-commons-by\"></i>
                                                </a>
                                            </li> #}
                                            {# </ul> #} 
                                        </td>
                {# <td>
                    <a href=\"{{ path('app_classification_show', {'id': classification.id}) }}\">show</a>
                    <a href=\"{{ path('app_classification_edit', {'id': classification.id}) }}\">edit</a>
                </td> #}
           </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   {# <a href=\"{{ path('app_classification_new') }}\">Create new</a> #}
   {# <div class=\"action-btn\">
                        <a href=\"{{ path('app_classification_new') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \" >
                           <i class=\"las la-plus fs-16\"></i>Add New Classification</a>

                     </div> #}
    <a href=\"{{ path('app_classification_new') }}\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Add New Classification</span>
</a>
{% endblock %}
", "FrontOffice/classification/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\FrontOffice\\classification\\index.html.twig");
    }
}
