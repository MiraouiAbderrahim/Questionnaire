<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* questionnaire/result.html.twig */
class __TwigTemplate_5964cd4d2308adada1169a350fcd7186 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire/result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "questionnaire/result.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Résultat du Questionnaire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
                <h1>Résultat du Questionnaire</h1>
                <p><strong>Nom:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "firstName", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
                <p><strong>Email:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
                <p><strong>Score total:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</p>
                

                <p><strong>Votre résultat:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</p>
                <div class=\"position-relative my-4\" style=\"width: 180px; height: 150px; margin: 0 auto;\">
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow.png"), "html", null, true);
        yield "\" alt=\"Arrow\" class=\"position-absolute\" style=\"top: 0; left: 50%; transform: translateX(-50%); z-index: 10; width: 50px;\">
                    <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/semicircle.png"), "html", null, true);
        yield "\" alt=\"Semicircle\" class=\"w-100\" style=\"transform: rotate(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rotationAngle"]) || array_key_exists("rotationAngle", $context) ? $context["rotationAngle"] : (function () { throw new RuntimeError('Variable "rotationAngle" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "deg);\">
                </div>
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        yield "\" class=\"btn btn-primary mt-3\">Recommencer</a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "questionnaire/result.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 20,  106 => 18,  102 => 17,  97 => 15,  91 => 12,  87 => 11,  81 => 10,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultat du Questionnaire{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
                <h1>Résultat du Questionnaire</h1>
                <p><strong>Nom:</strong> {{ user.firstName }} {{ user.lastName }}</p>
                <p><strong>Email:</strong> {{ user.email }}</p>
                <p><strong>Score total:</strong> {{ totalScore }}</p>
                

                <p><strong>Votre résultat:</strong> {{ result }}</p>
                <div class=\"position-relative my-4\" style=\"width: 180px; height: 150px; margin: 0 auto;\">
                    <img src=\"{{ asset('images/arrow.png') }}\" alt=\"Arrow\" class=\"position-absolute\" style=\"top: 0; left: 50%; transform: translateX(-50%); z-index: 10; width: 50px;\">
                    <img src=\"{{ asset('images/semicircle.png') }}\" alt=\"Semicircle\" class=\"w-100\" style=\"transform: rotate({{ rotationAngle }}deg);\">
                </div>
                <a href=\"{{ path('user_registration') }}\" class=\"btn btn-primary mt-3\">Recommencer</a>
            </div>
        </div>
    </div>
{% endblock %}
", "questionnaire/result.html.twig", "/var/www/html/Questionnaire/questionnaire/templates/questionnaire/result.html.twig");
    }
}
