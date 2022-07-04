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

/* packs/index.html.twig */
class __TwigTemplate_133621c4da428dc2fff43c9861a200a566de6913a16d5678156dc3a2ac6f1e36 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packs/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "packs/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Packs index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Packs index</h1>
<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">PACKS</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search\"id=\"search\">

                        <div class=\"table-responsive\">
                            <table class=\"table table-responsive-md\" id=\"tableac\">


        <thead>
            <tr>
                <th style=\"width:80px;\"><strong>#</strong></th>
                <th><strong>IdPack</strong></th>
                <th><strong>NomPack</strong></th>
                <th><strong>Texte</strong></th>
                <th><strong>Service</strong></th>
                <th><strong>Guide</strong></th>
                <th><strong>Destination</strong></th>
                <th><strong>BudgetPack</strong></th>
                <th><strong>actions</strong></th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 41, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 42
            echo "

        <tr>
                <td>  <a class=\"dropdown\" href=\"\"></a></td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "idPack", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nomPack", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "texte", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "service", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "guide", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "destination", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pack"], "offre", [], "any", false, false, false, 52), "budget", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn btn-danger light sharp\" data-bs-toggle=\"dropdown\">
                            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                        </button>
                        <div class=\"dropdown-menu\">
                    <button class=\"btn-dark\">  ";
            // line 59
            echo twig_include($this->env, $context, "packs/_delete_form.html.twig");
            echo "</button>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs_edit", ["idPack" => twig_get_attribute($this->env, $this->source, $context["pack"], "idPack", [], "any", false, false, false, 60)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo ">

                            </table>
                        </div>

                        <button class=\"btn-google\"> <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs_new");
        echo "\">Create new</a></button>
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
        return "packs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 70,  194 => 65,  174 => 60,  170 => 59,  160 => 52,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  130 => 42,  113 => 41,  89 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Packs index{% endblock %}

{% block body %}
    <h1>Packs index</h1>
<div class=\"content-body\">
    <div class=\"container-fluid\">
        <div class=\"row page-titles\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">PACKS</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <script src=\"{{ asset('back/js/jquery.min.js') }}\"></script>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search\"id=\"search\">

                        <div class=\"table-responsive\">
                            <table class=\"table table-responsive-md\" id=\"tableac\">


        <thead>
            <tr>
                <th style=\"width:80px;\"><strong>#</strong></th>
                <th><strong>IdPack</strong></th>
                <th><strong>NomPack</strong></th>
                <th><strong>Texte</strong></th>
                <th><strong>Service</strong></th>
                <th><strong>Guide</strong></th>
                <th><strong>Destination</strong></th>
                <th><strong>BudgetPack</strong></th>
                <th><strong>actions</strong></th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for pack in packs %}


        <tr>
                <td>  <a class=\"dropdown\" href=\"\"></a></td>
                <td>{{ pack.idPack }}</td>
                <td>{{ pack.nomPack }}</td>
                <td>{{ pack.texte }}</td>
                <td>{{ pack.service }}</td>
                <td>{{ pack.guide }}</td>
                <td>{{ pack.destination }}</td>
                <td>{{ pack.offre.budget }}</td>
                <td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn btn-danger light sharp\" data-bs-toggle=\"dropdown\">
                            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg>
                        </button>
                        <div class=\"dropdown-menu\">
                    <button class=\"btn-dark\">  {{ include('packs/_delete_form.html.twig') }}</button>
                    <a href=\"{{ path('app_packs_edit', {'idPack': pack.idPack}) }}\">edit</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody{% endfor %}>

                            </table>
                        </div>

                        <button class=\"btn-google\"> <a href=\"{{ path('app_packs_new') }}\">Create new</a></button>
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

{% endblock %}

", "packs/index.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\packs\\index.html.twig");
    }
}
