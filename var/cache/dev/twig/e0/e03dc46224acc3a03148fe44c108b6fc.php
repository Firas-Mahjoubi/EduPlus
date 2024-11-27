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
    <!-- Card Container -->
    <div class=\"card shadow-lg rounded\">
        <!-- Header Section -->
        <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
            <h2 class=\"fw-bold\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
        </div>
        <!-- Body Section -->
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <!-- Image Section -->
                <div class=\"col-md-6 text-center mb-3\">
                    <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 14, $this->source); })()), "logo", [], "any", false, false, false, 14))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "\" 
                         class=\"img-fluid rounded shadow-sm border\" 
                         style=\"max-height: 300px;\">
                </div>
                <!-- Club Details and Apply Button -->
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary fw-bold\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                    <!-- Apply Button -->
                    <button id=\"applyButton\" class=\"btn btn-success btn-lg w-100 mt-4 d-flex align-items-center justify-content-center\">
                        <i class=\"fas fa-user-plus me-2\"></i> Apply for this Club
                    </button>
                    <!-- Loading Spinner -->
                    <div id=\"loadingSpinner\" class=\"text-center mt-3\" style=\"display: none;\">
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

<!-- JavaScript for Button -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        feedback.innerHTML = ''; // Clear previous feedback
        spinner.style.display = 'block'; // Show loading spinner

        // Fetch API Call
        fetch('";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("application_submit_club", ["clubId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
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
            // Feedback Handling
            if (data.success) {
                feedback.innerHTML = `
                    <div class=\"alert alert-success text-center\">
                        <i class=\"fas fa-check-circle me-2\"></i> \${data.message}
                    </div>`;
            } else {
                feedback.innerHTML = `
                    <div class=\"alert alert-danger text-center\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> \${data.message}
                    </div>`;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none'; // Hide spinner
            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i> An error occurred. Please try again later.
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
        return array (  135 => 49,  104 => 21,  100 => 20,  89 => 14,  79 => 7,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"container mt-5\">
    <!-- Card Container -->
    <div class=\"card shadow-lg rounded\">
        <!-- Header Section -->
        <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
            <h2 class=\"fw-bold\">{{ club.nom }}</h2>
        </div>
        <!-- Body Section -->
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <!-- Image Section -->
                <div class=\"col-md-6 text-center mb-3\">
                    <img src=\"{{ asset('uploads/logos/' ~ club.logo) }}\" alt=\"{{ club.nom }}\" 
                         class=\"img-fluid rounded shadow-sm border\" 
                         style=\"max-height: 300px;\">
                </div>
                <!-- Club Details and Apply Button -->
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary fw-bold\">{{ club.nom }}</h4>
                    <p class=\"text-muted\">{{ club.description }}</p>
                    <!-- Apply Button -->
                    <button id=\"applyButton\" class=\"btn btn-success btn-lg w-100 mt-4 d-flex align-items-center justify-content-center\">
                        <i class=\"fas fa-user-plus me-2\"></i> Apply for this Club
                    </button>
                    <!-- Loading Spinner -->
                    <div id=\"loadingSpinner\" class=\"text-center mt-3\" style=\"display: none;\">
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

<!-- JavaScript for Button -->
<script>
    document.getElementById('applyButton').addEventListener('click', function () {
        const feedback = document.getElementById('feedback');
        const spinner = document.getElementById('loadingSpinner');
        feedback.innerHTML = ''; // Clear previous feedback
        spinner.style.display = 'block'; // Show loading spinner

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
            // Feedback Handling
            if (data.success) {
                feedback.innerHTML = `
                    <div class=\"alert alert-success text-center\">
                        <i class=\"fas fa-check-circle me-2\"></i> \${data.message}
                    </div>`;
            } else {
                feedback.innerHTML = `
                    <div class=\"alert alert-danger text-center\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i> \${data.message}
                    </div>`;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            spinner.style.display = 'none'; // Hide spinner
            feedback.innerHTML = `
                <div class=\"alert alert-danger text-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i> An error occurred. Please try again later.
                </div>`;
        });
    });
</script>
{% endblock %}
", "club/details.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\club\\details.html.twig");
    }
}
