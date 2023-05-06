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

/* registration/register.html.twig */
class __TwigTemplate_e27d022ac6b0ca8c20ea26fb8c95fab1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<!-- endinject -->

\t\t<link
\t\trel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">

\t\t<!-- Fonts -->
\t\t<link rel=\"stylesheet\" href=\"https://unicons.iconscout.com/release/v4.0.0/css/line.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css\" integrity=\"sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 60
        echo "\t</head>

\t<body>
\t\t<main class=\"main-content\">

\t\t\t<div class=\"admin\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
\t\t\t\t\t\t\t<div class=\"edit-profile\">
\t\t\t\t\t\t\t\t<div class=\"edit-profile__logos\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img class=\"dark\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/img/BBLogo.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card border-0\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__title\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Sign Up BloodBond</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "nom", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "prenom", [], "any", false, false, false, 90), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prenom"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'row', ["attr" => ["class" => "form-control", "placeholder" => "name@example.com"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "cin", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control", "placeholder" => "cin"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "telephone", [], "any", false, false, false, 102), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Telephone"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "adresse", [], "any", false, false, false, 106), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "githubUsername", [], "any", false, false, false, 110), 'row', ["attr" => ["class" => "form-control", "placeholder" => "GitHub UserName"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "role", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Role"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-image fa-fw\" style=\"color:#37474F;\"></i><span>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "image", [], "any", false, false, false, 122), 'label', ["label" => "Image"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), "image", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "image", [], "any", false, false, false, 124), 'errors');
        echo "
                                \t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn \" style=\"background:#A40E1C;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate Account
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"px-20\">
\t\t\t\t\t\t\t\t\t\t<p class=\"social-connector social-connector__admin text-center\">
\t\t\t\t\t\t\t\t\t\t\t<span>Or</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"button-group d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"admin-socialBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-dark google\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"img/google-Icon.svg\" alt=\"img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" radius-md wh-48 content-center facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center github\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-github\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"admin-topbar\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\tYou have an account?
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"color-primary\">
\t\t\t\t\t\t\t\t\t\t\t\tSign In
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .admin-topbar  -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End: .card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: .edit-profile -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End: .col-xl-5 -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End: .admin-element  -->

\t\t</main>
\t\t<div id=\"overlayer\">
\t\t\t<div class=\"loader-overlay\">
\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
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
        // line 203
        $this->displayBlock('js', $context, $blocks);
        // line 254
        echo "\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        echo "\t\t\t<!-- inject:css-->

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/daterangepicker.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fontawesome.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/footable.standalone.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/fullcalendar@5.2.0.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/leaflet.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/line-awesome.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/magnific-popup.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/MarkerCluster.Default.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/select2.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/slick.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/star-rating-svg.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/trumbowyg.min.css"), "html", null, true);
        echo "\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/css/wickedpicker.min.css"), "html", null, true);
        echo "\">

\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

\t\t<!-- endinject -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 203
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 204
        echo "\t\t\t<!-- inject:js-->
\t\t\t<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/popper.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/accordion.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/autoComplete.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/drawer.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicBadge.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/dynamicCheckbox.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/footable.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/fullcalendar@5.2.0.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/google-chart.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/message.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/moment.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/muuri.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/notification.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/popover.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/vendor_assets/js/wickedpicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/apexmain.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/charts.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/drag-drop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/footable.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/full-calendar.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/googlemap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/icon-loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/jvectormap-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/leaflet-init.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/theme_assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- endinject-->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 251,  604 => 250,  600 => 249,  596 => 248,  592 => 247,  588 => 246,  584 => 245,  580 => 244,  576 => 243,  572 => 242,  568 => 241,  564 => 240,  560 => 239,  556 => 238,  552 => 237,  548 => 236,  544 => 235,  540 => 234,  536 => 233,  532 => 232,  528 => 231,  524 => 230,  520 => 229,  516 => 228,  512 => 227,  508 => 226,  504 => 225,  500 => 224,  496 => 223,  492 => 222,  488 => 221,  484 => 220,  480 => 219,  476 => 218,  472 => 217,  468 => 216,  464 => 215,  460 => 214,  456 => 213,  452 => 212,  448 => 211,  444 => 210,  440 => 209,  436 => 208,  432 => 207,  428 => 206,  424 => 205,  421 => 204,  411 => 203,  397 => 56,  391 => 53,  386 => 51,  381 => 49,  376 => 47,  371 => 45,  366 => 43,  361 => 41,  356 => 39,  351 => 37,  346 => 35,  341 => 33,  336 => 31,  331 => 29,  326 => 27,  321 => 25,  316 => 23,  311 => 21,  307 => 19,  297 => 18,  277 => 7,  264 => 254,  262 => 203,  225 => 169,  185 => 132,  174 => 124,  170 => 123,  166 => 122,  159 => 118,  152 => 114,  145 => 110,  138 => 106,  131 => 102,  124 => 98,  117 => 94,  110 => 90,  103 => 86,  98 => 84,  83 => 72,  69 => 60,  67 => 18,  56 => 9,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">

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

\t<body>
\t\t<main class=\"main-content\">

\t\t\t<div class=\"admin\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-xxl-3 col-xl-4 col-md-6 col-sm-8\">
\t\t\t\t\t\t\t<div class=\"edit-profile\">
\t\t\t\t\t\t\t\t<div class=\"edit-profile__logos\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img class=\"dark\" src=\"{{ asset('BackOffice/img/BBLogo.png') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card border-0\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__title\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Sign Up BloodBond</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"edit-profile__body\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(registrationForm) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prenom'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'name@example.com'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.cin, {'attr': {'class': 'form-control', 'placeholder': 'cin'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Telephone'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.githubUsername, {'attr': {'class': 'form-control', 'placeholder': 'GitHub UserName'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.role, {'attr': {'class': 'form-control', 'placeholder': 'Role'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-image fa-fw\" style=\"color:#37474F;\"></i><span>{{ form_label(registrationForm.image, 'Image') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(registrationForm.image, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(registrationForm.image) }}
                                \t\t\t\t</div>  
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn \" style=\"background:#A40E1C;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate Account
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"px-20\">
\t\t\t\t\t\t\t\t\t\t<p class=\"social-connector social-connector__admin text-center\">
\t\t\t\t\t\t\t\t\t\t\t<span>Or</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"button-group d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"admin-socialBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn text-dark google\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg\" src=\"img/google-Icon.svg\" alt=\"img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" radius-md wh-48 content-center facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"radius-md wh-48 content-center github\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"uil uil-github\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"admin-topbar\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\tYou have an account?
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"color-primary\">
\t\t\t\t\t\t\t\t\t\t\t\tSign In
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End: .admin-topbar  -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End: .card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End: .edit-profile -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End: .col-xl-5 -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End: .admin-element  -->

\t\t</main>
\t\t<div id=\"overlayer\">
\t\t\t<div class=\"loader-overlay\">
\t\t\t\t<div class=\"dm-spin-dots spin-lg\">
\t\t\t\t\t<span class=\"spin-dot badge-dot dot-primary\"></span>
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
\t\t\t<script src=\"{{ asset('FrontOffice/js/script.js') }}\"></script>
\t\t\t<script src=\"{{ asset('FrontOffice/js/main.js') }}\"></script>
\t\t\t<!-- endinject-->
\t\t{% endblock %}
\t</body>

</html>
", "registration/register.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\registration\\register.html.twig");
    }
}
