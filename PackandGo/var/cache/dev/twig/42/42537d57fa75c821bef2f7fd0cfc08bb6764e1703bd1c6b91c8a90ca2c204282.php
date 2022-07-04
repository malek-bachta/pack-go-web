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

/* hotels/pdfhotel.html.twig */
class __TwigTemplate_f3229b24ee85248b7d55b3a0f21f0ef071f69baef4b9b404519d0e1c897368ba extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/pdfhotel.html.twig"));

        // line 1
        echo "<div>
    <h4 >Passenger Info</h4>
    <h6 >Passenger 1: Adult ticket</h6>
    <br>
    <br>
    <form >
        <div>
            <div>
                <label>First Name   ...................................</label>

            </div>
            <div >
                <label>Last Name   ...................................</label>
                <input >
            </div><!-- /.col-md-6 -->
            <div class=\"col-lg-6 rt-mb-30\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>Date</label>
                        <br>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\"
                                   id=\"inlineRadio2s\" value=\"option2\">
                            <label class=\"form-check-label\" for=\"inlineRadio2s\">Female</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\"
                                   id=\"inlineRadio2ss\" value=\"option2\">
                            <label class=\"form-check-label\" for=\"inlineRadio2ss\">Male</label>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class=\"col-md-6\">
                        <label for=\"st-date\">date</label>
                        <input type=\"text\" class=\"form-control rt-date-picker\" placeholder=\"date\"
                               id=\"st-date\">
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6 rt-mb-30\">
                <label for=\"select-2\">ID</label>
                <select id=\"select-2\">
                    <option value=\"1\">Passport</option>
                    <option value=\"2\">NID</option>
                    <option value=\"3\">NTO</option>

                </select>
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6 rt-mb-30\">
                <label for=\"id-number\">ID Number</label>
                <input type=\"text\" placeholder=\"ID Number\" class=\"form-control\">
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6\">
                <p class=\"f-size-14\">Please ensure the ID is valid for at least 6 months
                    after the date of departure.</p>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </form>
</div><!-- /.flight-list-box -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/pdfhotel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <h4 >Passenger Info</h4>
    <h6 >Passenger 1: Adult ticket</h6>
    <br>
    <br>
    <form >
        <div>
            <div>
                <label>First Name   ...................................</label>

            </div>
            <div >
                <label>Last Name   ...................................</label>
                <input >
            </div><!-- /.col-md-6 -->
            <div class=\"col-lg-6 rt-mb-30\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>Date</label>
                        <br>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\"
                                   id=\"inlineRadio2s\" value=\"option2\">
                            <label class=\"form-check-label\" for=\"inlineRadio2s\">Female</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\"
                                   id=\"inlineRadio2ss\" value=\"option2\">
                            <label class=\"form-check-label\" for=\"inlineRadio2ss\">Male</label>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class=\"col-md-6\">
                        <label for=\"st-date\">date</label>
                        <input type=\"text\" class=\"form-control rt-date-picker\" placeholder=\"date\"
                               id=\"st-date\">
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6 rt-mb-30\">
                <label for=\"select-2\">ID</label>
                <select id=\"select-2\">
                    <option value=\"1\">Passport</option>
                    <option value=\"2\">NID</option>
                    <option value=\"3\">NTO</option>

                </select>
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6 rt-mb-30\">
                <label for=\"id-number\">ID Number</label>
                <input type=\"text\" placeholder=\"ID Number\" class=\"form-control\">
            </div><!-- /.col-md-6 -->
            <div class=\"col-md-6\">
                <p class=\"f-size-14\">Please ensure the ID is valid for at least 6 months
                    after the date of departure.</p>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </form>
</div><!-- /.flight-list-box -->
", "hotels/pdfhotel.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\pdfhotel.html.twig");
    }
}
