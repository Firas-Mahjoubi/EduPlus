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

/* base.html.twig */
class __TwigTemplate_cd7ab637085438591a80aafad3fca7da extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"Club, Events, Community, Activities\">
    <meta name=\"description\" content=\"Explore our community clubs and events. Join us for exciting activities and connect with like-minded individuals.\">
    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
<<<<<<< HEAD

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 12
=======
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">
    
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KyZXEJ5m0Wf0R3tdw9JfL7cS5pP/2gX/xFnFbdM7eTSFwqV9Jt9FNB23VrT3PFAk\" crossorigin=\"anonymous\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
   
    
    <!-- Favicon -->
    <link href=\"";
        // line 18
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS Libraries -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/css/coreui.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/css/coreui.min.css\" rel=\"stylesheet\">

    <!-- Template Styles -->
    <link href=\"";
<<<<<<< HEAD
        // line 26
=======
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 44
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
<<<<<<< HEAD
        // line 27
=======
        // line 47
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "</head>

<body>
    ";
        // line 33
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 36
        yield "
    <main>
        ";
        // line 38
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 39
        yield "    </main>

    ";
<<<<<<< HEAD
        // line 41
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 44
        yield "
    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded back-to-top\">
        <i class=\"bi bi-arrow-up\"></i>
    </a>
=======
        // line 52
        yield from         $this->loadTemplate("header.html.twig", "base.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "    
    ";
        // line 54
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 56
        yield "    
 ";
        // line 57
        yield from         $this->loadTemplate("footer.html.twig", "base.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/js/coreui.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/js/coreui.bundle.min.js\"></script>


    <!-- Custom Scripts -->
    <script src=\"";
<<<<<<< HEAD
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 64
=======
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
     <script>
        \$(document).ready(function(){
            \$('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src=\"";
        // line 85
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 101
        yield "</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        yield "        ";
        yield from         $this->loadTemplate("header.html.twig", "base.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

<<<<<<< HEAD
    // line 38
=======
    // line 54
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
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

<<<<<<< HEAD
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 42
        yield "        ";
        yield from         $this->loadTemplate("footer.html.twig", "base.html.twig", 42)->unwrap()->yield($context);
        // line 43
=======
        // line 55
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 67
        yield "        <script>
            \$(document).ready(function() {
                \$('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });
            });

            // Initialize CoreUI components
            document.addEventListener('DOMContentLoaded', function() {
                const coreuiRatingElements = document.querySelectorAll('[data-coreui-toggle=\"rating\"]');
                coreuiRatingElements.forEach(function(element) {
                    new coreui.Rating(element);
                });
            });
        </script>
        <script>
  document.addEventListener(\"DOMContentLoaded\", function() {
    // Initialize CoreUI rating
    const ratings = document.querySelectorAll('[data-coreui-toggle=\"rating\"]');
    ratings.forEach(function(rating) {
      new coreui.Rating(rating);
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
        return "base.html.twig";
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
<<<<<<< HEAD
        return array (  306 => 67,  293 => 66,  282 => 43,  279 => 42,  266 => 41,  244 => 38,  233 => 35,  230 => 34,  217 => 33,  195 => 29,  172 => 9,  158 => 101,  156 => 66,  151 => 64,  147 => 63,  143 => 62,  139 => 61,  135 => 60,  117 => 44,  115 => 41,  111 => 39,  109 => 38,  105 => 36,  103 => 33,  98 => 30,  96 => 29,  91 => 27,  87 => 26,  70 => 12,  64 => 9,  54 => 1,);
=======
        return array (  256 => 55,  243 => 54,  232 => 12,  219 => 11,  196 => 6,  180 => 85,  160 => 68,  156 => 67,  152 => 66,  148 => 65,  144 => 64,  136 => 58,  134 => 57,  131 => 56,  129 => 54,  126 => 53,  124 => 52,  116 => 47,  110 => 44,  104 => 41,  100 => 40,  75 => 18,  68 => 13,  66 => 11,  58 => 6,  51 => 1,);
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"Club, Events, Community, Activities\">
    <meta name=\"description\" content=\"Explore our community clubs and events. Join us for exciting activities and connect with like-minded individuals.\">
    <title>{% block title %}Welcome!{% endblock %}</title>
<<<<<<< HEAD

=======
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free HTML Templates\" name=\"keywords\">
    <meta content=\"Free HTML Templates\" name=\"description\">
    
    {% block stylesheets %}
    {% endblock %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KyZXEJ5m0Wf0R3tdw9JfL7cS5pP/2gX/xFnFbdM7eTSFwqV9Jt9FNB23VrT3PFAk\" crossorigin=\"anonymous\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
   
    
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset('img/favicon.ico') }}\" />

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS Libraries -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/css/coreui.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/css/coreui.min.css\" rel=\"stylesheet\">

    <!-- Template Styles -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>

<body>
    {% block header %}
        {% include 'header.html.twig' %}
    {% endblock %}

    <main>
        {% block body %}{% endblock %}
    </main>

    {% block footer %}
        {% include 'footer.html.twig' %}
    {% endblock %}
<<<<<<< HEAD

=======
    
 {% include 'footer.html.twig' %}
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded back-to-top\">
        <i class=\"bi bi-arrow-up\"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/js/coreui.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/js/coreui.bundle.min.js\"></script>


    <!-- Custom Scripts -->
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>

    {% block scripts %}
        <script>
            \$(document).ready(function() {
                \$('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });
            });

            // Initialize CoreUI components
            document.addEventListener('DOMContentLoaded', function() {
                const coreuiRatingElements = document.querySelectorAll('[data-coreui-toggle=\"rating\"]');
                coreuiRatingElements.forEach(function(element) {
                    new coreui.Rating(element);
                });
            });
        </script>
        <script>
  document.addEventListener(\"DOMContentLoaded\", function() {
    // Initialize CoreUI rating
    const ratings = document.querySelectorAll('[data-coreui-toggle=\"rating\"]');
    ratings.forEach(function(rating) {
      new coreui.Rating(rating);
    });
  });
</script>

    {% endblock %}
</body>

</html>
", "base.html.twig", "C:\\Users\\ASUS\\Desktop\\eduplus1\\EduPlus\\templates\\base.html.twig");
    }
}
