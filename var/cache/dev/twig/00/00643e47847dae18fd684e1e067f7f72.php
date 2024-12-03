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

/* g_events/index.html.twig */
class __TwigTemplate_c1422b86adb4703ffd1a3a5b0a8d6fca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_events/index.html.twig", 1);
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

        yield "Events List";
        
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
    <div class=\"container mt-5\">
        <h1>Events</h1>

        ";
        // line 11
        yield "
       


     <!-- Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
            <h1 class=\"mb-0\">Participate in Our Latest Events</h1>
        </div>
        <div class=\"row g-5\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()));
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
            // line 24
            yield "                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 24) * 0.3), "html", null, true);
            yield "s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 27)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 27)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"))), "html", null, true);
            yield "\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            yield "
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "datedebut", [], "any", false, false, false, 36), "d M Y H:i"), "html", null, true);
            yield "
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "datefin", [], "any", false, false, false, 40), "d M Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                            <h4 class=\"mb-3\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 43), "html", null, true);
            yield "</h4>
                            <p>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 44), 0, 100), "html", null, true);
            yield "...</p>
                            ";
            // line 45
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 45))) {
                // line 46
                yield "                                <span class=\"badge bg-success\">Participating</span>
                            ";
            } else {
                // line 48
                yield "                                <a class=\"btn btn-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\">Participate</a>
                            ";
            }
            // line 50
            yield "                        </div>
                    </div>
                </div>
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
            // line 54
            yield "                <p class=\"text-center text-muted\">No events available at the moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </div>
    </div>
</div>
<!-- Events Section End -->


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
        return "g_events/index.html.twig";
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
        return array (  216 => 56,  209 => 54,  193 => 50,  187 => 48,  183 => 46,  181 => 45,  177 => 44,  173 => 43,  167 => 40,  160 => 36,  150 => 29,  145 => 27,  138 => 24,  120 => 23,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Events List{% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <h1>Events</h1>

        {# <a href=\"{{ path('app_g_events_add') }}\" class=\"btn btn-primary mb-3\">Add New Event</a> #}

       


     <!-- Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
            <h1 class=\"mb-0\">Participate in Our Latest Events</h1>
        </div>
        <div class=\"row g-5\">
            {% for event in events %}
                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"{{ loop.index0 * 0.3 }}s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ event.image ? asset('uploads/events/' ~ event.image) : asset('img/default-event.jpg') }}\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                {{ event.club.nom }}
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: {{ event.datedebut|date('d M Y H:i') }}
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: {{ event.datefin|date('d M Y H:i') }}
                                </small>
                            </div>
                            <h4 class=\"mb-3\">{{ event.titre }}</h4>
                            <p>{{ event.description|slice(0, 100) }}...</p>
                            {% if app.user in event.participants %}
                                <span class=\"badge bg-success\">Participating</span>
                            {% else %}
                                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_event_participate', { id: event.id }) }}\">Participate</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center text-muted\">No events available at the moment.</p>
            {% endfor %}
        </div>
    </div>
</div>
<!-- Events Section End -->


{% endblock %}
", "g_events/index.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\index.html.twig");
    }
}
