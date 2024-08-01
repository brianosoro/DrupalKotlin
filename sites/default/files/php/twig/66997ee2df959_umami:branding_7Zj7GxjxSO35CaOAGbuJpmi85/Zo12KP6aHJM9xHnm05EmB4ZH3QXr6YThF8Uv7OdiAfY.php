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

/* umami:branding */
class __TwigTemplate_ea2f754090685ad6391d173daf39ebae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'site_name' => [$this, 'block_site_name'],
            'site_slogan' => [$this, 'block_site_slogan'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.umami--branding"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "umami:branding"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "umami:branding"));
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["branding"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        yield ">
  ";
        // line 2
        if (($context["site_logo"] ?? null)) {
            // line 3
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 3, $this->source), "html", null, true);
            yield "\" rel=\"home\" class=\"branding__site-logo\">
      <img src=\"";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 4, $this->source), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" />
    </a>
  ";
        }
        // line 7
        yield "
  ";
        // line 8
        if (($context["site_name"] ?? null)) {
            // line 9
            yield "    <div class=\"branding__site-name\">
      <a href=\"";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 10, $this->source), "html", null, true);
            yield "\" rel=\"home\">
        ";
            // line 11
            yield from $this->unwrap()->yieldBlock('site_name', $context, $blocks);
            // line 12
            yield "      </a>
    </div>
  ";
        }
        // line 15
        yield "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 16
            yield "    <div class=\"branding__site-slogan\">
      ";
            // line 17
            yield from $this->unwrap()->yieldBlock('site_slogan', $context, $blocks);
            // line 18
            yield "    </div>
  ";
        }
        // line 20
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "site_logo", "url", "site_name", "site_slogan"]);        return; yield '';
    }

    // line 11
    public function block_site_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 17
    public function block_site_slogan($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "umami:branding";
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
        return array (  110 => 17,  103 => 11,  96 => 20,  92 => 18,  90 => 17,  87 => 16,  84 => 15,  79 => 12,  77 => 11,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  57 => 4,  52 => 3,  50 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "umami:branding", "core/profiles/demo_umami/themes/umami/components/branding/branding.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "block" => 11);
        static $filters = array("escape" => 1, "t" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 't'],
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
