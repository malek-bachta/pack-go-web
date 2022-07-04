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

/* hotels/hoteldetails.html.twig */
class __TwigTemplate_94e9a07ef1d2d32ee7780634c59ea5518fc38ada1514080a48513af3be522874 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/hoteldetails.html.twig"));

        $this->parent = $this->loadTemplate("front2.html.twig", "hotels/hoteldetails.html.twig", 1);
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
        <h3>Hotels</h3>
        <div class=\"breadcrumbs\">
            <span class=\"divider\"><i class=\"icofont-home\"></i></span>
            <a href=\"#\" title=\"Home\">Home</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            <a href=\"#\">Hotels</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            <a href=\"#\" title=\"adress\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 11, $this->source); })()), "adresse", [], "any", false, false, false, 11), "html", null, true);
        echo " </a>
        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <section class=\"content-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"rt-duel-slider-main rt-mb-30\">
                        <div class=\"single-main rtbgprefix-cover\" style=\"background-image: url(";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22))), "html", null, true);
        echo ")\">

                        </div><!-- /.single-main -->

                        <div class=\"single-main rtbgprefix-cover\" style=\"background-image: url(";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hotel-slider-6.jpg"), "html", null, true);
        echo ")\">
                            <div class=\"inner-badge badge-bg-1 f-size-14 rt-strong\">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                    </div><!-- /.rt-duel-slider-main -->

                </div><!-- /.col-lg-7 -->
                <div class=\"col-lg-5 mt-5 mt-lg-0\">
                    <div class=\"hotel-inner-content\">
                        <h5 class=\"f-size-18 rt-medium\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 36, $this->source); })()), "nomh", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5>
                        <p class=\"f-size-13\"><span class=\"text-555\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), "html", null, true);
        echo "</span> <span class=\"pl-2 text-777\">| Near the subway</span></p>
                        <p class=\"rt-mt-15 rt-mb-20\">
                            <span class=\"badge rt-gradinet-badge pill rt-mr-10\">4.3 <small>/5</small></span>
                            <span class=\"primary-color rt-mr-10\">Excellent</span>
                            <span class=\"f-size-12 text-878\">( 86 Reviews )</span>
                        </p>
                        <p class=\"f-size-14 text-333\">\"It is a good hotel with nice service, everything is so convenient. will choose it again next time i go there. \"</p>
                        <p>
                            <span class=\"d-block\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-1.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-20\">Free in-room Wi-Fi</span></span>
                            <span class=\"d-block\" ><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-2.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-15\">Gym</span></span>
                            <span class=\"d-block\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-3.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Western restaurant</span></span>
                            <span class=\"d-block\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-4.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Front desk (24 hours)</span></span>
                            <span class=\"d-block\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-5.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">soft drinks</span></span>
                            <span class=\"d-block\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-6.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Spa</span></span>
                            <span class=\"d-block\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-7.png"), "html", null, true);
        echo "\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Wake-up call</span></span>
                        </p>

                        <div class=\"rt-divider style-one rt-mb-30\"></div><!-- /.rt-divider -->
                        <div class=\"d-flex flex-md-row flex-column justify-content-md-between\">
                            <div>
                                <span class=\"d-block f-size-12 text-878\">From USD</span>
                                <span class=\"d-block f-size-24 primary-color rt-strong\">\$";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 58, $this->source); })()), "service", [], "any", false, false, false, 58), "prix", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
                            </div>
                            <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
                            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
                            <div>
                                <a href=\"#\" class=\"rt-btn rt-gradient3 rt-sm2 text-uppercase pill\">Reserve</a>
                            </div>
                            <div>
                                <div class=\"stars\">
                                    <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
                                </div>
                                <div  >";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 69, $this->source); })()), 'form_start');
        echo " </div>
                                <input type=\"hidden\" value=\"0\" ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 70, $this->source); })()), "rate", [], "any", false, false, false, 70), 'widget');
        echo "
                                <button type=\"submit\" class=\"rt-btn rt-gradient rt-sm2 text-uppercase pill\">Valider";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 71, $this->source); })()), 'form_end');
        echo "</button>
                            </div>
                        </div><!-- /.d-flex -->
                        <div class=\"rt-divider style-one rt-mt-30\"></div><!-- /.rt-divider -->
                        <div class=\"rt-mt-25\">
                            <ul class=\"rt-social normal-style-one \">
                                <li><span class=\"f-size-14\"><strong>Share Link:</strong></span></li>
                                <li><a href=\"#\"><i class=\"icofont-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-google-plus\"></i></a></li>
                            </ul>
                        </div><!-- /. social -->
                    </div><!-- /.hotel-text -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
            <div class=\"row\">
                <div class=\"col-12 rt-mt-58\">
                    <div class=\"hotel-tabs\">


                        <div class=\"tab-content\" id=\"myTabContent\">



                            <div class=\"tab-pane fade show active\" id=\"rt-itm_4\" role=\"tabpanel\" aria-labelledby=\"rt-itm_4-tab\">

                                <div class=\"flight-list-box\">
                                    <div class=\"inner-content rt-pt-10 rt-pl-15\">
                                        <h4 class=\"f-size-18 rt-semiblod rt-mb-35 \">Services & Amenities</h4>
                                    </div><!-- /.inner-content -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-12.png"), "html", null, true);
        echo "\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Transportation Services</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Airport pickup service</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Parking</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i> Car rental</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-13.png"), "html", null, true);
        echo "\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">General</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Free Wi-Fi areas</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Heating</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Elevator</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Newspaper in lobby</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> CCTV in public areas</span> <br>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> CCTV in public areas</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i>PA system</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-15.png"), "html", null, true);
        echo "\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Food & Drink</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Western restaurant</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Chinese</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i>Café</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/all-img/hottel-cion-14.png"), "html", null, true);
        echo "\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Front Desk Services</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Luggage storage</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Porter</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Tourist map</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Ticket service</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i> Postal service</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <!--<div class=\"googleMap\">
                                        <iframe
                                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.1509316622!2d90.34928591742289!3d23.780620653401414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1569663745803!5m2!1sen!2sbd\"
                                                width=\"100%\" height=\"292\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                                    </div>-->
                                </div><!-- /.flight-list-box -->
                            </div><!-- ./ tab content -->

                        </div>

                    </div><!-- /.hotel-tabs -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->


        </div><!-- /.container -->
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/hoteldetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 140,  256 => 129,  238 => 114,  224 => 103,  189 => 71,  185 => 70,  181 => 69,  170 => 61,  164 => 58,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  130 => 45,  119 => 37,  115 => 36,  102 => 26,  95 => 22,  88 => 17,  81 => 16,  70 => 11,  60 => 3,  53 => 2,  36 => 1,);
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
            <a href=\"#\">Hotels</a>
            <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
            <a href=\"#\" title=\"adress\">{{ hotel .adresse }} </a>
        </div><!-- /.breadcrumbs -->
    </div><!-- /.breadcrumbs-content -->
{% endblock %}

