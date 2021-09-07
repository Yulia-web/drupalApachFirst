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

/* @rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig */
class __TwigTemplate_d507c5e8270fdf07b910ad5d7f8078083d28b609e542a64389700aa4c99ecb93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 15
        echo "
";
        // line 16
        $context["bem_li_block"] = ((array_key_exists("bem_li_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_li_block"] ?? null)), "list")) : ("list"));
        // line 17
        echo "
";
        // line 18
        $context["bem_li_element"] = ((array_key_exists("bem_li_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_li_element"] ?? null)), "item")) : ("item"));
        // line 19
        echo "
";
        // line 20
        if ( !array_key_exists("bem_li_modifiers", $context)) {
            // line 21
            echo "  ";
            $context["bem_li_modifiers"] = [];
        }
        // line 23
        echo "
";
        // line 24
        if ( !array_key_exists("bem_li_extra", $context)) {
            // line 25
            echo "  ";
            $context["bem_li_extra"] = [];
        }
        // line 27
        echo "
<li ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_li_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_li_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_li_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_li_extra"] ?? null))]));
        echo ">
  ";
        // line 29
        $this->displayBlock('list_item_content', $context, $blocks);
        // line 33
        echo "</li>
";
    }

    // line 29
    public function block_list_item_content($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        if (($context["list_item_label"] ?? null)) {
            echo "<strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_label"] ?? null)), "html", null, true);
            echo "</strong> ";
        }
        // line 31
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  78 => 30,  75 => 29,  70 => 33,  68 => 29,  64 => 28,  61 => 27,  57 => 25,  55 => 24,  52 => 23,  48 => 21,  46 => 20,  43 => 19,  41 => 18,  38 => 17,  36 => 16,  33 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/03-lists/list--ul/_list-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 20, "block" => 29];
        static $filters = ["default" => 16, "escape" => 30];
        static $functions = ["bem" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
