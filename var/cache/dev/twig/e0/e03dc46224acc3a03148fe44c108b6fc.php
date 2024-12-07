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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/details.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<div class=\"container mt-5\">
    <!-- Club Card -->
    <div class=\"card shadow-lg rounded overflow-hidden\">
        <!-- Card Header -->
        <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
            <h2 class=\"fw-bold mb-0\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
        </div>

        <!-- Card Body -->
        <div class=\"card-body\">
            <div class=\"row g-4 align-items-center\">
                <!-- Image Section -->
                <div class=\"col-lg-6 text-center\">
                    <img 
                        src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 16, $this->source); })()), "logo", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" 
                        alt=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "\" 
                        class=\"img-fluid rounded shadow-sm border\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <!-- Club Details Section -->
                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>

                    <!-- Apply Button -->
                    <button 
                        id=\"applyButton\" 
                        class=\"btn btn-success btn-lg w-100 d-flex align-items-center justify-content-center\">
                        <i class=\"fas fa-user-plus me-2\"></i> Apply for this Club
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
        <div id=\"feedback\" class=\"p-3\"></div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        
        // Clear previous feedback and show spinner
        feedback.innerHTML = '';
        spinner.style.display = 'block';

        // Fetch API Call
        fetch('";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_submit_club", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
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
            spinner.style.display = 'none'; // Hide spinner

            // Display feedback
            feedback.innerHTML = `
                <div class=\"alert \${data.success ? 'alert-success' : 'alert-danger'} text-center\">
                    <i class=\"\${data.success ? 'fas fa-check-circle' : 'fas fa-exclamation-triangle'} me-2\"></i> 
                    \${data.message}
                </div>`;
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none'; // Hide spinner

            // Display error message
            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i> 
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
    public function getDebugInfo(): array
    {
        return array (  150 => 63,  109 => 25,  105 => 24,  95 => 17,  91 => 16,  79 => 7,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"container mt-5\">
    <!-- Club Card -->
    <div class=\"card shadow-lg rounded overflow-hidden\">
        <!-- Card Header -->
        <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
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
                        class=\"img-fluid rounded shadow-sm border\" 
                        style=\"max-height: 300px; object-fit: contain;\">
                </div>

                <!-- Club Details Section -->
                <div class=\"col-lg-6\">
                    <h4 class=\"text-primary fw-bold\">{{ club.nom }}</h4>
                    <p class=\"text-muted\">{{ club.description }}</p>

                    <!-- Apply Button -->
                    <button 
                        id=\"applyButton\" 
                        class=\"btn btn-success btn-lg w-100 d-flex align-items-center justify-content-center\">
                        <i class=\"fas fa-user-plus me-2\"></i> Apply for this Club
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
        <div id=\"feedback\" class=\"p-3\"></div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        
        // Clear previous feedback and show spinner
        feedback.innerHTML = '';
        spinner.style.display = 'block';

        // Fetch API Call
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
            spinner.style.display = 'none'; // Hide spinner

            // Display feedback
            feedback.innerHTML = `
                <div class=\"alert \${data.success ? 'alert-success' : 'alert-danger'} text-center\">
                    <i class=\"\${data.success ? 'fas fa-check-circle' : 'fas fa-exclamation-triangle'} me-2\"></i> 
                    \${data.message}
                </div>`;
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none'; // Hide spinner

            // Display error message
            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i> 
                    An error occurred. Please try again later.
                </div>`;
        });
    });
</script>
{% endblock %}
", "club/details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\details.html.twig");
    }
}
