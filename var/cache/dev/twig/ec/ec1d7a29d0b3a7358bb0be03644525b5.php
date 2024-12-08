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

/* g_recrutements/application_details.html.twig */
class __TwigTemplate_77d3db601a19033324bbf485670c45a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/application_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/application_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/application_details.html.twig", 1);
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

        yield "Détails de la candidature";
        
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
    <h1 class=\"text-center mb-4\">Détails de la candidature</h1>

    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Informations sur le candidat</h5>
            <p><strong>Nom :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
            <p><strong>Photo de profil :</strong></p>
            ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 15, $this->source); })()), "profilePicture", [], "any", false, false, false, 15)) {
            // line 16
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 16, $this->source); })()), "profilePicture", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"img-thumbnail\" width=\"150\">
            ";
        } else {
            // line 18
            yield "                <p><em>Aucune photo disponible</em></p>
            ";
        }
        // line 20
        yield "
            <h5 class=\"mt-4\">Informations sur la candidature</h5>
            <p><strong>Statut :</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
            <p><strong>Date de soumission :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 23, $this->source); })()), "dateSoumission", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        yield "</p>
            <p><strong>Lettre de motivation :</strong></p>
            <p>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 25, $this->source); })()), "motivationLetter", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
            <p><strong>CV :</strong> <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 26, $this->source); })()), "cv", [], "any", false, false, false, 26))), "html", null, true);
        yield "\" download>Télécharger le CV</a></p>

            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_applications", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 28, $this->source); })()), "recruitment", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-3\">Retour</a>
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
        return "g_recrutements/application_details.html.twig";
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
        return array (  153 => 28,  148 => 26,  144 => 25,  139 => 23,  135 => 22,  131 => 20,  127 => 18,  121 => 16,  119 => 15,  114 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la candidature{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Détails de la candidature</h1>

    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Informations sur le candidat</h5>
            <p><strong>Nom :</strong> {{ candidat.nom }} {{ candidat.prenom }}</p>
            <p><strong>Email :</strong> {{ candidat.email }}</p>
            <p><strong>Photo de profil :</strong></p>
            {% if candidat.profilePicture %}
                <img src=\"{{ asset('uploads/profile_pictures/' ~ candidat.profilePicture) }}\" alt=\"Photo de profil\" class=\"img-thumbnail\" width=\"150\">
            {% else %}
                <p><em>Aucune photo disponible</em></p>
            {% endif %}

            <h5 class=\"mt-4\">Informations sur la candidature</h5>
            <p><strong>Statut :</strong> {{ application.status }}</p>
            <p><strong>Date de soumission :</strong> {{ application.dateSoumission|date('d/m/Y') }}</p>
            <p><strong>Lettre de motivation :</strong></p>
            <p>{{ application.motivationLetter }}</p>
            <p><strong>CV :</strong> <a href=\"{{ asset('uploads/cv/' ~ application.cv) }}\" download>Télécharger le CV</a></p>

            <a href=\"{{ path('recruitment_applications', { id: application.recruitment.id }) }}\" class=\"btn btn-secondary mt-3\">Retour</a>
        </div>
    </div>
</div>
{% endblock %}
", "g_recrutements/application_details.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\g_recrutements\\application_details.html.twig");
    }
}
