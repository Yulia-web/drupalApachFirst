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

/* @rocketship-theme-starter-atoms/04-images/00-image/_image.twig */
class __TwigTemplate_c74ba6cbeec833969757c93b57a480611a1cd35a7179fc2ca20aca94aef528bb extends \Twig\Template
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
        // line 1
        $context["image_bem_block"] = (($context["image_bem_block"]) ?? (false));
        // line 2
        $context["image_bem_element"] = ((array_key_exists("image_bem_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["image_bem_element"] ?? null)), "image")) : ("image"));
        // line 3
        $context["image_modifiers"] = ((array_key_exists("image_modifiers", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["image_modifiers"] ?? null)), [])) : ([]));
        // line 4
        $context["image_bem_extra"] = ((array_key_exists("image_bem_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["image_bem_extra"] ?? null)), [])) : ([]));
        // line 5
        echo "
";
        // line 10
        $context["alternativeAlt"] = ($context["image_alt"] ?? null);
        // line 11
        if ((((null === ($context["image_alt"] ?? null)) ||  !array_key_exists("image_alt", $context)) || twig_test_empty(($context["image_alt"] ?? null)))) {
            // line 12
            $context["alternativeAlt"] = "";
        }
        // line 14
        echo "
<img
  ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["image_bem_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["image_bem_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["image_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["image_bem_extra"] ?? null))]));
        echo "
  ";
        // line 18
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 19
            echo "    ";
            if ((((((($context["attribute"] != "class") && ($context["attribute"] != "srcset")) && ($context["attribute"] != "sizes")) && ($context["attribute"] != "src")) && ($context["attribute"] != "alt")) && ($context["attribute"] != "title"))) {
                // line 20
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"]), "html", null, true);
                echo "=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                echo "\"
    ";
            }
            // line 22
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
  ";
        // line 24
        if (($context["image_srcset"] ?? null)) {
            // line 25
            echo "    srcset=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_srcset"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 27
        echo "  ";
        if (($context["image_sizes"] ?? null)) {
            // line 28
            echo "    sizes=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_sizes"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 30
        echo "  src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_src"] ?? null)), "html", null, true);
        echo "\"
  alt=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alternativeAlt"] ?? null)), "html", null, true);
        echo "\"
  ";
        // line 32
        if (($context["image_title"] ?? null)) {
            // line 33
            echo "    title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_title"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 35
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/04-images/00-image/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  111 => 33,  109 => 32,  105 => 31,  100 => 30,  94 => 28,  91 => 27,  85 => 25,  83 => 24,  80 => 23,  74 => 22,  66 => 20,  63 => 19,  58 => 18,  54 => 16,  50 => 14,  47 => 12,  45 => 11,  43 => 10,  40 => 5,  38 => 4,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/04-images/00-image/_image.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/04-images/00-image/_image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 11, "for" => 18];
        static $filters = ["default" => 2, "escape" => 20];
        static $functions = ["bem" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'escape'],
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
