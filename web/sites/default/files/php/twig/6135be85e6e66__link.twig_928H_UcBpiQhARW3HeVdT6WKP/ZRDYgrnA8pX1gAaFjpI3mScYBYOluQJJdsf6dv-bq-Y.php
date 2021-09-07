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

/* @rocketship-theme-starter-atoms/01-links/00-link/_link.twig */
class __TwigTemplate_c20edc91bfeab18b61f7f73e811b97f9e9caca3b41ad80d02bba4fea1a2fbdbd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 17
        echo "
";
        // line 19
        $context["has_link_title"] = (($context["has_link_title"]) ?? (true));
        // line 20
        echo "
";
        // line 22
        $context["no_link"] = (($context["no_link"]) ?? (false));
        // line 23
        echo "
";
        // line 24
        $context["bem_link_block"] = (($context["bem_link_block"]) ?? (false));
        // line 25
        echo "
";
        // line 26
        $context["bem_link_element"] = ((array_key_exists("bem_link_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_link_element"] ?? null)), "link")) : ("link"));
        // line 27
        echo "
";
        // line 28
        if ( !array_key_exists("bem_link_modifiers", $context)) {
            // line 29
            echo "  ";
            $context["bem_link_modifiers"] = [];
        }
        // line 31
        echo "
";
        // line 32
        if ( !($context["link_attribute_class"] ?? null)) {
            // line 33
            echo "  ";
            $context["link_attribute_class"] = [];
        }
        // line 35
        echo "
";
        // line 36
        $context["bem_link_extra"] = twig_array_merge(((array_key_exists("bem_link_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_link_extra"] ?? null)), [])) : ([])), $this->sandbox->ensureToStringAllowed(($context["link_attribute_class"] ?? null)));
        // line 37
        echo "
";
        // line 38
        $context["link_attributes"] = ((array_key_exists("link_attributes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null)), [])) : ([]));
        // line 39
        echo "
";
        // line 41
        if (($context["no_link"] ?? null)) {
            // line 42
            echo "  ";
            $context["bem_link_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_link_modifiers"] ?? null)), [0 => "empty"]);
            // line 43
            echo "  <span
  ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_link_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_extra"] ?? null))]));
            echo "
  >
";
        } else {
            // line 47
            echo "
  ";
            // line 49
            echo "  ";
            if ((($context["has_link_title"] ?? null) != true)) {
                // line 50
                echo "
    <a ";
                // line 51
                if ((($context["bem_link_block"] ?? null) || ($context["bem_link_element"] ?? null))) {
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_link_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_extra"] ?? null))]), "title"), "html", null, true);
                }
                // line 52
                echo "      ";
                // line 53
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["link_attributes"] ?? null));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    // line 54
                    echo "        ";
                    if ((($context["attribute"] != "class") && ($context["attribute"] != "title"))) {
                        // line 55
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"]), "html", null, true);
                        echo "=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                        echo "\"
        ";
                    }
                    // line 57
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "
      href=\"";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null)), "html", null, true);
                echo "\"
    >

  ";
            } else {
                // line 63
                echo "
    <a ";
                // line 64
                if ((($context["bem_link_block"] ?? null) || ($context["bem_link_element"] ?? null))) {
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["bem_link_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_element"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_link_extra"] ?? null))]));
                }
                // line 65
                echo "      ";
                // line 66
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["link_attributes"] ?? null));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    // line 67
                    echo "        ";
                    if (($context["attribute"] != "class")) {
                        // line 68
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"]), "html", null, true);
                        echo "=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                        echo "\"
        ";
                    }
                    // line 70
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "      href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null)), "html", null, true);
                echo "\"
    >
  ";
            }
        }
        // line 75
        echo "  ";
        $this->displayBlock('link_content', $context, $blocks);
        // line 78
        if (($context["no_link"] ?? null)) {
            // line 79
            echo "  </span>
";
        } else {
            // line 81
            echo "  </a>
";
        }
    }

    // line 75
    public function block_link_content($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/01-links/00-link/_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  199 => 75,  193 => 81,  189 => 79,  187 => 78,  184 => 75,  176 => 71,  170 => 70,  162 => 68,  159 => 67,  154 => 66,  152 => 65,  148 => 64,  145 => 63,  138 => 59,  135 => 58,  129 => 57,  121 => 55,  118 => 54,  113 => 53,  111 => 52,  107 => 51,  104 => 50,  101 => 49,  98 => 47,  92 => 44,  89 => 43,  86 => 42,  84 => 41,  81 => 39,  79 => 38,  76 => 37,  74 => 36,  71 => 35,  67 => 33,  65 => 32,  62 => 31,  58 => 29,  56 => 28,  53 => 27,  51 => 26,  48 => 25,  46 => 24,  43 => 23,  41 => 22,  38 => 20,  36 => 19,  33 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/01-links/00-link/_link.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/01-links/00-link/_link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 19, "if" => 28, "for" => 53, "block" => 75];
        static $filters = ["default" => 26, "merge" => 36, "escape" => 51, "without" => 51];
        static $functions = ["bem" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'block'],
                ['default', 'merge', 'escape', 'without'],
                ['bem']
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
