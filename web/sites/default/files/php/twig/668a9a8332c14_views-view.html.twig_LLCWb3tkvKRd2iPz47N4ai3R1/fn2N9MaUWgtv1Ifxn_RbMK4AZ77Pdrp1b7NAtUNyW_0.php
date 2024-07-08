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

/* themes/tara/templates/views/views-view.html.twig */
class __TwigTemplate_f6e2e18f7d87fa7545bc8bc3892bd5b5 extends Template
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
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["display_id"] ?? null), 37, $this->source)), ((        // line 38
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 38, $this->source))) : (""))];
        // line 41
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        yield ">
  ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 42, $this->source), "html", null, true);
        yield "
  ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 43, $this->source), "html", null, true);
        yield "
  ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        yield "

  ";
        // line 46
        if (($context["header"] ?? null)) {
            // line 47
            yield "    <div class=\"view-header\">
      ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 48, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 51
        yield "
  ";
        // line 52
        if (($context["exposed"] ?? null)) {
            // line 53
            yield "    <div class=\"view-filters\">
      ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 54, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 57
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 58
            yield "    <div class=\"view-attachment view-attachment-before\">
      ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 59, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 62
        yield "
  ";
        // line 63
        if (($context["rows"] ?? null)) {
            // line 64
            yield "    <div class=\"view-content\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 65, $this->source), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 67
($context["empty"] ?? null)) {
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 68, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 70
        yield "
  ";
        // line 71
        if (($context["pager"] ?? null)) {
            // line 72
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 72, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 74
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 75
            yield "    <div class=\"view-attachment view-attachment-after\">
      ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 76, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 79
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 80
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 80, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 82
        yield "
  ";
        // line 83
        if (($context["footer"] ?? null)) {
            // line 84
            yield "    <div class=\"view-footer\">
      ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 85, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 88
        yield "
  ";
        // line 89
        if (($context["feed_icons"] ?? null)) {
            // line 90
            yield "    <div class=\"feed-icons\">
      ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 91, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 94
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/tara/templates/views/views-view.html.twig";
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
        return array (  180 => 94,  174 => 91,  171 => 90,  169 => 89,  166 => 88,  160 => 85,  157 => 84,  155 => 83,  152 => 82,  146 => 80,  143 => 79,  137 => 76,  134 => 75,  131 => 74,  125 => 72,  123 => 71,  120 => 70,  115 => 68,  113 => 67,  108 => 65,  105 => 64,  103 => 63,  100 => 62,  94 => 59,  91 => 58,  88 => 57,  82 => 54,  79 => 53,  77 => 52,  74 => 51,  68 => 48,  65 => 47,  63 => 46,  58 => 44,  54 => 43,  50 => 42,  45 => 41,  43 => 38,  42 => 37,  41 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tara/templates/views/views-view.html.twig", "C:\\xampp\\htdocs\\Testy\\web\\themes\\tara\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 46);
        static $filters = array("clean_class" => 36, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
