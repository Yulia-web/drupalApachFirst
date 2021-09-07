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

/* @rocketship-theme-starter-molecules/menus/menu/_menu.twig */
class __TwigTemplate_be596e211bed47c1dca7f237199742dcb30f11b18585db8eca8e1a2c11874927 extends \Twig\Template
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
        // line 23
        $context["menus"] = $this->loadTemplate("@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", "@rocketship-theme-starter-molecules/menus/menu/_menu.twig", 23)->unwrap();
        // line 24
        echo "
";
        // line 26
        $context["has_link_title"] = (($context["has_link_title"]) ?? (false));
        // line 27
        echo "
";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), ($context["has_link_title"] ?? null), 0, ($context["bem_menu_block"] ?? null), ($context["bem_menu_element"] ?? null), ($context["bem_menu_modifiers"] ?? null), ($context["bem_item_block"] ?? null), ($context["bem_item_element"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-molecules/menus/menu/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 32,  42 => 27,  40 => 26,  37 => 24,  35 => 23,  32 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-molecules/menus/menu/_menu.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "set" => 26];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set'],
                [],
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
