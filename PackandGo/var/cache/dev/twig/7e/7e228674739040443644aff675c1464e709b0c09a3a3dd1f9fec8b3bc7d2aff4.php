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

/* front.html.twig */
class __TwigTemplate_2abe736fa9c1acccb711932474cc9710fbb5745392339c1f795541479ae6ca5c extends Template
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
            'search' => [$this, 'block_search'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>pack & go</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/favicon.png"), "html", null, true);
        echo "\">
    <!-- ==================Start Css Link===================== -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/datepicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/icofont.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slider-range.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/tippy.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/app.css"), "html", null, true);
        echo "\">
    <!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
    <script src=\"http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"http://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body>


<!--
      ================== Header Area Start===================
   -->

<div class=\"rt-preloder\">
    <div class=\"preloder-box\">
        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/preloder.svg"), "html", null, true);
        echo "\" alt=\"preloder image\" draggable=\"false\">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

<header class=\"rt-site-header  rt-fixed-top white-menu\">
    <div class=\"top-header d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        <li> <i class=\"icofont-headphone-alt\"></i>Support</li>
                        <li><a href=\"http://pixner.net/cdn-cgi/l/email-protection#432a2d252c03262e2a243122316d202c2e63\"><i class=\"icofont-email\"></i><span class=\"__cf_email__\" data-cfemail=\"ff96919990bf9a9296988d9e8dd19c9092\">[email&#160;protected]</span></a></li>
                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-right top-social\">
                        <li><a href=\"#\" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-globe-americas\"></i>Englishs</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"#\">English</a>
                                <a class=\"dropdown-item\" href=\"#\">French</a>
                                <a class=\"dropdown-item\" href=\"#\">Trukis</a>
                            </div>
                        </li>
                        <li><a href=\"#\"><i class=\"fas fa-briefcase\"></i>My Trips</a></li>
                        <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>Sign in | Join</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->


    <div class=\"main-header rt-sticky\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <a href=\"index.html\" class=\"brand-logo\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/logo.png"), "html", null, true);
        echo "\" width=\"90\" height=\"90\" alt=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/pack&go.png"), "html", null, true);
        echo "\" width=\"100\" height=\"50\" alt=\"\"></a>
                <a href=\"index.html\" class=\"sticky-logo\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/logo.png"), "html", null, true);
        echo "\" width=\"60\" height=\"60\" alt=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/pack&go.png"), "html", null, true);
        echo "\" width=\"80\" height=\"40\" alt=\"\"></a>
                <div class=\"ml-auto d-flex align-items-center\">


                    <div class=\"main-menu\">
                        <ul>
                            <li class=\"current-menu-item\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport1");
        echo "\">Flights</a></li>


                        </ul>
                        <div class=\"mobile-menu\">
                            <div class=\"menu-click\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div><!-- end main menu -->
                    <div class=\"rt-nav-tolls d-flex align-items-center\">
    <span class=\"d-md-inline d-none\"><a href=\"contact.html\" class=\"rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1\">Contact
            Us</a></span>
                    </div>

                </div>
            </div>
        </nav>
    </div><!-- /.bootom-header -->

</header>


<!-- Modal -->
<div class=\"modal fade\" id=\"rtmodal-1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"rtmodal-1\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered rt-lgoinmodal \" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <div class=\"rt-modal-headr rt-mb-20 one\">
                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/Logo-icon.png"), "html", null, true);
        echo "\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-headr rt-mb-20 two\">
                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/Logo-icon.png"), "html", null, true);
        echo "\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-input one\">
                    <form action=\"#\" class=\"rt-form\">
                        <input type=\"text\" class=\"form-control pill rt-mb-15\" placeholder=\"User name\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Password\">
                        <div class=\"form-group forgot-pass\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckss\">
                                <label class=\"form-check-label\" for=\"gridCheckss\">
                                    Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type=\"submit\" class=\"rt-btn rt-gradient pill d-block text-uppercase \" value=\"Log In\">
                    </form>
                    <div class=\"ac-register\">
                        <span>Don’t have an account? <a href=\"#\" class=\"open-creatac\">Sign Up Now <i class=\"icofont-double-right\"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class=\"rt-modal-input two\">
                    <form action=\"#\" class=\"rt-form\">
                        <input type=\"text\" class=\"form-control pill rt-mb-15\" placeholder=\"User name\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Enter your mail address\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Password\">
                        <div class=\"form-group forgot-pass\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck333\">
                                <label class=\"form-check-label\" for=\"gridCheck333\">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck222\">
                                <label class=\"form-check-label\" for=\"gridCheck222\">
                                    By clicking \"Sign up\" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type=\"submit\" class=\"rt-btn rt-gradient pill d-block text-uppercase \" value=\"Log In\">
                    </form>
                    <div class=\"ac-register\">
                        <span>Already have an account?<a href=\"#\">LOGIN <i class=\"icofont-double-right\"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class=\"rt-modal-footer\">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class=\"rt-social rt-circle-style2\">

                        <li><a href=\"#\"><i class=\"icofont-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icofont-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icofont-linkedin\"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>





