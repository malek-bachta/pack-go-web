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

/* packs/show.html.twig */
class __TwigTemplate_511aee475410f80d27cf8ff3ed0b8c6fb0c54862799c57a464e992e83ace5d6e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packs/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from pixner.net/emigrar/emigrar/trip-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 03:11:13 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Emigrar Html-5 Template</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/favicon.png"), "html", null, true);
        echo "\">
    <!-- ==================Start Css Link===================== -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/datepicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/icofont.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/slider-range.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/tippy.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
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
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/preloder.svg"), "html", null, true);
        echo "\" alt=\"preloder image\" draggable=\"false\">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->
<header class=\"rt-site-header  rt-fixed-top white-menu\">

    <div class=\"top-header rt-light-text d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        <li> <i class=\"icofont-headphone-alt\"></i>Support</li>
                        <li><a href=\"http://pixner.net/cdn-cgi/l/email-protection#bdd4d3dbd2fdd8d0d4dacfdccf93ded2d09d\"><i class=\"icofont-email\"></i><span class=\"__cf_email__\" data-cfemail=\"d6bfb8b0b996b3bbbfb1a4b7a4f8b5b9bb\">[email&#160;protected]</span></a></li>
                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-right top-social\">
                        <li><a href=\"#\" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                               aria-expanded=\"false\"><i class=\"fas fa-globe-americas\"></i>Englishs</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"#\">English</a>
                                <a class=\"dropdown-item\" href=\"#\">French</a>
                                <a class=\"dropdown-item\" href=\"#\">Trukis</a>
                            </div>
                        </li>
                        <li><a href=\"#\"><i class=\"fas fa-briefcase\"></i>My Trips</a></li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#rtmodal-1\"><i class=\"far fa-user-circle\"></i>Sign in | Join</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->

    <div class=\"main-header rt-sticky\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <a href=\"index.html\" class=\"brand-logo\"><img src=\"assets/images/logo/logo-white.png\" alt=\"\"></a>
                <a href=\"index.html\" class=\"sticky-logo\"><img src=\"assets/images/logo/logo.png\" alt=\"\"></a>
                <div class=\"ml-auto d-flex align-items-center\">


                    <div class=\"main-menu\">
                        <ul>
                            <li class=\"current-menu-item\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li class=\"menu-item-has-children\"><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Home Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"index.html\">Home One</a></li>
                                            <li><a href=\"index-02.html\">Home Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Hotel Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"hotel-1.html\">Hotel One</a></li>
                                            <li><a href=\"hotel-2.html\">Hotel Two</a></li>
                                            <li><a href=\"hotel-3.html\">Hotel Three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Flight Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"flight-1.html\">Flight One</a></li>
                                            <li><a href=\"flight-details.html\">Flight Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">train Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"train-1.html\">train One</a></li>
                                            <li><a href=\"train-2.html\">train Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">trip Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"trip-1.html\">trip One</a></li>
                                            <li><a href=\"trip-2.html\">trip Two</a></li>
                                            <li><a href=\"trip-3.html\">trip Three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">car Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"car-1.html\">car One</a></li>
                                            <li><a href=\"car-2.html\">car Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">blog Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"blog-grid.html\">blog-grid</a></li>
                                            <li><a href=\"single-blog.html\">blog-single 1</a></li>
                                            <li><a href=\"singleblog-lsidebar.html\">blog-single 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Others Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"about.html\">About</a></li>
                                            <li><a href=\"service-1.html\">service</a></li>
                                            <li><a href=\"afflite.html\">afflite</a></li>
                                            <li><a href=\"help.html\">help</a></li>
                                            <li><a href=\"how-work.html\">how-work</a></li>
                                            <li><a href=\"contact.html\">contact</a></li>
                                            <li><a href=\"404.html\">404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href=\"blog.html\">Blog</a></li>

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
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/logo/Logo-icon.png"), "html", null, true);
        echo "\" alt=\"modal logo\" draggable=\"false\">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class=\"rt-modal-headr rt-mb-20 two\">
                    <img src=\"";
        // line 193
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









