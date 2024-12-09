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
class __TwigTemplate_f35de3bf957c903ae2ed75210e71bd26 extends Template
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary mb-5\">Clubs</h1>

        <!-- Search Form -->
        <div class=\"mb-4\">
            <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" method=\"get\" class=\"form-inline d-flex justify-content-center\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control w-50\" placeholder=\"Search by club name\" aria-label=\"Search Clubs\">
                <button type=\"submit\" class=\"btn btn-primary ms-3\">Search</button>
            </form>
        </div>

      

        <!-- Owl Carousel for Clubs -->
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubsWithRatings"]) || array_key_exists("clubsWithRatings", $context) ? $context["clubsWithRatings"] : (function () { throw new RuntimeError('Variable "clubsWithRatings" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["clubWithRating"]) {
            // line 22
            yield "                ";
            $context["club"] = CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "club", [], "any", false, false, false, 22);
            // line 23
            yield "                <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                    <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                        <img class=\"img-fluid rounded-circle border\" 
                             src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 26, $this->source); })()), "logo", [], "any", false, false, false, 26))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "\" 
                             style=\"width: 70px; height: 70px; object-fit: cover;\">
                        <div class=\"ps-4\">
                            <h4 class=\"text-primary mb-1 font-weight-bold\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</h4>
                            <small class=\"text-muted text-uppercase\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</small>
                        </div>
                    </div>

                    <div class=\"pt-4 pb-5 px-5\">
                        <p class=\"text-muted\" style=\"font-size: 1.1rem;\">
                            ";
            // line 37
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true)));
            yield "
                        </p>
                    </div>

                    <div class=\"text-center pb-4\">
                        <p class=\"text-muted\">
                            ";
            // line 43
            $context["rating"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "averageRating", [], "any", false, false, false, 43), 1);
            // line 44
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                yield "                                <i class=\"bi ";
                if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 45, $this->source); })()))) {
                    yield "bi-star-fill";
                } else {
                    yield "bi-star";
                }
                yield " text-warning\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                        </p>
                        <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Join ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</a>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "                <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                    <div class=\"pt-4 pb-5 px-5 text-center\">
                        <p class=\"text-muted\">No clubs found.</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['clubWithRating'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            let searchTerm = \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\".toLowerCase();
            let startPosition = 0;

            // Find the index of the first matching club
            \$(\".testimonial-item\").each(function (index) {
                if (\$(this).find(\"h4\").text().toLowerCase().includes(searchTerm)) {
                    startPosition = index;
                    return false; // Break the loop
                }
            });

            \$(\".owl-carousel\").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                startPosition: startPosition, // Start carousel at the matching club
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
        return array (  247 => 66,  240 => 63,  227 => 62,  214 => 58,  203 => 52,  192 => 48,  189 => 47,  176 => 45,  171 => 44,  169 => 43,  160 => 37,  151 => 31,  147 => 30,  141 => 27,  137 => 26,  132 => 23,  129 => 22,  124 => 21,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clubs{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary mb-5\">Clubs</h1>

        <!-- Search Form -->
        <div class=\"mb-4\">
            <form action=\"{{ path('club_index') }}\" method=\"get\" class=\"form-inline d-flex justify-content-center\">
                <input type=\"text\" name=\"search\" value=\"{{ searchTerm }}\" class=\"form-control w-50\" placeholder=\"Search by club name\" aria-label=\"Search Clubs\">
                <button type=\"submit\" class=\"btn btn-primary ms-3\">Search</button>
            </form>
        </div>

      

        <!-- Owl Carousel for Clubs -->
        <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
            {% for clubWithRating in clubsWithRatings %}
                {% set club = clubWithRating.club %}
                <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                    <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                        <img class=\"img-fluid rounded-circle border\" 
                             src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                             alt=\"{{ club.nom }}\" 
                             style=\"width: 70px; height: 70px; object-fit: cover;\">
                        <div class=\"ps-4\">
                            <h4 class=\"text-primary mb-1 font-weight-bold\">{{ club.nom }}</h4>
                            <small class=\"text-muted text-uppercase\">{{ club.description }}</small>
                        </div>
                    </div>

                    <div class=\"pt-4 pb-5 px-5\">
                        <p class=\"text-muted\" style=\"font-size: 1.1rem;\">
                            {{ club.description|length > 100 ? club.description|slice(0, 100) ~ '...' : club.description }}
                        </p>
                    </div>

                    <div class=\"text-center pb-4\">
                        <p class=\"text-muted\">
                            {% set rating = clubWithRating.averageRating|round(1) %}
                            {% for i in 1..5 %}
                                <i class=\"bi {% if i <= rating %}bi-star-fill{% else %}bi-star{% endif %} text-warning\"></i>
                            {% endfor %}
                        </p>
                        <a href=\"{{ path('club_details', {'id': club.id}) }}\" class=\"btn btn-primary\">Join {{ club.nom }}</a>
                    </div>
                </div>
            {% else %}
                <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                    <div class=\"pt-4 pb-5 px-5 text-center\">
                        <p class=\"text-muted\">No clubs found.</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            let searchTerm = \"{{ searchTerm }}\".toLowerCase();
            let startPosition = 0;

            // Find the index of the first matching club
            \$(\".testimonial-item\").each(function (index) {
                if (\$(this).find(\"h4\").text().toLowerCase().includes(searchTerm)) {
                    startPosition = index;
                    return false; // Break the loop
                }
            });

            \$(\".owl-carousel\").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                startPosition: startPosition, // Start carousel at the matching club
            });
        });
    </script>
{% endblock %}
", "club/index.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\club\\index.html.twig");
    }
}
