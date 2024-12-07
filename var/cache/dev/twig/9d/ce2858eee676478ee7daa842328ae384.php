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

/* g_recrutements/index.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/f3/f362b086da71bbdbad8e2b84776b9f9e.php
class __TwigTemplate_f898c496f0e1d35101511896c36e83f5 extends Template
========
class __TwigTemplate_de610a8be802da5e1d43ef2d5f66d908 extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/9d/ce2858eee676478ee7daa842328ae384.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/index.html.twig", 1);
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

        yield "Liste des Recrutements";
        
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
    <h1 class=\"mb-4 text-center\">Liste des Annonces de Recrutement</h1>

    <!-- Message Flash -->
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "        <div class=\"alert alert-success\">
            ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    <!-- Bouton pour ajouter une annonce -->
    ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            yield "        <div class=\"mb-3 text-end\">
            <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_create");
            yield "\" class=\"btn btn-primary\">Créer une Nouvelle Annonce</a>
        </div>
    ";
        }
        // line 28
        yield "
    <!-- Tableau des recrutements -->
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Date Limite</th>
                    <th>Club</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["liste_recruitement"]) || array_key_exists("liste_recruitement", $context) ? $context["liste_recruitement"] : (function () { throw new RuntimeError('Variable "liste_recruitement" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recruitment"]) {
            // line 44
            yield "                    <tr>
                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge ";
            // line 48
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "status", [], "any", false, false, false, 48) == "open")) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "status", [], "any", false, false, false, 49)), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "deadline", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "club", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td>
                            <!-- Bouton Voir -->
                            <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitement_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>

                           
                                <!-- Bouton Modifier -->
                                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <!-- Bouton Supprimer -->
                                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Recruitment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-danger btn-sm\" 
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\">
                                    Supprimer
                                </a>
                          
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucune annonce de recrutement trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recruitment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "            </tbody>
        </table>
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
        return "g_recrutements/index.html.twig";
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
        return array (  245 => 75,  236 => 71,  222 => 62,  217 => 60,  210 => 56,  204 => 53,  200 => 52,  194 => 49,  190 => 48,  185 => 46,  181 => 45,  178 => 44,  173 => 43,  156 => 28,  150 => 25,  147 => 24,  145 => 23,  141 => 21,  132 => 18,  129 => 17,  125 => 16,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Recrutements{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Liste des Annonces de Recrutement</h1>

    <!-- Message Flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">
            {{ message }}
        </div>
    {% endfor %}

    <!-- Bouton pour ajouter une annonce -->
    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"mb-3 text-end\">
            <a href=\"{{ path('recruitment_create') }}\" class=\"btn btn-primary\">Créer une Nouvelle Annonce</a>
        </div>
    {% endif %}

    <!-- Tableau des recrutements -->
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Date Limite</th>
                    <th>Club</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for recruitment in liste_recruitement %}
                    <tr>
                        <td>{{ recruitment.id }}</td>
                        <td>{{ recruitment.title }}</td>
                        <td>
                            <span class=\"badge {{ recruitment.status == 'open' ? 'bg-success' : 'bg-danger' }}\">
                                {{ recruitment.status | capitalize }}
                            </span>
                        </td>
                        <td>{{ recruitment.deadline|date('d/m/Y') }}</td>
                        <td>{{ recruitment.club.nom }}</td>
                        <td>
                            <!-- Bouton Voir -->
                            <a href=\"{{ path('recruitement_details', { id: recruitment.id }) }}\" class=\"btn btn-info btn-sm\">Voir</a>

                           
                                <!-- Bouton Modifier -->
                                <a href=\"{{ path('recruitment_edit', { id: recruitment.id }) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <!-- Bouton Supprimer -->
                                <a href=\"{{ path('Recruitment_delete', { id: recruitment.id }) }}\" 
                                   class=\"btn btn-danger btn-sm\" 
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\">
                                    Supprimer
                                </a>
                          
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucune annonce de recrutement trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "g_recrutements/index.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_recrutements\\index.html.twig");
    }
}
