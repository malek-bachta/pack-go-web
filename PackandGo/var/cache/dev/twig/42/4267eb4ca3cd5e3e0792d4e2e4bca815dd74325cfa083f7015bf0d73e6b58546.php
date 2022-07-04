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

/* packs/new.html.twig */
class __TwigTemplate_9697a9abce57113e3d5bcf7e03b5a80cd9998554dbc2411c9f7855ff444a3e04 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packs/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "packs/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Packs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"content-body\">
    <div class=\"container-fluid\">
    <h1>Create new Packs</h1>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom Pack</label>
        <div class=\"col-sm-10\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nomPack", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Texte</label>
        <div class=\"col-sm-10\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "texte", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Service</label>
        <div class=\"col-sm-10\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "service", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Guide</label>
        <div class=\"col-sm-10\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "guide", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Destination</label>
        <div class=\"col-sm-10\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "destination", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Budget Pack</label>
        <div class=\"col-sm-10\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "budgetPack", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Offre</label>
        <div class=\"col-sm-10\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "offre", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"col-sm-10\">
        <button class=\"btn btn-primary\">";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        <button class=\"btn btn-primary\"> <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs_index");
        echo "\">Afficher</a></button>
    </div>
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "packs/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  137 => 41,  133 => 40,  126 => 36,  119 => 32,  112 => 28,  105 => 24,  98 => 20,  91 => 16,  84 => 12,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}New Packs{% endblock %}

{% block body %}
<div class=\"content-body\">
    <div class=\"container-fluid\">
    <h1>Create new Packs</h1>
        {{ form_start(form) }}
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom Pack</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.nomPack,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Texte</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.texte,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Service</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.service,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Guide</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.guide,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Destination</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.destination,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Budget Pack</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.budgetPack,{'attr':{'class':'form-control'}}) }}
        </div>
        <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Offre</label>
        <div class=\"col-sm-10\">
            {{ form_widget(form.offre,{'attr':{'class':'form-control'}}) }}
        </div>
    </div>
    <div class=\"col-sm-10\">
        <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
        <button class=\"btn btn-primary\"> <a href=\"{{ path('app_packs_index') }}\">Afficher</a></button>
    </div>
    {{ form_end(form) }}
</div>
        {% endblock %}
", "packs/new.html.twig", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\templates\\packs\\new.html.twig");
    }
}
