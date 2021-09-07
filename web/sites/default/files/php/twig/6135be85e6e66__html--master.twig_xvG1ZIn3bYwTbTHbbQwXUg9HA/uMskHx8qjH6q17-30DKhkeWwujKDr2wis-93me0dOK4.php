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

/* @rocketship-theme-starter-pages/html/_html--master.twig */
class __TwigTemplate_024b89c6aa96782975242e16301d95361674ec64e80b68ffec1e88c4d92e5341 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'webfont' => [$this, 'block_webfont'],
            'favicons' => [$this, 'block_favicons'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>

    <title>";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <head-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">

     ";
        // line 36
        $this->displayBlock('webfont', $context, $blocks);
        // line 123
        echo "
    ";
        // line 124
        $this->displayBlock('favicons', $context, $blocks);
        // line 161
        echo "
    <css-placeholder token=\"";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">

  </head>

  <body";
        // line 167
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 172
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 173
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    // line 36
    public function block_webfont($context, array $blocks = [])
    {
        // line 37
        echo "      ";
        // line 38
        echo "      ";
        if ((($context["webfont_config_google_css"] ?? null) != false)) {
            // line 39
            echo "        <link as=\"style\" rel=\"stylesheet preload prefetch\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webfont_config_google_css"] ?? null)), "html", null, true);
            echo "\" type=\"text/css\" crossorigin=\"anonymous\" onload=\"this.rel='stylesheet'\" />
      ";
        }
        // line 41
        echo "      ";
        if ((($context["webfont_config_typekit_css"] ?? null) != false)) {
            // line 42
            echo "        <link as=\"style\" rel=\"stylesheet preload prefetch\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webfont_config_typekit_css"] ?? null)), "html", null, true);
            echo "\" type=\"text/css\" crossorigin=\"anonymous\" onload=\"this.rel='stylesheet'\" />
      ";
        }
        // line 44
        echo "
      ";
        // line 46
        echo "      ";
        if ((((array_key_exists("webfont_config_font_files", $context) &&  !(null === ($context["webfont_config_font_files"] ?? null))) && (($context["webfont_config_font_files"] ?? null) != false)) && twig_length_filter($this->env, ($context["webfont_config_font_files"] ?? null)))) {
            // line 47
            echo "        ";
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["webfont_config_font_files"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 49
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["webfont_config_font_types"] ?? null));
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    // line 50
                    echo "            <link as=\"font\" rel=\"preload\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/fonts/") . $this->sandbox->ensureToStringAllowed($context["value"])), "html", null, true);
                    echo ".";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value2"]), "html", null, true);
                    echo "\" type=\"font/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value2"]), "html", null, true);
                    echo "\" crossorigin=\"anonymous\" />
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      ";
        }
        // line 54
        echo "
      ";
        // line 55
        if ((((array_key_exists("webfont_config_fonts_css", $context) &&  !(null === ($context["webfont_config_fonts_css"] ?? null))) && (($context["webfont_config_fonts_css"] ?? null) != false)) && twig_length_filter($this->env, ($context["webfont_config_fonts_css"] ?? null)))) {
            // line 56
            echo "        ";
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["webfont_config_fonts_css"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 58
                echo "        ";
                if ((((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/css/") .  !twig_test_empty($context["value"]))) {
                    // line 59
                    echo "          <style>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_replace_filter(twig_source($this->env, ((($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/css/") . $this->sandbox->ensureToStringAllowed($context["value"]))), ["../fonts" => (($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/fonts")]));
                    echo "</style>
        ";
                }
                // line 61
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        ";
            // line 71
            echo "      ";
        }
        // line 72
        echo "
      ";
        // line 74
        echo "      ";
        $context["custom_fonts"] = false;
        // line 75
        echo "      ";
        $context["custom_fonts_length"] = 0;
        // line 76
        echo "
      ";
        // line 77
        if ((((array_key_exists("webfont_config_font_families", $context) &&  !(null === ($context["webfont_config_font_families"] ?? null))) && (($context["webfont_config_font_families"] ?? null) != false)) && twig_length_filter($this->env, ($context["webfont_config_font_families"] ?? null)))) {
            // line 78
            echo "        ";
            $context["custom_fonts"] = true;
            // line 79
            echo "        ";
            $context["custom_fonts_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["webfont_config_font_families"] ?? null)));
            // line 80
            echo "      ";
        }
        // line 81
        echo "      ";
        if (($context["custom_fonts"] ?? null)) {
            // line 82
            echo "      <script>
        (function() {
          // Optimization for Repeat Views
          if( sessionStorage.fontsLoadedCriticalFoftPolyfill ) {
            document.documentElement.className += \" fonts-loaded\";
            document.documentElement.className += \"";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["webfont_config_font_families"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " font-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter(twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"])), [" " => "", "_" => ""]), "html", null, true);
                echo "-loaded";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\";
            return;
          }
          /* Font Face Observer v2.1.0 - © Bram Stein. License: BSD-3-Clause */(function(){'use strict';var f,g=[];function l(a){g.push(a);1==g.length&&f()}function m(){for(;g.length;)g[0](),g.shift()}f=function(){setTimeout(m)};function n(a){this.a=p;this.b=void 0;this.f=[];var b=this;try{a(function(a){q(b,a)},function(a){r(b,a)})}catch(c){r(b,c)}}var p=2;function t(a){return new n(function(b,c){c(a)})}function u(a){return new n(function(b){b(a)})}function q(a,b){if(a.a==p){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&\"object\"==typeof b&&\"function\"==typeof d){d.call(b,function(b){c||q(a,b);c=!0},function(b){c||r(a,b);c=!0});return}}catch(e){c||r(a,e);return}a.a=0;a.b=b;v(a)}}
function r(a,b){if(a.a==p){if(b==a)throw new TypeError;a.a=1;a.b=b;v(a)}}function v(a){l(function(){if(a.a!=p)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0==a.a?\"function\"==typeof c?e(c.call(void 0,a.b)):e(a.b):1==a.a&&(\"function\"==typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}n.prototype.g=function(a){return this.c(void 0,a)};n.prototype.c=function(a,b){var c=this;return new n(function(d,e){c.f.push([a,b,d,e]);v(c)})};
function w(a){return new n(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e==a.length&&b(h)}}var e=0,h=[];0==a.length&&b(h);for(var k=0;k<a.length;k+=1)u(a[k]).c(d(k),c)})}function x(a){return new n(function(b,c){for(var d=0;d<a.length;d+=1)u(a[d]).c(b,c)})};window.Promise||(window.Promise=n,window.Promise.resolve=u,window.Promise.reject=t,window.Promise.race=x,window.Promise.all=w,window.Promise.prototype.then=n.prototype.c,window.Promise.prototype[\"catch\"]=n.prototype.g);}());

(function(){function l(a,b){document.addEventListener?a.addEventListener(\"scroll\",b,!1):a.attachEvent(\"scroll\",b)}function m(a){document.body?a():document.addEventListener?document.addEventListener(\"DOMContentLoaded\",function c(){document.removeEventListener(\"DOMContentLoaded\",c);a()}):document.attachEvent(\"onreadystatechange\",function k(){if(\"interactive\"==document.readyState||\"complete\"==document.readyState)document.detachEvent(\"onreadystatechange\",k),a()})};function t(a){this.a=document.createElement(\"div\");this.a.setAttribute(\"aria-hidden\",\"true\");this.a.appendChild(document.createTextNode(a));this.b=document.createElement(\"span\");this.c=document.createElement(\"span\");this.h=document.createElement(\"span\");this.f=document.createElement(\"span\");this.g=-1;this.b.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.c.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";
this.f.style.cssText=\"max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;\";this.h.style.cssText=\"display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;\";this.b.appendChild(this.h);this.c.appendChild(this.f);this.a.appendChild(this.b);this.a.appendChild(this.c)}
function u(a,b){a.a.style.cssText=\"max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:\"+b+\";\"}function z(a){var b=a.a.offsetWidth,c=b+100;a.f.style.width=c+\"px\";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.g!==b?(a.g=b,!0):!1}function A(a,b){function c(){var a=k;z(a)&&a.a.parentNode&&b(a.g)}var k=a;l(a.b,c);l(a.c,c);z(a)};function B(a,b){var c=b||{};this.family=a;this.style=c.style||\"normal\";this.weight=c.weight||\"normal\";this.stretch=c.stretch||\"normal\"}var C=null,D=null,E=null,F=null;function G(){if(null===D)if(J()&&/Apple/.test(window.navigator.vendor)){var a=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))(?:\\.([0-9]+))/.exec(window.navigator.userAgent);D=!!a&&603>parseInt(a[1],10)}else D=!1;return D}function J(){null===F&&(F=!!document.fonts);return F}
function K(){if(null===E){var a=document.createElement(\"div\");try{a.style.font=\"condensed 100px sans-serif\"}catch(b){}E=\"\"!==a.style.font}return E}function L(a,b){return[a.style,a.weight,K()?a.stretch:\"\",\"100px\",b].join(\" \")}
B.prototype.load=function(a,b){var c=this,k=a||\"BESbswy\",r=0,n=b||3E3,H=(new Date).getTime();return new Promise(function(a,b){if(J()&&!G()){var M=new Promise(function(a,b){function e(){(new Date).getTime()-H>=n?b(Error(\"\"+n+\"ms timeout exceeded\")):document.fonts.load(L(c,'\"'+c.family+'\"'),k).then(function(c){1<=c.length?a():setTimeout(e,25)},b)}e()}),N=new Promise(function(a,c){r=setTimeout(function(){c(Error(\"\"+n+\"ms timeout exceeded\"))},n)});Promise.race([N,M]).then(function(){clearTimeout(r);a(c)},
b)}else m(function(){function v(){var b;if(b=-1!=f&&-1!=g||-1!=f&&-1!=h||-1!=g&&-1!=h)(b=f!=g&&f!=h&&g!=h)||(null===C&&(b=/AppleWebKit\\/([0-9]+)(?:\\.([0-9]+))/.exec(window.navigator.userAgent),C=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=C&&(f==w&&g==w&&h==w||f==x&&g==x&&h==x||f==y&&g==y&&h==y)),b=!b;b&&(d.parentNode&&d.parentNode.removeChild(d),clearTimeout(r),a(c))}function I(){if((new Date).getTime()-H>=n)d.parentNode&&d.parentNode.removeChild(d),b(Error(\"\"+
n+\"ms timeout exceeded\"));else{var a=document.hidden;if(!0===a||void 0===a)f=e.a.offsetWidth,g=p.a.offsetWidth,h=q.a.offsetWidth,v();r=setTimeout(I,50)}}var e=new t(k),p=new t(k),q=new t(k),f=-1,g=-1,h=-1,w=-1,x=-1,y=-1,d=document.createElement(\"div\");d.dir=\"ltr\";u(e,L(c,\"sans-serif\"));u(p,L(c,\"serif\"));u(q,L(c,\"monospace\"));d.appendChild(e.a);d.appendChild(p.a);d.appendChild(q.a);document.body.appendChild(d);w=e.a.offsetWidth;x=p.a.offsetWidth;y=q.a.offsetWidth;I();A(e,function(a){f=a;v()});u(e,
L(c,'\"'+c.family+'\",sans-serif'));A(p,function(a){g=a;v()});u(p,L(c,'\"'+c.family+'\",serif'));A(q,function(a){h=a;v()});u(q,L(c,'\"'+c.family+'\",monospace'))})})};\"object\"===typeof module?module.exports=B:(window.FontFaceObserver=B,window.FontFaceObserver.prototype.load=B.prototype.load);}());

          var fontsLength = ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_fonts_length"] ?? null)), "html", null, true);
            echo ";
          var count = 0;

          ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["webfont_config_font_families"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 107
                echo "          var font";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["key"]), [" " => "", "_" => "", "-" => ""]), "html", null, true);
                echo " = new FontFaceObserver('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                echo "');
          font";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["key"]), [" " => "", "_" => "", "-" => ""]), "html", null, true);
                echo ".load(null, 10000).then(function () {
            document.documentElement.className += \" font-";
                // line 109
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter(twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"])), [" " => "", "_" => ""]), "html", null, true);
                echo "-loaded\";
            // Optimization for Repeat Views
            ++count;
            if (count === fontsLength) {
              document.documentElement.className += \" fonts-loaded\";
              sessionStorage.fontsLoadedCriticalFoftPolyfill = true;
            }
          });
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "        })();
      </script>
      ";
        }
        // line 121
        echo "
    ";
    }

    // line 124
    public function block_favicons($context, array $blocks = [])
    {
        // line 125
        echo "      <link rel=\"apple-touch-icon\" href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon.png\">
      <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-57x57.png\">
      <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-60x60.png\">
      <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-72x72.png\">
      <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-76x76.png\">
      <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-114x114.png\">
      <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-120x120.png\">
      <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-144x144.png\">
      <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-152x152.png\">
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 134
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/apple-touch-icon-180x180.png\">

      <link rel='mask-icon' color='";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["safari_tab_color"] ?? null)), "html", null, true);
        echo "' href='";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/safari-pinned-tab.svg'>

      <link rel=\"icon\" type=\"image/png\" sizes=\"36x36\"  href=\"";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-36x36.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"48x48\"  href=\"";
        // line 139
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-48x48.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"72x72\"  href=\"";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-72x72.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\"  href=\"";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-96x96.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"144x144\"  href=\"";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-144x144.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-192x192.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\"  href=\"";
        // line 144
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-256x256.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"384x384\"  href=\"";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-384x384.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"512x512\"  href=\"";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/android-chrome-512x512.png\">

      <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/favicon-32x32.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/favicon-16x16.png\">
      <link rel=\"icon\" href=\"";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/favicon.ico\">

      <link rel=\"manifest\" href=\"";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/site.webmanifest\">
      <meta name=\"msapplication-config\" content=\"";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/browserconfig.xml\">
      <meta name=\"msapplication-TileColor\" content=\"";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tile_color"] ?? null)), "html", null, true);
        echo "\">
      <meta name=\"msapplication-TileImage\" content=\"";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/ms-icon-70x70.png\">
      <meta name=\"msapplication-TileImage\" content=\"";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/ms-icon-144x144.png\">
      <meta name=\"msapplication-TileImage\" content=\"";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/ms-icon-150x150.png\">
      <meta name=\"msapplication-TileImage\" content=\"";
        // line 158
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/ms-icon-310x310.png\">
      <meta name=\"msapplication-TileImage\" content=\"";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/favicons/generated/ms-icon-310x150.png\">
    ";
    }

    public function getTemplateName()
    {
        return "@rocketship-theme-starter-pages/html/_html--master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 159,  437 => 158,  433 => 157,  429 => 156,  425 => 155,  421 => 154,  417 => 153,  413 => 152,  408 => 150,  404 => 149,  400 => 148,  395 => 146,  391 => 145,  387 => 144,  383 => 143,  379 => 142,  375 => 141,  371 => 140,  367 => 139,  363 => 138,  356 => 136,  351 => 134,  347 => 133,  343 => 132,  339 => 131,  335 => 130,  331 => 129,  327 => 128,  323 => 127,  319 => 126,  314 => 125,  311 => 124,  306 => 121,  301 => 118,  286 => 109,  282 => 108,  275 => 107,  271 => 106,  265 => 103,  237 => 87,  230 => 82,  227 => 81,  224 => 80,  221 => 79,  218 => 78,  216 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 72,  201 => 71,  199 => 62,  193 => 61,  187 => 59,  184 => 58,  179 => 57,  177 => 56,  175 => 55,  172 => 54,  169 => 53,  163 => 52,  150 => 50,  145 => 49,  140 => 48,  138 => 47,  135 => 46,  132 => 44,  126 => 42,  123 => 41,  117 => 39,  114 => 38,  112 => 37,  109 => 36,  101 => 179,  97 => 178,  93 => 177,  89 => 176,  83 => 173,  80 => 172,  76 => 167,  69 => 163,  65 => 162,  62 => 161,  60 => 124,  57 => 123,  55 => 36,  50 => 34,  43 => 30,  37 => 27,  34 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@rocketship-theme-starter-pages/html/_html--master.twig", "/var/www/drupal/web/themes/contrib/rocketship_theme_starter/components/00-theme/05-pages/html/_html--master.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 36, "if" => 38, "for" => 48, "set" => 74];
        static $filters = ["escape" => 27, "safe_join" => 30, "t" => 173, "length" => 46, "raw" => 59, "replace" => 59, "lower" => 87];
        static $functions = ["source" => 59];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'safe_join', 't', 'length', 'raw', 'replace', 'lower'],
                ['source']
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
