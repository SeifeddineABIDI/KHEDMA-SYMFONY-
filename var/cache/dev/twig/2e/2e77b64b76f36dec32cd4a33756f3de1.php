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

/* favori/index.html.twig */
class __TwigTemplate_ca25381bc1e43d452b361d8d16995ce8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favori/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favori/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "favori/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
          <li><a class=\"nav-link scrollto\" href=\"/frontt/med\">freelancer</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/front\">metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">sous metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">git</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"/reclamation/addreclamation\">Reclamation</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Prendre</span> un rendez-vous</a>

    </div>
  </header><!-- End Header -->


<main class=\"mt-5 pt-3\">
    <div class=\"container-fluid\">
        <div class=\"row\"></div>
        <br/>
    </div>
</main>

<div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: -50px;\">
    <div class=\"col-lg-12\">
        <main class=\"card-body\">
            <i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i>
            <div class=\"bg-light p-3\">
                <h1>Votre panier</h1>
            </div>
            ";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 64, $this->source); })())) > 0)) {
            // line 65
            echo "            <table class=\"table table-striped\">
                 <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Description</th>
         
                <th>actions</th>
            </tr>
        </thead>
                <tbody>
                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                echo "                    <tr>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 79), "id", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 79), "id", [], "any", false, false, false, 79), "Your default value here")) : ("Your default value here")), "html", null, true);
                echo "</td>
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 80), "nom", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 80), "nom", [], "any", false, false, false, 80), "Your default value here")) : ("Your default value here")), "html", null, true);
                echo "</td>
                        
                        <td>";
                // line 82
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 82), "type", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 82), "type", [], "any", false, false, false, 82), "Your default value here")) : ("Your default value here")), "html", null, true);
                echo "</td>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 83), "description", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "metier", [], "any", false, true, false, 83), "description", [], "any", false, false, false, 83), "Your default value here")) : ("Your default value here")), "html", null, true);
                echo "</td>

               
                      
                   
                        ";
                // line 89
                echo "                    
                    <td>
                                ";
                // line 92
                echo "                                    <i class=\"fas fa fa-trash\"></i>
                                </a>
                            </td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                </tbody>
            </table>
            <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichage_metier_front");
            echo "\" class=\"text-body\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour à la metier</a>
            ";
        } else {
            // line 100
            echo "            <p>Votre panier est vide !</p>
            <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichage_metier_front");
            echo "\" class=\"text-body\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour à la metier</a>
            ";
        }
        // line 103
        echo "        </main>
    </div>
</div>

<!-- ======= Footer ======= -->
  <footer id=\"footer\">

    

    <div class=\"container d-md-flex py-4\">

      <div class=\"me-md-auto text-center text-md-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>5edma</span></strong>. Tous les droits sont réservés
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

    public function getTemplateName()
    {
        return "favori/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 103,  198 => 101,  195 => 100,  190 => 98,  186 => 96,  177 => 92,  173 => 89,  165 => 83,  161 => 82,  156 => 80,  152 => 79,  149 => 78,  145 => 77,  131 => 65,  129 => 64,  68 => 5,  58 => 4,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"front.html.twig\"%}
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
          <li><a class=\"nav-link scrollto\" href=\"/frontt/med\">freelancer</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/front\">metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">sous metier</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">git</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"/reclamation/addreclamation\">Reclamation</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Prendre</span> un rendez-vous</a>

    </div>
  </header><!-- End Header -->


<main class=\"mt-5 pt-3\">
    <div class=\"container-fluid\">
        <div class=\"row\"></div>
        <br/>
    </div>
</main>

<div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: -50px;\">
    <div class=\"col-lg-12\">
        <main class=\"card-body\">
            <i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i>
            <div class=\"bg-light p-3\">
                <h1>Votre panier</h1>
            </div>
            {% if items|length > 0 %}
            <table class=\"table table-striped\">
                 <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Description</th>
         
                <th>actions</th>
            </tr>
        </thead>
                <tbody>
                    {% for item in items %}
                    <tr>
                        <td>{{ item.metier.id|default('Your default value here')  }}</td>
                        <td>{{ item.metier.nom|default('Your default value here')  }}</td>
                        
                        <td>{{ item.metier.type|default('Your default value here')  }}</td>
                        <td>{{ item. metier.description|default('Your default value here') }}</td>

               
                      
                   
                        {# <td><img src=\"{{ asset('uploads/metierimage/' ~ item.metier.image) }}\" width=\"150px\" height=\"150px\"></td> #}
                    
                    <td>
                                {# <a href=\"{{ path('favoris_remove', {'id': item.metier.id}) }}\" class=\"btn btn-danger btn-sm\"> #}
                                    <i class=\"fas fa fa-trash\"></i>
                                </a>
                            </td></tr>
                    {% endfor %}
                </tbody>
            </table>
            <a href=\"{{ path('app_affichage_metier_front') }}\" class=\"text-body\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour à la metier</a>
            {% else %}
            <p>Votre panier est vide !</p>
            <a href=\"{{ path('app_affichage_metier_front')}}\" class=\"text-body\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour à la metier</a>
            {% endif %}
        </main>
    </div>
</div>

<!-- ======= Footer ======= -->
  <footer id=\"footer\">

    

    <div class=\"container d-md-flex py-4\">

      <div class=\"me-md-auto text-center text-md-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>5edma</span></strong>. Tous les droits sont réservés
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

{% endblock %}", "favori/index.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\favori\\index.html.twig");
    }
}
