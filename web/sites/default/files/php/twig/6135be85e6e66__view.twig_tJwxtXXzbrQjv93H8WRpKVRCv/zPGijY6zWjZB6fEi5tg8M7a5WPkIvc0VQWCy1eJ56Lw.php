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

/* @rocketship-theme-starter-organisms/00-overview/_view.twig */
class __TwigTemplate_7fcdce45e8b8ec0d14258663737fe0e3d7296f379f9ead66b708a41423cbd655 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 42
        echo "
";
        // line 43
        $context["bem_view_block"] = ((array_key_exists("bem_view_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_view_block"] ?? null)), "view")) : ("view"));
        // line 44
        echo "
";
        // line 45
        $context["bem_view_element"] = ((array_key_exists("bem_view_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_view_element"] ?? null)), false)) : (false));
        // line 46
        echo "
";
        // line 47
        if ( !array_key_exists("bem_view_modifiers", $context)) {
            // line 48
            echo "  ";
            $context["bem_view_modifiers"] = [];
        }
        // line 51
        $context["bem_view_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_view_modifiers"] ?? null)), [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["id"] ?? null))), 1 => ("display-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["display_id"] ?? null))))]);
        // line 56
        echo "
";
        // line 57
        if ( !array_key_exists("bem_view_extra", $context)) {
            // line 58
            echo "  ";
            $context["bem_view_extra"] = [];
        }
        // line 60
        echo "

";
        // line 62
        $context["bem_view_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_view_extra"] ?? null)), [0 => ((        // line 63
($context["id"] ?? null)) ? (("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["id"] ?? null))))) : ("")), 1 => ((        // line 64
($context["id"] ?? null)) ? (("view-id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["id"] ?? null))))) : ("")), 2 => ((        // line 65
($context["display_id"] ?? null)) ? (("view-display-id-" . $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null)))) : ("")), 3 => ((        // line 66
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))]);
        // line 69
        echo "
<div";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_view_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_view_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_view_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_view_extra"] ?? null))]));
        echo ">
  ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 72
        if (($context["title"] ?? null)) {
            // line 73
            echo "    ";
            $this->loadTemplate("@rocketship-theme-starter-atoms/02-text/00-headings/_heading.twig", "@rocketship-theme-starter-organisms/00-overview/_view.twig", 73)->display(twig_array_merge($context, ["heading_level" => 2, "heading" =>             // line 75
($context["title"] ?? null)]));
            // line 77
            echo "  ";
        }
        // line 78
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 79
        if (($context["header"] ?? null)) {
            // line 80
            echo "    <div class=\"view__header\">
      ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 85
            echo "    <div class=\"view__filters\">
      ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 89
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 90
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (($context["rows"] ?? null)) {
            // line 96
            echo "    <div class=\"view__content\">
      ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 99
($context["empty"] ?? null)) {
            // line 100
            echo "    <div class=\"view__empty\">
      ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if (($context["pager"] ?? null)) {
            // line 106
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 108
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 109
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 113
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 114
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 116
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 117
            echo "    <div class=\"view__footer\">
      ";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 121
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 122
            echo "    <div class=\"feed__icons\">
      ";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 126
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/00-overview/_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 126,  208 => 123,  205 => 122,  202 => 121,  196 => 118,  193 => 117,  190 => 116,  184 => 114,  181 => 113,  175 => 110,  172 => 109,  169 => 108,  163 => 106,  161 => 105,  158 => 104,  152 => 101,  149 => 100,  147 => 99,  142 => 97,  139 => 96,  137 => 95,  134 => 94,  128 => 91,  125 => 90,  122 => 89,  116 => 86,  113 => 85,  110 => 84,  104 => 81,  101 => 80,  99 => 79,  94 => 78,  91 => 77,  89 => 75,  87 => 73,  85 => 72,  81 => 71,  77 => 70,  74 => 69,  72 => 66,  71 => 65,  70 => 64,  69 => 63,  68 => 62,  64 => 60,  60 => 58,  58 => 57,  55 => 56,  53 => 53,  52 => 52,  51 => 51,  47 => 48,  45 => 47,  42 => 46,  40 => 45,  37 => 44,  35 => 43,  32 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/00-overview/_view.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 43, "if" => 47, "include" => 73];
        static $filters = ["default" => 43, "merge" => 51, "clean_class" => 52, "escape" => 71];
        static $functions = ["bem" => 70];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'merge', 'clean_class', 'escape'],
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
