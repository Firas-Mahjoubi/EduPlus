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
      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"index.html\" class=\"logo\">
              <img
              src=\"";
        // line 59
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
        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
          <div class=\"sidebar-content\">
            <ul class=\"nav nav-secondary\">
              <li class=\"nav-item active\">
                <a
                  data-bs-toggle=\"collapse\"
                  href=\"#dashboard\"
                  class=\"collapsed\"
                  aria-expanded=\"false\"
                >
                  <i class=\"fas fa-home\"></i>
                  <p>Dashboard</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"dashboard\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"../demo1/index.html\">
                        <span class=\"sub-item\">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-section\">
                <span class=\"sidebar-mini-icon\">
                  <i class=\"fa fa-ellipsis-h\"></i>
                </span>
                <h4 class=\"text-section\">Components</h4>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>Base</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">Avatars</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/buttons.html\">
                        <span class=\"sub-item\">Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/gridsystem.html\">
                        <span class=\"sub-item\">Grid System</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/panels.html\">
                        <span class=\"sub-item\">Panels</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/notifications.html\">
                        <span class=\"sub-item\">Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/sweetalert.html\">
                        <span class=\"sub-item\">Sweet Alert</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/font-awesome-icons.html\">
                        <span class=\"sub-item\">Font Awesome Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/simple-line-icons.html\">
                        <span class=\"sub-item\">Simple Line Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/typography.html\">
                        <span class=\"sub-item\">Typography</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
                  <i class=\"fas fa-th-list\"></i>
                  <p>Sidebar Layouts</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"sidebarLayouts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"sidebar-style-2.html\">
                        <span class=\"sub-item\">Sidebar Style 2</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"icon-menu.html\">
                        <span class=\"sub-item\">Icon Menu</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>Forms</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"forms/forms.html\">
                        <span class=\"sub-item\">Basic Form</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#tables\">
                  <i class=\"fas fa-table\"></i>
                  <p>Tables</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"tables\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"tables/tables.html\">
                        <span class=\"sub-item\">Basic Table</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"tables/datatables.html\">
                        <span class=\"sub-item\">Datatables</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#maps\">
                  <i class=\"fas fa-map-marker-alt\"></i>
                  <p>Maps</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"maps\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"maps/googlemaps.html\">
                        <span class=\"sub-item\">Google Maps</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"maps/jsvectormap.html\">
                        <span class=\"sub-item\">Jsvectormap</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>Charts</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"charts/charts.html\">
                        <span class=\"sub-item\">Chart Js</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"charts/sparkline.html\">
                        <span class=\"sub-item\">Sparkline</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a href=\"widgets.html\">
                  <i class=\"fas fa-desktop\"></i>
                  <p>Widgets</p>
                  <span class=\"badge badge-success\">4</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"../../documentation/index.html\">
                  <i class=\"fas fa-file\"></i>
                  <p>Documentation</p>
                  <span class=\"badge badge-secondary\">1</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#submenu\">
                  <i class=\"fas fa-bars\"></i>
                  <p>Menu Levels</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"submenu\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a data-bs-toggle=\"collapse\" href=\"#subnav1\">
                        <span class=\"sub-item\">Level 1</span>
                        <span class=\"caret\"></span>
                      </a>
                      <div class=\"collapse\" id=\"subnav1\">
                        <ul class=\"nav nav-collapse subnav\">
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle=\"collapse\" href=\"#subnav2\">
                        <span class=\"sub-item\">Level 1</span>
                        <span class=\"caret\"></span>
                      </a>
                      <div class=\"collapse\" id=\"subnav2\">
                        <ul class=\"nav nav-collapse subnav\">
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href=\"#\">
                        <span class=\"sub-item\">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class=\"main-panel\">
        <div class=\"main-header\">
          <div class=\"main-header-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
              <a href=\"index.html\" class=\"logo\">
                <img
                src=\"";
        // line 343
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
          <nav
            class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\"
          >
            <div class=\"container-fluid\">
              <nav
                class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\"
              >
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
              </nav>

              <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
                <li
                  class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\"
                >
                  <a
                    class=\"nav-link dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    role=\"button\"
                    aria-expanded=\"false\"
                    aria-haspopup=\"true\"
                  >
                    <i class=\"fa fa-search\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                    <form class=\"navbar-left navbar-form nav-search\">
                      <div class=\"input-group\">
                        <input
                          type=\"text\"
                          placeholder=\"Search ...\"
                          class=\"form-control\"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"messageDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-envelope\"></i>
                  </a>
                  <ul
                    class=\"dropdown-menu messages-notif-box animated fadeIn\"
                    aria-labelledby=\"messageDropdown\"
                  >
                    <li>
                      <div
                        class=\"dropdown-title d-flex justify-content-between align-items-center\"
                      >
                        Messages
                        <a href=\"#\" class=\"small\">Mark all as read</a>
                      </div>
                    </li>
                    <li>
                      <div class=\"message-notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/jm_denis.jpg"), "html", null, true);
        yield "\"
                          
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jimmy Denis</span>
                              <span class=\"block\"> How are you ? </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/chadengle.jpg"), "html", null, true);
        yield "\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Chad</span>
                              <span class=\"block\"> Ok, Thanks ! </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mlane.jpg"), "html", null, true);
        yield "\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jhon Doe</span>
                              <span class=\"block\">
                                Ready for the meeting today...
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/talha.jpg"), "html", null, true);
        yield "\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Talha</span>
                              <span class=\"block\"> Hi, Apa Kabar ? </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all messages<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"notifDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-bell\"></i>
                    <span class=\"notification\">4</span>
                  </a>
                  <ul
                    class=\"dropdown-menu notif-box animated fadeIn\"
                    aria-labelledby=\"notifDropdown\"
                  >
                    <li>
                      <div class=\"dropdown-title\">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class=\"notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-icon notif-primary\">
                              <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> New user registered </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-success\">
                              <i class=\"fa fa-comment\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Rahmad commented on Admin
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile2.jpg"), "html", null, true);
        yield "\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Reza send messages to you
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-danger\">
                              <i class=\"fa fa-heart\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> Farrah liked Admin </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all notifications<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fas fa-layer-group\"></i>
                  </a>
                  <div class=\"dropdown-menu quick-actions animated fadeIn\">
                    <div class=\"quick-actions-header\">
                      <span class=\"title mb-1\">Quick Actions</span>
                      <span class=\"subtitle op-7\">Shortcuts</span>
                    </div>
                    <div class=\"quick-actions-scroll scrollbar-outer\">
                      <div class=\"quick-actions-items\">
                        <div class=\"row m-0\">
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-danger rounded-circle\">
                                <i class=\"far fa-calendar-alt\"></i>
                              </div>
                              <span class=\"text\">Calendar</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-warning rounded-circle\"
                              >
                                <i class=\"fas fa-map\"></i>
                              </div>
                              <span class=\"text\">Maps</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-info rounded-circle\">
                                <i class=\"fas fa-file-excel\"></i>
                              </div>
                              <span class=\"text\">Reports</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-success rounded-circle\"
                              >
                                <i class=\"fas fa-envelope\"></i>
                              </div>
                              <span class=\"text\">Emails</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-primary rounded-circle\"
                              >
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                              </div>
                              <span class=\"text\">Invoice</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-secondary rounded-circle\"
                              >
                                <i class=\"fas fa-credit-card\"></i>
                              </div>
                              <span class=\"text\">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class=\"nav-item topbar-user dropdown hidden-caret\">
                  <a
                    class=\"dropdown-toggle profile-pic\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <div class=\"avatar-sm\">
                      <img
                      src=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.jpg"), "html", null, true);
        yield "\"
                        
                        alt=\"...\"
                        class=\"avatar-img rounded-circle\"
                      />
                    </div>
                    <span class=\"profile-username\">
                      <span class=\"op-7\">Hi,</span>
                      <span class=\"fw-bold\">Hizrian</span>
                    </span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                        <div class=\"user-box\">
                          <div class=\"avatar-lg\">
                            <img
                            src=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.jpg"), "html", null, true);
        yield "\"
                           
                              alt=\"image profile\"
                              class=\"avatar-img rounded\"
                            />
                          </div>
                          <div class=\"u-text\">
                            <h4>Hizrian</h4>
                            <p class=\"text-muted\">hello@example.com</p>
                            <a
                              href=\"profile.html\"
                              class=\"btn btn-xs btn-secondary btn-sm\"
                              >View Profile</a
                            >
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
              <div>
                <h3 class=\"fw-bold mb-3\">Dashboard</h3>
                <h6 class=\"op-7 mb-2\">Free Bootstrap 5 Admin Dashboard</h6>
              </div>
              <div class=\"ms-md-auto py-2 py-md-0\">
                <a href=\"#\" class=\"btn btn-label-info btn-round me-2\">Manage</a>
                <a href=\"#\" class=\"btn btn-primary btn-round\">Add Customer</a>
              </div>
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
              2024, made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
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
        // line 972
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 973
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/core/bootstrap.min.js"), "html", null, true);
        yield "\" ></script>

    <!-- jQuery Scrollbar -->
    <script src=\"";
        // line 977
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- Chart JS -->
    <script src=\"";
        // line 981
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- jQuery Sparkline -->
    <script src=\"";
        // line 985
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        yield "\" ></script>
  

    <!-- Chart Circle -->
    <script src=\"";
        // line 989
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\" ></script>
 

    <!-- Datatables -->
    <script src=\"";
        // line 993
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\" ></script>
    

    <!-- Bootstrap Notify -->
    <script src=\"";
        // line 997
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\" ></script>
   

    <!-- jQuery Vector Maps -->
    <script src=\"";
        // line 1001
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jsvectormap/jsvectormap.min.js"), "html", null, true);
        yield "\" ></script>
    <script src=\"";
        // line 1002
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/jsvectormap/world.js"), "html", null, true);
        yield "\" ></script>


    <!-- Sweet Alert -->
    <script src=\"";
        // line 1006
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\" ></script>
 

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 1010
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/kaiadmin.min.js"), "html", null, true);
        yield "\" ></script>
    
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 1013
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/setting-demo.js"), "html", null, true);
        yield "\" ></script>
    <script src=\"";
        // line 1014
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
        return array (  1150 => 1014,  1146 => 1013,  1140 => 1010,  1133 => 1006,  1126 => 1002,  1122 => 1001,  1115 => 997,  1108 => 993,  1101 => 989,  1094 => 985,  1087 => 981,  1080 => 977,  1074 => 974,  1070 => 973,  1066 => 972,  781 => 690,  761 => 673,  639 => 554,  567 => 485,  548 => 469,  531 => 455,  514 => 441,  413 => 343,  126 => 59,  112 => 48,  102 => 41,  98 => 40,  94 => 39,  71 => 19,  61 => 12,  48 => 1,);
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
      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
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
        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
          <div class=\"sidebar-content\">
            <ul class=\"nav nav-secondary\">
              <li class=\"nav-item active\">
                <a
                  data-bs-toggle=\"collapse\"
                  href=\"#dashboard\"
                  class=\"collapsed\"
                  aria-expanded=\"false\"
                >
                  <i class=\"fas fa-home\"></i>
                  <p>Dashboard</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"dashboard\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"../demo1/index.html\">
                        <span class=\"sub-item\">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-section\">
                <span class=\"sidebar-mini-icon\">
                  <i class=\"fa fa-ellipsis-h\"></i>
                </span>
                <h4 class=\"text-section\">Components</h4>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>Base</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">Avatars</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/buttons.html\">
                        <span class=\"sub-item\">Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/gridsystem.html\">
                        <span class=\"sub-item\">Grid System</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/panels.html\">
                        <span class=\"sub-item\">Panels</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/notifications.html\">
                        <span class=\"sub-item\">Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/sweetalert.html\">
                        <span class=\"sub-item\">Sweet Alert</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/font-awesome-icons.html\">
                        <span class=\"sub-item\">Font Awesome Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/simple-line-icons.html\">
                        <span class=\"sub-item\">Simple Line Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/typography.html\">
                        <span class=\"sub-item\">Typography</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
                  <i class=\"fas fa-th-list\"></i>
                  <p>Sidebar Layouts</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"sidebarLayouts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"sidebar-style-2.html\">
                        <span class=\"sub-item\">Sidebar Style 2</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"icon-menu.html\">
                        <span class=\"sub-item\">Icon Menu</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>Forms</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"forms/forms.html\">
                        <span class=\"sub-item\">Basic Form</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#tables\">
                  <i class=\"fas fa-table\"></i>
                  <p>Tables</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"tables\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"tables/tables.html\">
                        <span class=\"sub-item\">Basic Table</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"tables/datatables.html\">
                        <span class=\"sub-item\">Datatables</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#maps\">
                  <i class=\"fas fa-map-marker-alt\"></i>
                  <p>Maps</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"maps\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"maps/googlemaps.html\">
                        <span class=\"sub-item\">Google Maps</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"maps/jsvectormap.html\">
                        <span class=\"sub-item\">Jsvectormap</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>Charts</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"charts/charts.html\">
                        <span class=\"sub-item\">Chart Js</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"charts/sparkline.html\">
                        <span class=\"sub-item\">Sparkline</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a href=\"widgets.html\">
                  <i class=\"fas fa-desktop\"></i>
                  <p>Widgets</p>
                  <span class=\"badge badge-success\">4</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"../../documentation/index.html\">
                  <i class=\"fas fa-file\"></i>
                  <p>Documentation</p>
                  <span class=\"badge badge-secondary\">1</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#submenu\">
                  <i class=\"fas fa-bars\"></i>
                  <p>Menu Levels</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"submenu\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a data-bs-toggle=\"collapse\" href=\"#subnav1\">
                        <span class=\"sub-item\">Level 1</span>
                        <span class=\"caret\"></span>
                      </a>
                      <div class=\"collapse\" id=\"subnav1\">
                        <ul class=\"nav nav-collapse subnav\">
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle=\"collapse\" href=\"#subnav2\">
                        <span class=\"sub-item\">Level 1</span>
                        <span class=\"caret\"></span>
                      </a>
                      <div class=\"collapse\" id=\"subnav2\">
                        <ul class=\"nav nav-collapse subnav\">
                          <li>
                            <a href=\"#\">
                              <span class=\"sub-item\">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href=\"#\">
                        <span class=\"sub-item\">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

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
          <nav
            class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\"
          >
            <div class=\"container-fluid\">
              <nav
                class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\"
              >
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <button type=\"submit\" class=\"btn btn-search pe-1\">
                      <i class=\"fa fa-search search-icon\"></i>
                    </button>
                  </div>
                  <input
                    type=\"text\"
                    placeholder=\"Search ...\"
                    class=\"form-control\"
                  />
                </div>
              </nav>

              <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
                <li
                  class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\"
                >
                  <a
                    class=\"nav-link dropdown-toggle\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    role=\"button\"
                    aria-expanded=\"false\"
                    aria-haspopup=\"true\"
                  >
                    <i class=\"fa fa-search\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
                    <form class=\"navbar-left navbar-form nav-search\">
                      <div class=\"input-group\">
                        <input
                          type=\"text\"
                          placeholder=\"Search ...\"
                          class=\"form-control\"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"messageDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-envelope\"></i>
                  </a>
                  <ul
                    class=\"dropdown-menu messages-notif-box animated fadeIn\"
                    aria-labelledby=\"messageDropdown\"
                  >
                    <li>
                      <div
                        class=\"dropdown-title d-flex justify-content-between align-items-center\"
                      >
                        Messages
                        <a href=\"#\" class=\"small\">Mark all as read</a>
                      </div>
                    </li>
                    <li>
                      <div class=\"message-notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"{{ asset('/img/jm_denis.jpg') }}\"
                          
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jimmy Denis</span>
                              <span class=\"block\"> How are you ? </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"{{ asset('/img/chadengle.jpg') }}\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Chad</span>
                              <span class=\"block\"> Ok, Thanks ! </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"{{ asset('img/mlane.jpg') }}\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Jhon Doe</span>
                              <span class=\"block\">
                                Ready for the meeting today...
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"{{ asset('/img/talha.jpg') }}\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"subject\">Talha</span>
                              <span class=\"block\"> Hi, Apa Kabar ? </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all messages<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link dropdown-toggle\"
                    href=\"#\"
                    id=\"notifDropdown\"
                    role=\"button\"
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fa fa-bell\"></i>
                    <span class=\"notification\">4</span>
                  </a>
                  <ul
                    class=\"dropdown-menu notif-box animated fadeIn\"
                    aria-labelledby=\"notifDropdown\"
                  >
                    <li>
                      <div class=\"dropdown-title\">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class=\"notif-scroll scrollbar-outer\">
                        <div class=\"notif-center\">
                          <a href=\"#\">
                            <div class=\"notif-icon notif-primary\">
                              <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> New user registered </span>
                              <span class=\"time\">5 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-success\">
                              <i class=\"fa fa-comment\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Rahmad commented on Admin
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-img\">
                              <img
                              src=\"{{ asset('/img/profile2.jpg') }}\"
                               
                                alt=\"Img Profile\"
                              />
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\">
                                Reza send messages to you
                              </span>
                              <span class=\"time\">12 minutes ago</span>
                            </div>
                          </a>
                          <a href=\"#\">
                            <div class=\"notif-icon notif-danger\">
                              <i class=\"fa fa-heart\"></i>
                            </div>
                            <div class=\"notif-content\">
                              <span class=\"block\"> Farrah liked Admin </span>
                              <span class=\"time\">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class=\"see-all\" href=\"javascript:void(0);\"
                        >See all notifications<i class=\"fa fa-angle-right\"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class=\"nav-item topbar-icon dropdown hidden-caret\">
                  <a
                    class=\"nav-link\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <i class=\"fas fa-layer-group\"></i>
                  </a>
                  <div class=\"dropdown-menu quick-actions animated fadeIn\">
                    <div class=\"quick-actions-header\">
                      <span class=\"title mb-1\">Quick Actions</span>
                      <span class=\"subtitle op-7\">Shortcuts</span>
                    </div>
                    <div class=\"quick-actions-scroll scrollbar-outer\">
                      <div class=\"quick-actions-items\">
                        <div class=\"row m-0\">
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-danger rounded-circle\">
                                <i class=\"far fa-calendar-alt\"></i>
                              </div>
                              <span class=\"text\">Calendar</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-warning rounded-circle\"
                              >
                                <i class=\"fas fa-map\"></i>
                              </div>
                              <span class=\"text\">Maps</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div class=\"avatar-item bg-info rounded-circle\">
                                <i class=\"fas fa-file-excel\"></i>
                              </div>
                              <span class=\"text\">Reports</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-success rounded-circle\"
                              >
                                <i class=\"fas fa-envelope\"></i>
                              </div>
                              <span class=\"text\">Emails</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-primary rounded-circle\"
                              >
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                              </div>
                              <span class=\"text\">Invoice</span>
                            </div>
                          </a>
                          <a class=\"col-6 col-md-4 p-0\" href=\"#\">
                            <div class=\"quick-actions-item\">
                              <div
                                class=\"avatar-item bg-secondary rounded-circle\"
                              >
                                <i class=\"fas fa-credit-card\"></i>
                              </div>
                              <span class=\"text\">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class=\"nav-item topbar-user dropdown hidden-caret\">
                  <a
                    class=\"dropdown-toggle profile-pic\"
                    data-bs-toggle=\"dropdown\"
                    href=\"#\"
                    aria-expanded=\"false\"
                  >
                    <div class=\"avatar-sm\">
                      <img
                      src=\"{{ asset('/img/profile.jpg') }}\"
                        
                        alt=\"...\"
                        class=\"avatar-img rounded-circle\"
                      />
                    </div>
                    <span class=\"profile-username\">
                      <span class=\"op-7\">Hi,</span>
                      <span class=\"fw-bold\">Hizrian</span>
                    </span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                      <li>
                        <div class=\"user-box\">
                          <div class=\"avatar-lg\">
                            <img
                            src=\"{{ asset('/img/profile.jpg') }}\"
                           
                              alt=\"image profile\"
                              class=\"avatar-img rounded\"
                            />
                          </div>
                          <div class=\"u-text\">
                            <h4>Hizrian</h4>
                            <p class=\"text-muted\">hello@example.com</p>
                            <a
                              href=\"profile.html\"
                              class=\"btn btn-xs btn-secondary btn-sm\"
                              >View Profile</a
                            >
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
              <div>
                <h3 class=\"fw-bold mb-3\">Dashboard</h3>
                <h6 class=\"op-7 mb-2\">Free Bootstrap 5 Admin Dashboard</h6>
              </div>
              <div class=\"ms-md-auto py-2 py-md-0\">
                <a href=\"#\" class=\"btn btn-label-info btn-round me-2\">Manage</a>
                <a href=\"#\" class=\"btn btn-primary btn-round\">Add Customer</a>
              </div>
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
              2024, made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
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
", "base_backoffice.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\base_backoffice.html.twig");
    }
}
