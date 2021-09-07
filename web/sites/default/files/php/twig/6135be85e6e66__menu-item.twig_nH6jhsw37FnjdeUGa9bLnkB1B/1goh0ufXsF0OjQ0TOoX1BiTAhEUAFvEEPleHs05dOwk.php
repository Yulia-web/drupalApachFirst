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

/* @rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig */
class __TwigTemplate_2fb7ce65f7df94b398654838f351d3ee5e6d473bdb3e649a9a33734dd4b3feac extends \Twig\Template
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
        // line 2
        $context["has_link_title"] = (($context["has_link_title"]) ?? (true));
        // line 4
        $context["no_link"] = false;
        // line 5
        echo "
";
        // line 6
        $context["bem_item_block"] = ((array_key_exists("bem_item_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_block"] ?? null)), "menu")) : ("menu"));
        // line 7
        $context["bem_item_element"] = ((array_key_exists("bem_item_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_element"] ?? null)), "item")) : ("item"));
        // line 8
        echo "
";
        // line 9
        $context["bem_link_block"] = ((array_key_exists("bem_link_block", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_link_block"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["bem_item_block"] ?? null)))) : (($context["bem_item_block"] ?? null)));
        // line 10
        $context["bem_link_element"] = ((array_key_exists("bem_link_element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_link_element"] ?? null)), "link")) : ("link"));
        // line 11
        echo "
";
        // line 12
        if ( !($context["bem_item_modifiers"] ?? null)) {
            // line 13
            echo "  ";
            $context["bem_item_modifiers"] = [];
        }
        // line 15
        echo "
";
        // line 16
        $context["bem_item_extra"] = ((array_key_exists("bem_item_extra", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["bem_item_extra"] ?? null)), [])) : ([]));
        // line 17
        echo "
";
        // line 18
        if ( !($context["link_attribute_class"] ?? null)) {
            // line 19
            echo "  ";
            $context["link_attribute_class"] = [];
        }
        // line 21
        if (($this->getAttribute(($context["item"] ?? null), "in_active_trail", []) == true)) {
            // line 22
            echo "  ";
            $context["bem_item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_modifiers"] ?? null)), [0 => "active"]);
        }
        // line 24
        if ((($context["menu_level"] ?? null) > 0)) {
            // line 25
            echo "  ";
            $context["bem_item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
        }
        // line 27
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 28
            echo "  ";
            $context["bem_item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_modifiers"] ?? null)), [0 => "with-sub"]);
            // line 29
            echo "  ";
            $context["bem_item_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_extra"] ?? null)), [0 => "has-sub"]);
        }
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "modifiers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
            // line 33
            echo "  ";
            $context["bem_item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_modifiers"] ?? null)), [0 => $context["modifier"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        $context["link_attributes"] = ((array_key_exists("link_attributes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null)), [])) : ([]));
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
            // line 39
            echo "  ";
            $context["link_attributes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "link_attributes", [])));
        }
        // line 41
        echo "
";
        // line 42
        if ((($this->getAttribute(($context["item"] ?? null), "url", []) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "url", []), "options", [])) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "url", []), "options", []), "attributes", []))) {
            // line 43
            echo "  ";
            $context["link_attributes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "url", []), "options", []), "attributes", [])));
        }
        // line 45
        echo "
";
        // line 46
        if ($this->getAttribute(($context["link_attributes"] ?? null), "class", [])) {
            // line 47
            echo "
  ";
            // line 49
            echo "  ";
            if (twig_test_iterable($this->getAttribute(($context["link_attributes"] ?? null), "class", []))) {
                // line 50
                echo "    ";
                $context["link_attribute_class"] = $this->getAttribute(($context["link_attributes"] ?? null), "class", []);
                // line 51
                echo "    ";
                // line 52
                echo "  ";
            } else {
                // line 53
                echo "    ";
                $context["link_attribute_class"] = [0 => $this->getAttribute(($context["link_attributes"] ?? null), "class", [])];
                // line 54
                echo "  ";
            }
            // line 55
            echo "
  ";
            // line 57
            echo "  ";
            $context["bem_item_extra"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_item_extra"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["link_attribute_class"] ?? null)));
            // line 58
            echo "
";
        }
        // line 60
        echo "
";
        // line 61
        $context["list_item_label"] = ((array_key_exists("list_item_label", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["list_item_label"] ?? null)), null)) : (null));
        // line 62
        $context["list_item_content"] = ((array_key_exists("list_item_content", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["list_item_content"] ?? null)), null)) : (null));
        // line 63
        echo "
