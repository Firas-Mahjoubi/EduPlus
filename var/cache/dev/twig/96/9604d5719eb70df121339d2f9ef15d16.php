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
class __TwigTemplate_66d710576358a136abda06e54a25e3b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "  <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light mt-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4\">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <h1 class=\"m-0 text-white\"><i class=\"fa fa-user-tie me-2\"></i>Startup</h1>
                        </a>
                        <p class=\"mt-3 mb-4\">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                        <form action=\"\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control border-white p-3\" placeholder=\"Your Email\">
                                <button class=\"btn btn-dark\">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-6\">
                    <div class=\"row gx-5\">
                        <div class=\"col-lg-4 col-md-12 pt-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Get In Touch</h3>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-geo-alt text-primary me-2\"></i>
                                <p class=\"mb-0\">123 Street, New York, USA</p>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-envelope-open text-primary me-2\"></i>
                                <p class=\"mb-0\">info@example.com</p>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-telephone text-primary me-2\"></i>
                                <p class=\"mb-0\">+012 345 67890</p>
                            </div>
                            <div class=\"d-flex mt-4\">
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Quick Links</h3>
                            </div>
                            <div class=\"link-animated d-flex flex-column justify-content-start\">
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Home</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>About Us</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Our Services</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Meet The Team</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Latest Blog</a>
                                <a class=\"text-light\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Popular Links</h3>
                            </div>
                            <div class=\"link-animated d-flex flex-column justify-content-start\">
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Home</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>About Us</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Our Services</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Meet The Team</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Latest Blog</a>
                                <a class=\"text-light\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid text-white\" style=\"background: #061429;\">
        <div class=\"container text-center\">
            <div class=\"row justify-content-end\">
                <div class=\"col-lg-8 col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 75px;\">
                        <p class=\"mb-0\">&copy; <a class=\"text-white border-bottom\" href=\"#\">Your Site Name</a>. All Rights Reserved. 
\t\t\t\t\t\t
\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\tDesigned by <a class=\"text-white border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a></p>
                        <br>Distributed By: <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    ";
        // line 91
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
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  141 => 91,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("  <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light mt-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4\">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <h1 class=\"m-0 text-white\"><i class=\"fa fa-user-tie me-2\"></i>Startup</h1>
                        </a>
                        <p class=\"mt-3 mb-4\">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                        <form action=\"\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control border-white p-3\" placeholder=\"Your Email\">
                                <button class=\"btn btn-dark\">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-6\">
                    <div class=\"row gx-5\">
                        <div class=\"col-lg-4 col-md-12 pt-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Get In Touch</h3>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-geo-alt text-primary me-2\"></i>
                                <p class=\"mb-0\">123 Street, New York, USA</p>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-envelope-open text-primary me-2\"></i>
                                <p class=\"mb-0\">info@example.com</p>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <i class=\"bi bi-telephone text-primary me-2\"></i>
                                <p class=\"mb-0\">+012 345 67890</p>
                            </div>
                            <div class=\"d-flex mt-4\">
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square me-2\" href=\"#\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                                <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Quick Links</h3>
                            </div>
                            <div class=\"link-animated d-flex flex-column justify-content-start\">
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Home</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>About Us</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Our Services</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Meet The Team</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Latest Blog</a>
                                <a class=\"text-light\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5\">
                            <div class=\"section-title section-title-sm position-relative pb-3 mb-4\">
                                <h3 class=\"text-light mb-0\">Popular Links</h3>
                            </div>
                            <div class=\"link-animated d-flex flex-column justify-content-start\">
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Home</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>About Us</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Our Services</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Meet The Team</a>
                                <a class=\"text-light mb-2\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Latest Blog</a>
                                <a class=\"text-light\" href=\"#\"><i class=\"bi bi-arrow-right text-primary me-2\"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid text-white\" style=\"background: #061429;\">
        <div class=\"container text-center\">
            <div class=\"row justify-content-end\">
                <div class=\"col-lg-8 col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"height: 75px;\">
                        <p class=\"mb-0\">&copy; <a class=\"text-white border-bottom\" href=\"#\">Your Site Name</a>. All Rights Reserved. 
\t\t\t\t\t\t
\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\tDesigned by <a class=\"text-white border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a></p>
                        <br>Distributed By: <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
<<<<<<< HEAD
    {% block body %}{% endblock %}", "footer.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\footer.html.twig");
=======
    {% block body %}{% endblock %}", "footer.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\footer.html.twig");
>>>>>>> fe50365a75a62392ad470cff67b9a23f73defa9c
    }
}
