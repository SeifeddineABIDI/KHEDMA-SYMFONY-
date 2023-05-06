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

/* reset_password/request.html.twig */
class __TwigTemplate_7fa3e3d49c37cadb37e74bf3f030d79c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">

<head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       <!-- endinject -->

    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
          <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 55
        echo "</head>

<body>
   <main class=\"main-content\">

      <div class=\"admin\">
         <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
               <div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
                  <div class=\"edit-profile\">
                     <div class=\"edit-profile__logos\">
                        <a href=\"index.html\">
                           <img class=\"dark\" src=\"img/logo-dark.png\" alt=\"\">
                           <img class=\"light\" src=\"img/logo-white.png\" alt=\"\">
                        </a>
                     </div>
                         ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 72
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                     <div class=\"card border-0\">
                        <div class=\"card-header\">
                           <div class=\"edit-profile__title\">
                              <h6>Reset Your Password?</h6>
                           </div>
                        </div>
                        <div class=\"card-body\">
                           <div class=\"edit-profile__body\">
                              <p>                Enter your email address and we will send you a
                link to reset your password.</p>
                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
                              <div class=\"form-group mb-20\">
                                  ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'row');
        echo "
                              </div>
                              <div class=\"d-flex\">
                                 <button class=\"btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn\">Send password reset email</button>
                              </div>
                ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
                           </div>
                        </div><!-- End: .card-body -->
                     </div><!-- End: .card -->
                  </div><!-- End: .edit-profile -->
               </div><!-- End: .col-xl-5 -->
            </div>
         </div>
      </div><!-- End: .admin-element  -->

   </main>
   <div id=\"overlayer\">
      <div class=\"loader-overlay\">
         <div class=\"dm-spin-dots spin-lg\">
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
         </div>
      </div>
   </div>
   <div class=\"enable-dark-mode dark-trigger\">
      <ul>
         <li>
            <a href=\"#\">
               <i class=\"uil uil-moon\"></i>
            </a>
         </li>
      </ul>
   </div>
                     ";
        // line 121
        $this->displayBlock('js', $context, $blocks);
        // line 172
        echo "</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Request!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "                           <!-- inject:css-->

            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/daterangepicker.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fontawesome.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/footable.standalone.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/leaflet.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/line-awesome.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/magnific-popup.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/select2.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/slick.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/star-rating-svg.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/trumbowyg.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/wickedpicker.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

            <!-- endinject -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo "  
                                                        <!-- inject:js-->
                                    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/script.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/main.js"), "html", null, true);
        echo "\"></script>
                                                    <!-- endinject-->
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 169,  495 => 168,  491 => 167,  487 => 166,  483 => 165,  479 => 164,  475 => 163,  471 => 162,  467 => 161,  463 => 160,  459 => 159,  455 => 158,  451 => 157,  447 => 156,  443 => 155,  439 => 154,  435 => 153,  431 => 152,  427 => 151,  423 => 150,  419 => 149,  415 => 148,  411 => 147,  407 => 146,  403 => 145,  399 => 144,  395 => 143,  391 => 142,  387 => 141,  383 => 140,  379 => 139,  375 => 138,  371 => 137,  367 => 136,  363 => 135,  359 => 134,  355 => 133,  351 => 132,  347 => 131,  343 => 130,  339 => 129,  335 => 128,  331 => 127,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  302 => 121,  288 => 51,  283 => 49,  278 => 47,  273 => 45,  268 => 43,  263 => 41,  258 => 39,  253 => 37,  248 => 35,  243 => 33,  238 => 31,  233 => 29,  228 => 27,  223 => 25,  218 => 23,  213 => 21,  208 => 19,  203 => 17,  199 => 15,  189 => 14,  170 => 6,  157 => 172,  155 => 121,  122 => 91,  114 => 86,  109 => 84,  97 => 74,  88 => 72,  84 => 71,  66 => 55,  64 => 14,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">

<head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Request!{% endblock %}</title>
       <!-- endinject -->

    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
          <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        {% block css %}
                           <!-- inject:css-->

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/daterangepicker.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/fontawesome.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/footable.standalone.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/leaflet.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/line-awesome.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/magnific-popup.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/MarkerCluster.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/select2.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/slick.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/star-rating-svg.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/trumbowyg.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/wickedpicker.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">

            <!-- endinject -->
        {% endblock %}
</head>

<body>
   <main class=\"main-content\">

      <div class=\"admin\">
         <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
               <div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
                  <div class=\"edit-profile\">
                     <div class=\"edit-profile__logos\">
                        <a href=\"index.html\">
                           <img class=\"dark\" src=\"img/logo-dark.png\" alt=\"\">
                           <img class=\"light\" src=\"img/logo-white.png\" alt=\"\">
                        </a>
                     </div>
                         {% for flash_error in app.flashes('reset_password_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
                     <div class=\"card border-0\">
                        <div class=\"card-header\">
                           <div class=\"edit-profile__title\">
                              <h6>Reset Your Password?</h6>
                           </div>
                        </div>
                        <div class=\"card-body\">
                           <div class=\"edit-profile__body\">
                              <p>                Enter your email address and we will send you a
                link to reset your password.</p>
                {{ form_start(requestForm) }}
                              <div class=\"form-group mb-20\">
                                  {{ form_row(requestForm.email) }}
                              </div>
                              <div class=\"d-flex\">
                                 <button class=\"btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn\">Send password reset email</button>
                              </div>
                {{ form_end(requestForm) }}
                           </div>
                        </div><!-- End: .card-body -->
                     </div><!-- End: .card -->
                  </div><!-- End: .edit-profile -->
               </div><!-- End: .col-xl-5 -->
            </div>
         </div>
      </div><!-- End: .admin-element  -->

   </main>
   <div id=\"overlayer\">
      <div class=\"loader-overlay\">
         <div class=\"dm-spin-dots spin-lg\">
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
            <span class=\"spin-dot badge-dot dot-primary\"></span>
         </div>
      </div>
   </div>
   <div class=\"enable-dark-mode dark-trigger\">
      <ul>
         <li>
            <a href=\"#\">
               <i class=\"uil uil-moon\"></i>
            </a>
         </li>
      </ul>
   </div>
                     {% block js %}  
                                                        <!-- inject:js-->
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/popper.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment/moment.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/accordion.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/apexcharts.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/autoComplete.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/Chart.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/daterangepicker.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/drawer.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicBadge.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicCheckbox.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/footable.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/google-chart.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.countdown.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.peity.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.markercluster.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/loader.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/message.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/muuri.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/notification.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/popover.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/select2.full.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/slick.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/trumbowyg.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/vendor_assets/js/wickedpicker.min.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/apexmain.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/charts.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/drag-drop.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/footable.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/full-calendar.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/googlemap-init.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/icon-loader.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/jvectormap-init.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/leaflet-init.js') }}\"></script>
                                    <script src=\"{{ asset('BackOffice/assets/theme_assets/js/main.js') }}\"></script>
                                    <script src=\"{{ asset('FrontOffice/js/script.js') }}\"></script>
                                    <script src=\"{{ asset('FrontOffice/js/main.js') }}\"></script>
                                                    <!-- endinject-->
                    {% endblock %}
</body>

</html>
", "reset_password/request.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\reset_password\\request.html.twig");
    }
}
