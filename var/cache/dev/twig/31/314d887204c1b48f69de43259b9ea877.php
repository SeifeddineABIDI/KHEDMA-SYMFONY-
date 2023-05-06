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

/* BackOffice/user/index.html.twig */
class __TwigTemplate_10b4a0c06c71ddc8574ec7773e4eb7fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/user/index.html.twig", 1);
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

        echo "Users List";
        
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
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
               <div class=\"col-lg-12\">

                    <div class=\"breadcrumb-main user-member justify-content-sm-between \">
                        <div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
                        
                                <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
                                    <h4 class=\"text-capitalize fw-500 breadcrumb-title\">users list </h4>                           
                                </div>
                                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isArchived" => (isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 16, $this->source); })()), "isVerified" => (isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 16, $this->source); })()), "seach-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\" method=\"GET\" class=\"d-flex align-items-center user-member__form my-sm-0 my-2\">
                                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/search.svg"), "html", null, true);
        echo "\" alt=\"search\" class=\"svg\">
                                    <input id=\"search-input\" class=\"form-control me-sm-2 border-0 box-shadow-none\" type=\"search\" name=\"search-query\" placeholder=\"Search Users\" aria-label=\"Search\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
                                </form>
                            
                        </div>
                            <div class=\"project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15\">
                              <p class=\"fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10\">Is Verified :</p>
                              <div class=\"project-tap order-project-tap global-shadow\">
                                 <ul class=\"nav px-1\" id=\"ap-tab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link";
        // line 27
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 27, $this->source); })()) == "All")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => "All", "isArchived" => (isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 28, $this->source); })()), "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 28, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 29
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 29, $this->source); })()) == "All")) ? ("true") : ("false"));
        echo "\">All</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link";
        // line 32
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 32, $this->source); })()) == "Yes")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => "Yes", "isArchived" => (isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 33, $this->source); })()), "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 33, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 34
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 34, $this->source); })()) == "Yes")) ? ("true") : ("false"));
        echo "\">Yes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link";
        // line 37
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 37, $this->source); })()) == "No")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => "No", "isArchived" => (isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 38, $this->source); })()), "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 38, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 39
        echo ((((isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 39, $this->source); })()) == "No")) ? ("true") : ("false"));
        echo "\">No</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                               <div class=\"project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15\">
                              <p class=\"fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10\">Is Archived :</p>
                              <div class=\"project-tap order-project-tap global-shadow\">
                                 <ul class=\"nav px-1\" id=\"ap-tab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link";
        // line 49
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 49, $this->source); })()) == "All")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => (isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 50, $this->source); })()), "isArchived" => "All", "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 51
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 51, $this->source); })()) == "All")) ? ("true") : ("false"));
        echo "\">All</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link";
        // line 54
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 54, $this->source); })()) == "Yes")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => (isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 55, $this->source); })()), "isArchived" => "Yes", "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 55, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 56
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 56, $this->source); })()) == "Yes")) ? ("true") : ("false"));
        echo "\">Yes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link";
        // line 59
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 59, $this->source); })()) == "No")) ? (" active") : (""));
        echo "\" 
                                        href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["isVerified" => (isset($context["isVerified"]) || array_key_exists("isVerified", $context) ? $context["isVerified"] : (function () { throw new RuntimeError('Variable "isVerified" does not exist.', 60, $this->source); })()), "isArchived" => "No", "search-query" => (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 60, $this->source); })())]), "html", null, true);
        echo "\"
                                        aria-selected=\"";
        // line 61
        echo ((((isset($context["isArchived"]) || array_key_exists("isArchived", $context) ? $context["isArchived"] : (function () { throw new RuntimeError('Variable "isArchived" does not exist.', 61, $this->source); })()) == "No")) ? ("true") : ("false"));
        echo "\">No</a>
                                 </ul>
                              </div>
                           </div>
                     <div class=\"action-btn\">
                        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_create");
        echo "\" class=\"btn px-15 btn-primary\"  style=\"background:#A40E1C;\">
                           <i class=\"las la-plus fs-16\"></i>Ajouter utilisateur</a>

                     </div>
                    </div>

               </div>
            </div>
            
            <div class=\"row\">
               <div class=\"col-lg-12\">
                  <div class=\"userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30\" >
                     <div class=\"table-responsive\" >
                        <table id=\"user-table\" class=\"table mb-0 table-borderless \" >
                           <thead >
                              <tr class=\"userDatatable-header\" >
                                 <th>
                                    <span class=\"userDatatable-title\">Email</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Nom</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Prenom</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">CIN</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Role</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Adresse</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title float-end\">Telephone</span>
                                 </th>
                                 ";
        // line 106
        echo "                                 <th>
                                    <span class=\"userDatatable-title\">GitHub UserName</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Is Verified</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Is Archived</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title float-end\">Actions</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 122
            echo "                                    <tr>
                                        <td>
                                            <div class=\"d-flex\">
                                                  ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 125), "html", null, true);
            echo "      
                                            </div>
                                        </td>
                                            <td>
                                            <div class=\"d-flex\">
                                                   ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 135), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 140), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 145), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 150), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 155), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        ";
            // line 163
            echo "                                        <td>
                                            <div class=\"d-flex\">
                                                ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "githubUsername", [], "any", false, false, false, 165), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