<!--
    !============= Banner Area Start ===========!
 -->

";
        // line 205
        $this->displayBlock('body', $context, $blocks);
        // line 206
        echo "<section class=\"rt-banner-area\">
    <div class=\"single-rt-banner rt-banner-height\" style=\"background-image: url(";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/banner01.png"), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <div class=\"row  rt-banner-height align-items-center\">
                <div class=\"col-lg-9\">
                    <div class=\"rt-banner-content\">
                        <h1 class=\"wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">
                            Explore <br>
                            The World!
                        </h1>
                        <p class=\"wow fade-in-top\">
                            You can create a Custom Trip.Search Our Lowest Fares to <br>
                            Your Favorite Destinations.Find a better way to travel
                        </p>

                        <div class=\"rt-banner-searchbox standard-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                            <div class=\"tab-content\" id=\"myTabContent\">

                                <div class=\"tab-pane show active\" id=\"rt-item_a_first\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_first\">
                                    <form action=\"#\">
                                        <div class=\"rt-radio-group\">
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline1\" name=\"customRadioInline1\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline1\">One-way</label>
                                            </div>
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline2\" name=\"customRadioInline2\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline2\">Round-trip</label>
                                            </div>
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline3\" name=\"customRadioInline3\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline3\">Multi-city</label>
                                            </div>
                                            <div class=\"dropdown form-check-inline rt-searchlink mr-md-5\">
                                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    1 Adult
                                                </a>

                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                                    <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Room three</a>
                                                </div>
                                            </div><!-- ./dropdown -->
                                            <div class=\"dropdown form-check-inline rt-searchlink\">
                                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink2\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">
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
                                                <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                                    <option value=\"1\">from</option>
                                                    <option value=\"2\">Alaska</option>
                                                    <option value=\"3\">Bahamas</option>
                                                    <option value=\"4\">Bermuda</option>
                                                    <option value=\"5\">Canada</option>
                                                    <option value=\"6\">Caribbean</option>
                                                    <option value=\"7\">Europe</option>
                                                    <option value=\"8\">Hawaii</option>
                                                </select>
                                                <span class=\"input-iconbadge\"><img src=\"assets/images/icons-image/s_icon_1.png\" alt=\"\" draggable=\"false\"></span>
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
                                                <span class=\"input-iconbadge\"><img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/icons-image/s_icon_2.png"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\"></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Return\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-1\">
                                                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
                                            </div><!-- /.single-input -->
                                        </div><!-- /.rt-input-group -->
                                    </form><!-- ./ form -->
                                </div>
                                ";
        // line 305
        $this->displayBlock('search', $context, $blocks);
        // line 343
        echo "                                <div class=\"tab-pane  rtIncative\" id=\"rt-item_a_third\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_third\">
                                    <form action=\"#\">

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
                                <div class=\"tab-pane  rtIncative\" id=\"rt-item_a_four\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_four\">
                                    <form action=\"#\">
                                        <div class=\"rt-input-group\">
                                            <div class=\"single-input  col-rt-in-3\">
                                                <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                                    <option value=\"1\">from</option>
                                                    <option value=\"2\">Alaska</option>
                                                    <option value=\"3\">Bahamas</option>
                                                    <option value=\"4\">Bermuda</option>
                                                    <option value=\"5\">Canada</option>
                                                    <option value=\"6\">Caribbean</option>
                                                    <option value=\"7\">Europe</option>
                                                    <option value=\"8\">Hawaii</option>
                                                </select>
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
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"train no( opt)\">
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-1\">
                                                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
                                            </div><!-- /.single-input -->
                                        </div><!-- /.rt-input-group -->
                                    </form><!-- ./ form -->
                                </div>

                            </div>
                        </div><!-- /.rt-banner-searchbox -->


                        <ul class=\"nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" id=\"first-tab\" data-target=\"#rt-item_b_first\" data-secondary=\"#rt-item_a_first\"
                                   data-toggle=\"tab\" href=\"#first\" role=\"tab\" aria-controls=\"first-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-airplane\"></i>
                                    <span>Flights</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"second-tab\" data-target=\"#rt-item_b_second\" data-secondary=\"#rt-item_a_second\"
                                   data-toggle=\"tab\" href=\"#second\" role=\"tab\" aria-controls=\"second-tab\" aria-selected=\"true\">

                                    <i class=\"icofont-hotel\"></i>
                                    <span>Hotels</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"third-tab\" data-target=\"#rt-item_b_thrid\" data-secondary=\"#rt-item_a_third\"
                                   data-toggle=\"tab\" href=\"#third\" role=\"tab\" aria-controls=\"third-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-car-alt-4\"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"four-tab\" data-target=\"#rt-item_b_four\" data-secondary=\"#rt-item_a_four\"
                                   data-toggle=\"tab\" href=\"#four\" role=\"tab\" aria-controls=\"four-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-train-line\"></i>
                                    <span>Trains</span>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>


