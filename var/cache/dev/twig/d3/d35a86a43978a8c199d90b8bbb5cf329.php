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
use Twig\TemplateWrapper;

/* g_events/add.html.twig */
class __TwigTemplate_bcd40efcb90bb69fc6c7b2b7d93b5600 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/add.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_events/add.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Add Event";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "        <div class=\"container mt-5\">
            <h1 class=\"mb-4\">Add a New Event</h1>
    
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"mb-3\">
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'label', ["label" => "Event Title"]);
        yield "
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter event title"]]);
        yield "
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'errors');
        yield "
                    </div>
    
                    <div class=\"form-check mb-3\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-check-input", "id" => "has-limit-checkbox"]]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Limit Number of Participants?"]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 22), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\" id=\"max-participants-container\" >
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "maxParticipants", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Maximum Participants"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "maxParticipants", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter the maximum number of participants"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "maxParticipants", [], "any", false, false, false, 28), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\">
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "datedebut", [], "any", false, false, false, 32), 'label', ["label" => "Start Date"]);
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "datedebut", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "datedebut", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "datefin", [], "any", false, false, false, 38), 'label', ["label" => "End Date"]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "datefin", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "datefin", [], "any", false, false, false, 40), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'label', ["label" => "Description"]);
        yield "
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Optional description"]]);
        yield "
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "club", [], "any", false, false, false, 50), 'label', ["label" => "Club"]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "club", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "club", [], "any", false, false, false, 52), 'errors');
        yield "
                    </div>
    
                    <div class=\"mb-3\">
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "bloc", [], "any", false, false, false, 56), 'label', ["label" => "Bloc"]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "bloc", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "bloc", [], "any", false, false, false, 58), 'errors');
        yield "
                    </div>
    
                    <!-- Image upload field -->
                    <div class=\"mb-3\">
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'label', ["label" => "Event Image"]);
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), 'errors');
        yield "
                    </div>
    
                    <button type=\"submit\" class=\"btn btn-primary\">Save Event</button>
    
                    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        yield "        <script>
           document.addEventListener('DOMContentLoaded', () => {
    const limitCheckbox = document.getElementById('has-limit-checkbox');
    const maxParticipantsContainer = document.getElementById('max-participants-container');

    if (limitCheckbox && maxParticipantsContainer) {
        // Debugging: Log checkbox state
        console.log('Checkbox initialized. Current state:', limitCheckbox.checked);

        // Toggle visibility when the checkbox state changes
        limitCheckbox.addEventListener('change', () => {
            console.log('Checkbox toggled. New state:', limitCheckbox.checked);
            maxParticipantsContainer.style.display = limitCheckbox.checked ? 'block' : 'none';
        });

        // Set initial visibility on page load
        maxParticipantsContainer.style.display = limitCheckbox.checked ? 'block' : 'none';
    } else {
        console.error('Could not find checkbox or maxParticipantsContainer element.');
    }
});

        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "g_events/add.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  280 => 77,  267 => 76,  251 => 70,  243 => 65,  239 => 64,  235 => 63,  227 => 58,  223 => 57,  219 => 56,  212 => 52,  208 => 51,  204 => 50,  197 => 46,  193 => 45,  189 => 44,  182 => 40,  178 => 39,  174 => 38,  167 => 34,  163 => 33,  159 => 32,  152 => 28,  148 => 27,  144 => 26,  137 => 22,  133 => 21,  129 => 20,  122 => 16,  118 => 15,  114 => 14,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Add Event{% endblock %}

    {% block body %}
        <div class=\"container mt-5\">
            <h1 class=\"mb-4\">Add a New Event</h1>
    
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.titre, 'Event Title') }}
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Enter event title'}}) }}
                        {{ form_errors(form.titre) }}
                    </div>
    
                    <div class=\"form-check mb-3\">
                        {{ form_widget(form.hasParticipantLimit, {'attr': {'class': 'form-check-input', 'id': 'has-limit-checkbox'}}) }}
                        {{ form_label(form.hasParticipantLimit, 'Limit Number of Participants?', {'label_attr': {'class': 'form-check-label'}}) }}
                        {{ form_errors(form.hasParticipantLimit) }}
                    </div>
    
                    <div class=\"mb-3\" id=\"max-participants-container\" >
                        {{ form_label(form.maxParticipants, 'Maximum Participants', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.maxParticipants, {'attr': {'class': 'form-control', 'placeholder': 'Enter the maximum number of participants'}}) }}
                        {{ form_errors(form.maxParticipants) }}
                    </div>
    
                    <div class=\"mb-3\">
                        {{ form_label(form.datedebut, 'Start Date') }}
                        {{ form_widget(form.datedebut, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.datedebut) }}
                    </div>
    
                    <div class=\"mb-3\">
                        {{ form_label(form.datefin, 'End Date') }}
                        {{ form_widget(form.datefin, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.datefin) }}
                    </div>
    
                    <div class=\"mb-3\">
                        {{ form_label(form.description, 'Description') }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Optional description'}}) }}
                        {{ form_errors(form.description) }}
                    </div>
    
                    <div class=\"mb-3\">
                        {{ form_label(form.club, 'Club') }}
                        {{ form_widget(form.club, {'attr': {'class': 'form-select'}}) }}
                        {{ form_errors(form.club) }}
                    </div>
    
                    <div class=\"mb-3\">
                        {{ form_label(form.bloc, 'Bloc') }}
                        {{ form_widget(form.bloc, {'attr': {'class': 'form-select'}}) }}
                        {{ form_errors(form.bloc) }}
                    </div>
    
                    <!-- Image upload field -->
                    <div class=\"mb-3\">
                        {{ form_label(form.image, 'Event Image') }}
                        {{ form_widget(form.image, {'attr': {'class': 'form-control-file'}}) }}
                        {{ form_errors(form.image) }}
                    </div>
    
                    <button type=\"submit\" class=\"btn btn-primary\">Save Event</button>
    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    {% endblock %}
    
    {% block javascripts %}
        <script>
           document.addEventListener('DOMContentLoaded', () => {
    const limitCheckbox = document.getElementById('has-limit-checkbox');
    const maxParticipantsContainer = document.getElementById('max-participants-container');

    if (limitCheckbox && maxParticipantsContainer) {
        // Debugging: Log checkbox state
        console.log('Checkbox initialized. Current state:', limitCheckbox.checked);

        // Toggle visibility when the checkbox state changes
        limitCheckbox.addEventListener('change', () => {
            console.log('Checkbox toggled. New state:', limitCheckbox.checked);
            maxParticipantsContainer.style.display = limitCheckbox.checked ? 'block' : 'none';
        });

        // Set initial visibility on page load
        maxParticipantsContainer.style.display = limitCheckbox.checked ? 'block' : 'none';
    } else {
        console.error('Could not find checkbox or maxParticipantsContainer element.');
    }
});

        </script>
    {% endblock %}
    ", "g_events/add.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\g_events\\add.html.twig");
    }
}
