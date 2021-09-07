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

/* @rocketship-theme-starter-atoms/04-images/00-image/_image--tag.twig */
class __TwigTemplate_ccbfaa3e90ef30f7fbdfe81af17edf5ba8f665a6a510cfbd1b63675ba575f4d8 extends \Twig\Template
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
        // line 14
        $context["classes"] = [0 => ((        // line 15
($context["style_name"] ?? null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["style_name"] ?? null))))) : (""))];
        // line 18
        echo "
";
        // line 23
        $context["alternativeAlt"] = $this->getAttribute(($context["attributes"] ?? null), "alt", []);
        // line 24
        if ((((null === $this->getAttribute(($context["attributes"] ?? null), "alt", [])) ||  !$this->getAttribute(($context["attributes"] ?? null), "alt", [], "any", true, true)) || twig_test_empty($this->getAttribute(($context["attributes"] ?? null), "alt", [])))) {
            // line 25
            $context["alternativeAlt"] = "";
        }
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $context["imgSource"] = (($this->getAttribute(($context["attributes"] ?? null), "data-src", [], "array", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "data-src", [], "array")), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "src", [], "array")))) : ($this->getAttribute(($context["attributes"] ?? null), "src", [], "array")));
        // line 31
        echo "
";
        // line 32
        $this->loadTemplate("@rocketship-theme-starter-atoms/04-images/00-image/_image.twig", "@rocketship-theme-starter-atoms/04-images/00-image/_image--tag.twig", 32)->display(twig_array_merge($context, ["image_bem_block" =>         // line 33
($context["image_bem_block"] ?? null), "image_bem_element" =>         // line 34
($context["image_bem_element"] ?? null), "image_bem_modifiers" =>         // line 35
($context["image_bem_modifiers"] ?? null), "image_bem_extra" => ((        // line 36
array_key_exists("image_bem_extra", $context)) ? (_twig_default_filter(($context["image_bem_extra"] ?? null), ($context["classes"] ?? null))) : (($context["classes"] ?? null))), "image_srcset" => ((        // line 37
array_key_exists("image_srcset", $context)) ? (_twig_default_filter(($context["image_srcset"] ?? null), $this->getAttribute(($context["attributes"] ?? null), "srcset", []))) : ($this->getAttribute(($context["attributes"] ?? null), "srcset", []))), "image_sizes" => ((        // line 38
array_key_exists("image_sizes", $context)) ? (_twig_default_filter(($context["image_sizes"] ?? null), $this->getAttribute(($context["attributes"] ?? null), "sizes", []))) : ($this->getAttribute(($context["attributes"] ?? null), "sizes", []))), "image_src" => ((        // line 39
array_key_exists("image_src", $context)) ? (_twig_default_filter(($context["image_src"] ?? null), ($context["imgSource"] ?? null))) : (($context["imgSource"] ?? null))), "image_alt" => ((        // line 40
array_key_exists("image_alt", $context)) ? (_twig_default_filter(($context["image_alt"] ?? null), ($context["alternativeAlt"] ?? null))) : (($context["alternativeAlt"] ?? null))), "image_title" => ((        // line 41
array_key_exists("image_title", $context)) ? (_twig_default_filter(($context["image_title"] ?? null), $this->getAttribute(($context["attributes"] ?? null), "title", []))) : ($this->getAttribute(($context["attributes"] ?? null), "title", []))), "attributes" =>         // line 42
($context["attributes"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/04-images/00-image/_image--tag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  65 => 41,  64 => 40,  63 => 39,  62 => 38,  61 => 37,  60 => 36,  59 => 35,  58 => 34,  57 => 33,  56 => 32,  53 => 31,  51 => 30,  48 => 29,  45 => 27,  42 => 25,  40 => 24,  38 => 23,  35 => 18,  33 => 15,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/04-images/00-image/_image--tag.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/04-images/00-image/_image--tag.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "if" => 24, "include" => 32];
        static $filters = ["clean_class" => 15, "default" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'default'],
                []
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
