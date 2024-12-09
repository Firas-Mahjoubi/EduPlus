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
class __TwigTemplate_2052d9cec9d21da109b54d127cfd8943 extends Template
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

        // line 1
        yield "<li class=\"nav-item dropdown\">
    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"notifDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fa fa-bell\"></i>
        <span class=\"notification\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 4, $this->source); })())), "html", null, true);
        yield "</span>
    </a>
    <ul class=\"dropdown-menu notif-box animated fadeIn\" aria-labelledby=\"notifDropdown\">
        <li>
            <div class=\"dropdown-title\">
                You have ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 9, $this->source); })())), "html", null, true);
        yield " new notification";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 9, $this->source); })())) > 1)) {
            yield "s";
        }
        // line 10
        yield "            </div>
        </li>
        <li>
            <div class=\"notif-scroll scrollbar-outer\">
                <div class=\"notif-center\">
                    <!-- Loop through notifications -->
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 17
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mark_notification_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\">
                            <div class=\"notif-icon notif-primary\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                                <span class=\"block\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "content", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
                                <span class=\"time\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 23), "H:i"), "html", null, true);
            yield "</span>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                </div>
            </div>
        </li>
        <li>
            <a class=\"see-all\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                See all notifications
                <i class=\"fa fa-angle-right\"></i>
            </a>
        </li>
    </ul>
</li>
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
        return array (  108 => 31,  102 => 27,  92 => 23,  88 => 22,  79 => 17,  75 => 16,  67 => 10,  61 => 9,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"notifDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fa fa-bell\"></i>
        <span class=\"notification\">{{ notifications|length }}</span>
    </a>
    <ul class=\"dropdown-menu notif-box animated fadeIn\" aria-labelledby=\"notifDropdown\">
        <li>
            <div class=\"dropdown-title\">
                You have {{ notifications|length }} new notification{% if notifications|length > 1 %}s{% endif %}
            </div>
        </li>
        <li>
            <div class=\"notif-scroll scrollbar-outer\">
                <div class=\"notif-center\">
                    <!-- Loop through notifications -->
                    {% for notification in notifications %}
                        <a href=\"{{ path('mark_notification_read', {'id': notification.id}) }}\">
                            <div class=\"notif-icon notif-primary\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                                <span class=\"block\">{{ notification.content }}</span>
                                <span class=\"time\">{{ notification.createdAt|date('H:i') }}</span>
                            </div>
                        </a>
                    {% endfor %}
                </div>
            </div>
        </li>
        <li>
            <a class=\"see-all\" href=\"{{ path('admin_dashboard') }}\">
                See all notifications
                <i class=\"fa fa-angle-right\"></i>
            </a>
        </li>
    </ul>
</li>
", "_notification_dropdown.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\_notification_dropdown.html.twig");
    }
}
