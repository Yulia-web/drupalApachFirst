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

/* @rocketship-theme-starter-organisms/header/header--primary/_header--primary.twig */
class __TwigTemplate_b9c1581581be559db5dd6bbd9b6270dcce0b3bf25cb2a28820987e0a4696357e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_section_primary' => [$this, 'block_header_section_primary'],
            'header_section_primary_content' => [$this, 'block_header_section_primary_content'],
            'header_section_secondary' => [$this, 'block_header_section_secondary'],
            'header_section_secondary_content' => [$this, 'block_header_section_secondary_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"header header--primary\">
  <div class=\"container\">

    ";
        // line 5
        echo "    ";
        $this->displayBlock('header_section_primary', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('header_section_secondary', $context, $blocks);
        // line 27
        echo "
  </div>
</div>
";
    }

    // line 5
    public function block_header_section_primary($context, array $blocks = [])
    {
        // line 6
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 7
            echo "      <div class=\"header__section--primary\">
        ";
            // line 8
            $this->displayBlock('header_section_primary_content', $context, $blocks);
            // line 11
            echo "      </div>
      ";
        }
        // line 13
        echo "    ";
    }

    // line 8
    public function block_header_section_primary_content($context, array $blocks = [])
    {
        // line 9
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        ";
    }

    // line 15
    public function block_header_section_secondary($context, array $blocks = [])
    {
        // line 16
        echo "    <div class=\"header__section--secondary\">
      ";
        // line 17
        $this->displayBlock('header_section_secondary_content', $context, $blocks);
        // line 25
        echo "    </div>
    ";
    }

    // line 17
    public function block_header_section_secondary_content($context, array $blocks = [])
    {
        // line 18
        echo "        ";
        // line 20
        echo "        ";
        $this->loadTemplate("@rocketship-theme-starter-organisms/header/nav/_nav.twig", "@rocketship-theme-starter-organisms/header/header--primary/_header--primary.twig", 20)->display(twig_array_merge($context, ["nav_primary" => $this->getAttribute(        // line 21
($context["page"] ?? null), "nav_primary", []), "nav_secondary" => $this->getAttribute(        // line 22
($context["page"] ?? null), "nav_secondary", [])]));
        // line 24
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/header/header--primary/_header--primary.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  106 => 22,  105 => 21,  103 => 20,  101 => 18,  98 => 17,  93 => 25,  91 => 17,  88 => 16,  85 => 15,  78 => 9,  75 => 8,  71 => 13,  67 => 11,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  49 => 27,  47 => 15,  44 => 14,  41 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/header/header--primary/_header--primary.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/header/header--primary/_header--primary.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 5, "if" => 6, "include" => 20];
        static $filters = ["escape" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
                ['escape'],
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
