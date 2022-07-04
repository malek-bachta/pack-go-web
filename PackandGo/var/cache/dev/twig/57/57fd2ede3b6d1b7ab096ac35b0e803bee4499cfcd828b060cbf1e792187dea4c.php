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

/* @KnpPaginator/Pagination/twitter_bootstrap_v3_sortable_link.html.twig */
class __TwigTemplate_1f4f69f01d777239d8acdcc2835e39a500eced28e8aead7f7905812db37a9818 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v3_sortable_link.html.twig"));

        // line 9
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " style=\"color: #000;\">
    <span class=\"pull-right\">
        ";
        // line 11
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            ";
            if ((0 === twig_compare((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 12, $this->source); })()), "desc"))) {
                // line 13
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            ";
            } else {
                // line 15
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            ";
            }
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        ";
        }
        // line 20
        echo "    </span>
    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v3_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  77 => 20,  73 => 18,  70 => 17,  66 => 15,  62 => 13,  59 => 12,  57 => 11,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Twitter Bootstrap v3 Sorting control implementation.
 *
 * @author Afolabi Olayinka <folabiolayinka@gmail.com>
 */
#}
<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %} style=\"color: #000;\">
    <span class=\"pull-right\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            {% else %}
                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            {% endif %}
        {% else %}
            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/twitter_bootstrap_v3_sortable_link.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\twitter_bootstrap_v3_sortable_link.html.twig");
    }
}
