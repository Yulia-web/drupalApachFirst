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

/* @rocketship-theme-starter-organisms/header/nav/_nav.twig */
class __TwigTemplate_cbf63ff0b465337730633889567aa968e525763c20969b97e9d4ecb6d696f23e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'nav_content' => [$this, 'block_nav_content'],
            'nav_primary' => [$this, 'block_nav_primary'],
            'nav_secondary' => [$this, 'block_nav_secondary'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"wrapper--navigation\">
  <a href=\"#\" id=\"toggle-expand\" class=\"navigation__toggle-expand\">
    <span class=\"visually-hidden\">
      ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Mobile menu expand icon"));
        echo "
    </span>
    <span class=\"navigation__toggle-expand__group navigation__toggle-expand__group--open\">
      <span class=\"navigation__toggle-expand__icon navigation__toggle-expand__icon--open\"></span>
      <span class=\"navigation__toggle-expand__text navigation__toggle-expand__text--open\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu"));
        echo "</span>
    </span>
    <span class=\"navigation__toggle-expand__group navigation__toggle-expand__group--closed\">
      <span class=\"navigation__toggle-expand__icon navigation__toggle-expand__icon--closed\"></span>
      <span class=\"navigation__toggle-expand__text navigation__toggle-expand__text--closed\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</span>
    </span>
  </a>
  <div class=\"wrapper--navigation__content\">
    ";
        // line 19
        $this->displayBlock('nav_content', $context, $blocks);
        // line 47
        echo "  </div>
</div>
";
    }

    // line 19
    public function block_nav_content($context, array $blocks = [])
    {
        // line 20
        echo "
      ";
        // line 23
        echo "      ";
        if (($context["nav_primary"] ?? null)) {
            // line 24
            echo "      <div class=\"nav-section nav-section--primary\">
        ";
            // line 25
            $this->displayBlock('nav_primary', $context, $blocks);
            // line 28
            echo "      </div>
      ";
        }
        // line 30
        echo "
      ";
        // line 32
        echo "      ";
        if (($context["nav_secondary"] ?? null)) {
            // line 33
            echo "      <div class=\"nav-section nav-section--secondary\">
        ";
            // line 34
            $this->displayBlock('nav_secondary', $context, $blocks);
            // line 37
            echo "      </div>
      ";
        }
        // line 39
        echo "
      ";
        // line 42
        echo "      ";
        // line 45
        echo "
    ";
    }

    // line 25
    public function block_nav_primary($context, array $blocks = [])
    {
        // line 26
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_primary"] ?? null)), "html", null, true);
        echo "
        ";
    }

    // line 34
    public function block_nav_secondary($context, array $blocks = [])
    {
        // line 35
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_secondary"] ?? null)), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/header/nav/_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  122 => 34,  115 => 26,  112 => 25,  107 => 45,  105 => 42,  102 => 39,  98 => 37,  96 => 34,  93 => 33,  90 => 32,  87 => 30,  83 => 28,  81 => 25,  78 => 24,  75 => 23,  72 => 20,  69 => 19,  63 => 47,  61 => 19,  54 => 15,  47 => 11,  40 => 7,  35 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/header/nav/_nav.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/header/nav/_nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 19, "if" => 23];
        static $filters = ["t" => 7, "escape" => 26];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
