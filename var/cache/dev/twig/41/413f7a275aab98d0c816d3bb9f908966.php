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

/* g_events/show.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/41/413f7a275aab98d0c816d3bb9f908966.php
class __TwigTemplate_a71dbb5786179eb9d3d0e75945969d1a extends Template
========
class __TwigTemplate_09483a4a5a48554d1bf0f627419df119 extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/a0/a019326d4378f483f2fe18a8f46ef5a0.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/show.html.twig"));

        $this->parent = $this->loadTemplate("base_backoffice.html.twig", "g_events/show.html.twig", 1);
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

        yield "Event Details";
        
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
        yield "  <!-- Upcoming Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
        </div>
        <div class=\"row g-5\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 13, $this->source); })()));
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
            // line 14
            yield "                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14) * 0.3), "html", null, true);
            yield "s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 17
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 17)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 17))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
            yield "
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 26), "html", null, true);
            yield "
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 30), "html", null, true);
            yield "
                                </small>
                            </div>
                            <h4 class=\"mb-3\">Title: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "</h4>
                            <p>Description: ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 34), 0, 100), "html", null, true);
            yield "...</p>
                            ";
            // line 35
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 35))) {
                // line 36
                yield "                                <span class=\"badge bg-success\">Participating</span>
                            ";
            } else {
                // line 38
                yield "                                <a class=\"btn btn-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\">Participate</a>
                            ";
            }
            // line 40
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
            // line 44
            yield "                <p class=\"text-center text-muted\">No upcoming events available at the moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </div>
    </div>
</div>
<!-- Upcoming Events Section End -->

<!-- Latest Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Latest Events</h5>
        </div>
        <div class=\"row g-5\">
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestEvents"]) || array_key_exists("latestEvents", $context) ? $context["latestEvents"] : (function () { throw new RuntimeError('Variable "latestEvents" does not exist.', 58, $this->source); })()));
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
            // line 59
            yield "                <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59) * 0.3), "html", null, true);
            yield "s\">
                    <div class=\"event-item bg-light rounded overflow-hidden\">
                        <div class=\"event-img position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
            // line 62
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 62))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                            <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">
                                ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            yield "
                            </a>
                        </div>
                        <div class=\"p-4\">
                            <div class=\"d-flex mb-3\">
                                <small class=\"me-3\">
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    Start: ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 71), "html", null, true);
            yield "
                                </small>
                                <small>
                                    <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                    End: ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 75), "html", null, true);
            yield "
                                </small>
                            </div>
                            <h4 class=\"mb-3\">Title: ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "</h4>
                            <p>Description: ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 79), 0, 100), "html", null, true);
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
            // line 85
            yield "                <p class=\"text-center text-muted\">No latest events available at the moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return "g_events/show.html.twig";
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
        return array (  302 => 87,  295 => 85,  276 => 79,  272 => 78,  266 => 75,  259 => 71,  249 => 64,  244 => 62,  237 => 59,  219 => 58,  205 => 46,  198 => 44,  182 => 40,  176 => 38,  172 => 36,  170 => 35,  166 => 34,  162 => 33,  156 => 30,  149 => 26,  139 => 19,  134 => 17,  127 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_backoffice.html.twig' %}

{% block title %}Event Details{% endblock %}

{% block body %}
  <!-- Upcoming Events Section Start -->
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
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
                            {% else %}
                                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_event_participate', { id: event.id }) }}\">Participate</a>
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
", "g_events/show.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\show.html.twig");
    }
}
