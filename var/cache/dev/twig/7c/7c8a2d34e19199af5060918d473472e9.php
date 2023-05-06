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

/* BackOffice/evenement/showfront.html.twig */
class __TwigTemplate_e8ae1b312f14f121c2bd8ed3c37fdfab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/evenement/showfront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "BackOffice/evenement/showfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    <section id=\"blog\" class=\"blog\">
      <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-4\">
                <!-- Sidebar code goes here -->
                <div class=\"sidebar\">
                    <h3 class=\"sidebar-title\">Search</h3>
                    <div class=\"sidebar-item search-form\">
                        <form action=\"\">
                            <input type=\"text\">
                            <button type=\"submit\"><i class=\"bi bi-search\"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                 
                </div><!-- End sidebar -->
            </div>
          <div class=\"col-lg-8 entries\">

            <Evenement class=\"entry entry-single\">

              <div class=\"\">
                <img src=\"/FrontOffice/img/svg/Evenement.svg\" alt=\"\" class=\"img-fluid\">
              </div>

              <h2 class=\"entry-title\">
                <a href=\"blog-single.html\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), "html", null, true);
        echo "</a>
              </h2>

              <div class=\"entry-meta\">
                <ul>
                  <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"blog-single.html\"><time datetime=\"2020-01-01\">";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</time></a></li>
                </ul>
              </div>

              <div class=\"entry-content\">

                  <p>
                  ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), "html", null, true);
        echo "
                </p>

                <blockquote>
                  <p>
                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49), "html", null, true);
        echo "
                  </p>
                </blockquote>
                <blockquote>
                  <p>
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 54, $this->source); })()), "featuredText", [], "any", false, false, false, 54), "html", null, true);
        echo "
                  </p>
                </blockquote>

                <img src=\"/FrontOffice/img//blog-inside-post.jpg\" class=\"img-fluid\" alt=\"\">
              </div>
                  <h3>Add your vote </h3>
                  <div  class=\"stars \">
            <i class=\"lar la-star\" data-value=\"1\"></i>
            <i class=\"lar la-star\" data-value=\"2\"></i>
            <i class=\"lar la-star\" data-value=\"3\"></i>
            <i class=\"lar la-star\" data-value=\"4\"></i>
            <i class=\"lar la-star\" data-value=\"5\"></i>
             <input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
            ";
        // line 69
        echo "                   </div>


                  <div style=\"display:flex; justify-content: flex-end;\">
                      <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Evenement_editfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" style=\"margin-right: 10px;\">
                          <button class=\"btn btn-warning\" style=\"background-color:lightgray;\">edit</button>
                      </a>
                      ";
        // line 76
        echo twig_include($this->env, $context, "frontoffice/Evenement/deletefront.html.twig");
        echo "
                  </div>

                  ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 79, $this->source); })()), "comments", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 80
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "parent", [], "any", false, false, false, 80) == null)) {
                // line 81
                echo "                  <div class=\"blog-comments\">


                      <div id=\"comment\" class=\"comment\">
                          <div class=\"d-flex\">
                              <div>
                                  <h5><a href=\"\">User name </a> <a href=\"#add-comment\" class=\"reply\"><i class=\"bi bi-reply-fill\"></i> Reply</a></h5>
                                  <time datetime=\"2020-01-01\">";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
                echo "</time>
                                  <p>
                                      ";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 90), "html", null, true);
                echo "
                                  </p>
                              </div>
                          </div>
                      </div><!-- End comment #1 -->
                      <p>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPositiveVotesCount", [], "method", false, false, false, 95), "html", null, true);
                echo " people liked this comment</p>
                      <p>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getNegativeVotesCount", [], "method", false, false, false, 96), "html", null, true);
                echo " people disliked this comment</p>
                      <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vote", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 97), "value" => 1]), "html", null, true);
                echo "\" class=\"btn btn-success btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-up\"></i></a>
                      <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vote", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 98), "value" =>  -1]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-down\"></i></a>

                      ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 100));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 101
                    echo "                          <p> reply : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 101), "html", null, true);
                    echo " <br> created At ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 101), "d/m/Y H:i"), "html", null, true);
                    echo "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                      ";
            }
            // line 104
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                      <p>Partager sur :</p>

                      <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_Evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #3b5998\"><i class=\"fab fa-facebook-f\"></i>Facebook</button>
                      </a>

                      <a href=\"https://twitter.com/intent/tweet?url=";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_Evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #55acee\"><i class=\"fab fa-twitter\"></i>Twitter</button>
                      </a>

                      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_Evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #0082ca\"><i class=\"fab fa-linkedin-in\"></i>LinkedIn </button>
                      </a>


                      <div class=\"reply-form\" id=\"add-comment\">

                          <h2 class=\"comment mt-4 text-justify float-left class=\">Add a comment</h2>
                          ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 123, $this->source); })()), 'form');
        echo "
                      </div>

                  </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <!-- Main content of the webpage goes here -->
                </div>
            </div>
          </Evenement>
      </div>
        </div>
      </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/evenement/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 123,  274 => 115,  267 => 111,  260 => 107,  256 => 105,  250 => 104,  247 => 103,  236 => 101,  232 => 100,  227 => 98,  223 => 97,  219 => 96,  215 => 95,  207 => 90,  202 => 88,  193 => 81,  190 => 80,  186 => 79,  180 => 76,  174 => 73,  168 => 69,  151 => 54,  143 => 49,  135 => 44,  125 => 37,  117 => 32,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}Evenement{% endblock %}

