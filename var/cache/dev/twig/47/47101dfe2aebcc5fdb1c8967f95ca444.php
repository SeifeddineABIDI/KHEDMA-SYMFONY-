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

/* metier/front_sous.html.twig */
class __TwigTemplate_38ccce7ea6d2577653afd834cfaf889d extends Template
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
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/front_sous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/front_sous.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "metier/front_sous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>

  <!-- ======= Top Bar ======= -->



  <!-- ======= Hero Section ======= -->
  
  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
   

   

   
   
   
  

   
    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
        
        <div class=\"section-title\">
          
          <h2>Contact</h2>
          

      <div class=\"container\">
        <div class=\"row mt-5\">
          <div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Liste des sous metiers  disponibles<span></span></h5>
            <div class=\"card-body\">
                 

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                      
                <th scope=\"col\">Libelle</th>
                <th scope=\"col\">Domaine</th>
           
                      </tr>
                    </thead>


    <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sous_metiers"]) || array_key_exists("sous_metiers", $context) ? $context["sous_metiers"] : (function () { throw new RuntimeError('Variable "sous_metiers" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sous_metier"]) {
            // line 54
            echo "            <tr>
                
                ";
            // line 57
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sous_metier"], "domaine", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
    
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sous_metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>



                  
                  </table>

                </div>

              </div>
            </div>

            
          </div>
        </div>

   
  </div>
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
        return "metier/front_sous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  139 => 61,  129 => 57,  125 => 54,  120 => 53,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
 {% block body %}
<body>

  <!-- ======= Top Bar ======= -->



  <!-- ======= Hero Section ======= -->
  
  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
   

   

   
   
   
  

   
    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
        
        <div class=\"section-title\">
          
          <h2>Contact</h2>
          

      <div class=\"container\">
        <div class=\"row mt-5\">
          <div class=\"card\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Liste des sous metiers  disponibles<span></span></h5>
            <div class=\"card-body\">
                 

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                      
                <th scope=\"col\">Libelle</th>
                <th scope=\"col\">Domaine</th>
           
                      </tr>
                    </thead>


    <tbody>
        {% for sous_metier in sous_metiers %}
            <tr>
                
                {# <td>{{ sous_metier.libelle }}</td> #}
                <td>{{ sous_metier.domaine }}</td>
    
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>



                  
                  </table>

                </div>

              </div>
            </div>

            
          </div>
        </div>

   
  </div>
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

{% endblock %}", "metier/front_sous.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\metier\\front_sous.html.twig");
    }
}
