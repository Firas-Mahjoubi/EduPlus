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

/* g_ressources/demande_ressource_decision.html.twig */
class __TwigTemplate_442a173bb60070f3a215505e7760a12a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/demande_ressource_decision.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "g_ressources/demande_ressource_decision.html.twig"));

        // line 2
        yield "
<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .header {
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px;
                text-align: center;
                border-radius: 8px 8px 0 0;
            }
            .footer {
                text-align: center;
                font-size: 12px;
                color: #777;
                margin-top: 20px;
            }
            .message {
                margin: 20px 0;
            }
            .highlight {
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"header\">
                <h1>Décision sur votre demande de ressource</h1>
            </div>

            <div class=\"message\">
                <p>Bonjour,</p>
                <p>Nous vous informons que votre demande de ressource a été traitée. Voici la décision :</p>

                <p><span class=\"highlight\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</span></p>

                <p>Voici les détails de votre demande :</p>

                <ul>
                    <li><strong>ID de la demande :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "</li>
                    <li><strong>Nom de la ressource :</strong> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 59, $this->source); })()), "ressource", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        yield "</li>
                    <li><strong>Statut de la demande :</strong> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 60, $this->source); })()), "statutDemande", [], "any", false, false, false, 60), "html", null, true);
        yield "</li>
                    <li><strong>Commentaire :</strong> ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 61, $this->source); })()), "commentaire", [], "any", false, false, false, 61), "html", null, true);
        yield "</li>
                </ul>

                <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>

                <p>Cordialement,</p>
                <p>L'équipe de gestion des ressources</p>
            </div>

            <div class=\"footer\">
                <p>Ce message a été envoyé automatiquement. Veuillez ne pas répondre à cet e-mail.</p>
            </div>
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
        return "g_ressources/demande_ressource_decision.html.twig";
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
        return array (  121 => 61,  117 => 60,  113 => 59,  109 => 58,  101 => 53,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/demande_ressource_decision.html.twig #}

<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .header {
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px;
                text-align: center;
                border-radius: 8px 8px 0 0;
            }
            .footer {
                text-align: center;
                font-size: 12px;
                color: #777;
                margin-top: 20px;
            }
            .message {
                margin: 20px 0;
            }
            .highlight {
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"header\">
                <h1>Décision sur votre demande de ressource</h1>
            </div>

            <div class=\"message\">
                <p>Bonjour,</p>
                <p>Nous vous informons que votre demande de ressource a été traitée. Voici la décision :</p>

                <p><span class=\"highlight\">{{ message }}</span></p>

                <p>Voici les détails de votre demande :</p>

                <ul>
                    <li><strong>ID de la demande :</strong> {{ demande.id }}</li>
                    <li><strong>Nom de la ressource :</strong> {{ demande.ressource.nom }}</li>
                    <li><strong>Statut de la demande :</strong> {{ demande.statutDemande }}</li>
                    <li><strong>Commentaire :</strong> {{ demande.commentaire }}</li>
                </ul>

                <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>

                <p>Cordialement,</p>
                <p>L'équipe de gestion des ressources</p>
            </div>

            <div class=\"footer\">
                <p>Ce message a été envoyé automatiquement. Veuillez ne pas répondre à cet e-mail.</p>
            </div>
        </div>
    </body>
</html>
", "g_ressources/demande_ressource_decision.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\g_ressources\\demande_ressource_decision.html.twig");
    }
}
