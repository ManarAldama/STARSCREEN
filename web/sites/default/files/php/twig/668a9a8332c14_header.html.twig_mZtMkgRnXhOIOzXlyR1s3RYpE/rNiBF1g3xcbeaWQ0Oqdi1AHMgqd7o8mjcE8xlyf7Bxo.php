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

/* @tara/template-parts/header.html.twig */
class __TwigTemplate_fd54964d5c5e99a485a238b8d0da5379 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- Start: Header -->
<header id=\"header\">
  ";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 3) || ($context["all_icons_show"] ?? null))) {
            // line 4
            yield "    ";
            yield from             $this->loadTemplate("@tara/template-parts/header_top.html.twig", "@tara/template-parts/header.html.twig", 4)->unwrap()->yield($context);
            // line 5
            yield "  ";
        }
        // line 6
        yield "  <div class=\"header\">
    <div class=\"container\">
      <div class=\"header-container\">
        ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 9)) {
            // line 10
            yield "          <div class=\"site-branding-region\">
            ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            yield "
          </div> <!--/.site-branding -->
        ";
        }
        // line 13
        yield " <!--/.end if for site_branding -->
        ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 14) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 14))) {
            // line 15
            yield "          <div class=\"header-right\">
            <!-- Start: primary menu region -->
            ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 17)) {
                // line 18
                yield "            <div class=\"mobile-menu\">
              <span></span>
              <span></span>
              <span></span>
            </div><!-- /mobile-menu -->
            <div class=\"primary-menu-wrapper\">
              <div class=\"menu-wrap\">
                <div class=\"close-mobile-menu\"><i class=\"icon-close\" aria-hidden=\"true\"></i></div>
                ";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                yield "
              </div>
            </div><!-- /primary-menu-wrapper -->
            ";
            }
            // line 29
            yield "<!-- end if for page.primary_menu -->
            ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 30)) {
                // line 31
                yield "              <div class=\"full-page-search\">
                <div class=\"search-icon\">
                  <i class=\"icon-search\" aria-hidden=\"true\"></i>
                </div> <!--/.search icon -->
                <div class=\"search-box\">
                  <div class=\"search-box-close\"></div>
                  <div class=\"search-box-content\">
                    ";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                yield "
                  </div>
                  <div class=\"search-box-close\"></div>
                </div><!--/.search-box -->
              </div> <!--/.full-page-search -->
            ";
            }
            // line 43
            yield " <!-- end if for page.search_box -->
          </div> <!--/.header-right -->
        ";
        }
        // line 45
        yield "<!-- end if for page.search_box or  page.primary_menu -->
      </div> <!--/.header-container -->
    </div> <!--/.container -->
  </div><!-- /.header -->
</header>
<!-- End: Header -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "all_icons_show"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@tara/template-parts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  124 => 45,  119 => 43,  110 => 38,  101 => 31,  99 => 30,  96 => 29,  89 => 26,  79 => 18,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  57 => 9,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/header.html.twig", "C:\\xampp\\htdocs\\Testy\\web\\themes\\tara\\templates\\template-parts\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 4);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
