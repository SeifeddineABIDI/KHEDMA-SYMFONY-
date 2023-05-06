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

/* reset_password/check_email.html.twig */
class __TwigTemplate_3f1c63fda3ce4bda84d86dfc3d8530dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

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
        echo "        </head>

<body>
<main class=\"main-content\">
            <div class=\"banner-feature--14 card mb-25\">
               <div class=\"row justify-content-center\">
                  <div class=\"col-md-9\">
                     <div class=\"row align-items-center\">
                        <div class=\"col-md-6\">
                           <div class=\"card-body d-inline-block\">
                              <h1 class=\"d-flex\">Password Reset Email Sent</h1>
                              <p>If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
        This link will expire in ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 67, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 67, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 67), "ResetPasswordBundle"), "html", null, true);
        echo ".
                              </p>
<p>If you don't receive an email please check your spam folder<a class=\"btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">try again</a>.</p>
                           </div>
                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"banner-feature__shape mt-50 d-flex justify-content-end\">
                              <img src=\"BackOffice/img/svg/banne-group21.svg\" alt=\"img\" class=\"svg\">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </main>
                                 ";
        // line 82
        $this->displayBlock('js', $context, $blocks);
        // line 133
        echo "</body>

</html>";
        
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

    // line 82
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
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/script.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/main.js"), "html", null, true);
        echo "\"></script>
                                                    <!-- endinject-->
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 130,  440 => 129,  436 => 128,  432 => 127,  428 => 126,  424 => 125,  420 => 124,  416 => 123,  412 => 122,  408 => 121,  404 => 120,  400 => 119,  396 => 118,  392 => 117,  388 => 116,  384 => 115,  380 => 114,  376 => 113,  372 => 112,  368 => 111,  364 => 110,  360 => 109,  356 => 108,  352 => 107,  348 => 106,  344 => 105,  340 => 104,  336 => 103,  332 => 102,  328 => 101,  324 => 100,  320 => 99,  316 => 98,  312 => 97,  308 => 96,  304 => 95,  300 => 94,  296 => 93,  292 => 92,  288 => 91,  284 => 90,  280 => 89,  276 => 88,  272 => 87,  268 => 86,  264 => 85,  260 => 84,  247 => 82,  233 => 51,  228 => 49,  223 => 47,  218 => 45,  213 => 43,  208 => 41,  203 => 39,  198 => 37,  193 => 35,  188 => 33,  183 => 31,  178 => 29,  173 => 27,  168 => 25,  163 => 23,  158 => 21,  153 => 19,  148 => 17,  144 => 15,  134 => 14,  115 => 6,  103 => 133,  101 => 82,  85 => 69,  80 => 67,  66 => 55,  64 => 14,  53 => 6,  46 => 1,);
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
            <div class=\"banner-feature--14 card mb-25\">
               <div class=\"row justify-content-center\">
                  <div class=\"col-md-9\">
                     <div class=\"row align-items-center\">
                        <div class=\"col-md-6\">
                           <div class=\"card-body d-inline-block\">
                              <h1 class=\"d-flex\">Password Reset Email Sent</h1>
                              <p>If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
        This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
                              </p>
<p>If you don't receive an email please check your spam folder<a class=\"btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill\" href=\"{{ path('app_forgot_password_request') }}\">try again</a>.</p>
                           </div>
                        </div>
                        <div class=\"col-md-6\">
                           <div class=\"banner-feature__shape mt-50 d-flex justify-content-end\">
                              <img src=\"BackOffice/img/svg/banne-group21.svg\" alt=\"img\" class=\"svg\">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </main>
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

</html>", "reset_password/check_email.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\reset_password\\check_email.html.twig");
    }
}
