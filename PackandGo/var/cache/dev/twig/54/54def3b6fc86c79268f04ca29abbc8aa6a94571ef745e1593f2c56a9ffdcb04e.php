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

/* transport/train.html.twig */
class __TwigTemplate_674469217a5511c4d31ee94caa73a390772136ad30ca70f6e7bd4d009e70d13a extends Template
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
            'choose' => [$this, 'block_choose'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "front2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/train.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "transport/train.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    <div class=\"breadcrumbs-content\">
        <h3>Hotels</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Hotel
        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 18
        echo "    <div class=\"rt-banner-searchbox flight-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane  show active\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
                <form action=\"#\">
                    <div class=\"rt-radio-group\">
                        <div class=\"dropdown form-check-inline rt-searchlink\">
                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink24\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                            <input type=\"text\" class=\"form-control rt-date-picker has-icon\"
                                   placeholder=\"Depart\">
                            <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                        </div><!-- /.single-input -->
                        <div class=\"single-input  col-rt-in-3\">
                            <input type=\"text\" class=\"form-control rt-date-picker has-icon\"
                                   placeholder=\"Return\">
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
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        // line 64
        echo "    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" id=\"first-tab\"  href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport1");
        echo "\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#hotel\">

                <i class=\"icofont-hotel\"></i>
                <span>Hotels</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport2");
        echo "\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport3");
        echo "\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 95
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 95), "train"))) {
                // line 96
                echo "            <div class=\"flight-list-box rt-mb-30 row\">
                <div class=\"col-md-3 mb-md-0 mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"rt-medium f-size-24 primary-color\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "nomagence", [], "any", false, false, false, 99), "html", null, true);
                echo "</span>
                        <ul class=\"rt-llist train-timeline\">
                            <li class=\"f-size-18 text-424\">
                                06:26
                            </li>
                            <li class=\"f-size-18 text-424\">
                                12:29
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-3 mb-md-0 mb-4 text-center text-md-right train-border\">
                    <span class=\"f-size-12 text-424\"><i class=\"icofont-clock-time rt-mr-3\"></i>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "duree", [], "any", false, false, false, 111), "html", null, true);
                echo "</span>
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-6\">

                    <div class=\"d-flex justify-content-between rt-mb-15\">
                        <span class=\"f-size-22 text-333\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "destination", [], "any", false, false, false, 116), "html", null, true);
                echo "</span>
                        <span class=\"f-size-24 text-primary rt-semiblod title-font\"><span class=\"f-size-12\">\$</span>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 117), "html", null, true);
                echo "</span>
                        <a href=\"train-2.html\" class=\"rt-btn rt-gradient rt-sm3 pill text-uppercase\">Book</a>
                        <a  href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>

                    </div><!-- /.d-flex  -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.flight-box -->

        ";
            }
            // line 126
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    <nav aria-label=\"Page navigation example\">
        ";
        // line 128
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 128, $this->source); })()));
        echo "
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/train.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 128,  255 => 127,  249 => 126,  239 => 119,  234 => 117,  230 => 116,  222 => 111,  207 => 99,  202 => 96,  199 => 95,  194 => 94,  187 => 93,  173 => 86,  164 => 80,  148 => 67,  143 => 64,  136 => 63,  85 => 18,  78 => 17,  62 => 7,  55 => 6,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'front2.html.twig' %}



{% block title %}
    <div class=\"breadcrumbs-content\">
        <h3>Hotels</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Hotel
        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
{% endblock %}
{% block search %}
    <div class=\"rt-banner-searchbox flight-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane  show active\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
                <form action=\"#\">
                    <div class=\"rt-radio-group\">
                        <div class=\"dropdown form-check-inline rt-searchlink\">
                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink24\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                            <input type=\"text\" class=\"form-control rt-date-picker has-icon\"
                                   placeholder=\"Depart\">
                            <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                        </div><!-- /.single-input -->
                        <div class=\"single-input  col-rt-in-3\">
                            <input type=\"text\" class=\"form-control rt-date-picker has-icon\"
                                   placeholder=\"Return\">
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
        </div>
    </div>
{% endblock %}
{% block choose%}
    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" id=\"first-tab\"  href=\"{{ path('list_transport1') }}\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#hotel\">

                <i class=\"icofont-hotel\"></i>
                <span>Hotels</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"{{ path('list_transport2') }}\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('list_transport3') }}\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
{% endblock %}
{% block body %}
    {% for t in list  %}
        {% if (t.type==\"train\") %}
            <div class=\"flight-list-box rt-mb-30 row\">
                <div class=\"col-md-3 mb-md-0 mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"rt-medium f-size-24 primary-color\">{{ t.nomagence }}</span>
                        <ul class=\"rt-llist train-timeline\">
                            <li class=\"f-size-18 text-424\">
                                06:26
                            </li>
                            <li class=\"f-size-18 text-424\">
                                12:29
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-3 mb-md-0 mb-4 text-center text-md-right train-border\">
                    <span class=\"f-size-12 text-424\"><i class=\"icofont-clock-time rt-mr-3\"></i>{{ t.duree }}</span>
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-6\">

                    <div class=\"d-flex justify-content-between rt-mb-15\">
                        <span class=\"f-size-22 text-333\">{{ t.destination }}</span>
                        <span class=\"f-size-24 text-primary rt-semiblod title-font\"><span class=\"f-size-12\">\$</span>{{ t.prix }}</span>
                        <a href=\"train-2.html\" class=\"rt-btn rt-gradient rt-sm3 pill text-uppercase\">Book</a>
                        <a  href=\"{{ path('details',{'id':t.id}) }}\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>

                    </div><!-- /.d-flex  -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.flight-box -->

        {% endif %}
    {% endfor %}
    <nav aria-label=\"Page navigation example\">
        {{ knp_pagination_render(list) }}
    </nav>
{% endblock %}", "transport/train.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\train.html.twig");
    }
}
