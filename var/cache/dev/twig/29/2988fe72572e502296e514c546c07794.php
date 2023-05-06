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

/* metier/front.html.twig */
class __TwigTemplate_02ad64d82733a9cad895efeda9cb23bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/front.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "metier/front.html.twig", 1);
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
    <h5 class=\"card-title\">Liste des metiers disponibles<span></span></h5>
            <div class=\"card-body\">
                  

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                      <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Image</th>
                      <th scope=\"col\">Sous_Metier</th>
                      <th scope=\"col\">favori</th>  
                      </tr>
                    </thead>


    <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metiers"]) || array_key_exists("metiers", $context) ? $context["metiers"] : (function () { throw new RuntimeError('Variable "metiers" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 57
            echo "            <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "type", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/metierimage/" . twig_get_attribute($this->env, $this->source, $context["metier"], "image", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"></td>
                <td>
                    <a href=\"/metier/front/sous_metier/front/";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "type", [], "any", false, false, false, 64), "html", null, true);
            echo "\">voir sous metier</a>
                    
                </td>
                <td>
                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_add", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-round btn-danger\"><i class=\"fa fa-heart\" style=\"color: red;\"></i> Add to favorite</a>
                </td>

                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        return "metier/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 78,  170 => 74,  159 => 68,  152 => 64,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  128 => 57,  123 => 56,  68 => 3,  58 => 2,  35 => 1,);
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
    <h5 class=\"card-title\">Liste des metiers disponibles<span></span></h5>
            <div class=\"card-body\">
                  

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                      <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Image</th>
                      <th scope=\"col\">Sous_Metier</th>
                      <th scope=\"col\">favori</th>  
                      </tr>
                    </thead>


    <tbody>
        {% for metier in metiers %}
            <tr>
                <td>{{ metier.id }}</td>
                <td>{{ metier.nom }}</td>
                <td>{{ metier.type }}</td>
                <td>{{ metier.description }}</td>
                <td><img src=\"{{asset ('uploads/metierimage/' ~ metier.image)}}\" width=\"150px\" height=\"150px\"></td>
                <td>
                    <a href=\"/metier/front/sous_metier/front/{{ metier.type }}\">voir sous metier</a>
                    
                </td>
                <td>
                <a href=\"{{ path('favoris_add', {'id': metier.id}) }}\" class=\"btn btn-round btn-danger\"><i class=\"fa fa-heart\" style=\"color: red;\"></i> Add to favorite</a>
                </td>

                
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

{% endblock %}", "metier/front.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\metier\\front.html.twig");
    }
}
