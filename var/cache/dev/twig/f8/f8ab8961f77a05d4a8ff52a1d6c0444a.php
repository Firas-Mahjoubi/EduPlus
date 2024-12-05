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

/* base_backoffice.html.twig */
class __TwigTemplate_f3f4b4d02908605666e60a4d97a85382 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_backoffice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_backoffice.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\" />
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Fonts and icons -->
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/webfont/webfont.min.js"), "html", null, true);
        yield "\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/public/css/fonts.min.css"), "html", null, true);
        yield "\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <!-- CSS Files -->
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/kaiadmin.min.css"), "html", null, true);
        yield "\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/public/css/demo.css"), "html", null, true);
        yield "\" />
  </head>
  <body>
    <div class=\"wrapper\">
      ";
        // line 37
        yield from         $this->loadTemplate("sidebar.html.twig", "base_backoffice.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "
      <div class=\"main-panel\">


        <!-- Navbar Header -->
        <nav class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\">
          <div class=\"container-fluid\">
            <nav class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\">
              <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                  <button type=\"submit\" class=\"btn btn-search pe-1\">
                    <i class=\"fa fa-search search-icon\"></i>
                  </button>
                </div>
                <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
              </div>
            </nav>
            <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
              <li class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\">
                <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                  <i class=\"fa fa-search\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                  <form class=\"navbar-left navbar-form nav-search\">
                    <div class=\"input-group\">
                      <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
                    </div>
                  </form>
                </ul>
              </li>
              <li class=\"nav-item topbar-user dropdown hidden-caret\">
                <a class=\"dropdown-toggle profile-pic\" data-bs-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                  <div class=\"avatar-sm\">
                    <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "profilePicture", [], "any", false, false, false, 71)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "profilePicture", [], "any", false, false, false, 71)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"))), "html", null, true);
        yield "\" alt=\"Profile Picture\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                  </div>
                  <span class=\"profile-username\">
                    <span class=\"fw-bold\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "prenom", [], "any", false, false, false, 74), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true);
        yield "</span>
                  </span>
                </a>
                <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                  <div class=\"dropdown-user-scroll scrollbar-outer\">
                    <li>
                      <div class=\"user-box\">
                        <div class=\"avatar-lg\">
                          <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "profilePicture", [], "any", false, false, false, 82)) ? (("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "profilePicture", [], "any", false, false, false, 82))) : ("img/profile.jpg"))), "html", null, true);
        yield "\" alt=\"image profile\" class=\"avatar-img rounded\" />
                        </div>
                        <div class=\"u-text\">
                          <h4>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
        yield "</h4>
                          <p class=\"text-muted\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "email", [], "any", false, false, false, 86), "html", null, true);
        yield "</p>
                          <a href=\"profile.html\" class=\"btn btn-xs btn-secondary btn-sm\">View Profile</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">My Profile</a>
                      <a class=\"dropdown-item\" href=\"#\">My Balance</a>
                      <a class=\"dropdown-item\" href=\"#\">Inbox</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Account Setting</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->

        <div class=\"container\">
          <div class=\"page-inner\">
            <div class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\">
              ";
        // line 112
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 114
        yield "            </div>
          </div>
        </div>

        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://www.themekita.com\">ThemeKita</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Help</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Licenses</a></li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024 by EduPlus
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <div class=\"switcher\">
            <div class=\"switch-block\">
              <h4>Logo Header</h4>
              <div class=\"btnSwitch\">
                <button type=\"button\" class=\"selected changeLogoHeaderColor\" data-color=\"dark\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"blue\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"purple\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"light-blue\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"green\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"orange\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"red\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"white\"></button>
                <br />
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"dark2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"blue2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"purple2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"light-blue2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"green2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"orange2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"red2\"></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\"><i class=\"icon-settings\"></i></div>
      </div>

    </div>
    <!-- Core JS Files -->
    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/kitajs.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/func.js"), "html", null, true);
        yield "\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield "              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_backoffice.html.twig";
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
        return array (  304 => 113,  291 => 112,  276 => 171,  272 => 170,  268 => 169,  264 => 168,  260 => 167,  205 => 114,  203 => 112,  174 => 86,  170 => 85,  164 => 82,  151 => 74,  145 => 71,  110 => 38,  108 => 37,  101 => 33,  96 => 31,  92 => 30,  88 => 29,  77 => 21,  63 => 10,  57 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\" />
    <link rel=\"icon\" href=\"{{ asset('/img/kaiadmin/favicon.ico') }}\" type=\"image/x-icon\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Fonts and icons -->
    <script src=\"{{ asset('/js/plugin/webfont/webfont.min.js') }}\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"{{ asset('assets/public/css/fonts.min.css') }}\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <!-- CSS Files -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/kaiadmin.min.css') }}\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/public/css/demo.css') }}\" />
  </head>
  <body>
    <div class=\"wrapper\">
      {% include 'sidebar.html.twig' %}

      <div class=\"main-panel\">


        <!-- Navbar Header -->
        <nav class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\">
          <div class=\"container-fluid\">
            <nav class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\">
              <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                  <button type=\"submit\" class=\"btn btn-search pe-1\">
                    <i class=\"fa fa-search search-icon\"></i>
                  </button>
                </div>
                <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
              </div>
            </nav>
            <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
              <li class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\">
                <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                  <i class=\"fa fa-search\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                  <form class=\"navbar-left navbar-form nav-search\">
                    <div class=\"input-group\">
                      <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
                    </div>
                  </form>
                </ul>
              </li>
              <li class=\"nav-item topbar-user dropdown hidden-caret\">
                <a class=\"dropdown-toggle profile-pic\" data-bs-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                  <div class=\"avatar-sm\">
                    <img src=\"{{ app.user.profilePicture ? asset('uploads/profilePictures/' ~ app.user.profilePicture) : asset('uploads/profilePictures/default.png') }}\" alt=\"Profile Picture\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                  </div>
                  <span class=\"profile-username\">
                    <span class=\"fw-bold\">{{ app.user.prenom }} {{ app.user.nom }}</span>
                  </span>
                </a>
                <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                  <div class=\"dropdown-user-scroll scrollbar-outer\">
                    <li>
                      <div class=\"user-box\">
                        <div class=\"avatar-lg\">
                          <img src=\"{{ asset(app.user.profilePicture ? 'uploads/profilePictures/' ~ app.user.profilePicture : 'img/profile.jpg') }}\" alt=\"image profile\" class=\"avatar-img rounded\" />
                        </div>
                        <div class=\"u-text\">
                          <h4>{{ app.user.nom }}</h4>
                          <p class=\"text-muted\">{{ app.user.email }}</p>
                          <a href=\"profile.html\" class=\"btn btn-xs btn-secondary btn-sm\">View Profile</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">My Profile</a>
                      <a class=\"dropdown-item\" href=\"#\">My Balance</a>
                      <a class=\"dropdown-item\" href=\"#\">Inbox</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Account Setting</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->

        <div class=\"container\">
          <div class=\"page-inner\">
            <div class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\">
              {% block body %}
              {% endblock %}
            </div>
          </div>
        </div>

        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://www.themekita.com\">ThemeKita</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Help</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Licenses</a></li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024 by EduPlus
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <div class=\"switcher\">
            <div class=\"switch-block\">
              <h4>Logo Header</h4>
              <div class=\"btnSwitch\">
                <button type=\"button\" class=\"selected changeLogoHeaderColor\" data-color=\"dark\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"blue\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"purple\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"light-blue\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"green\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"orange\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"red\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"white\"></button>
                <br />
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"dark2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"blue2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"purple2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"light-blue2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"green2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"orange2\"></button>
                <button type=\"button\" class=\"changeLogoHeaderColor\" data-color=\"red2\"></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\"><i class=\"icon-settings\"></i></div>
      </div>

    </div>
    <!-- Core JS Files -->
    <script src=\"{{ asset('/js/core/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('/js/core/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('/js/kitajs.min.js') }}\"></script>
    <script src=\"{{ asset('/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('/js/func.js') }}\"></script>
  </body>
</html>
", "base_backoffice.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\base_backoffice.html.twig");
    }
}
