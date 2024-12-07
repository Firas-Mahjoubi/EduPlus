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

/* admin/dashboard.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/bf/bfff83bb28fa99e2d8af6cadbe46b11c.php
class __TwigTemplate_4e899438e1088d7cf5da70b290ae76b7 extends Template
========
class __TwigTemplate_d7b0332f26204bf0928492b7eba68bfc extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/fb/fbcd3a5ca0a1da3752771f099fdc389f.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Admin Dashboard";
        
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
        <h1 class=\"mb-4\">User Dashboard</h1>

        <!-- Table to display users -->
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Profile Picture</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["user"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            yield "                    <tr>
                        <td>
                            <img src=\"";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 24))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"), "html", null, true)));
            yield "\" 
                                 alt=\"Profile Picture\" 
                                 class=\"rounded-circle\" 
                                 width=\"40\" 
                                 height=\"40\">
                        </td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 30), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <a href=\"\" class=\"btn btn-danger btn-sm\">Delete</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center\">No users found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "admin/dashboard.html.twig";
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
        return array (  162 => 42,  153 => 38,  141 => 31,  135 => 30,  126 => 24,  122 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">User Dashboard</h1>

        <!-- Table to display users -->
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Profile Picture</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in user %}
                    <tr>
                        <td>
                            <img src=\"{{ user.profilePicture ? asset('uploads/profilePictures/' ~ user.profilePicture) : asset('uploads/profilePictures/default.png') }}\" 
                                 alt=\"Profile Picture\" 
                                 class=\"rounded-circle\" 
                                 width=\"40\" 
                                 height=\"40\">
                        </td>
                        <td>{{ user.prenom }} {{ user.nom }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <a href=\"\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <a href=\"\" class=\"btn btn-danger btn-sm\">Delete</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\">No users found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\admin\\dashboard.html.twig");
    }
}
