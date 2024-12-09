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

/* g_ressources/backOffice/index.html.twig */
class __TwigTemplate_b7aa1ad254f2ba83c96b0b8aaa759bdc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/index.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_ressources/backOffice/index.html.twig", 1);
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

        yield "Liste des Ressources";
        
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
        yield "    <div class=\"container py-5\">
        <h1 class=\"mb-4\">List of Resources</h1>
        
        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Resource Name</th>                 
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Date of Creation</th>
                    <th>Image</th> <!-- Colonne pour l'image -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 25
            yield "                    <tr>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "type", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 29), "html", null, true)) : ("-"));
            yield "</td>
                        <td>";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 30), "html", null, true)) : ("-"));
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "descriptionRessource", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "dateCreationRessource", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "image", [], "any", false, false, false, 34)) {
                // line 35
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/ressources/" . CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "image", [], "any", false, false, false, 35))), "html", null, true);
                yield "\" width=\"100\"> 
                            ";
            } else {
                // line 37
                yield "                                <span>Aucune image</span>
                            ";
            }
            // line 39
            yield "                        </td>
                        <td>
                        
                             <div><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">UPDATE</a></div>
                             <div> <br></div>
                            <div><a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_delete_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\">DELETE</a></div>
                            
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                    <tr>
                        <td colspan=\"10\" class=\"text-center\">Aucune ressource trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "            </tbody>
        </table>
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
        return "g_ressources/backOffice/index.html.twig";
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
        return array (  198 => 53,  189 => 49,  179 => 44,  174 => 42,  169 => 39,  165 => 37,  159 => 35,  157 => 34,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  125 => 25,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Liste des Ressources{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">List of Resources</h1>
        
        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Resource Name</th>                 
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Date of Creation</th>
                    <th>Image</th> <!-- Colonne pour l'image -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for ressource in ressources %}
                    <tr>
                        <td>{{ ressource.id }}</td>
                        <td>{{ ressource.nomRessource }}</td>
                        <td>{{ ressource.type }}</td>
                        <td>{{ ressource.montant ?: '-' }}</td>
                        <td>{{ ressource.quantite ?: '-' }}</td>
                        <td>{{ ressource.descriptionRessource }}</td>
                        <td>{{ ressource.dateCreationRessource|date('Y-m-d') }}</td>
                        <td>
                            {% if ressource.image %}
                            <img src=\"{{ asset('uploads/ressources/' ~ ressource.image) }}\" width=\"100\"> 
                            {% else %}
                                <span>Aucune image</span>
                            {% endif %}
                        </td>
                        <td>
                        
                             <div><a href=\"{{ path('ressource_edit', { 'id': ressource.id }) }}\" class=\"btn btn-warning btn-sm\">UPDATE</a></div>
                             <div> <br></div>
                            <div><a href=\"{{ path('ressource_delete_confirm', { 'id': ressource.id }) }}\" class=\"btn btn-danger btn-sm\">DELETE</a></div>
                            
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"10\" class=\"text-center\">Aucune ressource trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "g_ressources/backOffice/index.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_ressources\\backOffice\\index.html.twig");
    }
}
