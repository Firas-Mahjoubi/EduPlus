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

/* _notification_dropdown.html.twig */
class __TwigTemplate_b9393a38dd335f9af4babceb314e06f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_notification_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_notification_dropdown.html.twig"));

        // line 2
        yield "<ul class=\"dropdown-menu notif-box animated fadeIn\">
    <li>
        <div class=\"dropdown-title\">
            You have <span id=\"notif-count\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 5, $this->source); })())), "html", null, true);
        yield "</span> new notifications
        </div>
    </li>
    <li>
        <div class=\"notif-scroll scrollbar-outer\">
            <div class=\"notif-center\" id=\"notif-list\">
                ";
        // line 12
        yield "            </div>
        </div>
    </li>
    <li>
        <a class=\"see-all\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">See all notifications<i class=\"fa fa-angle-right\"></i></a>
    </li>
</ul>
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
        return "_notification_dropdown.html.twig";
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
        return array (  68 => 16,  62 => 12,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/backOffice/_notification_dropdown.html.twig #}
<ul class=\"dropdown-menu notif-box animated fadeIn\">
    <li>
        <div class=\"dropdown-title\">
            You have <span id=\"notif-count\">{{ notifications|length }}</span> new notifications
        </div>
    </li>
    <li>
        <div class=\"notif-scroll scrollbar-outer\">
            <div class=\"notif-center\" id=\"notif-list\">
                {# Placeholder for notifications, will be updated by JavaScript #}
            </div>
        </div>
    </li>
    <li>
        <a class=\"see-all\" href=\"{{ path('app_dashboard') }}\">See all notifications<i class=\"fa fa-angle-right\"></i></a>
    </li>
</ul>
", "_notification_dropdown.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\_notification_dropdown.html.twig");
    }
}