<span class=\"bg-opacity-";
            // line 170
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isverified", [], "any", false, false, false, 170)) ? ("success color-success") : ("danger color-danger"));
            echo " rounded-pill userDatatable-content-status active\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isverified", [], "any", false, false, false, 170)) ? ("Yes") : ("No"));
            echo "</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"userDatatable-content d-inline-block\">
                                            
<span class=\"bg-opacity-";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "archive", [], "any", false, false, false, 176)) ? ("success color-success") : ("danger color-danger"));
            echo " rounded-pill userDatatable-content-status active\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "archive", [], "any", false, false, false, 176)) ? ("Yes") : ("No"));
            echo "</span>

                                                ";
            // line 179
            echo "                                            </div>
                                        </td>
                                        <td>
                                            <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                                            <li>
                                                <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\" class=\"view\">
                                                    <i class=\"uil uil-eye\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 189)]), "html", null, true);
            echo "\" class=\"edit\">
                                                    <i class=\"uil uil-edit\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_archive", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 194)]), "html", null, true);
            echo "\" 
                                                    value=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 195))), "html", null, true);
            echo "\" class=\"remove\">
                                                    <i class=\"fa-solid fa-box-archive\"></i>
                                                </a>
                                            </li>
                                            ";
            // line 210
            echo "                                            </ul>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 214
            echo "                                    <tr>
                                        <td colspan=\"15\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                           </tbody>

                        </table>
                     </div>
                     <nav class=\"dm-page \">
                     <ul class=\"dm-pagination d-flex\">
                     <li class=\"\">
                        <div class=\"paging-option\">
                            ";
        // line 227
        echo "                            ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 227, $this->source); })()) > 1)) {
            // line 228
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 228, $this->source); })()) - 1)]), "html", null, true);
            echo "\"class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-left\"></span></a>
                            ";
        }
        // line 230
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 230, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 231
            echo "                                ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 231, $this->source); })()))) {
                // line 232
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["page" => $context["page"]]), "html", null, true);
                echo "\"class=\"dm-pagination__link active \"><span class=\"page-number\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span></a>
                                ";
            } else {
                // line 234
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["page" => $context["page"]]), "html", null, true);
                echo "\"class=\"dm-pagination__link \"><span class=\"page-number\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span></a>
                                
                                ";
            }
            // line 237
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                            ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 238, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 238, $this->source); })()))) {
            // line 239
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 239, $this->source); })()) + 1)]), "html", null, true);
            echo "\" class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-right\"></span></a>
                            ";
        }
        // line 241
        echo "                        </div>
                     </li>
                      ";
        // line 252
        echo "                     </ul>
                     </nav>
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
        return "BackOffice/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 252,  474 => 241,  468 => 239,  465 => 238,  459 => 237,  450 => 234,  442 => 232,  439 => 231,  434 => 230,  428 => 228,  425 => 227,  415 => 218,  406 => 214,  398 => 210,  391 => 195,  387 => 194,  379 => 189,  371 => 184,  364 => 179,  357 => 176,  346 => 170,  338 => 165,  334 => 163,  328 => 155,  320 => 150,  312 => 145,  304 => 140,  296 => 135,  288 => 130,  280 => 125,  275 => 122,  270 => 121,  253 => 106,  213 => 66,  205 => 61,  201 => 60,  197 => 59,  191 => 56,  187 => 55,  183 => 54,  177 => 51,  173 => 50,  169 => 49,  156 => 39,  152 => 38,  148 => 37,  142 => 34,  138 => 33,  134 => 32,  128 => 29,  124 => 28,  120 => 27,  108 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users List{% endblock %}

