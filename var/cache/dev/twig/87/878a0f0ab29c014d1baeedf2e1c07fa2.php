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

/* baseFront.html.twig */
class __TwigTemplate_f3fb91d3b153878f9dcf25f1a009715c extends Template
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
            'Back' => [$this, 'block_Back'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'Bjs' => [$this, 'block_Bjs'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>
\t\t<meta content=\"\" name=\"description\">

\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo 5edma tr.png\" rel=\"icon"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t";
        // line 29
        $this->displayBlock('Back', $context, $blocks);
        // line 68
        echo "
\t\t";
        // line 69
        $this->displayBlock('css', $context, $blocks);
        // line 78
        echo "
\t\t<!-- Template Main CSS File -->
\t\t<link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header position-sticky\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alterpage");
        echo "\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img class=\"dark\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/logo 5edma tr.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t\t\t
\t\t\t\t</a>
\t<div>
\t</div>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto \" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alterpage");
        echo "\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown \">
\t\t\t\t\t\t\t<a  style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Annonces</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_index");
        echo "\">Annonce</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classification_index");
        echo "\">Classification</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t";
        // line 135
        echo "\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Projets</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        echo "\">Projet</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"\">Taches</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Metiers</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Metier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"\">SousMetier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Evenements</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_freelancer");
        echo "\">Evenement</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        echo "\">Categorie</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t<li >
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto \" href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show_na", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191)]), "html", null, true);
        echo "\">Edit account</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<li >
\t\t\t\t\t\t<a style=\"background-color:#0077B6; \" class=\"getstarted scrollto \" href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Sign out</a>
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t
\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav><!-- .navbar --></body>
</html></div></header><!-- End Header --><main id=\"main\"> ";
        // line 201
        $this->displayBlock('body', $context, $blocks);
        echo "</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\">

";
        // line 299
        echo "
<div class=\"container\" >
\t<div class=\"copyright\">
\t\t&copy; Copyright
\t\t<strong>
\t\t\t<span>Khedma</span>
\t\t</strong>. All Rights Reserved
\t</div>
\t<div class=\"credits\">
\t\t<!-- All the links in the footer should remain intact. -->
\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
\t\tDesigned by<a href=\"\"> LEGENDS TEAM</a>
\t</div>
</div></footer><!-- End Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
<i class=\"bi bi-arrow-up-short\"></i></a>";
        // line 315
        $this->displayBlock('Bjs', $context, $blocks);
        // line 362
        $this->displayBlock('js', $context, $blocks);
        // line 372
        echo "<!-- Template Main JS File --><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/main.js"), "html", null, true);
        echo "\"></script></body></html>
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

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_Back($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Back"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Back"));

        // line 30
        echo "\t\t\t<!-- inject:css-->

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/daterangepicker.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fontawesome.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/footable.standalone.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/leaflet.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/line-awesome.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/magnific-popup.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/select2.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/slick.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/star-rating-svg.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/trumbowyg.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/wickedpicker.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 70
        echo "\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/aos/aos.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
\t\t\t<link href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 201
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 315
    public function block_Bjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bjs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bjs"));

        // line 316
        echo "<!-- inject:js-->
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- endinject-->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 362
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 363
        echo "<!-- Vendor JS Files -->
<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 370,  708 => 369,  704 => 368,  700 => 367,  696 => 366,  692 => 365,  688 => 364,  685 => 363,  675 => 362,  663 => 361,  659 => 360,  655 => 359,  651 => 358,  647 => 357,  643 => 356,  639 => 355,  635 => 354,  631 => 353,  627 => 352,  623 => 351,  619 => 350,  615 => 349,  611 => 348,  607 => 347,  603 => 346,  599 => 345,  595 => 344,  591 => 343,  587 => 342,  583 => 341,  579 => 340,  575 => 339,  571 => 338,  567 => 337,  563 => 336,  559 => 335,  555 => 334,  551 => 333,  547 => 332,  543 => 331,  539 => 330,  535 => 329,  531 => 328,  527 => 327,  523 => 326,  519 => 325,  515 => 324,  511 => 323,  507 => 322,  503 => 321,  499 => 320,  495 => 319,  491 => 318,  487 => 317,  484 => 316,  474 => 315,  456 => 201,  444 => 76,  440 => 75,  436 => 74,  432 => 73,  428 => 72,  424 => 71,  421 => 70,  411 => 69,  399 => 66,  394 => 64,  389 => 62,  384 => 60,  379 => 58,  374 => 56,  369 => 54,  364 => 52,  359 => 50,  354 => 48,  349 => 46,  344 => 44,  339 => 42,  334 => 40,  329 => 38,  324 => 36,  319 => 34,  314 => 32,  310 => 30,  300 => 29,  280 => 9,  267 => 372,  265 => 362,  263 => 315,  245 => 299,  240 => 201,  230 => 194,  224 => 191,  213 => 183,  207 => 180,  186 => 162,  164 => 143,  154 => 135,  144 => 111,  138 => 108,  125 => 98,  114 => 90,  110 => 89,  98 => 80,  94 => 78,  92 => 69,  89 => 68,  87 => 29,  74 => 19,  70 => 18,  61 => 11,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<meta content=\"\" name=\"description\">

