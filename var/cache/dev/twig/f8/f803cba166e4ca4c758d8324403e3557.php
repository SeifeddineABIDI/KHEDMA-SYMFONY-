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

/* base.html.twig */
class __TwigTemplate_6ec03de7038434413a88bcb9daca1e37 extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<!-- endinject -->

\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">

\t\t<!-- Fonts -->
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 59
        echo "

\t</head>

\t<body class=\"layout-light side-menu\">


\t\t<div class=\"mobile-search\">
\t\t\t<form action=\"/\" class=\"search-form\">
\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/search.svg"), "html", null, true);
        echo "\" alt=\"search\" class=\"svg\">
\t\t\t\t<input class=\"form-control me-sm-2 box-shadow-none\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t</form>
\t\t</div>
\t\t<div class=\"mobile-author-actions\"></div>
\t\t<header class=\"header-top\">
\t\t\t<nav class=\"navbar navbar-light\">
\t\t\t\t<div class=\"navbar-left\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t<img class=\"dark\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/logo 5edma tr.png"), "html", null, true);
        echo "\" alt=\"logo\">

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\">
\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/align-center-alt.svg"), "html", null, true);
        echo "\" alt=\"img\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-menu\">

\t\t\t\t\t\t<div class=\"hexadash-top-menu position-relative\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"has-subMenu\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Dashboard</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"has-subMenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">Apps</a>
\t\t\t\t\t\t\t\t\t<ul class=\"megaMenu-wrapper megaMenu-dropdown\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-subMenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-users-alt\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subMenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Users List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Add Users
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"calendar.html\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-calendar-alt\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Calendar</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-subMenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/user.svg"), "html", null, true);
        echo "\" alt=\"user\" class=\"svg nav-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Event</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subMenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Events List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Tickets List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t<li class=\"mega-item has-subMenu\">

\t\t\t\t\t\t\t\t\t<ul class=\"megaMenu-wrapper megaMenu-small\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"support.html\" class=\"\"><span class=\"menu-text\">Support Center</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\" class=\"\">Blog Style 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog2.html\" class=\"\">Blog Style 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog3.html\" class=\"\">Blog Style 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-details.html\" class=\"\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Details</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"sign-up.html\" class=\"\"><span class=\"menu-text\">Sign Up</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- ends: navbar-left -->
\t\t\t\t<div class=\"navbar-right\">
\t\t\t\t\t<ul class=\"navbar-right__menu\">
\t\t\t\t\t\t<li class=\"nav-search\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"search-toggle\">
\t\t\t\t\t\t\t\t<i class=\"uil uil-search\"></i>
\t\t\t\t\t\t\t\t<i class=\"uil uil-times\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<form action=\"/\" class=\"search-form-topMenu\">
\t\t\t\t\t\t\t\t<span class=\"search-icon uil uil-search\"></span>
\t\t\t\t\t\t\t\t<input class=\"form-control me-sm-2 box-shadow-none\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-message\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle icon-active\">
\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/message.svg"), "html", null, true);
        echo "\" alt=\"img\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- ends: nav-message -->
\t\t\t\t\t\t<li class=\"nav-notification\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle icon-active\">
\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/alarm.svg"), "html", null, true);
        echo "\" alt=\"img\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-parent-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-wrapper\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dropdown-wrapper__title\">Notifications
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge-circle badge-warning ms-1\">4</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/inbox.svg"), "html", null, true);
        echo "\" alt=\"inbox\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/upload.svg"), "html", null, true);
        echo "\" alt=\"upload\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/log-in.svg"), "html", null, true);
        echo "\" alt=\"log-in\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/at-sign.svg"), "html", null, true);
        echo "\" alt=\"at-sign\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/heart.svg"), "html", null, true);
        echo "\" alt=\"heart\" class=\"svg\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-wrapper__more\">See all incoming activity</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- ends: .nav-flag-select -->
\t\t\t\t\t\t<li class=\"nav-author\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "image", [], "any", false, false, false, 285))), "html", null, true);
        echo "\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-item__title\">";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "user", [], "any", false, false, false, 286), "prenom", [], "any", false, false, false, 286), "html", null, true);
        echo "<i class=\"las la-angle-down nav-item__arrow\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-parent-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-author__info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "image", [], "any", false, false, false, 293))), "html", null, true);
        echo "\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
        // line 296
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "user", [], "any", false, false, false, 296), "username", [], "any", false, false, false, 296), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 297
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297), "role", [], "any", false, false, false, 297), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-author__options\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show_na", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-setting\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-users-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"nav-author__signout\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSign Out</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ends: .dropdown-wrapper -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- ends: .nav-author -->
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- ends: .navbar-right__menu -->
\t\t\t\t\t<div class=\"navbar-right__mobileAction d-md-none\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn-search\">
\t\t\t\t\t\t\t<img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/search.svg"), "html", null, true);
        echo "\" alt=\"search\" class=\"svg feather-search\">
