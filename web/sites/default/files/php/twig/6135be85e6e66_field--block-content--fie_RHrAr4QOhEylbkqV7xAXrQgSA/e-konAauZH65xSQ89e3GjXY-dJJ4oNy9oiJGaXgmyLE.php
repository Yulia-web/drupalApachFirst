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

/* themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig */
class __TwigTemplate_d38bfa240c6e5dd38b5a239bf5901bfadc88d015d2e28ffb75aeed591ac98bae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field_content' => [$this, 'block_field_content'],
            'field_content_items' => [$this, 'block_field_content_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo "
";
        // line 55
        echo "
";
        // line 82
        echo "
";
        // line 83
        $context["label_hidden"] = (($context["label_hidden"]) ?? (true));
        // line 84
        echo "
";
        // line 85
        $context["bem_field_block"] = ((array_key_exists("bem_field_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_field_block"] ?? null)), "field")) : ("field"));
        // line 86
        $context["bem_field_element"] = (($context["bem_field_element"]) ?? (false));
        // line 87
        echo "
";
        // line 88
        if ( !($context["bem_field_modifiers"] ?? null)) {
            // line 89
            echo "  ";
            $context["bem_field_modifiers"] = [];
        }
        // line 91
        echo "
";
        // line 92
        if (($context["field_name"] ?? null)) {
            echo " ";
            $context["bem_field_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_field_modifiers"] ?? null)), [0 => ("name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null))))]);
        }
        // line 93
        if (($context["field_type"] ?? null)) {
            echo " ";
            $context["bem_field_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_field_modifiers"] ?? null)), [0 => ("type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_type"] ?? null))))]);
        }
        // line 94
        if (($context["label_display"] ?? null)) {
            echo " ";
            $context["bem_field_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_field_modifiers"] ?? null)), [0 => ("label-" . $this->sandbox->ensureToStringAllowed(($context["label_display"] ?? null)))]);
        }
        // line 95
        echo "
";
        // line 96
        $context["bem_field_extra"] = ((array_key_exists("bem_field_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_field_extra"] ?? null)), [])) : ([]));
        // line 97
        echo "
";
        // line 98
        if (($context["field_name"] ?? null)) {
            // line 99
            echo "  ";
            $context["bem_field_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_field_extra"] ?? null)), [0 => twig_replace_filter(\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 100
($context["field_name"] ?? null))), ["_" => "-"])]);
        }
        // line 104
        echo "
<div";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_field_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_field_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_field_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_field_extra"] ?? null))]));
        echo "
  ";
        // line 107
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 108
            echo "    ";
            if (($context["attribute"] != "class")) {
                // line 109
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"]), "html", null, true);
                echo "=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                echo "\"
";
            }
            // line 111
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo ">

";
        // line 114
        if (($context["label_hidden"] ?? null)) {
            // line 115
            echo "  ";
        } else {
            // line 117
            echo "  ";
            if (($context["label"] ?? null)) {
                // line 118
                echo "
    ";
                // line 120
                $context["title_classes"] = [0 => "field__label"];
                // line 124
                echo "
    ";
                // line 125
                $context["label_id"] = false;
                // line 126
                echo "    ";
                $context["heading_display"] = true;
                // line 127
                echo "    ";
                $context["field_heading_level"] = ((array_key_exists("field_heading_level", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_heading_level"] ?? null)), 3)) : (3));
                // line 128
                echo "
    ";
                // line 129
                if ((($context["label_display"] ?? null) == "visually_hidden")) {
                    // line 130
                    echo "      ";
                    $context["title_classes"] = $this->getAttribute(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["title_classes"] ?? null))), "visually-hidden", [], "array");
                    // line 131
                    echo "      ";
                    $context["heading_display"] = false;
                    // line 132
                    echo "      ";
                    // line 133
                    echo "      ";
                    if ((array_key_exists("heading_id", $context) && ($context["heading_id"] ?? null))) {
                        // line 134
                        echo "        ";
                        $context["label_id"] = ($this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)) . "_label");
                        // line 135
                        echo "      ";
                    } else {
                        // line 136
                        echo "        ";
                        $context["label_id"] = (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null))) . "_label");
                        // line 137
                        echo "      ";
                    }
                    // line 138
                    echo "    ";
                }
                // line 139
                echo "
    ";
                // line 140
                $this->loadTemplate("@rocketship-theme-starter-atoms/02-text/00-headings/_heading.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig", 140)->display(twig_array_merge($context, ["heading_level" =>                 // line 141
($context["field_heading_level"] ?? null), "heading" =>                 // line 142
($context["label"] ?? null), "heading_bem_extra" =>                 // line 143
($context["title_classes"] ?? null), "heading_id" =>                 // line 144
($context["label_id"] ?? null), "heading_display" =>                 // line 145
($context["heading_display"] ?? null)]));
                // line 147
                echo "
  ";
            }
        }
        // line 150
        echo "
