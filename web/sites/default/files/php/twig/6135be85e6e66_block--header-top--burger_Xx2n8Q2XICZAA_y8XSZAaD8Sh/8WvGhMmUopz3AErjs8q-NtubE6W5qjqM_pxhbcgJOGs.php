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

/* themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/block--header-top--burgermenu.html.twig */
class __TwigTemplate_904bc980526eeaefab6df7fa399eea152d2aebb2b5a4c57962203db0ca06b056 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'menu_block_content' => [$this, 'block_menu_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 37
        echo "

";
        // line 39
        $context["menu_block_bem_block"] = ((array_key_exists("menu_block_bem_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_block"] ?? null)), false)) : (false));
        // line 40
        echo "
";
        // line 41
        $context["menu_block_bem_element"] = ((array_key_exists("menu_block_bem_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_element"] ?? null)), "nav")) : ("nav"));
        // line 42
        echo "
";
        // line 43
        if ( !array_key_exists("menu_block_bem_modifiers", $context)) {
            // line 44
            echo "  ";
            $context["menu_block_bem_modifiers"] = [];
        }
        // line 46
        echo "
";
        // line 47
        if (($context["base_plugin_id"] ?? null)) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["base_plugin_id"] ?? null))), ["_" => "-"])]);
        }
        // line 48
        if (($context["derivative_plugin_id"] ?? null)) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["derivative_plugin_id"] ?? null))), ["_" => "-"])]);
        }
        // line 49
        if ($this->getAttribute(($context["configuration"] ?? null), "view_mode", [])) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => ("view-mode-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "view_mode", []))), ["_" => "-"]))]);
        }
        // line 50
        if ($this->getAttribute(($context["configuration"] ?? null), "provider", [])) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => ("provider-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "provider", []))), ["_" => "-"]))]);
        }
        // line 51
        if (($context["plugin_id"] ?? null)) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null))), ["_" => "-"])]);
        }
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "region", [])) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => ("region-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "region", []))), ["_" => "-"]))]);
        }
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "type", [])) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => ("type-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "data-bem", [], "array"), "type", []))), ["_" => "-"]))]);
        }
        // line 54
        if (($this->getAttribute(($context["configuration"] ?? null), "view_mode", []) && $this->getAttribute(($context["configuration"] ?? null), "type", []))) {
            echo " ";
            $context["menu_block_bem_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), [0 => ((twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "type", []))), ["_" => "-"]) . "--") . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "view_mode", []))), ["_" => "-"]))]);
        }
        // line 55
        echo "
";
        // line 56
        if ( !array_key_exists("menu_block_bem_extra", $context)) {
            // line 57
            echo "  ";
            $context["menu_block_bem_extra"] = [];
        }
        // line 59
        echo "
";
        // line 60
        $context["menu_block_bem_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_extra"] ?? null)), [0 => "block--menu"]);
        // line 64
        if ($this->getAttribute(($context["configuration"] ?? null), "provider", [])) {
            echo " ";
            $context["menu_block_bem_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_block_bem_extra"] ?? null)), [0 => ("block-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "provider", [])))]);
        }
        // line 65
        echo "
";
        // line 66
        if ($this->getAttribute(($context["attributes"] ?? null), "id", [])) {
            // line 67
            echo "  ";
            $context["heading_id"] = (twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", []))), ["_" => "-"]) . "-heading");
        } else {
            // line 69
            echo "  ";
            $context["heading_id"] = false;
        }
        // line 71
        echo "
";
        // line 72
        $context["title_classes"] = [];
        // line 73
        echo "
";
        // line 74
        $context["heading_level"] = ((array_key_exists("heading_level", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), 4)) : (4));
        // line 75
        echo "
";
        // line 77
        if (((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null))) : (""))) {
            // line 78
            echo "  ";
            $context["heading"] = ($context["label"] ?? null);
        } else {
            // line 80
            echo "  ";
            $context["heading"] = $this->getAttribute(($context["configuration"] ?? null), "label", []);
        }
        // line 82
        echo "
