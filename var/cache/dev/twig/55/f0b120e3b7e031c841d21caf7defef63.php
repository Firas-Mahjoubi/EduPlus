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

/* club/pending_members.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/3c/3c120cf9901a51ff730df9dc00e1fe77.php
class __TwigTemplate_642f8e5ce47427b8de3361bb2504f03d extends Template
========
class __TwigTemplate_583ab594a50e2621d7cf71d2863d8ceb extends Template
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/55/f0b120e3b7e031c841d21caf7defef63.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/pending_members.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/pending_members.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/pending_members.html.twig", 1);
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

        yield "Club Pending Applications";
        
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
        yield "    <h1>Pending Applications for Club: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    ";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">Applicant Name</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 19
                yield "                    <tr>
                        <td>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 20), "prenom", [], "any", false, false, false, 20), "html", null, true);
                yield "</td>
                        <td>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 21), "html", null, true);
                yield "</td>
                        <td>
                            <form method=\"post\" action=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_accept_application", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "applicationId" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-success\">Approve</button>
                            </form>

                            <form method=\"post\" action=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_reject_application", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "applicationId" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-danger\">Reject</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['application'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 36
            yield "        <p>No pending applications for this club.</p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "club/pending_members.html.twig";
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
        return array (  159 => 36,  154 => 33,  142 => 27,  135 => 23,  130 => 21,  126 => 20,  123 => 19,  119 => 18,  108 => 9,  106 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Club Pending Applications{% endblock %}

{% block body %}
    <h1>Pending Applications for Club: {{ club.nom }}</h1>

    {% if applications is not empty %}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">Applicant Name</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for application in applications %}
                    <tr>
                        <td>{{ application.candidat.prenom }}</td>
                        <td>{{ application.status }}</td>
                        <td>
                            <form method=\"post\" action=\"{{ path('club_accept_application', { id: club.id, applicationId: application.id }) }}\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-success\">Approve</button>
                            </form>

                            <form method=\"post\" action=\"{{ path('club_reject_application', { id: club.id, applicationId: application.id }) }}\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-danger\">Reject</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No pending applications for this club.</p>
    {% endif %}
{% endblock %}
<<<<<<< HEAD
", "club/pending_members.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\club\\pending_members.html.twig");
=======
", "club/pending_members.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\pending_members.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
