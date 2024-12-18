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

/* g_ressources/backOffice/stats.html.twig */
class __TwigTemplate_2b973b1809dfc2a124294a7d2a028027 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/stats.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_ressources/backOffice/stats.html.twig", 1);
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
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">DASHBOARD</h1>

    <div class=\"row\">
        <!-- Total resources -->
        <div class=\"col-md-6\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Total Resources</h5>
                    <p class=\"card-text display-4\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRessources"]) || array_key_exists("totalRessources", $context) ? $context["totalRessources"] : (function () { throw new RuntimeError('Variable "totalRessources" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <!-- Request statuses -->
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    Request Statuses
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 27
            yield "                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "statutDemande", [], "any", false, false, false, 28), "html", null, true);
            yield "
                                <span class=\"badge bg-primary rounded-pill\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "count", [], "any", false, false, false, 29), "html", null, true);
            yield "</span>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Most used resources -->
    <div class=\"mt-4\">
        <div class=\"card\">
            <div class=\"card-header bg-warning text-white\">
                Most Used Resources
            </div>
            <div class=\"card-body\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Resource</th>
                            <th>Number of Uses</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mostUsedRessources"]) || array_key_exists("mostUsedRessources", $context) ? $context["mostUsedRessources"] : (function () { throw new RuntimeError('Variable "mostUsedRessources" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 54
            yield "                            <tr>
                                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "usage_count", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    </tbody>
                </table>
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
        return "g_ressources/backOffice/stats.html.twig";
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
        return array (  166 => 59,  157 => 56,  153 => 55,  150 => 54,  146 => 53,  123 => 32,  114 => 29,  110 => 28,  107 => 27,  103 => 26,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">DASHBOARD</h1>

    <div class=\"row\">
        <!-- Total resources -->
        <div class=\"col-md-6\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Total Resources</h5>
                    <p class=\"card-text display-4\">{{ totalRessources }}</p>
                </div>
            </div>
        </div>

        <!-- Request statuses -->
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    Request Statuses
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group\">
                        {% for statut in statuts %}
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                {{ statut.statutDemande }}
                                <span class=\"badge bg-primary rounded-pill\">{{ statut.count }}</span>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Most used resources -->
    <div class=\"mt-4\">
        <div class=\"card\">
            <div class=\"card-header bg-warning text-white\">
                Most Used Resources
            </div>
            <div class=\"card-body\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Resource</th>
                            <th>Number of Uses</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for ressource in mostUsedRessources %}
                            <tr>
                                <td>{{ ressource.nomRessource }}</td>
                                <td>{{ ressource.usage_count }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "g_ressources/backOffice/stats.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\g_ressources\\backOffice\\stats.html.twig");
    }
}
