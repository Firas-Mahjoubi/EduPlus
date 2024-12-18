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

/* g_events/discussion.html.twig */
class __TwigTemplate_eb0d4d3b93b05fa8a27f783ca09c25a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/discussion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_events/discussion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "g_events/discussion.html.twig", 1);
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

        yield "Event Discussion";
        
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
        yield "<main class=\"content\">
    <div class=\"container p-0\">
        <h1 class=\"h3 mb-3\">Messages</h1>

        <div class=\"card\">
            <div class=\"row g-0\">
                <div class=\"col-12 col-lg-7 col-xl-9\">
                    <!-- Chat Header -->
                    <div class=\"py-3 px-4 border-bottom bg-light\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"pl-3 flex-grow-1\">
                                <strong>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class=\"chat-messages p-4\" style=\"max-height: 500px; overflow-y: auto;\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "messages", [], "any", false, false, false, 24));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "                        <div class=\"chat-message";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25))) {
                yield "-right";
            } else {
                yield "-left";
            }
            yield " pb-4\">
                            <div>
                                <img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 27), "profilePicture", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
                                <div class=\"text-muted small text-nowrap mt-2\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 28), "H:i"), "html", null, true);
            yield "</div>
                            </div>
                            <div class=\"bg-light rounded py-2 px-3 ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30))) {
                yield "mr-3";
            } else {
                yield "ml-3";
            }
            yield " flex-shrink-1\">
                                <div class=\"font-weight-bold mb-1\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "</div>
                                <p>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                        <div class=\"text-center text-muted\">No messages yet. Be the first to post!</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                    </div>

                    <!-- Message Input -->
                    <div class=\"flex-grow-0 py-3 px-4 border-top\">
                        <div class=\"input-group\">
                            <form method=\"post\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_post_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"w-100\">
                                <input type=\"text\" class=\"form-control\" name=\"message\" placeholder=\"Type your message\" required>
                                <button class=\"btn btn-primary\" type=\"submit\">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .chat-online {
        color: #34ce57;
    }

    .chat-offline {
        color: #e4606d;
    }

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 500px;
        overflow-y: scroll;
    }

    .chat-message-left, .chat-message-right {
        display: flex;
        flex-shrink: 0;
    }

    .chat-message-left {
        margin-right: auto;
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto;
    }

    .chat-message-left .bg-light, .chat-message-right .bg-light {
        border-radius: 8px;
        max-width: 80%;
    }

    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }

    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }

    .flex-grow-0 {
        flex-grow: 0!important;
    }

    .border-top {
        border-top: 1px solid #dee2e6!important;
    }

    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .input-group {
        width: 100%;
    }

    .input-group input {
        border-radius: 20px 0 0 20px;
    }

    .input-group button {
        border-radius: 0 20px 20px 0;
    }

    .bg-light {
        background-color: #f8f9fa!important;
    }

    .border-bottom {
        border-bottom: 1px solid #e0e0e0;
    }

    .font-weight-bold {
        font-weight: 600;
    }

    .text-muted {
        color: #6c757d!important;
    }
</style>
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
        return "g_events/discussion.html.twig";
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
        return array (  184 => 43,  177 => 38,  170 => 36,  161 => 32,  157 => 31,  149 => 30,  144 => 28,  138 => 27,  128 => 25,  123 => 24,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event Discussion{% endblock %}

{% block body %}
<main class=\"content\">
    <div class=\"container p-0\">
        <h1 class=\"h3 mb-3\">Messages</h1>

        <div class=\"card\">
            <div class=\"row g-0\">
                <div class=\"col-12 col-lg-7 col-xl-9\">
                    <!-- Chat Header -->
                    <div class=\"py-3 px-4 border-bottom bg-light\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"pl-3 flex-grow-1\">
                                <strong>{{ event.titre }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class=\"chat-messages p-4\" style=\"max-height: 500px; overflow-y: auto;\">
                        {% for message in event.messages %}
                        <div class=\"chat-message{% if message.user.id == app.user.id %}-right{% else %}-left{% endif %} pb-4\">
                            <div>
                                <img src=\"{{ asset('uploads/profilePictures/' ~ message.user.profilePicture) }}\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"{{ message.user.nom }}\">
                                <div class=\"text-muted small text-nowrap mt-2\">{{ message.createdAt|date(\"H:i\") }}</div>
                            </div>
                            <div class=\"bg-light rounded py-2 px-3 {% if message.user.id == app.user.id %}mr-3{% else %}ml-3{% endif %} flex-shrink-1\">
                                <div class=\"font-weight-bold mb-1\">{{ message.user.nom }}</div>
                                <p>{{ message.content }}</p>
                            </div>
                        </div>
                        {% else %}
                        <div class=\"text-center text-muted\">No messages yet. Be the first to post!</div>
                        {% endfor %}
                    </div>

                    <!-- Message Input -->
                    <div class=\"flex-grow-0 py-3 px-4 border-top\">
                        <div class=\"input-group\">
                            <form method=\"post\" action=\"{{ path('event_post_message', { id: event.id }) }}\" class=\"w-100\">
                                <input type=\"text\" class=\"form-control\" name=\"message\" placeholder=\"Type your message\" required>
                                <button class=\"btn btn-primary\" type=\"submit\">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .chat-online {
        color: #34ce57;
    }

    .chat-offline {
        color: #e4606d;
    }

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 500px;
        overflow-y: scroll;
    }

    .chat-message-left, .chat-message-right {
        display: flex;
        flex-shrink: 0;
    }

    .chat-message-left {
        margin-right: auto;
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto;
    }

    .chat-message-left .bg-light, .chat-message-right .bg-light {
        border-radius: 8px;
        max-width: 80%;
    }

    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }

    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }

    .flex-grow-0 {
        flex-grow: 0!important;
    }

    .border-top {
        border-top: 1px solid #dee2e6!important;
    }

    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .input-group {
        width: 100%;
    }

    .input-group input {
        border-radius: 20px 0 0 20px;
    }

    .input-group button {
        border-radius: 0 20px 20px 0;
    }

    .bg-light {
        background-color: #f8f9fa!important;
    }

    .border-bottom {
        border-bottom: 1px solid #e0e0e0;
    }

    .font-weight-bold {
        font-weight: 600;
    }

    .text-muted {
        color: #6c757d!important;
    }
</style>
{% endblock %}
", "g_events/discussion.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\g_events\\discussion.html.twig");
    }
}
