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

/* back.html.twig */
class __TwigTemplate_a4c764c4810060470227a0d88c44c4e7c240627d14bc83108c0e91d76d445249 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "php<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <meta name=\"robots\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:title\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:description\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:image\" content=\"social-image.png\" />
    <meta name=\"format-detection\" content=\"telephone=no\">

    <!-- PAGE TITLE HERE -->
    <title>Pack&Go Admin </title>

    <!-- FAVICONS ICON -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/favicon.png"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery-nice-select/css/nice-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Style css -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"lds-ripple\">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"\" class=\"brand-logo\">
            <svg class=\"logo-abbr\" xmlns=\"http://www.w3.org/2000/svg\" width=\"47.426\" height=\"56.91\" viewBox=\"0 0 47.426 56.91\">
                <g id=\"Group_25\" data-name=\"Group 25\" transform=\"translate(-56 -32)\">
                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        echo "\" width=\"100\" alt=\"\"/>
                </g>
            </svg>
            <svg class=\"brand-title\" xmlns=\"http://www.w3.org/2000/svg\" width=\"143\" height=\"46.359\" viewBox=\"0 0 143 46.359\">
                <g id=\"Group_26\" data-name=\"Group 26\" transform=\"translate(-134 -40.641)\">
                    <text id=\"Hotel_Admin_Dashboard\" data-name=\"Hotel Admin Dashboard\" transform=\"translate(134 83)\" fill=\"#5d5449\" font-size=\"12\" font-family=\"Poppins-Light, Poppins\" font-weight=\"300\">
                        <tspan x=\"0\" y=\"0\">Pack&Go Admin </tspan></text>
                </g>
            </svg>
        </a>
        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <div class=\"chatbox\">
        <div class=\"chatbox-close\"></div>
        <div class=\"custom-tab-1\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#notes\">Notes</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts\">Alerts</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#chat\">Chat</a>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"dashboard_bar\" >
                             ";
        // line 109
        $this->displayBlock('title', $context, $blocks);
        // line 110
        echo "                        </div>
                    </div>
                    <div class=\"nav-item d-flex align-items-center\">
                        ";
        // line 113
        $this->displayBlock('search', $context, $blocks);
        // line 114
        echo "                    </div>
                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"javascript:void(0);\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26.309\" height=\"23.678\" viewBox=\"0 0 26.309 23.678\">
                                    <path id=\"Path_1955\" data-name=\"Path 1955\" d=\"M163.217,78.043a7.409,7.409,0,0,1,10.5-10.454l.506.506.507-.506a7.409,7.409,0,0,1,10.5,10.454L175.181,88.686a1.316,1.316,0,0,1-1.912,0Zm11.008,7.823,9.1-9.632.027-.027a4.779,4.779,0,1,0-6.759-6.757l-1.435,1.437a1.317,1.317,0,0,1-1.861,0l-1.437-1.437a4.778,4.778,0,0,0-6.758,6.757l.026.027Z\" transform=\"translate(-161.07 -65.42)\" fill=\"#135846\" fill-rule=\"evenodd\"/>
                                </svg>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link \" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"21.6\" viewBox=\"0 0 24 21.6\">
                                    <g id=\"_008-chat\" data-name=\"008-chat\" transform=\"translate(-250.397 -62.547)\">
                                        <path id=\"Path_1956\" data-name=\"Path 1956\" d=\"M274.4,67.347a4.8,4.8,0,0,0-4.8-4.8H255.2a4.8,4.8,0,0,0-4.8,4.8v15.6a1.2,1.2,0,0,0,2.048.848l3.746-3.745a2.4,2.4,0,0,1,1.7-.7H269.6a4.8,4.8,0,0,0,4.8-4.8Zm-2.4,0a2.4,2.4,0,0,0-2.4-2.4H255.2a2.4,2.4,0,0,0-2.4,2.4v12.7l1.7-1.7a4.8,4.8,0,0,1,3.395-1.406H269.6a2.4,2.4,0,0,0,2.4-2.4Zm-15.6,7.2H266a1.2,1.2,0,1,0,0-2.4h-9.6a1.2,1.2,0,0,0,0,2.4Zm0-4.8h12a1.2,1.2,0,1,0,0-2.4h-12a1.2,1.2,0,0,0,0,2.4Z\" fill=\"#135846\" fill-rule=\"evenodd\"/>
                                    </g>
                                </svg>
                                <span class=\"badge light text-white bg-primary rounded-circle\">15</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <div id=\"DZ_W_TimeLine02\" class=\"widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"mb-0\">Youtube, a video-sharing website, goes live <strong class=\"text-primary\">\$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">New order placed <strong class=\"text-info\">#XF-2356.</strong></h6>
                                                <p class=\"mb-0\">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"mb-0\">john just buy your product <strong class=\"text-warning\">Sell \$250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"mb-0\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/profile/pic1.jpg"), "html", null, true);
        echo "\" width=\"20\" alt=\"\"/>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"app-profile.html\" class=\"dropdown-item ai-icon\">
                                    <svg id=\"icon-user2\" xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                    <span class=\"ms-2\">Profile </span>
                                </a>
                                <a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
                                    <svg id=\"icon-inbox1\" xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                    <span class=\"ms-2\">Inbox </span>
                                </a>
                                <a href=\"login.html\" class=\"dropdown-item ai-icon\">
                                    <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                    <span class=\"ms-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->

    <div class=\"dlabnav\">
        <div class=\"dlabnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-025-dashboard\"></i>
                        <span class=\"nav-text\">doora</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"index.html\">Dashboard Light</a></li>
                        <li><a href=\"index-2.html\">Dashboard Dark</a></li>
                        <li><a href=\"guest-list.html\">Guest List</a></li>
                        <li><a href=\"guest-details.html\">Guest Details</a></li>
                        <li><a href=\"concierge-list.html\">Concierge List</a></li>
                        <li><a href=\"room-list.html\">Room List</a></li>
                        <li><a href=\"reviews.html\">Reviews</a></li>
                    </ul>

                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-050-info\"></i>
                        <span class=\"nav-text\">Hotel Managment</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_hotel");
        echo "\">Add Hotel</a></li>
                        <li><a href=\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_hotels");
        echo "\">Hotel List</a></li>
                       <!-- <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Email</a>
                            <ul aria-expanded=\"false\">-->
                                <li><a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_service");
        echo "\">Add Service </a></li>
                                <li><a href=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_service");
        echo "\">Show Service</a></li>
                               <!-- <li><a href=\"email-read.html\">Read</a></li>
                            </ul>
                        </li>
                        <li><a href=\"app-calender.html\">Calendar</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Shop</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"ecom-product-grid.html\">Product Grid</a></li>
                                <li><a href=\"ecom-product-list.html\">Product List</a></li>
                                <li><a href=\"ecom-product-detail.html\">Product Details</a></li>
                                <li><a href=\"ecom-product-order.html\">Order</a></li>
                                <li><a href=\"ecom-checkout.html\">Checkout</a></li>
                                <li><a href=\"ecom-invoice.html\">Invoice</a></li>
                                <li><a href=\"ecom-customers.html\">Customers</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-041-graph\"></i>
                        <span class=\"nav-text\">siwar</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"chart-flot.html\">Flot</a></li>
                        <li><a href=\"chart-morris.html\">Morris</a></li>
                        <li><a href=\"chart-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"chart-chartist.html\">Chartist</a></li>
                        <li><a href=\"chart-sparkline.html\">Sparkline</a></li>
                        <li><a href=\"chart-peity.html\">Peity</a></li>
                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-086-star\"></i>
                        <span class=\"nav-text\">Transport Manag</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_transport");
        echo "\">TRANSPORT LIST</a></li>
                        <li><a href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_guide");
        echo "\">GUIDE LIST</a></li>
                        <li><a href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_transporte");
        echo "\">ADD TRANSPORT</a></li>
                        <li><a href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_guide");
        echo "\">ADD GUIDE</a></li>



                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-045-heart\"></i>
                        <span class=\"nav-text\">khalil</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"uc-select2.html\">Select 2</a></li>
                        <li><a href=\"uc-nestable.html\">Nestedable</a></li>
                        <li><a href=\"uc-noui-slider.html\">Noui Slider</a></li>
                        <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                        <li><a href=\"uc-toastr.html\">Toastr</a></li>
                        <li><a href=\"map-jqvmap.html\">Jqv Map</a></li>
                        <li><a href=\"uc-lightgallery.html\">Light Gallery</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"dropdown header-profile2 \">
                <div class=\"header-info2 text-center\">
                    <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/profile/pic1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"sidebar-info\">
                        <div>
                            <h5 class=\"font-w500 mb-0\">William Johanson</h5>
                            <span class=\"fs-12\">williamjohn@mail.com</span>
                        </div>
                    </div>
                    <div>
                        <a href=\"javascript:void(0);\" class=\"btn btn-md text-secondary\">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class=\"copyright\">
                <p class=\"text-center\"><strong>Pack&Go Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                <p class=\"fs-12 text-center\">Made with <span class=\"heart\"></span> by Code Titans</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    ";
        // line 334
        $this->displayBlock('body', $context, $blocks);
        // line 335
        echo "    <div class=\"content-body\">
        <!-- row -->
        <div class=\"container-fluid\">

        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->



    <!--**********************************
        Footer start
    ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by Code Titans </p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

