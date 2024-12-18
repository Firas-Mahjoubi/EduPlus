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
class __TwigTemplate_e1232bcbebd0f803ec8f11ddd1c5ed36 extends Template
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
<!-- Search Bar Start -->
<div class=\"container py-3\">
    <form id=\"search-form\" class=\"row g-3\">
        <div class=\"col-md-10\">
            <input type=\"text\" id=\"search-input\" class=\"form-control\" name=\"search\" placeholder=\"Search events by title...\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["search"], "method", false, false, false, 11), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary w-100\">Search</button>
        </div>
    </form>
</div>
<!-- Search Bar End -->

<!-- Results Container Start -->
<div id=\"results-container\">
    <!-- Upcoming Events Section Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
                <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
                <h1 class=\"mb-0\">Don’t Miss Our Upcoming Events</h1>
            </div>
            <div id=\"upcoming-events\" class=\"row g-5\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 30, $this->source); })()));
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
            // line 31
            yield "                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31) * 0.3), "html", null, true);
            yield "s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <!-- Make the image clickable -->
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">
                                    <img class=\"img-fluid\" src=\"";
            // line 36
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 36))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                                </a>
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 44), "html", null, true);
            yield "
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 48), "html", null, true);
            yield "
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 51), "html", null, true);
            yield "</h4>
                                <p>Description: ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 52), 0, 100), "html", null, true);
            yield "...</p>
                                ";
            // line 53
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 53))) {
                // line 54
                yield "                                    <span class=\"badge bg-success\">Participating</span>
                                    <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\">Cancel Participation</a>
                                ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["event"], "participants", [], "any", false, false, false, 56)) < CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 56))) {
                // line 57
                yield "                                    <a class=\"btn btn-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\">Participate</a>
                                ";
            } else {
                // line 59
                yield "                                    <span class=\"badge bg-danger\">Event Full</span>
                                ";
            }
            // line 61
            yield "                            </div>
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
            // line 65
            yield "                    <p class=\"text-center text-muted\">No upcoming events available at the moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "            </div>
        </div>
    </div>
    <!-- Upcoming Events Section End -->

    <!-- Latest Events Section Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
                <h5 class=\"fw-bold text-primary text-uppercase\">Latest Events</h5>
                <h1 class=\"mb-0\">Catch Up with Our Latest Events</h1>
            </div>
            <div id=\"latest-events\" class=\"row g-5\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestEvents"]) || array_key_exists("latestEvents", $context) ? $context["latestEvents"] : (function () { throw new RuntimeError('Variable "latestEvents" does not exist.', 80, $this->source); })()));
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
            // line 81
            yield "                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 81) * 0.3), "html", null, true);
            yield "s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <!-- Make the image clickable -->
                                <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\">
                                    <img class=\"img-fluid\" src=\"";
            // line 86
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 86)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 86))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                                </a>
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 88), "nom", [], "any", false, false, false, 88), "html", null, true);
            yield "</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 94), "html", null, true);
            yield "
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 98), "html", null, true);
            yield "
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 101), "html", null, true);
            yield "</h4>
                                <p>Description: ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 102), 0, 100), "html", null, true);
            yield "...</p>
                                <span class=\"badge rounded-pill text-bg-danger\">Ended</span>
                            </div>
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
            // line 108
            yield "                    <p class=\"text-center text-muted\">No latest events available at the moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "            </div>
        </div>
    </div>
    <!-- Latest Events Section End -->
</div>
<!-- Results Container End -->

<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const searchInput = document.getElementById('search-input').value;

        fetch('";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_list");
        yield "?search=' + encodeURIComponent(searchInput), {
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('results-container').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
    });
</script>

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
        return array (  355 => 123,  340 => 110,  333 => 108,  314 => 102,  310 => 101,  304 => 98,  297 => 94,  288 => 88,  283 => 86,  279 => 85,  271 => 81,  253 => 80,  238 => 67,  231 => 65,  215 => 61,  211 => 59,  205 => 57,  203 => 56,  199 => 55,  196 => 54,  194 => 53,  190 => 52,  186 => 51,  180 => 48,  173 => 44,  164 => 38,  159 => 36,  155 => 35,  147 => 31,  129 => 30,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Events List{% endblock %}

{% block body %}
    
<!-- Search Bar Start -->
<div class=\"container py-3\">
    <form id=\"search-form\" class=\"row g-3\">
        <div class=\"col-md-10\">
            <input type=\"text\" id=\"search-input\" class=\"form-control\" name=\"search\" placeholder=\"Search events by title...\" value=\"{{ app.request.get('search') }}\">
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary w-100\">Search</button>
        </div>
    </form>
</div>
<!-- Search Bar End -->

<!-- Results Container Start -->
<div id=\"results-container\">
    <!-- Upcoming Events Section Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
                <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
                <h1 class=\"mb-0\">Don’t Miss Our Upcoming Events</h1>
            </div>
            <div id=\"upcoming-events\" class=\"row g-5\">
                {% for event in upcomingEvents %}
                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"{{ loop.index0 * 0.3 }}s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <!-- Make the image clickable -->
                                <a href=\"{{ path('event_details', {'id': event.id}) }}\">
                                    <img class=\"img-fluid\" src=\"{{ event.image ? asset('uploads/events/' ~ event.image) : asset('img/default-event.jpg') }}\" alt=\"Event Image\">
                                </a>
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">{{ event.club.nom }}</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: {{ event.formattedDatedebut }}
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: {{ event.formattedDatefin }}
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: {{ event.titre }}</h4>
                                <p>Description: {{ event.description|slice(0, 100) }}...</p>
                                {% if app.user in event.participants %}
                                    <span class=\"badge bg-success\">Participating</span>
                                    <a class=\"btn btn-danger btn-sm\" href=\"{{ path('app_event_cancel_participation', { id: event.id }) }}\">Cancel Participation</a>
                                {% elseif event.participants|length < event.maxParticipants %}
                                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_event_participate', { id: event.id }) }}\">Participate</a>
                                {% else %}
                                    <span class=\"badge bg-danger\">Event Full</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center text-muted\">No upcoming events available at the moment.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Upcoming Events Section End -->

    <!-- Latest Events Section Start -->
    <div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
                <h5 class=\"fw-bold text-primary text-uppercase\">Latest Events</h5>
                <h1 class=\"mb-0\">Catch Up with Our Latest Events</h1>
            </div>
            <div id=\"latest-events\" class=\"row g-5\">
                {% for event in latestEvents %}
                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"{{ loop.index0 * 0.3 }}s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <!-- Make the image clickable -->
                                <a href=\"{{ path('event_details', {'id': event.id}) }}\">
                                    <img class=\"img-fluid\" src=\"{{ event.image ? asset('uploads/events/' ~ event.image) : asset('img/default-event.jpg') }}\" alt=\"Event Image\">
                                </a>
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">{{ event.club.nom }}</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: {{ event.formattedDatedebut }}
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: {{ event.formattedDatefin }}
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: {{ event.titre }}</h4>
                                <p>Description: {{ event.description|slice(0, 100) }}...</p>
                                <span class=\"badge rounded-pill text-bg-danger\">Ended</span>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center text-muted\">No latest events available at the moment.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Latest Events Section End -->
</div>
<!-- Results Container End -->

<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const searchInput = document.getElementById('search-input').value;

        fetch('{{ path('app_event_list') }}?search=' + encodeURIComponent(searchInput), {
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('results-container').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
    });
</script>

{% endblock %}
", "g_events/index.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\index.html.twig");
    }
}
