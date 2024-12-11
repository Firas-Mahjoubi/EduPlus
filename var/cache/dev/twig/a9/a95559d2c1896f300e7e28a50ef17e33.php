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

/* emails/event_pdf.html.twig */
class __TwigTemplate_c9a28f3fc6e930a86c625c2ad2c7a96d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/event_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/event_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " Details</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            padding: 20px;
        }
        .event-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .event-image {
            width: 100%;
            height: auto;
            margin-top: 20px;
        }
        .event-details {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Club Logo -->
    ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "club", [], "any", false, false, false, 29), "logo", [], "any", false, false, false, 29)) {
            // line 30
            yield "        <div class=\"text-center\">
            <img src=\"http://127.0.0.1:8000/uploads/logos/";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "club", [], "any", false, false, false, 31), "logo", [], "any", false, false, false, 31), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "club", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "\" class=\"img-fluid\" style=\"max-width: 150px;\">
        </div>
    ";
        }
        // line 34
        yield "
    <!-- Event Header -->
    <div class=\"event-header\">
        <h1>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), "html", null, true);
        yield "</h1>
        <p><strong>Date:</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "datedebut", [], "any", false, false, false, 38), "d M Y"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "datefin", [], "any", false, false, false, 38), "d M Y"), "html", null, true);
        yield "</p>
    </div>

    <!-- Event Description -->
    <div class=\"event-details\">
        <p><strong>Description:</strong></p>
        <p>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
    </div>

    <!-- Event Image -->
    <div class=\"event-image text-center\">
        <img src=\"";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49)) {
            yield "http://127.0.0.1:8000/uploads/events/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), "html", null, true);
        } else {
            yield "http://127.0.0.1:8000/img/default-event.jpg";
        }
        yield "\" 
             alt=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "titre", [], "any", false, false, false, 50), "html", null, true);
        yield "\" class=\"img-fluid\" style=\"max-width: 500px;\">
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/event_pdf.html.twig";
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
        return array (  131 => 50,  122 => 49,  114 => 44,  103 => 38,  99 => 37,  94 => 34,  86 => 31,  83 => 30,  81 => 29,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ event.titre }} Details</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            padding: 20px;
        }
        .event-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .event-image {
            width: 100%;
            height: auto;
            margin-top: 20px;
        }
        .event-details {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Club Logo -->
    {% if event.club.logo %}
        <div class=\"text-center\">
            <img src=\"http://127.0.0.1:8000/uploads/logos/{{ event.club.logo }}\" alt=\"{{ event.club.nom }}\" class=\"img-fluid\" style=\"max-width: 150px;\">
        </div>
    {% endif %}

    <!-- Event Header -->
    <div class=\"event-header\">
        <h1>{{ event.titre }}</h1>
        <p><strong>Date:</strong> {{ event.datedebut|date('d M Y') }} - {{ event.datefin|date('d M Y') }}</p>
    </div>

    <!-- Event Description -->
    <div class=\"event-details\">
        <p><strong>Description:</strong></p>
        <p>{{ event.description }}</p>
    </div>

    <!-- Event Image -->
    <div class=\"event-image text-center\">
        <img src=\"{% if event.image %}http://127.0.0.1:8000/uploads/events/{{ event.image }}{% else %}http://127.0.0.1:8000/img/default-event.jpg{% endif %}\" 
             alt=\"{{ event.titre }}\" class=\"img-fluid\" style=\"max-width: 500px;\">
    </div>
</body>
</html>
", "emails/event_pdf.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\emails\\event_pdf.html.twig");
    }
}