<!--
    ========= Counter Start ========================
 -->

<div class=\"counter-area\">
    <div class=\"container\">
        <div class=\"row\">



            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\">
                    <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/counter-icons/counter_iocn_1.png"), "html", null, true);
        echo "\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">90,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\" >
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\" data-wow-duration=\"1.5s\">
                    <img src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/counter-icons/counter_iocn_2.png"), "html", null, true);
        echo "\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">2,00</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\" data-wow-duration=\"2s\">
                    <img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/counter-icons/counter_iocn_3.png"), "html", null, true);
        echo "\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">80,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!--
    ===========Services Area start==========
 -->
<section class=\"emigr-services-area rtbgprefix-contain\" style=\"background-image: url(";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/backgrounds/dotbg.png"), "html", null, true);
        echo ")\">
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 text-center mx-auto\">
                <div class=\"rt-section-title-wrapper\">
                    <h2 class=\"rt-section-title\">
                        ";
        // line 503
        $this->displayBlock('title', $context, $blocks);
        // line 504
        echo "                    </h2><!-- /.rt-section-title -->

                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/service-icons/s_icon_1.png"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Accommodation</h4>
                    <p>No matter where you are travelling, Emigrar is here to help you get the best deals in Hotels around the world.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/service-icons/s_icon_2.png"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Transportation</h4>
                    <p>Whether you are travelling through Air, Sea or Land, Emigrar can arrange transportation according to.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"2s\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/service-icons/s_icon_3.png"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Expert Trip Planning</h4>
                    <p>Our Talented and Expert Trip Planning Team can make itinerary that suits our clients the best. We will make your travel</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottm -->
</section>


<!--
    ============Deal Area Start===============
 -->


<!--
    ========works start==========
 -->

<!--
    ============ Portfolio Start===============
 -->


<!--
    ======== Flight deals start======
 -->



<!--
    ====== call to action======
 -->


<!--
    =======app area strat=========
 -->


<!--
    ============= video area start==========
 -->


<!--
    ============= Testimonilas area start==========
 -->


<!--
    ============= Brands area start==========
 -->


<!--
    !============= Footer Area Start ===========!
 -->
