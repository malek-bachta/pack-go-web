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

/* reclamation/MesReclamation.html.twig */
class __TwigTemplate_24bd82238eafb45b1c5357f4ed9a2b76343590dd22f659ceda364f8e3a672d3f extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/MesReclamation.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reclamation/MesReclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Mes Reclamations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 7
            echo "        <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"1.5s\">
            <div class=\"services-thumb\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/service-icons/s_icon_2.png"), "html", null, true);
            echo "\" alt=\"\" draggable=\"false\">
            </div><!-- /.services-thumb -->
            <h4>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sujet", [], "any", false, false, false, 11), "html", null, true);
            echo "</h4>
            <p>
                Contenue : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "contenue", [], "any", false, false, false, 13), "html", null, true);
            echo "<br>
                Etat : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 14), "html", null, true);
            echo "<br>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "idReclamation", [], "any", false, false, false, 15)]), "html", null, true);
            echo " \" class=\"btn btn-secondary\">Delete</a>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["idReclamation" => twig_get_attribute($this->env, $this->source, $context["r"], "idReclamation", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Edit</a>
            </p>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/MesReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  104 => 16,  100 => 15,  96 => 14,  92 => 13,  87 => 11,  82 => 9,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %} Mes Reclamations{% endblock %}

{% block body %}
    {% for r in reclamations %}
        <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"1.5s\">
            <div class=\"services-thumb\">
                <img src=\"{{ asset('front/assets/images/service-icons/s_icon_2.png') }}\" alt=\"\" draggable=\"false\">
            </div><!-- /.services-thumb -->
            <h4>{{ r.sujet }}</h4>
            <p>
                Contenue : {{ r.contenue }}<br>
                Etat : {{ r.etat }}<br>
                <a href=\"{{ path('reclamation_delete', {'id': r.idReclamation}) }} \" class=\"btn btn-secondary\">Delete</a>
                <a href=\"{{ path('reclamation_edit', {'idReclamation': r.idReclamation}) }}\" class=\"btn btn-danger\">Edit</a>
            </p>
        </div>

    {% endfor %}

{% endblock %}
", "reclamation/MesReclamation.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\reclamation\\MesReclamation.html.twig");
    }
}
