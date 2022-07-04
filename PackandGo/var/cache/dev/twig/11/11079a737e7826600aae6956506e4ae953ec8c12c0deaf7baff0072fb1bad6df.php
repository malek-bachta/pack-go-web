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

/* offre/index.html.twig */
class __TwigTemplate_9b33bc8ffedea855c0d409f0139ad6cee35e3ff8e640dad2f6e4ca8537e42b0c extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offre index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Offre index</h1>
<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">OFFRES</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-responsive-md\">
        <thead>
            <tr>
                <th style=\"width:80px;\"><strong>#</strong></th>
                <th><strong>IdOf</strong></th>
                <th><strong>NomOffre</strong></th>
                <th><strong>Budget</strong></th>
                <th><strong>actions</strong></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 34, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 35
            echo "            <tr>
                <td>  <a class=\"dropdown\" href=\"\"></a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "idOf", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nomOffre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "budget", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn btn-danger light sharp\" data-bs-toggle=\"dropdown\">
                            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                        </button>
                        <div class=\"dropdown-menu\">
                            <button class=\"btn-dark\">";
            // line 46
            echo twig_include($this->env, $context, "offre/_delete_form.html.twig");
            echo "</button>

                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idOf" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOf", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">edit</a>
                        </div>
                    </div>

                </td>

            </tr>

        </tbody";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo ">

                            </table>
                        </div>
                        <button class=\"btn-google\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        echo "\">Create new</a></button>
                        <button class=\"btn-google\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_list");
        echo "\">Imprimer</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "offre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 61,  175 => 60,  169 => 56,  146 => 48,  141 => 46,  131 => 39,  127 => 38,  123 => 37,  119 => 35,  102 => 34,  73 => 7,  66 => 6,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}


{% block title %}Offre index{% endblock %}

{% block body %}
    <h1>Offre index</h1>
<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">OFFRES</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-responsive-md\">
        <thead>
            <tr>
                <th style=\"width:80px;\"><strong>#</strong></th>
                <th><strong>IdOf</strong></th>
                <th><strong>NomOffre</strong></th>
                <th><strong>Budget</strong></th>
                <th><strong>actions</strong></th>
            </tr>
        </thead>
        <tbody>
        {% for offre in offres %}
            <tr>
                <td>  <a class=\"dropdown\" href=\"\"></a></td>
                <td>{{ offre.idOf }}</td>
                <td>{{ offre.nomOffre }}</td>
                <td>{{ offre.budget }}</td>
                <td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn btn-danger light sharp\" data-bs-toggle=\"dropdown\">
                            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                        </button>
                        <div class=\"dropdown-menu\">
                            <button class=\"btn-dark\">{{ include('offre/_delete_form.html.twig') }}</button>

                            <a href=\"{{ path('app_offre_edit', {'idOf': offre.idOf}) }}\">edit</a>
                        </div>
                    </div>

                </td>

            </tr>

        </tbody{% endfor %}>

                            </table>
                        </div>
                        <button class=\"btn-google\"><a href=\"{{ path('app_offre_new') }}\">Create new</a></button>
                        <button class=\"btn-google\"><a href=\"{{ path('offre_list') }}\">Imprimer</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{% endblock %}
", "offre/index.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\offre\\index.html.twig");
    }
}
