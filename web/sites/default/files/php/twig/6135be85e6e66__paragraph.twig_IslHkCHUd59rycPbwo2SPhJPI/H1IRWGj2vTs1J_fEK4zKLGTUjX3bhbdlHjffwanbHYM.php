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

/* @rocketship-theme-starter-p-organisms/00-paragraphs/_paragraph.twig */
class __TwigTemplate_3d15bc45a8afa47addc34bb4cf38da27d82231d244cb4a94c900c74aa858e249 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'paragraph_content' => [$this, 'block_paragraph_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 39
        echo "
";
        // line 52
        echo "

";
        // line 58
        echo "
";
        // line 59
        $context["bem_p_block"] = ((array_key_exists("bem_p_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_p_block"] ?? null)), "paragraph")) : ("paragraph"));
        // line 60
        echo "
";
        // line 61
        $context["bem_p_element"] = ((array_key_exists("bem_p_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_p_element"] ?? null)), false)) : (false));
        // line 62
        echo "
";
        // line 63
        if ( !array_key_exists("bem_p_modifiers", $context)) {
            // line 64
            echo "  ";
            $context["bem_p_modifiers"] = [];
        }
        // line 66
        echo "
";
        // line 67
        if ($this->getAttribute(($context["node"] ?? null), "isPromoted", [], "method")) {
            $context["bem_p_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), [0 => "promoted"]);
        }
        // line 68
        if ($this->getAttribute(($context["node"] ?? null), "isSticky", [], "method")) {
            $context["bem_p_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), [0 => "sticky"]);
        }
        // line 69
        if (($context["view_mode"] ?? null)) {
            $context["bem_p_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), [0 => ("view-mode-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))), ["_" => "-"]))]);
        }
        // line 70
        if ($this->getAttribute(($context["paragraph"] ?? null), "bundle", [])) {
            $context["bem_p_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), [0 => ("type-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["paragraph"] ?? null), "bundle", []))), ["_" => "-"]))]);
        }
        // line 71
        if (($context["type"] ?? null)) {
            $context["bem_p_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), [0 => ("type-" . twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null))), ["_" => "-"]))]);
        }
        // line 72
        echo "
";
        // line 73
        if ( !array_key_exists("bem_p_extra", $context)) {
            // line 74
            echo "  ";
            $context["bem_p_extra"] = [];
        }
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 78
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_p_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_p_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_p_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_p_extra"] ?? null))]));
        echo ">
  ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 81
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 84
        echo "</div>
";
    }

    // line 81
    public function block_paragraph_content($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-p-organisms/00-paragraphs/_paragraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 82,  121 => 81,  116 => 84,  114 => 81,  110 => 80,  106 => 79,  101 => 78,  95 => 77,  92 => 76,  88 => 74,  86 => 73,  83 => 72,  79 => 71,  75 => 70,  71 => 69,  67 => 68,  63 => 67,  60 => 66,  56 => 64,  54 => 63,  51 => 62,  49 => 61,  46 => 60,  44 => 59,  41 => 58,  37 => 52,  34 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-p-organisms/00-paragraphs/_paragraph.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_paragraph.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "if" => 63, "block" => 77];
        static $filters = ["default" => 59, "merge" => 67, "replace" => 69, "clean_class" => 69, "escape" => 79];
        static $functions = ["bem" => 78];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['default', 'merge', 'replace', 'clean_class', 'escape'],
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