";
        // line 84
        $context["heading_id"] = (($context["heading_id"]) ?? (false));
        // line 85
        if ((($this->getAttribute(($context["attributes"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "id", []))) : (""))) {
            // line 86
            echo "  ";
            $context["heading_id"] = (twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", []))), ["_" => "-"]) . "-heading");
        } else {
            // line 88
            echo "  ";
            $context["heading_id"] = ((("heading-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["heading"] ?? null))), ["_" => "-"])) . "-") . twig_date_format_filter($this->env, "now", "Ydm"));
        }
        // line 90
        echo "
";
        // line 99
        echo "
";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("rocketship_theme_starter/component_mainmenu"), "html", null, true);
        echo "

    <div class=\"header-burger\">
      <span></span>
    </div>
    <nav ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["menu_block_bem_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["menu_block_bem_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["menu_block_bem_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["menu_block_bem_extra"] ?? null))]));
        echo "
      ";
        // line 106
        if ((((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : ("")) == false) && ((array_key_exists("heading", $context)) ? (_twig_default_filter(($context["heading"] ?? null))) : ("")))) {
            echo " aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "\"";
        }
        // line 107
        echo "      ";
        if (((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : ("")) && ((array_key_exists("heading", $context)) ? (_twig_default_filter(($context["heading"] ?? null))) : ("")))) {
            echo " aria-labelledby=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\"";
        }
        // line 108
        echo "      role=\"navigation\">

      ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 112
        echo "      ";
        if ((($this->getAttribute(($context["configuration"] ?? null), "label_display", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "label_display", []))) : (""))) {
            // line 113
            echo "
        ";
            // line 114
            $this->loadTemplate("@rocketship-theme-starter-atoms/02-text/00-headings/_heading.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/block--header-top--burgermenu.html.twig", 114)->display(twig_array_merge($context, ["heading_id" =>             // line 115
($context["heading_id"] ?? null), "heading_level" =>             // line 116
($context["heading_level"] ?? null), "heading" =>             // line 117
($context["heading"] ?? null), "heading_display" => $this->getAttribute(            // line 118
($context["configuration"] ?? null), "label_display", [])]));
            // line 120
            echo "      ";
        }
        // line 121
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 122
        $this->displayBlock('menu_block_content', $context, $blocks);
        // line 125
        echo "    </nav>

";
    }

    // line 122
    public function block_menu_block_content($context, array $blocks = [])
    {
        // line 123
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/block--header-top--burgermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 123,  233 => 122,  227 => 125,  225 => 122,  220 => 121,  217 => 120,  215 => 118,  214 => 117,  213 => 116,  212 => 115,  211 => 114,  208 => 113,  205 => 112,  201 => 110,  197 => 108,  190 => 107,  184 => 106,  180 => 105,  172 => 100,  169 => 99,  166 => 90,  162 => 88,  158 => 86,  156 => 85,  154 => 84,  151 => 82,  147 => 80,  143 => 78,  141 => 77,  138 => 75,  136 => 74,  133 => 73,  131 => 72,  128 => 71,  124 => 69,  120 => 67,  118 => 66,  115 => 65,  110 => 64,  108 => 60,  105 => 59,  101 => 57,  99 => 56,  96 => 55,  91 => 54,  86 => 53,  81 => 52,  76 => 51,  71 => 50,  66 => 49,  61 => 48,  56 => 47,  53 => 46,  49 => 44,  47 => 43,  44 => 42,  42 => 41,  39 => 40,  37 => 39,  33 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/block--header-top--burgermenu.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/block--header-top--burgermenu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 39, "if" => 43, "include" => 114, "block" => 122];
        static $filters = ["default" => 39, "merge" => 47, "replace" => 47, "clean_class" => 47, "date" => 88, "escape" => 100];
        static $functions = ["attach_library" => 100, "bem" => 105];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['default', 'merge', 'replace', 'clean_class', 'date', 'escape'],
                ['attach_library', 'bem']
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
