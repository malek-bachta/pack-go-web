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

/* hotels/HotelList.html.twig */
class __TwigTemplate_9d9d76dc45c192c302b4086608104a53c787738be15255cb74d4ecdb168743e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'search' => [$this, 'block_search'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/HotelList.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "hotels/HotelList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hotels Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <div class=\"input-group search-area\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search\" id=\"search\">
        <span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Hotel List</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">

                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-responsive-md\" id=\"tableac\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>HOTEL NAME</strong></th>
                                        <th><strong>HOTEL CATEGORY</strong></th>
                                        <th><strong>HOTEL ADRESS</strong></th>
                                        <th><strong>E-MAIL</strong></th>
                                        <th><strong>PHONE NUMBER</strong></th>
                                        <th><strong>HOTEL EQUIPMENT</strong></th>
                                        <th><strong>PHOTO</strong></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 45
            echo "                                    <tr>
                                        <td><strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "idh", [], "any", false, false, false, 46), "html", null, true);
            echo "</strong></td>
                                        <td><a class=\"dropdown\" href=\"\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "nomh", [], "any", false, false, false, 47), "html", null, true);
            echo "</a> </td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "categorie", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "adresse", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "email", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "telh", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "equipement", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_hotel", ["idh" => twig_get_attribute($this->env, $this->source, $context["h"], "idh", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_hotel", ["idh" => twig_get_attribute($this->env, $this->source, $context["h"], "idh", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Delete</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["idh" => twig_get_attribute($this->env, $this->source, $context["h"], "idh", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Print</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo ">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/HotelList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  181 => 62,  177 => 61,  173 => 60,  163 => 53,  159 => 52,  155 => 51,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  135 => 46,  132 => 45,  128 => 44,  95 => 13,  88 => 12,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Hotels Managment{% endblock %}

{% block search %}
    <script src=\"{{ asset('back/js/jquery.min.js') }}\"></script>
    <div class=\"input-group search-area\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search\" id=\"search\">
        <span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
    </div>
{% endblock %}
{% block body %}

    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Hotel List</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">

                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-responsive-md\" id=\"tableac\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>HOTEL NAME</strong></th>
                                        <th><strong>HOTEL CATEGORY</strong></th>
                                        <th><strong>HOTEL ADRESS</strong></th>
                                        <th><strong>E-MAIL</strong></th>
                                        <th><strong>PHONE NUMBER</strong></th>
                                        <th><strong>HOTEL EQUIPMENT</strong></th>
                                        <th><strong>PHOTO</strong></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    {% for h in list %}
                                    <tr>
                                        <td><strong>{{ h.idh }}</strong></td>
                                        <td><a class=\"dropdown\" href=\"\">{{ h.nomh }}</a> </td>
                                        <td>{{ h.categorie }}</td>
                                        <td>{{ h.adresse }}</td>
                                        <td>{{ h.email }}</td>
                                        <td>{{ h.telh }}</td>
                                        <td>{{ h.equipement }}</td>
                                        <td>{{ h.image }}</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('update_hotel', {'idh':h.idh}) }}\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('delete_hotel', {'idh':h.idh}) }}\">Delete</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('pdf', {'idh':h.idh}) }}\">Print</a>
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
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
{% endblock %}", "hotels/HotelList.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\HotelList.html.twig");
    }
}
