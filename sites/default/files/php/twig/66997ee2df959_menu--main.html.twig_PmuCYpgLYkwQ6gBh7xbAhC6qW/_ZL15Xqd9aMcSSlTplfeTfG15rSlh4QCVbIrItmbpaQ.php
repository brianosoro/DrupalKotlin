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

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig */
class __TwigTemplate_ad447bac0fb81e732c01665794d727ba extends Template
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
        // line 21
        yield "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        yield "
";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 31, $context, $this->getSourceContext()));
        yield " ";
        // line 32
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);        return; yield '';
    }

    // line 33
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield " ";
            // line 34
            yield "  ";
            $macros["menus"] = $this;
            // line 35
            yield "  ";
            // line 36
            yield "  ";
            // line 37
            $context["menu_classes"] = [("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 38
($context["menu_name"] ?? null), 38, $this->source)))];
            // line 41
            yield "  ";
            // line 42
            yield "  ";
            // line 43
            $context["submenu_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["menu_name"] ?? null), 44, $this->source))) . "__submenu")];
            // line 47
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 48
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 49), "setAttribute", ["data-drupal-selector", "menu-main"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    yield "> ";
                    // line 50
                    yield "    ";
                } else {
                    // line 51
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 51), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    yield "> ";
                    // line 52
                    yield "    ";
                }
                // line 53
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    yield "      ";
                    // line 55
                    yield "      ";
                    // line 56
                    $context["item_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 57
($context["menu_name"] ?? null), 57, $this->source))) . "__item"), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 58
$context["item"], "is_expanded", [], "any", false, false, true, 58)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 58, $this->source))) . "__item--expanded")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 59
$context["item"], "is_collapsed", [], "any", false, false, true, 59)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 59, $this->source))) . "__item--collapsed")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 60, $this->source))) . "__item--active-trail")) : (""))];
                    // line 63
                    yield "      ";
                    // line 64
                    yield "      ";
                    // line 65
                    $context["link_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 66
($context["menu_name"] ?? null), 66, $this->source))) . "__link")];
                    // line 69
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    yield ">";
                    // line 70
                    yield "        ";
                    // line 71
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                     // line 73
$context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 75
$context["item"], "attributes", [], "any", false, false, true, 75), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 75), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source)), "html", null, true);
                    // line 77
                    yield "
        ";
                    // line 78
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78)) {
                        // line 79
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 79, $context, $this->getSourceContext()));
                        yield " ";
                        // line 80
                        yield "        ";
                    }
                    // line 81
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "    </ul>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig";
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
        return array (  164 => 83,  157 => 81,  154 => 80,  150 => 79,  148 => 78,  145 => 77,  143 => 75,  142 => 74,  141 => 73,  139 => 71,  137 => 70,  133 => 69,  131 => 66,  130 => 65,  128 => 64,  126 => 63,  124 => 60,  123 => 59,  122 => 58,  121 => 57,  120 => 56,  118 => 55,  116 => 54,  111 => 53,  108 => 52,  104 => 51,  101 => 50,  97 => 49,  94 => 48,  91 => 47,  89 => 44,  88 => 43,  86 => 42,  84 => 41,  82 => 38,  81 => 37,  79 => 36,  77 => 35,  74 => 34,  58 => 33,  51 => 32,  48 => 31,  45 => 23,  43 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig", "/var/www/html/drupal/core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53);
        static $filters = array("clean_class" => 38, "escape" => 49);
        static $functions = array("link" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link'],
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