\t\t\t\t\t\t\t<img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/x.svg"), "html", null, true);
        echo "\" alt=\"x\" class=\"svg feather-x\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-author-action\">
\t\t\t\t\t\t\t<img class=\"svg\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/svg/more-vertical.svg"), "html", null, true);
        echo "\" alt=\"more-vertical\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- ends: .navbar-right -->
\t\t\t</nav>
\t\t</header>
\t\t<main class=\"main-content\">

\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t<div class=\"sidebar sidebar-collapse\" id=\"sidebar\">
\t\t\t\t\t<div class=\"sidebar__menu-group\">
\t\t\t\t\t\t<ul class=\"sidebar_nav\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-home\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Home</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t






\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-users-alt\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Users</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li ><a href=\"";
        // line 368
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
        echo "\" class=\"\">Users List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 369
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_create");
        echo "\" class=\"\">Add Users</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 375
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_admin");
        echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-bag\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text text-initial\">Annonce</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 382
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_admin");
        echo "\">Annonce</a>
\t\t\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon fas fa-calendar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Evenement</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 400
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">Evenement</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 403
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        echo "\">Categorie</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-bag\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text text-initial\">Metiers</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 417
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_index");
        echo "\">Metier</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 420
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sous_metier_index");
        echo "\">Sous Metier</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 429
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-sign-out-alt\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Sign out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"contents\"> ";
        // line 440
        $this->displayBlock('body', $context, $blocks);
        // line 441
        echo "
\t\t\t\t</div>


\t\t\t\t<footer class=\"footer-wrapper\">
\t\t\t\t\t<div class=\"footer-wrapper__inside\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>© 2023</span>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">LEGENDS TEAM</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-menu text-end\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ends: .Footer Menu -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</main>
\t\t\t<div id=\"overlayer\">
\t\t\t\t<div class=\"loader-overlay\">
\t\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"overlay-dark-sidebar\"></div>
\t\t\t<div class=\"customizer-overlay\"></div>

\t\t\t";
        // line 485
        $this->displayBlock('js', $context, $blocks);
        // line 554
        echo "\t\t</body>
\t</html>
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

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "\t\t\t<!-- inject:css-->

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/daterangepicker.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fontawesome.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/footable.standalone.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/leaflet.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/line-awesome.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/magnific-popup.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/select2.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/slick.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/star-rating-svg.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/trumbowyg.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/wickedpicker.min.css"), "html", null, true);
        echo "\">

\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

\t\t<!-- endinject -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 440
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

    // line 485
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 486
        echo "\t\t\t\t<!-- inject:js-->
\t\t\t\t<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t";
        // line 552
        echo "\t\t\t\t<!-- endinject-->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  952 => 552,  948 => 531,  944 => 530,  940 => 529,  936 => 528,  932 => 527,  928 => 526,  924 => 525,  920 => 524,  916 => 523,  912 => 522,  908 => 521,  904 => 520,  900 => 519,  896 => 518,  892 => 517,  888 => 516,  884 => 515,  880 => 514,  876 => 513,  872 => 512,  868 => 511,  864 => 510,  860 => 509,  856 => 508,  852 => 507,  848 => 506,  844 => 505,  840 => 504,  836 => 503,  832 => 502,  828 => 501,  824 => 500,  820 => 499,  816 => 498,  812 => 497,  808 => 496,  804 => 495,  800 => 494,  796 => 493,  792 => 492,  788 => 491,  784 => 490,  780 => 489,  776 => 488,  772 => 487,  769 => 486,  759 => 485,  741 => 440,  727 => 55,  721 => 52,  716 => 50,  711 => 48,  706 => 46,  701 => 44,  696 => 42,  691 => 40,  686 => 38,  681 => 36,  676 => 34,  671 => 32,  666 => 30,  661 => 28,  656 => 26,  651 => 24,  646 => 22,  641 => 20,  637 => 18,  627 => 17,  607 => 6,  595 => 554,  593 => 485,  547 => 441,  545 => 440,  531 => 429,  519 => 420,  513 => 417,  496 => 403,  490 => 400,  469 => 382,  459 => 375,  450 => 369,  446 => 368,  424 => 349,  408 => 336,  403 => 334,  399 => 333,  382 => 319,  363 => 303,  354 => 297,  350 => 296,  344 => 293,  334 => 286,  330 => 285,  305 => 263,  288 => 249,  271 => 235,  254 => 221,  237 => 207,  224 => 197,  212 => 188,  150 => 129,  100 => 82,  93 => 78,  80 => 68,  69 => 59,  67 => 17,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<!-- endinject -->

