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
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
     href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/kaiadmin/favicon.ico  "), "html", null, true);
        yield "\"
      type=\"image/x-icon\"
    />
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
</head>
    <!-- Fonts and icons -->
    
    <script src=\"";
        // line 19
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
          urls: [\"assets/css/fonts.min.css\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.min.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/kaiadmin.min.css"), "html", null, true);
        yield "\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    
  
  </head>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\"/>
  </head>
  <body>
    <div class=\"wrapper\">
     
      ";
        // line 53
        yield from         $this->loadTemplate("/sidebar.html.twig", "base_backoffice.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "
      <div class=\"main-panel\">
        <div class=\"main-header\">
          <div class=\"main-header-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
              <a href=\"index.html\" class=\"logo\">
                <img
                src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                  alt=\"navbar brand\"
                  class=\"navbar-brand\"
                  height=\"20\"
                />
              </a>
              <div class=\"nav-toggle\">
                <button class=\"btn btn-toggle toggle-sidebar\">
                  <i class=\"gg-menu-right\"></i>
                </button>
                <button class=\"btn btn-toggle sidenav-toggler\">
                  <i class=\"gg-menu-left\"></i>
                </button>
              </div>
              <button class=\"topbar-toggler more\">
                <i class=\"gg-more-vertical-alt\"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
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
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "profilePicture", [], "any", false, false, false, 112)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profilePictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "profilePicture", [], "any", false, false, false, 112)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/profilePictures/default.png"))), "html", null, true);
        yield "\" 
                    alt=\"Profile Picture\" 
                    class=\"rounded-circle\" 
                    width=\"40\" 
                    height=\"40\">                    </div>
                  <span class=\"profile-username\">
                      <span class=\"fw-bold\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "prenom", [], "any", false, false, false, 118), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "nom", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
                  </span>
              </a>
              <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                  <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                          <div class=\"user-box\">
                              <div class=\"avatar-lg\">
                                  <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "profilePicture", [], "any", false, false, false, 126)) ? (("/uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "profilePicture", [], "any", false, false, false, 126))) : ("img/profile.jpg"))), "html", null, true);
        yield "\" alt=\"image profile\" class=\"avatar-img rounded\" />
                              </div>
                              <div class=\"u-text\">
                                  <h4>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "nom", [], "any", false, false, false, 129), "html", null, true);
        yield "</h4>
                                  <p class=\"text-muted\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "email", [], "any", false, false, false, 130), "html", null, true);
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

        </div>

        <div class=\"container\">
          <div class=\"page-inner\">
            <div
              class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\"
            >
            ";
        // line 160
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 162
        yield "          </div>
          </div>
        </div>

        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"http://www.themekita.com\">
                    ThemeKita
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Help </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024 by EduPlus
            </div>
            <div>
              
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
                <button
                  type=\"button\"
                  class=\"selected changeLogoHeaderColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Navbar Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeTopBarColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Sidebar</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"white\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeSideBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"dark2\"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\">
          <i class=\"icon-settings\"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    
    <script src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/bootstrap.min.js"), "html", null, true);
        yield "\" ></script>

    <!-- jQuery Scrollbar -->
    <script src=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- Chart JS -->
    <script src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- jQuery Sparkline -->
    <script src=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        yield "\" ></script>
  

    <!-- Chart Circle -->
    <script src=\"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\" ></script>
 

    <!-- Datatables -->
    <script src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- Bootstrap Notify -->
    <script src=\"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\" ></script>
   

    <!-- jQuery Vector Maps -->
    <script src=\"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jsvectormap/jsvectormap.min.js"), "html", null, true);
        yield "\" ></script>
    <script src=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jsvectormap/world.js"), "html", null, true);
        yield "\" ></script>


    <!-- Sweet Alert -->
    <script src=\"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\" ></script>
 

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/kaiadmin.min.js"), "html", null, true);
        yield "\" ></script>
    
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/setting-demo.js"), "html", null, true);
        yield "\" ></script>
    <script src=\"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/demo.js"), "html", null, true);
        yield "\" ></script>
    <script>
      \$(\"#lineChart\").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#177dff\",
        fillColor: \"rgba(23, 125, 255, 0.14)\",
      });

      \$(\"#lineChart2\").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#f3545d\",
        fillColor: \"rgba(243, 84, 93, .14)\",
      });

      \$(\"#lineChart3\").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#ffa534\",
        fillColor: \"rgba(255, 165, 52, .14)\",
      });
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "            ";
        
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
        return array (  623 => 161,  610 => 160,  567 => 432,  563 => 431,  557 => 428,  550 => 424,  543 => 420,  539 => 419,  532 => 415,  525 => 411,  518 => 407,  511 => 403,  504 => 399,  497 => 395,  491 => 392,  487 => 391,  483 => 390,  253 => 162,  251 => 160,  218 => 130,  214 => 129,  208 => 126,  195 => 118,  186 => 112,  133 => 62,  123 => 54,  121 => 53,  113 => 48,  103 => 41,  99 => 40,  95 => 39,  72 => 19,  62 => 12,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
     href=\"{{ asset('/img/kaiadmin/favicon.ico  ') }}\"
      type=\"image/x-icon\"
    />
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
</head>
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
          urls: [\"assets/css/fonts.min.css\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/kaiadmin.min.css') }}\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    
  
  </head>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\"/>
  </head>
  <body>
    <div class=\"wrapper\">
     
      {% include '/sidebar.html.twig' %}

      <div class=\"main-panel\">
        <div class=\"main-header\">
          <div class=\"main-header-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
              <a href=\"index.html\" class=\"logo\">
                <img
                src=\"{{ asset('/img/kaiadmin/logo_light.svg') }}\"
                  alt=\"navbar brand\"
                  class=\"navbar-brand\"
                  height=\"20\"
                />
              </a>
              <div class=\"nav-toggle\">
                <button class=\"btn btn-toggle toggle-sidebar\">
                  <i class=\"gg-menu-right\"></i>
                </button>
                <button class=\"btn btn-toggle sidenav-toggler\">
                  <i class=\"gg-menu-left\"></i>
                </button>
              </div>
              <button class=\"topbar-toggler more\">
                <i class=\"gg-more-vertical-alt\"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
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
                    <img src=\"{{ app.user.profilePicture ? asset('uploads/profilePictures/' ~ app.user.profilePicture) : asset('uploads/profilePictures/default.png') }}\" 
                    alt=\"Profile Picture\" 
                    class=\"rounded-circle\" 
                    width=\"40\" 
                    height=\"40\">                    </div>
                  <span class=\"profile-username\">
                      <span class=\"fw-bold\">{{ user.prenom }} {{ user.nom }}</span>
                  </span>
              </a>
              <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                  <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                          <div class=\"user-box\">
                              <div class=\"avatar-lg\">
                                  <img src=\"{{ asset(user.profilePicture ? '/uploads/images/' ~ user.profilePicture : 'img/profile.jpg') }}\" alt=\"image profile\" class=\"avatar-img rounded\" />
                              </div>
                              <div class=\"u-text\">
                                  <h4>{{ user.nom }}</h4>
                                  <p class=\"text-muted\">{{ user.email }}</p>
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

        </div>

        <div class=\"container\">
          <div class=\"page-inner\">
            <div
              class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\"
            >
            {% block body %}
            {% endblock %}
          </div>
          </div>
        </div>

        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"http://www.themekita.com\">
                    ThemeKita
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Help </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class=\"copyright\">
              2024 by EduPlus
            </div>
            <div>
              
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
                <button
                  type=\"button\"
                  class=\"selected changeLogoHeaderColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeLogoHeaderColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Navbar Header</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeTopBarColor\"
                  data-color=\"white\"
                ></button>
                <br />
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"dark2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"purple2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"light-blue2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"green2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"orange2\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeTopBarColor\"
                  data-color=\"red2\"
                ></button>
              </div>
            </div>
            <div class=\"switch-block\">
              <h4>Sidebar</h4>
              <div class=\"btnSwitch\">
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"white\"
                ></button>
                <button
                  type=\"button\"
                  class=\"selected changeSideBarColor\"
                  data-color=\"dark\"
                ></button>
                <button
                  type=\"button\"
                  class=\"changeSideBarColor\"
                  data-color=\"dark2\"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"custom-toggle\">
          <i class=\"icon-settings\"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    
    <script src=\"{{ asset('/js/core/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('/js/core/bootstrap.min.js') }}\" ></script>

    <!-- jQuery Scrollbar -->
    <script src=\"{{ asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}\" ></script>
    

    <!-- Chart JS -->
    <script src=\"{{ asset('/js/plugin/chart.js/chart.min.js') }}\" ></script>
    

    <!-- jQuery Sparkline -->
    <script src=\"{{ asset('/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}\" ></script>
  

    <!-- Chart Circle -->
    <script src=\"{{ asset('/js/plugin/chart-circle/circles.min.js') }}\" ></script>
 

    <!-- Datatables -->
    <script src=\"{{ asset('/js/plugin/datatables/datatables.min.js') }}\" ></script>
    

    <!-- Bootstrap Notify -->
    <script src=\"{{ asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}\" ></script>
   

    <!-- jQuery Vector Maps -->
    <script src=\"{{ asset('/js/plugin/jsvectormap/jsvectormap.min.js') }}\" ></script>
    <script src=\"{{ asset('/js/plugin/jsvectormap/world.js') }}\" ></script>


    <!-- Sweet Alert -->
    <script src=\"{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}\" ></script>
 

    <!-- Kaiadmin JS -->
    <script src=\"{{ asset('/js/kaiadmin.min.js') }}\" ></script>
    
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"{{ asset('/js/setting-demo.js') }}\" ></script>
    <script src=\"{{ asset('/js/demo.js') }}\" ></script>
    <script>
      \$(\"#lineChart\").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#177dff\",
        fillColor: \"rgba(23, 125, 255, 0.14)\",
      });

      \$(\"#lineChart2\").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#f3545d\",
        fillColor: \"rgba(243, 84, 93, .14)\",
      });

      \$(\"#lineChart3\").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: \"line\",
        height: \"70\",
        width: \"100%\",
        lineWidth: \"2\",
        lineColor: \"#ffa534\",
        fillColor: \"rgba(255, 165, 52, .14)\",
      });
    </script>
  </body>
</html>
", "base_backoffice.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\base_backoffice.html.twig");
    }
}
