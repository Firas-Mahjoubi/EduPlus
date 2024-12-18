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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center text-primary mb-5\">Clubs</h1>

    <!-- Search Form -->
    <div class=\"mb-4\">
        <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" method=\"get\" class=\"form-inline d-flex justify-content-center\">
            <input 
                type=\"text\" 
                name=\"search\" 
                value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 13, $this->source); })()), "html", null, true);
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubsWithRatings"]) || array_key_exists("clubsWithRatings", $context) ? $context["clubsWithRatings"] : (function () { throw new RuntimeError('Variable "clubsWithRatings" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["clubWithRating"]) {
            // line 24
            yield "            ";
            $context["club"] = CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "club", [], "any", false, false, false, 24);
            // line 25
            yield "            <div class=\"testimonial-item bg-light my-4 shadow-sm rounded-lg overflow-hidden\">
                <!-- Club Header -->
                <div class=\"d-flex align-items-center border-bottom pt-5 pb-4 px-5\">
                    <img 
                        class=\"img-fluid rounded-circle border\" 
                        src=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 30, $this->source); })()), "logo", [], "any", false, false, false, 30))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "\" 
                        style=\"width: 70px; height: 70px; object-fit: cover;\">
                    <div class=\"ps-4\">
                        <h4 class=\"text-primary mb-1 font-weight-bold\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</h4>
                        <small class=\"text-muted text-uppercase\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
            yield "</small>
                    </div>
                </div>

                <!-- Club Description -->
                <div class=\"pt-4 pb-5 px-5\">
                    <p class=\"text-muted\" style=\"font-size: 1.1rem;\">
                        ";
            // line 42
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true)));
            yield "
                    </p>
                </div>

                <!-- Club Footer -->
                <div class=\"text-center pb-4\">
                    <p class=\"text-muted\">
                        ";
            // line 49
            $context["rating"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["clubWithRating"], "averageRating", [], "any", false, false, false, 49), 1);
            // line 50
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                yield "                            <i class=\"bi ";
                if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 51, $this->source); })()))) {
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
            // line 53
            yield "                    </p>
                    <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Join ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "</a>


                    <!-- Show 'Manage Club' Button Only for Presidents -->
                    ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "isPresidentOf", [(isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 58, $this->source); })())], "method", false, false, false, 58))) {
                // line 59
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"btn btn-danger mt-3\">Manage Members</a>
                        <a href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_pending_applications", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"btn btn-warning mt-3\">Pending Applications</a>

                    ";
            }
            // line 63
            yield "
                    <!-- Rating Form -->
                    ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) {
                // line 66
                yield "                    <div class=\"rating-section\">
                        <h5 class=\"mb-3\">Rate this Club:</h5>
                        <form 
                            action=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_club", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" 
                            method=\"post\" 
                            class=\"d-flex flex-column align-items-center\">
                            <div class=\"rating-stars\">
                                ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 74
                    yield "                                    <label class=\"rating-star\" data-index=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\">
                                        <input 
                                            type=\"radio\" 
                                            name=\"rating\" 
                                            value=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\" 
                                            class=\"d-none\" 
                                            ";
                    // line 80
                    if (($context["i"] == 1)) {
                        yield " checked ";
                    }
                    yield " 
                                            data-index=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\">
                                        <i class=\"bi bi-star text-warning star-icon\" data-rating=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\"></i>
                                    </label>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "                            </div>
                            <button type=\"submit\" class=\"submit-rating-btn\">Submit</button>
                        </form>
                    </div>
                    ";
            }
            // line 90
            yield "                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
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
        // line 99
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 104
        yield "    <style>
        .rating-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 20px;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .rating-star {
            position: relative;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .rating-star input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .star-icon {
            font-size: 2rem;
            color: lightgray;
        }

        .rating-star:hover .star-icon,
        .rating-star input:checked ~ .star-icon:hover {
            color: #ffd700; /* Gold color on hover */
        }

        .rating-star input:checked ~ .star-icon {
            color: #ffd700; /* Selected star color */
        }

        .submit-rating-btn {
            margin-top: 15px;
            width: 200px;
            font-size: 1rem;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-rating-btn:hover {
            background-color: #218838;
        }
    </style>
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
        return array (  303 => 104,  290 => 103,  277 => 99,  266 => 93,  259 => 90,  252 => 85,  243 => 82,  239 => 81,  233 => 80,  228 => 78,  220 => 74,  216 => 73,  209 => 69,  204 => 66,  202 => 65,  198 => 63,  192 => 60,  187 => 59,  185 => 58,  176 => 54,  173 => 53,  160 => 51,  155 => 50,  153 => 49,  143 => 42,  133 => 35,  129 => 34,  123 => 31,  119 => 30,  112 => 25,  109 => 24,  104 => 23,  91 => 13,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
                        <a href=\"{{ path('club_show', {'id': club.id}) }}\" class=\"btn btn-danger mt-3\">Manage Members</a>
                        <a href=\"{{ path('club_pending_applications', {'id': club.id}) }}\" class=\"btn btn-warning mt-3\">Pending Applications</a>

                    {% endif %}

                    <!-- Rating Form -->
                    {% if app.user %}
                    <div class=\"rating-section\">
                        <h5 class=\"mb-3\">Rate this Club:</h5>
                        <form 
                            action=\"{{ path('rate_club', {'id': club.id}) }}\" 
                            method=\"post\" 
                            class=\"d-flex flex-column align-items-center\">
                            <div class=\"rating-stars\">
                                {% for i in 1..5 %}
                                    <label class=\"rating-star\" data-index=\"{{ i }}\">
                                        <input 
                                            type=\"radio\" 
                                            name=\"rating\" 
                                            value=\"{{ i }}\" 
                                            class=\"d-none\" 
                                            {% if i == 1 %} checked {% endif %} 
                                            data-index=\"{{ i }}\">
                                        <i class=\"bi bi-star text-warning star-icon\" data-rating=\"{{ i }}\"></i>
                                    </label>
                                {% endfor %}
                            </div>
                            <button type=\"submit\" class=\"submit-rating-btn\">Submit</button>
                        </form>
                    </div>
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

{% block stylesheets %}
    <style>
        .rating-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 20px;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .rating-star {
            position: relative;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .rating-star input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .star-icon {
            font-size: 2rem;
            color: lightgray;
        }

        .rating-star:hover .star-icon,
        .rating-star input:checked ~ .star-icon:hover {
            color: #ffd700; /* Gold color on hover */
        }

        .rating-star input:checked ~ .star-icon {
            color: #ffd700; /* Selected star color */
        }

        .submit-rating-btn {
            margin-top: 15px;
            width: 200px;
            font-size: 1rem;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-rating-btn:hover {
            background-color: #218838;
        }
    </style>
{% endblock %}
", "club/index.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\index.html.twig");
    }
}