{% block body %}
        <div class=\"container-fluid\">
            <div class=\"row\">
               <div class=\"col-lg-12\">

                    <div class=\"breadcrumb-main user-member justify-content-sm-between \">
                        <div class=\" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper\">
                        
                                <div class=\"d-flex align-items-center user-member__title justify-content-center me-sm-25\">
                                    <h4 class=\"text-capitalize fw-500 breadcrumb-title\">users list </h4>                           
                                </div>
                                <form action=\"{{ path('app_user_list', {'isArchived': isArchived, 'isVerified': isVerified, 'seach-query': searchQuery}) }}\" method=\"GET\" class=\"d-flex align-items-center user-member__form my-sm-0 my-2\">
                                    <img src=\"{{ asset('BackOffice/img/svg/search.svg') }}\" alt=\"search\" class=\"svg\">
                                    <input id=\"search-input\" class=\"form-control me-sm-2 border-0 box-shadow-none\" type=\"search\" name=\"search-query\" placeholder=\"Search Users\" aria-label=\"Search\" value=\"{{ searchQuery }}\">
                                </form>
                            
                        </div>
                            <div class=\"project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15\">
                              <p class=\"fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10\">Is Verified :</p>
                              <div class=\"project-tap order-project-tap global-shadow\">
                                 <ul class=\"nav px-1\" id=\"ap-tab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link{{ isVerified == 'All' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': 'All', 'isArchived': isArchived, 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isVerified == 'All' ? 'true' : 'false' }}\">All</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link{{ isVerified == 'Yes' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': 'Yes', 'isArchived': isArchived, 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isVerified == 'Yes' ? 'true' : 'false' }}\">Yes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link{{ isVerified == 'No' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': 'No', 'isArchived': isArchived, 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isVerified == 'No' ? 'true' : 'false' }}\">No</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                               <div class=\"project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15\">
                              <p class=\"fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10\">Is Archived :</p>
                              <div class=\"project-tap order-project-tap global-shadow\">
                                 <ul class=\"nav px-1\" id=\"ap-tab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link{{ isArchived == 'All' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': isVerified, 'isArchived': 'All', 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isArchived == 'All' ? 'true' : 'false' }}\">All</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link{{ isArchived == 'Yes' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': isVerified, 'isArchived': 'Yes', 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isArchived == 'Yes' ? 'true' : 'false' }}\">Yes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                       <a class=\"nav-link{{ isArchived == 'No' ? ' active' }}\" 
                                        href=\"{{ path('app_user_list', {'isVerified': isVerified, 'isArchived': 'No', 'search-query': searchQuery}) }}\"
                                        aria-selected=\"{{ isArchived == 'No' ? 'true' : 'false' }}\">No</a>
                                 </ul>
                              </div>
                           </div>
                     <div class=\"action-btn\">
                        <a href=\"{{ path('app_user_create') }}\" class=\"btn px-15 btn-primary\"  style=\"background:#A40E1C;\">
                           <i class=\"las la-plus fs-16\"></i>Ajouter utilisateur</a>

                     </div>
                    </div>

               </div>
            </div>
            
            <div class=\"row\">
               <div class=\"col-lg-12\">
                  <div class=\"userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30\" >
                     <div class=\"table-responsive\" >
                        <table id=\"user-table\" class=\"table mb-0 table-borderless \" >
                           <thead >
                              <tr class=\"userDatatable-header\" >
                                 <th>
                                    <span class=\"userDatatable-title\">Email</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Nom</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Prenom</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">CIN</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Role</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Adresse</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title float-end\">Telephone</span>
                                 </th>
                                 {# <th>
                                    <span class=\"userDatatable-title\">Image</span>
                                 </th> #}
                                 <th>
                                    <span class=\"userDatatable-title\">GitHub UserName</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Is Verified</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title\">Is Archived</span>
                                 </th>
                                 <th>
                                    <span class=\"userDatatable-title float-end\">Actions</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>
                                            <div class=\"d-flex\">
                                                  {{ user.email }}      
                                            </div>
                                        </td>
                                            <td>
                                            <div class=\"d-flex\">
                                                   {{ user.nom }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.prenom }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.cin }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.role }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.adresse }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.telephone }}
                                            </div>
                                        </td>
                                        {# <td>
                                            <div class=\"d-flex\">
                                                {{ user.image }}
                                            </div>
                                        </td> #}
                                        <td>
                                            <div class=\"d-flex\">
                                                {{ user.githubUsername }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
<span class=\"bg-opacity-{{ user.isverified ? 'success color-success' : 'danger color-danger' }} rounded-pill userDatatable-content-status active\">{{ user.isverified ? 'Yes' : 'No' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"userDatatable-content d-inline-block\">
                                            
<span class=\"bg-opacity-{{ user.archive ? 'success color-success' : 'danger color-danger' }} rounded-pill userDatatable-content-status active\">{{ user.archive ? 'Yes' : 'No' }}</span>

                                                {# {{ user.archive ? 'Yes' : 'No' }} #}
                                            </div>
                                        </td>
                                        <td>
                                            <ul class=\"orderDatatable_actions mb-0 d-flex flex-wrap\">
                                            <li>
                                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"view\">
                                                    <i class=\"uil uil-eye\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"edit\">
                                                    <i class=\"uil uil-edit\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('app_user_archive', {'id': user.id}) }}\" 
                                                    value=\"{{ csrf_token('delete' ~ user.id) }}\" class=\"remove\">
                                                    <i class=\"fa-solid fa-box-archive\"></i>
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
                                            </ul>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"15\">no records found</td>
                                    </tr>
                                {% endfor %}
                           </tbody>

                        </table>
                     </div>
                     <nav class=\"dm-page \">
                     <ul class=\"dm-pagination d-flex\">
                     <li class=\"\">
                        <div class=\"paging-option\">
                            {# add pagination links #}
                            {% if currentPage > 1 %}
                                <a href=\"{{ path('app_user_list', {'page': currentPage - 1}) }}\"class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-left\"></span></a>
                            {% endif %}
                            {% for page in 1..totalPages %}
                                {% if page == currentPage %}
                                <a href=\"{{ path('app_user_list', {'page': page}) }}\"class=\"dm-pagination__link active \"><span class=\"page-number\">{{page}}</span></a>
                                {% else %}
                                <a href=\"{{ path('app_user_list', {'page': page}) }}\"class=\"dm-pagination__link \"><span class=\"page-number\">{{page}}</span></a>
                                
                                {% endif %}
                            {% endfor %}
                            {% if currentPage < totalPages %}
                                <a href=\"{{ path('app_user_list', {'page': currentPage + 1}) }}\" class=\"dm-pagination__link pagination-control\"><span class=\"la la-angle-right\"></span></a>
                            {% endif %}
                        </div>
                     </li>
                      {# <li class=\"dm-pagination__item\">
                                 <div class=\"paging-option\">
                                    <select name=\"page-number\" class=\"page-selection\">
                                       <option value=\"20\">20/page</option>
                                       <option value=\"40\">40/page</option>
                                       <option value=\"60\">60/page</option>
                                    </select>
                                 </div>
                              </li> #}
                     </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
{% endblock %}
", "BackOffice/user/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\BackOffice\\user\\index.html.twig");
    }
}