{% block body %}
    <section class=\"content-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"rt-duel-slider-main rt-mb-30\">
                        <div class=\"single-main rtbgprefix-cover\" style=\"background-image: url({{ asset('uploads/' ~ hotel.image) }})\">

                        </div><!-- /.single-main -->

                        <div class=\"single-main rtbgprefix-cover\" style=\"background-image: url({{ asset('front/assets/images/all-img/hotel-slider-6.jpg') }})\">
                            <div class=\"inner-badge badge-bg-1 f-size-14 rt-strong\">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                    </div><!-- /.rt-duel-slider-main -->

                </div><!-- /.col-lg-7 -->
                <div class=\"col-lg-5 mt-5 mt-lg-0\">
                    <div class=\"hotel-inner-content\">
                        <h5 class=\"f-size-18 rt-medium\">{{ hotel.nomh }}</h5>
                        <p class=\"f-size-13\"><span class=\"text-555\">{{ hotel.adresse }}</span> <span class=\"pl-2 text-777\">| Near the subway</span></p>
                        <p class=\"rt-mt-15 rt-mb-20\">
                            <span class=\"badge rt-gradinet-badge pill rt-mr-10\">4.3 <small>/5</small></span>
                            <span class=\"primary-color rt-mr-10\">Excellent</span>
                            <span class=\"f-size-12 text-878\">( 86 Reviews )</span>
                        </p>
                        <p class=\"f-size-14 text-333\">\"It is a good hotel with nice service, everything is so convenient. will choose it again next time i go there. \"</p>
                        <p>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-1.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-20\">Free in-room Wi-Fi</span></span>
                            <span class=\"d-block\" ><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-2.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-15\">Gym</span></span>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-3.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Western restaurant</span></span>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-4.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Front desk (24 hours)</span></span>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-5.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">soft drinks</span></span>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-6.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Spa</span></span>
                            <span class=\"d-block\"><img src=\"{{ asset('front/assets/images/all-img/hottel-cion-7.png') }}\" alt=\"hotel iamge\" draggable=\"false\"> <span class=\"f-size-13 rt-pl-25\">Wake-up call</span></span>
                        </p>

                        <div class=\"rt-divider style-one rt-mb-30\"></div><!-- /.rt-divider -->
                        <div class=\"d-flex flex-md-row flex-column justify-content-md-between\">
                            <div>
                                <span class=\"d-block f-size-12 text-878\">From USD</span>
                                <span class=\"d-block f-size-24 primary-color rt-strong\">\${{ hotel.service.prix }}</span>
                            </div>
                            <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
                            <script src=\"{{ asset('js/scripts.js') }}\"></script>
                            <div>
                                <a href=\"#\" class=\"rt-btn rt-gradient3 rt-sm2 text-uppercase pill\">Reserve</a>
                            </div>
                            <div>
                                <div class=\"stars\">
                                    <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
                                </div>
                                <div  >{{ form_start(rate) }} </div>
                                <input type=\"hidden\" value=\"0\" {{ form_widget(rate.rate) }}
                                <button type=\"submit\" class=\"rt-btn rt-gradient rt-sm2 text-uppercase pill\">Valider{{ form_end(rate) }}</button>
                            </div>
                        </div><!-- /.d-flex -->
                        <div class=\"rt-divider style-one rt-mt-30\"></div><!-- /.rt-divider -->
                        <div class=\"rt-mt-25\">
                            <ul class=\"rt-social normal-style-one \">
                                <li><span class=\"f-size-14\"><strong>Share Link:</strong></span></li>
                                <li><a href=\"#\"><i class=\"icofont-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-google-plus\"></i></a></li>
                            </ul>
                        </div><!-- /. social -->
                    </div><!-- /.hotel-text -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
            <div class=\"row\">
                <div class=\"col-12 rt-mt-58\">
                    <div class=\"hotel-tabs\">


                        <div class=\"tab-content\" id=\"myTabContent\">



                            <div class=\"tab-pane fade show active\" id=\"rt-itm_4\" role=\"tabpanel\" aria-labelledby=\"rt-itm_4-tab\">

                                <div class=\"flight-list-box\">
                                    <div class=\"inner-content rt-pt-10 rt-pl-15\">
                                        <h4 class=\"f-size-18 rt-semiblod rt-mb-35 \">Services & Amenities</h4>
                                    </div><!-- /.inner-content -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"{{ asset('front/assets/images/all-img/hottel-cion-12.png') }}\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Transportation Services</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Airport pickup service</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Parking</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i> Car rental</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"{{ asset('front/assets/images/all-img/hottel-cion-13.png') }}\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">General</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Free Wi-Fi areas</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Heating</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Elevator</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Newspaper in lobby</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> CCTV in public areas</span> <br>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> CCTV in public areas</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i>PA system</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"{{ asset('front/assets/images/all-img/hottel-cion-15.png') }}\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Food & Drink</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Western restaurant</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Chinese</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i>Café</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class=\"media service-amitence-box rt-mb-30\">
                                        <img src=\"{{ asset('front/assets/images/all-img/hottel-cion-14.png') }}\" class=\"rt-pr-23\" alt=\"hottel-cion\">
                                        <div class=\"media-body rt-pl-23\">
                                            <h5 class=\"f-size-16 rt-semiblod\">Front Desk Services</h5>
                                            <p class=\"f-size-13 text-333\">
                                                <span class=\"rt-mr-40\"><i class=\"icofont-check-circled primary-color rt-pr-4\"></i> Luggage storage</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Porter</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Tourist map</span>
                                                <span class=\"rt-mr-40\"> <i class=\"icofont-check-circled primary-color\"></i> Ticket service</span>
                                                <span> <i class=\"icofont-check-circled primary-color\"></i> Postal service</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <!--<div class=\"googleMap\">
                                        <iframe
                                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.1509316622!2d90.34928591742289!3d23.780620653401414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1569663745803!5m2!1sen!2sbd\"
                                                width=\"100%\" height=\"292\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                                    </div>-->
                                </div><!-- /.flight-list-box -->
                            </div><!-- ./ tab content -->

                        </div>

                    </div><!-- /.hotel-tabs -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->


        </div><!-- /.container -->
    </section>

{% endblock %}", "hotels/hoteldetails.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\hoteldetails.html.twig");
    }
}
