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

/* @rocketship-theme-starter-organisms/header/header--top/_header--top.twig */
class __TwigTemplate_b5de963504ad5b30f546b2335362a290d22468c7c49e2507c12d9529d0d703d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'top' => [$this, 'block_top'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("rocketship_theme_starter/component_fixed_menu"), "html", null, true);
        echo "

<div class=\"header-top\">
  <div class=\"container-header\">
    ";
        // line 5
        $this->displayBlock('top', $context, $blocks);
        // line 8
        echo "  </div>
</div>
";
    }

    // line 5
    public function block_top($context, array $blocks = [])
    {
        // line 6
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top", [])), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/header/header--top/_header--top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  48 => 5,  42 => 8,  40 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/header/header--top/_header--top.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/header/header--top/_header--top.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 5];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                ['attach_library']
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
