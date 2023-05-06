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

/* FrontOffice/user/edit.html.twig */
class __TwigTemplate_d4b857be85956294c93b1cc010d32ff6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/user/edit.html.twig", 1);
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

        echo "User";
        
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
        echo "         <div class=\"profile-setting \">
            <div class=\"container-fluid\">
               <div class=\"row\">
                  <div class=\"col-lg-12\">

                     <div class=\"breadcrumb-main\">

                     </div>

                  </div>
                  <div class=\"col-xxl-3 col-lg-4 col-sm-5\">
                     <!-- Profile Acoount -->
                     <div class=\"card mb-25\">
                        <div class=\"card-body text-center p-0\">

                           <div class=\"account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center \">
                              <div class=\"ap-img mb-20 pro_img_wrapper\">
                                 <input id=\"file-upload\" type=\"file\" name=\"fileUpload\" class=\"d-none\">
                                 <label for=\"file-upload\">
                                    <!-- Profile picture image-->
                                    <img class=\"ap-img__main rounded-circle wh-120\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "image", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"profile\">
                                    <span class=\"cross\" id=\"remove_pro_pic\">
                                       <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/camera.svg"), "html", null, true);
        echo "\" alt=\"camera\" class=\"svg\">
                                    </span>
                                 </label>
                              </div>
                              <div class=\"ap-nameAddress pb-3\">
                                 <h5 class=\"ap-nameAddress__title\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                                 <h5 class=\"ap-nameAddress__title\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "role", [], "any", false, false, false, 34), "html", null, true);
        echo "</h5>
                                 <p class=\"ap-nameAddress__subTitle fs-14 m-0\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "adresse", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                              </div>
                           </div>
                           <div class=\"ps-tab p-20 pb-25\">
                              <div class=\"nav flex-column text-start\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                 <a class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-selected=\"true\">
                                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/user.svg"), "html", null, true);
        echo "\" alt=\"user\" class=\"svg\">Edit profile</a>
                                 <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/settings.svg"), "html", null, true);
        echo "\" alt=\"setting\" class=\"svg\">Account
                                    setting</a>
                                 <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/key.svg"), "html", null, true);
        echo "\" alt=\"key\" class=\"svg\">change password</a>
                                 <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-selected=\"false\">
                                    <img class=\"svg\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/users.svg"), "html", null, true);
        echo "\" alt=\"users\">social profiles</a>
                                 <a class=\"nav-link\" id=\"v-pills-notification-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-notification\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/bell.svg"), "html", null, true);
        echo "\" alt=\"bell\" class=\"svg\">notification</a>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- Profile Acoount End -->
                  </div>
                  <div class=\"col-xxl-9 col-lg-8 col-sm-7\">
                     <div class=\"as-cover\">
                        <div class=\"as-cover__imgWrapper\">
                           <input id=\"file-upload1\" type=\"file\" name=\"fileUpload\" class=\"d-none\">
                           <label for=\"file-upload1\">
                              <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/app_header.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"w-100\">

                           </label>
                        </div>
                     </div>
                     <div class=\"mb-50\">
                        <div class=\"tab-content\" id=\"v-pills-tabContent\">
                           <div class=\"tab-pane fade  show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                              <!-- Edit Profile -->
                              <div class=\"edit-profile mt-25\">
                                 <div class=\"card\">
                                    <div class=\"card-header px-sm-25 px-3\">
                                       <div class=\"edit-profile__title\">
                                          <h6>Edit Profile</h6>
                                          <span class=\"fs-13 color-light fw-400\">Set up your personal
                                             information</span>
                                       </div>
                                    </div>
                                    <div class=\"card-body\">
                                       <div class=\"row justify-content-center\">
                                          <div class=\"col-xxl-6\">
                                             <div class=\"edit-profile__body mx-xl-20\">
                                                ";
        // line 85
        echo twig_include($this->env, $context, "FrontOffice/user/_edit_form.html.twig", ["button_label" => "Update"]);
        echo "
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Edit Profile End -->
                           </div>
                           <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
                              <!-- Edit Profile -->
  
                              <!-- Edit Profile End -->
                           </div>

                        </div>
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
        return "FrontOffice/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 85,  177 => 63,  161 => 50,  156 => 48,  151 => 46,  145 => 43,  140 => 41,  131 => 35,  127 => 34,  123 => 33,  115 => 28,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
         <div class=\"profile-setting \">
            <div class=\"container-fluid\">
               <div class=\"row\">
                  <div class=\"col-lg-12\">

                     <div class=\"breadcrumb-main\">

                     </div>

                  </div>
                  <div class=\"col-xxl-3 col-lg-4 col-sm-5\">
                     <!-- Profile Acoount -->
                     <div class=\"card mb-25\">
                        <div class=\"card-body text-center p-0\">

                           <div class=\"account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center \">
                              <div class=\"ap-img mb-20 pro_img_wrapper\">
                                 <input id=\"file-upload\" type=\"file\" name=\"fileUpload\" class=\"d-none\">
                                 <label for=\"file-upload\">
                                    <!-- Profile picture image-->
                                    <img class=\"ap-img__main rounded-circle wh-120\" src=\"{{ asset('uploads/Profiles/' ~ app.user.image) }}\" alt=\"profile\">
                                    <span class=\"cross\" id=\"remove_pro_pic\">
                                       <img src=\"{{ asset('BackOffice/img/svg/camera.svg') }}\" alt=\"camera\" class=\"svg\">
                                    </span>
                                 </label>
                              </div>
                              <div class=\"ap-nameAddress pb-3\">
                                 <h5 class=\"ap-nameAddress__title\">{{ user.nom }}</h5>
                                 <h5 class=\"ap-nameAddress__title\">{{ user.role }}</h5>
                                 <p class=\"ap-nameAddress__subTitle fs-14 m-0\">{{ user.adresse }}</p>
                              </div>
                           </div>
                           <div class=\"ps-tab p-20 pb-25\">
                              <div class=\"nav flex-column text-start\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                 <a class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-selected=\"true\">
                                    <img src=\"{{ asset('BackOffice/img/svg/user.svg') }}\" alt=\"user\" class=\"svg\">Edit profile</a>
                                 <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"{{ asset('BackOffice/img/svg/settings.svg') }}\" alt=\"setting\" class=\"svg\">Account
                                    setting</a>
                                 <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"{{ asset('BackOffice/img/svg/key.svg') }}\" alt=\"key\" class=\"svg\">change password</a>
                                 <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-selected=\"false\">
                                    <img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/users.svg') }}\" alt=\"users\">social profiles</a>
                                 <a class=\"nav-link\" id=\"v-pills-notification-tab\" data-bs-toggle=\"pill\" href=\"#v-pills-notification\" role=\"tab\" aria-selected=\"false\">
                                    <img src=\"{{ asset('BackOffice/img/svg/bell.svg') }}\" alt=\"bell\" class=\"svg\">notification</a>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- Profile Acoount End -->
                  </div>
                  <div class=\"col-xxl-9 col-lg-8 col-sm-7\">
                     <div class=\"as-cover\">
                        <div class=\"as-cover__imgWrapper\">
                           <input id=\"file-upload1\" type=\"file\" name=\"fileUpload\" class=\"d-none\">
                           <label for=\"file-upload1\">
                              <img src=\"{{ asset('BackOffice/img/app_header.png') }}\" alt=\"image\" class=\"w-100\">

                           </label>
                        </div>
                     </div>
                     <div class=\"mb-50\">
                        <div class=\"tab-content\" id=\"v-pills-tabContent\">
                           <div class=\"tab-pane fade  show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                              <!-- Edit Profile -->
                              <div class=\"edit-profile mt-25\">
                                 <div class=\"card\">
                                    <div class=\"card-header px-sm-25 px-3\">
                                       <div class=\"edit-profile__title\">
                                          <h6>Edit Profile</h6>
                                          <span class=\"fs-13 color-light fw-400\">Set up your personal
                                             information</span>
                                       </div>
                                    </div>
                                    <div class=\"card-body\">
                                       <div class=\"row justify-content-center\">
                                          <div class=\"col-xxl-6\">
                                             <div class=\"edit-profile__body mx-xl-20\">
                                                {{ include('FrontOffice/user/_edit_form.html.twig', {'button_label': 'Update'}) }}
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Edit Profile End -->
                           </div>
                           <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
                              <!-- Edit Profile -->
  
                              <!-- Edit Profile End -->
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
{% endblock %}", "FrontOffice/user/edit.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\user\\edit.html.twig");
    }
}
