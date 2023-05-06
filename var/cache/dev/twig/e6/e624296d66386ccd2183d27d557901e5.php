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

/* tache/tachefreelancer.html.twig */
class __TwigTemplate_92b870c457e6335e4eeee46c13a096fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/tachefreelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/tachefreelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tache/tachefreelancer.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/style.css"), "html", null, true);
        echo "\">
   <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/drag_drop.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
  <h1>  TASK BOARD</h1>
  <button onclick=\"window.location.href='";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        echo "'\">Back to Projects</button>
  
  
  <div class=\"kanban-board\">
  
<div class=\"column\" data-status=\"TODO\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>TODO</h2>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 20
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 20) == "TODO")) {
                // line 21
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
    ";
            }
            // line 23
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>



<div class=\"column\" data-status=\"DOING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DOING</h2>
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 31
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 31) == "DOING")) {
                // line 32
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</div>
    ";
            }
            // line 34
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>

<style>
.column.over {
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.4);
}
</style>

    <div class=\"column\" data-status=\"DONE\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>DONE</h2>
  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 46
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 46) == "DONE")) {
                // line 47
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</div>
    ";
            }
            // line 49
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
    <div class=\"column\" data-status=\"REVIEWING\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>REVIEWING</h2>
  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 54
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 54) == "REVIEWING")) {
                // line 55
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 55), "html", null, true);
                echo "</div>
    ";
            }
            // line 57
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</div>
    <div class=\"column\" data-status=\"ACCEPTED\" ondragover=\"allowDrop(event)\" ondragenter=\"dragEnter(event)\" ondragleave=\"dragLeave(event)\" ondrop=\"drop(event)\">
  <h2>ACCEPTED</h2>
  ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 62
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 62) == "ACCEPTED")) {
                // line 63
                echo "      <div class=\"tache\" data-task-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\" draggable=\"true\" ondragstart=\"drag(event)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nom", [], "any", false, false, false, 63), "html", null, true);
                echo "</div>
    ";
            }
            // line 65
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
  </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tache/tachefreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 66,  223 => 65,  215 => 63,  212 => 62,  208 => 61,  203 => 58,  197 => 57,  189 => 55,  186 => 54,  182 => 53,  177 => 50,  171 => 49,  163 => 47,  160 => 46,  156 => 45,  144 => 35,  138 => 34,  130 => 32,  127 => 31,  123 => 30,  115 => 24,  109 => 23,  101 => 21,  98 => 20,  94 => 19,  84 => 12,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<head>
  <meta charset=\"UTF-8\">
  <title>TASK BORAD</title>
   <link rel=\"stylesheet\" href=\"{{ asset('/style.css') }}\">
   <script src=\"{{ asset('/drag_drop.js') }}\"></script>
</head>
<body>
  <h1>  TASK BOARD</h1>
  <button onclick=\"window.location.href='{{ path('app_projet_index') }}'\">Back to Projects</button>
  
  
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
", "tache/tachefreelancer.html.twig", "C:\\Users\\Safe\\Downloads\\PIDEV-SYMFONY (1)\\templates\\tache\\tachefreelancer.html.twig");
    }
}
