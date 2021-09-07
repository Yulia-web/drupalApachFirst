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

/* @rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig */
class __TwigTemplate_c5aeba41ce3552a203eb5a19961e1804775ee37499fdbe93e99fff117332a034 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["bem_ul_block"] = ((array_key_exists("bem_ul_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_ul_block"] ?? null)), "ul")) : ("ul"));
        // line 12
        $context["bem_ul_element"] = ((array_key_exists("bem_ul_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_ul_element"] ?? null)), false)) : (false));
        // line 13
        if ( !array_key_exists("bem_ul_modifiers", $context)) {
            // line 14
            echo "  ";
            $context["bem_ul_modifiers"] = [];
        }
        // line 16
        echo "
";
        // line 17
        if (($context["cke"] ?? null)) {
            // line 18
            echo "<div class=\"text-long\">
";
        }
        // line 20
        echo "
<ul ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_ul_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_ul_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_ul_modifiers"] ?? null))]));
        echo ">
  ";
        // line 22
        $this->displayBlock('list_content', $context, $blocks);
        // line 33
        echo "</ul>

";
        // line 35
        if (($context["cke"] ?? null)) {
            // line 36
            echo "</div>
";
        }
    }

    // line 22
    public function block_list_content($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ul_items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ul_item"]) {
            // line 24
            echo "      ";
            $this->loadTemplate("@rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig", "@rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig", 24)->display(twig_array_merge($context, ["list_item_label" => $this->getAttribute(            // line 25
$context["ul_item"], "label", []), "list_item_content" => $this->getAttribute(            // line 26
$context["ul_item"], "content", []), "bem_li_block" => $this->getAttribute(            // line 27
$context["ul_item"], "bem_li_block", []), "bem_li_element" => $this->getAttribute(            // line 28
$context["ul_item"], "bem_li_element", []), "bem_li_modifiers" => $this->getAttribute(            // line 29
$context["ul_item"], "bem_li_modifiers", [])]));
            // line 31
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ul_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  102 => 31,  100 => 29,  99 => 28,  98 => 27,  97 => 26,  96 => 25,  94 => 24,  76 => 23,  73 => 22,  67 => 36,  65 => 35,  61 => 33,  59 => 22,  55 => 21,  52 => 20,  48 => 18,  46 => 17,  43 => 16,  39 => 14,  37 => 13,  35 => 12,  33 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/03-lists/list--ul/_ul.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 13, "block" => 22, "for" => 23, "include" => 24];
        static $filters = ["default" => 11];
        static $functions = ["bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for', 'include'],
                ['default'],
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
