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
        yield "
    <!-- Navbar & Carousel Start -->
    <div class=\"container-fluid position-relative p-0\">
        <nav class=\"navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0\">
            <a href=\"index.html\" class=\"navbar-brand p-0\">
                <h1 class=\"m-0\"><i class=\"fa fa-user-tie me-2\"></i>EduPlus</h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                    <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blog</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"blog.html\" class=\"dropdown-item\">Blog Grid</a>
                            <a href=\"detail.html\" class=\"dropdown-item\">Blog Detail</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"price.html\" class=\"dropdown-item\">Pricing Plan</a>
                            <a href=\"feature.html\" class=\"dropdown-item\">Our features</a>
                            <a href=\"team.html\" class=\"dropdown-item\">Team Members</a>
                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"quote.html\" class=\"dropdown-item\">Free Quote</a>
                        </div>
                    </div>
                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <butaton type=\"button\" class=\"btn text-primary ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fa fa-search\"></i></butaton>
                <a href=\"https://htmlcodex.com/startup-company-website-template\" class=\"btn btn-primary py-2 px-4 ms-3\">button</a>
            </div>
        </nav>

        <div id=\"header-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-1.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Creative & Innovative</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Creative & Innovative Digital Solution</h1>
                            <a href=\"quote.html\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Free Quote</a>
                            <a href=\"\" class=\"btn btn-outline-light py-md-3 px-md-5 animated slideInRight\">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Creative & Innovative</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Creative & Innovative Digital Solution</h1>
                            <a href=\"quote.html\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Free Quote</a>
                            <a href=\"\" class=\"btn btn-outline-light py-md-3 px-md-5 animated slideInRight\">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\" style=\"background: rgba(9, 30, 62, .7);\">
                <div class=\"modal-header border-0\">
                    <button type=\"button\" class=\"btn bg-white btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body d-flex align-items-center justify-content-center\">
                    <div class=\"input-group\" style=\"max-width: 600px;\">
                        <input type=\"text\" class=\"form-control bg-transparent border-primary p-3\" placeholder=\"Type search keyword\">
                        <button class=\"btn btn-primary px-4\"><i class=\"bi bi-search\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

";
        // line 98
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  154 => 98,  107 => 54,  93 => 43,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    <!-- Navbar & Carousel Start -->
    <div class=\"container-fluid position-relative p-0\">
        <nav class=\"navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0\">
            <a href=\"index.html\" class=\"navbar-brand p-0\">
                <h1 class=\"m-0\"><i class=\"fa fa-user-tie me-2\"></i>EduPlus</h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                    <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blog</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"blog.html\" class=\"dropdown-item\">Blog Grid</a>
                            <a href=\"detail.html\" class=\"dropdown-item\">Blog Detail</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"price.html\" class=\"dropdown-item\">Pricing Plan</a>
                            <a href=\"feature.html\" class=\"dropdown-item\">Our features</a>
                            <a href=\"team.html\" class=\"dropdown-item\">Team Members</a>
                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"quote.html\" class=\"dropdown-item\">Free Quote</a>
                        </div>
                    </div>
                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <butaton type=\"button\" class=\"btn text-primary ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fa fa-search\"></i></butaton>
                <a href=\"https://htmlcodex.com/startup-company-website-template\" class=\"btn btn-primary py-2 px-4 ms-3\">button</a>
            </div>
        </nav>

        <div id=\"header-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"{{asset('img/carousel-1.jpg')}}\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Creative & Innovative</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Creative & Innovative Digital Solution</h1>
                            <a href=\"quote.html\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Free Quote</a>
                            <a href=\"\" class=\"btn btn-outline-light py-md-3 px-md-5 animated slideInRight\">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"{{asset('img/carousel-2.jpg')}}\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"p-3\" style=\"max-width: 900px;\">
                            <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Creative & Innovative</h5>
                            <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Creative & Innovative Digital Solution</h1>
                            <a href=\"quote.html\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Free Quote</a>
                            <a href=\"\" class=\"btn btn-outline-light py-md-3 px-md-5 animated slideInRight\">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\" style=\"background: rgba(9, 30, 62, .7);\">
                <div class=\"modal-header border-0\">
                    <button type=\"button\" class=\"btn bg-white btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body d-flex align-items-center justify-content-center\">
                    <div class=\"input-group\" style=\"max-width: 600px;\">
                        <input type=\"text\" class=\"form-control bg-transparent border-primary p-3\" placeholder=\"Type search keyword\">
                        <button class=\"btn btn-primary px-4\"><i class=\"bi bi-search\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

<<<<<<< HEAD
{% block body %}{% endblock %}", "header.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\header.html.twig");
=======
{% block body %}{% endblock %}", "header.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\header.html.twig");
>>>>>>> fe50365a75a62392ad470cff67b9a23f73defa9c
    }
}