<!-- Apex Chart -->

<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>


<!-- Chart piety plugin files -->


<!-- Dashboard 1 -->
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap-datetimepicker/js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
<script>
    function TravlCarousel()
    {

        /*  testimonial one function by = owl.carousel.js */
        jQuery('.front-view-slider').owlCarousel({
            loop:false,
            margin:15,
            nav:true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            animateOut: 'fadeOut',
            dots:true,
            navText: ['<i class=\"fas fa-arrow-left\"></i>', '<i class=\"fas fa-arrow-right\"></i>'],
            responsive:{
                0:{
                    items:1
                },

                768:{
                    items:2
                },

                1400:{
                    items:2
                },
                1600:{
                    items:3
                },
                1750:{
                    items:3
                }
            }
        })
    }

    jQuery(window).on('load',function(){
        setTimeout(function(){
            TravlCarousel();
        }, 1000);
    });
</script>
<script>
    \$(function () {
        \$('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    \$(document).ready(function(){
        \$(\".booking-calender .fa.fa-clock-o\").removeClass(this);
        \$(\".booking-calender .fa.fa-clock-o\").addClass('fa-clock');
    });
</script>

</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 334
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 334,  614 => 113,  601 => 109,  531 => 400,  527 => 399,  523 => 398,  519 => 397,  514 => 395,  510 => 394,  506 => 393,  501 => 391,  491 => 384,  484 => 380,  479 => 378,  434 => 335,  432 => 334,  404 => 309,  378 => 286,  374 => 285,  370 => 284,  366 => 283,  327 => 247,  323 => 246,  317 => 243,  313 => 242,  257 => 189,  180 => 114,  178 => 113,  173 => 110,  171 => 109,  116 => 57,  83 => 27,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("php<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <meta name=\"robots\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:title\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:description\" content=\"Travl : Hotel Admin Dashboard Bootstrap 5 Template\" />
    <meta property=\"og:image\" content=\"social-image.png\" />
    <meta name=\"format-detection\" content=\"telephone=no\">

    <!-- PAGE TITLE HERE -->
    <title>Pack&Go Admin </title>

    <!-- FAVICONS ICON -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('back/images/favicon.png') }}\" />
    <link href=\"{{ asset('back/vendor/jquery-nice-select/css/nice-select.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/vendor/owl-carousel/owl.carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\">

    <!-- Style css -->
    <link href=\"{{ asset('back/css/style.css') }}\" rel=\"stylesheet\">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"lds-ripple\">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"\" class=\"brand-logo\">
            <svg class=\"logo-abbr\" xmlns=\"http://www.w3.org/2000/svg\" width=\"47.426\" height=\"56.91\" viewBox=\"0 0 47.426 56.91\">
                <g id=\"Group_25\" data-name=\"Group 25\" transform=\"translate(-56 -32)\">
                    <img src=\"{{ asset('back/images/logo.png') }}\" width=\"100\" alt=\"\"/>
                </g>
            </svg>
            <svg class=\"brand-title\" xmlns=\"http://www.w3.org/2000/svg\" width=\"143\" height=\"46.359\" viewBox=\"0 0 143 46.359\">
                <g id=\"Group_26\" data-name=\"Group 26\" transform=\"translate(-134 -40.641)\">
                    <text id=\"Hotel_Admin_Dashboard\" data-name=\"Hotel Admin Dashboard\" transform=\"translate(134 83)\" fill=\"#5d5449\" font-size=\"12\" font-family=\"Poppins-Light, Poppins\" font-weight=\"300\">
                        <tspan x=\"0\" y=\"0\">Pack&Go Admin </tspan></text>
                </g>
            </svg>
        </a>
        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <div class=\"chatbox\">
        <div class=\"chatbox-close\"></div>
        <div class=\"custom-tab-1\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#notes\">Notes</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts\">Alerts</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#chat\">Chat</a>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"dashboard_bar\" >
                             {% block title %} {% endblock %}
                        </div>
                    </div>
                    <div class=\"nav-item d-flex align-items-center\">
                        {% block search %}{% endblock %}
                    </div>
                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"javascript:void(0);\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26.309\" height=\"23.678\" viewBox=\"0 0 26.309 23.678\">
                                    <path id=\"Path_1955\" data-name=\"Path 1955\" d=\"M163.217,78.043a7.409,7.409,0,0,1,10.5-10.454l.506.506.507-.506a7.409,7.409,0,0,1,10.5,10.454L175.181,88.686a1.316,1.316,0,0,1-1.912,0Zm11.008,7.823,9.1-9.632.027-.027a4.779,4.779,0,1,0-6.759-6.757l-1.435,1.437a1.317,1.317,0,0,1-1.861,0l-1.437-1.437a4.778,4.778,0,0,0-6.758,6.757l.026.027Z\" transform=\"translate(-161.07 -65.42)\" fill=\"#135846\" fill-rule=\"evenodd\"/>
                                </svg>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link \" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"21.6\" viewBox=\"0 0 24 21.6\">
                                    <g id=\"_008-chat\" data-name=\"008-chat\" transform=\"translate(-250.397 -62.547)\">
                                        <path id=\"Path_1956\" data-name=\"Path 1956\" d=\"M274.4,67.347a4.8,4.8,0,0,0-4.8-4.8H255.2a4.8,4.8,0,0,0-4.8,4.8v15.6a1.2,1.2,0,0,0,2.048.848l3.746-3.745a2.4,2.4,0,0,1,1.7-.7H269.6a4.8,4.8,0,0,0,4.8-4.8Zm-2.4,0a2.4,2.4,0,0,0-2.4-2.4H255.2a2.4,2.4,0,0,0-2.4,2.4v12.7l1.7-1.7a4.8,4.8,0,0,1,3.395-1.406H269.6a2.4,2.4,0,0,0,2.4-2.4Zm-15.6,7.2H266a1.2,1.2,0,1,0,0-2.4h-9.6a1.2,1.2,0,0,0,0,2.4Zm0-4.8h12a1.2,1.2,0,1,0,0-2.4h-12a1.2,1.2,0,0,0,0,2.4Z\" fill=\"#135846\" fill-rule=\"evenodd\"/>
                                    </g>
                                </svg>
                                <span class=\"badge light text-white bg-primary rounded-circle\">15</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <div id=\"DZ_W_TimeLine02\" class=\"widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"mb-0\">Youtube, a video-sharing website, goes live <strong class=\"text-primary\">\$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">New order placed <strong class=\"text-info\">#XF-2356.</strong></h6>
                                                <p class=\"mb-0\">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"mb-0\">john just buy your product <strong class=\"text-warning\">Sell \$250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"mb-0\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"{{ asset('back/images/profile/pic1.jpg') }}\" width=\"20\" alt=\"\"/>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a href=\"app-profile.html\" class=\"dropdown-item ai-icon\">
                                    <svg id=\"icon-user2\" xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                    <span class=\"ms-2\">Profile </span>
                                </a>
                                <a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
                                    <svg id=\"icon-inbox1\" xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                    <span class=\"ms-2\">Inbox </span>
                                </a>
                                <a href=\"login.html\" class=\"dropdown-item ai-icon\">
                                    <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                    <span class=\"ms-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->

    <div class=\"dlabnav\">
        <div class=\"dlabnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-025-dashboard\"></i>
                        <span class=\"nav-text\">doora</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"index.html\">Dashboard Light</a></li>
                        <li><a href=\"index-2.html\">Dashboard Dark</a></li>
                        <li><a href=\"guest-list.html\">Guest List</a></li>
                        <li><a href=\"guest-details.html\">Guest Details</a></li>
                        <li><a href=\"concierge-list.html\">Concierge List</a></li>
                        <li><a href=\"room-list.html\">Room List</a></li>
                        <li><a href=\"reviews.html\">Reviews</a></li>
                    </ul>

                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-050-info\"></i>
                        <span class=\"nav-text\">Hotel Managment</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"{{ path('add_hotel')}}\">Add Hotel</a></li>
                        <li><a href=\"{{ path('list_hotels')}}\">Hotel List</a></li>
                       <!-- <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Email</a>
                            <ul aria-expanded=\"false\">-->
                                <li><a href=\"{{ path('add_service') }}\">Add Service </a></li>
                                <li><a href=\"{{ path('list_service') }}\">Show Service</a></li>
                               <!-- <li><a href=\"email-read.html\">Read</a></li>
                            </ul>
                        </li>
                        <li><a href=\"app-calender.html\">Calendar</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Shop</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"ecom-product-grid.html\">Product Grid</a></li>
                                <li><a href=\"ecom-product-list.html\">Product List</a></li>
                                <li><a href=\"ecom-product-detail.html\">Product Details</a></li>
                                <li><a href=\"ecom-product-order.html\">Order</a></li>
                                <li><a href=\"ecom-checkout.html\">Checkout</a></li>
                                <li><a href=\"ecom-invoice.html\">Invoice</a></li>
                                <li><a href=\"ecom-customers.html\">Customers</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-041-graph\"></i>
                        <span class=\"nav-text\">siwar</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"chart-flot.html\">Flot</a></li>
                        <li><a href=\"chart-morris.html\">Morris</a></li>
                        <li><a href=\"chart-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"chart-chartist.html\">Chartist</a></li>
                        <li><a href=\"chart-sparkline.html\">Sparkline</a></li>
                        <li><a href=\"chart-peity.html\">Peity</a></li>
                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-086-star\"></i>
                        <span class=\"nav-text\">Transport Manag</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"{{ path('list_transport') }}\">TRANSPORT LIST</a></li>
                        <li><a href=\"{{ path('list_guide') }}\">GUIDE LIST</a></li>
                        <li><a href=\"{{ path('add_transporte') }}\">ADD TRANSPORT</a></li>
                        <li><a href=\"{{ path('add_guide') }}\">ADD GUIDE</a></li>



                    </ul>
                </li>
                <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
                        <i class=\"flaticon-045-heart\"></i>
                        <span class=\"nav-text\">khalil</span>
                    </a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"uc-select2.html\">Select 2</a></li>
                        <li><a href=\"uc-nestable.html\">Nestedable</a></li>
                        <li><a href=\"uc-noui-slider.html\">Noui Slider</a></li>
                        <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                        <li><a href=\"uc-toastr.html\">Toastr</a></li>
                        <li><a href=\"map-jqvmap.html\">Jqv Map</a></li>
                        <li><a href=\"uc-lightgallery.html\">Light Gallery</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"dropdown header-profile2 \">
                <div class=\"header-info2 text-center\">
                    <img src=\"{{ asset('back/images/profile/pic1.jpg') }}\" alt=\"\"/>
                    <div class=\"sidebar-info\">
                        <div>
                            <h5 class=\"font-w500 mb-0\">William Johanson</h5>
                            <span class=\"fs-12\">williamjohn@mail.com</span>
                        </div>
                    </div>
                    <div>
                        <a href=\"javascript:void(0);\" class=\"btn btn-md text-secondary\">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class=\"copyright\">
                <p class=\"text-center\"><strong>Pack&Go Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                <p class=\"fs-12 text-center\">Made with <span class=\"heart\"></span> by Code Titans</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    {% block body %} {% endblock %}
    <div class=\"content-body\">
        <!-- row -->
        <div class=\"container-fluid\">

        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->



    <!--**********************************
        Footer start
    ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by Code Titans </p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src=\"{{ asset('back/vendor/global/global.min.js') }}\"></script>

<script src=\"{{ asset('back/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}\"></script>

<!-- Apex Chart -->

<script src=\"{{ asset('back/vendor/apexchart/apexchart.js') }}\"></script>


<!-- Chart piety plugin files -->


<!-- Dashboard 1 -->
<script src=\"{{ asset('back/js/dashboard/dashboard-1.js') }}\"></script>

<script src=\"{{ asset('back/vendor/owl-carousel/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('back/vendor/bootstrap-datetimepicker/js/moment.js') }}\"></script>
<script src=\"{{ asset('back/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>

<script src=\"{{ asset('back/js/custom.min.js') }}\"></script>
<script src=\"{{ asset('back/js/dlabnav-init.js') }}\"></script>
<script src=\"{{ asset('back/js/demo.js') }}\"></script>
<script src=\"{{ asset('back/js/styleSwitcher.js') }}\"></script>
<script>
    function TravlCarousel()
    {

        /*  testimonial one function by = owl.carousel.js */
        jQuery('.front-view-slider').owlCarousel({
            loop:false,
            margin:15,
            nav:true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            animateOut: 'fadeOut',
            dots:true,
            navText: ['<i class=\"fas fa-arrow-left\"></i>', '<i class=\"fas fa-arrow-right\"></i>'],
            responsive:{
                0:{
                    items:1
                },

                768:{
                    items:2
                },

                1400:{
                    items:2
                },
                1600:{
                    items:3
                },
                1750:{
                    items:3
                }
            }
        })
    }

    jQuery(window).on('load',function(){
        setTimeout(function(){
            TravlCarousel();
        }, 1000);
    });
</script>
<script>
    \$(function () {
        \$('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    \$(document).ready(function(){
        \$(\".booking-calender .fa.fa-clock-o\").removeClass(this);
        \$(\".booking-calender .fa.fa-clock-o\").addClass('fa-clock');
    });
</script>

</body>

</html>", "back.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\back.html.twig");
    }
}
