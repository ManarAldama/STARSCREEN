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

/* themes/tara/templates/layout/html.html.twig */
class __TwigTemplate_8dd63e89306d047ee769fefd1ec15b83 extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-guest")), (( !        // line 29
($context["root_path"] ?? null)) ? ("frontpage") : (("inner-page path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31))) ? ("no-sidebar") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("one-sidebar sidebar-left") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-right") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("two-sidebar") : (""))];
        // line 37
        yield "<!DOCTYPE html>
<html";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 38, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        yield "\">
    <title>";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 41, $this->source), " | "));
        yield "</title>
    ";
        // line 42
        if ((($context["google_font"] ?? null) == "local")) {
            // line 43
            yield "    <link rel=\"preload\" as=\"font\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
            yield "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            yield "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    ";
        }
        // line 46
        yield "    <css-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source));
        yield "\">
    <js-placeholder token=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 47, $this->source));
        yield "\">
";
        // line 48
        if (($context["css_extra"] ?? null)) {
            // line 49
            yield "<style>
";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_code"] ?? null), 50, $this->source), "html", null, true);
            yield "
</style>
";
        }
        // line 53
        yield "  </head>
  <body";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        yield ">
    ";
        // line 59
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 62, $this->source), "html", null, true);
        yield "
    ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 63, $this->source), "html", null, true);
        yield "
    ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 64, $this->source), "html", null, true);
        yield "
    ";
        // line 65
        if ((($context["google_font"] ?? null) == "googlecdn")) {
            // line 66
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontscdn"), "html", null, true);
            yield "
    ";
        } elseif ((        // line 67
($context["google_font"] ?? null) == "local")) {
            // line 68
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontslocal"), "html", null, true);
            yield "
    ";
        }
        // line 70
        yield "    <js-bottom-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source));
        yield "\">
";
        // line 71
        yield from         $this->loadTemplate("@tara/template-parts/settings.html.twig", "themes/tara/templates/layout/html.html.twig", 71)->unwrap()->yield($context);
        // line 72
        if ((($context["slider_show"] ?? null) && ($context["is_front"] ?? null))) {
            yield "\t
<script>
jQuery(document).ready(function (\$) {
\$('.home-slider').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  nav: false,
  dots: ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_dots"] ?? null), 80, $this->source), "html", null, true);
            yield ",
  autoplayTimeout: ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_time"] ?? null), 81, $this->source), "html", null, true);
            yield ",
});
});
</script>
";
        }
        // line 86
        if (($context["logged_in"] ?? null)) {
            // line 87
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/script-header"), "html", null, true);
            yield "
";
        }
        // line 89
        yield "  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "page", "html_attributes", "placeholder_token", "head_title", "google_font", "base_path", "directory", "css_extra", "css_code", "attributes", "page_top", "page_bottom", "slider_show", "is_front", "slider_dots", "slider_time"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/tara/templates/layout/html.html.twig";
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
        return array (  177 => 89,  171 => 87,  169 => 86,  161 => 81,  157 => 80,  146 => 72,  144 => 71,  139 => 70,  133 => 68,  131 => 67,  126 => 66,  124 => 65,  120 => 64,  116 => 63,  112 => 62,  107 => 60,  104 => 59,  100 => 54,  97 => 53,  91 => 50,  88 => 49,  86 => 48,  82 => 47,  77 => 46,  72 => 44,  67 => 43,  65 => 42,  61 => 41,  57 => 40,  52 => 38,  49 => 37,  47 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tara/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\Testy\\web\\themes\\tara\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 42, "include" => 71);
        static $filters = array("clean_class" => 29, "escape" => 38, "raw" => 40, "safe_join" => 41, "t" => 60);
        static $functions = array("attach_library" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                ['attach_library'],
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