<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    <div class=\"rt-shape-emenetns-1\" style=\"background-image: url(";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/shape-elements/shape-4.png"), "html", null, true);
        echo ")\" data-scrollax=\"properties: { translateY: '340px' }\"></div><!-- /.rt-shape-emenetns-1 -->
    <div class=\"footer-top rtbgprefix-cover\" style=\"background-image: url(";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/backgrounds/footerbg.png"), "html", null, true);
        echo ")\">
        <div class=\"footer-subscripbe-box wow fade-in-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-10 mx-auto text-center\">
                        <div class=\"rt-section-title-wrapper text-white\">
                            <h2 class=\"rt-section-title\">
                                <span>Newsletter</span>

                                Get The Latest news
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Get the latest travel inspirations and deals from Emigrar semimonthly with your email. You can
                                unsubscribe at any time. Your privacy & personal information will be treated.
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
                <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto\">
                        <div class=\"input-group mb-5\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter your email address\" aria-describedby=\"button-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn\" type=\"button\" id=\"button-addon2\">Subcribe Now</button>
                            </div>
                        </div><!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class=\"rt-dot-divider\"></div><!-- /.rt-dot-divider -->
            </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"1s\">
                        <h3 class=\"rt-footer-title\">Company Info</h3><!-- /.rt-footer-title -->
                        <ul class=\"rt-usefulllinks\">
                            <li>
                                <a href=\"#\">About Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Authenticity Guarantee</a>
                            </li>
                            <li>
                                <a href=\"#\">Customer Reviews</a>
                            </li>
                            <li>
                                <a href=\"#\">Privacy Policy</a>
                            </li>
                            <li>
                                <a href=\"#\">Business License</a>
                            </li>

                        </ul>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <h3 class=\"rt-footer-title\">Work With Us</h3>
                        <ul class=\"rt-usefulllinks\">
                            <li><a href=\"#\">Become Partner</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Become Affiliate</a></li>
                            <li><a href=\"#\">Associations</a></li>
                            <li><a href=\"#\">Advertise with us</a></li>
                            <li><a href=\"#\">Retirement Plan</a></li>
                            <li><a href=\"#\">Travel APIs</a></li>
                        </ul>
                    </div><!-- /.rt-single-widget -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"2s\">
                        <h3 class=\"rt-footer-title\">
                            My Account
                        </h3>
                        <ul class=\"rt-usefulllinks\">

                            <li><a href=\"#\">Manage Your Account</a></li>
                            <li><a href=\"#\">Build your own trip</a></li>
                            <li><a href=\"#\">Order Sttatus</a></li>
                            <li><a href=\"#\">Booking Guide</a></li>
                            <li><a href=\"#\">Travel Insurance & Safety Guide</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"2.5s\">
                        <h3 class=\"rt-footer-title\">
                            Plan Your Trip
                        </h3>
                        <ul class=\"rt-usefulllinks\">
                            <li><a href=\"#\">Special Offers</a></li>
                            <li><a href=\"#\">Hotels</a></li>
                            <li><a href=\"#\">Flights</a></li>
                            <li><a href=\"#\">Tour Packages</a></li>
                            <li><a href=\"#\">Accommodations</a></li>
                            <li><a href=\"#\">Transportation</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left\">
                    <div class=\"copy-text wow fade-in-bottom\" data-wow-duration=\"1s\">
                        Copyright © 2022.All Rights Reserved By <a href=\"#\">PACK&GO</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class=\"col-lg-6 text-center text-lg-right\">
                    <div class=\"rt-footer-social wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <ul>
                            <li><a href=\"#\"><img src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-1.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-2.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-3.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-4.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-5.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>

                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>



<!-- ==================Start Js Link===================== -->
<script data-cfasync=\"false\" src=\"../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/instafeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
<script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slider-range.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/vivus.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/tippy.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/app.js"), "html", null, true);
        echo "\"></script>

<!-- ==================End Js Link===================== -->

</body>


</html>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 205
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 305
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

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
                                </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 503
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1050 => 503,  1000 => 305,  987 => 205,  962 => 756,  958 => 755,  954 => 754,  950 => 753,  946 => 752,  942 => 751,  938 => 750,  934 => 749,  930 => 748,  926 => 747,  921 => 745,  917 => 744,  913 => 743,  909 => 742,  905 => 741,  901 => 740,  897 => 739,  893 => 738,  889 => 737,  885 => 736,  881 => 735,  877 => 734,  873 => 733,  869 => 732,  865 => 731,  849 => 718,  845 => 717,  841 => 716,  837 => 715,  833 => 714,  711 => 595,  707 => 594,  643 => 533,  631 => 524,  619 => 515,  606 => 504,  604 => 503,  594 => 496,  576 => 481,  564 => 472,  552 => 463,  430 => 343,  428 => 305,  409 => 289,  324 => 207,  321 => 206,  319 => 205,  244 => 133,  235 => 127,  200 => 95,  186 => 86,  180 => 85,  141 => 49,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>pack & go</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('front/assets/images/favicon.png') }}\">
    <!-- ==================Start Css Link===================== -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/datepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/OverlayScrollbars.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/icofont.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/slick-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/slider-range.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/tippy.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/app.css') }}\">
    <!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
    <script src=\"http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"http://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>


<body>


<!--
      ================== Header Area Start===================
   -->

<div class=\"rt-preloder\">
    <div class=\"preloder-box\">
        <img src=\"{{ asset('front/assets/images/all-img/preloder.svg') }}\" alt=\"preloder image\" draggable=\"false\">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

