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

/* transport/transport.html.twig */
class __TwigTemplate_272f1f507c8b158fa4c206ead16df9e16f1ace515326c6141a9d72ed6e7b9b33 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/transport.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "transport/transport.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "transport Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "<div class=\"input-group search-area\">
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <input type=\"text\" class=\"form-control\" placeholder=\"\" aria-label=\"Search\" id=\"search\"  >
    <span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">transport List</a></li>
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
                                        <th><strong>TRANSPORT TYPE</strong></th>
                                        <th><strong>AGENCY NAME</strong></th>
                                        <th><strong>PRICE</strong></th>
                                        <th><strong>DURATION</strong></th>
                                        <th><strong>DESTINATION</strong></th>


                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 43
            echo "                                    <tr>

                                        <td><strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong></td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                        <td><a class=\"dropdown\" href=\"\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "nomagence", [], "any", false, false, false, 47), "html", null, true);
            echo "</a> </td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "duree", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "destination", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>



                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_transport", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_transport", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Delete</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">print</a>

                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return "transport/transport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 69,  177 => 62,  173 => 61,  169 => 60,  156 => 50,  152 => 49,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  132 => 43,  128 => 42,  96 => 12,  89 => 11,  77 => 6,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}transport Managment{% endblock %}
{% block search %}
<div class=\"input-group search-area\">
    <script src=\"{{ asset('back/js/jquery.min.js') }}\"></script>
    <input type=\"text\" class=\"form-control\" placeholder=\"\" aria-label=\"Search\" id=\"search\"  >
    <span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
</div>
{% endblock %}
{% block body %}

    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">transport List</a></li>
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
                                        <th><strong>TRANSPORT TYPE</strong></th>
                                        <th><strong>AGENCY NAME</strong></th>
                                        <th><strong>PRICE</strong></th>
                                        <th><strong>DURATION</strong></th>
                                        <th><strong>DESTINATION</strong></th>


                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    {% for t in list %}
                                    <tr>

                                        <td><strong>{{ t.id }}</strong></td>
                                        <td>{{ t.type }}</td>
                                        <td><a class=\"dropdown\" href=\"\">{{ t.nomagence }}</a> </td>
                                        <td>{{ t.prix }}</td>
                                        <td>{{ t.duree }}</td>
                                        <td>{{ t.destination }}</td>



                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('update_transport',{'id':t.id}) }}\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('delete_transport',{'id':t.id}) }}\">Delete</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('details',{'id':t.id}) }}\">print</a>

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


{% endblock %}", "transport/transport.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\transport.html.twig");
    }
}
