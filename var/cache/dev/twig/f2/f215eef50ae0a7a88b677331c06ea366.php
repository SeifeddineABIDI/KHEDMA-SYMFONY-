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

/* front.html.twig */
class __TwigTemplate_de11f57a57a1372bbb614d1400ea048f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>5edma</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/img/l.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/img/l.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 570
        echo "  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
";
        // line 572
        $this->displayBlock('js', $context, $blocks);
        // line 583
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "<body>

  <!-- ======= Top Bar ======= -->
  <div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
    <div class=\"container d-flex justify-content-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope\"></i> <a href=\"mailto:contact@example.com\">5edma@gmail.com</a>
        <i class=\"bi bi-phone\"></i> +216 96 700 134
      </div>
      <div class=\"d-none d-lg-flex social-links align-items-center\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">
     
      <h1 class=\"logo me-auto\"><a href=\"index.html\">5edma</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"/acceuil_logged\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">freelancer</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/front\">metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">sous metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">aa</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"\">Reclamation</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"front/local/local\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Prendre</span> un rendez-vous</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container\">
      <h1>Bienvenue au Sa7etna</h1>
      <h2>votre meilleur choix pour prendre soin de votre santé</h2>
      <a href=\"/incrit\" class=\"btn-get-started scrollto\">Inscrivez-vous</a><br>
      <a href=\"/login_front\" class=\"btn-get-started scrollto\">Log in</a><br>
   
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-4 d-flex align-items-stretch\">
            <div class=\"content\">
              <h3>Pourquoi choisir Sa7etna ?</h3>
              <p>
                Une vie saine est quelque chose que tout le monde vise, notre site Web vise à aider autant de personnes que possible et à trouver facilement de bons médecins dans différents domaines
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Apprendre plus <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 d-flex align-items-stretch\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Fiabilité</h4>
                    <p>notre site web offre une fiabilité a nos visiteurs</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Sécurité</h4>
                    <p>En visitant notre site web, vous pouvez faire confiance a tous nos docteurs.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Ergonomie</h4>
                    <p>Notre site web est trés facile a utiliser, tout est claire, vous pouvez basculez sur les differents interfaces trés facilement.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"fas fa-user-md\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Docteur</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-md-0\">
            <div class=\"count-box\">
              <i class=\"far fa-hospital\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0\">
            <div class=\"count-box\">
              <i class=\"fas fa-flask\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"12\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Laboratoires de recherche</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0\">
            <div class=\"count-box\">
              <i class=\"fas fa-award\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"150\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Prix</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Services</h2>
         
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-heartbeat\"></i></div>
              <h4><a href=\"\">Consultation</a></h4>
              <p>Notre site vos offre la possibilité de prenez un rendez-vous dans un de nos locaux ou de méme faire un rendez-vous en ligne</p>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-pills\"></i></div>
              <h4><a href=\"\">Medicaments</a></h4>
              <p>Notre site offre la possibilité de demander des Medicaments qui ne sont pas disponible au sein des pharmacie.</p>
            </div>
          </div>

          

        

          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-wheelchair\"></i></div>
              <h4><a href=\"\">Don</a></h4>
              <p>Notre site offre la possibilité de faire des dons (sang, materiels) ou méme de faire une demande pour un don disponible</p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Services Section -->

  
    <!-- ======= Departments Section ======= -->
    <section id=\"departments\" class=\"departments\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Departments</h2>
        
        </div>

        <div class=\"row gy-4\">
          <div class=\"col-lg-3\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">Cardiologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">Neurologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">Hépatologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">Pédiatrie</a>
              </li>
             
            </ul>
          </div>
          <div class=\"col-lg-9\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Cardiologie</h3>
                    <p>  La cardiologie est la spécialité de la médecine qui étudie le cœur et les vaisseaux.
                    La cardiologie porte sur la prévention, le diagnostic, la prise en charge et la réadaptation de patients présentant des maladies du système cardiovasculaire</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-1.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Neurologie</h3>
                    
                    <p>La neurologie est une spécialité médicale s’intéressant au fonctionnement et aux maladies des systèmes nerveux central (cerveau et moelle épinière), périphérique (nerfs crâniens et nerfs des membres) et végétatif.</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-2.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>hépatologie</h3>

                    <p>L'hépatologie est la branche de la médecine qui s'intéresse à l’étude du foie (hépar) sur un plan anatomique, physiologique et pathologique. Le spécialiste, l'hépatologue est aussi gastro entérologue .</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-3.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Pédiatrie</h3>
                    
                    <p>La pédiatrie est une spécialité médicale qui se consacre à l’enfant, depuis la vie intra-utérine (en lien avec l’obstétrique ) jusqu’à la fin de l’adolescence. En s’intéressant à l’alimentation et en suivant la croissance et l’évolution de l’enfant</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-4.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id=\"doctors\" class=\"doctors\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Docteurs</h2>
          <p>Vous pouvez avoir les meilleurs medecins en tunisie et dans differentes specialites.</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-6\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-1.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Mohamed Trabelsi</h4>
                <span>Médecin-chef</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-2.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Yasmine Sellami</h4>
                <span>Anesthésiste</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-3.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Moez Hammami</h4>
                <span>Cardiologie</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-4.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Maram Manaii</h4>
                <span>Neurochirurgienne</span>
                
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    

  

    <!-- ======= Gallery Section ======= -->
    <section id=\"gallery\" class=\"gallery\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Gallerie</h2>
          
        </div>
      </div>

      <div class=\"container-fluid\">
        <div class=\"row g-0\">

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-1.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-1.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-2.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-2.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-3.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-3.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-4.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-4.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-5.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-5.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-6.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-6.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-7.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-7.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-8.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-8.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
        
        <div class=\"section-title\">
          
          <h2>Contact</h2>
          

      <div class=\"container\">
        <div class=\"row mt-5\">
          
          <div class=\"col-lg-4\">
            <div class=\"info\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Localisation:</h4>
                <p>1 Rue Arbi Zarrouk, Megrine</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>Contact@sa7etna.tn</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Téléphone:</h4>
                <p>+216 96 700 134</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            

          </div>

        </div>

      </div>
    
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    

    <div class=\"container d-md-flex py-4\">

      <div class=\"me-md-auto text-center text-md-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>Sa7etna</span></strong>. Tous les droits sont réservés
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
      </div>
      <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 572
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 573
        echo "  <!-- Vendor JS Files -->
  <script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 581,  739 => 578,  735 => 577,  731 => 576,  727 => 575,  723 => 574,  720 => 573,  710 => 572,  171 => 40,  161 => 39,  149 => 30,  143 => 27,  139 => 26,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  112 => 19,  102 => 18,  90 => 583,  88 => 572,  84 => 570,  82 => 39,  73 => 32,  71 => 18,  64 => 14,  60 => 13,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>5edma</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('assetss/img/l.png')}}\" rel=\"icon\">
  <link href=\"{{asset('assetss/img/l.png')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  {% block css%}
  <!-- Vendor CSS Files -->
  <link href=\"{{asset('assetss/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/animate.css/animate.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assetss/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('assetss/css/style.css')}}\" rel=\"stylesheet\">
{% endblock %}
  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
{% block body %}
<body>

  <!-- ======= Top Bar ======= -->
  <div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
    <div class=\"container d-flex justify-content-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope\"></i> <a href=\"mailto:contact@example.com\">5edma@gmail.com</a>
        <i class=\"bi bi-phone\"></i> +216 96 700 134
      </div>
      <div class=\"d-none d-lg-flex social-links align-items-center\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">
     
      <h1 class=\"logo me-auto\"><a href=\"index.html\">5edma</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"/acceuil_logged\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">freelancer</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/front\">metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">sous metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">aa</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"\">Reclamation</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"front/local/local\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Prendre</span> un rendez-vous</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container\">
      <h1>Bienvenue au Sa7etna</h1>
      <h2>votre meilleur choix pour prendre soin de votre santé</h2>
      <a href=\"/incrit\" class=\"btn-get-started scrollto\">Inscrivez-vous</a><br>
      <a href=\"/login_front\" class=\"btn-get-started scrollto\">Log in</a><br>
   
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-4 d-flex align-items-stretch\">
            <div class=\"content\">
              <h3>Pourquoi choisir Sa7etna ?</h3>
              <p>
                Une vie saine est quelque chose que tout le monde vise, notre site Web vise à aider autant de personnes que possible et à trouver facilement de bons médecins dans différents domaines
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Apprendre plus <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 d-flex align-items-stretch\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Fiabilité</h4>
                    <p>notre site web offre une fiabilité a nos visiteurs</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Sécurité</h4>
                    <p>En visitant notre site web, vous pouvez faire confiance a tous nos docteurs.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Ergonomie</h4>
                    <p>Notre site web est trés facile a utiliser, tout est claire, vous pouvez basculez sur les differents interfaces trés facilement.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"fas fa-user-md\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Docteur</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-md-0\">
            <div class=\"count-box\">
              <i class=\"far fa-hospital\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0\">
            <div class=\"count-box\">
              <i class=\"fas fa-flask\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"12\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Laboratoires de recherche</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-5 mt-lg-0\">
            <div class=\"count-box\">
              <i class=\"fas fa-award\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"150\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Prix</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Services</h2>
         
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-heartbeat\"></i></div>
              <h4><a href=\"\">Consultation</a></h4>
              <p>Notre site vos offre la possibilité de prenez un rendez-vous dans un de nos locaux ou de méme faire un rendez-vous en ligne</p>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-pills\"></i></div>
              <h4><a href=\"\">Medicaments</a></h4>
              <p>Notre site offre la possibilité de demander des Medicaments qui ne sont pas disponible au sein des pharmacie.</p>
            </div>
          </div>

          

        

          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"fas fa-wheelchair\"></i></div>
              <h4><a href=\"\">Don</a></h4>
              <p>Notre site offre la possibilité de faire des dons (sang, materiels) ou méme de faire une demande pour un don disponible</p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Services Section -->

  
    <!-- ======= Departments Section ======= -->
    <section id=\"departments\" class=\"departments\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Departments</h2>
        
        </div>

        <div class=\"row gy-4\">
          <div class=\"col-lg-3\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">Cardiologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">Neurologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">Hépatologie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">Pédiatrie</a>
              </li>
             
            </ul>
          </div>
          <div class=\"col-lg-9\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Cardiologie</h3>
                    <p>  La cardiologie est la spécialité de la médecine qui étudie le cœur et les vaisseaux.
                    La cardiologie porte sur la prévention, le diagnostic, la prise en charge et la réadaptation de patients présentant des maladies du système cardiovasculaire</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-1.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Neurologie</h3>
                    
                    <p>La neurologie est une spécialité médicale s’intéressant au fonctionnement et aux maladies des systèmes nerveux central (cerveau et moelle épinière), périphérique (nerfs crâniens et nerfs des membres) et végétatif.</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-2.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>hépatologie</h3>

                    <p>L'hépatologie est la branche de la médecine qui s'intéresse à l’étude du foie (hépar) sur un plan anatomique, physiologique et pathologique. Le spécialiste, l'hépatologue est aussi gastro entérologue .</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-3.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <div class=\"row gy-4\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Pédiatrie</h3>
                    
                    <p>La pédiatrie est une spécialité médicale qui se consacre à l’enfant, depuis la vie intra-utérine (en lien avec l’obstétrique ) jusqu’à la fin de l’adolescence. En s’intéressant à l’alimentation et en suivant la croissance et l’évolution de l’enfant</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/departments-4.jpg\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id=\"doctors\" class=\"doctors\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Docteurs</h2>
          <p>Vous pouvez avoir les meilleurs medecins en tunisie et dans differentes specialites.</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-6\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-1.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Mohamed Trabelsi</h4>
                <span>Médecin-chef</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-2.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Yasmine Sellami</h4>
                <span>Anesthésiste</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-3.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Moez Hammami</h4>
                <span>Cardiologie</span>
               
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6 mt-4\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic\"><img src=\"assets/img/doctors/doctors-4.jpg\" class=\"img-fluid\" alt=\"\"></div>
              <div class=\"member-info\">
                <h4>Maram Manaii</h4>
                <span>Neurochirurgienne</span>
                
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    

  

    <!-- ======= Gallery Section ======= -->
    <section id=\"gallery\" class=\"gallery\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Gallerie</h2>
          
        </div>
      </div>

      <div class=\"container-fluid\">
        <div class=\"row g-0\">

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-1.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-1.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-2.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-2.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-3.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-3.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-4.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-4.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-5.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-5.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-6.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-6.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-7.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-7.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-4\">
            <div class=\"gallery-item\">
              <a href=\"assets/img/gallery/gallery-8.jpg\" class=\"galelry-lightbox\">
                <img src=\"assets/img/gallery/gallery-8.jpg\" alt=\"\" class=\"img-fluid\">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
        
        <div class=\"section-title\">
          
          <h2>Contact</h2>
          

      <div class=\"container\">
        <div class=\"row mt-5\">
          
          <div class=\"col-lg-4\">
            <div class=\"info\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Localisation:</h4>
                <p>1 Rue Arbi Zarrouk, Megrine</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>Contact@sa7etna.tn</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Téléphone:</h4>
                <p>+216 96 700 134</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            

          </div>

        </div>

      </div>
    
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    

    <div class=\"container d-md-flex py-4\">

      <div class=\"me-md-auto text-center text-md-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>Sa7etna</span></strong>. Tous les droits sont réservés
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
      </div>
      <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
{% endblock %}
  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
{% block js %}
  <!-- Vendor JS Files -->
  <script src=\"{{asset('assetss/vendor/purecounter/purecounter_vanilla.js')}}\"></script>
  <script src=\"{{asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('assetss/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('assetss/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('assetss/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('assetss/js/main.js')}}\"></script>
{% endblock %}
</body>

</html>", "front.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\front.html.twig");
    }
}
