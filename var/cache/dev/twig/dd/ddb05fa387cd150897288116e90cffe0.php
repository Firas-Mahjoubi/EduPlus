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
<<<<<<<< HEAD:var/cache/dev/twig/ad/ad46689c38c20456ec1cb3de47ac87b2.php
class __TwigTemplate_1bafb3eb4fff508d695a9bb2d272d458 extends Template
========
class __TwigTemplate_41cf67f3f7e577a3e79311113e659e6b extends Template
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/twig/dd/ddb05fa387cd150897288116e90cffe0.php
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
            'javascripts' => [$this, 'block_javascripts'],
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
    <!-- Club Card -->
    <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
        <!-- Card Header -->
        <div class=\"card-header bg-primary text-white text-center py-4\">
            <h2 class=\"fw-bold mb-0\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
        </div>

        <!-- Card Body -->
        <div class=\"card-body\">
            <div class=\"row g-4 align-items-center\">
                <!-- Image Section -->
                <div class=\"col-lg-6 text-center\">
                    <img 
                        src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 18, $this->source); })()), "logo", [], "any", false, false, false, 18))), "html", null, true);
        yield "\" 
                        alt=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "\" 
                        class=\"img-fluid rounded shadow-sm border border-secondary\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <!-- Club Details Section -->
                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>

                    <!-- Apply Button -->
                    <button 
                        id=\"applyButton\" 
                        class=\"btn btn-gradient btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-user-plus\"></i> Apply for this Club
                    </button>

                    <!-- Loading Spinner -->
                    <div 
                        id=\"loadingSpinner\" 
                        class=\"text-center mt-3\" 
                        style=\"display: none;\">
                        <div class=\"spinner-border text-success\" role=\"status\">
                            <span class=\"visually-hidden\">Loading...</span>
                        </div>
                    </div>
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

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        yield "<script>
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
        return array (  162 => 53,  149 => 52,  114 => 27,  110 => 26,  100 => 19,  96 => 18,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <!-- Club Card -->
    <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
        <!-- Card Header -->
        <div class=\"card-header bg-primary text-white text-center py-4\">
            <h2 class=\"fw-bold mb-0\">{{ club.nom }}</h2>
        </div>

        <!-- Card Body -->
        <div class=\"card-body\">
            <div class=\"row g-4 align-items-center\">
                <!-- Image Section -->
                <div class=\"col-lg-6 text-center\">
                    <img 
                        src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                        alt=\"{{ club.nom }}\" 
                        class=\"img-fluid rounded shadow-sm border border-secondary\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <!-- Club Details Section -->
                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">{{ club.nom }}</h4>
                    <p class=\"text-muted\">{{ club.description }}</p>

                    <!-- Apply Button -->
                    <button 
                        id=\"applyButton\" 
                        class=\"btn btn-gradient btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-user-plus\"></i> Apply for this Club
                    </button>

                    <!-- Loading Spinner -->
                    <div 
                        id=\"loadingSpinner\" 
                        class=\"text-center mt-3\" 
                        style=\"display: none;\">
                        <div class=\"spinner-border text-success\" role=\"status\">
                            <span class=\"visually-hidden\">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

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
", "club/details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\details.html.twig");
    }
}