{% block body %}
    <section id=\"blog\" class=\"blog\">
      <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-4\">
                <!-- Sidebar code goes here -->
                <div class=\"sidebar\">
                    <h3 class=\"sidebar-title\">Search</h3>
                    <div class=\"sidebar-item search-form\">
                        <form action=\"\">
                            <input type=\"text\">
                            <button type=\"submit\"><i class=\"bi bi-search\"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                 
                </div><!-- End sidebar -->
            </div>
          <div class=\"col-lg-8 entries\">

            <Evenement class=\"entry entry-single\">

              <div class=\"\">
                <img src=\"/FrontOffice/img/svg/Evenement.svg\" alt=\"\" class=\"img-fluid\">
              </div>

              <h2 class=\"entry-title\">
                <a href=\"blog-single.html\">{{ Evenement.titre }}</a>
              </h2>

              <div class=\"entry-meta\">
                <ul>
                  <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"blog-single.html\"><time datetime=\"2020-01-01\">{{ Evenement.createdAt ? Evenement.createdAt|date('Y-m-d H:i:s') : '' }}</time></a></li>
                </ul>
              </div>

              <div class=\"entry-content\">

                  <p>
                  {{ Evenement.titre }}
                </p>

                <blockquote>
                  <p>
                    {{ Evenement.slug }}
                  </p>
                </blockquote>
                <blockquote>
                  <p>
                    {{ Evenement.featuredText }}
                  </p>
                </blockquote>

                <img src=\"/FrontOffice/img//blog-inside-post.jpg\" class=\"img-fluid\" alt=\"\">
              </div>
                  <h3>Add your vote </h3>
                  <div  class=\"stars \">
            <i class=\"lar la-star\" data-value=\"1\"></i>
            <i class=\"lar la-star\" data-value=\"2\"></i>
            <i class=\"lar la-star\" data-value=\"3\"></i>
            <i class=\"lar la-star\" data-value=\"4\"></i>
            <i class=\"lar la-star\" data-value=\"5\"></i>
             <input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
            {#} <a href=\"{{ path('app_Evenement_index_Front') }}\"><button class=\"btn btn-warning\" style=\"background-color:darkred\">back to list</button></a>#}
                   </div>


                  <div style=\"display:flex; justify-content: flex-end;\">
                      <a href=\"{{ path('app_Evenement_editfront', {'id': Evenement.id}) }}\" style=\"margin-right: 10px;\">
                          <button class=\"btn btn-warning\" style=\"background-color:lightgray;\">edit</button>
                      </a>
                      {{ include('frontoffice/Evenement/deletefront.html.twig') }}
                  </div>

                  {% for comment in Evenement.comments %}
                  {% if comment.parent == null %}
                  <div class=\"blog-comments\">


                      <div id=\"comment\" class=\"comment\">
                          <div class=\"d-flex\">
                              <div>
                                  <h5><a href=\"\">User name </a> <a href=\"#add-comment\" class=\"reply\"><i class=\"bi bi-reply-fill\"></i> Reply</a></h5>
                                  <time datetime=\"2020-01-01\">{{comment.createdAt|date(\"d/m/Y H:i\")}}</time>
                                  <p>
                                      {{comment.content}}
                                  </p>
                              </div>
                          </div>
                      </div><!-- End comment #1 -->
                      <p>{{ comment.getPositiveVotesCount() }} people liked this comment</p>
                      <p>{{ comment.getNegativeVotesCount() }} people disliked this comment</p>
                      <a href=\"{{ path('vote', {'id': comment.id, 'value': 1}) }}\" class=\"btn btn-success btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-up\"></i></a>
                      <a href=\"{{ path('vote', {'id': comment.id, 'value': -1}) }}\" class=\"btn btn-danger btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-down\"></i></a>

                      {% for reply in comment.replies %}
                          <p> reply : {{reply.content}} <br> created At {{reply.createdAt|date(\"d/m/Y H:i\")}}</p>
                      {% endfor %}
                      {% endif %}
                      {% endfor %}
                      <p>Partager sur :</p>

                      <a href=\"https://www.facebook.com/sharer/sharer.php?u={{ url('app_Evenement_showfront', {id: Evenement.id}) }}\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #3b5998\"><i class=\"fab fa-facebook-f\"></i>Facebook</button>
                      </a>

                      <a href=\"https://twitter.com/intent/tweet?url={{ url('app_Evenement_showfront', {id: Evenement.id}) }}\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #55acee\"><i class=\"fab fa-twitter\"></i>Twitter</button>
                      </a>

                      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url={{ url('app_Evenement_showfront', {id: Evenement.id}) }}\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #0082ca\"><i class=\"fab fa-linkedin-in\"></i>LinkedIn </button>
                      </a>


                      <div class=\"reply-form\" id=\"add-comment\">

                          <h2 class=\"comment mt-4 text-justify float-left class=\">Add a comment</h2>
                          {{form(commentForm)}}
                      </div>

                  </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <!-- Main content of the webpage goes here -->
                </div>
            </div>
          </Evenement>
      </div>
        </div>
      </div>
    </section>
{% endblock %}
", "BackOffice/evenement/showfront.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\BackOffice\\evenement\\showfront.html.twig");
    }
}