\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link  href=\"{{ asset('/img/logo 5edma tr.png\" rel=\"icon') }}\">
\t\t<link href=\"{{ asset('FrontOffice/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t{% block Back %}
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

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
\t\t{% endblock %}

\t\t{% block css %}
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/aos/aos.css\" rel=\"stylesheet') }}\">
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('FrontOffice/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}

\t\t<!-- Template Main CSS File -->
\t\t<link href=\"{{ asset('FrontOffice/css/style.css') }}\" rel=\"stylesheet\">
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header position-sticky\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"{{ path('app_alterpage') }}\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img class=\"dark\" src=\"{{ asset('BackOffice/img/logo 5edma tr.png') }}\" alt=\"logo\">
\t\t\t\t\t
\t\t\t\t</a>
\t<div>
\t</div>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto \" href=\"{{ path('app_alterpage') }}\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown \">
\t\t\t\t\t\t\t<a  style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Annonces</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_annonce_index') }}\">Annonce</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_classification_index') }}\">Classification</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t{# <li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Metiers</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_metier_index') }}\">Metier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_sous_metier_index') }}\">Sous Metier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> #}
\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Projets</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_projet_index') }}\">Projet</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"\">Taches</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Metiers</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_front') }}\">Metier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"\">SousMetier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t\t<li style=\"color:#0077B6;\" class=\"dropdown\">
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" href=\"\">
\t\t\t\t\t\t\t\t<span>Evenements</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_event_freelancer') }}\">Evenement</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto\" href=\"{{ path('app_categorie_index') }}\">Categorie</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t<li >
\t\t\t\t\t\t\t<a style=\"color:#0077B6;\" class=\"nav-link scrollto \" href=\"{{ path('app_user_show_na', {'id': app.user.id}) }}\">Edit account</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<li >
\t\t\t\t\t\t<a style=\"background-color:#0077B6; \" class=\"getstarted scrollto \" href=\"{{ path('app_logout') }}\">Sign out</a>
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t
\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav><!-- .navbar --></body>
</html></div></header><!-- End Header --><main id=\"main\"> {% block body %}{% endblock %}</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\">

{# <div class=\"footer-top\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"{{ asset('/img/logo 5edma tr.png') }}\" alt=\"\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>
\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t<div class=\"social-links mt-3\">
\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">About us</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Terms of service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Privacy policy</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t<h4>Our Services</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Web Design</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Web Development</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Product Management</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Marketing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t<a href=\"#\">Graphic Design</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t<p>
\t\t\t\t\tA108 Rue des Glyines
\t\t\t\t\t<br>
\t\t\t\t\tEzzahra, TN 2034<br>
\t\t\t\t\tXXX
\t\t\t\t\t<br><br>
\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t+216 27272727<br>
\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\tbloodbond@gmail.com<br>
\t\t\t\t</p>

\t\t\t</div>

\t\t</div>
\t</div>
</div> #}

<div class=\"container\" >
\t<div class=\"copyright\">
\t\t&copy; Copyright
\t\t<strong>
\t\t\t<span>Khedma</span>
\t\t</strong>. All Rights Reserved
\t</div>
\t<div class=\"credits\">
\t\t<!-- All the links in the footer should remain intact. -->
\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
\t\tDesigned by<a href=\"\"> LEGENDS TEAM</a>
\t</div>
</div></footer><!-- End Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
<i class=\"bi bi-arrow-up-short\"></i></a>{% block Bjs %}
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
<!-- endinject-->{% endblock %}{% block js %}
<!-- Vendor JS Files -->
<script src=\"{{ asset('FrontOffice/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/aos/aos.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/glightbox/js/glightbox.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/vendor/php-email-form/validate.js') }}\"></script>

{% endblock %}<!-- Template Main JS File --><script src=\"{{ asset('FrontOffice/js/main.js') }}\"></script></body></html>
", "baseFront.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\baseFront.html.twig");
    }
}
