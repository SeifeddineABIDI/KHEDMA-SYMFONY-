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

/* FrontOffice/user/show.html.twig */
class __TwigTemplate_db9118ff30909983b14ef7cc32c1aa1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/show.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/user/show.html.twig", 1);
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
        echo " 
         <div class=\"container-fluid\">
            <div class=\"profile-content mb-50\">
               <div class=\"row\">
                  <div class=\"col-lg-12\">

                     <div class=\"breadcrumb-main\">

                     </div>

                  </div>
                  <div class=\"col-xxl-3 col-md-4  \">
                     <aside class=\"profile-sider\">
                        <!-- Profile Acoount -->
                        <div class=\"card mb-25\">
                           <div class=\"card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0\">

                              <div class=\"account-profile\">
                                 <div class=\"ap-img w-100 d-flex justify-content-center\">
                                    <!-- Profile picture image-->
                                    <img class=\"ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "image", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"profile\">
                                 </div>
                                 <div class=\"ap-nameAddress pb-3 pt-1\">
                                    <h5 class=\"ap-nameAddress__title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        echo "</h5>
                                    <h5 class=\"ap-nameAddress__title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "role", [], "any", false, false, false, 30), "html", null, true);
        echo "</h5>
                                    <p class=\"ap-nameAddress__subTitle fs-14 m-0\">
                                       <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/map-pin.svg"), "html", null, true);
        echo "\" alt=\"map-pin\" class=\"svg\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        echo "
                                    </p>
                                 </div>
                                 <div class=\"ap-button button-group d-flex justify-content-center flex-wrap\">

                                    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_na", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-default btn-squared text-capitalize  px-25\" style=\"background:#A40E1C;\">
                                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/user-plus.svg"), "html", null, true);
        echo "\" alt=\"user-plus\" class=\"svg\">
                                       Edit Profile
                                    </a>





                                 </div>
                              </div>

                              <div class=\"card-footer mt-20 pt-20 pb-20 px-0 bg-transparent\">
                                 <div class=\"profile-overview d-flex justify-content-between flex-wrap\">
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">2</h6>
                                       <span class=\"po-details__sTitle\">Blood Donation</span>
                                    </div>
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">3,257</h6>
                                       <span class=\"po-details__sTitle\">Points</span>
                                    </div>
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">2</h6>
                                       <span class=\"po-details__sTitle\">Articles</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Profile Acoount End -->

                        <!-- Profile User Bio -->
                        <div class=\"card mb-25\">

                           <div class=\"user-info border-bottom\">
                              <div class=\"card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3\">
                                 <div class=\"profile-header-title\">
                                    Contact info
                                 </div>
                              </div>
                              <div class=\"card-body pt-md-1 pt-0\">
                                 <div class=\"user-content-info\">
                                    <p class=\"user-content-info__item\">
                                       <img class=\"svg\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/mail.svg"), "html", null, true);
        echo "\" alt=\"mail\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), "html", null, true);
        echo " 
                                    </p>
                                    <p class=\"user-content-info__item\">
                                       <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/phone.svg"), "html", null, true);
        echo "\" alt=\"phone\" class=\"svg\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), "html", null, true);
        echo "
                                       
                                    </p>

                                 </div>
                              </div>
                           </div>

                           <div class=\"db-social\">
                              <div class=\"card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3\">
                                 <div class=\"profile-header-title\">
                                    Social Profiles
                                 </div>
                              </div>
                              <div class=\"card-body pt-md-1 pt-0\">
                                 <ul class=\"db-social-parent mb-0\">
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-facebook hover-facebook wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-facebook-f\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-twitter hover-twitter wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-twitter\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-ruby hover-ruby  wh-44 fs-18\" href=\"#\">
                                          <i class=\"las la-basketball-ball\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-instagram hover-instagram wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-instagram\"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- Profile User Bio End -->
                     </aside>
                  </div>

                  <div class=\"col-xxl-9 col-md-8\">
                     <!-- Tab Menu -->
                     <div class=\"ap-tab ap-tab-header\">
                        <div class=\"ap-tab-header__img\">
                           <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/cover.png"), "html", null, true);
        echo "\" alt=\"ap-header\" class=\"img-fluid w-100\">
                        </div>
                        <div class=\"ap-tab-wrapper\">
                           <ul class=\"nav px-25 ap-tab-main\" id=\"ap-tab\" role=\"tablist\">
                              <li class=\"nav-item\">
                                 <a class=\"nav-link active\" id=\"ap-overview-tab\" data-bs-toggle=\"pill\" href=\"#ap-overview\" role=\"tab\" aria-selected=\"true\">Overview</a>
                              </li>
                              <li class=\"nav-item\">
                                 <a class=\"nav-link\" id=\"timeline-tab\" data-bs-toggle=\"pill\" href=\"#timeline\" role=\"tab\" aria-selected=\"false\">Timeline</a>
                              </li>
                              <li class=\"nav-item\">
                                 <a class=\"nav-link\" id=\"activity-tab\" data-bs-toggle=\"pill\" href=\"#activity\" role=\"tab\" aria-selected=\"false\">Activity</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- Tab Menu End -->
                     <div class=\"tab-content mt-25\" id=\"ap-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"ap-overview\" role=\"tabpanel\" aria-labelledby=\"ap-overview-tab\">
                           <div class=\"ap-content-wrapper\">
                              <div class=\"row\">
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 1 -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>3,257</h1>
                                             <p>Orders</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-success\"><i class=\"las la-arrow-up\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart8\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 1 End -->
                                 </div>
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 2 End  -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>\$72,572</h1>
                                             <p>Total Revenue</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-success\"><i class=\"las la-arrow-up\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart9\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 2 End  -->
                                 </div>
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 3 -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>1,274</h1>
                                             <p>product sold</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-danger\"><i class=\"las la-arrow-down\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart10\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 3 End -->
                                 </div>


                                 <div class=\"col-lg-12\">
                                    <!-- Product Table -->
                                    <div class=\"card mt-25 mb-40\">
                                       <div class=\"card-header text-capitalize px-md-25 px-3\">
                                          <h6>Donations History</h6>
                                          <div class=\"dropdown\">
                                             <a href=\"#\" role=\"button\" id=\"products\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                                <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/more-horizontal.svg"), "html", null, true);
        echo "\" alt=\"more-horizontal\" class=\"svg\">
                                             </a>
                                             <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"products\">
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"card-body p-0\">
                                          <div class=\"ap-product\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table\">
                                                   <thead>
                                                      <tr>
                                                         <th scope=\"col\">Donation Date</th>
                                                         <th scope=\"col\">Facility</th>
                                                         <th scope=\"col\">Patient</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Product Table End -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"timeline\" role=\"tabpanel\" aria-labelledby=\"timeline-tab\">

                        </div>
                        <div class=\"tab-pane fade\" id=\"activity\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
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
        return "FrontOffice/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 274,  246 => 132,  193 => 84,  185 => 81,  139 => 38,  135 => 37,  125 => 32,  120 => 30,  116 => 29,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
 
         <div class=\"container-fluid\">
            <div class=\"profile-content mb-50\">
               <div class=\"row\">
                  <div class=\"col-lg-12\">

                     <div class=\"breadcrumb-main\">

                     </div>

                  </div>
                  <div class=\"col-xxl-3 col-md-4  \">
                     <aside class=\"profile-sider\">
                        <!-- Profile Acoount -->
                        <div class=\"card mb-25\">
                           <div class=\"card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0\">

                              <div class=\"account-profile\">
                                 <div class=\"ap-img w-100 d-flex justify-content-center\">
                                    <!-- Profile picture image-->
                                    <img class=\"ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary\" src=\"{{ asset('uploads/Profiles/' ~ app.user.image) }}\" alt=\"profile\">
                                 </div>
                                 <div class=\"ap-nameAddress pb-3 pt-1\">
                                    <h5 class=\"ap-nameAddress__title\">{{ user.nom }}</h5>
                                    <h5 class=\"ap-nameAddress__title\">{{ user.role }}</h5>
                                    <p class=\"ap-nameAddress__subTitle fs-14 m-0\">
                                       <img src=\"{{ asset('BackOffice/img/svg/map-pin.svg') }}\" alt=\"map-pin\" class=\"svg\">{{ user.adresse }}
                                    </p>
                                 </div>
                                 <div class=\"ap-button button-group d-flex justify-content-center flex-wrap\">

                                    <a href=\"{{ path('app_user_edit_na', {'id': user.id}) }}\" class=\"btn btn-primary btn-default btn-squared text-capitalize  px-25\" style=\"background:#A40E1C;\">
                                        <img src=\"{{ asset('BackOffice/img/svg/user-plus.svg') }}\" alt=\"user-plus\" class=\"svg\">
                                       Edit Profile
                                    </a>





                                 </div>
                              </div>

                              <div class=\"card-footer mt-20 pt-20 pb-20 px-0 bg-transparent\">
                                 <div class=\"profile-overview d-flex justify-content-between flex-wrap\">
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">2</h6>
                                       <span class=\"po-details__sTitle\">Blood Donation</span>
                                    </div>
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">3,257</h6>
                                       <span class=\"po-details__sTitle\">Points</span>
                                    </div>
                                    <div class=\"po-details\">
                                       <h6 class=\"po-details__title pb-1\">2</h6>
                                       <span class=\"po-details__sTitle\">Articles</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Profile Acoount End -->

                        <!-- Profile User Bio -->
                        <div class=\"card mb-25\">

                           <div class=\"user-info border-bottom\">
                              <div class=\"card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3\">
                                 <div class=\"profile-header-title\">
                                    Contact info
                                 </div>
                              </div>
                              <div class=\"card-body pt-md-1 pt-0\">
                                 <div class=\"user-content-info\">
                                    <p class=\"user-content-info__item\">
                                       <img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/mail.svg') }}\" alt=\"mail\">{{ user.email }} 
                                    </p>
                                    <p class=\"user-content-info__item\">
                                       <img src=\"{{ asset('BackOffice/img/svg/phone.svg') }}\" alt=\"phone\" class=\"svg\">{{ user.telephone }}
                                       
                                    </p>

                                 </div>
                              </div>
                           </div>

                           <div class=\"db-social\">
                              <div class=\"card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3\">
                                 <div class=\"profile-header-title\">
                                    Social Profiles
                                 </div>
                              </div>
                              <div class=\"card-body pt-md-1 pt-0\">
                                 <ul class=\"db-social-parent mb-0\">
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-facebook hover-facebook wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-facebook-f\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-twitter hover-twitter wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-twitter\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-ruby hover-ruby  wh-44 fs-18\" href=\"#\">
                                          <i class=\"las la-basketball-ball\"></i>
                                       </a>
                                    </li>
                                    <li class=\"db-social-parent__item\">
                                       <a class=\"color-instagram hover-instagram wh-44 fs-18\" href=\"#\">
                                          <i class=\"lab la-instagram\"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- Profile User Bio End -->
                     </aside>
                  </div>

                  <div class=\"col-xxl-9 col-md-8\">
                     <!-- Tab Menu -->
                     <div class=\"ap-tab ap-tab-header\">
                        <div class=\"ap-tab-header__img\">
                           <img src=\"{{ asset('BackOffice/img/cover.png') }}\" alt=\"ap-header\" class=\"img-fluid w-100\">
                        </div>
                        <div class=\"ap-tab-wrapper\">
                           <ul class=\"nav px-25 ap-tab-main\" id=\"ap-tab\" role=\"tablist\">
                              <li class=\"nav-item\">
                                 <a class=\"nav-link active\" id=\"ap-overview-tab\" data-bs-toggle=\"pill\" href=\"#ap-overview\" role=\"tab\" aria-selected=\"true\">Overview</a>
                              </li>
                              <li class=\"nav-item\">
                                 <a class=\"nav-link\" id=\"timeline-tab\" data-bs-toggle=\"pill\" href=\"#timeline\" role=\"tab\" aria-selected=\"false\">Timeline</a>
                              </li>
                              <li class=\"nav-item\">
                                 <a class=\"nav-link\" id=\"activity-tab\" data-bs-toggle=\"pill\" href=\"#activity\" role=\"tab\" aria-selected=\"false\">Activity</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- Tab Menu End -->
                     <div class=\"tab-content mt-25\" id=\"ap-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"ap-overview\" role=\"tabpanel\" aria-labelledby=\"ap-overview-tab\">
                           <div class=\"ap-content-wrapper\">
                              <div class=\"row\">
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 1 -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>3,257</h1>
                                             <p>Orders</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-success\"><i class=\"las la-arrow-up\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart8\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 1 End -->
                                 </div>
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 2 End  -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>\$72,572</h1>
                                             <p>Total Revenue</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-success\"><i class=\"las la-arrow-up\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart9\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 2 End  -->
                                 </div>
                                 <div class=\"col-lg-4 mb-25\">
                                    <!-- Card 3 -->
                                    <div class=\"ap-po-details radius-xl d-flex justify-content-between\">
                                       <div>





                                          <div class=\"overview-content\">
                                             <h1>1,274</h1>
                                             <p>product sold</p>
                                             <div class=\"ap-po-details-time\">
                                                <span class=\"color-danger\"><i class=\"las la-arrow-down\"></i>
                                                   <strong>25%</strong>
                                                </span>
                                                <small>Since last week</small>
                                             </div>
                                          </div>

                                       </div>
                                       <div class=\"ap-po-timeChart\">
                                          <div class=\"overview-single__chart d-md-flex align-items-end\">
                                             <div class=\"parentContainer\">


                                                <div>
                                                   <canvas id=\"mychart10\"></canvas>
                                                </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Card 3 End -->
                                 </div>


                                 <div class=\"col-lg-12\">
                                    <!-- Product Table -->
                                    <div class=\"card mt-25 mb-40\">
                                       <div class=\"card-header text-capitalize px-md-25 px-3\">
                                          <h6>Donations History</h6>
                                          <div class=\"dropdown\">
                                             <a href=\"#\" role=\"button\" id=\"products\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                                <img src=\"{{ asset('BackOffice/img/svg/more-horizontal.svg') }}\" alt=\"more-horizontal\" class=\"svg\">
                                             </a>
                                             <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"products\">
                                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"card-body p-0\">
                                          <div class=\"ap-product\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table\">
                                                   <thead>
                                                      <tr>
                                                         <th scope=\"col\">Donation Date</th>
                                                         <th scope=\"col\">Facility</th>
                                                         <th scope=\"col\">Patient</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Product Table End -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"timeline\" role=\"tabpanel\" aria-labelledby=\"timeline-tab\">

                        </div>
                        <div class=\"tab-pane fade\" id=\"activity\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

{% endblock %}
", "FrontOffice/user/show.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\FrontOffice\\user\\show.html.twig");
    }
}
