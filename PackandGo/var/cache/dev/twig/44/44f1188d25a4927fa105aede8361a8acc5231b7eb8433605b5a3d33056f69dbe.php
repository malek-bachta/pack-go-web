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

/* transport/flight.html.twig */
class __TwigTemplate_23324f830349b3e603a054c9beb84692113065482bf7fffeb6f53748f47d0ca2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/flight.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "transport/flight.html.twig", 1);
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
        echo "    <div class=\"breadcrumbs-content\">
        <h3>Flight</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Flight

        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 15
        echo "     <div class=\"rt-banner-searchbox flight-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
         <div class=\"tab-content\" id=\"myTabContent\">
             <div class=\"tab-pane show active\" id=\"rt-item_a_first\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_first\">
                 <form action=\"#\">
                     <div class=\"rt-radio-group\">
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline1\" name=\"customRadioInline1\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\" for=\"customRadioInline1\">One-way</label>
                         </div>
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline2\" name=\"customRadioInline2\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\"
                                    for=\"customRadioInline2\">Round-trip</label>
                         </div>
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline3\" name=\"customRadioInline3\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\"
                                    for=\"customRadioInline3\">Multi-city</label>
                         </div>
                         <div class=\"dropdown form-check-inline rt-searchlink mr-md-5\">
                             <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 1 Adult
                             </a>

                             <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                 <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room three</a>
                             </div>
                         </div><!-- ./dropdown -->
                         <div class=\"dropdown form-check-inline rt-searchlink\">
                             <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink2\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Economy
                             </a>

                             <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink2\">
                                 <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room three</a>
                             </div>
                         </div><!-- ./dropdown -->
                     </div><!-- /.radio-group -->
                     <div class=\"rt-input-group\">
                         <div class=\"single-input  col-rt-in-3\">
                             <select class=\"rt-selectactive banner-select\" name=\"from\"
                                     style=\"width: 100%\">
                                 <option value=\"1\">from</option>
                                 <option value=\"2\">Alaska</option>
                                 <option value=\"3\">Bahamas</option>
                                 <option value=\"4\">Bermuda</option>
                                 <option value=\"5\">Canada</option>
                                 <option value=\"6\">Caribbean</option>
                                 <option value=\"7\">Europe</option>
                                 <option value=\"8\">Hawaii</option>
                             </select>
                             <span class=\"input-iconbadge\"><img
                                         src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/icons-image/s_icon_1.png"), "html", null, true);
        echo "\" alt=\"\"
                                         draggable=\"false\"></span>
                         </div><!-- /.single-input -->
                         <div class=\"single-input  col-rt-in-3\">
                             <select class=\"rt-selectactive banner-select\" name=\"to\" style=\"width: 100%\">
                                 <option value=\"1\">To</option>
                                 <option value=\"2\">Alaska</option>
                                 <option value=\"3\">Bahamas</option>
                                 <option value=\"4\">Bermuda</option>
                                 <option value=\"5\">Canada</option>
                                 <option value=\"6\">Caribbean</option>
                                 <option value=\"7\">Europe</option>
                                 <option value=\"8\">Hawaii</option>
                             </select>
                             <span class=\"input-iconbadge\"><img
                                         src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/icons-image/s_icon_2.png"), "html", null, true);
        echo "\" alt=\"\"
                                         draggable=\"false\"></span>
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

    // line 115
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        // line 116
        echo "    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"first-tab\"  href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport1");
        echo "\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotels");
        echo "\">

                <i class=\"icofont-hotel\"></i>
                <span>Hotels</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport2");
        echo "\" >
                <i class=\"icofont-car-alt-4\"></i>
                <span>Cars</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"";
        // line 138
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

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "
    <div class=\"row\">
        <div class=\"col-lg-3 mx-auto mb-5 mb-lg-0 col-md-6\">
            <div class=\"rt-sidebar-group\">
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
                        Departure Time
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-1\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-1\">
                                    00:00-06:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2\">
                                    06:00-12:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2-train-1\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2-train-1\">
                                    12:00-18:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2-train-2\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2-train-2\">
                                    18:00-24:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                    </ul>
                </div><!-- /.rt-widget -->
                <div class=\"rt-widget widget_plane_time\">
                    <h3 class=\"rt-widget-title\">
                        Arrival Time
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-3tx\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-3tx\">
                                    00:00-06:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-4sa\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-4sa\">
                                    06:00-12:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-5\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-5\">
                                    12:00-18:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-51\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-51\">
                                    18:00-24:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                    </ul>
                </div><!-- /.rt-widget -->
                <div class=\"rt-widget widget_plane_time\">
                    <h3 class=\"rt-widget-title\">
                        Arrival Station
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-11\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-11\">
                                    Beijing South
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-111\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-111\">
                                    Beijing
                                </label>
                            </div><!-- ./orm-group -->

                        </li>

                    </ul>

                </div><!-- /.rt-widget -->
            </div><!-- /.rt-sidebar-group -->
        </div><!-- /.col-lg-3 -->
        <div class=\"col-lg-9\">
            <div class=\"flight-list-box rt-mb-30\"   >
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
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 314, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 315
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 315), "tayara"))) {
                // line 316
                echo "                    <div class=\"col-lg-12 col-md-6\">
                        <div class=\"flight-list-box rt-mb-30\">
                            <div
                                    class=\"top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between\">
                                <div class=\"flight-logo\">
                                    <img src=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/index.png"), "html", null, true);
                echo "\" alt=\"flt logo\" draggable=\"false\">
                                </div><!-- /.flight-logo -->
                                <div class=\"pricing\">
                                    <h5>";
                // line 324
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "nomagence", [], "any", false, false, false, 324), "html", null, true);
                echo "</h5>
                                    <h6>";
                // line 325
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "destination", [], "any", false, false, false, 325), "html", null, true);
                echo "</h6>
                                </div><!-- /.pricing -->
                                <div class=\"flight-time d-flex justify-content-between align-items-lg-center\">
                                    <div class=\"left\">
                                        <span class=\"d-block\">10:55</span>
                                        <span class=\"d-block\">HKG T2</span>
                                    </div><!-- /.left -->
                                    <div class=\"middle\">
                                        <img src=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/time-shape-line.png"), "html", null, true);
                echo "\" alt=\"time shape\" draggable=\"false\">
                                    </div><!-- /.middle -->
                                    <div class=\"right\">
                                        <span class=\"d-block\">15.00</span>
                                        <span class=\"d-block\">SIN T2</span>
                                    </div><!-- /.rght -->
                                </div><!-- /.flight-time -->
                                <div class=\"flight-detils\">
                                    <span class=\"d-block\"><i class=\"icofont-clock-time\"></i><!-- /.time -->";
                // line 341
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "duree", [], "any", false, false, false, 341), "html", null, true);
                echo "</span>
                                    <span class=\"d-block\"><a href=\"#collapseExample\" class=\"flt-d-clic\" data-toggle=\"collapse\" role=\"button\"
                                                             aria-expanded=\"false\" aria-controls=\"collapseExample\">Flight details <i
                                                    class=\"icofont-simple-down\"></i></a></span>
                                </div><!-- /.flight-detils -->
                                <div class=\"trip\">
                                    <span class=\"d-blok\">\$  ";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "prix", [], "any", false, false, false, 347), "html", null, true);
                echo "</span>
                                    <span class=\"d-block\">Roundtrip</span>
                                </div><!-- /.trip -->
                                <div class=\"book-now\">
                                    <a href=\"flight-details.html\" class=\"rt-btn  pill rt-gradient text-uppercase\">Book</a>
                                    <a  href=\"";
                // line 352
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 352)]), "html", null, true);
                echo "\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>
                                </div><!-- /.book-now -->
                            </div><!-- /.top-content -->
                            <div class=\"collapse bottom-content\" id=\"collapseExample\">
                                <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class=\"icofont-clock-time\"></i>4h5m</span></p>
                                <ul class=\"flight-timeline\">

                                    <li>
                                        <span>Nov 12 10:55</span>

                                    </li>
                                    <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                                    <li>
                                        <span>Nov 12 15:00</span>

                                    </li>
                                    <li><span>SIN - Singapore Changi Airport T2</span></li>
                                </ul>
                            </div><!-- /.bottom content -->
                        </div><!-- /.flight-box -->
                    </div><!-- /.col-lg-12 -->
                ";
            }
            // line 374
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "            <nav aria-label=\"Page navigation example\">
                ";
        // line 376
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 376, $this->source); })()));
        echo "
            </nav>


        </div><!-- /.col-lg-9 -->
    </div><!-- /.row -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/flight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 376,  521 => 375,  515 => 374,  490 => 352,  482 => 347,  473 => 341,  462 => 333,  451 => 325,  447 => 324,  441 => 321,  434 => 316,  431 => 315,  427 => 314,  258 => 147,  251 => 146,  237 => 138,  228 => 132,  218 => 125,  209 => 119,  204 => 116,  197 => 115,  167 => 91,  149 => 76,  86 => 15,  79 => 14,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front2.html.twig' %}
{% block title %}
    <div class=\"breadcrumbs-content\">
        <h3>Flight</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            Flight

        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
{% endblock %}
 {% block search %}
     <div class=\"rt-banner-searchbox flight-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
         <div class=\"tab-content\" id=\"myTabContent\">
             <div class=\"tab-pane show active\" id=\"rt-item_a_first\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_first\">
                 <form action=\"#\">
                     <div class=\"rt-radio-group\">
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline1\" name=\"customRadioInline1\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\" for=\"customRadioInline1\">One-way</label>
                         </div>
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline2\" name=\"customRadioInline2\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\"
                                    for=\"customRadioInline2\">Round-trip</label>
                         </div>
                         <div class=\"custom-control custom-radio custom-control-inline\">
                             <input type=\"radio\" id=\"customRadioInline3\" name=\"customRadioInline3\"
                                    class=\"custom-control-input\">
                             <label class=\"custom-control-label\"
                                    for=\"customRadioInline3\">Multi-city</label>
                         </div>
                         <div class=\"dropdown form-check-inline rt-searchlink mr-md-5\">
                             <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 1 Adult
                             </a>

                             <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                 <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room three</a>
                             </div>
                         </div><!-- ./dropdown -->
                         <div class=\"dropdown form-check-inline rt-searchlink\">
                             <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink2\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Economy
                             </a>

                             <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink2\">
                                 <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                 <a class=\"dropdown-item\" href=\"#\">Room three</a>
                             </div>
                         </div><!-- ./dropdown -->
                     </div><!-- /.radio-group -->
                     <div class=\"rt-input-group\">
                         <div class=\"single-input  col-rt-in-3\">
                             <select class=\"rt-selectactive banner-select\" name=\"from\"
                                     style=\"width: 100%\">
                                 <option value=\"1\">from</option>
                                 <option value=\"2\">Alaska</option>
                                 <option value=\"3\">Bahamas</option>
                                 <option value=\"4\">Bermuda</option>
                                 <option value=\"5\">Canada</option>
                                 <option value=\"6\">Caribbean</option>
                                 <option value=\"7\">Europe</option>
                                 <option value=\"8\">Hawaii</option>
                             </select>
                             <span class=\"input-iconbadge\"><img
                                         src=\"{{ asset('front/assets/images/icons-image/s_icon_1.png') }}\" alt=\"\"
                                         draggable=\"false\"></span>
                         </div><!-- /.single-input -->
                         <div class=\"single-input  col-rt-in-3\">
                             <select class=\"rt-selectactive banner-select\" name=\"to\" style=\"width: 100%\">
                                 <option value=\"1\">To</option>
                                 <option value=\"2\">Alaska</option>
                                 <option value=\"3\">Bahamas</option>
                                 <option value=\"4\">Bermuda</option>
                                 <option value=\"5\">Canada</option>
                                 <option value=\"6\">Caribbean</option>
                                 <option value=\"7\">Europe</option>
                                 <option value=\"8\">Hawaii</option>
                             </select>
                             <span class=\"input-iconbadge\"><img
                                         src=\"{{ asset('front/assets/images/icons-image/s_icon_2.png') }}\" alt=\"\"
                                         draggable=\"false\"></span>
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
                         <div class=\"single-input  col-rt-in-1\">
                             <button type=\"submit\"><i class=\"icofont-search\"></i></button>
                         </div><!-- /.single-input -->
                     </div><!-- /.rt-input-group -->
                 </form><!-- ./ form -->
             </div>
         </div>
     </div>

 {% endblock %}

