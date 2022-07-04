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

/* guide/show.html.twig */
class __TwigTemplate_e322114a9d957a26e1802ca59d4698eb786d83bf37c488967cbcab9b720b5c1a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "guide/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Guide List</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Recent Payments Queue</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-responsive-md\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>GUIDE LAST NAME</strong></th>
                                        <th><strong> GUIDE FIRST NAME</strong></th>
                                        <th><strong>TYPE</strong></th>
                                        <th><strong>PRICE</strong></th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                                    <tr>

                                        <td><strong>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</strong></td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td><a class=\"dropdown\" href=\"\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prenom", [], "any", false, false, false, 41), "html", null, true);
            echo "</a> </td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prix", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>


                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_guide", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_guide", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo ">
                                </table>
                            </div>
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
        return "guide/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 59,  145 => 53,  141 => 52,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  105 => 36,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Guide Managment{% endblock %}

{% block body %}

    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Guide List</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Recent Payments Queue</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-responsive-md\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>GUIDE LAST NAME</strong></th>
                                        <th><strong> GUIDE FIRST NAME</strong></th>
                                        <th><strong>TYPE</strong></th>
                                        <th><strong>PRICE</strong></th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody{% for g in list %}>
                                    <tr>

                                        <td><strong>{{ g.id }}</strong></td>
                                        <td>{{ g.nom }}</td>
                                        <td><a class=\"dropdown\" href=\"\">{{ g.prenom }}</a> </td>
                                        <td>{{ g.type}}</td>
                                        <td>{{ g.prix}}</td>


                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('update_guide',{'id':g.id}) }}\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('delete_guide',{'id':g.id}) }}\">Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody{% endfor %}>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "guide/show.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\guide\\show.html.twig");
    }
}
