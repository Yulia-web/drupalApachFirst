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

/* themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/links/_drupal/templates/links.html.twig */
class __TwigTemplate_a81852b876ebee32895960ffa8818feb1f54ac79908ed072b30149064877fdb0 extends \Twig\Template
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
        // line 34
        $this->loadTemplate("@rocketship-theme-starter-molecules/links/_links.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/links/_drupal/templates/links.html.twig", 34)->display($context);
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/links/_drupal/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 35,  32 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/links/_drupal/templates/links.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/links/_drupal/templates/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 34];
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
