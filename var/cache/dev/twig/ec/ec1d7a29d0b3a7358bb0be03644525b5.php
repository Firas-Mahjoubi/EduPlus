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
        return "base_backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/application_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/application_details.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_recrutements/application_details.html.twig", 1);
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

    <table class=\"table table-bordered\">
        <tr>
            <th>Nom du candidat</th>
            <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Statut</th>
            <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Date de soumission</th>
            <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 24, $this->source); })()), "dateSoumission", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Lettre de motivation</th>
            <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 28, $this->source); })()), "motivationLetter", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>CV</th>
            <td>
                ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 33, $this->source); })()), "cv", [], "any", false, false, false, 33)) {
            // line 34
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 34, $this->source); })()), "cv", [], "any", false, false, false, 34))), "html", null, true);
            yield "\" target=\"_blank\">Télécharger</a>
                ";
        } else {
            // line 36
            yield "                    Non disponible
                ";
        }
        // line 38
        yield "            </td>
        </tr>
    </table>

    <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_applications", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 42, $this->source); })()), "recruitment", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Retour</a>
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
        return array (  164 => 42,  158 => 38,  154 => 36,  148 => 34,  146 => 33,  138 => 28,  131 => 24,  124 => 20,  117 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Détails de la candidature{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Détails de la candidature</h1>

    <table class=\"table table-bordered\">
        <tr>
            <th>Nom du candidat</th>
            <td>{{ candidat.nom }} {{ candidat.prenom }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ candidat.email }}</td>
        </tr>
        <tr>
            <th>Statut</th>
            <td>{{ application.status }}</td>
        </tr>
        <tr>
            <th>Date de soumission</th>
            <td>{{ application.dateSoumission|date('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Lettre de motivation</th>
            <td>{{ application.motivationLetter }}</td>
        </tr>
        <tr>
            <th>CV</th>
            <td>
                {% if application.cv %}
                    <a href=\"{{ asset('uploads/cv/' ~ application.cv) }}\" target=\"_blank\">Télécharger</a>
                {% else %}
                    Non disponible
                {% endif %}
            </td>
        </tr>
    </table>

    <a href=\"{{ path('recruitment_applications', { id: application.recruitment.id }) }}\" class=\"btn btn-secondary\">Retour</a>
</div>
{% endblock %}
<<<<<<< HEAD
", "g_recrutements/application_details.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_recrutements\\application_details.html.twig");
=======
", "g_recrutements/application_details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_recrutements\\application_details.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
