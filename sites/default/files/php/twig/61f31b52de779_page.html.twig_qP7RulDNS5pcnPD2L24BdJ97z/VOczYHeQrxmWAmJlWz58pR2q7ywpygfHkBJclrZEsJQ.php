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

/* themes/d8_blog_theme/templates/page.html.twig */
class __TwigTemplate_b3ed1296e6851b320a2f60eafe6cf15500567ce3f857b9dd00b5fb0739feb053 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 83, "for" => 86];
        $filters = ["escape" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 73
        echo "<div id=\"page-wrapper\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    <div class=\"container\">
\t";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t
\t</div>
  </header>

  ";
        // line 83
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 84
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 87
                echo "          <li>
            <a href=\"";
                // line 88
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "url", [])), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "src", [])), "html", null, true);
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "title", [])), "html", null, true);
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </ul>
    </div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 97
            echo "    <div id=\"highlighted\"><div class=\"container\">
\t<div class=\"row\">";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
\t</div></div>
  ";
        }
        // line 101
        echo "\t<div class=\"container\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "</div>
  ";
        // line 103
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "home_high1", []) || $this->getAttribute(($context["page"] ?? null), "home_high2", [])) || $this->getAttribute(($context["page"] ?? null), "home_high3", []))) {
            // line 104
            echo "    <div id=\"home-highlights\" class=\"row\">
      <div class=\"container\">";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "home_high1", [])) {
                // line 106
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_high1", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 108
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high2", [])) {
                // line 109
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_high2", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 111
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high3", [])) {
                // line 112
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_high3", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 113
            echo "</div>
    </div>
  ";
        }
        // line 116
        echo "
  <main id=\"main\" class=\"clearfix\">
    <div class=\"container\">
\t<div class=\"row\">";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 120
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\">
\t          ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
\t\t\t  \t";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "

\t\t\t  </div>
       <!-- /#sidebar-first -->
    ";
        }
        // line 127
        echo "
    <div class=\"";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["conditionalStr"] ?? null)), "html", null, true);
        echo "\" role=\"main\">
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 130
            echo "        <div id=\"content_top\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "</div>
      ";
        }
        // line 132
        echo "
      ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

    </div>";
        // line 136
        echo "
    ";
        // line 137
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 138
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 141
        echo "</div>
</div>
  </main>

  ";
        // line 146
        echo "  ";
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 147
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 149
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 150
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 152
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 153
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 155
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 156
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 158
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 159
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 161
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 165
        echo "
  <footer class=\"site-footer\">
      <div class=\"container\">
        ";
        // line 168
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 169
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 171
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 172
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 177
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 181
        echo "      </div>
    </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/d8_blog_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 181,  310 => 178,  307 => 177,  304 => 176,  298 => 173,  294 => 172,  290 => 171,  286 => 170,  283 => 169,  281 => 168,  276 => 165,  270 => 161,  264 => 159,  261 => 158,  255 => 156,  252 => 155,  246 => 153,  243 => 152,  237 => 150,  235 => 149,  231 => 147,  228 => 146,  222 => 141,  216 => 139,  211 => 138,  209 => 137,  206 => 136,  201 => 133,  198 => 132,  192 => 130,  190 => 129,  186 => 128,  183 => 127,  175 => 122,  171 => 121,  166 => 120,  164 => 119,  159 => 116,  154 => 113,  148 => 112,  145 => 111,  139 => 109,  136 => 108,  130 => 106,  128 => 105,  125 => 104,  122 => 103,  117 => 101,  111 => 98,  108 => 97,  106 => 96,  103 => 95,  98 => 92,  89 => 89,  83 => 88,  80 => 87,  76 => 86,  72 => 84,  69 => 83,  61 => 77,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/d8_blog_theme/templates/page.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/d8_blog_theme/templates/page.html.twig");
    }
}
