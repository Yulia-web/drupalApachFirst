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

/* @rocketship-theme-starter-atoms/05-forms/form-element/_form-element.twig */
class __TwigTemplate_bb7bf34ec4b79be7b5419039a43463d630e035c68d439cbbe957f8778d6bf5a6 extends \Twig\Template
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
        // line 54
        $context["classes"] = [0 => "form__element", 1 => "form-item", 2 => "js-form-item", 3 => ((        // line 60
($context["type"] ?? null)) ? (("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null))))) : ("")), 4 => ((        // line 61
($context["type"] ?? null)) ? (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null))))) : ("")), 5 => ((        // line 62
($context["type"] ?? null)) ? (("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null))))) : ("")), 6 => ((        // line 63
($context["name"] ?? null)) ? (("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["name"] ?? null))))) : ("")), 7 => ((        // line 64
($context["name"] ?? null)) ? (("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["name"] ?? null))))) : ("")), 8 => ((        // line 65
($context["name"] ?? null)) ? (("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["name"] ?? null))))) : ("")), 9 => ((        // line 67
($context["type"] ?? null)) ? (("form-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null))))) : ("")), 10 => ((        // line 68
($context["name"] ?? null)) ? (("form__element--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["name"] ?? null))))) : ("")), 11 => ((!twig_in_filter(        // line 70
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 12 => (((        // line 71
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 13 => ((        // line 72
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 14 => ((        // line 73
($context["errors"] ?? null)) ? ("form__element--error") : ("")), 15 => (( !twig_test_empty(        // line 74
($context["prefix"] ?? null))) ? ("form__element--prefix") : ("")), 16 => (( !twig_test_empty(        // line 75
($context["suffix"] ?? null))) ? ("form__element--suffix") : (""))];
        // line 78
        echo "
";
        // line 80
        $context["description_classes"] = [0 => "form__element__description", 1 => (((        // line 82
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 85
        echo "
<div";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 89
        echo "  ";
        // line 90
        echo "  ";
        // line 91
        echo "
  ";
        // line 92
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 93
            echo "    <span class=\"form__element__prefix field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 97
            echo "  <div class=\"form__element__root field-root\">
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 101
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 105
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
            echo ">
        ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 109
        echo "
    ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "

    ";
        // line 112
        if ((($context["label_display"] ?? null) == "after")) {
            // line 113
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 117
            echo "  </div>
  ";
        }
        // line 119
        echo "
  ";
        // line 120
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 121
            echo "    <span class=\"form__element__suffix field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 123
        echo "
  ";
        // line 125
        echo "  ";
        // line 126
        echo "  ";
        // line 127
        echo "
  ";
        // line 128
        if (($context["errors"] ?? null)) {
            // line 129
            echo "    <div class=\"form-item__error-message\">
      ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 133
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 134
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 135
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 138
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/05-forms/form-element/_form-element.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 138,  178 => 135,  173 => 134,  170 => 133,  164 => 130,  161 => 129,  159 => 128,  156 => 127,  154 => 126,  152 => 125,  149 => 123,  143 => 121,  141 => 120,  138 => 119,  134 => 117,  132 => 116,  129 => 115,  123 => 113,  121 => 112,  116 => 110,  113 => 109,  107 => 106,  102 => 105,  100 => 104,  97 => 103,  91 => 101,  89 => 100,  86 => 99,  82 => 97,  80 => 96,  77 => 95,  71 => 93,  69 => 92,  66 => 91,  64 => 90,  62 => 89,  57 => 86,  54 => 85,  52 => 82,  51 => 80,  48 => 78,  46 => 75,  45 => 74,  44 => 73,  43 => 72,  42 => 71,  41 => 70,  40 => 68,  39 => 67,  38 => 65,  37 => 64,  36 => 63,  35 => 62,  34 => 61,  33 => 60,  32 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/05-forms/form-element/_form-element.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/05-forms/form-element/_form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 54, "if" => 92];
        static $filters = ["clean_class" => 60, "escape" => 86];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
