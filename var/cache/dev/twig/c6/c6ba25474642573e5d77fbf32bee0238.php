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

/* g_recrutements/show.html.twig */
class __TwigTemplate_45a76cdc8538de7e1e14b2b9e83dcaee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/show.html.twig", 1);
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

        yield "Détails du Recrutement";
        
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
    <h1 class=\"mb-4 text-center\">Détails de l'Annonce de Recrutement</h1>

    <!-- Carte des détails -->
    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h2>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"card-body\">
            <p><strong>Description :</strong></p>
            <p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>

            <p><strong>Statut :</strong> 
                <span class=\"badge ";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19) == "open")) ? ("bg-success") : ("bg-danger"));
        yield "\">
                    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20)), "html", null, true);
        yield "
                </span>
            </p>

            <p><strong>Exigences :</strong></p>
            <p>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 25, $this->source); })()), "requirements", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>

            <p><strong>Lieu :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 27, $this->source); })()), "location", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>

            <p><strong>Date limite :</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 29, $this->source); })()), "deadline", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        yield "</p>

            <p><strong>Créé le :</strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 31, $this->source); })()), "dateCreated", [], "any", false, false, false, 31), "d/m/Y H:i"), "html", null, true);
        yield "</p>

            ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 33, $this->source); })()), "dateUpdated", [], "any", false, false, false, 33)) {
            // line 34
            yield "                <p><strong>Dernière mise à jour :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 34, $this->source); })()), "dateUpdated", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true);
            yield "</p>
            ";
        }
        // line 36
        yield "
            <p><strong>Club :</strong> Club ID #";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 37, $this->source); })()), "club", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "</p>
        </div>
    </div>

    <!-- Boutons d'actions -->
    <div class=\"mt-4 d-flex justify-content-between\">
        
        ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
            <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Recruitment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\">Supprimer</a>
        ";
        }
        // line 48
        yield "    </div>
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
        return "g_recrutements/show.html.twig";
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
        return array (  186 => 48,  181 => 46,  176 => 45,  174 => 44,  164 => 37,  161 => 36,  155 => 34,  153 => 33,  148 => 31,  143 => 29,  138 => 27,  133 => 25,  125 => 20,  121 => 19,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Recrutement{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Détails de l'Annonce de Recrutement</h1>

    <!-- Carte des détails -->
    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h2>{{ recruitment.title }}</h2>
        </div>
        <div class=\"card-body\">
            <p><strong>Description :</strong></p>
            <p>{{ recruitment.description }}</p>

            <p><strong>Statut :</strong> 
                <span class=\"badge {{ recruitment.status == 'open' ? 'bg-success' : 'bg-danger' }}\">
                    {{ recruitment.status | capitalize }}
                </span>
            </p>

            <p><strong>Exigences :</strong></p>
            <p>{{ recruitment.requirements }}</p>

            <p><strong>Lieu :</strong> {{ recruitment.location }}</p>

            <p><strong>Date limite :</strong> {{ recruitment.deadline|date('d/m/Y') }}</p>

            <p><strong>Créé le :</strong> {{ recruitment.dateCreated|date('d/m/Y H:i') }}</p>

            {% if recruitment.dateUpdated %}
                <p><strong>Dernière mise à jour :</strong> {{ recruitment.dateUpdated|date('d/m/Y H:i') }}</p>
            {% endif %}

            <p><strong>Club :</strong> Club ID #{{ recruitment.club.id }}</p>
        </div>
    </div>

    <!-- Boutons d'actions -->
    <div class=\"mt-4 d-flex justify-content-between\">
        
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('recruitment_edit', { id: recruitment.id }) }}\" class=\"btn btn-warning\">Modifier</a>
            <a href=\"{{ path('Recruitment_delete', { id: recruitment.id }) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\">Supprimer</a>
        {% endif %}
    </div>
</div>
{% endblock %}
", "g_recrutements/show.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_recrutements\\show.html.twig");
    }
}
