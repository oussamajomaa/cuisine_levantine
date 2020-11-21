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

/* client/clientAll.html.twig */
class __TwigTemplate_faf8bca906671badd9ef8c20bdfe5e3ab25999cd291d527580dbfd5d127d01a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/clientAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/clientAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/clientAll.html.twig", 1);
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

        echo "All clients";
        
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

\t\t\t<h2 class=\"text-center ml-5\" id=\"ml6\">قائمة بالزبائن</h2>



\t\t
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 16
            echo "\t\t\t\t<div class=\"row mb-1\" >
\t\t\t
\t\t\t\t\t<div class=\"col-4 p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 19), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-2 p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "tel", [], "any", false, false, false, 22), "html", null, true);
            echo "
                    </div>

                    <div class=\"col-6 text-left p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </div>

                </div>
                <div class=\"row mb-2\">

                    <div class=\"col \" >
                        <a class=\"btn btn-success btn-sm\" href=\"\" data-aos=\"fade-right\" data-aos-duration=\"2000\">تعديل</a>
                        <a class=\"btn btn-danger btn-sm\" href=\"\" data-aos=\"fade-left\" data-aos-duration=\"2000\">حذف</a>
                    </div>
                </div>
                <hr>

\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/clientAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  122 => 26,  115 => 22,  107 => 19,  102 => 16,  98 => 15,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}All clients{% endblock %}


{% block body %}
<a id=\"back2Top\" title=\"Back to top\" href=\"#\">&#10148;</a>
\t<div class=\"container my-5\">

\t\t\t<h2 class=\"text-center ml-5\" id=\"ml6\">قائمة بالزبائن</h2>



\t\t
\t\t\t{% for client in clients %}
\t\t\t\t<div class=\"row mb-1\" >
\t\t\t
\t\t\t\t\t<div class=\"col-4 p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        {{client.nom}} {{client.prenom}}
                    </div>
                    <div class=\"col-2 p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        {{client.tel}}
                    </div>

                    <div class=\"col-6 text-left p-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        {{client.adresse}}
                    </div>

                </div>
                <div class=\"row mb-2\">

                    <div class=\"col \" >
                        <a class=\"btn btn-success btn-sm\" href=\"\" data-aos=\"fade-right\" data-aos-duration=\"2000\">تعديل</a>
                        <a class=\"btn btn-danger btn-sm\" href=\"\" data-aos=\"fade-left\" data-aos-duration=\"2000\">حذف</a>
                    </div>
                </div>
                <hr>

\t\t\t\t
\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% endblock %}", "client/clientAll.html.twig", "/var/www/html/traiteur/templates/client/clientAll.html.twig");
    }
}
