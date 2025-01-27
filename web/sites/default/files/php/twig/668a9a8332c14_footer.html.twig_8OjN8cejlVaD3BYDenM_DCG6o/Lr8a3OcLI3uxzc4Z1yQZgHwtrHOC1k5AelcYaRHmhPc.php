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

/* @tara/template-parts/footer.html.twig */
class __TwigTemplate_5decfc60d322740a7196b915e34b62fd extends Template
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
        yield "<section id=\"last-section\" class=\"last-section\"></section>
<!-- Start: Footer -->
<footer id=\"footer\">
  <div class=\"footer\">
    <div class=\"container\">
      ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 6)) {
            // line 7
            yield "        <section class=\"footer-top\">
          ";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            yield "
        </section>
      ";
        }
        // line 10
        yield "<!-- /footer-top -->
      ";
        // line 11
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 11)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 11)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 11))) {
            // line 12
            yield "       <section class=\"footer-blocks\">
        ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 13)) {
                // line 14
                yield "          <div class=\"footer-block\">
            ";
                // line 15
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 17
            yield "<!--/footer-first -->
        ";
            // line 18
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 18)) {
                // line 19
                yield "          <div class=\"footer-block\">
            ";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 22
            yield "<!--/footer-second -->
        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 23)) {
                // line 24
                yield "          <div class=\"footer-block\">
            ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 27
            yield "<!--/footer-third -->
        ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 28)) {
                // line 29
                yield "          <div class=\"footer-block\">
            ";
                // line 30
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 32
            yield "<!--/footer-fourth -->
       </section> <!--/footer-blocks -->
     ";
        }
        // line 34
        yield " ";
        // line 35
        yield "     ";
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 36
            yield "      <section class=\"footer-bottom-middle\">
        ";
            // line 37
            if (($context["copyright_text"] ?? null)) {
                // line 38
                yield "          <div class=\"copyright\">
            &copy; ";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 39, $this->source), "html", null, true);
                yield ", All rights reserved.
          </div>
        ";
            }
            // line 41
            yield " <!-- end if for copyright -->
        ";
            // line 42
            if (($context["all_icons_show"] ?? null)) {
                // line 43
                yield "          <div class=\"footer-bottom-middle-right\">
            ";
                // line 44
                yield from                 $this->loadTemplate("@tara/template-parts/social-icons.html.twig", "@tara/template-parts/footer.html.twig", 44)->unwrap()->yield($context);
                // line 45
                yield "          </div>
        ";
            }
            // line 46
            yield " <!-- end if for all_icons_show -->
      </section><!-- /footer-bottom-middle -->
     ";
        }
        // line 48
        yield " <!-- end condition if copyright or social icons -->
     ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 49)) {
            // line 50
            yield "       <div class=\"footer-bottom\">
         ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
       </div> <!--/.footer-bottom -->
     ";
        }
        // line 53
        yield " <!-- end condition for footer_bottom -->
    </div><!-- /.container -->
  </div> <!--/.footer -->
</footer>
";
        // line 57
        if (($context["scrolltotop_on"] ?? null)) {
            // line 58
            yield "<div class=\"scrolltop\"><i class=\"icon-arrow-up\" aria-hidden=\"true\"></i></div>
";
        }
        // line 60
        if (($context["fontawesome_four"] ?? null)) {
            // line 61
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 63
        if (($context["fontawesome_five"] ?? null)) {
            // line 64
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 66
        if (($context["fontawesome_six"] ?? null)) {
            // line 67
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/fontawesome6"), "html", null, true);
            yield "
";
        }
        // line 69
        if (($context["bootstrapicons"] ?? null)) {
            // line 70
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "site_name", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "fontawesome_six", "bootstrapicons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@tara/template-parts/footer.html.twig";
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
        return array (  216 => 70,  214 => 69,  208 => 67,  206 => 66,  200 => 64,  198 => 63,  192 => 61,  190 => 60,  186 => 58,  184 => 57,  178 => 53,  172 => 51,  169 => 50,  167 => 49,  164 => 48,  159 => 46,  155 => 45,  153 => 44,  150 => 43,  148 => 42,  145 => 41,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  126 => 35,  124 => 34,  119 => 32,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  99 => 25,  96 => 24,  94 => 23,  91 => 22,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  52 => 8,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\Testy\\web\\themes\\tara\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "include" => 44);
        static $filters = array("escape" => 8, "date" => 39);
        static $functions = array("attach_library" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
