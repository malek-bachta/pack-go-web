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

/* front2.html.twig */
class __TwigTemplate_a0b0e748a7d043490fe81430c23bcefb9a4a53a5b2d184bbc9e0a4774e4f4951 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'search' => [$this, 'block_search'],
            'choose' => [$this, 'block_choose'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>pack & go</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/favicon.png"), "html", null, true);
        echo "\">
    <!-- ==================Start Css Link===================== -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/datepicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/icofont.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slider-range.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/tippy.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
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
        // line 48
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
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/logo.png"), "html", null, true);
        echo "\" width=\"90\" height=\"90\" alt=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/pack&go.png"), "html", null, true);
        echo "\" width=\"100\" height=\"50\" alt=\"\"></a>
                <a href=\"index.html\" class=\"sticky-logo\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/logo.png"), "html", null, true);
        echo "\" width=\"60\" height=\"60\" alt=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/pack&go.png"), "html", null, true);
        echo "\" width=\"80\" height=\"40\" alt=\"\"></a>
                <div class=\"ml-auto d-flex align-items-center\">


                    <div class=\"main-menu\">
                        <ul>
                            <li ><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li class=\"current-menu-item\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotels");
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
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/Logo-icon.png"), "html", null, true);
        echo "\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-headr rt-mb-20 two\">
                    <img src=\"";
        // line 130
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










<div class=\"rt-breadcump rt-breadcump-height with-logn-height\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/backgrounds/bredcump.png"), "html", null, true);
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height with-logn-height\">
            <div class=\"col-12\">
                ";
        // line 209
        $this->displayBlock('title', $context, $blocks);
        // line 222
        echo "            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump-search\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    ";
        // line 230
        $this->displayBlock('search', $context, $blocks);
        // line 231
        echo "
                    <!-- /.rt-banner-searchbox -->
                    ";
        // line 233
        $this->displayBlock('choose', $context, $blocks);
        // line 234
        echo "                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->







<div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
<section class=\"content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"tab-content\" id=\"rt-BototmTab\">

                    <div class=\"tab-pane show active fade-in-bottom\" id=\"rt-item_b_first\" role=\"tabpanel\"
                         aria-labelledby=\"rt-item_b_first\">
                        ";
        // line 255
        $this->displayBlock('body', $context, $blocks);
        // line 256
        echo "                    </div>

                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    !============= Footer Area Start ===========!
 -->
<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    <div class=\"rt-shape-emenetns-1\" style=\"background-image: url(";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/shape-elements/shape-4.png"), "html", null, true);
        echo ")\" data-scrollax=\"properties: { translateY: '340px' }\"></div><!-- /.rt-shape-emenetns-1 -->
    <div class=\"footer-top rtbgprefix-cover\" style=\"background-image: url(";
        // line 269
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
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-1.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-2.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-3.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-4.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 392
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
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/instafeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slider-range.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/vivus.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/tippy.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/app.js"), "html", null, true);
        echo "\"></script>

<!-- ==================End Js Link===================== -->

</body>


</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 209
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 210
        echo "                    <div class=\"breadcrumbs-content\">
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

    // line 230
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 233
    public function block_choose($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choose"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 255
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 255,  696 => 233,  684 => 230,  666 => 210,  659 => 209,  644 => 430,  640 => 429,  636 => 428,  632 => 427,  628 => 426,  624 => 425,  620 => 424,  616 => 423,  612 => 422,  608 => 421,  603 => 419,  599 => 418,  595 => 417,  591 => 416,  587 => 415,  583 => 414,  579 => 413,  575 => 412,  571 => 411,  567 => 410,  563 => 409,  559 => 408,  555 => 407,  551 => 406,  547 => 405,  531 => 392,  527 => 391,  523 => 390,  519 => 389,  515 => 388,  393 => 269,  389 => 268,  375 => 256,  373 => 255,  350 => 234,  348 => 233,  344 => 231,  342 => 230,  332 => 222,  330 => 209,  322 => 204,  245 => 130,  236 => 124,  202 => 93,  196 => 90,  185 => 84,  179 => 83,  141 => 48,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  55 => 10,  44 => 1,);
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
                            <li ><a href=\"{{ path('home') }}\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li class=\"current-menu-item\"><a href=\"{{ path('app_hotels') }}\">Flights</a></li>

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










<div class=\"rt-breadcump rt-breadcump-height with-logn-height\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url({{ asset('front/assets/images/backgrounds/bredcump.png') }})\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height with-logn-height\">
            <div class=\"col-12\">
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
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump-search\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    {% block search %}{% endblock %}

                    <!-- /.rt-banner-searchbox -->
                    {% block choose %} {% endblock %}
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->







<div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
<section class=\"content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"tab-content\" id=\"rt-BototmTab\">

                    <div class=\"tab-pane show active fade-in-bottom\" id=\"rt-item_b_first\" role=\"tabpanel\"
                         aria-labelledby=\"rt-item_b_first\">
                        {% block body %}{% endblock %}
                    </div>

                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

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


</html>", "front2.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\front2.html.twig");
    }
}
