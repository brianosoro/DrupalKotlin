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

/* umami:read-more */
class __TwigTemplate_f123c322d676c081ba6ade7fb47bfd43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'text' => [$this, 'block_text'],
            'a11y' => [$this, 'block_a11y'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.umami--read-more"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "umami:read-more"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "umami:read-more"));
        yield "<a";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["read-more"], "method", false, false, true, 1), "setAttribute", ["href", ($context["url"] ?? null)], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        yield ">
  ";
        // line 2
        yield from $this->unwrap()->yieldBlock('text', $context, $blocks);
        // line 3
        yield "  <span class=\"visually-hidden\">
    - ";
        // line 4
        yield from $this->unwrap()->yieldBlock('a11y', $context, $blocks);
        // line 5
        yield "  </span>
  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 600 600\" class=\"read-more__icon\">
    <path fill=\"none\" d=\"M159.19 117.37v365.26L341.82 300 159.19 117.37z\"/>
    <path fill=\"#008068\" d=\"M341.82 300L159.19 482.63v98.99L440.81 300 159.19 18.38v98.99L341.82 300z\"/>
  </svg>
</a>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "url"]);        return; yield '';
    }

    // line 2
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 4
    public function block_a11y($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "umami:read-more";
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
        return array (  76 => 4,  69 => 2,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "umami:read-more", "core/profiles/demo_umami/themes/umami/components/read-more/read-more.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 2);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
