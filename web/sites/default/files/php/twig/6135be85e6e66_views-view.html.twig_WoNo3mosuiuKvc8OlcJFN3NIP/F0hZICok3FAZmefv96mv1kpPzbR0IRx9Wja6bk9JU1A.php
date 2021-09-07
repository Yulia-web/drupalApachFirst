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

/* themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_drupal/templates/views-view.html.twig */
class __TwigTemplate_744c108c8d571ca0b10df367d53c795b17cf2ad1b529c8a6888143c0c93bfe29 extends \Twig\Template
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
        // line 33
        $this->loadTemplate("@rocketship-theme-starter-organisms/00-overview/_view.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_drupal/templates/views-view.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_drupal/templates/views-view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_drupal/templates/views-view.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/00-overview/_drupal/templates/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 33];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