<div class=\"rt-breadcump rt-breadcump-height\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(assets/images/backgrounds/bredcump.png)\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Trip Package</h3>
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Trip Package

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump--search-trip\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"rt-banner-searchbox trip-search\">
                        <div class=\"rt-input-group\">
                            <div class=\"single-input  col-md-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <span class=\"input-iconbadge\"><i class=\"icofont-google-map\"></i></span>
                            </div><!-- /.single-input -->
                            <div class=\"single-input  col-md-3\">
                                <input type=\"submit\" value=\"Search\" class=\"rt-btn rt-gradient pill text-uppercase d-block rt-Bshadow-2\">
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </div><!-- /.rt-banner-searchbox -->










                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->

<div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
<section class=\"content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"rt-widget widget_rating\">
                        <h3 class=\"rt-widget-title\">
                            Star Rating
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-1xs\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-1xs\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xs\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xs\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xss\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xss\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xssa\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xssa\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-9\">
                ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 391, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 392
            echo "
                <div class=\"box-style__1 rt-mb-30\">
                    <div class=\"hotel-inner-content row\">
                        <div class=\"hotel-thumb col-md-3  mb-5 mb-md-0\">
                            <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url(";
            // line 396
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/trip-1.jpg"), "html", null, true);
            echo ")\"></div>
                        </div><!-- /.hotel-thumb -->
                        <div class=\"hotel-text col-md-9\">
                            <div class=\"top\">
                                <h5>";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nomPack", [], "any", false, false, false, 400), "html", null, true);
            echo " <span> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star\"></i></span></h5>
                                <p>";
            // line 401
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "texte", [], "any", false, false, false, 401), "html", null, true);
            echo "</p>
                            </div><!-- /.top -->
                            <div class=\"middle-text d-md-flex justify-content-md-between rt-mt-20\">
                                <div class=\"left_column\">
                                    <span class=\"badge rt-gradinet-badge pill rt-mr-10\">services</span>
                                    <span class=\"primary-color\">";
            // line 406
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "service", [], "any", false, false, false, 406), "html", null, true);
            echo "</span>
                                </div><!-- /.left- -->
                                <div class=\"right_column text-left text-md-right\">
                                    <span> <i class=\"icofont-user primary-color rt-mr-4\"></i>";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "guide", [], "any", false, false, false, 409), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"right_column text-left text-md-right\">
                                    <span class=\"d-block text-primary f-size-24 rt-semiblod title-font\">";
            // line 412
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pack"], "offre", [], "any", false, false, false, 412), "budget", [], "any", false, false, false, 412), "html", null, true);
            echo "</span>
                                    <span class=\"d-block f-size-12 text-878\">DT</span>
                                </div><!-- /.right -->
                            </div><!-- /.middle-text -->
                            <div class=\"footer-elements d-flex justify-content-between align-items-center align-items-end\">
                                <div class=\"left\">
                                    <a href=\"#\">";
            // line 418
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "destination", [], "any", false, false, false, 418), "html", null, true);
            echo "</a>
                                </div><!-- /.left -->
                                <div class=\"right\">
                                    <a href=\"trip-2.html\" class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase\">ADD</a>
                                </div><!-- /.right -->
                            </div><!-- /.footer-elements -->
                        </div><!-- /.hotel-text -->
                    </div><!-- /.hotel-inner-content -->
                </div><!-- /.hotel-list-box -->
                </tbody";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo ">


            </div><!-- /.col-lg-9 -->

        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<!--
    !============= Footer Area Start ===========!
 -->
<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    <div class=\"navigation\">
        <h1 align = \"center\" >  ";
        // line 442
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 442, $this->source); })()));
        echo "</h1>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left\">
                    <div class=\"copy-text wow fade-in-bottom\" data-wow-duration=\"1s\">
                        Copyright © 2018.All Rights Reserved By <a href=\"#\">Emigrar</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class=\"col-lg-6 text-center text-lg-right\">
                    <div class=\"rt-footer-social wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <ul>
                            <li><a href=\"#\"><img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-1.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-2.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-3.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/brands/card-4.png"), "html", null, true);
        echo "\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 459
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
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/instafeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/slider-range.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/vivus.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/tippy.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/app.js"), "html", null, true);
        echo "\"></script>

<!-- ==================End Js Link===================== -->

</body>


