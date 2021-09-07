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

/* @rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig */
class __TwigTemplate_0dbf5464225afbfb4a48d6576eeb40dc4c327194af561b524132da1cca643e10 extends \Twig\Template
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
        // line 21
        echo "
";
    }

    // line 22
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__has_link_title__ = null, $__menu_level__ = null, $__bem_menu_block__ = null, $__bem_menu_element__ = null, $__bem_menu_modifiers__ = null, $__bem_item_block__ = null, $__bem_item_element__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "has_link_title" => $__has_link_title__,
            "menu_level" => $__menu_level__,
            "bem_menu_block" => $__bem_menu_block__,
            "bem_menu_element" => $__bem_menu_element__,
            "bem_menu_modifiers" => $__bem_menu_modifiers__,
            "bem_item_block" => $__bem_item_block__,
            "bem_item_element" => $__bem_item_element__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "
  ";
            // line 24
            $context["menus"] = $this;
            // line 25
            echo "
  ";
            // line 26
            if (($context["items"] ?? null)) {
                // line 27
                echo "
    ";
                // line 28
                $context["has_link_title"] = (($context["has_link_title"]) ?? (false));
                // line 29
                echo "
    ";
                // line 31
                echo "    ";
                $context["bem_menu_block"] = ((array_key_exists("bem_menu_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_menu_block"] ?? null)), "menu")) : ("menu"));
                // line 32
                echo "
    ";
                // line 33
                $context["bem_menu_element"] = (($context["bem_menu_element"]) ?? (false));
                // line 34
                echo "
    ";
                // line 35
                if ( !($context["bem_menu_modifiers"] ?? null)) {
                    // line 36
                    echo "      ";
                    $context["bem_menu_modifiers"] = [];
                    // line 37
                    echo "    ";
                }
                // line 38
                echo "
    ";
                // line 39
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 40
                    echo "      ";
                    $context["bem_menu_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_menu_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
                    // line 41
                    echo "    ";
                }
                // line 42
                echo "
    ";
                // line 44
                echo "    ";
                $this->loadTemplate("@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", 44, "2035239162")->display(twig_array_merge($context, ["bem_ul_block" =>                 // line 45
($context["bem_menu_block"] ?? null), "bem_ul_modifiers" =>                 // line 46
($context["bem_menu_modifiers"] ?? null)]));
                // line 66
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 66,  111 => 46,  110 => 45,  108 => 44,  105 => 42,  102 => 41,  99 => 40,  97 => 39,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  83 => 34,  81 => 33,  78 => 32,  75 => 31,  72 => 29,  70 => 28,  67 => 27,  65 => 26,  62 => 25,  60 => 24,  57 => 23,  37 => 22,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/_menu--macros.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 22, "import" => 24, "if" => 26, "set" => 28, "embed" => 44];
        static $filters = ["default" => 31, "merge" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'import', 'if', 'set', 'embed'],
                ['default', 'merge'],
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


/* @rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig */
class __TwigTemplate_0dbf5464225afbfb4a48d6576eeb40dc4c327194af561b524132da1cca643e10___2035239162 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 44
        return "@rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@rocketship-theme-starter-atoms/03-lists/list--ul/_ul.twig", "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", 44);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    public function block_list_content($context, array $blocks = [])
    {
        // line 49
        echo "        ";
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
            // line 50
            echo "
          ";
            // line 51
            $context["bem_item_block"] = ((array_key_exists("bem_item_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_block"] ?? null)), false)) : (false));
            // line 52
            echo "          ";
            $context["bem_item_element"] = ((array_key_exists("bem_item_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_element"] ?? null)), false)) : (false));
            // line 53
            echo "          ";
            $context["bem_item_modifiers"] = ((array_key_exists("bem_item_modifiers", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_modifiers"] ?? null)), [])) : ([]));
            // line 54
            echo "          ";
            $context["bem_item_extra"] = ((array_key_exists("bem_item_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_extra"] ?? null)), [])) : ([]));
            // line 55
            echo "
          ";
            // line 56
            $this->loadTemplate("@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", 56)->display(twig_array_merge($context, ["bem_item_block" =>             // line 57
($context["bem_menu_block"] ?? null), "bem_item_element" => "item", "bem_item_modifiers" =>             // line 59
($context["bem_menu_modifiers"] ?? null), "bem_item_extra" =>             // line 60
($context["bem_item_extra"] ?? null), "has_link_title" =>             // line 61
($context["has_link_title"] ?? null)]));
            // line 63
            echo "        ";
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
        // line 64
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 64,  257 => 63,  255 => 61,  254 => 60,  253 => 59,  252 => 57,  251 => 56,  248 => 55,  245 => 54,  242 => 53,  239 => 52,  237 => 51,  234 => 50,  216 => 49,  213 => 48,  203 => 44,  113 => 66,  111 => 46,  110 => 45,  108 => 44,  105 => 42,  102 => 41,  99 => 40,  97 => 39,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  83 => 34,  81 => 33,  78 => 32,  75 => 31,  72 => 29,  70 => 28,  67 => 27,  65 => 26,  62 => 25,  60 => 24,  57 => 23,  37 => 22,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/menus/menu/_menu--macros.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 49, "set" => 51, "include" => 56];
        static $filters = ["default" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'include'],
                ['default'],
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
