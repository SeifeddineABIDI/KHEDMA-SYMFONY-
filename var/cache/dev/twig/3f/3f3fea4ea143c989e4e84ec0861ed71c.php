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

/* metier/index.html.twig */
class __TwigTemplate_b18f59190dfb4c086a8b4b265269b75c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metier/index.html.twig", 1);
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

        echo "Metier index";
        
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
        echo " ";
        // line 7
        echo "
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"page-header\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                    </ol>
                </nav>
            </div>
             
           
                <div class=\"card\">
                  <div style=\"display: flex\">
                            <div class=\"col-md-5\">
                            </div>
                            <form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\" >
                                <div class=\"form-group col-md-4\" style=\"display: flex; margin-top: 11px;margin-left: 50px;margin-right: 14px;padding-bottom: 7px\">
    
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"id\">id</label>
                                    </div>
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"nom\" >nom</label>
                                    </div>
    
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"type\" >type</label>
                                    </div>
                                      <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"description\" >description</label>
                                    </div>
    
                                    <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
                                </div>
                            </form>
    
                        </div></div>
        <div class=\"row \">
            <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div style=\"display: flex\">
                            <div class=\"col-md-5\">
                            </div>
                           
    
                        </div>
    
                        <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                            <li class=\"nav-item w-100\">
                                <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                    <div class=\"form-group col-md-5\">
                                        <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                        <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #788175; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                            <option value=\"\">Choisir un Critére</option>
                                            <option value=\"id\">id</option>
                                            <option value=\"nom\">nom</option>
                                            <option value=\"type\">type</option>
                                            <option value=\"description\">description</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-7\">
                                        <div class=\"input-group\">
                                            <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Events\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-sm btn-primary\" type=\"Submit\" >Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 90
        echo "   <h1 style=\"text-align: center \"><span style=\"color: #0077B6;\">les Metiers</span></h1>
<a href=\"/metier/stat/sta\">Stat</a>
    <table border=\"2\" class=\"table\">
    
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Description</th>
                <th>Image</th>
               
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metiers"]) || array_key_exists("metiers", $context) ? $context["metiers"] : (function () { throw new RuntimeError('Variable "metiers" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 107
            echo "            <tr>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "type", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "description", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Metiers/" . twig_get_attribute($this->env, $this->source, $context["metier"], "image", [], "any", false, false, false, 112))), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"></td>
                
                <td>
    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_qr", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\"  class=\"btn btn-outline-primary\">Obtenir le code QR</a></td>
                <td>
                    <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_generator", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">pdf</a>
                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_local_map", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\">map</a>
             
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_new");
        echo "\">Ajouter Metier</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "metier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 132,  258 => 129,  249 => 125,  239 => 120,  235 => 119,  231 => 118,  227 => 117,  222 => 115,  216 => 112,  212 => 111,  208 => 110,  204 => 109,  200 => 108,  197 => 107,  192 => 106,  174 => 90,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Metier index{% endblock %}

{% block body %}
 {# here starts trie and find   #}

    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"page-header\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                    </ol>
                </nav>
            </div>
             
           
                <div class=\"card\">
                  <div style=\"display: flex\">
                            <div class=\"col-md-5\">
                            </div>
                            <form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\" >
                                <div class=\"form-group col-md-4\" style=\"display: flex; margin-top: 11px;margin-left: 50px;margin-right: 14px;padding-bottom: 7px\">
    
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"id\">id</label>
                                    </div>
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"nom\" >nom</label>
                                    </div>
    
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"type\" >type</label>
                                    </div>
                                      <div class=\"form-check\">
                                        <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"description\" >description</label>
                                    </div>
    
                                    <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
                                </div>
                            </form>
    
                        </div></div>
        <div class=\"row \">
            <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div style=\"display: flex\">
                            <div class=\"col-md-5\">
                            </div>
                           
    
                        </div>
    
                        <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                            <li class=\"nav-item w-100\">
                                <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                    <div class=\"form-group col-md-5\">
                                        <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                        <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #788175; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                            <option value=\"\">Choisir un Critére</option>
                                            <option value=\"id\">id</option>
                                            <option value=\"nom\">nom</option>
                                            <option value=\"type\">type</option>
                                            <option value=\"description\">description</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-7\">
                                        <div class=\"input-group\">
                                            <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Events\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-sm btn-primary\" type=\"Submit\" >Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# here ends trie and find   #}
   <h1 style=\"text-align: center \"><span style=\"color: #0077B6;\">les Metiers</span></h1>
<a href=\"/metier/stat/sta\">Stat</a>
    <table border=\"2\" class=\"table\">
    
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Description</th>
                <th>Image</th>
               
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for metier in metiers %}
            <tr>
                <td>{{ metier.id }}</td>
                <td>{{ metier.nom }}</td>
                <td>{{ metier.type }}</td>
                <td>{{ metier.description }}</td>
                <td><img src=\"{{asset ('uploads/Metiers/' ~ metier.image)}}\" width=\"150px\" height=\"150px\"></td>
                
                <td>
    <a href=\"{{ path('app_metier_qr', {'id': metier.id}) }}\"  class=\"btn btn-outline-primary\">Obtenir le code QR</a></td>
                <td>
                    <a href=\"{{ path('app_metier_show', {'id': metier.id}) }}\">show</a>
                    <a href=\"{{ path('app_metier_edit', {'id': metier.id}) }}\">edit</a>
                    <a href=\"{{ path('app_pdf_generator', {'id': metier.id}) }}\">pdf</a>
                    <a href=\"{{ path('app_local_map', {'id': metier.id}) }}\">map</a>
             
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_metier_new') }}\">Ajouter Metier</a>
{% endblock %}
", "metier/index.html.twig", "C:\\Users\\Safe\\Documents\\NetBeansProjects\\PIDEV-SYMFONY (1)\\templates\\metier\\index.html.twig");
    }
}
