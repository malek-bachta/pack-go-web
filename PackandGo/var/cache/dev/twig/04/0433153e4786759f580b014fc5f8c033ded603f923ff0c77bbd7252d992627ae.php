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

/* reclamation/index.html.twig */
class __TwigTemplate_5178c269fe50342565fba861af3643c0940c44d024eb98f531c7e6ab775f221b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamation index
    ";
        // line 4
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 4, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <br><br><br><br><br>

    <table class=\"table\">
        <thead>

        <tr>
                <th>Sujet</th>
                <th>Contenue</th>
                <th>User</th>
                <th>Dateenv</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenue", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "IdUser", [], "any", false, false, false, 27), "idC", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>

                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateenv", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateenv", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 30
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 30), "Traitée"))) {
                // line 31
                echo "
                    <td style=\"color: #1da851\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 34
                echo "                    <td style=\"color: #ffce3a\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    ";
            }
            // line 36
            echo "                    <td>
                    ";
            // line 37
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 37), "en attent"))) {
                // line 38
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_traiter", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">Traité</a>
                    ";
            } else {
                // line 40
                echo "                        ";
            }
            // line 41
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>


    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">Create new
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  166 => 48,  157 => 44,  150 => 41,  147 => 40,  141 => 38,  139 => 37,  136 => 36,  130 => 34,  125 => 32,  122 => 31,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  103 => 25,  100 => 24,  95 => 23,  78 => 8,  71 => 7,  62 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Reclamation index
    {{ knp_pagination_render(reclamations) }}
{% endblock %}

{% block body %}
    <br><br><br><br><br>

    <table class=\"table\">
        <thead>

        <tr>
                <th>Sujet</th>
                <th>Contenue</th>
                <th>User</th>
                <th>Dateenv</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td>{{ reclamation.sujet }}</td>
                <td>{{ reclamation.contenue }}</td>
                <td>{{ reclamation.IdUser.idC }}</td>

                <td>{{ reclamation.dateenv ? reclamation.dateenv|date('Y-m-d') : '' }}</td>
                {% if reclamation.etat == \"Traitée\" %}

                    <td style=\"color: #1da851\">{{ reclamation.etat }}</td>
                {% else %}
                    <td style=\"color: #ffce3a\">{{ reclamation.etat }}</td>
                    {% endif %}
                    <td>
                    {% if reclamation.etat == \"en attent\" %}
                    <a href=\"{{ path('reclamation_traiter', {'id': reclamation.idReclamation}) }}\" class=\"btn btn-secondary\">Traité</a>
                    {% else %}
                        {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


    <a href=\"{{ path('app_reclamation_new') }}\">Create new
    </a>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\reclamation\\index.html.twig");
    }
}
