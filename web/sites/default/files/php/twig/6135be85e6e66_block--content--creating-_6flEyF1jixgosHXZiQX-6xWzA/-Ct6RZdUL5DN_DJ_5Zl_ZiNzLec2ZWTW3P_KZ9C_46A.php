<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/00-block/block--content--creating-better.html.twig */
class __TwigTemplate_bc0bf6c8a4fd59158f583e04f6e9a72293cd458e17703559bc740b8f67a3465e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "
";
        // line 47
        $context["bem_block_block"] = ((array_key_exists("bem_block_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_block_block"] ?? null)), "block")) : ("block"));
        // line 48
        echo "
";
        // line 49
        $context["bem_block_element"] = ((array_key_exists("bem_block_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_block_element"] ?? null)), false)) : (false));
        // line 50
        echo "
";
        // line 51
        if ( !array_key_exists("bem_block_modifiers", $context)) {
            // line 52
            echo "  ";
            $context["bem_block_modifiers"] = [];
        }
        // line 54
        echo "
";
        // line 55
        $context["block_type"] = (($context["block_type"]) ?? (false));
        // line 56
        echo "
";
        // line 57
        if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "type", [])) {
            $context["block_type"] = $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "type", []);
        }
        // line 58
        echo "
";
        // line 59
        if ($this->getAttribute(($context["configuration"] ?? null), "view_mode", [])) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ("view-mode-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "view_mode", []))), ["_" => "-"]))]);
        }
        // line 60
        if ($this->getAttribute(($context["configuration"] ?? null), "provider", [])) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ("provider-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "provider", []))), ["_" => "-"]))]);
        }
        // line 61
        if (($context["plugin_id"] ?? null)) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null))), ["_" => "-"])]);
        }
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "originalId", [])) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ("id-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "originalId", []))), ["_" => "-"]))]);
        }
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "region", [])) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ("region-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "region", []))), ["_" => "-"]))]);
        }
        // line 64
        if (($context["block_type"] ?? null)) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ("type-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["block_type"] ?? null))), ["_" => "-"]))]);
        }
        // line 65
        if (($this->getAttribute(($context["configuration"] ?? null), "view_mode", []) && $this->getAttribute(($context["configuration"] ?? null), "type", []))) {
            echo " ";
            $context["bem_block_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), [0 => ((twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "type", []))), ["_" => "-"]) . "--") . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "view_mode", []))), ["_" => "-"]))]);
        }
        // line 66
        echo "
";
        // line 67
        if ( !array_key_exists("bem_block_extra", $context)) {
            // line 68
            echo "  ";
            $context["bem_block_extra"] = [];
        }
        // line 70
        echo "
";
        // line 71
        if ($this->getAttribute(($context["configuration"] ?? null), "provider", [])) {
            echo " ";
            $context["bem_block_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_block_extra"] ?? null)), [0 => ("block-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "provider", [])))]);
        }
        // line 72
        echo "
";
        // line 73
        $context["heading_level"] = ((array_key_exists("heading_level", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), 2)) : (2));
        // line 74
        echo "
";
        // line 76
        if (((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null))) : (""))) {
            // line 77
            echo "  ";
            $context["heading"] = ($context["label"] ?? null);
        } else {
            // line 79
            echo "  ";
            $context["heading"] = $this->getAttribute(($context["configuration"] ?? null), "label", []);
        }
        // line 81
        echo "
";
        // line 83
        $context["heading_id"] = (($context["heading_id"]) ?? (false));
        // line 84
        if ((($this->getAttribute(($context["attributes"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "id", []))) : (""))) {
            // line 85
            echo "  ";
            $context["heading_id"] = (twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", []))), ["_" => "-"]) . "-heading");
        } else {
            // line 87
            echo "  ";
            $context["heading_id"] = ((("heading-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["heading"] ?? null))), ["_" => "-"])) . "-") . twig_date_format_filter($this->env, "now", "Ydm"));
        }
        // line 89
        echo "
";
        // line 98
        echo "
<div ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_block_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_block_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_block_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_block_extra"] ?? null))]));
        echo "
  ";
        // line 100
        if ((((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : ("")) == false) && ((array_key_exists("heading", $context)) ? (_twig_default_filter(($context["heading"] ?? null))) : ("")))) {
            echo " aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "\"";
        }
        // line 101
        echo "  ";
        if (((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : ("")) && ((array_key_exists("heading", $context)) ? (_twig_default_filter(($context["heading"] ?? null))) : ("")))) {
            echo " aria-labelledby=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">

  ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 105
        echo "  ";
        if ((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : (""))) {
            // line 106
            echo "    ";
            $this->loadTemplate("@rocketship-theme-starter-atoms/02-text/00-headings/_heading.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/00-block/block--content--creating-better.html.twig", 106)->display(twig_array_merge($context, ["heading_id" =>             // line 107
($context["heading_id"] ?? null), "heading_level" =>             // line 108
($context["heading_level"] ?? null), "heading" =>             // line 109
($context["heading"] ?? null), "heading_display" => $this->getAttribute(            // line 110
($context["configuration"] ?? null), "label_display", [])]));
            // line 112
            echo "  ";
        }
        // line 113
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 115
        $this->displayBlock('block_content', $context, $blocks);
        // line 120
        echo "
</div>
";
    }

    // line 115
    public function block_block_content($context, array $blocks = [])
    {
        // line 116
        echo "    <div class=\"post_container\">
      ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/00-block/block--content--creating-better.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 117,  212 => 116,  209 => 115,  203 => 120,  201 => 115,  195 => 113,  192 => 112,  190 => 110,  189 => 109,  188 => 108,  187 => 107,  185 => 106,  182 => 105,  178 => 103,  168 => 101,  162 => 100,  158 => 99,  155 => 98,  152 => 89,  148 => 87,  144 => 85,  142 => 84,  140 => 83,  137 => 81,  133 => 79,  129 => 77,  127 => 76,  124 => 74,  122 => 73,  119 => 72,  114 => 71,  111 => 70,  107 => 68,  105 => 67,  102 => 66,  97 => 65,  92 => 64,  87 => 63,  82 => 62,  77 => 61,  72 => 60,  67 => 59,  64 => 58,  60 => 57,  57 => 56,  55 => 55,  52 => 54,  48 => 52,  46 => 51,  43 => 50,  41 => 49,  38 => 48,  36 => 47,  33 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/00-block/block--content--creating-better.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/00-block/block--content--creating-better.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 47, "if" => 51, "include" => 106, "block" => 115];
        static $filters = ["default" => 47, "merge" => 59, "replace" => 59, "clean_class" => 59, "date" => 87, "escape" => 100];
        static $functions = ["bem" => 99];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['default', 'merge', 'replace', 'clean_class', 'date', 'escape'],
                ['bem']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
