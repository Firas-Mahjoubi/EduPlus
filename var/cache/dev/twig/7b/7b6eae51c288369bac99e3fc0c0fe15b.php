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

/* registration/register.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/4d/4dd630b9c2146cbaa03954057bc6a6de.php
class __TwigTemplate_e359585930ebe19a73ff3dd97b479e18 extends Template
========
class __TwigTemplate_5cec11a667bf5e6d56fbd2542aaba83e extends Template
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/7b/7b6eae51c288369bac99e3fc0c0fe15b.php
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Create an Account</h1>

            <div class=\"card shadow-lg\">
                <div class=\"card-body\">
                    <form method=\"post\" enctype=\"multipart/form-data\" class=\"needs-validation\" novalidate>
                        <!-- Display form errors -->
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'errors');
        yield "
                        
                        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start');
        yield "

                        <!-- Name and Surname -->
                        <div class=\"form-group mb-3\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        yield "
                        </div>

                        <div class=\"form-group mb-3\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "First Name"]]);
        yield "
                        </div>

                        <!-- Email -->
                        <div class=\"form-group mb-3\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email Address"]]);
        yield "
                        </div>

                        <!-- Profile Picture -->
                        <div class=\"form-group mb-3\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "profilePicture", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control-file"]]);
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "profilePicture", [], "any", false, false, false, 36), 'errors');
        yield " <!-- Display profile picture errors -->
                        </div>

                         <!-- Password -->
                         <div class=\"form-group mb-3\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        yield "
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), 'errors');
        yield " <!-- Display password errors -->
                        </div>

                        <!-- Terms Agreement -->
                        <div class=\"form-check mb-3\">
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "agreeTerms", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label class=\"form-check-label\" for=\"agreeTerms\">
                            </label>
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "agreeTerms", [], "any", false, false, false, 50), 'errors');
        yield " <!-- Display errors if any -->
                        </div>

                        <!-- Submit Button -->
                        <div class=\"form-group\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "submit", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "btn btn-primary btn-lg btn-block w-100"]]);
        // line 59
        yield "
                        </div>

                        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
                    </form>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <p>Already have an account? <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login here</a></p>
            </div>
        </div>
    </div>
</div>
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
        return "registration/register.html.twig";
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
        return array (  200 => 68,  191 => 62,  186 => 59,  184 => 55,  176 => 50,  170 => 47,  162 => 42,  158 => 41,  150 => 36,  146 => 35,  138 => 30,  130 => 25,  123 => 21,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Create an Account</h1>

            <div class=\"card shadow-lg\">
                <div class=\"card-body\">
                    <form method=\"post\" enctype=\"multipart/form-data\" class=\"needs-validation\" novalidate>
                        <!-- Display form errors -->
                        {{ form_errors(registrationForm) }}
                        
                        {{ form_start(registrationForm) }}

                        <!-- Name and Surname -->
                        <div class=\"form-group mb-3\">
                            {{ form_row(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Last Name'}}) }}
                        </div>

                        <div class=\"form-group mb-3\">
                            {{ form_row(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'First Name'}}) }}
                        </div>

                        <!-- Email -->
                        <div class=\"form-group mb-3\">
                            {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email Address'}}) }}
                        </div>

                        <!-- Profile Picture -->
                        <div class=\"form-group mb-3\">
                            {{ form_row(registrationForm.profilePicture, {'attr': {'class': 'form-control-file'}}) }}
                            {{ form_errors(registrationForm.profilePicture) }} <!-- Display profile picture errors -->
                        </div>

                         <!-- Password -->
                         <div class=\"form-group mb-3\">
                            {{ form_row(registrationForm.password, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
                            {{ form_errors(registrationForm.password) }} <!-- Display password errors -->
                        </div>

                        <!-- Terms Agreement -->
                        <div class=\"form-check mb-3\">
                            {{ form_row(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                            <label class=\"form-check-label\" for=\"agreeTerms\">
                            </label>
                            {{ form_errors(registrationForm.agreeTerms) }} <!-- Display errors if any -->
                        </div>

                        <!-- Submit Button -->
                        <div class=\"form-group\">
                            {{ form_row(registrationForm.submit, {
                                'attr': {
                                    'class': 'btn btn-primary btn-lg btn-block w-100'
                                }
                            }) }}
                        </div>

                        {{ form_end(registrationForm) }}
                    </form>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <p>Already have an account? <a href=\"{{ path('app_login') }}\">Login here</a></p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\registration\\register.html.twig");
    }
}
