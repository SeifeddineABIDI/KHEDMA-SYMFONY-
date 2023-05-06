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

/* tache/index.html.twig */
class __TwigTemplate_9d7a812f92516a36edd31ecc4a8b6b48 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tache/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<head>
  <meta charset=\"UTF-8\">
  <title>TASK BORAD</title>
   <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/style1.css"), "html", null, true);
        echo "\">
   <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/drag_drop.js"), "html", null, true);
        echo "\"></script>
</head>
<body>


  <h1>  TASK BOARD</h1>
  <button onclick=\"window.location.href='";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        echo "'\">Back to Projects</button>
  <button onclick=\"window.location.href='";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new", ["projetId" => (isset($context["projetId"]) || array_key_exists("projetId", $context) ? $context["projetId"] : (function () { throw new RuntimeError('Variable "projetId" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "'\">Add Task</button>
  
  <div class=\"kanban-board\">
  
<div class=\"column\" data-status=\"TODO\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>TODO</h2>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 22
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 22) == "TODO")) {
                // line 23
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 23), "html", null, true);
                echo "</div>
    ";
            }
            // line 25
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>



<div class=\"column\" data-status=\"DOING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DOING</h2>
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 33
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 33) == "DOING")) {
                // line 34
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 34), "html", null, true);
                echo "</div>
    ";
            }
            // line 36
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>

<style>
.column.over {
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.4);
}
</style>

    <div class=\"column\" data-status=\"DONE\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DONE</h2>
  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 48
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 48) == "DONE")) {
                // line 49
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</div>
    ";
            }
            // line 51
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
    <div class=\"column\" data-status=\"REVIEWING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>REVIEWING</h2>
  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 56
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 56) == "REVIEWING")) {
                // line 57
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 57), "html", null, true);
                echo "</div>
    ";
            }
            // line 59
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
    <div class=\"column\" data-status=\"ACCEPTED\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>ACCEPTED</h2>
  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 64
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 64) == "ACCEPTED")) {
                // line 65
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 65), "html", null, true);
                echo "</div>
    ";
            }
            // line 67
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
  </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tache/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 68,  228 => 67,  220 => 65,  217 => 64,  213 => 63,  208 => 60,  202 => 59,  194 => 57,  191 => 56,  187 => 55,  182 => 52,  176 => 51,  168 => 49,  165 => 48,  161 => 47,  149 => 37,  143 => 36,  135 => 34,  132 => 33,  128 => 32,  120 => 26,  114 => 25,  106 => 23,  103 => 22,  99 => 21,  90 => 15,  86 => 14,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<head>
  <meta charset=\"UTF-8\">
  <title>TASK BORAD</title>
   <link rel=\"stylesheet\" href=\"{{ asset('/style1.css') }}\">
   <script src=\"{{ asset('/drag_drop.js') }}\"></script>
</head>
<body>


  <h1>  TASK BOARD</h1>
  <button onclick=\"window.location.href='{{ path('app_projet_index') }}'\">Back to Projects</button>
  <button onclick=\"window.location.href='{{ path('app_tache_new', {'projetId': projetId}) }}'\">Add Task</button>
  
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
</body>
{% endblock %}
", "tache/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\tache\\index.html.twig");
    }
}
