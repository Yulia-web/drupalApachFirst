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

/* @rocketship-theme-starter-atoms/05-forms/input/_input.twig */
class __TwigTemplate_11ca07e5e3ba6cf868733e63f27ad5588f2cea97b478057654b2526b52fa0976 extends \Twig\Template
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
        // line 13
        echo "
";
        // line 14
        $context["value"] = $this->getAttribute(($context["attributes"] ?? null), "value", []);
        // line 15
        echo "
";
        // line 16
        if (($this->getAttribute(($context["attributes"] ?? null), "type", []) == "submit")) {
            // line 17
            echo "  ";
            $context["button_bem_block"] = ((array_key_exists("button_bem_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["button_bem_block"] ?? null)), false)) : (false));
            // line 18
            echo "  ";
            $context["button_bem_element"] = ((array_key_exists("button_bem_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["button_bem_element"] ?? null)), "button")) : ("button"));
            // line 19
            echo "  ";
            $context["button_bem_modifiers"] = ((array_key_exists("button_bem_modifiers", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["button_bem_modifiers"] ?? null)), [])) : ([]));
            // line 20
            echo "  ";
            $context["button_bem_extra"] = ((array_key_exists("button_bem_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["button_bem_extra"] ?? null)), [])) : ([]));
            // line 21
            echo "
  ";
            // line 22
            $context["additional_attributes"] = ["aria-label" => "button"];
            // line 25
            echo "
  ";
            // line 26
            if (($this->getAttribute(($context["attributes"] ?? null), "class", []) != null)) {
                // line 27
                echo "    ";
                $context["button_bem_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["button_bem_extra"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "class", [])));
                // line 28
                echo "  ";
            }
            // line 29
            echo "
  <button
    ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["button_bem_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["button_bem_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["button_bem_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["button_bem_extra"] ?? null))]));
            echo "
    ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null)))]));
            echo "
  >
    ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
            echo "
  </button>
";
        } else {
            // line 37
            echo "  ";
            // line 38
            $context["classes"] = [0 => ("form__input--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 39
($context["attributes"] ?? null), "type", [])))];
            // line 42
            echo "
  ";
            // line 43
            if (($this->getAttribute(($context["attributes"] ?? null), "required", []) && ($this->getAttribute(($context["attributes"] ?? null), "type", []) != ($context["image"] ?? null)))) {
                // line 44
                echo "    ";
                $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "required", 1 => "form__input--required"]);
                // line 45
                echo "  ";
            }
            // line 46
            echo "
  <input ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, false, false, false, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null))]));
            echo "
    ";
            // line 48
            if (($this->getAttribute(($context["attributes"] ?? null), "type", []) == "image")) {
                echo " alt=\"Submit\"";
            }
            // line 49
            echo "  />";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/05-forms/input/_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  112 => 48,  108 => 47,  105 => 46,  102 => 45,  99 => 44,  97 => 43,  94 => 42,  92 => 39,  91 => 38,  89 => 37,  83 => 34,  78 => 32,  74 => 31,  70 => 29,  67 => 28,  64 => 27,  62 => 26,  59 => 25,  57 => 22,  54 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  40 => 16,  37 => 15,  35 => 14,  32 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/05-forms/input/_input.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/05-forms/input/_input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "if" => 16];
        static $filters = ["default" => 17, "merge" => 27, "escape" => 34];
        static $functions = ["bem" => 31, "add_attributes" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'merge', 'escape'],
                ['bem', 'add_attributes']
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
