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

/* @rocketship-theme-starter-pages/page--404/_page--system--404.twig */
class __TwigTemplate_69d8bf62d0cf5f4807ced8c3729e0e462fd75e555c58a5a01e9c66f4f7d73273 extends \Twig\Template
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
        // line 5
        $this->loadTemplate("@rocketship-theme-starter-pages/page--404/_page--system--404.twig", "@rocketship-theme-starter-pages/page--404/_page--system--404.twig", 5, "1604590403")->display($context);
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-pages/page--404/_page--system--404.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-pages/page--404/_page--system--404.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/05-pages/page--404/_page--system--404.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["embed" => 5];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
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


/* @rocketship-theme-starter-pages/page--404/_page--system--404.twig */
class __TwigTemplate_69d8bf62d0cf5f4807ced8c3729e0e462fd75e555c58a5a01e9c66f4f7d73273___1604590403 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        return "@rocketship-theme-starter-pages/page/_page--master.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@rocketship-theme-starter-pages/page/_page--master.twig", "@rocketship-theme-starter-pages/page--404/_page--system--404.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_pageContent($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

    <div class=\"actions actions--404\">
      <a href=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\" rel=\"home\" class=\"button\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to the frontpage"));
        echo "</a>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-pages/page--404/_page--system--404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 13,  117 => 10,  114 => 9,  32 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-pages/page--404/_page--system--404.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/05-pages/page--404/_page--system--404.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 10, "t" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
