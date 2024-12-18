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
class __TwigTemplate_a2cf490f7e2a04218720ce7a431bae29 extends Template
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
            <h1 class=\"mb-0 text-secondary\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
        </div>

        <div class=\"row g-4\">
            ";
        // line 16
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "                <p class=\"text-center text-muted\">No members in this club yet.</p>
            ";
        } else {
            // line 19
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 19, $this->source); })()));
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
                // line 20
                yield "                    <div class=\"col-lg-4 col-md-6 wow slideInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) * 0.2), "html", null, true);
                yield "s\" style=\"visibility: visible; animation-delay: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) * 0.2), "html", null, true);
                yield "s; animation-name: slideInUp;\">
                        <div class=\"team-item bg-light rounded shadow-sm overflow-hidden\">
                            <div class=\"team-img position-relative overflow-hidden text-center p-3\">
                                ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 23), "profilePicture", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                                    <img class=\"img-fluid border shadow-sm\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 24), "profilePicture", [], "any", false, false, false, 24))), "html", null, true);
                    yield "\" 
                                         alt=\"";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 25), "prenom", [], "any", false, false, false, 25), "html", null, true);
                    yield " profile picture\" 
                                         style=\"width: 150px; height: 150px; object-fit: cover; border-radius: 50%;\">
                                ";
                } else {
                    // line 28
                    yield "                                    <img class=\"img-fluid border shadow-sm\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"), "html", null, true);
                    yield "\" 
                                         alt=\"Default profile picture\" 
                                         style=\"width: 150px; height: 150px; object-fit: cover; border-radius: 50%;\">
                                ";
                }
                // line 32
                yield "                            </div>
                            <div class=\"text-center py-3 px-3\">
                                <h4 class=\"text-primary mb-1\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "utilisateur", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
                yield "</h4>
                                <span class=\"badge bg-secondary text-white text-uppercase mb-2\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "role", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35), "html", null, true);
                yield "</span>
                                <p class=\"text-muted small\">Joined: ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "dateAdhesion", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
                yield "</p>
                            </div>
                            <div class=\"text-center py-2 border-top\">
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>

                            <!-- Remove Member Button -->
                            <form action=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_member", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "memberId" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" method=\"post\" class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm mt-2\">Remove Member</button>
                            </form>
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
            // line 54
            yield "            ";
        }
        // line 55
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
        return array (  225 => 55,  222 => 54,  202 => 48,  187 => 36,  183 => 35,  177 => 34,  173 => 32,  165 => 28,  157 => 25,  152 => 24,  150 => 23,  141 => 20,  123 => 19,  119 => 17,  117 => 16,  110 => 12,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
            <h1 class=\"mb-0 text-secondary\">{{ club.nom }}</h1>
        </div>

        <div class=\"row g-4\">
            {% if members is empty %}
                <p class=\"text-center text-muted\">No members in this club yet.</p>
            {% else %}
                {% for member in members %}
                    <div class=\"col-lg-4 col-md-6 wow slideInUp\" data-wow-delay=\"{{ loop.index * 0.2 }}s\" style=\"visibility: visible; animation-delay: {{ loop.index * 0.2 }}s; animation-name: slideInUp;\">
                        <div class=\"team-item bg-light rounded shadow-sm overflow-hidden\">
                            <div class=\"team-img position-relative overflow-hidden text-center p-3\">
                                {% if member.utilisateur.profilePicture %}
                                    <img class=\"img-fluid border shadow-sm\" src=\"{{ asset('uploads/profilePictures/' ~ member.utilisateur.profilePicture) }}\" 
                                         alt=\"{{ member.utilisateur.nom }} {{ member.utilisateur.prenom }} profile picture\" 
                                         style=\"width: 150px; height: 150px; object-fit: cover; border-radius: 50%;\">
                                {% else %}
                                    <img class=\"img-fluid border shadow-sm\" src=\"{{ asset('uploads/profilePictures/default.png') }}\" 
                                         alt=\"Default profile picture\" 
                                         style=\"width: 150px; height: 150px; object-fit: cover; border-radius: 50%;\">
                                {% endif %}
                            </div>
                            <div class=\"text-center py-3 px-3\">
                                <h4 class=\"text-primary mb-1\">{{ member.utilisateur.nom }} {{ member.utilisateur.prenom }}</h4>
                                <span class=\"badge bg-secondary text-white text-uppercase mb-2\">{{ member.role.value }}</span>
                                <p class=\"text-muted small\">Joined: {{ member.dateAdhesion|date('Y-m-d') }}</p>
                            </div>
                            <div class=\"text-center py-2 border-top\">
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-outline-primary btn-sm\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>

                            <!-- Remove Member Button -->
                            <form action=\"{{ path('remove_member', {'clubId': club.id, 'memberId': member.id}) }}\" method=\"post\" class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm mt-2\">Remove Member</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
<<<<<<< HEAD
", "club/showclubmembers.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\club\\showclubmembers.html.twig");
=======
", "club/showclubmembers.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\showclubmembers.html.twig");
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
    }
}
