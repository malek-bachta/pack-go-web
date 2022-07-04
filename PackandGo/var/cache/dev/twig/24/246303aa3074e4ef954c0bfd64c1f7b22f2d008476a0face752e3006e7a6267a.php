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

/* hotels/index.html.twig */
class __TwigTemplate_b9f988ab6b2962a6abd0dc64f99d6845334c8f081999482277b8d1f3c3a45090 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'search' => [$this, 'block_search'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "hotels/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 3
        echo "<div class=\"tab-pane  rtIncative\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
    <form action=\"#\">
        <div class=\"rt-radio-group\">
            <div class=\"dropdown form-check-inline rt-searchlink\">
                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink24\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Guestes per room
                </a>

                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink24\">
                    <a class=\"dropdown-item\" href=\"#\">Room one</a>
                    <a class=\"dropdown-item\" href=\"#\">Room two</a>
                    <a class=\"dropdown-item\" href=\"#\">Room three</a>
                </div>
            </div><!-- ./dropdown -->
        </div><!-- /.radio-group -->
        <div class=\"rt-input-group\">
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"destination\">

            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Return\">
                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"keywords(optional)\">
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-1\">
                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
            </div><!-- /.single-input -->
        </div><!-- /.rt-input-group -->
    </form><!-- ./ form -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block search %}
<div class=\"tab-pane  rtIncative\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
    <form action=\"#\">
        <div class=\"rt-radio-group\">
            <div class=\"dropdown form-check-inline rt-searchlink\">
                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink24\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Guestes per room
                </a>

                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink24\">
                    <a class=\"dropdown-item\" href=\"#\">Room one</a>
                    <a class=\"dropdown-item\" href=\"#\">Room two</a>
                    <a class=\"dropdown-item\" href=\"#\">Room three</a>
                </div>
            </div><!-- ./dropdown -->
        </div><!-- /.radio-group -->
        <div class=\"rt-input-group\">
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"destination\">

            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Return\">
                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"keywords(optional)\">
            </div><!-- /.single-input -->
            <div class=\"single-input  col-rt-in-1\">
                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
            </div><!-- /.single-input -->
        </div><!-- /.rt-input-group -->
    </form><!-- ./ form -->
</div>
{% endblock %}


", "hotels/index.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\index.html.twig");
    }
}
