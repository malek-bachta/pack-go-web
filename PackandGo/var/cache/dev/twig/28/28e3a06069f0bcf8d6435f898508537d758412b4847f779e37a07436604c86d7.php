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

/* hotels/hotelListFront.html.twig */
class __TwigTemplate_608645538f05bf8bfa2de4dcee43699e36567dc6602f0558210d79bcd965b2d0 extends Template
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
        // line 1
        return "front2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/hotelListFront.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "hotels/hotelListFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "<div class=\"breadcrumbs-content\">
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

    // line 13
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 14
        echo "<div class=\"rt-banner-searchbox flight-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
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

    // line 59
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        // line 60
        echo "    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" id=\"first-tab\"  href=\"#flight\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotels");
        echo "\">

                <i class=\"icofont-hotel\"></i>
                <span>Hotels</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#car\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#train\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 90
        echo "    <div class=\"tab-pane rtIncative fade-in-bottom\" id=\"rt-item_b_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_b_second\">
        <div class=\"row\">
            <div class=\"col-xl-3 mx-auto col-lg-3 col-md-6\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"rt-widget widget_rating\">
                        <h3 class=\"rt-widget-title\">
                            Star Rating
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1xs\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1xs\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xs\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xs\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xss\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xss\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xssa\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xssa\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_range-slider\">
                        <h3 class=\"rt-widget-title\">
                            Filter by Price
                        </h3><!-- /.rt-widget-title -->

                        <div class=\"slider-range\"></div>
                        <div class=\"price_slider_amount\">
                            <div class=\"clearfix\">
                                <div class=\"float-left\">
                                    <span>Price:</span>
                                </div><!-- /.float-left -->
                                <div class=\"float-right\">
                                    <input type=\"text\" class=\"amount\" name=\"price\" placeholder=\"Add Your Price\" />
                                </div><!-- /.float-right -->
                            </div><!-- /.clearfix -->
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" value=\"Filter\" class=\"rt-btn rt-gradient rounded-sm rt-sm text-uppercase\" />
                        </div><!-- /.text-center -->
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Neighborhood
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-11\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-11\">
                                        New York (and vicinity)
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-111\">
                                        New York
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1111\">
                                        Manhattan
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1s111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1s111\">
                                        Brooklyn
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                        <div class=\"show-more-links\">
                            <a href=\"#\">Show more</a>
                        </div>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Popular Locations
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-11\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-11\">
                                        Central Park
                                    </label>
                                </div><!-- ./orm-group -->
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-22\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-22\">
                                        Times Square
                                    </label>
                                </div><!-- ./orm-group -->
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-33\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-33\">
                                        Statue of Liberty
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-3s3\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-3s3\">
                                        Empire State Building
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>

                        </ul>
                        <div class=\"show-more-links\">
                            <a href=\"#\">Show more</a>
                        </div>
                    </div><!-- /.rt-widget -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-xl-9 col-lg-9 mt-5 mt-lg-0\">

                <div class=\"box-style__1 rt-mb-30\">
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
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 304, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 305
            echo "                    <div class=\"box-style__1 rt-mb-30\">
                        <div class=\"hotel-inner-content row\">
                            <div class=\"hotel-thumb col-md-3 mb-4 mb-md-0\">
                                    <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url(";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 308))), "html", null, true);
            echo ")\"></div>
                            </div><!-- /.hotel-thumb -->
                            <div class=\"hotel-text col-md-9\">
                                <div class=\"top mb-4 mb-md-0\">
                                    <h5>";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "nomh", [], "any", false, false, false, 312), "html", null, true);
            echo " <span> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star\"></i></span></h5>
                                    <p>";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["h"], "adresse", [], "any", false, false, false, 313), "html", null, true);
            echo "<span>| Near the subway</span></p>
                                </div><!-- /.top -->
                                <div class=\"middle-text d-md-flex justify-content-md-between mb-4 mb-md-0\">
                                    <div class=\"left\">
                                        <span class=\"badge rt-gradinet-badge pill\">4.3 <small>/5</small></span>
                                        <span>Excellent</span>
                                        <span>( 86 Reviews )</span>
                                        <div>
                                            <a href=\"#\">Free Cancellation</a>
                                        </div>
                                    </div><!-- /.left- -->
                                    <div class=\"right text-left text-md-right mt-4 mt-md-0\">
                                        <span class=\"d-block\">From USD</span>
                                        <span class=\"d-block\">\$";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["h"], "service", [], "any", false, false, false, 326), "prix", [], "any", false, false, false, 326), "html", null, true);
            echo "</span>
                                    </div><!-- /.right -->
                                </div><!-- /.middle-text -->
                                <div class=\"footer-elements d-flex justify-content-md-between align-items-center\">
                                    <div class=\"left\">
                                        <span data-tippy=\"wifi\"><img src=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-1.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"dumble\"><img src=\"";
            // line 332
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-2.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"resturent\"><img src=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-3.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"sofa\"><img src=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-4.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"watter\"><img src=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-5.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"music\"><img src=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-6.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"crolstve\"><img src=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-7.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"doller\"><img src=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-8.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"time\"><img src=\"";
            // line 339
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-9.png"), "html", null, true);
            echo "\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                    </div><!-- /.left -->
                                    <div class=\"right\">
                                        <a href=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["idh" => twig_get_attribute($this->env, $this->source, $context["h"], "idh", [], "any", false, false, false, 342)]), "html", null, true);
            echo "\" class=\"rt-btn rt-gradient pill rt-sm2 text-uppercase\">View Details</a>
                                    </div><!-- /.right -->
                                </div><!-- /.footer-elements -->
                            </div><!-- /.hotel-text -->
                        </div><!-- /.hotel-inner-content -->
                    </div><!-- /.hotel-list-box -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                <nav aria-label=\"Page navigation example\">
                    ";
        // line 351
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 351, $this->source); })()));
        echo "

                    <!--<ul class=\"pagination  rt-paganation justify-content-center\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-left\"></i></a>
                        </li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-right\"></i></a>
                        </li>
                    </ul>-->
                </nav>

            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/hotelListFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 351,  499 => 349,  486 => 342,  480 => 339,  476 => 338,  472 => 337,  468 => 336,  464 => 335,  460 => 334,  456 => 333,  452 => 332,  448 => 331,  440 => 326,  424 => 313,  420 => 312,  413 => 308,  408 => 305,  404 => 304,  188 => 90,  181 => 89,  154 => 69,  143 => 60,  136 => 59,  85 => 14,  78 => 13,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front2.html.twig' %}
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
            <a class=\"nav-link inactive\" id=\"first-tab\"  href=\"#flight\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_hotels') }}\">

                <i class=\"icofont-hotel\"></i>
                <span>Hotels</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#car\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"#train\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
{% endblock %}
{% block body %}
    <div class=\"tab-pane rtIncative fade-in-bottom\" id=\"rt-item_b_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_b_second\">
        <div class=\"row\">
            <div class=\"col-xl-3 mx-auto col-lg-3 col-md-6\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"rt-widget widget_rating\">
                        <h3 class=\"rt-widget-title\">
                            Star Rating
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1xs\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1xs\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xs\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xs\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xss\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xss\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-2xssa\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-2xssa\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_range-slider\">
                        <h3 class=\"rt-widget-title\">
                            Filter by Price
                        </h3><!-- /.rt-widget-title -->

                        <div class=\"slider-range\"></div>
                        <div class=\"price_slider_amount\">
                            <div class=\"clearfix\">
                                <div class=\"float-left\">
                                    <span>Price:</span>
                                </div><!-- /.float-left -->
                                <div class=\"float-right\">
                                    <input type=\"text\" class=\"amount\" name=\"price\" placeholder=\"Add Your Price\" />
                                </div><!-- /.float-right -->
                            </div><!-- /.clearfix -->
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" value=\"Filter\" class=\"rt-btn rt-gradient rounded-sm rt-sm text-uppercase\" />
                        </div><!-- /.text-center -->
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Neighborhood
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-11\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-11\">
                                        New York (and vicinity)
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-111\">
                                        New York
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1111\">
                                        Manhattan
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-1s111\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-1s111\">
                                        Brooklyn
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                        <div class=\"show-more-links\">
                            <a href=\"#\">Show more</a>
                        </div>
                    </div><!-- /.rt-widget -->
                    <div class=\"rt-widget widget_plane_time\">
                        <h3 class=\"rt-widget-title\">
                            Popular Locations
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-11\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-11\">
                                        Central Park
                                    </label>
                                </div><!-- ./orm-group -->
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-22\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-22\">
                                        Times Square
                                    </label>
                                </div><!-- ./orm-group -->
                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-33\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-33\">
                                        Statue of Liberty
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"Hotel_gridCheckrt-ex-3s3\">
                                    <label class=\"form-check-label\" for=\"Hotel_gridCheckrt-ex-3s3\">
                                        Empire State Building
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>

                        </ul>
                        <div class=\"show-more-links\">
                            <a href=\"#\">Show more</a>
                        </div>
                    </div><!-- /.rt-widget -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-xl-9 col-lg-9 mt-5 mt-lg-0\">

                <div class=\"box-style__1 rt-mb-30\">
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
                {% for h in list %}
                    <div class=\"box-style__1 rt-mb-30\">
                        <div class=\"hotel-inner-content row\">
                            <div class=\"hotel-thumb col-md-3 mb-4 mb-md-0\">
                                    <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url({{ asset('uploads/' ~ h.image) }})\"></div>
                            </div><!-- /.hotel-thumb -->
                            <div class=\"hotel-text col-md-9\">
                                <div class=\"top mb-4 mb-md-0\">
                                    <h5>{{ h.nomh}} <span> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star\"></i></span></h5>
                                    <p>{{ h.adresse }}<span>| Near the subway</span></p>
                                </div><!-- /.top -->
                                <div class=\"middle-text d-md-flex justify-content-md-between mb-4 mb-md-0\">
                                    <div class=\"left\">
                                        <span class=\"badge rt-gradinet-badge pill\">4.3 <small>/5</small></span>
                                        <span>Excellent</span>
                                        <span>( 86 Reviews )</span>
                                        <div>
                                            <a href=\"#\">Free Cancellation</a>
                                        </div>
                                    </div><!-- /.left- -->
                                    <div class=\"right text-left text-md-right mt-4 mt-md-0\">
                                        <span class=\"d-block\">From USD</span>
                                        <span class=\"d-block\">\${{ h.service.prix }}</span>
                                    </div><!-- /.right -->
                                </div><!-- /.middle-text -->
                                <div class=\"footer-elements d-flex justify-content-md-between align-items-center\">
                                    <div class=\"left\">
                                        <span data-tippy=\"wifi\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-1.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"dumble\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-2.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"resturent\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-3.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"sofa\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-4.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"watter\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-5.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"music\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-6.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"crolstve\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-7.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"doller\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-8.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                        <span data-tippy=\"time\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-9.png') }}\" alt=\"hotel iamge\"  draggable=\"false\"></span>
                                    </div><!-- /.left -->
                                    <div class=\"right\">
                                        <a href=\"{{ path('detail', {'idh':h.idh}) }}\" class=\"rt-btn rt-gradient pill rt-sm2 text-uppercase\">View Details</a>
                                    </div><!-- /.right -->
                                </div><!-- /.footer-elements -->
                            </div><!-- /.hotel-text -->
                        </div><!-- /.hotel-inner-content -->
                    </div><!-- /.hotel-list-box -->
                {% endfor %}

                <nav aria-label=\"Page navigation example\">
                    {{ knp_pagination_render(list) }}

                    <!--<ul class=\"pagination  rt-paganation justify-content-center\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-left\"></i></a>
                        </li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-right\"></i></a>
                        </li>
                    </ul>-->
                </nav>

            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>

{% endblock %}", "hotels/hotelListFront.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\hotelListFront.html.twig");
    }
}
