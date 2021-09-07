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

/* @rocketship-theme-starter-organisms/header/_header.twig */
class __TwigTemplate_cc805427f03bb12fc01044385259655727513dc6feb39efb7c6a0137b84bd38d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'pageHeaderTop' => [$this, 'block_pageHeaderTop'],
            'pageHeaderPrimary' => [$this, 'block_pageHeaderPrimary'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header role=\"banner\" class=\"wrapper--headers\">
  ";
        // line 2
        $this->displayBlock('pageHeaderTop', $context, $blocks);
        // line 7
        echo "
  ";
        // line 8
        $this->displayBlock('pageHeaderPrimary', $context, $blocks);
        // line 11
        echo "</header>
";
    }

    // line 2
    public function block_pageHeaderTop($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "header_top", []) || $this->getAttribute(($context["page"] ?? null), "header_top_nav", []))) {
            // line 4
            echo "      ";
            $this->loadTemplate("@rocketship-theme-starter-organisms/header/header--top/_header--top.twig", "@rocketship-theme-starter-organisms/header/_header.twig", 4)->display($context);
            // line 5
            echo "    ";
        }
        // line 6
        echo "  ";
    }

    // line 8
    public function block_pageHeaderPrimary($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        $this->loadTemplate("@rocketship-theme-starter-organisms/header/header--primary/_header--primary.twig", "@rocketship-theme-starter-organisms/header/_header.twig", 9)->display($context);
        // line 10
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/header/_header.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  68 => 9,  65 => 8,  61 => 6,  58 => 5,  55 => 4,  52 => 3,  49 => 2,  44 => 11,  42 => 8,  39 => 7,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/header/_header.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/header/_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 2, "if" => 3, "include" => 4];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
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
