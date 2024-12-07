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
class __TwigTemplate_3094b30ace2c20b2038cf456f1f99abe extends Template
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
<!-- Upcoming Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
            <h1 class=\"mb-0\">Don’t Miss Our Upcoming Events</h1>
        </div>
        <div class=\"row g-5\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 15, $this->source); })()));
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
            // line 16
            yield "                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16) * 0.3), "html", null, true);
            yield "s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 19
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 19))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 28), "html", null, true);
            yield "
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 32), "html", null, true);
            yield "
                                </small>
                            </div>
                            <h4 class=\"mb-3\">Title: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</h4>
                            <p>Description: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 36), 0, 100), "html", null, true);
            yield "...</p>

                            ";
            // line 38
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 38))) {
                // line 39
                yield "                                <span class=\"badge bg-success\">Participating</span>
                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\">Cancel Participation</a>
                            ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 41
$context["event"], "participants", [], "any", false, false, false, 41)) < CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 41))) {
                // line 42
                yield "                                <a class=\"btn btn-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\">Participate</a>
                            ";
            } else {
                // line 44
                yield "                                <span class=\"badge bg-danger\">Event Full</span>
                            ";
            }
            // line 46
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
            // line 50
            yield "                <p class=\"text-center text-muted\">No upcoming events available at the moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
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
        <div class=\"row g-5\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestEvents"]) || array_key_exists("latestEvents", $context) ? $context["latestEvents"] : (function () { throw new RuntimeError('Variable "latestEvents" does not exist.', 65, $this->source); })()));
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
            // line 66
            yield "                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 66) * 0.3), "html", null, true);
            yield "s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 69)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 69))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
            yield "
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 78), "html", null, true);
            yield "
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                </small>
                            </div>
                            <h4 class=\"mb-3\">Title: ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 85), "html", null, true);
            yield "</h4>
                            <p>Description: ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 86), 0, 100), "html", null, true);
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
            // line 92
            yield "                <p class=\"text-center text-muted\">No latest events available at the moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "        </div>
    </div>
</div>
<!-- Latest Events Section End -->

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
        return array (  315 => 94,  308 => 92,  289 => 86,  285 => 85,  279 => 82,  272 => 78,  262 => 71,  257 => 69,  250 => 66,  232 => 65,  217 => 52,  210 => 50,  194 => 46,  190 => 44,  184 => 42,  182 => 41,  178 => 40,  175 => 39,  173 => 38,  168 => 36,  164 => 35,  158 => 32,  151 => 28,  141 => 21,  136 => 19,  129 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Events List{% endblock %}

{% block body %}
    
<!-- Upcoming Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
            <h1 class=\"mb-0\">Don’t Miss Our Upcoming Events</h1>
        </div>
        <div class=\"row g-5\">
            {% for event in upcomingEvents %}
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
        <div class=\"row g-5\">
            {% for event in latestEvents %}
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

{% endblock %}
", "g_events/index.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\index.html.twig");
    }
}