{% block choose %}
    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"first-tab\"  href=\"{{ path('list_transport1') }}\" >
                <i class=\"icofont-airplane\"></i>
                <span>Flights</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link inactive\" href=\"{{ path('app_hotels') }}\">

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
            <a class=\"nav-link inactive\" href=\"{{ path('list_transport3') }}\">
                <i class=\"icofont-train-line\"></i>
                <span>Trains</span>
            </a>
        </li>
    </ul>
{% endblock %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-lg-3 mx-auto mb-5 mb-lg-0 col-md-6\">
            <div class=\"rt-sidebar-group\">
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
                        Departure Time
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-1\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-1\">
                                    00:00-06:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2\">
                                    06:00-12:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2-train-1\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2-train-1\">
                                    12:00-18:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-2-train-2\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-2-train-2\">
                                    18:00-24:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                    </ul>
                </div><!-- /.rt-widget -->
                <div class=\"rt-widget widget_plane_time\">
                    <h3 class=\"rt-widget-title\">
                        Arrival Time
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-3tx\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-3tx\">
                                    00:00-06:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-4sa\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-4sa\">
                                    06:00-12:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-5\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-5\">
                                    12:00-18:00
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-51\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-51\">
                                    18:00-24:00
                                </label>
                            </div><!-- ./orm-group -->
                        </li>
                    </ul>
                </div><!-- /.rt-widget -->
                <div class=\"rt-widget widget_plane_time\">
                    <h3 class=\"rt-widget-title\">
                        Arrival Station
                    </h3><!-- /.rt-widget-title -->
                    <ul>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-11\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-11\">
                                    Beijing South
                                </label>
                            </div><!-- ./orm-group -->

                        </li>
                        <li class=\"clearfix\">

                            <div class=\"form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"train_gridCheckrt-111\">
                                <label class=\"form-check-label\" for=\"train_gridCheckrt-111\">
                                    Beijing
                                </label>
                            </div><!-- ./orm-group -->

                        </li>

                    </ul>

                </div><!-- /.rt-widget -->
            </div><!-- /.rt-sidebar-group -->
        </div><!-- /.col-lg-3 -->
        <div class=\"col-lg-9\">
            <div class=\"flight-list-box rt-mb-30\"   >
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
                {% if t.type==\"tayara\" %}
                    <div class=\"col-lg-12 col-md-6\">
                        <div class=\"flight-list-box rt-mb-30\">
                            <div
                                    class=\"top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between\">
                                <div class=\"flight-logo\">
                                    <img src=\"{{asset ('front/assets/images/all-img/index.png') }}\" alt=\"flt logo\" draggable=\"false\">
                                </div><!-- /.flight-logo -->
                                <div class=\"pricing\">
                                    <h5>{{ t.nomagence }}</h5>
                                    <h6>{{ t.destination }}</h6>
                                </div><!-- /.pricing -->
                                <div class=\"flight-time d-flex justify-content-between align-items-lg-center\">
                                    <div class=\"left\">
                                        <span class=\"d-block\">10:55</span>
                                        <span class=\"d-block\">HKG T2</span>
                                    </div><!-- /.left -->
                                    <div class=\"middle\">
                                        <img src=\"{{asset('front/assets/images/all-img/time-shape-line.png') }}\" alt=\"time shape\" draggable=\"false\">
                                    </div><!-- /.middle -->
                                    <div class=\"right\">
                                        <span class=\"d-block\">15.00</span>
                                        <span class=\"d-block\">SIN T2</span>
                                    </div><!-- /.rght -->
                                </div><!-- /.flight-time -->
                                <div class=\"flight-detils\">
                                    <span class=\"d-block\"><i class=\"icofont-clock-time\"></i><!-- /.time -->{{ t.duree }}</span>
                                    <span class=\"d-block\"><a href=\"#collapseExample\" class=\"flt-d-clic\" data-toggle=\"collapse\" role=\"button\"
                                                             aria-expanded=\"false\" aria-controls=\"collapseExample\">Flight details <i
                                                    class=\"icofont-simple-down\"></i></a></span>
                                </div><!-- /.flight-detils -->
                                <div class=\"trip\">
                                    <span class=\"d-blok\">\$  {{ t.prix }}</span>
                                    <span class=\"d-block\">Roundtrip</span>
                                </div><!-- /.trip -->
                                <div class=\"book-now\">
                                    <a href=\"flight-details.html\" class=\"rt-btn  pill rt-gradient text-uppercase\">Book</a>
                                    <a  href=\"{{ path('details',{'id':t.id}) }}\"  class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase \">print</a>
                                </div><!-- /.book-now -->
                            </div><!-- /.top-content -->
                            <div class=\"collapse bottom-content\" id=\"collapseExample\">
                                <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class=\"icofont-clock-time\"></i>4h5m</span></p>
                                <ul class=\"flight-timeline\">

                                    <li>
                                        <span>Nov 12 10:55</span>

                                    </li>
                                    <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                                    <li>
                                        <span>Nov 12 15:00</span>

                                    </li>
                                    <li><span>SIN - Singapore Changi Airport T2</span></li>
                                </ul>
                            </div><!-- /.bottom content -->
                        </div><!-- /.flight-box -->
                    </div><!-- /.col-lg-12 -->
                {% endif %}
            {% endfor %}
            <nav aria-label=\"Page navigation example\">
                {{ knp_pagination_render(list) }}
            </nav>


        </div><!-- /.col-lg-9 -->
    </div><!-- /.row -->



{% endblock %}

", "transport/flight.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\flight.html.twig");
    }
}
