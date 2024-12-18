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

/* club/new.html.twig */
class __TwigTemplate_dc0808c7dde889e566842c3dccccb97b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/new.html.twig", 1);
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

        yield "Create New Club";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Left Section -->
            <div class=\"col-lg-7\">
                <div class=\"section-title position-relative pb-3 mb-5\">
                    <h5 class=\"fw-bold text-primary text-uppercase\">Create A Club</h5>
                    <h1 class=\"mb-0\">Want to Create a New Club? Please Fill in the Details Below</h1>
                </div>
                <div class=\"row gx-3\">
                    <div class=\"col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
                        <h5 class=\"mb-4\"><i class=\"fa fa-reply text-primary me-3\"></i>Reply within 24 hours</h5>
                    </div>
                    <div class=\"col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
                        <h5 class=\"mb-4\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>24/7 Support Available</h5>
                    </div>
                </div>
                <p class=\"mb-4\">Please ensure all fields are filled out correctly to create your club. We are here to assist you with any queries or issues.</p>
                <div class=\"d-flex align-items-center mt-2 wow zoomIn\" data-wow-delay=\"0.6s\">
                    <div class=\"bg-primary d-flex align-items-center justify-content-center rounded\" style=\"width: 60px; height: 60px;\">
                        <i class=\"fa fa-phone-alt text-white\"></i>
                    </div>
                    <div class=\"ps-4\">
                        <h5 class=\"mb-2\">Call for assistance</h5>
                        <h4 class=\"text-primary mb-0\">+216 58405469</h4>
                    </div>
                </div>
            </div>

            <!-- Right Section (Form) -->
            <div class=\"col-lg-5\">
                <div class=\"card p-4 wow zoomIn\" data-wow-delay=\"0.4s\">
                    ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"form-group mb-3\">
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Club Name"]);
        yield "
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "responsable", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Responsable"]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "responsable", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <!-- New Logo Upload Field -->
                    <div class=\"form-group mb-3\">
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "logo", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Logo (optional)"]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "logo", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"submit\" class=\"btn btn-dark w-100 py-3\">Save</button>
                    </div>

                    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        yield "
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
        return "club/new.html.twig";
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
        return array (  187 => 64,  177 => 57,  173 => 56,  165 => 51,  161 => 50,  154 => 46,  150 => 45,  143 => 41,  139 => 40,  133 => 37,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New Club{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Left Section -->
            <div class=\"col-lg-7\">
                <div class=\"section-title position-relative pb-3 mb-5\">
                    <h5 class=\"fw-bold text-primary text-uppercase\">Create A Club</h5>
                    <h1 class=\"mb-0\">Want to Create a New Club? Please Fill in the Details Below</h1>
                </div>
                <div class=\"row gx-3\">
                    <div class=\"col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
                        <h5 class=\"mb-4\"><i class=\"fa fa-reply text-primary me-3\"></i>Reply within 24 hours</h5>
                    </div>
                    <div class=\"col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
                        <h5 class=\"mb-4\"><i class=\"fa fa-phone-alt text-primary me-3\"></i>24/7 Support Available</h5>
                    </div>
                </div>
                <p class=\"mb-4\">Please ensure all fields are filled out correctly to create your club. We are here to assist you with any queries or issues.</p>
                <div class=\"d-flex align-items-center mt-2 wow zoomIn\" data-wow-delay=\"0.6s\">
                    <div class=\"bg-primary d-flex align-items-center justify-content-center rounded\" style=\"width: 60px; height: 60px;\">
                        <i class=\"fa fa-phone-alt text-white\"></i>
                    </div>
                    <div class=\"ps-4\">
                        <h5 class=\"mb-2\">Call for assistance</h5>
                        <h4 class=\"text-primary mb-0\">+216 58405469</h4>
                    </div>
                </div>
            </div>

            <!-- Right Section (Form) -->
            <div class=\"col-lg-5\">
                <div class=\"card p-4 wow zoomIn\" data-wow-delay=\"0.4s\">
                    {{ form_start(form) }}
                    
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.nom, 'Club Name', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group mb-3\">
                        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group mb-3\">
                        {{ form_label(form.responsable, 'Responsable', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.responsable, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <!-- New Logo Upload Field -->
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.logo, 'Logo (optional)', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.logo, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"submit\" class=\"btn btn-dark w-100 py-3\">Save</button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "club/new.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\new.html.twig");
    }
}
