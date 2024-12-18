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
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
class __TwigTemplate_f3a616b11e132f4db45ba7ff8fdb0b1a extends Template
========
class __TwigTemplate_9ade03dba376ee879b834da98efd8f72 extends Template
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
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
       
            <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\" width=\"200px\">

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"fa fa-bars\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto py-0\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
========
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
        yield "\" class=\"nav-item nav-link\">Clubs</a>
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
        yield "\" class=\"nav-item nav-link\">Events</a>
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressources_list");
        yield "\" class=\"nav-item nav-link\">Ressources</a>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_all_user");
        yield "\" class=\"nav-item nav-link\">Recrutements</a>
            </div>

            <!-- User Profile Dropdown -->
            <!-- User Profile Dropdown -->
<div class=\"navbar-nav ms-auto\">
    ";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "profilePicture", [], "any", false, false, false, 26)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "profilePicture", [], "any", false, false, false, 26)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"))), "html", null, true);
========
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "profilePicture", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "profilePicture", [], "any", false, false, false, 25))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"), "html", null, true)));
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
            yield "\" 
                alt=\"Profile Picture\" 
                class=\"rounded-circle\" 
                width=\"50\" 
                height=\"50\">
           <span class=\"ms-2\">";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "prenom", [], "any", false, false, false, 31), "html", null, true);
========
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
            yield "</span>
           

            </a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
            yield "\">My Profile</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 37
========
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events");
            yield "\">My Profile</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 36
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
            </ul>
        </div>
    ";
        } else {
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
            // line 41
========
            // line 40
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary py-2 px-4 ms-3\">Login</a>
    ";
        }
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 43
========
        // line 42
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
        yield "</div>

        </div>
    </nav>

    <!-- Carousel Section (unchanged) -->
    <div id=\"header-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"w-100\" src=\"";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 52
========
        // line 51
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/esprit1.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"p-3\" style=\"max-width: 900px;\">
                        <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome to ESPRIT</h5>
                        <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Get ready to join our club</h1>
                        ";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 59
========
        // line 58
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
        yield "                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"w-100\" src=\"";
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 63
========
        // line 62
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/esprit2.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"p-3\" style=\"max-width: 900px;\">
                        <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome to ESPRIT</h5>
                        <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Get ready to join our club</h1>
                       
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
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        // line 103
========
        // line 102
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
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
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
        return array (  197 => 103,  154 => 63,  148 => 59,  140 => 52,  129 => 43,  123 => 41,  116 => 37,  112 => 36,  102 => 31,  94 => 26,  90 => 24,  88 => 23,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  56 => 6,  49 => 1,);
========
        return array (  196 => 102,  153 => 62,  147 => 58,  139 => 51,  128 => 42,  122 => 40,  115 => 36,  111 => 35,  101 => 30,  93 => 25,  89 => 23,  87 => 22,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  49 => 1,);
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar & Carousel Start -->
<div class=\"container-fluid position-relative p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0\">
        <a href=\"index.html\" class=\"navbar-brand p-0\">
       
            <img src=\"{{ asset('img/logo1.png') }}\" alt=\"Logo\" class=\"logo\" width=\"200px\">

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"fa fa-bars\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto py-0\">
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"{{ path('club_index') }}\" class=\"nav-item nav-link\">Clubs</a>
                <a href=\"{{ path('app_g_events') }}\" class=\"nav-item nav-link\">Events</a>
<<<<<<<< HEAD:var/cache/dev/twig/19/19a88dc1002b606c5696bc5e213fc1ae.php
                <a href=\"{{ path('ressources_list') }}\" class=\"nav-item nav-link\">Ressources</a>
========
                <a href=\"{{ path('app_g_ressourcess') }}\" class=\"nav-item nav-link\">Ressources</a>
                    <a href=\"{{ path('app_show_all_user') }}\" class=\"nav-item nav-link\">Recrutements</a>
>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/twig/88/88f069b8850d9330390d26fa78725e0e.php
            </div>

            <!-- User Profile Dropdown -->
            <!-- User Profile Dropdown -->
<div class=\"navbar-nav ms-auto\">
    {% if app.user %}
        <div class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"{{ app.user.profilePicture ? asset('uploads/profilePictures/' ~ app.user.profilePicture) : asset('uploads/profilePictures/default.png') }}\" 
                alt=\"Profile Picture\" 
                class=\"rounded-circle\" 
                width=\"50\" 
                height=\"50\">
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
                <img class=\"w-100\" src=\"{{ asset('img/esprit1.jpg') }}\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"p-3\" style=\"max-width: 900px;\">
                        <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome to ESPRIT</h5>
                        <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Get ready to join our club</h1>
                        {# <a href=\"quote.html\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Free Quote</a>
                        <a href=\"\" class=\"btn btn-outline-light py-md-3 px-md-5 animated slideInRight\">Contact Us</a> #}
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"w-100\" src=\"{{ asset('img/esprit2.jpg') }}\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"p-3\" style=\"max-width: 900px;\">
                        <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome to ESPRIT</h5>
                        <h1 class=\"display-1 text-white mb-md-4 animated zoomIn\">Get ready to join our club</h1>
                       
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
", "header.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\header.html.twig");
    }
}