<!-- Mirrored from pixner.net/emigrar/emigrar/trip-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 03:11:34 GMT -->
</html>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "packs/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 497,  713 => 496,  709 => 495,  705 => 494,  701 => 493,  697 => 492,  693 => 491,  689 => 490,  685 => 489,  681 => 488,  676 => 486,  672 => 485,  668 => 484,  664 => 483,  660 => 482,  656 => 481,  652 => 480,  648 => 479,  644 => 478,  640 => 477,  636 => 476,  632 => 475,  628 => 474,  624 => 473,  620 => 472,  604 => 459,  600 => 458,  596 => 457,  592 => 456,  588 => 455,  572 => 442,  555 => 427,  539 => 418,  530 => 412,  524 => 409,  518 => 406,  510 => 401,  506 => 400,  499 => 396,  493 => 392,  489 => 391,  288 => 193,  279 => 187,  139 => 50,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from pixner.net/emigrar/emigrar/trip-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 03:11:13 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Emigrar Html-5 Template</title>
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

    <div class=\"top-header rt-light-text d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        <li> <i class=\"icofont-headphone-alt\"></i>Support</li>
                        <li><a href=\"http://pixner.net/cdn-cgi/l/email-protection#bdd4d3dbd2fdd8d0d4dacfdccf93ded2d09d\"><i class=\"icofont-email\"></i><span class=\"__cf_email__\" data-cfemail=\"d6bfb8b0b996b3bbbfb1a4b7a4f8b5b9bb\">[email&#160;protected]</span></a></li>
                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-right top-social\">
                        <li><a href=\"#\" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                               aria-expanded=\"false\"><i class=\"fas fa-globe-americas\"></i>Englishs</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"#\">English</a>
                                <a class=\"dropdown-item\" href=\"#\">French</a>
                                <a class=\"dropdown-item\" href=\"#\">Trukis</a>
                            </div>
                        </li>
                        <li><a href=\"#\"><i class=\"fas fa-briefcase\"></i>My Trips</a></li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#rtmodal-1\"><i class=\"far fa-user-circle\"></i>Sign in | Join</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->

    <div class=\"main-header rt-sticky\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <a href=\"index.html\" class=\"brand-logo\"><img src=\"assets/images/logo/logo-white.png\" alt=\"\"></a>
                <a href=\"index.html\" class=\"sticky-logo\"><img src=\"assets/images/logo/logo.png\" alt=\"\"></a>
                <div class=\"ml-auto d-flex align-items-center\">


                    <div class=\"main-menu\">
                        <ul>
                            <li class=\"current-menu-item\"><a href=\"#home\">Home</a></li>
                            <li><a href=\"trip-1.html\">Trip package</a></li>
                            <li><a href=\"service-1.html\">Services</a></li>
                            <li class=\"menu-item-has-children\"><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Home Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"index.html\">Home One</a></li>
                                            <li><a href=\"index-02.html\">Home Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Hotel Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"hotel-1.html\">Hotel One</a></li>
                                            <li><a href=\"hotel-2.html\">Hotel Two</a></li>
                                            <li><a href=\"hotel-3.html\">Hotel Three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Flight Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"flight-1.html\">Flight One</a></li>
                                            <li><a href=\"flight-details.html\">Flight Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">train Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"train-1.html\">train One</a></li>
                                            <li><a href=\"train-2.html\">train Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">trip Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"trip-1.html\">trip One</a></li>
                                            <li><a href=\"trip-2.html\">trip Two</a></li>
                                            <li><a href=\"trip-3.html\">trip Three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">car Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"car-1.html\">car One</a></li>
                                            <li><a href=\"car-2.html\">car Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">blog Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"blog-grid.html\">blog-grid</a></li>
                                            <li><a href=\"single-blog.html\">blog-single 1</a></li>
                                            <li><a href=\"singleblog-lsidebar.html\">blog-single 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><a href=\"#\">Others Pages</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"about.html\">About</a></li>
                                            <li><a href=\"service-1.html\">service</a></li>
                                            <li><a href=\"afflite.html\">afflite</a></li>
                                            <li><a href=\"help.html\">help</a></li>
                                            <li><a href=\"how-work.html\">how-work</a></li>
                                            <li><a href=\"contact.html\">contact</a></li>
                                            <li><a href=\"404.html\">404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href=\"blog.html\">Blog</a></li>

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









<div class=\"rt-breadcump rt-breadcump-height\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(assets/images/backgrounds/bredcump.png)\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Trip Package</h3>
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Trip Package

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump--search-trip\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"rt-banner-searchbox trip-search\">
                        <div class=\"rt-input-group\">
                            <div class=\"single-input  col-md-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <span class=\"input-iconbadge\"><i class=\"icofont-google-map\"></i></span>
                            </div><!-- /.single-input -->
                            <div class=\"single-input  col-md-3\">
                                <input type=\"submit\" value=\"Search\" class=\"rt-btn rt-gradient pill text-uppercase d-block rt-Bshadow-2\">
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </div><!-- /.rt-banner-searchbox -->










                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->

