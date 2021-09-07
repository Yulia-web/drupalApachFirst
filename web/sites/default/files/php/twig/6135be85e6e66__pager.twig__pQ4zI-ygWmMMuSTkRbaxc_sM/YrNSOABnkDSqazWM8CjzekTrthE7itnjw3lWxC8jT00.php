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

/* @rocketship-theme-starter-molecules/pager/_pager.twig */
class __TwigTemplate_65a7e041441b7ccce852816c3e7c47a754a23651a53a0a8fd0db977e1a756d62 extends \Twig\Template
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
        // line 32
        echo "
";
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  ";
            $context["pager__uid"] = ((array_key_exists("pager__uid", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["pager__uid"] ?? null)), "")) : (""));
            // line 35
            echo "  <nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager__uid"] ?? null)), "html", null, true);
            echo "\">
    <h4 id=\"pagination-heading";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager__uid"] ?? null)), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items pager__items--full js-pager__items\">

      ";
            // line 39
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 40
                echo "        <li class=\"pager__item pager__item--full pager__item--prev pager__item--prev--full\">
          <a class=\"pager__link pager__link--full pager__link--prev pager__link--prev--full\"  href=\"";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>

            <i aria-hidden=\"true\" class=\"page__link__icon--prev page__link__icon--prev--full page__link__icon page__link__icon--full page__link__icon--double-arrow-left page__link__icon--double-arrow-left--full\"></i>
            ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "text", [])) {
                    // line 46
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), t("First"))) : (t("First"))), ["«" => "", "‹" => ""]), "html", null, true);
                    echo "
            ";
                }
                // line 48
                echo "
          </a>
        </li>
      ";
            }
            // line 52
            echo "
      ";
            // line 54
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 55
                echo "        <li class=\"pager__item pager__item--full pager__item--previous pager__item--previous--full\">
          <a class=\"pager__link pager__link--full pager__link--prev pager__link--prev--full\"  href=\"";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>

            <i aria-hidden=\"true\" class=\"page__link__icon--prev page__link__icon--prev--full page__link__icon page__link__icon--full page__link__icon--arrow-left page__link__icon--arrow-left--full\"></i>
            ";
                // line 60
                if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "text", [])) {
                    // line 61
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("Previous"))) : (t("Previous"))), ["«" => "", "‹" => ""]), "html", null, true);
                    echo "
            ";
                }
                // line 63
                echo "
          </a>
        </li>
      ";
            }
            // line 67
            echo "      ";
            // line 68
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 69
                echo "        <li class=\"pager__item pager__item--full pager__item--ellipsis pager__item--ellipsis--full\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 71
            echo "      ";
            // line 72
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 73
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo " pager__item--full\">
          ";
                // line 74
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 76
                    echo "          ";
                } else {
                    // line 77
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 78
                    echo "          ";
                }
                // line 79
                echo "          <a class=\"pager__link";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo " pager__link--full\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                // line 84
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      ";
            // line 88
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 89
                echo "        <li class=\"pager__item pager__item--full pager__item--ellipsis pager__item--ellipsis--full\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 91
            echo "      ";
            // line 92
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 93
                echo "        <li class=\"pager__item pager__item--full pager__item--next pager__item--next--full\">
          <a class=\"pager__link pager__link--full pager__link--next pager__link--next--full\" href=\"";
                // line 94
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>

            ";
                // line 97
                if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "text", [])) {
                    // line 98
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("Next"))) : (t("Next"))), ["»" => "", "›" => ""]), "html", null, true);
                    echo "
            ";
                }
                // line 100
                echo "            <i aria-hidden=\"true\" class=\"page__link__icon--next page__link__icon--next--full page__link__icon  page__link__icon--full page__link__icon--arrow-right page__link__icon--arrow-right--full\"></i>

          </a>
        </li>
      ";
            }
            // line 105
            echo "
      ";
            // line 107
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 108
                echo "        <li class=\"pager__item pager__item--full pager__item--last pager__item--last--full\">
          <a class=\"pager__link pager__link--full pager__link--last  pager__link--last--full\" href=\"";
                // line 109
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\" rel=\"last\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>

            ";
                // line 112
                if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "text", [])) {
                    // line 113
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), t("Last"))) : (t("Last"))), ["»" => "", "›" => ""]), "html", null, true);
                    echo "
            ";
                }
                // line 115
                echo "            <i aria-hidden=\"true\" class=\"page__link__icon--last page__link__icon--last --full page__link__icon page__link__icon--full page__link__icon--double-arrow-right page__link__icon--double-arrow-right--full\"></i>

          </a>
        </li>
      ";
            }
            // line 120
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-molecules/pager/_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 120,  259 => 115,  253 => 113,  251 => 112,  246 => 110,  238 => 109,  235 => 108,  232 => 107,  229 => 105,  222 => 100,  216 => 98,  214 => 97,  209 => 95,  201 => 94,  198 => 93,  195 => 92,  193 => 91,  189 => 89,  186 => 88,  184 => 87,  176 => 84,  174 => 83,  170 => 81,  158 => 79,  155 => 78,  152 => 77,  149 => 76,  146 => 75,  144 => 74,  139 => 73,  134 => 72,  132 => 71,  128 => 69,  125 => 68,  123 => 67,  117 => 63,  111 => 61,  109 => 60,  103 => 57,  95 => 56,  92 => 55,  89 => 54,  86 => 52,  80 => 48,  74 => 46,  72 => 45,  66 => 42,  58 => 41,  55 => 40,  53 => 39,  45 => 36,  40 => 35,  37 => 34,  35 => 33,  32 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-molecules/pager/_pager.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/02-molecules/pager/_pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 33, "set" => 34, "for" => 72];
        static $filters = ["default" => 34, "escape" => 35, "t" => 36, "without" => 41, "replace" => 46];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['default', 'escape', 't', 'without', 'replace'],
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
