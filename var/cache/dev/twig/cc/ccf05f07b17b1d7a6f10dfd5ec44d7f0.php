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

/* g_ressources/backOffice/demande_detail.html.twig */
class __TwigTemplate_a4ce3514f8d44fb81a802ea7742308a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/demande_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/demande_detail.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_ressources/backOffice/demande_detail.html.twig", 1);
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
    <h1 class=\"mb-4 text-center\">Détails de la demande</h1>

    <!-- Card for resource details -->
    <div class=\"card mb-4\">
        <div class=\"card-header bg-primary text-white\">
            <h4 class=\"card-title\">Informations de la demande</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <!-- Resource Name -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Ressource :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 16, $this->source); })()), "ressource", [], "any", false, false, false, 16), "nomRessource", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                </div>
                <!-- Quantity -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Quantité :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 20, $this->source); })()), "quantite", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                </div>
                <!-- Current Status -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Statut actuel :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 24, $this->source); })()), "statutDemande", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 29, $this->source); })()), "ressource", [], "any", false, false, false, 29), "image", [], "any", false, false, false, 29)) {
            // line 30
            yield "                    <div class=\"col-md-4 mb-3\">
                        <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/ressources/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 31, $this->source); })()), "ressource", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" alt=\"Image de la ressource\" class=\"img-fluid rounded\" style=\"max-height: 200px; object-fit: cover;\">
                    </div>
                ";
        }
        // line 34
        yield "            </div>
        </div>
    </div>

    <!-- Card for status modification form -->
   <div class=\"card-body\">
    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group mb-4\">
            <label for=\"statutDemande\">Statut de la demande</label>
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "statutDemande", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Mettre à jour</button>
    ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "g_ressources/backOffice/demande_detail.html.twig";
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
        return array (  143 => 46,  137 => 43,  131 => 40,  123 => 34,  117 => 31,  114 => 30,  112 => 29,  104 => 24,  97 => 20,  90 => 16,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4 text-center\">Détails de la demande</h1>

    <!-- Card for resource details -->
    <div class=\"card mb-4\">
        <div class=\"card-header bg-primary text-white\">
            <h4 class=\"card-title\">Informations de la demande</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <!-- Resource Name -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Ressource :</strong> {{ demande.ressource.nomRessource }}</p>
                </div>
                <!-- Quantity -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Quantité :</strong> {{ demande.quantite }}</p>
                </div>
                <!-- Current Status -->
                <div class=\"col-md-4 mb-3\">
                    <p><strong>Statut actuel :</strong> {{ demande.statutDemande }}</p>
                </div>
            </div>

            <div class=\"row\">
                {% if demande.ressource.image %}
                    <div class=\"col-md-4 mb-3\">
                        <img src=\"{{ asset('uploads/ressources/' ~ demande.ressource.image) }}\" alt=\"Image de la ressource\" class=\"img-fluid rounded\" style=\"max-height: 200px; object-fit: cover;\">
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Card for status modification form -->
   <div class=\"card-body\">
    {{ form_start(form) }}
        <div class=\"form-group mb-4\">
            <label for=\"statutDemande\">Statut de la demande</label>
            {{ form_widget(form.statutDemande, {'attr': {'class': 'form-control'}}) }}
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Mettre à jour</button>
    {{ form_end(form) }}
</div>

    </div>
</div>
{% endblock %}
", "g_ressources/backOffice/demande_detail.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\g_ressources\\backOffice\\demande_detail.html.twig");
    }
}
