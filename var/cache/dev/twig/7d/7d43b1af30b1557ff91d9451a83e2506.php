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

/* raiting/showfront.html.twig */
class __TwigTemplate_5974c4cb4e422e7be947cb0709664e35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "raiting/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "raiting/showfront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "raiting/showfront.html.twig", 1);
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

        echo "evenement";
        
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

                    <h3 class=\"sidebar-title\">Categorie</h3>
                    <div class=\"sidebar-item categories\">
                        <ul>
                            <li><a href=\"#\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Raiting"]) || array_key_exists("Raiting", $context) ? $context["Raiting"] : (function () { throw new RuntimeError('Variable "Raiting" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div><!-- End sidebar categories-->
                </div><!-- End sidebar -->
            </div>
          <div class=\"col-lg-8 entries\">

            <evenement class=\"entry entry-single\">

              <div class=\"\">
                <img src=\"/FrontOffice/img/svg/evenement.svg\" alt=\"\" class=\"img-fluid\">
              </div>

              <h2 class=\"entry-title\">
                <a href=\"blog-single.html\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Raiting"]) || array_key_exists("Raiting", $context) ? $context["Raiting"] : (function () { throw new RuntimeError('Variable "Raiting" does not exist.', 37, $this->source); })()), "raiting", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
              </h2>

              <div class=\"entry-meta\">
                <ul>
                  <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"blog-single.html\"><time datetime=\"2020-01-01\">";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</time></a></li>
                </ul>
              </div>

             
                  <h3>Add your vote </h3>
                  <div  class=\"stars \">
            <i class=\"lar la-star\" data-value=\"1\"></i>
            <i class=\"lar la-star\" data-value=\"2\"></i>
            <i class=\"lar la-star\" data-value=\"3\"></i>
            <i class=\"lar la-star\" data-value=\"4\"></i>
            <i class=\"lar la-star\" data-value=\"5\"></i>
             <input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
                   </div>


                  <div style=\"display:flex; justify-content: flex-end;\">
                      <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_editfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" style=\"margin-right: 10px;\">
                          <button class=\"btn btn-warning\" style=\"background-color:lightgray;\">edit</button>
                      </a>
                      ";
        // line 62
        echo twig_include($this->env, $context, "frontoffice/evenement/deletefront.html.twig");
        echo "
                  </div>

                  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "comments", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 66
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "parent", [], "any", false, false, false, 66) == null)) {
                // line 67
                echo "                  <div class=\"blog-comments\">


                      <div id=\"comment\" class=\"comment\">
                          <div class=\"d-flex\">
                              <div>
                                  <h5><a href=\"\">User name </a> <a href=\"#add-comment\" class=\"reply\"><i class=\"bi bi-reply-fill\"></i> Reply</a></h5>
                                  <time datetime=\"2020-01-01\">";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 74), "d/m/Y H:i"), "html", null, true);
                echo "</time>
                                  <p>
                                      ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 76), "html", null, true);
                echo "
                                  </p>
                              </div>
                          </div>
                      </div><!-- End comment #1 -->
                      <p>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getPositiveVotesCount", [], "method", false, false, false, 81), "html", null, true);
                echo " people liked this event</p>
                      <p>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getNegativeVotesCount", [], "method", false, false, false, 82), "html", null, true);
                echo " people disliked this comment</p>
                      <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vote", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 83), "value" => 1]), "html", null, true);
                echo "\" class=\"btn btn-success btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-up\"></i></a>
                      <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vote", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 84), "value" =>  -1]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-down\"></i></a>

                      ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 86));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 87
                    echo "                          <p> reply : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 87), "html", null, true);
                    echo " <br> created At ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 87), "d/m/Y H:i"), "html", null, true);
                    echo "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                      ";
            }
            // line 90
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                      <p>Partager sur :</p>

                      <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #3b5998\"><i class=\"fab fa-facebook-f\"></i>Facebook</button>
                      </a>

                      <a href=\"https://twitter.com/intent/tweet?url=";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #55acee\"><i class=\"fab fa-twitter\"></i>Twitter</button>
                      </a>

                      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_evenement_showfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #0082ca\"><i class=\"fab fa-linkedin-in\"></i>LinkedIn </button>
                      </a>


                      <div class=\"reply-form\" id=\"add-comment\">

                          <h2 class=\"comment mt-4 text-justify float-left class=\">Add a comment</h2>
                          ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 109, $this->source); })()), 'form');
        echo "
                      </div>

                  </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <!-- Main content of the webpage goes here -->
                </div>
            </div>
          </evenement>
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
        return "raiting/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 109,  253 => 101,  246 => 97,  239 => 93,  235 => 91,  229 => 90,  226 => 89,  215 => 87,  211 => 86,  206 => 84,  202 => 83,  198 => 82,  194 => 81,  186 => 76,  181 => 74,  172 => 67,  169 => 66,  165 => 65,  159 => 62,  153 => 59,  133 => 42,  125 => 37,  108 => 23,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}evenement{% endblock %}

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

                    <h3 class=\"sidebar-title\">Categorie</h3>
                    <div class=\"sidebar-item categories\">
                        <ul>
                            <li><a href=\"#\">{{Raiting.id}}</a></li>
                        </ul>
                    </div><!-- End sidebar categories-->
                </div><!-- End sidebar -->
            </div>
          <div class=\"col-lg-8 entries\">

            <evenement class=\"entry entry-single\">

              <div class=\"\">
                <img src=\"/FrontOffice/img/svg/evenement.svg\" alt=\"\" class=\"img-fluid\">
              </div>

              <h2 class=\"entry-title\">
                <a href=\"blog-single.html\">{{ Raiting.raiting }}</a>
              </h2>

              <div class=\"entry-meta\">
                <ul>
                  <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"blog-single.html\"><time datetime=\"2020-01-01\">{{ evenement.createdAt ? evenement.createdAt|date('Y-m-d H:i:s') : '' }}</time></a></li>
                </ul>
              </div>

             
                  <h3>Add your vote </h3>
                  <div  class=\"stars \">
            <i class=\"lar la-star\" data-value=\"1\"></i>
            <i class=\"lar la-star\" data-value=\"2\"></i>
            <i class=\"lar la-star\" data-value=\"3\"></i>
            <i class=\"lar la-star\" data-value=\"4\"></i>
            <i class=\"lar la-star\" data-value=\"5\"></i>
             <input type=\"Hidden\" name=\"note\" id=\"note\" value=\"0\">
                   </div>


                  <div style=\"display:flex; justify-content: flex-end;\">
                      <a href=\"{{ path('app_evenement_editfront', {'id': evenement.id}) }}\" style=\"margin-right: 10px;\">
                          <button class=\"btn btn-warning\" style=\"background-color:lightgray;\">edit</button>
                      </a>
                      {{ include('frontoffice/evenement/deletefront.html.twig') }}
                  </div>

                  {% for comment in evenement.comments %}
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
                      <p>{{ comment.getPositiveVotesCount() }} people liked this event</p>
                      <p>{{ comment.getNegativeVotesCount() }} people disliked this comment</p>
                      <a href=\"{{ path('vote', {'id': comment.id, 'value': 1}) }}\" class=\"btn btn-success btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-up\"></i></a>
                      <a href=\"{{ path('vote', {'id': comment.id, 'value': -1}) }}\" class=\"btn btn-danger btn-circle btn-lg\" ><i class=\"bi bi-hand-thumbs-down\"></i></a>

                      {% for reply in comment.replies %}
                          <p> reply : {{reply.content}} <br> created At {{reply.createdAt|date(\"d/m/Y H:i\")}}</p>
                      {% endfor %}
                      {% endif %}
                      {% endfor %}
                      <p>Partager sur :</p>

                      <a href=\"https://www.facebook.com/sharer/sharer.php?u={{ url('app_evenement_showfront', {id: evenement.id}) }}\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #3b5998\"><i class=\"fab fa-facebook-f\"></i>Facebook</button>
                      </a>

                      <a href=\"https://twitter.com/intent/tweet?url={{ url('app_evenement_showfront', {id: evenement.id}) }}\" target=\"_blank\">
                          <button class=\"btn text-white\" style=\"background-color: #55acee\"><i class=\"fab fa-twitter\"></i>Twitter</button>
                      </a>

                      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url={{ url('app_evenement_showfront', {id: evenement.id}) }}\" target=\"_blank\">
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
          </evenement>
      </div>
        </div>
      </div>
    </section>
{% endblock %}
", "raiting/showfront.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\raiting\\showfront.html.twig");
    }
}