<div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
<section class=\"content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"rt-widget widget_rating\">
                        <h3 class=\"rt-widget-title\">
                            Star Rating
                        </h3><!-- /.rt-widget-title -->
                        <ul>
                            <li class=\"clearfix\">

                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-1xs\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-1xs\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xs\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xs\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xss\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xss\">
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
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"trip_gridCheckrt-2xssa\">
                                    <label class=\"form-check-label\" for=\"trip_gridCheckrt-2xssa\">
                    <span>
                        <i class=\"icofont-star review\"></i>
                        <i class=\"icofont-star review\"></i>
                    </span>
                                    </label>
                                </div><!-- ./orm-group -->

                            </li>
                        </ul>
                    </div><!-- /.rt-widget -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-9\">
                {% for pack in packs %}

                <div class=\"box-style__1 rt-mb-30\">
                    <div class=\"hotel-inner-content row\">
                        <div class=\"hotel-thumb col-md-3  mb-5 mb-md-0\">
                            <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url({{asset ('front/assets/images/all-img/trip-1.jpg') }})\"></div>
                        </div><!-- /.hotel-thumb -->
                        <div class=\"hotel-text col-md-9\">
                            <div class=\"top\">
                                <h5>{{ pack.nomPack }} <span> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star review\"></i><i class=\"icofont-star review\"></i> <i class=\"icofont-star\"></i></span></h5>
                                <p>{{ pack.texte }}</p>
                            </div><!-- /.top -->
                            <div class=\"middle-text d-md-flex justify-content-md-between rt-mt-20\">
                                <div class=\"left_column\">
                                    <span class=\"badge rt-gradinet-badge pill rt-mr-10\">services</span>
                                    <span class=\"primary-color\">{{ pack.service }}</span>
                                </div><!-- /.left- -->
                                <div class=\"right_column text-left text-md-right\">
                                    <span> <i class=\"icofont-user primary-color rt-mr-4\"></i>{{ pack.guide }}</span>
                                </div>
                                <div class=\"right_column text-left text-md-right\">
                                    <span class=\"d-block text-primary f-size-24 rt-semiblod title-font\">{{ pack.offre.budget }}</span>
                                    <span class=\"d-block f-size-12 text-878\">DT</span>
                                </div><!-- /.right -->
                            </div><!-- /.middle-text -->
                            <div class=\"footer-elements d-flex justify-content-between align-items-center align-items-end\">
                                <div class=\"left\">
                                    <a href=\"#\">{{ pack.destination }}</a>
                                </div><!-- /.left -->
                                <div class=\"right\">
                                    <a href=\"trip-2.html\" class=\"rt-btn rt-gradient pill rt-sm3 text-uppercase\">ADD</a>
                                </div><!-- /.right -->
                            </div><!-- /.footer-elements -->
                        </div><!-- /.hotel-text -->
                    </div><!-- /.hotel-inner-content -->
                </div><!-- /.hotel-list-box -->
                </tbody{% endfor %}>


            </div><!-- /.col-lg-9 -->

        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<!--
    !============= Footer Area Start ===========!
 -->
<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    <div class=\"navigation\">
        <h1 align = \"center\" >  {{ knp_pagination_render(packs) }}</h1>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left\">
                    <div class=\"copy-text wow fade-in-bottom\" data-wow-duration=\"1s\">
                        Copyright © 2018.All Rights Reserved By <a href=\"#\">Emigrar</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class=\"col-lg-6 text-center text-lg-right\">
                    <div class=\"rt-footer-social wow fade-in-bottom\" data-wow-duration=\"1.5s\">
                        <ul>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-1.png')}}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-2.png')}}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-3.png')}}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-4.png')}}\" alt=\"cardimage\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('front/assets/images/brands/card-5.png')}}\" alt=\"cardimage\" draggable=\"false\"></a></li>

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


<!-- Mirrored from pixner.net/emigrar/emigrar/trip-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 03:11:34 GMT -->
</html>









", "packs/show.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\packs\\show.html.twig");
    }
}
