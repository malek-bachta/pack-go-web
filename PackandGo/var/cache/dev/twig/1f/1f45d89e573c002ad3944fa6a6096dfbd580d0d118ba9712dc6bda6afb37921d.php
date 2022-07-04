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

/* transport/cars.html.twig */
class __TwigTemplate_efe0cab4238766af8b7aa52dcf2dea9c60d8852cd0491a9646e5145eda1dcf2e extends Template
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
        // line 4
        return "front2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/cars.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "transport/cars.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    <div class=\"breadcrumbs-content\">
        <h3>Cars</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Cars
        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 17
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

    // line 62
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        // line 63
        echo "    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" id=\"first-tab\"  href=\"";
        // line 66
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
            <a class=\"nav-link active\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport2");
        echo "\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"";
        // line 85
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

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "    <div class=\"tab-pane rtIncative fade-in-bottom\" id=\"rt-item_b_thrid\" role=\"tabpanel\" aria-labelledby=\"rt-item_b_thrid\">
        <div class=\"row\">
            <div class=\"col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0\">
                <div class=\"rt-sidebar-group\">

                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Car type
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-1w1\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-1w1\">
                                        Economy (42)
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$30</span>
                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Seats
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-3\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-3\">
                                        Less than 4 seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$1,853.7</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-4\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-4\">
                                        4-5 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$25.07</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-5\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-5\">
                                        6-7 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$200.4</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-51\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-51\">
                                        8-9 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$259.03</span>
                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Mileage Allowance
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-11\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-11\">
                                        Unlimited Mileage
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$58.94</span>

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-111\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-111\">
                                        Limited Mileage
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$25.07</span>

                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Specifications
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-22\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-22\">
                                        Automatic Transmission
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-222\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-222\">
                                        Manual Transmission
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-2222\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-2222\">
                                        Air Conditioning
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->

                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-9\">
                <div class=\"flight-list-box rt-mb-30\">
                    <form action=\"#\" class=\"row\">
                        <div class=\"col-lg-3 col-md-6 mb-3 mb-lg-0\">
                            <button class=\"rt-btn pill rt-sm rt-gradient d-block\">Recommended</button>
                        </div><!-- /.col-lg-4 -->
                        <div class=\"col-lg-3 col-md-6 mb-3 mb-lg-0\">
                            <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                <option value=\"1\">Price</option>
                                <option value=\"2\">100</option>
                                <option value=\"3\">100</option>
                                <option value=\"4\">400</option>
                                <option value=\"5\">500</option>
                            </select>
                        </div><!-- /.col-lg-3 -->
                        <div class=\"col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0\">
                            <input type=\"text\" class=\"rt-date-picker form-control\" placeholder=\"Departure Time\">
                        </div><!-- /.col-lg-3 -->
                        <div class=\"col-lg-3 rt-input-group mini col-md-6 \">
                            <input type=\"text\" class=\"form-control rt-date-picker\" placeholder=\"Arrival Time \">
                        </div><!-- /.col-lg-3 -->
                    </form>
                </div><!-- /.flight-list-box -->
                ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 258
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 258), "sayara"))) {
                // line 259
                echo "                        <div class=\"flight-list-box rt-mb-30\">
                            <div class=\"top-content d-flex flex-md-row flex-column justify-content-lg-between\">
                                <div class=\"car-thumb mr-4 mr-lg-0 mb-5 mb-md-0\">
                                    <img src=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/car-1.png"), "html", null, true);
                echo "\" alt=\"car image\" class=\"rt-border-primary2\">
                                </div><!-- /.car-thumb -->
                                <div class=\"economy mb-5 mb-md-0\">
                                    <h5 class=\"f-size-16 rt-medium\">";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "nomagence", [], "any", false, false, false, 265), "html", null, true);
                echo "</h5>
                                    <span class=\"d-block f-size-13 text-555\">Hyundai i10 or Similar</span>
                                    <span class=\"d-block text-444 rt-mb-5\"> <span><i class=\"icofont-wheelchair\"></i> 4</span> <span><i class=\"icofont-briefcase\"></i> 2</span></span>
                                    <span class=\"badge rt-gradinet-badge pill rt-mr-10\">4.3 <small>/5</small></span>
                                    <span class=\"primary-color\">Excellent</span>
                                    <span class=\"f-size-12 text-878\">( 86 Reviews )</span>
                                </div><!-- /.economy -->
                                <div class=\"ck-list\">
                                    <ul class=\"rt-list\">
                                        <li class=\"d-block\">
                                            <span class=\"d-block f-size-20 rt-medium\"> durantion : ";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "duree", [], "any", false, false, false, 275), "html", null, true);
                echo "</span>
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Unlimited mileage
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Free Cancellation
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Instant Confirmation
                                        </li>
                                    </ul><!-- /.rt-list -->
                                </div><!-- /.ck-list -->
                                <div class=\"price-mant text-lg-right\">
                                    <span class=\"d-block text-primary f-size-24 rt-semiblod title-font\"> \$ ";
                // line 289
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 289), "html", null, true);
                echo "</span>
                                    <a href=\"car-2.html\" class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10\">Select</a>
                                    <a  href=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 291)]), "html", null, true);
                echo "\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>
                                </div><!-- /.price-mant -->
                            </div><!-- /.top-content -->
                            <div class=\"bottom-content row\">
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Pick-up</h3>
                                    <p class=\"f-size-14 line-height-24 text-555\">
                                        323 West 34Th Street, <br>
                                        Manhattan, New York, <br>
                                        USA
                                    </p>
                                    <p class=\"f-size-14 line-height-24 text-555 rt-mb-0\">
                                        0.51 mi from New <br>
                                        York city center
                                    </p>
                                </div><!-- /.single-discribe -->
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Drop-off</h3>
                                    <p class=\"f-size-14 line-height-24 text-555\">
                                        323 West 34Th Street, <br>
                                        Manhattan, New York, <br>
                                        USA
                                    </p>
                                    <p class=\"f-size-14 line-height-24 text-555 rt-mb-0\">
                                        0.51 mi from New <br>
                                        York city center
                                    </p>
                                </div><!-- /.single-discribe -->
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Included for Free</h3>
                                    <ul class=\"rt-list\">
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Automatic transmission
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Theft Protection
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Third Party Liability
                                        </li>

                                    </ul><!-- /.rt-list -->
                                </div><!-- /.single-discribe -->
                            </div><!-- /.bottom-content -->
                        </div><!-- /.flight-box -->
                    ";
            }
            // line 337
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "


                <nav aria-label=\"Page navigation example\">
                    ";
        // line 342
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 342, $this->source); })()));
        echo "

                </nav>
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/cars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 342,  468 => 338,  462 => 337,  413 => 291,  408 => 289,  391 => 275,  378 => 265,  372 => 262,  367 => 259,  364 => 258,  360 => 257,  194 => 93,  187 => 92,  173 => 85,  164 => 79,  148 => 66,  143 => 63,  136 => 62,  85 => 17,  78 => 16,  62 => 6,  55 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends 'front2.html.twig' %}
{% block title %}
    <div class=\"breadcrumbs-content\">
        <h3>Cars</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Cars
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
            <a class=\"nav-link active\" href=\"{{ path('list_transport2') }}\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"{{ path('list_transport3') }}\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
{% endblock %}
{% block body %}
    <div class=\"tab-pane rtIncative fade-in-bottom\" id=\"rt-item_b_thrid\" role=\"tabpanel\" aria-labelledby=\"rt-item_b_thrid\">
        <div class=\"row\">
            <div class=\"col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0\">
                <div class=\"rt-sidebar-group\">

                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Car type
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-1w1\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-1w1\">
                                        Economy (42)
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$30</span>
                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Seats
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-3\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-3\">
                                        Less than 4 seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$1,853.7</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-4\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-4\">
                                        4-5 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$25.07</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-5\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-5\">
                                        6-7 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$200.4</span>
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-51\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-51\">
                                        8-9 Seats
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$259.03</span>
                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Mileage Allowance
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-11\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-11\">
                                        Unlimited Mileage
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$58.94</span>

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-111\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-111\">
                                        Limited Mileage
                                    </label>
                                </div><!-- ./orm-group -->
                                <span class=\"float-right\">\$25.07</span>

                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Specifications
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-22\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-22\">
                                        Automatic Transmission
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-222\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-222\">
                                        Manual Transmission
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"car_gridCheckrt-2222\">
                                    <label class=\"form-check-label\" for=\"car_gridCheckrt-2222\">
                                        Air Conditioning
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>

                    </div><!-- /.rt-widget -->

                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-9\">
                <div class=\"flight-list-box rt-mb-30\">
                    <form action=\"#\" class=\"row\">
                        <div class=\"col-lg-3 col-md-6 mb-3 mb-lg-0\">
                            <button class=\"rt-btn pill rt-sm rt-gradient d-block\">Recommended</button>
                        </div><!-- /.col-lg-4 -->
                        <div class=\"col-lg-3 col-md-6 mb-3 mb-lg-0\">
                            <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                <option value=\"1\">Price</option>
                                <option value=\"2\">100</option>
                                <option value=\"3\">100</option>
                                <option value=\"4\">400</option>
                                <option value=\"5\">500</option>
                            </select>
                        </div><!-- /.col-lg-3 -->
                        <div class=\"col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0\">
                            <input type=\"text\" class=\"rt-date-picker form-control\" placeholder=\"Departure Time\">
                        </div><!-- /.col-lg-3 -->
                        <div class=\"col-lg-3 rt-input-group mini col-md-6 \">
                            <input type=\"text\" class=\"form-control rt-date-picker\" placeholder=\"Arrival Time \">
                        </div><!-- /.col-lg-3 -->
                    </form>
                </div><!-- /.flight-list-box -->
                {% for t in list  %}
                    {% if t.type == \"sayara\" %}
                        <div class=\"flight-list-box rt-mb-30\">
                            <div class=\"top-content d-flex flex-md-row flex-column justify-content-lg-between\">
                                <div class=\"car-thumb mr-4 mr-lg-0 mb-5 mb-md-0\">
                                    <img src=\"{{ asset ('front/assets/images/all-img/car-1.png') }}\" alt=\"car image\" class=\"rt-border-primary2\">
                                </div><!-- /.car-thumb -->
                                <div class=\"economy mb-5 mb-md-0\">
                                    <h5 class=\"f-size-16 rt-medium\">{{ t.nomagence}}</h5>
                                    <span class=\"d-block f-size-13 text-555\">Hyundai i10 or Similar</span>
                                    <span class=\"d-block text-444 rt-mb-5\"> <span><i class=\"icofont-wheelchair\"></i> 4</span> <span><i class=\"icofont-briefcase\"></i> 2</span></span>
                                    <span class=\"badge rt-gradinet-badge pill rt-mr-10\">4.3 <small>/5</small></span>
                                    <span class=\"primary-color\">Excellent</span>
                                    <span class=\"f-size-12 text-878\">( 86 Reviews )</span>
                                </div><!-- /.economy -->
                                <div class=\"ck-list\">
                                    <ul class=\"rt-list\">
                                        <li class=\"d-block\">
                                            <span class=\"d-block f-size-20 rt-medium\"> durantion : {{ t.duree }}</span>
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Unlimited mileage
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Free Cancellation
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"primary-color rt-mr-3\"><i class=\"icofont-check\"></i></span> Instant Confirmation
                                        </li>
                                    </ul><!-- /.rt-list -->
                                </div><!-- /.ck-list -->
                                <div class=\"price-mant text-lg-right\">
                                    <span class=\"d-block text-primary f-size-24 rt-semiblod title-font\"> \$ {{ t.prix }}</span>
                                    <a href=\"car-2.html\" class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10\">Select</a>
                                    <a  href=\"{{ path('details',{'id':t.id}) }}\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>
                                </div><!-- /.price-mant -->
                            </div><!-- /.top-content -->
                            <div class=\"bottom-content row\">
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Pick-up</h3>
                                    <p class=\"f-size-14 line-height-24 text-555\">
                                        323 West 34Th Street, <br>
                                        Manhattan, New York, <br>
                                        USA
                                    </p>
                                    <p class=\"f-size-14 line-height-24 text-555 rt-mb-0\">
                                        0.51 mi from New <br>
                                        York city center
                                    </p>
                                </div><!-- /.single-discribe -->
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Drop-off</h3>
                                    <p class=\"f-size-14 line-height-24 text-555\">
                                        323 West 34Th Street, <br>
                                        Manhattan, New York, <br>
                                        USA
                                    </p>
                                    <p class=\"f-size-14 line-height-24 text-555 rt-mb-0\">
                                        0.51 mi from New <br>
                                        York city center
                                    </p>
                                </div><!-- /.single-discribe -->
                                <div class=\"single-discribe col-md-4\">
                                    <h3 class=\"f-size-16 rt-medium text-424 rt-mb-10\">Included for Free</h3>
                                    <ul class=\"rt-list\">
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Automatic transmission
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Theft Protection
                                        </li>
                                        <li class=\"d-block\">
                                            <span class=\"text-555 rt-mr-3\"><i class=\"icofont-check\"></i></span> Third Party Liability
                                        </li>

                                    </ul><!-- /.rt-list -->
                                </div><!-- /.single-discribe -->
                            </div><!-- /.bottom-content -->
                        </div><!-- /.flight-box -->
                    {% endif %}
                {% endfor %}



                <nav aria-label=\"Page navigation example\">
                    {{ knp_pagination_render(list) }}

                </nav>
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>


{% endblock %}", "transport/cars.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\cars.html.twig");
    }
}
