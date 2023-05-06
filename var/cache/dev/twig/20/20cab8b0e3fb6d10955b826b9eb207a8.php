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

/* BackOffice/user/show.html.twig */
class __TwigTemplate_587f6f5e067d0cdf86c4ba7d5f54ce3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/user/show.html.twig", 1);
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

        echo "Show User";
        
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
  
                        <div class=\"col-12 mt-25\">
                           <div class=\"card banner-feature banner-feature--7 position-relative border-0 mb-0\">
                              <div class=\"d-flex justify-content-center\">
                                 <div class=\"card-body py-25 px-30\">
                                    <div class=\"div\">
                                       <h4 class=\"banner-feature__heading\">You can view the user's details</h4>
                                       <p class=\"banner-feature__para \">You can navigate to the edit page by clicking this button</p>
                                       <a class=\"btn btn-primary mt-15 btn-md\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"edit\" style=\"background:#37474F;\"> Edit User </a>
                                      
                                    </div>
                                    <div class=\"banner-feature__shape position-absolute\">
                                       <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/User research-rafiki.png"), "html", null, true);
        echo "\" alt=\"img\" style=\"max-width:20%;margin-left:900px;\">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                 <div class=\"card\">
                 <div class=\"row\">
                      <div class=\"col\">
                            <div class=\"card-body\">
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-user\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Nom</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-user\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Prenom</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
                                </div>


                            </div>
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-primary content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-envelope\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>E-mail</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
        echo "</span>
                                </div>

                            </div>
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-phone-volume\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>CIN</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "cin", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-phone-volume\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Role</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "role", [], "any", false, false, false, 84), "html", null, true);
        echo "</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-warning content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-calendar\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Telephone</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "telephone", [], "any", false, false, false, 96), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                             <div class=\"application-task d-flex align-items-center\">

                                <div class=\"application-task-icon wh-60 bg-opacity-warning content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-map-location-dot\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Adresse</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "adresse", [], "any", false, false, false, 107), "html", null, true);
        echo "</span>
                            </div>

                            </div>

                        </div>
                      </div>

                      <div class=\"col\">
                            <div class=\"card-body\">
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-solid fa-signal\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Github UserName</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "githubUsername", [], "any", false, false, false, 124), "html", null, true);
        echo "</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-circle-check\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Verification Status</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 136
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "isVerified", [], "any", false, false, false, 136)) ? ("Yes") : ("No"));
        echo "</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-circle-check\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Archive Status</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">";
        // line 148
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 148, $this->source); })()), "archive", [], "any", false, false, false, 148)) ? ("Yes") : ("No"));
        echo "</span>
                                </div>

                            </div>

                            </div>
                      </div>
                  </div>
    </div>              


                 
    
</div>
<br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 148,  250 => 136,  235 => 124,  215 => 107,  201 => 96,  186 => 84,  171 => 72,  157 => 61,  142 => 49,  128 => 38,  107 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Show User{% endblock %}

{% block body %}

<div class=\"container-fluid\">
  
                        <div class=\"col-12 mt-25\">
                           <div class=\"card banner-feature banner-feature--7 position-relative border-0 mb-0\">
                              <div class=\"d-flex justify-content-center\">
                                 <div class=\"card-body py-25 px-30\">
                                    <div class=\"div\">
                                       <h4 class=\"banner-feature__heading\">You can view the user's details</h4>
                                       <p class=\"banner-feature__para \">You can navigate to the edit page by clicking this button</p>
                                       <a class=\"btn btn-primary mt-15 btn-md\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"edit\" style=\"background:#37474F;\"> Edit User </a>
                                      
                                    </div>
                                    <div class=\"banner-feature__shape position-absolute\">
                                       <img src=\"{{ asset('BackOffice/img/User research-rafiki.png') }}\" alt=\"img\" style=\"max-width:20%;margin-left:900px;\">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                 <div class=\"card\">
                 <div class=\"row\">
                      <div class=\"col\">
                            <div class=\"card-body\">
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-user\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Nom</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.nom }}</span>
                                </div>
                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-user\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Prenom</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.prenom }}</span>
                                </div>


                            </div>
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-primary content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-envelope\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>E-mail</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.email }}</span>
                                </div>

                            </div>
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-phone-volume\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>CIN</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.cin }}</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-phone-volume\" style=\"color:#ffffff;\"></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Role</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.role }}</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-warning content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-calendar\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Telephone</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.telephone }}</span>
                                </div>
                            </div>

                             <div class=\"application-task d-flex align-items-center\">

                                <div class=\"application-task-icon wh-60 bg-opacity-warning content-center\" style=\"background:#A40E1C;\">
                                    <i class=\"fa-solid fa-map-location-dot\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Adresse</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.adresse }}</span>
                            </div>

                            </div>

                        </div>
                      </div>

                      <div class=\"col\">
                            <div class=\"card-body\">
                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-secondary content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-solid fa-signal\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Github UserName</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.githubUsername }}</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-circle-check\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Verification Status</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.isVerified ? 'Yes' : 'No' }}</span>
                                </div>

                            </div>

                            <div class=\"application-task d-flex align-items-center mb-25\">

                                <div class=\"application-task-icon wh-60 bg-opacity-success content-center\" style=\"background:#37474F;\">
                                    <i class=\"fa-regular fa-circle-check\" style=\"color:#ffffff;\" ></i>
                                </div>
                                <div class=\"application-task-content\">
                                    <h4>Archive Status</h4>
                                    <span class=\"text-light fs-14 mt-1 text-capitalize\">{{ user.archive ? 'Yes' : 'No' }}</span>
                                </div>

                            </div>

                            </div>
                      </div>
                  </div>
    </div>              


                 
    
</div>
<br>
{% endblock %}", "BackOffice/user/show.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\user\\show.html.twig");
    }
}
