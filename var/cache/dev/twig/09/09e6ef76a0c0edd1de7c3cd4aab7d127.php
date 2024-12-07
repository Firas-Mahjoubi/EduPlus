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

/* g_recrutements/applications.html.twig */
class __TwigTemplate_9c2ae87b06a82eb81c69929cef301bd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/applications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/applications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/applications.html.twig", 1);
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

        yield "Candidatures pour ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
    <h1 class=\"text-center mb-4\">Candidatures pour : ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 9, $this->source); })())) == 0)) {
            // line 10
            yield "        <div class=\"alert alert-warning text-center\">Aucune candidature trouvée pour ce recrutement.</div>
    ";
        } else {
            // line 12
            yield "        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Nom du candidat</th>
                    <th>Statut</th>
                    <th>Date de soumission</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 23
                yield "                    <tr>
                        <td>

    ";
                // line 26
                if (CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 26)) {
                    // line 27
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 29
                    yield "                        Nom non disponible
                    ";
                }
                // line 31
                yield "

                        </td>
                        <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                        <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "dateSoumission", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                yield "</td>
                        <td>
                            <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">Voir</a>

                            
                            <a href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_decision", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 40), "decision" => "valider"]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">Valider</a>
                            <a href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_decision", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 41), "decision" => "rejeter"]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">Rejeter</a>


                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['application'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "            </tbody>
        </table>
    ";
        }
        // line 50
        yield "</div>
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
        return "g_recrutements/applications.html.twig";
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
        return array (  191 => 50,  186 => 47,  174 => 41,  170 => 40,  164 => 37,  159 => 35,  155 => 34,  150 => 31,  146 => 29,  138 => 27,  136 => 26,  131 => 23,  127 => 22,  115 => 12,  111 => 10,  109 => 9,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidatures pour {{ recruitment.title }}{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Candidatures pour : {{ recruitment.title }}</h1>

    {% if applications|length == 0 %}
        <div class=\"alert alert-warning text-center\">Aucune candidature trouvée pour ce recrutement.</div>
    {% else %}
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Nom du candidat</th>
                    <th>Statut</th>
                    <th>Date de soumission</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for application in applications %}
                    <tr>
                        <td>

    {% if application.candidat %}
                        {{ application.candidat.nom }} {{ application.candidat.prenom }}
                    {% else %}
                        Nom non disponible
                    {% endif %}


                        </td>
                        <td>{{ application.status }}</td>
                        <td>{{ application.dateSoumission|date('d/m/Y') }}</td>
                        <td>
                            <a href=\"{{ path('application_details', { id: application.id }) }}\" class=\"btn btn-primary btn-sm\">Voir</a>

                            
                            <a href=\"{{ path('application_decision', { id: application.id, decision: 'valider' }) }}\" class=\"btn btn-success btn-sm\">Valider</a>
                            <a href=\"{{ path('application_decision', { id: application.id, decision: 'rejeter' }) }}\" class=\"btn btn-danger btn-sm\">Rejeter</a>


                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
{% endblock %}
", "g_recrutements/applications.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_recrutements\\applications.html.twig");
    }
}
