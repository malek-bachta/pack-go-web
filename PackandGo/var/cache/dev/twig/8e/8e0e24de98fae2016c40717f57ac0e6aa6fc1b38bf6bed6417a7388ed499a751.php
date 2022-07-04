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

/* offre/pdf.html.twig */
class __TwigTemplate_5cba2adb96e3e8452b4cb86d8212540aafbe043ba7e8bb9eda5ad79a1868f417 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/pdf.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 align = \"center\" >Liste des offres</h1>


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

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 25
            echo "                                    <tr>
                                        <td>  <a class=\"dropdown\" href=\"\"></a></td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "idOf", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nomOffre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "budget", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>


                                    </tr>

                                    </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo ">

                                </table>
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
        return "offre/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  96 => 29,  92 => 28,  88 => 27,  84 => 25,  80 => 24,  58 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}
    <h1 align = \"center\" >Liste des offres</h1>


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

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for offre in offres %}
                                    <tr>
                                        <td>  <a class=\"dropdown\" href=\"\"></a></td>
                                        <td>{{ offre.idOf }}</td>
                                        <td>{{ offre.nomOffre }}</td>
                                        <td>{{ offre.budget }}</td>


                                    </tr>

                                    </tbody{% endfor %}>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

{% endblock %}
", "offre/pdf.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\offre\\pdf.html.twig");
    }
}
