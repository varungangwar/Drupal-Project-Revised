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

/* themes/custom/moderncreative/templates/layout/page.html.twig */
class __TwigTemplate_c8a8b102f7224e086d626f2df362afa0 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("moderncreative/global-styles"), "html", null, true);
        yield "
";
        // line 4
        yield "  ";
        yield from $this->load((($context["directory"] ?? null) . "/components/header/header.twig"), 4)->unwrap()->yield($context);
        // line 5
        yield "

";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("moderncreative/hero"), "html", null, true);
        yield "

<div class=\"layout-container\">

";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 12), "html", null, true);
            yield "
";
        }
        // line 14
        yield "
  <main role=\"main\">
    ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 16), "html", null, true);
        yield "
  </main>

  ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <footer class=\"site-footer\">
      ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 24
        yield "
</div>


";
        // line 29
        yield "<section id=\"about\">
  ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 30), "html", null, true);
        yield "
</section>

";
        // line 34
        yield "<section id=\"ourcreative\">
  ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ourcreative", [], "any", false, false, true, 35), "html", null, true);
        yield "
</section>

";
        // line 39
        yield "<section id=\"skills\">
  ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "skills", [], "any", false, false, true, 40), "html", null, true);
        yield "
</section>

";
        // line 44
        yield "<section id=\"ourservices\">
  ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ourservices", [], "any", false, false, true, 45), "html", null, true);
        yield "
</section>

";
        // line 49
        yield "<section id=\"stats\">
  ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "stats", [], "any", false, false, true, 50), "html", null, true);
        yield "
</section>

";
        // line 54
        yield "<section id=\"portfolio\">
  ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "portfolio", [], "any", false, false, true, 55), "html", null, true);
        yield "
</section>

";
        // line 59
        yield "<section id=\"team\">
  ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team", [], "any", false, false, true, 60), "html", null, true);
        yield "
</section>

";
        // line 64
        yield "<section id=\"workwithus\">
  ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "workwithus", [], "any", false, false, true, 65), "html", null, true);
        yield "
</section>

";
        // line 69
        yield "<section id=\"pricing\">
  ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricing", [], "any", false, false, true, 70), "html", null, true);
        yield "
</section>

";
        // line 74
        yield "<section id=\"workprocess\">
  ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "workprocess", [], "any", false, false, true, 75), "html", null, true);
        yield "
</section>

";
        // line 79
        yield "<section id=\"testimonials\">
  ";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "testimonials", [], "any", false, false, true, 80), "html", null, true);
        yield "
</section>

";
        // line 84
        yield "<section id=\"blog\">
  ";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blog", [], "any", false, false, true, 85), "html", null, true);
        yield "
</section>

";
        // line 89
        yield "<section id=\"contact\">
  ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contact", [], "any", false, false, true, 90), "html", null, true);
        yield "
</section>

";
        // line 94
        yield "<footer>
  <div class=\"footer-first\">
    ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 96), "html", null, true);
        yield "
  </div>

  <div class=\"footer-second\">
    ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 100), "html", null, true);
        yield "
  </div>

  <div class=\"footer-bottom\">
    ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 104), "html", null, true);
        yield "
  </div>
</footer>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/moderncreative/templates/layout/page.html.twig";
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
        return array (  232 => 104,  225 => 100,  218 => 96,  214 => 94,  208 => 90,  205 => 89,  199 => 85,  196 => 84,  190 => 80,  187 => 79,  181 => 75,  178 => 74,  172 => 70,  169 => 69,  163 => 65,  160 => 64,  154 => 60,  151 => 59,  145 => 55,  142 => 54,  136 => 50,  133 => 49,  127 => 45,  124 => 44,  118 => 40,  115 => 39,  109 => 35,  106 => 34,  100 => 30,  97 => 29,  91 => 24,  85 => 21,  82 => 20,  80 => 19,  74 => 16,  70 => 14,  64 => 12,  62 => 11,  55 => 7,  51 => 5,  48 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/moderncreative/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\moderncreative\\web\\themes\\custom\\moderncreative\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 4, "if" => 11];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
