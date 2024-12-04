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

/* /sidebar.html.twig */
class __TwigTemplate_74bea9fb247b08223486cf6ca6667258 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sidebar.html.twig"));

        // line 1
        yield "
 <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"index.html\" class=\"logo\">
              <img
              src=\"";
        // line 10
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
        
 <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"index.html\" class=\"logo\">
              <img
              src=\"";
        // line 39
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
                      <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
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
                <h4 class=\"text-section\">CRUD</h4>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>RESSOURCE</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_new");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li> -->
                    <li>
                      <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
    <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
        <i class=\"fas fa-th-list\"></i>
        <p>EVENT</p>
        <span class=\"caret\"></span>
    </a>
    <div class=\"collapse\" id=\"sidebarLayouts\">
        <ul class=\"nav nav-collapse\">
            <!-- ADD Event Link -->
            <li>
                <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_add");
        yield "\">
                    <span class=\"sub-item\">ADD</span>
                </a>
            </li>

            <!-- UPDATE Event Link - Display only if 'event' exists -->
            ";
        // line 136
        if (array_key_exists("event", $context)) {
            // line 137
            yield "                <li>
                    <a href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\">
                        <span class=\"sub-item\">UPDATE</span>
                    </a>
                </li>
            ";
        }
        // line 143
        yield "
            <!-- DELETE Event Link - Display only if 'event' exists -->
            ";
        // line 145
        if (array_key_exists("event", $context)) {
            // line 146
            yield "                <li>
                    <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\">
                        <span class=\"sub-item\">DELETE</span>
                    </a>
                </li>
            ";
        }
        // line 152
        yield "
            <!-- SHOW Event Link - Display only if 'event' exists -->
                <li>
                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_show");
        yield "\">
                        <span class=\"sub-item\">SHOW</span>
                    </a>
                </li>
        </ul>
    </div>
</li>

              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>RECRUTEMENT</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>CLUB</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
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
                      <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
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
                <h4 class=\"text-section\">CRUD</h4>
              </li>
              
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>aa</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_new");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href=\"";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li> -->
                    <li>
                      <a href=\"";
        // line 287
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
    <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
        <i class=\"fas fa-th-list\"></i>
        <p>EVENT</p>
        <span class=\"caret\"></span>
    </a>
    <div class=\"collapse\" id=\"sidebarLayouts\">
        <ul class=\"nav nav-collapse\">
            <!-- ADD Event Link -->
            <li>
                <a href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_add");
        yield "\">
                    <span class=\"sub-item\">ADD</span>
                </a>
            </li>

            <!-- UPDATE Event Link - Display only if 'event' exists -->
            ";
        // line 310
        if (array_key_exists("event", $context)) {
            // line 311
            yield "                <li>
                    <a href=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\">
                        <span class=\"sub-item\">UPDATE</span>
                    </a>
                </li>
            ";
        }
        // line 317
        yield "
            <!-- DELETE Event Link - Display only if 'event' exists -->
            ";
        // line 319
        if (array_key_exists("event", $context)) {
            // line 320
            yield "                <li>
                    <a href=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, false, 321)]), "html", null, true);
            yield "\">
                        <span class=\"sub-item\">DELETE</span>
                    </a>
                </li>
            ";
        }
        // line 326
        yield "
            <!-- SHOW Event Link - Display only if 'event' exists -->
                <li>
                    <a href=\"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_events_show");
        yield "\">
                        <span class=\"sub-item\">SHOW</span>
                    </a>
                </li>
        </ul>
    </div>
