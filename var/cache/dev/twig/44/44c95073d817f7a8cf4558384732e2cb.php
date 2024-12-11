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

/* club/adminclub.html.twig */
class __TwigTemplate_42ac8c7a40b37c4f806961619cecc339 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/adminclub.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/adminclub.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/adminclub.html.twig", 1);
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

        yield "Clubs List";
        
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
        yield "        <h1>Clubs List</h1>

        <!-- Search Form -->
        <div class=\"mb-3\">
            <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_list");
        yield "\" method=\"get\" class=\"form-inline\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Search by club name\">
                <button type=\"submit\" class=\"btn btn-primary ml-2\">Search</button>
            </form>
        </div>

        <div>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_new");
        yield "\" class=\"btn btn-primary\">Add New Club</a>
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 31
            yield "                    <tr>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">View</a>
                            <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <form action=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this club?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 39))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "                    <tr>
                        <td colspan=\"4\">No clubs found.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['club'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </tbody>
        </table>

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
        return "club/adminclub.html.twig";
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
        return array (  188 => 49,  179 => 45,  168 => 39,  164 => 38,  160 => 37,  156 => 36,  151 => 34,  147 => 33,  143 => 32,  140 => 31,  135 => 30,  119 => 17,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {% extends 'base.html.twig' %}

    {% block title %}Clubs List{% endblock %}

    {% block body %}
        <h1>Clubs List</h1>

        <!-- Search Form -->
        <div class=\"mb-3\">
            <form action=\"{{ path('club_list') }}\" method=\"get\" class=\"form-inline\">
                <input type=\"text\" name=\"search\" value=\"{{ searchTerm }}\" class=\"form-control\" placeholder=\"Search by club name\">
                <button type=\"submit\" class=\"btn btn-primary ml-2\">Search</button>
            </form>
        </div>

        <div>
            <a href=\"{{ path('club_new') }}\" class=\"btn btn-primary\">Add New Club</a>
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for club in clubs %}
                    <tr>
                        <td>{{ club.id }}</td>
                        <td>{{ club.nom }}</td>
                        <td>{{ club.description }}</td>
                        <td>
                            <a href=\"{{ path('club_show', { id: club.id }) }}\" class=\"btn btn-info btn-sm\">View</a>
                            <a href=\"{{ path('club_edit', { id: club.id }) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <form action=\"{{ path('club_delete', { id: club.id }) }}\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this club?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ club.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">No clubs found.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

    {% endblock %}
", "club/adminclub.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\club\\adminclub.html.twig");
    }
}
