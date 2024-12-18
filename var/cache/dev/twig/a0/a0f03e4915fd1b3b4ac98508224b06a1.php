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

/* club/details.html.twig */
class __TwigTemplate_2cf82f88fe573dec4cc1e1199fa35cf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container mt-5\">
    <!-- Flash Messages -->
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 7
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                yield "            <div class=\"alert alert-";
                yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    <!-- Club Card -->
    <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
        <div class=\"card-header bg-primary text-white text-center py-4\">
            <h2 class=\"fw-bold mb-0\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"card-body\">
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-lg-6 text-center\">
                    <img 
                        src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 25, $this->source); })()), "logo", [], "any", false, false, false, 25))), "html", null, true);
        yield "\" 
                        alt=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        yield "\" 
                        class=\"img-fluid rounded shadow-sm border border-secondary\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>

                    <form method=\"POST\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_submit_club", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-gradient btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2\">
                            <i class=\"fas fa-user-plus\"></i> Apply for this Club
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
        return "club/details.html.twig";
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
        return array (  148 => 35,  143 => 33,  139 => 32,  130 => 26,  126 => 25,  116 => 18,  110 => 14,  104 => 13,  94 => 9,  89 => 8,  84 => 7,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <!-- Flash Messages -->
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Club Card -->
    <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
        <div class=\"card-header bg-primary text-white text-center py-4\">
            <h2 class=\"fw-bold mb-0\">{{ club.nom }}</h2>
        </div>

        <div class=\"card-body\">
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-lg-6 text-center\">
                    <img 
                        src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                        alt=\"{{ club.nom }}\" 
                        class=\"img-fluid rounded shadow-sm border border-secondary\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">{{ club.nom }}</h4>
                    <p class=\"text-muted\">{{ club.description }}</p>

                    <form method=\"POST\" action=\"{{ path('application_submit_club', {'clubId': club.id}) }}\">
                        <button type=\"submit\" class=\"btn btn-gradient btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2\">
                            <i class=\"fas fa-user-plus\"></i> Apply for this Club
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
<<<<<<< HEAD

{% block javascripts %}
<script>
\$(document).ready(function () {
    // Handle Apply Button
    \$('#applyButton').on('click', function () {
        \$('#loadingSpinner').show();
        // Simulate apply action
        setTimeout(function () {
            \$('#loadingSpinner').hide();
            alert('You have successfully applied for the club.');
        }, 2000);
    });
});
</script>
{% endblock %}
", "club/details.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\club\\details.html.twig");
=======
", "club/details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\details.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
