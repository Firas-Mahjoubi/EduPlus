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
class __TwigTemplate_9ea411b1cc74d749311f14de10969259 extends Template
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
        yield "    <div style=\"padding: 20px; font-family: Arial, sans-serif;\">
        <h1 style=\"font-size: 24px; margin-bottom: 20px;\">Clubs</h1>

        <!-- Search Form -->
        <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_list");
        yield "\" method=\"get\" style=\"margin-bottom: 20px;\">
            <input 
                type=\"text\" 
                name=\"search\" 
                value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\" 
                placeholder=\"Search for clubs...\" 
                style=\"padding: 5px; width: 300px; margin-right: 10px; font-size: 14px;\">
            <button 
                type=\"submit\" 
                style=\"padding: 5px 10px; font-size: 14px; background-color: #007bff; color: #fff; border: none; cursor: pointer;\">
                Search
            </button>
        </form>

        <!-- Club Listings -->
        <div style=\"display: flex; flex-wrap: wrap; gap: 20px;\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 27
            yield "                <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 15px; width: 300px;\">
                    <!-- Club Information -->
                    <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                        <img 
                            src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["club"], "logo", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "\" 
                            style=\"width: 50px; height: 50px; border-radius: 5px; margin-right: 10px;\">
                        <div>
                            <h4 style=\"margin: 0; font-size: 18px; color: #007bff;\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "</h4>
                            <small style=\"color: #555;\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</small>
                        </div>
                    </div>

                    <div>
    Average Rating:
    ";
            // line 42
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "rating", [], "any", false, false, false, 42)) > 0)) {
                // line 43
                yield "        ";
                $context["total"] = 0;
                // line 44
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "rating", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                    // line 45
                    yield "            ";
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "value", [], "any", false, false, false, 45));
                    // line 46
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rating'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "        ";
                $context["averageRating"] = Twig\Extension\CoreExtension::round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "rating", [], "any", false, false, false, 47))), 1, "floor");
                // line 48
                yield "
        <!-- Star Rating -->
        <span>
            ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 52
                    yield "                ";
                    if (($context["i"] <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 52, $this->source); })()))) {
                        // line 53
                        yield "                    <i class=\"fas fa-star text-warning\"></i>
                ";
                    } elseif ((                    // line 54
$context["i"] <= ((isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 54, $this->source); })()) + 0.5))) {
                        // line 55
                        yield "                    <i class=\"fas fa-star-half-alt text-warning\"></i>
                ";
                    } else {
                        // line 57
                        yield "                    <i class=\"far fa-star text-warning\"></i>
                ";
                    }
                    // line 59
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "        </span>
        <small>(";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 61, $this->source); })()), "html", null, true);
                yield "/5)</small>
    ";
            } else {
                // line 63
                yield "        <span style=\"color: #aaa;\">No ratings yet</span>
    ";
            }
            // line 65
            yield "</div>
                    <!-- Description -->
                    <p style=\"margin: 15px 0; color: #333; font-size: 14px;\">
                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 68)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 68), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["club"], "description", [], "any", false, false, false, 68))), "html", null, true);
            yield "
                    </p>

                    <!-- Join Button -->
                    <div style=\"text-align: center;\">
                        <a 
                            href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" 
                            style=\"padding: 5px 10px; font-size: 14px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;\">
                            Join ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nom", [], "any", false, false, false, 76), "html", null, true);
            yield "
                        </a>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            yield "                <div style=\"text-align: center; color: #888; font-size: 14px;\">
                    No clubs found.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['club'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return array (  265 => 85,  256 => 81,  246 => 76,  241 => 74,  232 => 68,  227 => 65,  223 => 63,  218 => 61,  215 => 60,  209 => 59,  205 => 57,  201 => 55,  199 => 54,  196 => 53,  193 => 52,  189 => 51,  184 => 48,  181 => 47,  175 => 46,  172 => 45,  167 => 44,  164 => 43,  162 => 42,  153 => 36,  149 => 35,  143 => 32,  139 => 31,  133 => 27,  128 => 26,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clubs{% endblock %}

{% block body %}
    <div style=\"padding: 20px; font-family: Arial, sans-serif;\">
        <h1 style=\"font-size: 24px; margin-bottom: 20px;\">Clubs</h1>

        <!-- Search Form -->
        <form action=\"{{ path('club_list') }}\" method=\"get\" style=\"margin-bottom: 20px;\">
            <input 
                type=\"text\" 
                name=\"search\" 
                value=\"{{ app.request.query.get('search') }}\" 
                placeholder=\"Search for clubs...\" 
                style=\"padding: 5px; width: 300px; margin-right: 10px; font-size: 14px;\">
            <button 
                type=\"submit\" 
                style=\"padding: 5px 10px; font-size: 14px; background-color: #007bff; color: #fff; border: none; cursor: pointer;\">
                Search
            </button>
        </form>

        <!-- Club Listings -->
        <div style=\"display: flex; flex-wrap: wrap; gap: 20px;\">
            {% for club in clubs %}
                <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 15px; width: 300px;\">
                    <!-- Club Information -->
                    <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                        <img 
                            src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" 
                            alt=\"{{ club.nom }}\" 
                            style=\"width: 50px; height: 50px; border-radius: 5px; margin-right: 10px;\">
                        <div>
                            <h4 style=\"margin: 0; font-size: 18px; color: #007bff;\">{{ club.nom }}</h4>
                            <small style=\"color: #555;\">{{ club.description }}</small>
                        </div>
                    </div>

                    <div>
    Average Rating:
    {% if club.rating|length > 0 %}
        {% set total = 0 %}
        {% for rating in club.rating %}
            {% set total = total + rating.value %}
        {% endfor %}
        {% set averageRating = (total / club.rating|length)|round(1, 'floor') %}

        <!-- Star Rating -->
        <span>
            {% for i in 1..5 %}
                {% if i <= averageRating %}
                    <i class=\"fas fa-star text-warning\"></i>
                {% elseif i <= (averageRating + 0.5) %}
                    <i class=\"fas fa-star-half-alt text-warning\"></i>
                {% else %}
                    <i class=\"far fa-star text-warning\"></i>
                {% endif %}
            {% endfor %}
        </span>
        <small>({{ averageRating }}/5)</small>
    {% else %}
        <span style=\"color: #aaa;\">No ratings yet</span>
    {% endif %}
</div>
                    <!-- Description -->
                    <p style=\"margin: 15px 0; color: #333; font-size: 14px;\">
                        {{ club.description|length > 100 ? club.description|slice(0, 100) ~ '...' : club.description }}
                    </p>

                    <!-- Join Button -->
                    <div style=\"text-align: center;\">
                        <a 
                            href=\"{{ path('club_details', {'id': club.id}) }}\" 
                            style=\"padding: 5px 10px; font-size: 14px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;\">
                            Join {{ club.nom }}
                        </a>
                    </div>
                </div>
            {% else %}
                <div style=\"text-align: center; color: #888; font-size: 14px;\">
                    No clubs found.
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "club/index.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\index.html.twig");
    }
}
