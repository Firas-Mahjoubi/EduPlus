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

/* g_events/list.html.twig */
class __TwigTemplate_478aba09c9f81ff9c31245ce44b4bfb0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/list.html.twig"));

        // line 1
        yield "<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
                <h5 class=\"fw-bold text-primary text-uppercase\">Upcoming Events</h5>
                <h1 class=\"mb-0\">Don’t Miss Our Upcoming Events</h1>
            </div>
            <div id=\"upcoming-events\" class=\"row g-5\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 8, $this->source); })()));
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
            // line 9
            yield "                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9) * 0.3), "html", null, true);
            yield "s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <img class=\"img-fluid\" src=\"";
            // line 12
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 12)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 12))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 13), "nom", [], "any", false, false, false, 13), "html", null, true);
            yield "</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 19), "html", null, true);
            yield "
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 23), "html", null, true);
            yield "
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 26), "html", null, true);
            yield "</h4>
                                <p>Description: ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 27), 0, 100), "html", null, true);
            yield "...</p>
                                ";
            // line 28
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 28))) {
                // line 29
                yield "                                    <span class=\"badge bg-success\">Participating</span>
                                    <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_cancel_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\">Cancel Participation</a>
                                ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["event"], "participants", [], "any", false, false, false, 31)) < CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 31))) {
                // line 32
                yield "                                    <a class=\"btn btn-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_participate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\">Participate</a>
                                ";
            } else {
                // line 34
                yield "                                    <span class=\"badge bg-danger\">Event Full</span>
                                ";
            }
            // line 36
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
            // line 40
            yield "                    <p class=\"text-center text-muted\">No upcoming events available at the moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestEvents"]) || array_key_exists("latestEvents", $context) ? $context["latestEvents"] : (function () { throw new RuntimeError('Variable "latestEvents" does not exist.', 55, $this->source); })()));
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
            // line 56
            yield "                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 56) * 0.3), "html", null, true);
            yield "s\">
                        <div class=\"event-item bg-light rounded overflow-hidden\">
                            <div class=\"event-img position-relative overflow-hidden\">
                                <img class=\"img-fluid\" src=\"";
            // line 59
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 59)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 59))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-event.jpg"), "html", null, true)));
            yield "\" alt=\"Event Image\">
                                <a class=\"position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4\" href=\"#\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "club", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield "</a>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"d-flex mb-3\">
                                    <small class=\"me-3\">
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        Start: ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatedebut", [], "any", false, false, false, 66), "html", null, true);
            yield "
                                    </small>
                                    <small>
                                        <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                        End: ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "formattedDatefin", [], "any", false, false, false, 70), "html", null, true);
            yield "
                                    </small>
                                </div>
                                <h4 class=\"mb-3\">Title: ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 73), "html", null, true);
            yield "</h4>
                                <p>Description: ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 74), 0, 100), "html", null, true);
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
            // line 80
            yield "                    <p class=\"text-center text-muted\">No latest events available at the moment.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "            </div>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "g_events/list.html.twig";
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
        return array (  256 => 82,  249 => 80,  230 => 74,  226 => 73,  220 => 70,  213 => 66,  204 => 60,  200 => 59,  193 => 56,  175 => 55,  160 => 42,  153 => 40,  137 => 36,  133 => 34,  127 => 32,  125 => 31,  121 => 30,  118 => 29,  116 => 28,  112 => 27,  108 => 26,  102 => 23,  95 => 19,  86 => 13,  82 => 12,  75 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
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
                                <img class=\"img-fluid\" src=\"{{ event.image ? asset('uploads/events/' ~ event.image) : asset('img/default-event.jpg') }}\" alt=\"Event Image\">
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
                                <img class=\"img-fluid\" src=\"{{ event.image ? asset('uploads/events/' ~ event.image) : asset('img/default-event.jpg') }}\" alt=\"Event Image\">
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
<<<<<<< HEAD
    </div>", "g_events/list.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\g_events\\list.html.twig");
=======
    </div>", "g_events/list.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_events\\list.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
