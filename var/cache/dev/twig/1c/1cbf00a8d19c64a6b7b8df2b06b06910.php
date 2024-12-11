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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center text-primary mb-5\">Clubs</h1>

    <!-- Search Form -->
    <div class=\"mb-4\">
        <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" method=\"get\" class=\"form-inline d-flex justify-content-center\">
            <input 
                type=\"text\" 
                name=\"search\" 
                value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" 
                class=\"form-control w-50\" 
                placeholder=\"Search by club name\" 
                aria-label=\"Search Clubs\">
            <button type=\"submit\" class=\"btn btn-primary ms-3\">Search</button>
        </form>
    </div>

    <!-- Clubs Carousel -->
    <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubsWithRatings"]) || array_key_exists("clubsWithRatings", $context) ? $context["clubsWithRatings"] : (function () { throw new RuntimeError('Variable "clubsWithRatings" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["clubWithRating"]) {
            // line 26
            yield "            ";
            $context["club"] = CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "club", [], "any", false, false, false, 26);
            // line 27
            yield "            <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                <!-- Club Header -->
                <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                    <img 
                        class=\"img-fluid rounded-circle border\" 
                        src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "logo", [], "any", false, false, false, 32))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "\" 
                        style=\"width: 70px; height: 70px; object-fit: cover;\">
                    <div class=\"ps-4\">
                        <h4 class=\"text-primary mb-1 font-weight-bold\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</h4>
                        <small class=\"text-muted text-uppercase\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
            yield "</small>
                    </div>
                </div>

                <!-- Club Description -->
                <div class=\"pt-4 pb-5 px-5\">
                    <p class=\"text-muted\" style=\"font-size: 1.1rem;\">
                        ";
            // line 44
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true)));
            yield "
                    </p>
                </div>

                <!-- Club Footer -->
                <div class=\"text-center pb-4\">
                    <p class=\"text-muted\">
                        ";
            // line 51
            $context["rating"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "averageRating", [], "any", false, false, false, 51), 1);
            // line 52
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                yield "                            <i class=\"bi ";
                if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 53, $this->source); })()))) {
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
            // line 55
            yield "                    </p>
                    <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Join ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
            yield "</a>

                    <!-- Show 'Manage Club' Button Only for Presidents -->
                    ";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "isPresidentOf", [(isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 59, $this->source); })())], "method", false, false, false, 59))) {
                // line 60
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"btn btn-danger mt-3\">Manage Club</a>
                    ";
            }
            // line 62
            yield "                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            yield "            <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                <div class=\"pt-4 pb-5 px-5 text-center\">
                    <p class=\"text-muted\">No clubs found.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['clubWithRating'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchTerm = \"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 79, $this->source); })()), "js"), "html", null, true);
        yield "\".toLowerCase();
            let startPosition = 0;

            // Find first matching club
            document.querySelectorAll('.testimonial-item').forEach((item, index) => {
                const clubName = item.querySelector('h4').textContent.toLowerCase();
                if (clubName.includes(searchTerm) && startPosition === 0) {
                    startPosition = index;
                }
            });

            // Initialize Owl Carousel with dynamic start position
            \$('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                startPosition: startPosition,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
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
        return array (  267 => 79,  260 => 76,  247 => 75,  234 => 71,  223 => 65,  216 => 62,  210 => 60,  208 => 59,  200 => 56,  197 => 55,  184 => 53,  179 => 52,  177 => 51,  167 => 44,  157 => 37,  153 => 36,  147 => 33,  143 => 32,  136 => 27,  133 => 26,  128 => 25,  115 => 15,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
            <input 
                type=\"text\" 
                name=\"search\" 
                value=\"{{ searchTerm }}\" 
                class=\"form-control w-50\" 
                placeholder=\"Search by club name\" 
                aria-label=\"Search Clubs\">
            <button type=\"submit\" class=\"btn btn-primary ms-3\">Search</button>
        </form>
    </div>

    <!-- Clubs Carousel -->
    <div class=\"owl-carousel testimonial-carousel wow fadeInUp mt-4\" data-wow-delay=\"0.6s\">
        {% for clubWithRating in clubsWithRatings %}
            {% set club = clubWithRating.club %}
            <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                <!-- Club Header -->
                <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                    <img 
                        class=\"img-fluid rounded-circle border\" 
                        src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                        alt=\"{{ club.nom }}\" 
                        style=\"width: 70px; height: 70px; object-fit: cover;\">
                    <div class=\"ps-4\">
                        <h4 class=\"text-primary mb-1 font-weight-bold\">{{ club.nom }}</h4>
                        <small class=\"text-muted text-uppercase\">{{ club.description }}</small>
                    </div>
                </div>

                <!-- Club Description -->
                <div class=\"pt-4 pb-5 px-5\">
                    <p class=\"text-muted\" style=\"font-size: 1.1rem;\">
                        {{ club.description|length > 100 ? club.description|slice(0, 100) ~ '...' : club.description }}
                    </p>
                </div>

                <!-- Club Footer -->
                <div class=\"text-center pb-4\">
                    <p class=\"text-muted\">
                        {% set rating = clubWithRating.averageRating|round(1) %}
                        {% for i in 1..5 %}
                            <i class=\"bi {% if i <= rating %}bi-star-fill{% else %}bi-star{% endif %} text-warning\"></i>
                        {% endfor %}
                    </p>
                    <a href=\"{{ path('club_details', {'id': club.id}) }}\" class=\"btn btn-primary\">Join {{ club.nom }}</a>

                    <!-- Show 'Manage Club' Button Only for Presidents -->
                    {% if app.user and app.user.isPresidentOf(club) %}
                        <a href=\"{{ path('club_show', {'id': club.id}) }}\" class=\"btn btn-danger mt-3\">Manage Club</a>
                    {% endif %}
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
        document.addEventListener('DOMContentLoaded', function () {
            const searchTerm = \"{{ searchTerm|e('js') }}\".toLowerCase();
            let startPosition = 0;

            // Find first matching club
            document.querySelectorAll('.testimonial-item').forEach((item, index) => {
                const clubName = item.querySelector('h4').textContent.toLowerCase();
                if (clubName.includes(searchTerm) && startPosition === 0) {
                    startPosition = index;
                }
            });

            // Initialize Owl Carousel with dynamic start position
            \$('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                startPosition: startPosition,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        });
    </script>
{% endblock %}
", "club/index.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\index.html.twig");
    }
}
