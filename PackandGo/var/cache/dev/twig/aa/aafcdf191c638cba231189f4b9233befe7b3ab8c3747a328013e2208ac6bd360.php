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

/* @email/zurb_2/notification/local.css */
class __TwigTemplate_2597d7c8114d39ddcf2d24108fb0dbafeec4469ea4a42dffa65bccfed3962677 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/zurb_2/notification/local.css"));

        // line 1
        echo "body {
    background: #f3f3f3;
}

.wrapper.secondary {
    background: #f3f3f3;
}

.container.body_alert {
    border-top: 8px solid #ec5840;
}

.container.body_warning {
    border-top: 8px solid #ffae00;
}

.container.body_default {
    border-top: 8px solid #aaaaaa;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@email/zurb_2/notification/local.css";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body {
    background: #f3f3f3;
}

.wrapper.secondary {
    background: #f3f3f3;
}

.container.body_alert {
    border-top: 8px solid #ec5840;
}

.container.body_warning {
    border-top: 8px solid #ffae00;
}

.container.body_default {
    border-top: 8px solid #aaaaaa;
}
", "@email/zurb_2/notification/local.css", "C:\\Users\\mbach\\Documents\\GitHub\\pack-go-web\\PackandGo\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\local.css");
    }
}