";
        // line 64
        $this->loadTemplate("@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", 64, "1067487938")->display(twig_array_merge($context, ["list_item_label" =>         // line 65
($context["list_item_label"] ?? null), "list_item_content" =>         // line 66
($context["list_item_content"] ?? null), "bem_li_block" =>         // line 67
($context["bem_item_block"] ?? null), "bem_li_element" =>         // line 68
($context["bem_item_element"] ?? null), "bem_li_modifiers" =>         // line 69
($context["bem_item_modifiers"] ?? null), "bem_li_extra" =>         // line 70
($context["bem_item_extra"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 70,  178 => 69,  177 => 68,  176 => 67,  175 => 66,  174 => 65,  173 => 64,  170 => 63,  168 => 62,  166 => 61,  163 => 60,  159 => 58,  156 => 57,  153 => 55,  150 => 54,  147 => 53,  144 => 52,  142 => 51,  139 => 50,  136 => 49,  133 => 47,  131 => 46,  128 => 45,  124 => 43,  122 => 42,  119 => 41,  115 => 39,  113 => 38,  110 => 37,  108 => 36,  105 => 35,  98 => 33,  94 => 32,  90 => 29,  87 => 28,  85 => 27,  81 => 25,  79 => 24,  75 => 22,  73 => 21,  69 => 19,  67 => 18,  64 => 17,  62 => 16,  59 => 15,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  36 => 5,  34 => 4,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/09-menu/menu-item/_menu-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 12, "for" => 32, "embed" => 64];
        static $filters = ["default" => 6, "merge" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'embed'],
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


/* @rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig */
class __TwigTemplate_2fb7ce65f7df94b398654838f351d3ee5e6d473bdb3e649a9a33734dd4b3feac___1067487938 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 64
        return "@rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@rocketship-theme-starter-atoms/03-lists/list--ul/_list-item.twig", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", 64);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 72
    public function block_list_item_content($context, array $blocks = [])
    {
        // line 73
        echo "
    ";
        // line 74
        if ((($this->getAttribute($this->getAttribute(($context["item"] ?? null), "url", []), "isRouted", [], "method") == true) && ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "url", []), "getRouteName", [], "method") == "<nolink>"))) {
            // line 75
            echo "      ";
            $context["no_link"] = true;
            // line 76
            echo "    ";
        }
        // line 77
        echo "
    ";
        // line 78
        $this->loadTemplate("@rocketship-theme-starter-atoms/01-links/00-link/_link.twig", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", 78)->display(twig_array_merge($context, ["link_content" => $this->getAttribute(        // line 79
($context["item"] ?? null), "title", []), "link_url" => $this->getAttribute(        // line 80
($context["item"] ?? null), "url", []), "no_link" => $this->getAttribute(        // line 81
($context["item"] ?? null), "no_link", []), "bem_link_block" =>         // line 82
($context["bem_item_block"] ?? null), "bem_link_element" =>         // line 83
($context["bem_link_element"] ?? null), "bem_link_modifiers" =>         // line 84
($context["bem_item_modifiers"] ?? null), "has_link_title" =>         // line 85
($context["has_link_title"] ?? null), "link_attribute_class" =>         // line 86
($context["link_attribute_class"] ?? null), "link_attributes" =>         // line 87
($context["link_attributes"] ?? null)]));
        // line 89
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 90
            echo "      <i class=\"expand-sub\"></i>
      ";
            // line 91
            $context["menus"] = $this->loadTemplate("@rocketship-theme-starter-molecules/menus/menu/_menu--macros.twig", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", 91)->unwrap();
            // line 92
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute(($context["item"] ?? null), "below", []), ($context["attributes"] ?? null), ($context["has_link_title"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["bem_menu_block"] ?? null), ($context["bem_menu_element"] ?? null), ($context["bem_menu_modifiers"] ?? null), ($context["bem_item_block"] ?? null), ($context["bem_item_element"] ?? null), ($context["bem_item_modifiers"] ?? null)));
            echo "
    ";
        }
        // line 94
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 94,  303 => 92,  301 => 91,  298 => 90,  295 => 89,  293 => 87,  292 => 86,  291 => 85,  290 => 84,  289 => 83,  288 => 82,  287 => 81,  286 => 80,  285 => 79,  284 => 78,  281 => 77,  278 => 76,  275 => 75,  273 => 74,  270 => 73,  267 => 72,  257 => 64,  179 => 70,  178 => 69,  177 => 68,  176 => 67,  175 => 66,  174 => 65,  173 => 64,  170 => 63,  168 => 62,  166 => 61,  163 => 60,  159 => 58,  156 => 57,  153 => 55,  150 => 54,  147 => 53,  144 => 52,  142 => 51,  139 => 50,  136 => 49,  133 => 47,  131 => 46,  128 => 45,  124 => 43,  122 => 42,  119 => 41,  115 => 39,  113 => 38,  110 => 37,  108 => 36,  105 => 35,  98 => 33,  94 => 32,  90 => 29,  87 => 28,  85 => 27,  81 => 25,  79 => 24,  75 => 22,  73 => 21,  69 => 19,  67 => 18,  64 => 17,  62 => 16,  59 => 15,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  36 => 5,  34 => 4,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-atoms/09-menu/menu-item/_menu-item.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/01-atoms/09-menu/menu-item/_menu-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 74, "set" => 75, "include" => 78, "import" => 91];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include', 'import'],
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
