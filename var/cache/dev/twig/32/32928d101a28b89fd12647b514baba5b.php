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

<<<<<<<< HEAD:var/cache/dev/twig/20/7e9783a13fa0130ff9c3286ca3c74c9f.php
/* g_ressources/backOffice/confirm_delete.html.twig */
class __TwigTemplate_822752eb54dd92c1c7c9de58d52caa2a extends Template
========
/* g_ressources/confirm_delete.html.twig */
class __TwigTemplate_d77313330ac7af36427b1449c7344b17 extends Template
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/32/32928d101a28b89fd12647b514baba5b.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/confirm_delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/backOffice/confirm_delete.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_ressources/backOffice/confirm_delete.html.twig", 1);
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

        yield "Confirmer la suppression";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2>Confirm deletion?</h2>
                    </div>
                    <div class=\"card-body\">
                        <p>Êtes-vous sûr de vouloir supprimer la ressource <strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ressource"]) || array_key_exists("ressource", $context) ? $context["ressource"] : (function () { throw new RuntimeError('Variable "ressource" does not exist.', 14, $this->source); })()), "nomRessource", [], "any", false, false, false, 14), "html", null, true);
        yield "</strong> ?</p>
                        <form action=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ressource"]) || array_key_exists("ressource", $context) ? $context["ressource"] : (function () { throw new RuntimeError('Variable "ressource" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" method=\"post\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ressource"]) || array_key_exists("ressource", $context) ? $context["ressource"] : (function () { throw new RuntimeError('Variable "ressource" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\">
                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </div>
                        </form>
                    </div>
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
        return "g_ressources/backOffice/confirm_delete.html.twig";
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
        return array (  123 => 18,  118 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Confirmer la suppression{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2>Confirm deletion?</h2>
                    </div>
                    <div class=\"card-body\">
                        <p>Êtes-vous sûr de vouloir supprimer la ressource <strong>{{ ressource.nomRessource }}</strong> ?</p>
                        <form action=\"{{ path('ressource_delete', { 'id': ressource.id }) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ ressource.id) }}\">
                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_g_ressources') }}\" class=\"btn btn-secondary\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/dev/twig/20/7e9783a13fa0130ff9c3286ca3c74c9f.php
", "g_ressources/backOffice/confirm_delete.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\g_ressources\\backOffice\\confirm_delete.html.twig");
========
", "g_ressources/confirm_delete.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_ressources\\confirm_delete.html.twig");
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/32/32928d101a28b89fd12647b514baba5b.php
=======
<<<<<<< HEAD
", "g_ressources/confirm_delete.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_ressources\\confirm_delete.html.twig");
=======
", "g_ressources/confirm_delete.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_ressources\\confirm_delete.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
>>>>>>> 4477e60a08ed2839dfe87e35579db92c2eed4210
    }
}
