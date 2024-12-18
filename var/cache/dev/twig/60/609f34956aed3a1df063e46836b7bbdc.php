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

/* application/club_applications.html.twig */
class __TwigTemplate_0c8c1e653aba6ff2fb8a97ea7aa58373 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/club_applications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/club_applications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "application/club_applications.html.twig", 1);
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

        yield "Applications for ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <h1>Applications for ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    ";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px;\">
            <thead>
                <tr>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Applicant Name</th>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Status</th>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Role</th>


                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 22
                yield "                    <tr>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["application"], "candidat", [], "any", false, false, false, 23), "prenom", [], "any", false, false, false, 23), "html", null, true);
                yield "</td>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">
                            ";
                // line 26
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 26) == "PENDING")) {
                    // line 27
                    yield "                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_accept_application", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "applicationId" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    yield "\" method=\"POST\" style=\"display: inline;\">
                                    <select name=\"role\" style=\"padding: 5px;\">
                                        ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 29, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 30
                        yield "                                            <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["role"]), "html", null, true);
                        yield "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    yield "                                    </select>
                                    </td>
                                      <td style=\"border: 1px solid #ddd; padding: 8px;\">
                                    <button type=\"submit\" style=\"background-color: #4CAF50; color: white; border: none; padding: 5px 10px; cursor: pointer;\">
                                        Accept
                                    </button>
                                </form>
                                <form action=\"";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_reject_application", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "applicationId" => CoreExtension::getAttribute($this->env, $this->source, $context["application"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    yield "\" method=\"POST\" style=\"display: inline;\">
                                    <button type=\"submit\" style=\"background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;\">
                                        Reject
                                    </button>
                                </form>
                            ";
                } else {
                    // line 45
                    yield "                                <span style=\"color: #555;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["application"], "status", [], "any", false, false, false, 45), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 47
                yield "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['application'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 53
            yield "        <p style=\"margin-top: 20px; font-size: 16px; color: #555;\">No applications yet.</p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/club_applications.html.twig";
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
        return array (  201 => 53,  196 => 50,  188 => 47,  182 => 45,  173 => 39,  164 => 32,  153 => 30,  149 => 29,  143 => 27,  141 => 26,  136 => 24,  130 => 23,  127 => 22,  123 => 21,  109 => 9,  107 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Applications for {{ club.nom }}{% endblock %}

{% block body %}
    <h1>Applications for {{ club.nom }}</h1>

    {% if applications is not empty %}
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px;\">
            <thead>
                <tr>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Applicant Name</th>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Status</th>
                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Role</th>


                    <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Action</th>
                </tr>
            </thead>
            <tbody>
                {% for application in applications %}
                    <tr>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">{{ application.candidat.nom }} {{ application.candidat.prenom }}</td>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">{{ application.status }}</td>
                        <td style=\"border: 1px solid #ddd; padding: 8px;\">
                            {% if application.status == 'PENDING' %}
                                <form action=\"{{ path('club_accept_application', {'id': club.id, 'applicationId': application.id}) }}\" method=\"POST\" style=\"display: inline;\">
                                    <select name=\"role\" style=\"padding: 5px;\">
                                        {% for role in roles %}
                                            <option value=\"{{ role }}\">{{ role|capitalize }}</option>
                                        {% endfor %}
                                    </select>
                                    </td>
                                      <td style=\"border: 1px solid #ddd; padding: 8px;\">
                                    <button type=\"submit\" style=\"background-color: #4CAF50; color: white; border: none; padding: 5px 10px; cursor: pointer;\">
                                        Accept
                                    </button>
                                </form>
                                <form action=\"{{ path('club_reject_application', {'id': club.id, 'applicationId': application.id}) }}\" method=\"POST\" style=\"display: inline;\">
                                    <button type=\"submit\" style=\"background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;\">
                                        Reject
                                    </button>
                                </form>
                            {% else %}
                                <span style=\"color: #555;\">{{ application.status }}</span>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p style=\"margin-top: 20px; font-size: 16px; color: #555;\">No applications yet.</p>
    {% endif %}
{% endblock %}
", "application/club_applications.html.twig", "C:\\Users\\ghass\\Desktop\\Eduplus1\\EduPlus\\templates\\application\\club_applications.html.twig");
    }
}