<header class=\"rt-site-header  rt-fixed-top white-menu\">
    <div class=\"top-header d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        <li> <i class=\"icofont-headphone-alt\"></i>Support</li>
                        <li><a href=\"http://pixner.net/cdn-cgi/l/email-protection#432a2d252c03262e2a243122316d202c2e63\"><i class=\"icofont-email\"></i><span class=\"__cf_email__\" data-cfemail=\"ff96919990bf9a9296988d9e8dd19c9092\">[email&#160;protected]</span></a></li>
                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-right top-social\">
                        <li><a href=\"#\" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-globe-americas\"></i>Englishs</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"#\">English</a>
                                <a class=\"dropdown-item\" href=\"#\">French</a>
                                <a class=\"dropdown-item\" href=\"#\">Trukis</a>
                            </div>
                        </li>
                        <li><a href=\"#\"><i class=\"fas fa-briefcase\"></i>My Trips</a></li>
                        <li><a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>Sign in | Join</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->


    <div class=\"main-header rt-sticky\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <a href=\"index.html\" class=\"brand-logo\"><img src=\"{{ asset('front/assets/images/logo/logo.png') }}\" width=\"90\" height=\"90\" alt=\"\"><img src=\"{{ asset('front/assets/images/logo/pack&go.png') }}\" width=\"100\" height=\"50\" alt=\"\"></a>
                <a href=\"index.html\" class=\"sticky-logo\"><img src=\"{{ asset('front/assets/images/logo/logo.png') }}\" width=\"60\" height=\"60\" alt=\"\"><img src=\"{{ asset('front/assets/images/logo/pack&go.png') }}\" width=\"80\" height=\"40\" alt=\"\"></a>
                <div class=\"ml-auto d-flex align-items-center\">


                    <div class=\"main-menu\">
                        <ul>
                            <li class=\"current-menu-item\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li><a href=\"{{ path('list_transport1') }}\">Flights</a></li>


                        </ul>
                        <div class=\"mobile-menu\">
                            <div class=\"menu-click\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div><!-- end main menu -->
                    <div class=\"rt-nav-tolls d-flex align-items-center\">
    <span class=\"d-md-inline d-none\"><a href=\"contact.html\" class=\"rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1\">Contact
            Us</a></span>
                    </div>

                </div>
            </div>
        </nav>
    </div><!-- /.bootom-header -->

</header>


<!-- Modal -->
<div class=\"modal fade\" id=\"rtmodal-1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"rtmodal-1\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered rt-lgoinmodal \" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <div class=\"rt-modal-headr rt-mb-20 one\">
                    <img src=\"{{ asset('front/assets/images/logo/Logo-icon.png') }}\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-headr rt-mb-20 two\">
                    <img src=\"{{ asset('front/assets/images/logo/Logo-icon.png') }}\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-input one\">
                    <form action=\"#\" class=\"rt-form\">
                        <input type=\"text\" class=\"form-control pill rt-mb-15\" placeholder=\"User name\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Password\">
                        <div class=\"form-group forgot-pass\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheckss\">
                                <label class=\"form-check-label\" for=\"gridCheckss\">
                                    Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type=\"submit\" class=\"rt-btn rt-gradient pill d-block text-uppercase \" value=\"Log In\">
                    </form>
                    <div class=\"ac-register\">
                        <span>Don’t have an account? <a href=\"#\" class=\"open-creatac\">Sign Up Now <i class=\"icofont-double-right\"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class=\"rt-modal-input two\">
                    <form action=\"#\" class=\"rt-form\">
                        <input type=\"text\" class=\"form-control pill rt-mb-15\" placeholder=\"User name\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Enter your mail address\">
                        <input type=\"password\" class=\"form-control pill rt-mb-15\" placeholder=\"Password\">
                        <div class=\"form-group forgot-pass\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck333\">
                                <label class=\"form-check-label\" for=\"gridCheck333\">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck222\">
                                <label class=\"form-check-label\" for=\"gridCheck222\">
                                    By clicking \"Sign up\" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type=\"submit\" class=\"rt-btn rt-gradient pill d-block text-uppercase \" value=\"Log In\">
                    </form>
                    <div class=\"ac-register\">
                        <span>Already have an account?<a href=\"#\">LOGIN <i class=\"icofont-double-right\"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class=\"rt-modal-footer\">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class=\"rt-social rt-circle-style2\">

                        <li><a href=\"#\"><i class=\"icofont-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icofont-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icofont-linkedin\"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>





