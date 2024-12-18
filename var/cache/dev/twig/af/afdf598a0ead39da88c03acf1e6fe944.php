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
<<<<<<<< HEAD:var/cache/dev/twig/24/648c93a62244239a59f61b41cf07be2f.php
class __TwigTemplate_35e42dee260ec33cf314237f8e9dccee extends Template
========
class __TwigTemplate_b7aa1ad254f2ba83c96b0b8aaa759bdc extends Template
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/af/afdf598a0ead39da88c03acf1e6fe944.php
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
        yield "
    <div class=\"container py-5\">

         <!-- <div class=\"mb-4\">
     <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
                </div> -->
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 39
            yield "                    <tr>
                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "nomRessource", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "type", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                        <td>";
<<<<<<<< HEAD:var/cache/dev/twig/24/648c93a62244239a59f61b41cf07be2f.php
            // line 43
            ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 43)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 43), "html", null, true)) : (yield "-"));
            yield "</td>
                        <td>";
            // line 44
            ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 44)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 44), "html", null, true)) : (yield "-"));
========
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "montant", [], "any", false, false, false, 29), "html", null, true)) : ("-"));
            yield "</td>
                        <td>";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "quantite", [], "any", false, false, false, 30), "html", null, true)) : ("-"));
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/af/afdf598a0ead39da88c03acf1e6fe944.php
            yield "</td>
                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "descriptionRessource", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "dateCreationRessource", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "image", [], "any", false, false, false, 48)) {
                // line 49
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/ressources/" . CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "image", [], "any", false, false, false, 49))), "html", null, true);
                yield "\" width=\"100\"> 
                            ";
            } else {
                // line 51
                yield "                                <span>Aucune image</span>
                            ";
            }
            // line 53
            yield "                        </td>
                        <td>
                        
                             <div><a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">UPDATE</a></div>
                             <div> <br></div>
                            <div><a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_delete_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\">DELETE</a></div>
                            
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            yield "                    <tr>
                        <td colspan=\"10\" class=\"text-center\">Aucune ressource trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return array (  212 => 67,  203 => 63,  193 => 58,  188 => 56,  183 => 53,  179 => 51,  173 => 49,  171 => 48,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  139 => 39,  134 => 38,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Liste des Ressources{% endblock %}

{% block body %}

    <div class=\"container py-5\">

         <!-- <div class=\"mb-4\">
     <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
                </div> -->
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
<<<<<<< HEAD
", "g_ressources/backOffice/index.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_ressources\\backOffice\\index.html.twig");
=======
", "g_ressources/backOffice/index.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_ressources\\backOffice\\index.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
