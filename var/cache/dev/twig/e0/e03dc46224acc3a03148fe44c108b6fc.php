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
class __TwigTemplate_d93cd15041ced576973a2d74c3e5d898 extends Template
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

        <!-- Feedback Section -->
        <div id=\"feedback\" class=\"mt-3\"></div>

        <!-- Comments Section -->
        <section class=\"gradient-custom\">
            <div class=\"container my-5 py-5\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-md-12 col-lg-10 col-xl-8\">
                        <div class=\"card\">
                            <div class=\"card-body p-4\">
                                <h4 class=\"text-center mb-4 pb-2\">Comments</h4>

                                <!-- Loop through comments -->
                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 62, $this->source); })()), "comments", [], "any", false, false, false, 62));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 63
            yield "                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"d-flex flex-start\">
                                                <img class=\"rounded-circle shadow-1-strong me-3\"
                                                    src=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 67), "avatar", [], "any", false, false, false, 67))), "html", null, true);
            yield "\" 
                                                    alt=\"avatar\" width=\"65\" height=\"65\" />
                                                <div class=\"flex-grow-1 flex-shrink-1\">
                                                    <div>
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <p class=\"mb-1\">
                                                                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true);
            yield " <span class=\"small\">- ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 73), "Y-m-d H:i"), "html", null, true);
            yield "</span>
                                                            </p>
                                                            <a href=\"#!\"><i class=\"fas fa-reply fa-xs\"></i><span class=\"small\"> reply</span></a>
                                                        </div>
                                                        <p class=\"small mb-0\">
                                                            ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 78), "html", null, true);
            yield "
                                                        </p>
                                                    </div>

                                                    <!-- Display replies if any -->
                                                    ";
            // line 83
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 83))) {
                // line 84
                yield "                                                        <div class=\"d-flex flex-start mt-4\">
                                                            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 86
                    yield "                                                                <a class=\"me-3\" href=\"#!\">
                                                                    <img class=\"rounded-circle shadow-1-strong\"
                                                                        src=\"";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 88), "avatar", [], "any", false, false, false, 88))), "html", null, true);
                    yield "\" 
                                                                        alt=\"avatar\" width=\"65\" height=\"65\" />
                                                                </a>
                                                                <div class=\"flex-grow-1 flex-shrink-1\">
                                                                    <div>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <p class=\"mb-1\">
                                                                                ";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 95), "username", [], "any", false, false, false, 95), "html", null, true);
                    yield " <span class=\"small\">- ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 95), "Y-m-d H:i"), "html", null, true);
                    yield "</span>
                                                                            </p>
                                                                        </div>
                                                                        <p class=\"small mb-0\">
                                                                            ";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 99), "html", null, true);
                    yield "
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                yield "                                                        </div>
                                                    ";
            }
            // line 106
            yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            yield "                                    <p class=\"text-center text-muted\">No comments yet. Be the first to comment!</p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "
                                <!-- Add new comment form -->
                                <div class=\"d-flex flex-start mt-4\">
                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                        src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp\" 
                                        alt=\"avatar\" width=\"65\" height=\"65\" />
                                    <div class=\"flex-grow-1 flex-shrink-1\">
                                        <form method=\"post\" action=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_comment", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\">
                                            <textarea class=\"form-control\" name=\"content\" placeholder=\"Write a comment...\" rows=\"3\"></textarea>
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        
        feedback.innerHTML = '';
        spinner.style.display = 'block';

        fetch('";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_submit_club", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
        yield "', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({}) 
        })
        .then(response => response.json())
        .then(data => {
            spinner.style.display = 'none';

            feedback.innerHTML = `
                <div class=\"alert \${data.success ? 'alert-success' : 'alert-danger'} text-center\">
                    <i class=\"\${data.success ? 'fas fa-check-circle' : 'fas fa-exclamation-triangle'}\"></i> 
                    \${data.message}
                </div>`;
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none';

            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle\"></i> 
                    An error occurred. Please try again later.
                </div>`;
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
        return array (  288 => 144,  261 => 120,  252 => 113,  245 => 111,  236 => 106,  232 => 104,  221 => 99,  212 => 95,  202 => 88,  198 => 86,  194 => 85,  191 => 84,  189 => 83,  181 => 78,  171 => 73,  162 => 67,  156 => 63,  151 => 62,  113 => 27,  109 => 26,  99 => 19,  95 => 18,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
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

        <!-- Feedback Section -->
        <div id=\"feedback\" class=\"mt-3\"></div>

        <!-- Comments Section -->
        <section class=\"gradient-custom\">
            <div class=\"container my-5 py-5\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-md-12 col-lg-10 col-xl-8\">
                        <div class=\"card\">
                            <div class=\"card-body p-4\">
                                <h4 class=\"text-center mb-4 pb-2\">Comments</h4>

                                <!-- Loop through comments -->
                                {% for comment in club.comments %}
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"d-flex flex-start\">
                                                <img class=\"rounded-circle shadow-1-strong me-3\"
                                                    src=\"{{ asset('uploads/avatars/' ~ comment.user.avatar) }}\" 
                                                    alt=\"avatar\" width=\"65\" height=\"65\" />
                                                <div class=\"flex-grow-1 flex-shrink-1\">
                                                    <div>
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <p class=\"mb-1\">
                                                                {{ comment.user.username }} <span class=\"small\">- {{ comment.createdAt|date('Y-m-d H:i') }}</span>
                                                            </p>
                                                            <a href=\"#!\"><i class=\"fas fa-reply fa-xs\"></i><span class=\"small\"> reply</span></a>
                                                        </div>
                                                        <p class=\"small mb-0\">
                                                            {{ comment.content }}
                                                        </p>
                                                    </div>

                                                    <!-- Display replies if any -->
                                                    {% if comment.replies is not empty %}
                                                        <div class=\"d-flex flex-start mt-4\">
                                                            {% for reply in comment.replies %}
                                                                <a class=\"me-3\" href=\"#!\">
                                                                    <img class=\"rounded-circle shadow-1-strong\"
                                                                        src=\"{{ asset('uploads/avatars/' ~ reply.user.avatar) }}\" 
                                                                        alt=\"avatar\" width=\"65\" height=\"65\" />
                                                                </a>
                                                                <div class=\"flex-grow-1 flex-shrink-1\">
                                                                    <div>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <p class=\"mb-1\">
                                                                                {{ reply.user.username }} <span class=\"small\">- {{ reply.createdAt|date('Y-m-d H:i') }}</span>
                                                                            </p>
                                                                        </div>
                                                                        <p class=\"small mb-0\">
                                                                            {{ reply.content }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            {% endfor %}
                                                        </div>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                    <p class=\"text-center text-muted\">No comments yet. Be the first to comment!</p>
                                {% endfor %}

                                <!-- Add new comment form -->
                                <div class=\"d-flex flex-start mt-4\">
                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                        src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp\" 
                                        alt=\"avatar\" width=\"65\" height=\"65\" />
                                    <div class=\"flex-grow-1 flex-shrink-1\">
                                        <form method=\"post\" action=\"{{ path('add_comment', {'clubId': club.id}) }}\">
                                            <textarea class=\"form-control\" name=\"content\" placeholder=\"Write a comment...\" rows=\"3\"></textarea>
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        
        feedback.innerHTML = '';
        spinner.style.display = 'block';

        fetch('{{ path('application_submit_club', {'clubId': club.id}) }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({}) 
        })
        .then(response => response.json())
        .then(data => {
            spinner.style.display = 'none';

            feedback.innerHTML = `
                <div class=\"alert \${data.success ? 'alert-success' : 'alert-danger'} text-center\">
                    <i class=\"\${data.success ? 'fas fa-check-circle' : 'fas fa-exclamation-triangle'}\"></i> 
                    \${data.message}
                </div>`;
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none';

            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle\"></i> 
                    An error occurred. Please try again later.
                </div>`;
        });
    });
</script>
{% endblock %}
", "club/details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\details.html.twig");
    }
}
