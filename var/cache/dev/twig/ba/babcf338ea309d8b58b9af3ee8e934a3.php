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

/* g_recrutements/SSOW.html.twig */
class __TwigTemplate_a4e3615551bf3c522469e95329a9a360 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/SSOW.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_recrutements/SSOW.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_recrutements/SSOW.html.twig", 1);
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

        yield "Recrutements Disponibles";
        
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
    <h1 class=\"mb-4 text-center\">Nos recrutements</h1>

    <!-- Barre de recherche -->
    <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_search");
        yield "\" method=\"get\" class=\"d-flex mb-4\">
        <input type=\"text\" name=\"q\" class=\"form-control me-2\" placeholder=\"Rechercher des recrutements...\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["q", ""], "method", false, false, false, 11), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    <!-- Messages Flash -->
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "        <div class=\"alert alert-success\">
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
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    <!-- Liste des annonces -->
    <div class=\"row\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["liste_recruitement"]) || array_key_exists("liste_recruitement", $context) ? $context["liste_recruitement"] : (function () { throw new RuntimeError('Variable "liste_recruitement" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recruitment"]) {
            // line 31
            yield "            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "image", [], "any", false, false, false, 33)) {
                // line 34
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "image", [], "any", false, false, false, 34))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Image\">
                    ";
            }
            // line 36
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "title", [], "any", false, false, false, 37), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">
                            <strong>Description :</strong> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "description", [], "any", false, false, false, 39), 0, 100), "html", null, true);
            yield "...
                        </p>
                        <p class=\"card-text\">
                            <strong>Statut :</strong> 
                            <span class=\"badge ";
            // line 43
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "status", [], "any", false, false, false, 43) == "open")) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "status", [], "any", false, false, false, 44)), "html", null, true);
            yield "
                            </span>
                        </p>
                        <p class=\"card-text\"><strong>Date Limite :</strong> ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "deadline", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p class=\"card-text\"><strong>Lieu :</strong> ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "location", [], "any", false, false, false, 48), "html", null, true);
            yield "</p>
                        ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 50
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_recruitment_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                            ";
            }
            // line 52
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 53
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "application", [], "any", true, true, false, 53) && CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "application", [], "any", false, false, false, 53))) {
                    // line 54
                    yield "                                <!-- Bouton pour supprimer la candidature -->
                                <a href=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "application", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" 
                                   class=\"btn btn-danger btn-sm\"
                                   onclick=\"return confirm('Voulez-vous supprimer votre candidature ?');\">
                                    Supprimer ma candidature
                                </a>
                            ";
                } else {
                    // line 61
                    yield "                                <!-- Bouton pour postuler -->
                                <a href=\"";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-sm\">Postuler</a>
                            ";
                }
                // line 64
                yield "                        ";
            }
            // line 65
            yield "                             ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 66
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("check_application_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">Voir mon statut</a>
                                ";
            }
            // line 68
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESPONSABLE_CLUB"))) {
                // line 69
                yield "                            <!-- Bouton Voir les candidatures -->
                            <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_applications", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recruitment"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\"> 
                                Voir les candidatures
                            </a>
                            
                        ";
            }
            // line 75
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">
                    Aucune annonce de recrutement disponible pour le moment.
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recruitment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return "g_recrutements/SSOW.html.twig";
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
        return array (  287 => 85,  276 => 79,  268 => 75,  260 => 70,  257 => 69,  254 => 68,  248 => 66,  245 => 65,  242 => 64,  237 => 62,  234 => 61,  225 => 55,  222 => 54,  219 => 53,  216 => 52,  210 => 50,  208 => 49,  204 => 48,  200 => 47,  194 => 44,  190 => 43,  183 => 39,  178 => 37,  175 => 36,  169 => 34,  167 => 33,  163 => 31,  158 => 30,  153 => 27,  144 => 24,  141 => 23,  137 => 22,  134 => 21,  125 => 18,  122 => 17,  118 => 16,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recrutements Disponibles{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Nos recrutements</h1>

    <!-- Barre de recherche -->
    <form action=\"{{ path('recruitment_search') }}\" method=\"get\" class=\"d-flex mb-4\">
        <input type=\"text\" name=\"q\" class=\"form-control me-2\" placeholder=\"Rechercher des recrutements...\" value=\"{{ app.request.query.get('q', '') }}\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    <!-- Messages Flash -->
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

    <!-- Liste des annonces -->
    <div class=\"row\">
        {% for recruitment in liste_recruitement %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    {% if recruitment.image %}
                        <img src=\"{{ asset('uploads/images/' ~ recruitment.image) }}\" class=\"card-img-top\" alt=\"Image\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ recruitment.title }}</h5>
                        <p class=\"card-text\">
                            <strong>Description :</strong> {{ recruitment.description|slice(0, 100) }}...
                        </p>
                        <p class=\"card-text\">
                            <strong>Statut :</strong> 
                            <span class=\"badge {{ recruitment.status == 'open' ? 'bg-success' : 'bg-danger' }}\">
                                {{ recruitment.status | capitalize }}
                            </span>
                        </p>
                        <p class=\"card-text\"><strong>Date Limite :</strong> {{ recruitment.deadline|date('d/m/Y') }}</p>
                        <p class=\"card-text\"><strong>Lieu :</strong> {{ recruitment.location }}</p>
                        {% if is_granted('ROLE_USER')%}
                        <a href=\"{{ path('user_recruitment_details', { id: recruitment.id }) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                            {% endif %}
                        {% if is_granted('ROLE_USER') %}
                            {% if recruitment.application is defined and recruitment.application %}
                                <!-- Bouton pour supprimer la candidature -->
                                <a href=\"{{ path('application_delete', { id: recruitment.application.id }) }}\" 
                                   class=\"btn btn-danger btn-sm\"
                                   onclick=\"return confirm('Voulez-vous supprimer votre candidature ?');\">
                                    Supprimer ma candidature
                                </a>
                            {% else %}
                                <!-- Bouton pour postuler -->
                                <a href=\"{{ path('recruitment_apply', { id: recruitment.id }) }}\" class=\"btn btn-success btn-sm\">Postuler</a>
                            {% endif %}
                        {% endif %}
                             {% if is_granted('ROLE_USER')%}
                        <a href=\"{{ path('check_application_status', { id: recruitment.id }) }}\" class=\"btn btn-info btn-sm\">Voir mon statut</a>
                                {% endif %}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RESPONSABLE_CLUB') %}
                            <!-- Bouton Voir les candidatures -->
                            <a href=\"{{ path('recruitment_applications', { id: recruitment.id }) }}\" class=\"btn btn-primary btn-sm\"> 
                                Voir les candidatures
                            </a>
                            
                        {% endif %}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">
                    Aucune annonce de recrutement disponible pour le moment.
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "g_recrutements/SSOW.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_recrutements\\SSOW.html.twig");
    }
}
