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

/* services/servicesList.html.twig */
class __TwigTemplate_5784261165abc8cc2fccb6a35a18b328e68b77c6a57821a946f62b2c7196502e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/servicesList.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "services/servicesList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Service Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 5
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
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">service List</a></li>
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
                                    <table class=\"table table-responsive-md\" id=\"tableac\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>Formule</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>Stay</strong></th>
                                        <th><strong>Activity</strong></th>
                                        <th><strong>State</strong></th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 45
            echo "                                    <tr>
                                        <td><strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "idS", [], "any", false, false, false, 46), "html", null, true);
            echo "</strong></td>
                                        <td><a class=\"dropdown\" href=\"\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "formule", [], "any", false, false, false, 47), "html", null, true);
            echo "</a> </td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "sejours", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "activite", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "etat", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>

                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_service", ["idS" => twig_get_attribute($this->env, $this->source, $context["S"], "idS", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_service", ["idS" => twig_get_attribute($this->env, $this->source, $context["S"], "idS", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "services/servicesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  171 => 60,  167 => 59,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  133 => 45,  129 => 44,  95 => 12,  88 => 11,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Service Managment{% endblock %}
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
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">service List</a></li>
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
                                    <table class=\"table table-responsive-md\" id=\"tableac\">
                                    <thead>
                                    <tr>
                                        <th style=\"width:80px;\"><strong>#</strong></th>
                                        <th><strong>Formule</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>Stay</strong></th>
                                        <th><strong>Activity</strong></th>
                                        <th><strong>State</strong></th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"all\">
                                    {% for S in liste %}
                                    <tr>
                                        <td><strong>{{ S.idS }}</strong></td>
                                        <td><a class=\"dropdown\" href=\"\">{{ S.formule }}</a> </td>
                                        <td>{{ S.prix }}</td>
                                        <td>{{ S.sejours }}</td>
                                        <td>{{ S.activite }}</td>
                                        <td>{{ S.etat }}</td>

                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-success light sharp\" data-bs-toggle=\"dropdown\">
                                                    <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('update_service', {'idS':S.idS}) }}\">Edit</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('delete_service', {'idS':S.idS}) }}\">Delete</a>
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

{% endblock %}", "services/servicesList.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\services\\servicesList.html.twig");
    }
}
