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

/* services/addS.html.twig */
class __TwigTemplate_27124bb45528327ece1ce980d6026afb2819b0ee60d22ae27484736c069e5f93 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/addS.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "services/addS.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Service Managment";
        
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
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add Service</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"card-body\">
                            <div class=\"form-validation\">
                                <form class=\"needs-validation\" novalidate >
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Formule
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "formule", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Formule.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Price<span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Price.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Stay
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "sejours", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Stay.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Activity <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "activite", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Activity.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom08\">State
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "etat", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a State.
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
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
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
        return "services/addS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 102,  164 => 80,  148 => 67,  134 => 56,  119 => 44,  105 => 33,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Service Managment{% endblock %}

{% block body %}


    <!--**********************************
           Content body start
       ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add Service</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        {{ form_start(form) }}
                        <div class=\"card-body\">
                            <div class=\"form-validation\">
                                <form class=\"needs-validation\" novalidate >
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Formule
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.formule, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Formule.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Price<span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.prix, {'attr' :{'class': \"form-control\"}}) }}

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Price.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Stay
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.sejours, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Stay.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Activity <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.activite, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Activity.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom08\">State
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.etat, {'attr' :{'class': \"form-control\" }}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a State.
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
                                                    <button type=\"submit\" class=\"btn btn-primary\">Submit{{ form_end(form) }}</button>
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




{% endblock %}", "services/addS.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\services\\addS.html.twig");
    }
}
