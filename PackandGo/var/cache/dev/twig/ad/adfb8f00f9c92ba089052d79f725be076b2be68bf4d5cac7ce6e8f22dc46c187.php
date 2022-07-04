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

/* transport/ajouter.html.twig */
class __TwigTemplate_6d144390e6fc5f25f6d6a3a91380c8d5330dbed1955982399bbdfb1d53e9682e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "transport/ajouter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Transport Managment";
        
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
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add transport</a></li>
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
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Transport Type
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a hotel type.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Agency Name <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nomagence", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Transport name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Price
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prix", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Price.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Duration <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "duree", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the Duration.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Guides <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "guide", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the Duration.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Destination
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "destination", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the destination.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=\"mb-3 row\">




                                            <div class=\"mb-3 row\">
                                                <div class=\"col-lg-8 ms-auto\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">Submit";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
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
        return "transport/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 104,  176 => 89,  162 => 78,  148 => 67,  134 => 56,  119 => 44,  105 => 33,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Transport Managment{% endblock %}

{% block body %}


    <!--**********************************
           Content body start
       ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Add transport</a></li>
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
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom01\">Transport Type
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.type, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a hotel type.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom02\">Agency Name <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.nomagence, {'attr' :{'class': \"form-control\"}}) }}

                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Transport name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom03\">Price
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.prix, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter a Price.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Duration <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.duree, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the Duration.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Guides <span
                                                            class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.guide, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the Duration.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"mb-3 row\">
                                                <label class=\"col-lg-4 col-form-label\" for=\"validationCustom04\">Destination
                                                    <span class=\"text-danger\">*</span>
                                                </label>
                                                <div class=\"col-lg-6\">
                                                    {{ form_widget(form.destination, {'attr' :{'class': \"form-control\"}}) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter the destination.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=\"mb-3 row\">




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




{% endblock %}", "transport/ajouter.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\transport\\ajouter.html.twig");
    }
}
