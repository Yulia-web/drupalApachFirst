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

/* themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_drupal/templates/paragraph.html.twig */
class __TwigTemplate_c3d34ee55b2ae91ac9e4f42afe5fa9b14fdc6cb30f2051e68517f617d3cc1c2e extends \Twig\Template
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
        // line 40
        echo "
";
        // line 41
        $this->loadTemplate("@rocketship-theme-starter-p-organisms/00-paragraphs/_paragraph.twig", "themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_drupal/templates/paragraph.html.twig", 41)->display($context);
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_drupal/templates/paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 42,  35 => 41,  32 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_drupal/templates/paragraph.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/01-paragraphs/03-organisms/00-paragraphs/_drupal/templates/paragraph.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 41];
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
