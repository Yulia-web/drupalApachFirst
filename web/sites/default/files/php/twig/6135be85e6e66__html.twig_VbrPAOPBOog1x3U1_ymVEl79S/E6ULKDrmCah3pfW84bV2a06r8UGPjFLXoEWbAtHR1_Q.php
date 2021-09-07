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

/* @rocketship-theme-starter-pages/html/_html.twig */
class __TwigTemplate_8685ce29f32d0d01a7c4de625edaad16571648484cbdce6d28bf789a564c4d70 extends \Twig\Template
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
        $this->loadTemplate("@rocketship-theme-starter-pages/html/_html--master.twig", "@rocketship-theme-starter-pages/html/_html.twig", 21)->display(twig_array_merge($context, ["body_classes" => [0 => ((        // line 24
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 25
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 26
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 27
($context["db_offline"] ?? null)) ? ("db-offline") : (""))], "safari_tab_color" => "fav_var_color", "tile_color" => "#FFFFFF", "webfont_config_typekit_css" => false, "webfont_config_google_css" => false, "webfont_config_fonts_css" => [0 => "style.fonts.css"], "webfont_config_font_families" => ["text-01" => "Open Sans", "icons-01" => "Font Awesome 5 Free", "icons-02" => "Font Awesome 5 Brands"], "webfont_config_font_files" => [0 => "OpenSans/opensans-regular-webfont", 1 => "OpenSans/opensans-italic-webfont", 2 => "OpenSans/opensans-bold-webfont", 3 => "FontAwesome/fa-brands-400", 4 => "FontAwesome/fa-regular-400", 5 => "FontAwesome/fa-solid-900"], "webfont_config_font_types" => [0 => "woff2"]]));
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-pages/html/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 27,  35 => 26,  34 => 25,  33 => 24,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-pages/html/_html.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/05-pages/html/_html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 21];
        static $filters = ["clean_class" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['clean_class'],
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
