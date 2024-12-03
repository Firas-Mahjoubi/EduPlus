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

/* club/showclubmembers.html.twig */
class __TwigTemplate_366b8a143490fa63f919744bf86e4254 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/showclubmembers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/showclubmembers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/showclubmembers.html.twig", 1);
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

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Team Members</h5>
            <h1 class=\"mb-0\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"row g-5\">
            ";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "                <p class=\"text-center\">No members in this club yet.</p>
            ";
        } else {
            // line 18
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 18, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 19
                yield "                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) * 0.3), "html", null, true);
                yield "s\" style=\"visibility: visible; animation-delay: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) * 0.3), "html", null, true);
                yield "s; animation-name: slideInUp;\">
                        <div class=\"team-item bg-light rounded overflow-hidden\">
                            <div class=\"team-img position-relative overflow-hidden\">
                                ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 22), "profilePicture", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                                    <img class=\"img-fluid w-100\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 23), "profilePicture", [], "any", false, false, false, 23))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 24), "prenom", [], "any", false, false, false, 24), "html", null, true);
                    yield " profile picture\" 
                                         style=\"width: 200px; height: 200px;  border-radius: 50%;\">
                                ";
                } else {
                    // line 27
                    yield "                                    <img class=\"img-fluid w-100\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"), "html", null, true);
                    yield "\" 
                                         alt=\"Default profile picture\" 
                                         style=\"width: 200px; height: 200px; object-fit: cover; border-radius: 50%;\">
                                ";
                }
                // line 31
                yield "                                <div class=\"team-social\">
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center py-4\">
                                <h4 class=\"text-primary\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 39), "prenom", [], "any", false, false, false, 39), "html", null, true);
                yield "</h4>
                                <!-- Display the role of the member, not the user -->
                                <p class=\"text-uppercase m-0\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "role", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true);
                yield "</p>
                                <small>Joined: ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "dateAdhesion", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
                yield "</small>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "            ";
        }
        // line 48
        yield "        </div>
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
        return "club/showclubmembers.html.twig";
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
        return array (  215 => 48,  212 => 47,  193 => 42,  189 => 41,  182 => 39,  172 => 31,  164 => 27,  156 => 24,  151 => 23,  149 => 22,  140 => 19,  122 => 18,  118 => 16,  116 => 15,  110 => 12,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ club.nom }}
{% endblock %}

{% block body %}
<div class=\"container-fluid py-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
    <div class=\"container py-5\">
        <div class=\"section-title text-center position-relative pb-3 mb-5 mx-auto\" style=\"max-width: 600px;\">
            <h5 class=\"fw-bold text-primary text-uppercase\">Team Members</h5>
            <h1 class=\"mb-0\">{{ club.nom }}</h1>
        </div>
        <div class=\"row g-5\">
            {% if members is empty %}
                <p class=\"text-center\">No members in this club yet.</p>
            {% else %}
                {% for member in members %}
                    <div class=\"col-lg-4 wow slideInUp\" data-wow-delay=\"{{ loop.index * 0.3 }}s\" style=\"visibility: visible; animation-delay: {{ loop.index * 0.3 }}s; animation-name: slideInUp;\">
                        <div class=\"team-item bg-light rounded overflow-hidden\">
                            <div class=\"team-img position-relative overflow-hidden\">
                                {% if member.utilisateur.profilePicture %}
                                    <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/profilePictures/' ~ member.utilisateur.profilePicture) }}\" 
                                         alt=\"{{ member.utilisateur.nom }} {{ member.utilisateur.prenom }} profile picture\" 
                                         style=\"width: 200px; height: 200px;  border-radius: 50%;\">
                                {% else %}
                                    <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/profilePictures/default.png') }}\" 
                                         alt=\"Default profile picture\" 
                                         style=\"width: 200px; height: 200px; object-fit: cover; border-radius: 50%;\">
                                {% endif %}
                                <div class=\"team-social\">
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                                    <a class=\"btn btn-lg btn-primary btn-lg-square rounded\" href=\"#\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center py-4\">
                                <h4 class=\"text-primary\">{{ member.utilisateur.nom }} {{ member.utilisateur.prenom }}</h4>
                                <!-- Display the role of the member, not the user -->
                                <p class=\"text-uppercase m-0\">{{ member.role.value }}</p>
                                <small>Joined: {{ member.dateAdhesion|date('Y-m-d') }}</small>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "club/showclubmembers.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\club\\showclubmembers.html.twig");
    }
}
