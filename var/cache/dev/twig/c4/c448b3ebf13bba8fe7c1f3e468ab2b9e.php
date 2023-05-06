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

/* security/login.html.twig */
class __TwigTemplate_2c3d2b7f6588c0e22a2b6d6d4e561310 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>

\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">


\t\t";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 58
        echo "

\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"img/favicon.png\">
\t\t<!-- Fonts -->
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v3.0.0/css/line.css\">
\t</head>

\t<body>
\t\t<main class=\"main-content\">
\t\t\t<form method=\"post\">
\t\t\t\t";
        // line 69
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "messageKey", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "messageData", [], "any", false, false, false, 70), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 72
        echo "
\t\t\t\t";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)) {
            // line 74
            echo "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "userIdentifier", [], "any", false, false, false, 76), "html", null, true);
            echo ",
\t\t\t\t\t\t<a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t<div class=\"admin\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
\t\t\t\t\t\t\t\t<div class=\"edit-profile\">
\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__logos\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"dark\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/logo 5edma tr.png"), "html", null, true);
        echo "\" alt=\"logo de khedma\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"light\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/logo 5edma tr.png"), "html", null, true);
        echo "\" alt=\"logo de khedma\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card border-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>Sign in Khedma</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin-condition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKeep me logged in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">forget password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSign In
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End: .card-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"px-20\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"social-connector social-connector__admin text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Or</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"admin-socialBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-dark google\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/google-Icon.svg"), "html", null, true);
        echo "\" alt=\"img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" radius-md wh-48 content-center facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center github\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-github\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"admin-topbar\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\tDon't have an account?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"color-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSign up
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End: .admin-topbar  -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .card -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End: .edit-profile -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: .col-xl-5 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End: .admin-element  -->

\t\t</main>
\t\t<div id=\"overlayer\">
\t\t\t<div class=\"loader-overlay\">
\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-danger\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"enable-dark-mode dark-trigger\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\"><i class=\"uil uil-moon\"></i></a></li>
\t\t\t</ul>

\t\t</div>

\t\t";
        // line 197
        $this->displayBlock('js', $context, $blocks);
        // line 248
        echo "
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 17
        echo "\t\t\t<!-- inject:css-->

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/daterangepicker.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fontawesome.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/footable.standalone.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/leaflet.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/line-awesome.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/magnific-popup.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/select2.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/slick.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/star-rating-svg.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/trumbowyg.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/wickedpicker.min.css"), "html", null, true);
        echo "\">

\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

\t\t<!-- endinject -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 198
        echo "\t\t\t<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "locale", [], "any", false, false, false, 198), "html", null, true);
        echo "\" async defer></script>
\t\t\t<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/captcha.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- inject:js-->
\t\t\t<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- endinject-->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 245,  590 => 244,  586 => 243,  582 => 242,  578 => 241,  574 => 240,  570 => 239,  566 => 238,  562 => 237,  558 => 236,  554 => 235,  550 => 234,  546 => 233,  542 => 232,  538 => 231,  534 => 230,  530 => 229,  526 => 228,  522 => 227,  518 => 226,  514 => 225,  510 => 224,  506 => 223,  502 => 222,  498 => 221,  494 => 220,  490 => 219,  486 => 218,  482 => 217,  478 => 216,  474 => 215,  470 => 214,  466 => 213,  462 => 212,  458 => 211,  454 => 210,  450 => 209,  446 => 208,  442 => 207,  438 => 206,  434 => 205,  430 => 204,  426 => 203,  422 => 202,  418 => 201,  413 => 199,  408 => 198,  398 => 197,  384 => 54,  378 => 51,  373 => 49,  368 => 47,  363 => 45,  358 => 43,  353 => 41,  348 => 39,  343 => 37,  338 => 35,  333 => 33,  328 => 31,  323 => 29,  318 => 27,  313 => 25,  308 => 23,  303 => 21,  298 => 19,  294 => 17,  284 => 16,  264 => 9,  250 => 248,  248 => 197,  209 => 161,  182 => 137,  164 => 121,  159 => 118,  145 => 107,  136 => 101,  120 => 88,  116 => 87,  107 => 80,  101 => 77,  97 => 76,  93 => 74,  91 => 73,  88 => 72,  82 => 70,  80 => 69,  67 => 58,  65 => 16,  58 => 11,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<title>
\t\t\t{% block title %}Login
\t\t\t{% endblock %}
\t\t</title>

\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">


\t\t{% block css %}
\t\t\t<!-- inject:css-->

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/daterangepicker.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/fontawesome.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/footable.standalone.min.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/leaflet.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/line-awesome.min.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/magnific-popup.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/MarkerCluster.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/select2.min.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/slick.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/star-rating-svg.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/trumbowyg.min.css') }}\">

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('BackOffice/assets/vendor_assets/css/wickedpicker.min.css') }}\">

\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{ asset('style.css') }}\">

\t\t<!-- endinject -->
\t\t{% endblock %}


\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"img/favicon.png\">
\t\t<!-- Fonts -->
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v3.0.0/css/line.css\">
\t</head>

\t<body>
\t\t<main class=\"main-content\">
\t\t\t<form method=\"post\">
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"admin\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
\t\t\t\t\t\t\t\t<div class=\"edit-profile\">
\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__logos\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"dark\" src=\"{{ asset('BackOffice/img/logo 5edma tr.png') }}\" alt=\"logo de khedma\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"light\" src=\"{{ asset('BackOffice/img/logo 5edma tr.png') }}\" alt=\"logo de khedma\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card border-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>Sign in Khedma</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email Address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin-condition\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKeep me logged in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_forgot_password_request') }}\">forget password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{# <div data-toggle=\"recaptcha\"></div> #}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSign In
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End: .card-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"px-20\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"social-connector social-connector__admin text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Or</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"admin-socialBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-dark google\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/google-Icon.svg') }}\" alt=\"img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" radius-md wh-48 content-center facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center github\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-github\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"admin-topbar\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\tDon't have an account?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"color-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSign up
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End: .admin-topbar  -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .card -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End: .edit-profile -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: .col-xl-5 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End: .admin-element  -->

\t\t</main>
\t\t<div id=\"overlayer\">
\t\t\t<div class=\"loader-overlay\">
\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-danger\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"enable-dark-mode dark-trigger\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\"><i class=\"uil uil-moon\"></i></a></li>
\t\t\t</ul>

\t\t</div>

\t\t{% block js %}
\t\t\t<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl={{app.request.locale}}\" async defer></script>
\t\t\t<script src=\"{{ asset('FrontOffice/js/captcha.js') }}\"></script>
\t\t\t<!-- inject:js-->
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/popper.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment/moment.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/accordion.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/apexcharts.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/autoComplete.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/Chart.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/daterangepicker.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/drawer.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicBadge.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicCheckbox.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/footable.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/google-chart.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.countdown.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.peity.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.markercluster.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/loader.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/message.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/muuri.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/notification.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/popover.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/select2.full.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/slick.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/trumbowyg.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/wickedpicker.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/apexmain.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/charts.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/drag-drop.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/footable.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/full-calendar.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/googlemap-init.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/icon-loader.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/jvectormap-init.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/leaflet-init.js') }}\"></script>
\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/main.js') }}\"></script>
\t\t\t<!-- endinject-->
\t\t{% endblock %}

\t</body>

</html>
", "security/login.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\security\\login.html.twig");
    }
}
