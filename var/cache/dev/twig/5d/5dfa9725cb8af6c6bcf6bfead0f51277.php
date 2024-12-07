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

/* club/index.html.twig */
class __TwigTemplate_8b380f1e2b2d250e0786d9107b586b49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/index.html.twig", 1);
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

        yield "Clubs";
        
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
        yield "    <div class=\"container mt-3\">
        <h1>Clubs</h1>

        <!-- Owl Carousel -->
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 12
            yield "                <div class=\"testimonial-item bg-light my-4\">
                    <!-- Club Information -->
                    <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                       <img 
                            class=\"img-fluid rounded\" 
                            src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["club"], "logo", [], "any", false, false, false, 17))), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 18), "html", null, true);
            yield "\" 
                            style=\"width: 60px; height: 60px;\">
                        <div class=\"ps-4\">
                            <h4 class=\"text-primary mb-1\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</h4>
                            <small class=\"text-uppercase\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 22), "html", null, true);
            yield "</small>  
                        </div>
                    </div>
                    <div class=\"pt-4 pb-5 px-5\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 26)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 26), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 26))), "html", null, true);
            yield "
                    </div>
                    <div class=\"text-center\">
                        <!-- Selection Button -->
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Join ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</a>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                <div class=\"testimonial-item bg-light msy-4\">
                    <div class=\"pt-4 pb-5 px-5 text-center\">
                        <p class=\"text-muted\">No clubs found.</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['club'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </div>
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
        return "club/index.html.twig";
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
        return array (  169 => 40,  158 => 34,  147 => 30,  140 => 26,  133 => 22,  129 => 21,  123 => 18,  119 => 17,  112 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clubs{% endblock %}

{% block body %}
    <div class=\"container mt-3\">
        <h1>Clubs</h1>

        <!-- Owl Carousel -->
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
            {% for club in clubs %}
                <div class=\"testimonial-item bg-light my-4\">
                    <!-- Club Information -->
                    <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                       <img 
                            class=\"img-fluid rounded\" 
                            src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                            alt=\"{{ club.nom }}\" 
                            style=\"width: 60px; height: 60px;\">
                        <div class=\"ps-4\">
                            <h4 class=\"text-primary mb-1\">{{ club.nom }}</h4>
                            <small class=\"text-uppercase\">{{ club.description }}</small>  
                        </div>
                    </div>
                    <div class=\"pt-4 pb-5 px-5\">
                        {{ club.description|length > 100 ? club.description|slice(0, 100) ~ '...' : club.description }}
                    </div>
                    <div class=\"text-center\">
                        <!-- Selection Button -->
                        <a href=\"{{ path('club_details', {'id': club.id}) }}\" class=\"btn btn-primary\">Join {{ club.nom }}</a>
                    </div>
                </div>
            {% else %}
                <div class=\"testimonial-item bg-light msy-4\">
                    <div class=\"pt-4 pb-5 px-5 text-center\">
                        <p class=\"text-muted\">No clubs found.</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "club/index.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\club\\index.html.twig");
    }
}
