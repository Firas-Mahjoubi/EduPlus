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

/* g_events/update.html.twig */
class __TwigTemplate_b6fd7b3525d2c20a1dedef751d74fc97 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/update.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_events/update.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "        <div class=\"container mt-5\">
            <h1>Update Event</h1>
    
            ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        yield "
    
            <!-- Title Field -->
            <div class=\"mb-3\">
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), 'label');
        yield "
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter event title"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Description Field -->
            <div class=\"mb-3\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'label');
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Optional description"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Start Date Field -->
            <div class=\"mb-3\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "datedebut", [], "any", false, false, false, 29), 'label');
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "datedebut", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select start date"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "datedebut", [], "any", false, false, false, 32), 'errors');
        yield "
                </div>
            </div>
    
            <!-- End Date Field -->
            <div class=\"mb-3\">
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "datefin", [], "any", false, false, false, 38), 'label');
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "datefin", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select end date"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "datefin", [], "any", false, false, false, 41), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Club Field -->
            <div class=\"mb-3\">
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "club", [], "any", false, false, false, 47), 'label');
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "club", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "club", [], "any", false, false, false, 50), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Bloc Field -->
            <div class=\"mb-3\">
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "bloc", [], "any", false, false, false, 56), 'label');
        yield "
                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "bloc", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "bloc", [], "any", false, false, false, 59), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Participant Limit Checkbox -->
            <div class=\"mb-3\">
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 65), 'label');
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-check-input", "onclick" => "ShowHideDiv(this)"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 68), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Max Participants Field -->
            <div class=\"mb-3\" id=\"max-participants-container\" style=\"display: ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "hasParticipantLimit", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73)) {
            yield " block ";
        } else {
            yield " none ";
        }
        yield ";\">
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "maxParticipants", [], "any", false, false, false, 74), 'label');
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "maxParticipants", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter the maximum number of participants"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "maxParticipants", [], "any", false, false, false, 77), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Image Upload Field -->
            <div class=\"mb-3\">
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'label');
        yield "
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                <div class=\"invalid-feedback\">
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'errors');
        yield "
                </div>
            </div>
    
            <!-- Submit Button -->
            <div class=\"mb-3\">
                <button type=\"submit\" class=\"btn btn-primary\">Update Event</button>
            </div>
    
            ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
        </div>
    
        <script type=\"text/javascript\">
            // Function to show or hide the max participants input field
            function ShowHideDiv(checkbox) {
                var maxParticipantsContainer = document.getElementById(\"max-participants-container\");
                maxParticipantsContainer.style.display = checkbox.checked ? \"block\" : \"none\";
            }
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
        return "g_events/update.html.twig";
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
        return array (  260 => 95,  248 => 86,  243 => 84,  239 => 83,  230 => 77,  225 => 75,  221 => 74,  213 => 73,  205 => 68,  200 => 66,  196 => 65,  187 => 59,  182 => 57,  178 => 56,  169 => 50,  164 => 48,  160 => 47,  151 => 41,  146 => 39,  142 => 38,  133 => 32,  128 => 30,  124 => 29,  115 => 23,  110 => 21,  106 => 20,  97 => 14,  92 => 12,  88 => 11,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

    {% block body %}
        <div class=\"container mt-5\">
            <h1>Update Event</h1>
    
            {{ form_start(form) }}
    
            <!-- Title Field -->
            <div class=\"mb-3\">
                {{ form_label(form.titre) }}
                {{ form_widget(form.titre, { 'attr': { 'class': 'form-control', 'placeholder': 'Enter event title' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.titre) }}
                </div>
            </div>
    
            <!-- Description Field -->
            <div class=\"mb-3\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description, { 'attr': { 'class': 'form-control', 'placeholder': 'Optional description' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.description) }}
                </div>
            </div>
    
            <!-- Start Date Field -->
            <div class=\"mb-3\">
                {{ form_label(form.datedebut) }}
                {{ form_widget(form.datedebut, { 'attr': { 'class': 'form-control', 'placeholder': 'Select start date' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.datedebut) }}
                </div>
            </div>
    
            <!-- End Date Field -->
            <div class=\"mb-3\">
                {{ form_label(form.datefin) }}
                {{ form_widget(form.datefin, { 'attr': { 'class': 'form-control', 'placeholder': 'Select end date' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.datefin) }}
                </div>
            </div>
    
            <!-- Club Field -->
            <div class=\"mb-3\">
                {{ form_label(form.club) }}
                {{ form_widget(form.club, { 'attr': { 'class': 'form-control' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.club) }}
                </div>
            </div>
    
            <!-- Bloc Field -->
            <div class=\"mb-3\">
                {{ form_label(form.bloc) }}
                {{ form_widget(form.bloc, { 'attr': { 'class': 'form-control' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.bloc) }}
                </div>
            </div>
    
            <!-- Participant Limit Checkbox -->
            <div class=\"mb-3\">
                {{ form_label(form.hasParticipantLimit) }}
                {{ form_widget(form.hasParticipantLimit, { 'attr': { 'class': 'form-check-input', 'onclick': 'ShowHideDiv(this)' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.hasParticipantLimit) }}
                </div>
            </div>
    
            <!-- Max Participants Field -->
            <div class=\"mb-3\" id=\"max-participants-container\" style=\"display: {% if form.hasParticipantLimit.vars.value %} block {% else %} none {% endif %};\">
                {{ form_label(form.maxParticipants) }}
                {{ form_widget(form.maxParticipants, { 'attr': { 'class': 'form-control', 'placeholder': 'Enter the maximum number of participants' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.maxParticipants) }}
                </div>
            </div>
    
            <!-- Image Upload Field -->
            <div class=\"mb-3\">
                {{ form_label(form.image) }}
                {{ form_widget(form.image, { 'attr': { 'class': 'form-control-file' } }) }}
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.image) }}
                </div>
            </div>
    
            <!-- Submit Button -->
            <div class=\"mb-3\">
                <button type=\"submit\" class=\"btn btn-primary\">Update Event</button>
            </div>
    
            {{ form_end(form) }}
        </div>
    
        <script type=\"text/javascript\">
            // Function to show or hide the max participants input field
            function ShowHideDiv(checkbox) {
                var maxParticipantsContainer = document.getElementById(\"max-participants-container\");
                maxParticipantsContainer.style.display = checkbox.checked ? \"block\" : \"none\";
            }
        </script>
    {% endblock %}
    ", "g_events/update.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_events\\update.html.twig");
    }
}