<!--
    !============= Banner Area Start ===========!
 -->

{% block body %} {% endblock %}
<section class=\"rt-banner-area\">
    <div class=\"single-rt-banner rt-banner-height\" style=\"background-image: url({{ asset('front/assets/images/all-img/banner01.png') }})\">
        <div class=\"container\">
            <div class=\"row  rt-banner-height align-items-center\">
                <div class=\"col-lg-9\">
                    <div class=\"rt-banner-content\">
                        <h1 class=\"wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"0.5s\">
                            Explore <br>
                            The World!
                        </h1>
                        <p class=\"wow fade-in-top\">
                            You can create a Custom Trip.Search Our Lowest Fares to <br>
                            Your Favorite Destinations.Find a better way to travel
                        </p>

                        <div class=\"rt-banner-searchbox standard-search wow fade-in-bottom\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
                            <div class=\"tab-content\" id=\"myTabContent\">

                                <div class=\"tab-pane show active\" id=\"rt-item_a_first\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_first\">
                                    <form action=\"#\">
                                        <div class=\"rt-radio-group\">
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline1\" name=\"customRadioInline1\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline1\">One-way</label>
                                            </div>
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline2\" name=\"customRadioInline2\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline2\">Round-trip</label>
                                            </div>
                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input type=\"radio\" id=\"customRadioInline3\" name=\"customRadioInline3\" class=\"custom-control-input\">
                                                <label class=\"custom-control-label\" for=\"customRadioInline3\">Multi-city</label>
                                            </div>
                                            <div class=\"dropdown form-check-inline rt-searchlink mr-md-5\">
                                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    1 Adult
                                                </a>

                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                                    <a class=\"dropdown-item\" href=\"#\">Room one</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Room two</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Room three</a>
                                                </div>
                                            </div><!-- ./dropdown -->
                                            <div class=\"dropdown form-check-inline rt-searchlink\">
                                                <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink2\" data-toggle=\"dropdown\"
                                                   aria-haspopup=\"true\" aria-expanded=\"false\">
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
                                                <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                                    <option value=\"1\">from</option>
                                                    <option value=\"2\">Alaska</option>
                                                    <option value=\"3\">Bahamas</option>
                                                    <option value=\"4\">Bermuda</option>
                                                    <option value=\"5\">Canada</option>
                                                    <option value=\"6\">Caribbean</option>
                                                    <option value=\"7\">Europe</option>
                                                    <option value=\"8\">Hawaii</option>
                                                </select>
                                                <span class=\"input-iconbadge\"><img src=\"assets/images/icons-image/s_icon_1.png\" alt=\"\" draggable=\"false\"></span>
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
                                                <span class=\"input-iconbadge\"><img src=\"{{ asset('front/assets/images/icons-image/s_icon_2.png') }}\" alt=\"\" draggable=\"false\"></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Return\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-1\">
                                                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
                                            </div><!-- /.single-input -->
                                        </div><!-- /.rt-input-group -->
                                    </form><!-- ./ form -->
                                </div>
                                {% block search %}<div class=\"tab-pane  rtIncative\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
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
                                </div>{% endblock %}
                                <div class=\"tab-pane  rtIncative\" id=\"rt-item_a_third\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_third\">
                                    <form action=\"#\">

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
                                <div class=\"tab-pane  rtIncative\" id=\"rt-item_a_four\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_four\">
                                    <form action=\"#\">
                                        <div class=\"rt-input-group\">
                                            <div class=\"single-input  col-rt-in-3\">
                                                <select class=\"rt-selectactive banner-select\" name=\"from\" style=\"width: 100%\">
                                                    <option value=\"1\">from</option>
                                                    <option value=\"2\">Alaska</option>
                                                    <option value=\"3\">Bahamas</option>
                                                    <option value=\"4\">Bermuda</option>
                                                    <option value=\"5\">Canada</option>
                                                    <option value=\"6\">Caribbean</option>
                                                    <option value=\"7\">Europe</option>
                                                    <option value=\"8\">Hawaii</option>
                                                </select>
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
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control rt-date-picker has-icon\" placeholder=\"Depart\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-3\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"train no( opt)\">
                                            </div><!-- /.single-input -->
                                            <div class=\"single-input  col-rt-in-1\">
                                                <button type=\"submit\"><i class=\"icofont-search\"></i></button>
                                            </div><!-- /.single-input -->
                                        </div><!-- /.rt-input-group -->
                                    </form><!-- ./ form -->
                                </div>

                            </div>
                        </div><!-- /.rt-banner-searchbox -->


                        <ul class=\"nav serachnavs wow fade-in-bottom\" id=\"rtMultiTab\" role=\"tablist\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.5s\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" id=\"first-tab\" data-target=\"#rt-item_b_first\" data-secondary=\"#rt-item_a_first\"
                                   data-toggle=\"tab\" href=\"#first\" role=\"tab\" aria-controls=\"first-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-airplane\"></i>
                                    <span>Flights</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"second-tab\" data-target=\"#rt-item_b_second\" data-secondary=\"#rt-item_a_second\"
                                   data-toggle=\"tab\" href=\"#second\" role=\"tab\" aria-controls=\"second-tab\" aria-selected=\"true\">

                                    <i class=\"icofont-hotel\"></i>
                                    <span>Hotels</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"third-tab\" data-target=\"#rt-item_b_thrid\" data-secondary=\"#rt-item_a_third\"
                                   data-toggle=\"tab\" href=\"#third\" role=\"tab\" aria-controls=\"third-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-car-alt-4\"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link inactive\" id=\"four-tab\" data-target=\"#rt-item_b_four\" data-secondary=\"#rt-item_a_four\"
                                   data-toggle=\"tab\" href=\"#four\" role=\"tab\" aria-controls=\"four-tab\" aria-selected=\"false\">
                                    <i class=\"icofont-train-line\"></i>
                                    <span>Trains</span>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>


