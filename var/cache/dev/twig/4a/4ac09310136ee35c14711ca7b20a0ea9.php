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

/* sidebar.html.twig */
class __TwigTemplate_cc3592c7392429f337a4a8fb15a85df7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

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
        // line 9
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
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressource_new");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_g_ressources");
        yield "\">
                        <span class=\"sub-item\">DELETE </span>
                      </a>
                    </li> -->
                    <li>
                      <a href=\"";
        // line 83
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
                    <li>
                      <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 109
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
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_add");
        yield "\">
          <span class=\"sub-item\">ADD</span>
        </a>
      </li>
      ";
        // line 133
        if (array_key_exists("recruitment", $context)) {
            // line 134
            yield "        <li>
          <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruitment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\">
            <span class=\"sub-item\">UPDATE</span>
          </a>
        </li>
      ";
        } else {
            // line 140
            yield "        <li>
          <a href=\"#\" class=\"disabled\">
            <span class=\"sub-item\">UPDATE (Not available)</span>
          </a>
        </li>
      ";
        }
        // line 146
        yield "      <li>
        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
          <span class=\"sub-item\">DELETE</span>
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
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">ADD </span>
                      </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"sub-item\">UPDATE </span>
                      </a>
                    </li>
                    <li> 
                      <a href=\"";
        // line 179
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
        return "sidebar.html.twig";
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
        return array (  274 => 179,  266 => 174,  258 => 169,  233 => 147,  230 => 146,  222 => 140,  214 => 135,  211 => 134,  209 => 133,  202 => 129,  179 => 109,  171 => 104,  163 => 99,  144 => 83,  136 => 78,  128 => 73,  120 => 68,  58 => 9,  48 => 1,);
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
        <a href=\"{{ path('recruitment_add') }}\">
          <span class=\"sub-item\">ADD</span>
        </a>
      </li>
      {% if recruitment is defined %}
        <li>
          <a href=\"{{ path('recruitment_edit', { id: recruitment.id }) }}\">
            <span class=\"sub-item\">UPDATE</span>
          </a>
        </li>
      {% else %}
        <li>
          <a href=\"#\" class=\"disabled\">
            <span class=\"sub-item\">UPDATE (Not available)</span>
          </a>
        </li>
      {% endif %}
      <li>
        <a href=\"{{ path('app_logout') }}\">
          <span class=\"sub-item\">DELETE</span>
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
      <!-- End Sidebar -->", "sidebar.html.twig", "C:\\Users\\maram\\OneDrive\\Bureau\\Nouveau dossier\\EduPlus\\templates\\sidebar.html.twig");
    }
}
