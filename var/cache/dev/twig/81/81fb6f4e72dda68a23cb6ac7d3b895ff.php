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

/* questionnaire/questionnaire.html.twig */
class __TwigTemplate_3f4c4a29fdc4c83a818e4648767dd6ca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire/questionnaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "questionnaire/questionnaire.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Questionnaire - Étape ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
            <div class=\"col-md-8 offset-md-2\">
                <h1 class=\"mb-4 text-center\">Questionnaire - Étape ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 9, $this->source); })()), "html", null, true);
        yield " / 5</h1>
                
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            yield "                    <div class=\"mb-3\">
                        ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                
                <div class=\"form-actions d-flex justify-content-between mt-4\">
                    ";
        // line 20
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 20, $this->source); })()) > 1)) {
            // line 21
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_step", ["step" => ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 21, $this->source); })()) - 1), "userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 21, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Précédent</a>
                    ";
        }
        // line 23
        yield "                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 24
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 24, $this->source); })()) == 5)) {
            // line 25
            yield "                            Confirmer
                        ";
        } else {
            // line 27
            yield "                            Continuer
                        ";
        }
        // line 29
        yield "                    </button>
                </div>

                <style>
                    #questionnaire_submit {
                        display: none;
                    }
                </style>
                
                ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        yield "
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
        return "questionnaire/questionnaire.html.twig";
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
        return array (  143 => 38,  132 => 29,  128 => 27,  124 => 25,  122 => 24,  119 => 23,  113 => 21,  111 => 20,  107 => 18,  98 => 15,  95 => 14,  91 => 13,  86 => 11,  81 => 9,  76 => 6,  69 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Questionnaire - Étape {{ step }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <h1 class=\"mb-4 text-center\">Questionnaire - Étape {{ step }} / 5</h1>
                
                {{ form_start(form) }}
                
                {% for field in form %}
                    <div class=\"mb-3\">
                        {{ form_row(field, {'attr': {'class': 'form-control'}}) }}
                    </div>
                {% endfor %}
                
                <div class=\"form-actions d-flex justify-content-between mt-4\">
                    {% if step > 1 %}
                        <a href=\"{{ path('questionnaire_step', {'step': step - 1, 'userId': userId}) }}\" class=\"btn btn-secondary\">Précédent</a>
                    {% endif %}
                    <button type=\"submit\" class=\"btn btn-primary\">
                        {% if step == 5 %}
                            Confirmer
                        {% else %}
                            Continuer
                        {% endif %}
                    </button>
                </div>

                <style>
                    #questionnaire_submit {
                        display: none;
                    }
                </style>
                
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "questionnaire/questionnaire.html.twig", "/var/www/html/Questionnaire/questionnaire/templates/questionnaire/questionnaire.html.twig");
    }
}
