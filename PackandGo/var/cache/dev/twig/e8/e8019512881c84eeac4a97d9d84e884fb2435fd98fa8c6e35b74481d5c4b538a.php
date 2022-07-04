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

/* hotels/addH.html.twig */
class __TwigTemplate_7f0f875572ba04190afaf263f1a44df8873cf7eb3ba1726e8bffd5c4e09e88e0 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels/addH.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "hotels/addH.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hotels Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <!--**********************************
           Content body start
       ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add Hotel</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"card-body\">
                            <div class=\"form-validation\">
                                <form class=\"needs-validation\" novalidate >
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Hotel Name
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 33, $this->source); })()), "nomh", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a hotel name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Hotel Category <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 44, $this->source); })()), "categorie", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Hotel Category.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Adress
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 56, $this->source); })()), "adresse", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Adress.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">email <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Email.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom08\">Phone (TN)
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 80, $this->source); })()), "telh", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a phone no.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom07\">Equipment
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 92, $this->source); })()), "equipement", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a url.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom11\">Select Image
                                                    <span class=\"text-danger\">*</span>

                                                </label>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"input-group mb-3\">
                                                        <div class=\"form-file\">
                                                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 106, $this->source); })()), "image", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Services <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 118, $this->source); })()), "service", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-fez\">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\"><a
                                                            href=\"javascript:void()\">Terms &amp; Conditions</a> <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-8\">
                                                    <div class=\"form-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"validationCustom12\" required>
                                                        <label class=\"form-check-label\" for=\"validationCustom12\">
                                                            Agree to terms and conditions
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <div class=\"col-lg-8 ms-auto\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">Submit";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 140, $this->source); })()), 'form_end');
        echo "</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotels/addH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 140,  211 => 118,  196 => 106,  179 => 92,  164 => 80,  148 => 67,  134 => 56,  119 => 44,  105 => 33,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Hotels Managment{% endblock %}

{% block body %}


    <!--**********************************
           Content body start
       ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add Hotel</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        {{ form_start(hotel) }}
                        <div class=\"card-body\">
                            <div class=\"form-validation\">
                                <form class=\"needs-validation\" novalidate >
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Hotel Name
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.nomh, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a hotel name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Hotel Category <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.categorie, {'attr' :{'class': \"form-control\"}}) }}

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Hotel Category.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Adress
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.adresse, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Adress.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">email <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.email, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Email.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom08\">Phone (TN)
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.telh, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a phone no.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom07\">Equipment
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.equipement, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a url.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom11\">Select Image
                                                    <span class=\"text-danger\">*</span>

                                                </label>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"input-group mb-3\">
                                                        <div class=\"form-file\">
                                                            {{ form_widget(hotel.image, {'attr' :{'class': \"form-control\"}}) }}

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Services <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(hotel.service, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-fez\">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\"><a
                                                            href=\"javascript:void()\">Terms &amp; Conditions</a> <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-8\">
                                                    <div class=\"form-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"validationCustom12\" required>
                                                        <label class=\"form-check-label\" for=\"validationCustom12\">
                                                            Agree to terms and conditions
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <div class=\"col-lg-8 ms-auto\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">Submit{{ form_end(hotel) }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




{% endblock %}", "hotels/addH.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\hotels\\addH.html.twig");
    }
}