";
        // line 151
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("rocketship_theme_starter/component_field"), "html", null, true);
        echo "
  ";
        // line 153
        echo "  ";
        $this->displayBlock('field_content', $context, $blocks);
        // line 181
        echo "
</div>
";
    }

    // line 153
    public function block_field_content($context, array $blocks = [])
    {
        // line 154
        echo "
    ";
        // line 155
        if ((($context["multiple"] ?? null) && (twig_length_filter($this->env, ($context["items"] ?? null)) > 0))) {
            // line 156
            echo "
      <div class=\"field__items field__items--name-";
            // line 157
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null))), "html", null, true);
            echo "\">
        ";
            // line 158
            $context["bem_fielditem_block"] = ($context["bem_field_block"] ?? null);
            // line 159
            echo "        ";
            $context["bem_fielditem_element"] = ((array_key_exists("bem_fielditem_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_fielditem_element"] ?? null)), "item")) : ("item"));
            // line 160
            echo "        ";
            $context["bem_fielditem_modifiers"] = ($context["bem_field_modifiers"] ?? null);
            // line 161
            echo "
        ";
            // line 162
            $this->displayBlock('field_content_items', $context, $blocks);
            // line 173
            echo "      </div>
    ";
        } else {
            // line 175
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 176
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "    ";
        }
        // line 179
        echo "    <div class=\"count_slider\"><span id=\"cp\">1</span>/03</div>
  ";
    }

    // line 162
    public function block_field_content_items($context, array $blocks = [])
    {
        // line 163
        echo "
          ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 165
            echo "            ";
            $this->loadTemplate("@rocketship-theme-starter-atoms/00-field/_field-item.twig", "themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig", 165)->display(twig_array_merge($context, ["bem_fielditem_block" =>             // line 166
($context["bem_field_block"] ?? null), "bem_fielditem_element" => ((            // line 167
array_key_exists("bem_fielditem_element", $context)) ? (_twig_default_filter(($context["bem_fielditem_element"] ?? null), "item")) : ("item")), "bem_fielditem_modifiers" =>             // line 168
($context["bem_field_modifiers"] ?? null), "content" => $this->getAttribute(            // line 169
$context["item"], "content", [])]));
            // line 171
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 172,  296 => 171,  294 => 169,  293 => 168,  292 => 167,  291 => 166,  289 => 165,  272 => 164,  269 => 163,  266 => 162,  261 => 179,  258 => 178,  249 => 176,  244 => 175,  240 => 173,  238 => 162,  235 => 161,  232 => 160,  229 => 159,  227 => 158,  223 => 157,  220 => 156,  218 => 155,  215 => 154,  212 => 153,  206 => 181,  203 => 153,  199 => 151,  196 => 150,  191 => 147,  189 => 145,  188 => 144,  187 => 143,  186 => 142,  185 => 141,  184 => 140,  181 => 139,  178 => 138,  175 => 137,  172 => 136,  169 => 135,  166 => 134,  163 => 133,  161 => 132,  158 => 131,  155 => 130,  153 => 129,  150 => 128,  147 => 127,  144 => 126,  142 => 125,  139 => 124,  137 => 120,  134 => 118,  131 => 117,  128 => 115,  126 => 114,  122 => 112,  116 => 111,  109 => 109,  106 => 108,  101 => 107,  97 => 105,  94 => 104,  91 => 100,  89 => 99,  87 => 98,  84 => 97,  82 => 96,  79 => 95,  74 => 94,  69 => 93,  64 => 92,  61 => 91,  57 => 89,  55 => 88,  52 => 87,  50 => 86,  48 => 85,  45 => 84,  43 => 83,  40 => 82,  37 => 55,  34 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/00-field/field--block-content--field-paragraph-slider--text-block-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 83, "if" => 88, "for" => 107, "include" => 140, "block" => 153];
        static $filters = ["default" => 85, "merge" => 92, "clean_class" => 92, "replace" => 100, "escape" => 109, "length" => 155];
        static $functions = ["bem" => 105, "attach_library" => 151];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include', 'block'],
                ['default', 'merge', 'clean_class', 'replace', 'escape', 'length'],
                ['bem', 'attach_library']
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
