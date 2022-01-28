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

/* themes/thex/templates/layout/page.html.twig */
class __TwigTemplate_2d2e6b382f4aa67c29f7e65230655e1c718f74bdb4b13e3a6abcaa3176583ba1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "include" => 2];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 1
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", []) || $this->getAttribute(($context["page"] ?? null), "header_top_right", []))) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/header/header-top.html.twig", "themes/thex/templates/layout/page.html.twig", 2)->display($context);
        }
        // line 4
        $this->loadTemplate("@thex/template-parts/header/header.html.twig", "themes/thex/templates/layout/page.html.twig", 4)->display($context);
        // line 5
        if (( !($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "page_header", []))) {
            // line 6
            echo "  ";
            $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "themes/thex/templates/layout/page.html.twig", 6)->display($context);
        }
        // line 8
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 9
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/thex/templates/layout/page.html.twig", 9)->display($context);
        }
        // line 11
        echo "<div class=\"main-wrapper\">
  <div class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        ";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 17
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/thex/templates/layout/page.html.twig", 17)->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"node-content\">
          ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </div>
        ";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 23
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/thex/templates/layout/page.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        }
        // line 25
        echo "      </main>
    ";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 27
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/thex/templates/layout/page.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 30
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/thex/templates/layout/page.html.twig", 30)->display($context);
            // line 31
            echo "    ";
        }
        // line 32
        echo "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 35
        $this->loadTemplate("@thex/template-parts/footer/footer.html.twig", "themes/thex/templates/layout/page.html.twig", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/thex/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  126 => 32,  123 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  98 => 22,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  75 => 11,  71 => 9,  69 => 8,  65 => 6,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/thex/templates/layout/page.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/thex/templates/layout/page.html.twig");
    }
}
