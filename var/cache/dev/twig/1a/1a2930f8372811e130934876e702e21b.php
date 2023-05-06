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

/* BackOffice/user/new.html.twig */
class __TwigTemplate_719e6cd2e07aff51645e810211ac88c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/user/new.html.twig", 1);
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

        echo "New User";
        
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
<div class=\"container-fluid\">
    <div class=\"row\">
                  <div class=\"col-xxl-12 mb-25\">
                     <div class=\"card banner-feature--18 d-flex\" style=\"background:#37474F;\">
                        <div class=\"container-fluid\">
                           <div class=\"row\">
                              <div class=\"col-xl-6\">
                                 <div class=\"card-body px-25\">
                                    <h1 class=\"banner-feature__heading color-white\">Create a new user</h1>
                                    <p class=\"banner-feature__para color-white\">This is the interface where you can add new users. 
                                    Please make sure to fill out all required fields and follow the form validation rules to ensure that
                                     the user data is entered correctly.
                                    </p>
                                    <div class=\"d-flex justify-content-sm-start justify-content-center\" >
                                        <a class=\"btn btn-primary mt-15 btn-md\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
        echo "\" class=\"edit\" style=\"background:#A40E1C;\">
                                            Users List
                                        </a>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"col-xl-6\">
                                 <div class=\"banner-feature__shape px-md-25 px-25 py-sm-0 pt-15 pb-30 d-flex justify-content-sm-end justify-content-center\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/add-user.png"), "html", null, true);
        echo "\" alt=\"img\" class=\"svg\" style=\"width:500px; \">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-xxl-12 mb-25\">
                        <div class=\"card banner-feature--18 d-flex\" style=\"background:#FFFFFF;\">
                        <div class=\"container-fluid\">
                        <BR>
                            ";
        // line 40
        echo twig_include($this->env, $context, "BackOffice/user/_form.html.twig", ["button_label" => "Add user"]);
        echo "
                        </div>  
                        </div>  
                  </div>  
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  116 => 29,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row\">
                  <div class=\"col-xxl-12 mb-25\">
                     <div class=\"card banner-feature--18 d-flex\" style=\"background:#37474F;\">
                        <div class=\"container-fluid\">
                           <div class=\"row\">
                              <div class=\"col-xl-6\">
                                 <div class=\"card-body px-25\">
                                    <h1 class=\"banner-feature__heading color-white\">Create a new user</h1>
                                    <p class=\"banner-feature__para color-white\">This is the interface where you can add new users. 
                                    Please make sure to fill out all required fields and follow the form validation rules to ensure that
                                     the user data is entered correctly.
                                    </p>
                                    <div class=\"d-flex justify-content-sm-start justify-content-center\" >
                                        <a class=\"btn btn-primary mt-15 btn-md\" href=\"{{ path('app_user_list') }}\" class=\"edit\" style=\"background:#A40E1C;\">
                                            Users List
                                        </a>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"col-xl-6\">
                                 <div class=\"banner-feature__shape px-md-25 px-25 py-sm-0 pt-15 pb-30 d-flex justify-content-sm-end justify-content-center\">
                                    <img src=\"{{asset('BackOffice/img/add-user.png') }}\" alt=\"img\" class=\"svg\" style=\"width:500px; \">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-xxl-12 mb-25\">
                        <div class=\"card banner-feature--18 d-flex\" style=\"background:#FFFFFF;\">
                        <div class=\"container-fluid\">
                        <BR>
                            {{ include('BackOffice/user/_form.html.twig', {'button_label': 'Add user'}) }}
                        </div>  
                        </div>  
                  </div>  
    </div>
</div>

{% endblock %}
", "BackOffice/user/new.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\BackOffice\\user\\new.html.twig");
    }
}
