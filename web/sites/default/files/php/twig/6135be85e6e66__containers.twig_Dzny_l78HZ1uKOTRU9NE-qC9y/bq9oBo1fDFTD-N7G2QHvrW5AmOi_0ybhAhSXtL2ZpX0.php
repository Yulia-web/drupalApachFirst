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

/* @rocketship-theme-starter-atoms/05-forms/containers/_containers.twig */
class __TwigTemplate_f99dc162e1a333f96e65dc47f3b9e586879de2699feec5287b86250871c3ecf0 extends \Twig\Template
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
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        if ((($context["has_parent"] ?? null) && twig_in_filter("form-actions", twig_get_array_keys_filter($this->getAttribute(($context["attributes"] ?? null), "class", []))))) {
            // line 26
            echo "
  ";
            // line 27
            $context["bem_container_block"] = ((array_key_exists("bem_container_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_container_block"] ?? null)), "form")) : ("form"));
            // line 28
            echo "  ";
            $context["bem_container_element"] = ((array_key_exists("bem_container_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_container_element"] ?? null)), "group")) : ("group"));
            // line 29
            echo "  ";
            if ( !array_key_exists("bem_container_modifiers", $context)) {
                // line 30
                echo "    ";
                $context["bem_container_modifiers"] = [];
                // line 31
                echo "  ";
            }
            // line 32
            echo "  ";
            $context["bem_container_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_container_modifiers"] ?? null)), []);
            // line 34
            echo "
";
        } else {
            // line 36
            echo "
  ";
            // line 39
            echo "
  ";
            // line 40
            $context["bem_container_block"] = ((array_key_exists("bem_container_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_container_block"] ?? null)), "group")) : ("group"));
            // line 41
            echo "
  ";
            // line 42
            $context["bem_container_element"] = ((array_key_exists("bem_container_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_container_element"] ?? null)), false)) : (false));
            // line 43
            echo "
  ";
            // line 44
            if ( !array_key_exists("bem_container_modifiers", $context)) {
                // line 45
                echo "    ";
                $context["bem_container_modifiers"] = [];
                // line 46
                echo "  ";
            }
            // line 47
            echo "  ";
            $context["bem_container_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_container_modifiers"] ?? null)), []);
        }
        // line 50
        echo "
";
        // line 52
        echo "
";
        // line 54
        $context["classes"] = [0 => (((        // line 55
($context["has_parent"] ?? null) && twig_in_filter("form-actions", twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "class", [])))))) ? ("js-form-wrapper") : ("")), 1 => (((        // line 56
($context["has_parent"] ?? null) && twig_in_filter("form-actions", twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "class", [])))))) ? ("form-wrapper") : (""))];
        // line 59
        echo "
";
        // line 60
        if ( !array_key_exists("bem_container_extra", $context)) {
            // line 61
            echo "  ";
            $context["bem_container_extra"] = [];
        }
        // line 63
        echo "
";
        // line 64
        $context["bem_container_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_container_extra"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)));
        // line 65
        echo "
<div ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_container_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_container_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_container_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_container_extra"] ?? null))]));
        echo ">
  ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/05-forms/containers/_containers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 67,  119 => 66,  116 => 65,  114 => 64,  111 => 63,  107 => 61,  105 => 60,  102 => 59,  100 => 56,  99 => 55,  98 => 54,  95 => 52,  92 => 50,  88 => 47,  85 => 46,  82 => 45,  80 => 44,  77 => 43,  75 => 42,  72 => 41,  70 => 40,  67 => 39,  64 => 36,  60 => 34,  57 => 32,  54 => 31,  51 => 30,  48 => 29,  45 => 28,  43 => 27,  40 => 26,  38 => 25,  35 => 24,  32 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/05-forms/containers/_containers.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/05-forms/containers/_containers.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25, "set" => 27];
        static $filters = ["keys" => 25, "default" => 27, "merge" => 32, "escape" => 67];
        static $functions = ["bem" => 66];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['keys', 'default', 'merge', 'escape'],
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
