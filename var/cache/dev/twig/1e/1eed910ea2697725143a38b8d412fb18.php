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

/* chart/index.html.twig */
class __TwigTemplate_df82227e05c5313cdb115d1eaf7c267c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chart/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "chart/index.html.twig", 1);
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

        echo "Statistiques
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<canvas id=\"categories-evenements\" width=\"400\" height=\"200\"></canvas>

\t<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
\t<script>
\t\tconst data = ";
        // line 11
        echo json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()));
        echo ";
const labels = data.map(item => item.categorie);
const values = data.map(item => item.evenementsCount);
const colors = [
'#FF6384',
'#36A2EB',
'#FFCE56',
'#FF8A80',
'#00BFA5',
'#E0E0E0',
'#607D8B',
'#C2185B',
'#3F51B5',
'#4CAF50'
];

const datasets = [{
label: 'Nombre d\\'événements par catégorie',
data: values,
backgroundColor: colors.slice(0, values.length)
}];

const ctx = document.getElementById('categories-evenements').getContext('2d');
new Chart(ctx, {
type: 'bar',
data: {
labels: labels,
datasets: datasets
},
options: {
scales: {
yAxes: [
{
ticks: {
beginAtZero: true,
stepSize: 1
}
}
]
},
legend: {
display: false
},
title: {
display: true,
text: 'Nombre d\\'événements par catégorie'
}
}
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Statistiques
{% endblock %}

{% block body %}
<canvas id=\"categories-evenements\" width=\"400\" height=\"200\"></canvas>

\t<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
\t<script>
\t\tconst data = {{ data|json_encode|raw }};
const labels = data.map(item => item.categorie);
const values = data.map(item => item.evenementsCount);
const colors = [
'#FF6384',
'#36A2EB',
'#FFCE56',
'#FF8A80',
'#00BFA5',
'#E0E0E0',
'#607D8B',
'#C2185B',
'#3F51B5',
'#4CAF50'
];

const datasets = [{
label: 'Nombre d\\'événements par catégorie',
data: values,
backgroundColor: colors.slice(0, values.length)
}];

const ctx = document.getElementById('categories-evenements').getContext('2d');
new Chart(ctx, {
type: 'bar',
data: {
labels: labels,
datasets: datasets
},
options: {
scales: {
yAxes: [
{
ticks: {
beginAtZero: true,
stepSize: 1
}
}
]
},
legend: {
display: false
},
title: {
display: true,
text: 'Nombre d\\'événements par catégorie'
}
}
});
\t</script>
{% endblock %}
", "chart/index.html.twig", "C:\\Users\\firas\\OneDrive\\Desktop\\final\\PIDEV-SYMFONY\\templates\\chart\\index.html.twig");
    }
}
