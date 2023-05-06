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

/* FrontOffice/annonce/index.html.twig */
class __TwigTemplate_e315c1385d374e2cd44801348c767554 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/annonce/index.html.twig", 1);
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

        echo "Annonce index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo " 
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/pagination.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
    <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
        <h4 class=\"text-capitalize fw-500 breadcrumb-title\" style=\"color: #0074D9; font-weight: bold;\">Liste Annonces</h4>

    </div>
";
        // line 118
        echo "

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
        // line 133
        echo "        </tr>
    </thead>
    <tbody>
       ";
        // line 136
        if (twig_test_empty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 136, $this->source); })()))) {
            // line 137
            echo "        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
        
    ";
        } else {
            // line 142
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 143
                echo "        <tr>
            <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 144), "html", null, true);
                echo "</td>
            <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 145), "html", null, true);
                echo "</td>
           
            <td>";
                // line 147
                ((twig_get_attribute($this->env, $this->source, $context["annonce"], "date", [], "any", false, false, false, 147)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "date", [], "any", false, false, false, 147), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
            <td>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "classification", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148), "html", null, true);
                echo "</td>
            <td>";
                // line 149
                echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "archive", [], "any", false, false, false, 149)) ? ("Yes") : ("No"));
                echo "</td>
             <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 150), "nom", [], "any", false, false, false, 150), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "user", [], "any", false, false, false, 150), "prenom", [], "any", false, false, false, 150), "html", null, true);
                echo "</td>
            <td>

            
                    <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                echo "\">Show</a>
                    <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\">Edit</a>
               
                ";
                // line 169
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo " 
    ";
        }
        // line 174
        echo "    </tbody>
</table>


 ";
        // line 181
        echo "




";
        // line 189
        echo "


";
        // line 199
        echo "

 <a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_new");
        echo "\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Add New Annonce</span>
</a>



<a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_all_pdf");
        echo "\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Télécharger PDF</span>
</a>


";
        // line 215
        echo "
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
        // line 296
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 296, $this->source); })()));
        echo "
                    
                                     </div>
";
        // line 309
        echo "
";
        // line 322
        echo " ";
        // line 323
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
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"titre\" >titre</label>
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
                                            <option value=\"nom\">titre</option>
                                         
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-7\">
                                        <div class=\"input-group\">
                                            <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Annonces\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
        // line 396
        echo "       
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 396,  322 => 323,  320 => 322,  317 => 309,  311 => 296,  228 => 215,  220 => 207,  211 => 201,  207 => 199,  202 => 189,  195 => 181,  189 => 174,  185 => 172,  177 => 169,  172 => 155,  168 => 154,  159 => 150,  155 => 149,  151 => 148,  147 => 147,  142 => 145,  138 => 144,  135 => 143,  130 => 142,  123 => 137,  121 => 136,  116 => 133,  100 => 118,  91 => 40,  88 => 39,  78 => 38,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Annonce index{% endblock %}
{# {% block stylesheets %}

    <style>
      
 .pagination {
  display: inline-block;
  margin-top: 20px;
  text-align: center;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd;
  margin: 0 4px;
  border-radius: 5px;
}

.pagination a.active {
  background-color: #8DD3BB;
  color: white;
  border: 1px solid #8DD3BB;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
}

       
    </style>
{% endblock %} #}

{% block body %}
 
<link href=\"{{ asset('FrontOffice/css/pagination.css') }}\" rel=\"stylesheet\">
<div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
    <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
        <h4 class=\"text-capitalize fw-500 breadcrumb-title\" style=\"color: #0074D9; font-weight: bold;\">Liste Annonces</h4>

    </div>
{# 
  <div class=\"d-flex justify-content-center\">
       <div class=\"sidebar-search\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <button class=\"btn-search\"><i class=\"fas fa-search\"></i></button>
    <input type=\"text\" name=\"search\" id=\"search\" class=\"input-search\" placeholder=\"Type to Search...\">
  </div>    
</div>
        </div>
        </div> 
    <style>
      .table tbody tr:hover{
        background-color:#ddd;
      }
    search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: #44509c;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: #646fb3;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
    </style> 

</div> #}


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

            
                    <a href=\"{{ path('app_annonce_show', {'id': annonce.id}) }}\">Show</a>
                    <a href=\"{{ path('app_annonce_edit', {'id': annonce.id}) }}\">Edit</a>
               
                {# <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                    <li>
                        <a href=\"{{ path('app_annonce_show', {'id': annonce.id}) }}\" class=\"show\">
                             <i class=\"uil uil-eye\"></i> 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_annonce_edit', {'id': annonce.id}) }}\" class=\"edit\">
                         <i class=\"uil uil-edit\"></i> 
                        </a>
                    </li>
                </ul> #}
            </td>
        </tr>
        {% endfor %}
 
    {% endif %}
    </tbody>
</table>


 {# <div class=\"pagination\" style=\"margin-top: 20px; text-align: center;\">
 {{ knp_pagination_render(annonces) }}  
</div> #}





{# <a href=\"{{ path('app_annonce_new') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
    Add New Annonce
</a> #}



{# <div class=\"add-button\">
  <a href=\"{{ path('app_annonce_new') }}\" class=\"btn btn-primary\">Add new annonce</a>
</div>

<div class=\"pdf-button\">
  <a href=\"#\" class=\"btn btn-primary\">Telecharger pdf</a>
</div> #}


 <a href=\"{{ path('app_annonce_new') }}\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Add New Annonce</span>
</a>



<a href=\"{{ path('export_all_pdf') }}\" class=\"btn btn-default btn-squared btn-transparent-info btn-blue\">
    <span style=\"color: #0074D9; font-weight: bold;\">Télécharger PDF</span>
</a>


{# <a href=\"{{ path('export_all_pdf') }}\" class=\"btn btn-info btn-default btn-squared btn-transparent-info \">
    Télécharger PDF
</a> #}

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
{# <form action=\"{{ path('app_annonce_index') }}\" method=\"get\">
    <label for=\"tri\">Trier par:</label>
    <select name=\"tri\" id=\"tri\">
        <option value=\"titre\">Titre</option>
        <option value=\"date\">Date</option>
        <option value=\"classification\">Classification</option>
        <option value=\"archive\">Archive</option>
    </select>
    <button type=\"submit\">Trier</button>
</form> #}

{# <a href=\"{{ path('app_annonce_trier') }}\">Trier par titre</a>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
    \$(document).ready(function(){
      \$(\"#search\").on(\"keyup\", function() {
        var value = \$(this).val().toLowerCase();
        \$(\"#myTable tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
     });
    });
  });
</script>   #}
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
                                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"titre\" >titre</label>
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
                                            <option value=\"nom\">titre</option>
                                         
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-7\">
                                        <div class=\"input-group\">
                                            <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Annonces\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
{% endblock %}
", "FrontOffice/annonce/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\FrontOffice\\annonce\\index.html.twig");
    }
}