\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">

\t\t<!-- Fonts -->
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
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


\t</head>

\t<body class=\"layout-light side-menu\">


\t\t<div class=\"mobile-search\">
\t\t\t<form action=\"/\" class=\"search-form\">
\t\t\t\t<img src=\"{{ asset('BackOffice/img/svg/search.svg') }}\" alt=\"search\" class=\"svg\">
\t\t\t\t<input class=\"form-control me-sm-2 box-shadow-none\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t</form>
\t\t</div>
\t\t<div class=\"mobile-author-actions\"></div>
\t\t<header class=\"header-top\">
\t\t\t<nav class=\"navbar navbar-light\">
\t\t\t\t<div class=\"navbar-left\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t<img class=\"dark\" src=\"{{ asset('BackOffice/img/logo 5edma tr.png') }}\" alt=\"logo\">

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\">
\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/align-center-alt.svg') }}\" alt=\"img\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-menu\">

\t\t\t\t\t\t<div class=\"hexadash-top-menu position-relative\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"has-subMenu\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Dashboard</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"has-subMenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">Apps</a>
\t\t\t\t\t\t\t\t\t<ul class=\"megaMenu-wrapper megaMenu-dropdown\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-subMenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-users-alt\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subMenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Users List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Add Users
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"calendar.html\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-calendar-alt\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Calendar</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-subMenu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('BackOffice/img/svg/user.svg') }}\" alt=\"user\" class=\"svg nav-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Event</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subMenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Events List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"\">Tickets List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t<li class=\"mega-item has-subMenu\">

\t\t\t\t\t\t\t\t\t<ul class=\"megaMenu-wrapper megaMenu-small\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"support.html\" class=\"\"><span class=\"menu-text\">Support Center</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\" class=\"\">Blog Style 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog2.html\" class=\"\">Blog Style 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog3.html\" class=\"\">Blog Style 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-details.html\" class=\"\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Details</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"sign-up.html\" class=\"\"><span class=\"menu-text\">Sign Up</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- ends: navbar-left -->
\t\t\t\t<div class=\"navbar-right\">
\t\t\t\t\t<ul class=\"navbar-right__menu\">
\t\t\t\t\t\t<li class=\"nav-search\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"search-toggle\">
\t\t\t\t\t\t\t\t<i class=\"uil uil-search\"></i>
\t\t\t\t\t\t\t\t<i class=\"uil uil-times\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<form action=\"/\" class=\"search-form-topMenu\">
\t\t\t\t\t\t\t\t<span class=\"search-icon uil uil-search\"></span>
\t\t\t\t\t\t\t\t<input class=\"form-control me-sm-2 box-shadow-none\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-message\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle icon-active\">
\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/message.svg') }}\" alt=\"img\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- ends: nav-message -->
\t\t\t\t\t\t<li class=\"nav-notification\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle icon-active\">
\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/alarm.svg') }}\" alt=\"img\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-parent-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-wrapper\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dropdown-wrapper__title\">Notifications
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge-circle badge-warning ms-1\">4</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/inbox.svg') }}\" alt=\"inbox\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/upload.svg') }}\" alt=\"upload\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single--unread d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/log-in.svg') }}\" alt=\"log-in\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/at-sign.svg') }}\" alt=\"at-sign\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-notification__single nav-notification__single d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__type nav-notification__type--danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('BackOffice/img/svg/heart.svg') }}\" alt=\"heart\" class=\"svg\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-notification__details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"subject stretched-link text-truncate\" style=\"max-width: 180px;\">James</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>sent you a message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time-posted\">5 hours ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-wrapper__more\">See all incoming activity</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- ends: .nav-flag-select -->
\t\t\t\t\t\t<li class=\"nav-author\">
\t\t\t\t\t\t\t<div class=\"dropdown-custom\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-item-toggle\"><img src=\"{{ asset('uploads/Profiles/' ~ app.user.image) }}\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-item__title\">{{ app.user.prenom }}<i class=\"las la-angle-down nav-item__arrow\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-parent-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-author__info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/Profiles/' ~ app.user.image) }}\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{ app.user.username }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ app.user.role }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-author__options\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show_na', {'id': app.user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-setting\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-users-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tActivity</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout')}}\" class=\"nav-author__signout\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSign Out</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ends: .dropdown-wrapper -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- ends: .nav-author -->
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- ends: .navbar-right__menu -->
\t\t\t\t\t<div class=\"navbar-right__mobileAction d-md-none\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn-search\">
\t\t\t\t\t\t\t<img src=\"{{ asset('BackOffice/img/svg/search.svg') }}\" alt=\"search\" class=\"svg feather-search\">
\t\t\t\t\t\t\t<img src=\"{{ asset('BackOffice/img/svg/x.svg') }}\" alt=\"x\" class=\"svg feather-x\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-author-action\">
\t\t\t\t\t\t\t<img class=\"svg\" src=\"{{ asset('BackOffice/img/svg/more-vertical.svg') }}\" alt=\"more-vertical\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- ends: .navbar-right -->
\t\t\t</nav>
\t\t</header>
\t\t<main class=\"main-content\">