</li>

              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>RECRUTEMENT</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 356
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>CLUB</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"";
        // line 377
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 387
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/sidebar.html.twig";
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
        return array (  549 => 387,  541 => 382,  533 => 377,  509 => 356,  501 => 351,  493 => 346,  473 => 329,  468 => 326,  460 => 321,  457 => 320,  455 => 319,  451 => 317,  443 => 312,  440 => 311,  438 => 310,  429 => 304,  409 => 287,  401 => 282,  393 => 277,  385 => 272,  359 => 249,  320 => 213,  312 => 208,  304 => 203,  280 => 182,  272 => 177,  264 => 172,  244 => 155,  239 => 152,  231 => 147,  228 => 146,  226 => 145,  222 => 143,  214 => 138,  211 => 137,  209 => 136,  200 => 130,  180 => 113,  172 => 108,  164 => 103,  156 => 98,  131 => 76,  91 => 39,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
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
                      <a href=\"{{ path('admin_dashboard') }}\">
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
                <h4 class=\"text-section\">CRUD</h4>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>RESSOURCE</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('ressource_new') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li> -->
                    <li>
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
    <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
        <i class=\"fas fa-th-list\"></i>
        <p>EVENT</p>
        <span class=\"caret\"></span>
    </a>
    <div class=\"collapse\" id=\"sidebarLayouts\">
        <ul class=\"nav nav-collapse\">
            <!-- ADD Event Link -->
            <li>
                <a href=\"{{ path('app_g_events_add') }}\">
                    <span class=\"sub-item\">ADD</span>
                </a>
            </li>

            <!-- UPDATE Event Link - Display only if 'event' exists -->
            {% if event is defined %}
                <li>
                    <a href=\"{{ path('app_g_events_update', { 'id': event.id }) }}\">
                        <span class=\"sub-item\">UPDATE</span>
                    </a>
                </li>
            {% endif %}

            <!-- DELETE Event Link - Display only if 'event' exists -->
            {% if event is defined %}
                <li>
                    <a href=\"{{ path('app_g_events_delete', { 'id': event.id }) }}\">
                        <span class=\"sub-item\">DELETE</span>
                    </a>
                </li>
            {% endif %}

            <!-- SHOW Event Link - Display only if 'event' exists -->
                <li>
                    <a href=\"{{ path('app_g_events_show') }}\">
                        <span class=\"sub-item\">SHOW</span>
                    </a>
                </li>
        </ul>
    </div>
</li>

              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>RECRUTEMENT</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>CLUB</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
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
                      <a href=\"{{ path('admin_dashboard') }}\">
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
                <h4 class=\"text-section\">CRUD</h4>
              </li>
              
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#base\">
                  <i class=\"fas fa-layer-group\"></i>
                  <p>aa</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"base\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('ressource_new') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li> -->
                    <li>
                      <a href=\"{{ path('app_g_ressources') }}\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
    <a data-bs-toggle=\"collapse\" href=\"#sidebarLayouts\">
        <i class=\"fas fa-th-list\"></i>
        <p>EVENT</p>
        <span class=\"caret\"></span>
    </a>
    <div class=\"collapse\" id=\"sidebarLayouts\">
        <ul class=\"nav nav-collapse\">
            <!-- ADD Event Link -->
            <li>
                <a href=\"{{ path('app_g_events_add') }}\">
                    <span class=\"sub-item\">ADD</span>
                </a>
            </li>

            <!-- UPDATE Event Link - Display only if 'event' exists -->
            {% if event is defined %}
                <li>
                    <a href=\"{{ path('app_g_events_update', { 'id': event.id }) }}\">
                        <span class=\"sub-item\">UPDATE</span>
                    </a>
                </li>
            {% endif %}

            <!-- DELETE Event Link - Display only if 'event' exists -->
            {% if event is defined %}
                <li>
                    <a href=\"{{ path('app_g_events_delete', { 'id': event.id }) }}\">
                        <span class=\"sub-item\">DELETE</span>
                    </a>
                </li>
            {% endif %}

            <!-- SHOW Event Link - Display only if 'event' exists -->
                <li>
                    <a href=\"{{ path('app_g_events_show') }}\">
                        <span class=\"sub-item\">SHOW</span>
                    </a>
                </li>
        </ul>
    </div>
</li>

              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#forms\">
                  <i class=\"fas fa-pen-square\"></i>
                  <p>RECRUTEMENT</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"forms\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class=\"nav-item\">
                <a data-bs-toggle=\"collapse\" href=\"#charts\">
                  <i class=\"far fa-chart-bar\"></i>
                  <p>CLUB</p>
                  <span class=\"caret\"></span>
                </a>
                <div class=\"collapse\" id=\"charts\">
                  <ul class=\"nav nav-collapse\">
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"{{ path('app_logout') }}\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"components/avatars.html\">
                        <span class=\"sub-item\">SHOW</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->", "/sidebar.html.twig", "C:\\Users\\frsma\\OneDrive\\Desktop\\projetSymfony\\eduplis\\EduPlus\\templates\\sidebar.html.twig");
    }
}
