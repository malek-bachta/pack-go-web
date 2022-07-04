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

/* transport/pdf.html.twig */
class __TwigTemplate_8b9759b01d0f28ebcf42712ba1dc77a8b4541abe989c461dcc3f84f1a3a916af extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/pdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <div class=\"flight-list-box rt-mb-30 pt-30\">
        <h3 class=\"f-size-24 text-capitalize rt-mb-30  rt-semiblod\">Passenger Info</h3>

        <br>
        <form action=\"#\" class=\"rt-form rt-line-form flight-lable\">
            <div class=\"row\">
                <div class=\"col-md-6 rt-mb-30 \">
                    <label for=\"fst-name\">First Name : </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"lst-name\">Last Name : </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Gender</label>
                            <br>
                            <div class=\"form-check form-check-inline\">
                                <label class=\"form-check-label\" for=\"inlineRadio2s\">Female</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <label class=\"form-check-label\" for=\"inlineRadio2ss\">Male</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class=\"col-md-6\">
                            <label for=\"st-date\">date :  __/__/_____ </label>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"select-2\">ID :</label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"id-number\">ID Number :</label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Agency name : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 44, $this->source); })()), "nomagence", [], "any", false, false, false, 44), "html", null, true);
        echo " </label>
                </div><!-- /.col-md-6 -->

                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Your destination : ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 48, $this->source); })()), "destination", [], "any", false, false, false, 48), "html", null, true);
        echo " </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Duration of the trip : ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 51, $this->source); })()), "duree", [], "any", false, false, false, 51), "html", null, true);
        echo " </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Ticket price: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 54, $this->source); })()), "prix", [], "any", false, false, false, 54), "html", null, true);
        echo " </label>
                </div><!-- /.col-md-6 -->

                <div class=\"col-md-6\">
                    <p class=\"f-size-14\"> !!! Please ensure the ID is valid for at least 6 months
                        after the date of departure.</p>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.flight-list-box -->
    <div class=\"flight-list-box rt-mb-30 pt-30\">
        <h4 class=\"text-333 rt-semiblod\">Contact Details</h4> <br>
        <form action=\"#\" class=\"rt-form rt-line-form flight-lable\">
            <div class=\"row\">
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"contact-name\">Contact name : </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"mbl-name\">Mobile phone :  </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6\">
                    <label for=\"eml-name\">Email :             @     .   </label>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.flight-list-box -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transport/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  113 => 51,  107 => 48,  100 => 44,  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}


    <div class=\"flight-list-box rt-mb-30 pt-30\">
        <h3 class=\"f-size-24 text-capitalize rt-mb-30  rt-semiblod\">Passenger Info</h3>

        <br>
        <form action=\"#\" class=\"rt-form rt-line-form flight-lable\">
            <div class=\"row\">
                <div class=\"col-md-6 rt-mb-30 \">
                    <label for=\"fst-name\">First Name : </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"lst-name\">Last Name : </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Gender</label>
                            <br>
                            <div class=\"form-check form-check-inline\">
                                <label class=\"form-check-label\" for=\"inlineRadio2s\">Female</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <label class=\"form-check-label\" for=\"inlineRadio2ss\">Male</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class=\"col-md-6\">
                            <label for=\"st-date\">date :  __/__/_____ </label>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"select-2\">ID :</label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"id-number\">ID Number :</label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Agency name : {{ list.nomagence}} </label>
                </div><!-- /.col-md-6 -->

                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Your destination : {{ list.destination}} </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Duration of the trip : {{ list.duree}} </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-6 rt-mb-30\">
                    <label for=\"lst-name\">Ticket price: {{ list.prix}} </label>
                </div><!-- /.col-md-6 -->

                <div class=\"col-md-6\">
                    <p class=\"f-size-14\"> !!! Please ensure the ID is valid for at least 6 months
                        after the date of departure.</p>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.flight-list-box -->
    <div class=\"flight-list-box rt-mb-30 pt-30\">
        <h4 class=\"text-333 rt-semiblod\">Contact Details</h4> <br>
        <form action=\"#\" class=\"rt-form rt-line-form flight-lable\">
            <div class=\"row\">
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"contact-name\">Contact name : </label>
                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6 rt-mb-30\">
                    <label for=\"mbl-name\">Mobile phone :  </label>

                </div><!-- /.col-md-6 -->
                <div class=\"col-md-6\">
                    <label for=\"eml-name\">Email :             @     .   </label>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.flight-list-box -->


{% endblock %}", "transport/pdf.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\pdf.html.twig");
    }
}