\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t<div class=\"sidebar sidebar-collapse\" id=\"sidebar\">
\t\t\t\t\t<div class=\"sidebar__menu-group\">
\t\t\t\t\t\t<ul class=\"sidebar_nav\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home_page')}}\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-home\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Home</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t






\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-users-alt\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Users</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li ><a href=\"{{ path('app_user_list')}}\" class=\"\">Users List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_user_create')}}\" class=\"\">Add Users</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_annonce_admin')}}\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-bag\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text text-initial\">Annonce</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_annonce_admin')}}\">Annonce</a>
\t\t\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon fas fa-calendar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Evenement</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_index')}}\">Evenement</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_index')}}\">Categorie</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"has-child\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-bag\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text text-initial\">Metiers</span>
\t\t\t\t\t\t\t\t\t<span class=\"toggle-icon\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_metier_index')}}\">Metier</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_sous_metier_index')}}\">Sous Metier</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t<span class=\"nav-icon uil uil-sign-out-alt\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"menu-text\">Sign out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"contents\"> {% block body %}{% endblock %}

\t\t\t\t</div>


\t\t\t\t<footer class=\"footer-wrapper\">
\t\t\t\t\t<div class=\"footer-wrapper__inside\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>© 2023</span>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">LEGENDS TEAM</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-menu text-end\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ends: .Footer Menu -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</main>
\t\t\t<div id=\"overlayer\">
\t\t\t\t<div class=\"loader-overlay\">
\t\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"overlay-dark-sidebar\"></div>
\t\t\t<div class=\"customizer-overlay\"></div>

\t\t\t{% block js %}
\t\t\t\t<!-- inject:js-->
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/popper.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment/moment.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/accordion.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/apexcharts.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/autoComplete.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/Chart.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/daterangepicker.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/drawer.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicBadge.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/dynamicCheckbox.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/footable.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/google-chart.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.countdown.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.peity.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/leaflet.markercluster.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/loader.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/message.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/moment.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/muuri.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/notification.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/popover.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/select2.full.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/slick.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/trumbowyg.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/vendor_assets/js/wickedpicker.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/apexmain.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/charts.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/drag-drop.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/footable.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/full-calendar.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/googlemap-init.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/icon-loader.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/jvectormap-init.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/leaflet-init.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('BackOffice/assets/theme_assets/js/main.js') }}\"></script>
\t\t\t\t{# <script>
\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#search-input').keyup(function () {
\t\t\t\t\t\t\tvar searchQuery = \$(this).val();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: \"{{ path('app_user_list') }}\",
\t\t\t\t\t\t\t\ttype: 'GET',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t'search': searchQuery
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\t\t\t\$(\"#user-table tbody\").html(response);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function (response) {
\t\t\t\t\t\t\t\t\tconsole.log(response);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
        \t\t</script> #}
\t\t\t\t<!-- endinject-->
\t\t\t{% endblock %}
\t\t</body>
\t</html>
", "base.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\base.html.twig");
    }
}