<!--
    ========= Counter Start ========================
 -->

<div class=\"counter-area\">
    <div class=\"container\">
        <div class=\"row\">



            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\">
                    <img src=\"{{ asset('front/assets/images/counter-icons/counter_iocn_1.png') }}\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">90,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\" >
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\" data-wow-duration=\"1.5s\">
                    <img src=\"{{ asset('front/assets/images/counter-icons/counter_iocn_2.png') }}\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">2,00</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center wow fadeInUp\" data-wow-duration=\"2s\">
                    <img src=\"{{ asset('front/assets/images/counter-icons/counter_iocn_3.png') }}\" alt=\"counter_iocn\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Trusted Members</h5>
                        <h6><span class=\"counter\">80,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!--
    ===========Services Area start==========
 -->
<section class=\"emigr-services-area rtbgprefix-contain\" style=\"background-image: url({{ asset('front/assets/images/backgrounds/dotbg.png') }})\">
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 text-center mx-auto\">
                <div class=\"rt-section-title-wrapper\">
                    <h2 class=\"rt-section-title\">
                        {% block title %} {% endblock %}
                    </h2><!-- /.rt-section-title -->

                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->

        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\">
                    <div class=\"services-thumb\">
                        <img src=\"{{ asset('front/assets/images/service-icons/s_icon_1.png') }}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Accommodation</h4>
                    <p>No matter where you are travelling, Emigrar is here to help you get the best deals in Hotels around the world.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                    <div class=\"services-thumb\">
                        <img src=\"{{ asset('front/assets/images/service-icons/s_icon_2.png') }}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Transportation</h4>
                    <p>Whether you are travelling through Air, Sea or Land, Emigrar can arrange transportation according to.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1 wow fade-in-bottom\" data-wow-duration=\"2s\">
                    <div class=\"services-thumb\">
                        <img src=\"{{ asset('front/assets/images/service-icons/s_icon_3.png') }}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Expert Trip Planning</h4>
                    <p>Our Talented and Expert Trip Planning Team can make itinerary that suits our clients the best. We will make your travel</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottm -->
</section>


<!--
    ============Deal Area Start===============
 -->


<!--
    ========works start==========
 -->

<!--
    ============ Portfolio Start===============
 -->


<!--
    ======== Flight deals start======
 -->



<!--
    ====== call to action======
 -->


<!--
    =======app area strat=========
 -->


<!--
    ============= video area start==========
 -->


<!--
    ============= Testimonilas area start==========
 -->


<!--
    ============= Brands area start==========
 -->


<!--
    !============= Footer Area Start ===========!
 -->
