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

/* footer.html.twig */
class __TwigTemplate_51b4e4f4c03866ea9fe9b3465cf48aed extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "<!-- Footer Start -->
<footer class=\"bg-dark text-light mt-5\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <!-- About Section -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h4 class=\"text-primary\">EduPlus</h4>
                <p>\"Transformez vos idées en réalité avec nous. Nous sommes là pour vous accompagner dans votre parcours, en offrant des solutions innovantes et adaptées à vos besoins.\".</p>
                <form>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Your Email\">
                        <button class=\"btn btn-primary\">Sign Up</button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h5>Contact Us</h5>
                <p><i class=\"bi bi-geo-alt-fill text-primary me-2\"></i>ESPRIT,Ariana,Tunis</p>
                <p><i class=\"bi bi-envelope-fill text-primary me-2\"></i>EduPlus@esprit.tn</p>
                <p><i class=\"bi bi-phone-fill text-primary me-2\"></i>+216 72 393 855</p>
                <div class=\"mt-2\">
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h5>Quick Links</h5>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Home</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> About Us</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Services</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Recruitements</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Contact</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class=\"bg-primary text-center py-3\">
        <p class=\"mb-0\">&copy; Your Site Name. All rights reserved. Designed by <a href=\"https://htmlcodex.com\" class=\"text-white text-decoration-none\">HTML Codex</a>.</p>
    </div>
</footer>
<!-- Footer End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Footer Start -->
<footer class=\"bg-dark text-light mt-5\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <!-- About Section -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h4 class=\"text-primary\">EduPlus</h4>
                <p>\"Transformez vos idées en réalité avec nous. Nous sommes là pour vous accompagner dans votre parcours, en offrant des solutions innovantes et adaptées à vos besoins.\".</p>
                <form>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Your Email\">
                        <button class=\"btn btn-primary\">Sign Up</button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h5>Contact Us</h5>
                <p><i class=\"bi bi-geo-alt-fill text-primary me-2\"></i>ESPRIT,Ariana,Tunis</p>
                <p><i class=\"bi bi-envelope-fill text-primary me-2\"></i>EduPlus@esprit.tn</p>
                <p><i class=\"bi bi-phone-fill text-primary me-2\"></i>+216 72 393 855</p>
                <div class=\"mt-2\">
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm me-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-outline-light btn-sm\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <h5>Quick Links</h5>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Home</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> About Us</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Services</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Recruitements</a></li>
                    <li><a href=\"#\" class=\"text-light text-decoration-none\"><i class=\"bi bi-chevron-right\"></i> Contact</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class=\"bg-primary text-center py-3\">
        <p class=\"mb-0\">&copy; Your Site Name. All rights reserved. Designed by <a href=\"https://htmlcodex.com\" class=\"text-white text-decoration-none\">HTML Codex</a>.</p>
    </div>
</footer>
<!-- Footer End -->
", "footer.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\footer.html.twig");
    }
}
