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

/* transport/test.html.twig */
class __TwigTemplate_74f4e95167861826d2342773e514d8ea27f4d226240de7baa07940101ead277a extends Template
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
            'bodytransport' => [$this, 'block_bodytransport'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/test.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "transport/test.html.twig", 1);
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
                                                        src=\"assets/images/icons-image/s_icon_1.png\" alt=\"\"
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
                                                        src=\"assets/images/icons-image/s_icon_2.png\" alt=\"\"
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

    // line 114
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        // line 115
        echo "    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"first-tab\"  href=\"";
        // line 118
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

    // line 144
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "

    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 147, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 148
            echo "        <div class=\"tab-pane show active fade-in-bottom\" id=\"rt-item_b_first\" role=\"tabpanel\"
             aria-labelledby=\"rt-item_b_first\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-4 col-md-6 mx-auto\">
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
                                Departure time
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-11\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-11\">
                                            Morning (5am - 11am)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-111\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-111\">
                                            Afternoon (12pm - 5pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-1111\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-1111\">
                                            Evening (6pm - 11pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Arrival time
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-22\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-22\">
                                            Morning (5am - 11am)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-222\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-222\">
                                            Afternoon (12pm -
                                            5:pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-2222\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-2222\">
                                            Evening (6pm - 11pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Departure airports
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-1\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-1\">
                                            LHR (London) (82)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$711</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-2\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-2\">
                                            LGW (London) (10)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$610</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-3\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-3\">
                                            LCY (London) (5)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$1106</span>
                                </li>

                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Arrival airports
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-11\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-11\">
                                            JFK (New York) (70)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$711</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-22\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-22\">
                                            EWR (Newark) (24)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$610</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-33\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-33\">
                                            LGA (New York) (3)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$1106</span>
                                </li>

                            </ul>

                        </div><!-- /.rt-widget -->
                    </div><!-- /.rt-sidebar-group -->
                </div><!-- /.col-lg-3 -->
                <div class=\"col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
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
                        </div><!-- /.col-lg-12 -->

                        <div class=\"col-lg-12 col-md-6\">

                            ";
            // line 360
            $this->displayBlock('bodytransport', $context, $blocks);
            // line 361
            echo "                        </div><!-- /.col-lg-12 -->

                    </div><!-- /.row -->
                    <nav aria-label=\"Page navigation example\">
                        <ul class=\"pagination  rt-paganation justify-content-center\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-left\"></i></a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-right\"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "    <nav aria-label=\"Page navigation example\">
        ";
        // line 380
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 380, $this->source); })()));
        echo "
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 360
    public function block_bodytransport($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodytransport"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 360,  515 => 380,  512 => 379,  481 => 361,  479 => 360,  265 => 148,  248 => 147,  244 => 145,  237 => 144,  204 => 118,  199 => 115,  192 => 114,  87 => 15,  80 => 14,  63 => 3,  56 => 2,  39 => 1,);
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
                                                        src=\"assets/images/icons-image/s_icon_1.png\" alt=\"\"
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
                                                        src=\"assets/images/icons-image/s_icon_2.png\" alt=\"\"
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
{% block choose%}
    <ul class=\" nav-item nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\"
        data-wow-delay=\"1.5s\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"first-tab\"  href=\"{{ path('list_transport1') }}\" >
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


    {% for t in list  %}
        <div class=\"tab-pane show active fade-in-bottom\" id=\"rt-item_b_first\" role=\"tabpanel\"
             aria-labelledby=\"rt-item_b_first\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-4 col-md-6 mx-auto\">
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
                                Departure time
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-11\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-11\">
                                            Morning (5am - 11am)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-111\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-111\">
                                            Afternoon (12pm - 5pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-1111\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-1111\">
                                            Evening (6pm - 11pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Arrival time
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-22\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-22\">
                                            Morning (5am - 11am)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-222\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-222\">
                                            Afternoon (12pm -
                                            5:pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-2222\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-2222\">
                                            Evening (6pm - 11pm)
                                        </label>
                                    </div><!-- ./orm-group -->

                                </li>
                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Departure airports
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-1\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-1\">
                                            LHR (London) (82)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$711</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-2\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-2\">
                                            LGW (London) (10)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$610</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-3\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-3\">
                                            LCY (London) (5)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$1106</span>
                                </li>

                            </ul>

                        </div><!-- /.rt-widget -->
                        <div class=\"rt-widget widget_plane_time\">
                            <h3 class=\"rt-widget-title\">
                                Arrival airports
                            </h3><!-- /.rt-widget-title -->
                            <ul>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-11\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-11\">
                                            JFK (New York) (70)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$711</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-22\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-22\">
                                            EWR (Newark) (24)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$610</span>
                                </li>
                                <li class=\"clearfix\">

                                    <div class=\"form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckrt-ex-33\">
                                        <label class=\"form-check-label\" for=\"gridCheckrt-ex-33\">
                                            LGA (New York) (3)
                                        </label>
                                    </div><!-- ./orm-group -->
                                    <span class=\"float-right\">\$1106</span>
                                </li>

                            </ul>

                        </div><!-- /.rt-widget -->
                    </div><!-- /.rt-sidebar-group -->
                </div><!-- /.col-lg-3 -->
                <div class=\"col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
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
                        </div><!-- /.col-lg-12 -->

                        <div class=\"col-lg-12 col-md-6\">

                            {% block bodytransport %}{%  endblock %}
                        </div><!-- /.col-lg-12 -->

                    </div><!-- /.row -->
                    <nav aria-label=\"Page navigation example\">
                        <ul class=\"pagination  rt-paganation justify-content-center\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-left\"></i></a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"icofont-rounded-double-right\"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div>
    {% endfor %}
    <nav aria-label=\"Page navigation example\">
        {{ knp_pagination_render(list) }}
    </nav>
{% endblock %}", "transport/test.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\test.html.twig");
    }
}
