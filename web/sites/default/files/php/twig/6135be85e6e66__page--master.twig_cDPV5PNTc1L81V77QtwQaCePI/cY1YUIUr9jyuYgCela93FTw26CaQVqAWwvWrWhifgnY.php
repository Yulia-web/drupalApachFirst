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

/* @rocketship-theme-starter-pages/page/_page--master.twig */
class __TwigTemplate_179aec490521a0531ef0a6e15f916ce41d209fcfc9b16cba05e07c1bd2667a89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'headerWrapper' => [$this, 'block_headerWrapper'],
            'pageTabs' => [$this, 'block_pageTabs'],
            'header' => [$this, 'block_header'],
            'pageMessages' => [$this, 'block_pageMessages'],
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageMain' => [$this, 'block_pageMain'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageDoormat' => [$this, 'block_pageDoormat'],
            'pageFooter' => [$this, 'block_pageFooter'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "
<div class=\"page-wrapper\">

  <div class=\"sticky-spacer\"></div>

  ";
        // line 50
        $this->displayBlock('headerWrapper', $context, $blocks);
        // line 63
        echo "
  <div class=\"page\">

    ";
        // line 66
        $this->displayBlock('pageMessages', $context, $blocks);
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('pageBreadcrumb', $context, $blocks);
        // line 86
        echo "
    ";
        // line 87
        $this->displayBlock('pageMain', $context, $blocks);
        // line 125
        echo "
  </div>

  ";
        // line 128
        $this->displayBlock('pageDoormat', $context, $blocks);
        // line 131
        echo "
  ";
        // line 132
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 135
        echo "
</div>
";
    }

    // line 50
    public function block_headerWrapper($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"wrapper--page-top\">
      ";
        // line 52
        $this->displayBlock('pageTabs', $context, $blocks);
        // line 57
        echo "
      ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "    </div>
  ";
    }

    // line 52
    public function block_pageTabs($context, array $blocks = [])
    {
        // line 53
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "tabs", [])) {
            // line 54
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tabs", [])), "html", null, true);
            echo "
        ";
        }
        // line 56
        echo "      ";
    }

    // line 58
    public function block_header($context, array $blocks = [])
    {
        // line 59
        echo "      ";
        $this->loadTemplate("@rocketship-theme-starter-organisms/header/_header.twig", "@rocketship-theme-starter-pages/page/_page--master.twig", 59)->display($context);
        // line 60
        echo "      ";
    }

    // line 66
    public function block_pageMessages($context, array $blocks = [])
    {
        // line 67
        echo "      ";
        if (($this->getAttribute(($context["page"] ?? null), "highlighted", []) || $this->getAttribute(($context["page"] ?? null), "messages", []))) {
            // line 68
            echo "      <div class=\"highlighted\">
        <div class=\"container\">
          ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 75
        echo "    ";
    }

    // line 77
    public function block_pageBreadcrumb($context, array $blocks = [])
    {
        // line 78
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 79
            echo "        <div class=\"breadcrumbs\">
          <div class=\"container\">
            ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 85
        echo "    ";
    }

    // line 87
    public function block_pageMain($context, array $blocks = [])
    {
        // line 88
        echo "
      ";
        // line 89
        $context["pageSidebarClass"] = "has-sidebars";
        // line 90
        echo "
      ";
        // line 91
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) == false) && ($this->getAttribute(($context["page"] ?? null), "sidebar_second", []) == false))) {
            // line 92
            echo "        ";
            $context["pageSidebarClass"] = " no-sidebars";
            // line 93
            echo "      ";
        } elseif (($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && ($this->getAttribute(($context["page"] ?? null), "sidebar_second", []) == false))) {
            // line 94
            echo "        ";
            $context["pageSidebarClass"] = " has-sidebar-primary";
            // line 95
            echo "      ";
        } elseif ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) == false) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 96
            echo "        ";
            $context["pageSidebarClass"] = " has-sidebar-secondary";
            // line 97
            echo "      ";
        }
        // line 98
        echo "
    <main role=\"main\" class=\"main";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageSidebarClass"] ?? null)), "html", null, true);
        echo "\">

      <div class=\"container\">

        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 104
        echo "
        ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 106
            echo "          <aside class=\"main__sidebar--primary\" role=\"complementary\">
            ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 110
        echo "        <div class=\"main__content\">
          ";
        // line 111
        $this->displayBlock('pageContent', $context, $blocks);
        // line 114
        echo "        </div>
        ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 116
            echo "          <aside class=\"main__sidebar--secondary\" role=\"complementary\">
            ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 120
        echo "
      </div>

    </main>";
        // line 124
        echo "    ";
    }

    // line 111
    public function block_pageContent($context, array $blocks = [])
    {
        // line 112
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          ";
    }

    // line 128
    public function block_pageDoormat($context, array $blocks = [])
    {
        // line 129
        echo "    ";
        $this->loadTemplate("@rocketship-theme-starter-organisms/footer/doormat/_doormat.twig", "@rocketship-theme-starter-pages/page/_page--master.twig", 129)->display($context);
        // line 130
        echo "  ";
    }

    // line 132
    public function block_pageFooter($context, array $blocks = [])
    {
        // line 133
        echo "    ";
        $this->loadTemplate("@rocketship-theme-starter-organisms/footer/footer--primary/_footer--primary.twig", "@rocketship-theme-starter-pages/page/_page--master.twig", 133)->display($context);
        // line 134
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-pages/page/_page--master.twig";
    }

    public function getDebugInfo()
    {
        return array (  284 => 134,  281 => 133,  278 => 132,  274 => 130,  271 => 129,  268 => 128,  261 => 112,  258 => 111,  254 => 124,  249 => 120,  243 => 117,  240 => 116,  238 => 115,  235 => 114,  233 => 111,  230 => 110,  224 => 107,  221 => 106,  219 => 105,  216 => 104,  209 => 99,  206 => 98,  203 => 97,  200 => 96,  197 => 95,  194 => 94,  191 => 93,  188 => 92,  186 => 91,  183 => 90,  181 => 89,  178 => 88,  175 => 87,  171 => 85,  164 => 81,  160 => 79,  157 => 78,  154 => 77,  150 => 75,  143 => 71,  139 => 70,  135 => 68,  132 => 67,  129 => 66,  125 => 60,  122 => 59,  119 => 58,  115 => 56,  109 => 54,  106 => 53,  103 => 52,  98 => 61,  96 => 58,  93 => 57,  91 => 52,  88 => 51,  85 => 50,  79 => 135,  77 => 132,  74 => 131,  72 => 128,  67 => 125,  65 => 87,  62 => 86,  60 => 77,  57 => 76,  55 => 66,  50 => 63,  48 => 50,  41 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-pages/page/_page--master.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/05-pages/page/_page--master.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 50, "if" => 53, "include" => 59, "set" => 89];
        static $filters = ["escape" => 54];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include', 'set'],
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
