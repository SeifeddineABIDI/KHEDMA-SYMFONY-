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

/* FrontOffice/project/tasheshow.html.twig */
class __TwigTemplate_fb3311e1a00352d3495166bb64c2377f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/project/tasheshow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/project/tasheshow.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "FrontOffice/project/tasheshow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div style=\"height: 50px; width: 50px;\"></div>
<div style=\"height: 30px; width: 50px;\"></div>
  <head>
  <meta charset=\"UTF-8\">
  <title>TASK BORAD</title>
   <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/style1.css"), "html", null, true);
        echo "\">
   <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/drag_drop.js"), "html", null, true);
        echo "\"></script>
</head>
<body>


  <h1>  TASK BOARD</h1>
 
  
  <div class=\"kanban-board\">
  
<div class=\"column\" data-status=\"TODO\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>TODO</h2>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 26
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 26) == "TODO")) {
                // line 27
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 27), "html", null, true);
                echo "</div>
    ";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>



<div class=\"column\" data-status=\"DOING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DOING</h2>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 37
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 37) == "DOING")) {
                // line 38
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "</div>
    ";
            }
            // line 40
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>

<style>
.column.over {
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.4);
}
</style>

    <div class=\"column\" data-status=\"DONE\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DONE</h2>
  ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 52
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 52) == "DONE")) {
                // line 53
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 53), "html", null, true);
                echo "</div>
    ";
            }
            // line 55
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
    <div class=\"column\" data-status=\"REVIEWING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>REVIEWING</h2>
  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 60
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 60) == "REVIEWING")) {
                // line 61
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 61), "html", null, true);
                echo "</div>
    ";
            }
            // line 63
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</div>
    <div class=\"column\" data-status=\"ACCEPTED\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>ACCEPTED</h2>
  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 68) == "ACCEPTED")) {
                // line 69
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 69), "html", null, true);
                echo "</div>
    ";
            }
            // line 71
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>
  </div>


   <button onclick=\"window.location.href='";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        echo "'\">Back to Projects</button>
  <button onclick=\"window.location.href='";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new", ["projetId" => (isset($context["projetId"]) || array_key_exists("projetId", $context) ? $context["projetId"] : (function () { throw new RuntimeError('Variable "projetId" does not exist.', 77, $this->source); })())]), "html", null, true);
        echo "'\">Add Task</button>
</body>




         
         
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/project/tasheshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 77,  256 => 76,  250 => 72,  244 => 71,  236 => 69,  233 => 68,  229 => 67,  224 => 64,  218 => 63,  210 => 61,  207 => 60,  203 => 59,  198 => 56,  192 => 55,  184 => 53,  181 => 52,  177 => 51,  165 => 41,  159 => 40,  151 => 38,  148 => 37,  144 => 36,  136 => 30,  130 => 29,  122 => 27,  119 => 26,  115 => 25,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'baseFront.html.twig' %}

{% block title %}Project{% endblock %}

{% block body %}

<div style=\"height: 50px; width: 50px;\"></div>
<div style=\"height: 30px; width: 50px;\"></div>
  <head>
  <meta charset=\"UTF-8\">
  <title>TASK BORAD</title>
   <link rel=\"stylesheet\" href=\"{{ asset('/style1.css') }}\">
   <script src=\"{{ asset('/drag_drop.js') }}\"></script>
</head>
<body>


  <h1>  TASK BOARD</h1>
 
  
  <div class=\"kanban-board\">
  
<div class=\"column\" data-status=\"TODO\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>TODO</h2>
  {% for tache in taches %}
    {% if tache.status == 'TODO' %}
      <div class=\"tache\" data-task-id=\"{{ tache.id }}\" draggable=\"true\" ondragstart=\"drag(event)\">{{ tache.nom }}</div>
    {% endif %}
  {% endfor %}
</div>



<div class=\"column\" data-status=\"DOING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DOING</h2>
  {% for tache in taches %}
    {% if tache.status == 'DOING' %}
      <div class=\"tache\" data-task-id=\"{{ tache.id }}\" draggable=\"true\" ondragstart=\"drag(event)\">{{ tache.nom }}</div>
    {% endif %}
  {% endfor %}
</div>

<style>
.column.over {
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.4);
}
</style>

    <div class=\"column\" data-status=\"DONE\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DONE</h2>
  {% for tache in taches %}
    {% if tache.status == 'DONE' %}
      <div class=\"tache\" data-task-id=\"{{ tache.id }}\" draggable=\"true\" ondragstart=\"drag(event)\">{{ tache.nom }}</div>
    {% endif %}
  {% endfor %}
</div>
    <div class=\"column\" data-status=\"REVIEWING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>REVIEWING</h2>
  {% for tache in taches %}
    {% if tache.status == 'REVIEWING' %}
      <div class=\"tache\" data-task-id=\"{{ tache.id }}\" draggable=\"true\" ondragstart=\"drag(event)\">{{ tache.nom }}</div>
    {% endif %}
  {% endfor %}
</div>
    <div class=\"column\" data-status=\"ACCEPTED\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>ACCEPTED</h2>
  {% for tache in taches %}
    {% if tache.status == 'ACCEPTED' %}
      <div class=\"tache\" data-task-id=\"{{ tache.id }}\" draggable=\"true\" ondragstart=\"drag(event)\">{{ tache.nom }}</div>
    {% endif %}
  {% endfor %}
</div>
  </div>


   <button onclick=\"window.location.href='{{ path('app_projet_index') }}'\">Back to Projects</button>
  <button onclick=\"window.location.href='{{ path('app_tache_new', {'projetId': projetId}) }}'\">Add Task</button>
</body>




         
         
         {% endblock %}", "FrontOffice/project/tasheshow.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\FrontOffice\\project\\tasheshow.html.twig");
    }
}
