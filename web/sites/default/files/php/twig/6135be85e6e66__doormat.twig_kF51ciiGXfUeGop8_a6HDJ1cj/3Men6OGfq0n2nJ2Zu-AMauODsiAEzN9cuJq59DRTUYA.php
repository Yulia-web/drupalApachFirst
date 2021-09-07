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

/* @rocketship-theme-starter-organisms/footer/doormat/_doormat.twig */
class __TwigTemplate_1e3d04ae7c82afa5f314836abadd5c9a00d206580617ac371ac6ee34a309b9e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'doormat' => [$this, 'block_doormat'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["page"] ?? null), "doormat", [])) {
            // line 2
            echo "<aside class=\"doormat\" role=\"complementary\">
  <div class=\"container\">
    ";
            // line 5
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "doormat", [])) {
                // line 6
                echo "      ";
                // line 7
                echo "        ";
                $this->displayBlock('doormat', $context, $blocks);
                // line 10
                echo "      ";
                // line 11
                echo "      ";
            }
            // line 12
            echo "    ";
            // line 13
            echo "  </div>
</aside>
";
        }
    }

    // line 7
    public function block_doormat($context, array $blocks = [])
    {
        // line 8
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "doormat", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-organisms/footer/doormat/_doormat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  61 => 7,  54 => 13,  52 => 12,  49 => 11,  47 => 10,  44 => 7,  42 => 6,  39 => 5,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-organisms/footer/doormat/_doormat.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/03-organisms/footer/doormat/_doormat.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "block" => 7];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
