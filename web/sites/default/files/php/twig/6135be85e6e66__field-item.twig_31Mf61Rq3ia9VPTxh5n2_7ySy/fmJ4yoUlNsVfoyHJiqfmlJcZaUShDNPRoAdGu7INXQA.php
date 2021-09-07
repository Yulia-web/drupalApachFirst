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

/* @rocketship-theme-starter-atoms/00-field/_field-item.twig */
class __TwigTemplate_b57307c3029d7e871cfc554afa14be149bb6d378af36dac9019d4964e854a51c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'fielditem_content' => [$this, 'block_fielditem_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["bem_fielditem_block"] = (($context["bem_fielditem_block"]) ?? (false));
        // line 2
        $context["bem_fielditem_element"] = ((array_key_exists("bem_fielditem_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_fielditem_element"] ?? null)), "item")) : ("item"));
        // line 3
        $context["bem_fielditem_modifiers"] = ((array_key_exists("bem_fielditem_modifiers", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_fielditem_modifiers"] ?? null)), [])) : ([]));
        // line 4
        echo "
<div";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_fielditem_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_fielditem_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_fielditem_modifiers"] ?? null))]));
        echo ">
  ";
        // line 6
        $this->displayBlock('fielditem_content', $context, $blocks);
        // line 9
        echo "</div>
";
    }

    // line 6
    public function block_fielditem_content($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/00-field/_field-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  48 => 9,  46 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/00-field/_field-item.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/_field-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 6];
        static $filters = ["default" => 2, "escape" => 7];
        static $functions = ["bem" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
