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

/* reservation/new.html.twig */
class __TwigTemplate_11db52be5be210796cb6afe02c3c6767a3aeafd3399b929bdc7c645a5916a484 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reservation/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Reservation";
        
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
    <section class=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 section-t8\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">

                                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dateDeb", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control rt-mb-30"]]);
        echo "
                                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dateDeb", [], "any", false, false, false, 20), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateFin", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control rt-mb-30"]]);
        echo "
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateFin", [], "any", false, false, false, 26), 'errors');
        echo "
                                    </div>
                                </div>



                                <div class=\"col-md-12 text-center\">
                                    <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
                                </div>
                            </div>
                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  107 => 26,  103 => 25,  95 => 20,  91 => 19,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}New Reservation{% endblock %}

{% block body %}

    <section class=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 section-t8\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            {{ form_start(form) }}

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">

                                        {{ form_widget(form.dateDeb, { 'attr': {'class': 'form-control rt-mb-30'} }) }}
                                        {{ form_errors(form.dateDeb) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_widget(form.dateFin, { 'attr': {'class': 'form-control rt-mb-30'} }) }}
                                        {{ form_errors(form.dateFin) }}
                                    </div>
                                </div>



                                <div class=\"col-md-12 text-center\">
                                    <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
                                </div>
                            </div>
                            {{ form_end(form) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "reservation/new.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\reservation\\new.html.twig");
    }
}