<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    <div class=\"rt-shape-emenetns-1\" style=\"background-image: url({{ asset('front/assets/images/shape-elements/shape-4.png') }})\" data-scrollax=\"properties: { translateY: '340px' }\"></div><!-- /.rt-shape-emenetns-1 -->
    <div class=\"footer-top rtbgprefix-cover\" style=\"background-image: url({{ asset('front/assets/images/backgrounds/footerbg.png') }})\">
        <div class=\"footer-subscripbe-box wow fade-in-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-10 mx-auto text-center\">
                        <div class=\"rt-section-title-wrapper text-white\">
                            <h2 class=\"rt-section-title\">
                                <span>Newsletter</span>

                                Get The Latest news
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Get the latest travel inspirations and deals from Emigrar semimonthly with your email. You can
                                unsubscribe at any time. Your privacy & personal information will be treated.
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
                <div class=\"row\">
                    <div class=\"col-lg-7 mx-auto\">
                        <div class=\"input-group mb-5\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter your email address\" aria-describedby=\"button-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn\" type=\"button\" id=\"button-addon2\">Subcribe Now</button>
                            </div>
                        </div><!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class=\"rt-dot-divider\"></div><!-- /.rt-dot-divider -->
            </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"1s\">
                        <h3 class=\"rt-footer-title\">Company Info</h3><!-- /.rt-footer-title -->
                        <ul class=\"rt-usefulllinks\">
                            <li>
                                <a href=\"#\">About Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Authenticity Guarantee</a>
                            </li>
                            <li>
                                <a href=\"#\">Customer Reviews</a>
                            </li>
                            <li>
                                <a href=\"#\">Privacy Policy</a>
                            </li>
                            <li>
                                <a href=\"#\">Business License</a>
                            </li>

                        </ul>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <h3 class=\"rt-footer-title\">Work With Us</h3>
                        <ul class=\"rt-usefulllinks\">
                            <li><a href=\"#\">Become Partner</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Become Affiliate</a></li>
                            <li><a href=\"#\">Associations</a></li>
                            <li><a href=\"#\">Advertise with us</a></li>
                            <li><a href=\"#\">Retirement Plan</a></li>
                            <li><a href=\"#\">Travel APIs</a></li>
                        </ul>
                    </div><!-- /.rt-single-widget -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"2s\">
                        <h3 class=\"rt-footer-title\">
                            My Account
                        </h3>
                        <ul class=\"rt-usefulllinks\">

                            <li><a href=\"#\">Manage Your Account</a></li>
                            <li><a href=\"#\">Build your own trip</a></li>
                            <li><a href=\"#\">Order Sttatus</a></li>
                            <li><a href=\"#\">Booking Guide</a></li>
                            <li><a href=\"#\">Travel Insurance & Safety Guide</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"rt-single-widget wow fade-in-bottom\" data-wow-duration=\"2.5s\">
                        <h3 class=\"rt-footer-title\">
                            Plan Your Trip
                        </h3>
                        <ul class=\"rt-usefulllinks\">
                            <li><a href=\"#\">Special Offers</a></li>
                            <li><a href=\"#\">Hotels</a></li>
                            <li><a href=\"#\">Flights</a></li>
                            <li><a href=\"#\">Tour Packages</a></li>
                            <li><a href=\"#\">Accommodations</a></li>
                            <li><a href=\"#\">Transportation</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left\">
                    <div class=\"copy-text wow fade-in-bottom\" data-wow-duration=\"1s\">
                        Copyright © 2022.All Rights Reserved By <a href=\"#\">PACK&GO</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class=\"col-lg-6 text-center text-lg-right\">
                    <div class=\"rt-footer-social wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <ul>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-1.png') }}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-2.png') }}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-3.png') }}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-4.png') }}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-5.png') }}\" alt=\"cardimage\" draggable=\"false\"></a></li>

                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>



<!-- ==================Start Js Link===================== -->
<script data-cfasync=\"false\" src=\"../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script src=\"{{ asset('front/assets/js/jquery-2.2.4.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/moment.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/instafeed.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.scrollUp.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/TweenMax.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/scrollax.min.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
<script src=\"{{ asset('front/assets/js/wow.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.overlayScrollbars.min.js') }}\"></script>
<script src=\" {{ asset('front/assets/js/jquery-ui.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.appear.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/select2.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/slick.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/slider-range.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/vivus.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/tippy.all.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/app.js') }}\"></script>

<!-- ==================End Js Link===================== -->

</body>


</html>









", "front.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\front.html.twig");
    }
}
