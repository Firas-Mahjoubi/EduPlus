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

/* g_recrutements/create.html.twig */
class __TwigTemplate_747845e0e78aa3e10cfbf30b476ab6ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/create.html.twig", 1);
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

        yield "Ajouter un Recrutement";
        
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
    <h1 class=\"mb-4 text-center\">Créer un Nouveau Recrutement</h1>

    <!-- Card pour le formulaire -->
    <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white text-center\">
            <h5 class=\"mb-0\">Formulaire de Recrutement</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
            
            <!-- Organisation des champs -->
            <div class=\"row\">
                <!-- Titre -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Titre"]);
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'errors');
        yield "
                </div>

                <!-- Description -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description"]);
        yield "
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <!-- Statut -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Statut"]);
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39), 'errors');
        yield "
                </div>

                <!-- Date Limite -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "deadline", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Date Limite"]);
        yield "
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "deadline", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "deadline", [], "any", false, false, false, 46), 'errors');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <!-- Compétences -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "requirements", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Compétences"]);
        yield "
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "requirements", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "requirements", [], "any", false, false, false, 55), 'errors');
        yield "
                </div>

                <!-- Lieu -->
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "location", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Lieu"]);
        yield "
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "location", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 62, $this->source); })()), "location", [], "any", false, false, false, 62), 'errors');
        yield "
                </div>
            </div>

            <div class=\"row\">
                <!-- Club -->
                <div class=\"col-md-12 mb-3\">
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "club", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Club"]);
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "club", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 71, $this->source); })()), "club", [], "any", false, false, false, 71), 'errors');
        yield "
                </div>
            </div>

            <!-- Boutons -->
            <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_all");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
            </div>

            ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
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
        return "g_recrutements/create.html.twig";
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
        return array (  246 => 81,  240 => 78,  230 => 71,  226 => 70,  222 => 69,  212 => 62,  208 => 61,  204 => 60,  196 => 55,  192 => 54,  188 => 53,  178 => 46,  174 => 45,  170 => 44,  162 => 39,  158 => 38,  154 => 37,  144 => 30,  140 => 29,  136 => 28,  128 => 23,  124 => 22,  120 => 21,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un Recrutement{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Créer un Nouveau Recrutement</h1>

    <!-- Card pour le formulaire -->
    <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white text-center\">
            <h5 class=\"mb-0\">Formulaire de Recrutement</h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(f, { 'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' } }) }}
            
            <!-- Organisation des champs -->
            <div class=\"row\">
                <!-- Titre -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.title, 'Titre', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.title, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.title) }}
                </div>

                <!-- Description -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.description, 'Description', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.description, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.description) }}
                </div>
            </div>

            <div class=\"row\">
                <!-- Statut -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.status, 'Statut', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.status, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.status) }}
                </div>

                <!-- Date Limite -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.deadline, 'Date Limite', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.deadline, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.deadline) }}
                </div>
            </div>

            <div class=\"row\">
                <!-- Compétences -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.requirements, 'Compétences', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.requirements, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.requirements) }}
                </div>

                <!-- Lieu -->
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(f.location, 'Lieu', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.location, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.location) }}
                </div>
            </div>

            <div class=\"row\">
                <!-- Club -->
                <div class=\"col-md-12 mb-3\">
                    {{ form_label(f.club, 'Club', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    {{ form_widget(f.club, { 'attr': { 'class': 'form-control' } }) }}
                    {{ form_errors(f.club) }}
                </div>
            </div>

            <!-- Boutons -->
            <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                <a href=\"{{ path('app_show_all') }}\" class=\"btn btn-secondary\">Annuler</a>
            </div>

            {{ form_end(f) }}
        </div>
    </div>
</div>
{% endblock %}
", "g_recrutements/create.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\g_recrutements\\create.html.twig");
    }
}
