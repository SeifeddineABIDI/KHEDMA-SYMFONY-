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

/* newbase.html.twig */
class __TwigTemplate_3ce93106e172b7c1f925316f902bc251 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newbase.html.twig"));

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
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/favicon.png\" rel=\"icon"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/styles.css"), "html", null, true);
        echo "\">
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
\t\t<header id=\"header\" class=\"header fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img class=\"dark\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/khedma.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        echo "\">Projects</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 107
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 110
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
        // line 119
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
        // line 122
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
        // line 125
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t";
        // line 132
        echo "\t\t\t\t\t\t<i style=\"background:#A40E1C;\" class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 135
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "session", [], "any", false, false, false, 135), "get", [0 => "user"], "method", false, false, false, 135))) {
            // line 136
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"getstarted scrollto\" href=\"";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Sign out</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"getstarted scrollto\" href=\"";
            // line 141
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Log in</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 144
        echo "\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav><!-- .navbar --></body>
</html></div></header><!-- End Header --><main id=\"main\"> ";
        // line 147
        $this->displayBlock('body', $context, $blocks);
        echo "</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\">

<div class=\"footer-top\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/BBlogo.png"), "html", null, true);
        echo "\" alt=\"\">
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
</div>

<div class=\"container\">
\t<div class=\"copyright\">
\t\t&copy; Copyright
\t\t<strong>
\t\t\t<span>BloodBlond</span>
\t\t</strong>. All Rights Reserved
\t</div>
\t<div class=\"credits\">
\t\t<!-- All the links in the footer should remain intact. -->
\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> CODEX TEAM</a>
\t</div>
</div></footer><!-- End Footer --><a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
<i class=\"bi bi-arrow-up-short\"></i></a>";
        // line 261
        $this->displayBlock('Bjs', $context, $blocks);
        // line 308
        $this->displayBlock('js', $context, $blocks);
        // line 316
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stylenew.css"), "html", null, true);
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

    // line 147
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

    // line 261
    public function block_Bjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bjs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bjs"));

        // line 262
        echo "<!-- inject:js-->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- endinject-->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 308
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 309
        echo "<!-- Vendor JS Files -->
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "newbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 316,  762 => 315,  758 => 314,  754 => 313,  750 => 312,  746 => 311,  742 => 310,  739 => 309,  729 => 308,  717 => 307,  713 => 306,  709 => 305,  705 => 304,  701 => 303,  697 => 302,  693 => 301,  689 => 300,  685 => 299,  681 => 298,  677 => 297,  673 => 296,  669 => 295,  665 => 294,  661 => 293,  657 => 292,  653 => 291,  649 => 290,  645 => 289,  641 => 288,  637 => 287,  633 => 286,  629 => 285,  625 => 284,  621 => 283,  617 => 282,  613 => 281,  609 => 280,  605 => 279,  601 => 278,  597 => 277,  593 => 276,  589 => 275,  585 => 274,  581 => 273,  577 => 272,  573 => 271,  569 => 270,  565 => 269,  561 => 268,  557 => 267,  553 => 266,  549 => 265,  545 => 264,  541 => 263,  538 => 262,  528 => 261,  510 => 147,  498 => 76,  494 => 75,  490 => 74,  486 => 73,  482 => 72,  478 => 71,  475 => 70,  465 => 69,  453 => 66,  448 => 64,  443 => 62,  438 => 60,  433 => 58,  428 => 56,  423 => 54,  418 => 52,  413 => 50,  408 => 48,  403 => 46,  398 => 44,  393 => 42,  388 => 40,  383 => 38,  378 => 36,  373 => 34,  368 => 32,  364 => 30,  354 => 29,  334 => 9,  321 => 316,  319 => 308,  317 => 261,  207 => 154,  197 => 147,  192 => 144,  186 => 141,  183 => 140,  177 => 137,  174 => 136,  172 => 135,  167 => 132,  159 => 125,  155 => 122,  151 => 119,  141 => 110,  137 => 107,  131 => 103,  127 => 101,  114 => 90,  101 => 80,  97 => 78,  95 => 69,  92 => 68,  90 => 29,  81 => 23,  74 => 19,  70 => 18,  61 => 11,  59 => 9,  49 => 1,);
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
\t\t<link href=\"{{ asset('/img/favicon.png\" rel=\"icon') }}\">
\t\t<link href=\"{{ asset('FrontOffice/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('/styles.css') }}\">
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

\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('stylenew.css') }}\">
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
\t\t<header id=\"header\" class=\"header fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img class=\"dark\" src=\"{{ asset('img/khedma.png') }}\" alt=\"logo\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{# <a class=\"nav-link scrollto\" href=\"{{ path('app_emergency_index') }}\">Emergency</a> #}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{{ path('app_projet_index') }}\">Projects</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{# <a class=\"nav-link scrollto\" href=\"{{ path('app_product_index') }}\">Marketplace</a> #}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{# <a href=\"{{ path('app_event_index') }}\">Event</a> #}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<span>Blog</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{# <a class=\"nav-link scrollto\" href=\"{{path('app_article_index_Front')}}\">Article</a> #}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{# <a class=\"nav-link\" href=\"{{path('app_article_new')}}\">Add an article</a> #}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{# <a class=\"nav-link scrollto\" href=\"{{path('app_article_category_new_front')}}\">Categorie</a> #}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t{# <a href=\"{{path('app_basket_show')}}\"> #}
\t\t\t\t\t\t<i style=\"background:#A40E1C;\" class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% if app.session.get('user') is not null %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"getstarted scrollto\" href=\"{{ path('app_register') }}\">Sign out</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"getstarted scrollto\" href=\"{{ path('app_login') }}\">Log in</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav><!-- .navbar --></body>
</html></div></header><!-- End Header --><main id=\"main\"> {% block body %}{% endblock %}</main><!-- End #main --><!-- ======= Footer ======= --><footer id=\"footer\" class=\"footer\">

<div class=\"footer-top\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"{{ asset('/img/BBlogo.png') }}\" alt=\"\">
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
</div>

<div class=\"container\">
\t<div class=\"copyright\">
\t\t&copy; Copyright
\t\t<strong>
\t\t\t<span>BloodBlond</span>
\t\t</strong>. All Rights Reserved
\t</div>
\t<div class=\"credits\">
\t\t<!-- All the links in the footer should remain intact. -->
\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> CODEX TEAM</a>
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
<script src=\"{{ asset('FrontOffice/vendor/php-email-form/validate.js') }}\"></script>{% endblock %}<!-- Template Main JS File --><script src=\"{{ asset('FrontOffice/js/main.js') }}\"></script></body></html>
", "newbase.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\newbase.html.twig");
    }
}
