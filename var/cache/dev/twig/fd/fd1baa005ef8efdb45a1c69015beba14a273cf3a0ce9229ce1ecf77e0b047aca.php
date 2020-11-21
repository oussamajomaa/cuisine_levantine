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

/* home/home.html.twig */
class __TwigTemplate_9813832c8c164e554f993a5e3b1836dc5fa8bf1c1b052774e24e953802c9557f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<a id=\"back2Top\" title=\"Back to top\" href=\"#\">&#10148;</a>
\t<div class=\"container my-5\">

\t\t\t<h2 class=\"text-center ml-5\" id=\"ml1\">مـأكـولات شـرقيـة CUISINE LEVANTINE</h2>
\t\t\t


\t\t<div class=\"row d-flex justify-content-between\" >
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
            echo "\t\t\t
\t\t\t\t<div class=\"col col-md-6 col-lg-4 my-3 \" data-aos=\"fade-up\" data-aos-duration=\"2000\">
\t\t\t\t\t<div class=\"card\" style=\"width: 20rem;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<img src=\"/images/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"card-img-top image\" >
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<div class=\"row mb-1\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">السعر: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 37), "html", null, true);
            echo " &euro;</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">الوحدة: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "unit", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">المزيد...</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">تعديل</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 53,  156 => 44,  152 => 43,  146 => 40,  140 => 37,  134 => 34,  125 => 28,  120 => 26,  113 => 22,  109 => 21,  102 => 16,  98 => 15,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}


{% block body %}
<a id=\"back2Top\" title=\"Back to top\" href=\"#\">&#10148;</a>
\t<div class=\"container my-5\">

\t\t\t<h2 class=\"text-center ml-5\" id=\"ml1\">مـأكـولات شـرقيـة CUISINE LEVANTINE</h2>
\t\t\t


\t\t<div class=\"row d-flex justify-content-between\" >
\t\t\t{% for produit in produits %}
\t\t\t
\t\t\t\t<div class=\"col col-md-6 col-lg-4 my-3 \" data-aos=\"fade-up\" data-aos-duration=\"2000\">
\t\t\t\t\t<div class=\"card\" style=\"width: 20rem;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t\t<a href=\"{{ path (\"produit_show\", {'id':produit.id}) }}\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<img src=\"/images/{{produit.image}}\" class=\"card-img-top image\" >
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>{{produit.name}}</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{{produit.description}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{produit.name}}</h5>
\t\t\t\t\t\t\t<div class=\"row mb-1\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">السعر: {{produit.price}} &euro;</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">الوحدة: {{produit.unit}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"{{ path (\"produit_show\", {'id':produit.id}) }}\" class=\"btn btn-info btn-sm\">المزيد...</a>
\t\t\t\t\t\t\t<a href=\"{{ path (\"produit_edit\", {'id':produit.id}) }}\" class=\"btn btn-info btn-sm\">تعديل</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% endblock %}


", "home/home.html.twig", "/var/www/html/traiteur/templates/home/home.html.twig");
    }
}
