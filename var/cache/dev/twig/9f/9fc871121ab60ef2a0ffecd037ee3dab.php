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

/* g_events/dashboard.html.twig */
class __TwigTemplate_148cad92b8c2b8c92866885a8f16f033 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_events/dashboard.html.twig", 1);
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

        yield "Event Dashboard";
        
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
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Back Office - Event Dashboard</h5>
            <h1 class=\"mb-0\">Manage Events</h1>
        </div>

        <div class=\"d-flex justify-content-between mb-4\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_add");
        yield "\" class=\"btn btn-success\">Create New Event</a>
            <form method=\"get\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_dashboard_backoffice");
        yield "\" class=\"d-flex\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search events...\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "get", ["search"], "method", false, false, false, 15), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-primary ms-2\">Search</button>
            </form>
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Club</th>
                    <th>Participants</th> <!-- Added Participants Column -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 34
            yield "                    <tr>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getNbrParticipants", [], "method", false, false, false, 40), "html", null, true);
            yield " <!-- Displaying the number of participants --></td>
                        <td>
                            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <form action=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this event?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 44))), "html", null, true);
            yield "\">
    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
</form>

                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 51
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">No events found.</td> <!-- Adjusted colspan for new column -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "g_events/dashboard.html.twig";
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
        return array (  221 => 55,  212 => 51,  192 => 44,  188 => 43,  184 => 42,  179 => 40,  175 => 39,  171 => 38,  167 => 37,  163 => 36,  159 => 35,  156 => 34,  138 => 33,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Event Dashboard{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Back Office - Event Dashboard</h5>
            <h1 class=\"mb-0\">Manage Events</h1>
        </div>

        <div class=\"d-flex justify-content-between mb-4\">
            <a href=\"{{ path('app_g_events_add') }}\" class=\"btn btn-success\">Create New Event</a>
            <form method=\"get\" action=\"{{ path('app_event_dashboard_backoffice') }}\" class=\"d-flex\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search events...\" value=\"{{ app.request.get('search') }}\">
                <button type=\"submit\" class=\"btn btn-primary ms-2\">Search</button>
            </form>
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Club</th>
                    <th>Participants</th> <!-- Added Participants Column -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for event in events %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ event.titre }}</td>
                        <td>{{ event.formattedDatedebut }}</td>
                        <td>{{ event.formattedDatefin }}</td>
                        <td>{{ event.club.nom }}</td>
                        <td>{{ event.getNbrParticipants() }} <!-- Displaying the number of participants --></td>
                        <td>
                            <a href=\"{{ path('app_g_events_update', { id: event.id }) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <form action=\"{{ path('app_g_events_delete', { id: event.id }) }}\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this event?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
</form>

                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">No events found.</td> <!-- Adjusted colspan for new column -->
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
<<<<<<< HEAD
", "g_events/dashboard.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\dashboard.html.twig");
=======
", "g_events/dashboard.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_events\\dashboard.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
