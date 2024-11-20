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
        yield "<!-- Navbar & Carousel Start -->
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
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link\">About</a>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link\">Services</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blog</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Blog Grid</a>
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Blog Detail</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Pricing Plan</a>
                        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Our Features</a>
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Team Members</a>
                        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"dropdown-item\">Free Quote</a>
                    </div>
                </div>
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link\">Contact</a>
            </div>

            <!-- User Profile Dropdown -->
            <!-- User Profile Dropdown -->
<div class=\"navbar-nav ms-auto\">
    ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            yield "        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <!-- Display user profile picture or default fallback -->
                <img src=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "profilePicture", [], "any", false, false, false, 42)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "profilePicture", [], "any", false, false, false, 42)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-profile.png"))), "html", null, true);
            yield "\" 
                     alt=\"Profile Picture\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                <span class=\"ms-2\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
            yield "</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
            yield "\">My Profile</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
            </ul>
        </div>
    ";
        } else {
            // line 52
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary py-2 px-4 ms-3\">Login</a>
    ";
        }
        // line 54
        yield "</div>

        </div>
    </nav>

    <!-- Carousel Section (unchanged) -->
    <div id=\"header-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"w-100\" src=\"";
        // line 63
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
        // line 74
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
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide=\"next\">
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
        // line 115
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
        return array (  227 => 115,  183 => 74,  169 => 63,  158 => 54,  152 => 52,  145 => 48,  141 => 47,  133 => 44,  128 => 42,  123 => 39,  121 => 38,  112 => 32,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  81 => 19,  77 => 18,  70 => 14,  66 => 13,  62 => 12,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar & Carousel Start -->
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
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link\">About</a>
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link\">Services</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blog</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Blog Grid</a>
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Blog Detail</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Pricing Plan</a>
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Our Features</a>
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Team Members</a>
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"{{ path('app_g_events') }}\" class=\"dropdown-item\">Free Quote</a>
                    </div>
                </div>
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link\">Contact</a>
            </div>

            <!-- User Profile Dropdown -->
            <!-- User Profile Dropdown -->
<div class=\"navbar-nav ms-auto\">
    {% if app.user %}
        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <!-- Display user profile picture or default fallback -->
                <img src=\"{{ app.user.profilePicture ? asset('uploads/profile_pictures/' ~ app.user.profilePicture) : asset('img/default-profile.png') }}\" 
                     alt=\"Profile Picture\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                <span class=\"ms-2\">{{ app.user.nom }} {{ app.user.prenom }}</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                <li><a class=\"dropdown-item\" href=\"{{ path('app_g_events') }}\">My Profile</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>
            </ul>
        </div>
    {% else %}
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary py-2 px-4 ms-3\">Login</a>
    {% endif %}
</div>

        </div>
    </nav>

    <!-- Carousel Section (unchanged) -->
    <div id=\"header-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"w-100\" src=\"{{ asset('img/carousel-1.jpg') }}\" alt=\"Image\">
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
                <img class=\"w-100\" src=\"{{ asset('img/carousel-2.jpg') }}\" alt=\"Image\">
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
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\" data-bs-slide=\"next\">
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

{% block body %}{% endblock %}
", "header.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\header.html.twig");
    }
}
