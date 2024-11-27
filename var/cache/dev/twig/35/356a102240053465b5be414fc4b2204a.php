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

/* header.html.twig */
class __TwigTemplate_3ff006b093920432531b1f4d61310cd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        yield "<!-- Navbar Start -->
<div class=\"container-fluid p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light px-5\">
        <a href=\"#\" class=\"navbar-brand\">
            <h1 class=\"m-0 text-primary\"><i class=\"fa fa-graduation-cap me-2\"></i>EduPlus</h1>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link active\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#about\" class=\"nav-link\">À Propos</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#services\" class=\"nav-link\">Services</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#recruitements\" class=\"nav-link\">Recrutements</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#contact\" class=\"nav-link\">Contact</a>
                </li>
            </ul>
            <a href=\"#\" class=\"btn btn-primary ms-3\">Se Connecter</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Header Start -->
<div class=\"container-fluid bg-primary text-white text-center py-5\">
    <div class=\"container py-5\">
        <h1 class=\"display-4\">Bienvenue sur EduPlus</h1>
        <p class=\"lead mt-3\">La plateforme idéale pour découvrir et postuler à des opportunités de recrutement universitaire.</p>
        <a href=\"#recruitements\" class=\"btn btn-light btn-lg mt-4\">Explorer les Recrutements</a>
    </div>
</div>
<!-- Header End -->


<!-- Recruitements Section End -->



";
        // line 49
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  99 => 49,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar Start -->
<div class=\"container-fluid p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light px-5\">
        <a href=\"#\" class=\"navbar-brand\">
            <h1 class=\"m-0 text-primary\"><i class=\"fa fa-graduation-cap me-2\"></i>EduPlus</h1>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link active\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#about\" class=\"nav-link\">À Propos</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#services\" class=\"nav-link\">Services</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#recruitements\" class=\"nav-link\">Recrutements</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#contact\" class=\"nav-link\">Contact</a>
                </li>
            </ul>
            <a href=\"#\" class=\"btn btn-primary ms-3\">Se Connecter</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Header Start -->
<div class=\"container-fluid bg-primary text-white text-center py-5\">
    <div class=\"container py-5\">
        <h1 class=\"display-4\">Bienvenue sur EduPlus</h1>
        <p class=\"lead mt-3\">La plateforme idéale pour découvrir et postuler à des opportunités de recrutement universitaire.</p>
        <a href=\"#recruitements\" class=\"btn btn-light btn-lg mt-4\">Explorer les Recrutements</a>
    </div>
</div>
<!-- Header End -->


<!-- Recruitements Section End -->



{% block body %}{% endblock %}
", "header.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\header.html.twig");
    }
}
