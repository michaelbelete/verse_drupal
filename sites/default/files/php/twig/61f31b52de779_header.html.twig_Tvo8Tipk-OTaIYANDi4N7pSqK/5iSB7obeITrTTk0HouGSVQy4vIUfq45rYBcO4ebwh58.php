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

/* @thex/template-parts/header/header.html.twig */
class __TwigTemplate_9034bf6534168fd3d5c9fc28f4e93af45e161b80de93e848011450593d2ceb59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "include" => 21];
        $filters = ["escape" => 6];
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
        echo "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 5
            echo "        <div class=\"site-brand\">
          ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div> <!--/.site-branding -->
      ";
        }
        // line 9
        echo "      ";
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search_box", []))) {
            // line 10
            echo "      <div class=\"header-right\">
        ";
            // line 11
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 12
                echo "          <div class=\"mobile-menu\"><span></span></div> ";
                // line 13
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 16
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 19
            echo " <!--  end if for -->
        ";
            // line 20
            if ($this->getAttribute(($context["page"] ?? null), "search_box", [])) {
                // line 21
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@thex/template-parts/header/header.html.twig", 21)->display($context);
                // line 22
                echo "        ";
            }
            // line 23
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 25
        echo "    </div><!-- /header-container -->
  </div><!-- /container -->
</header><!-- /header -->
";
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  104 => 23,  101 => 22,  98 => 21,  96 => 20,  93 => 19,  86 => 16,  81 => 13,  79 => 12,  77 => 11,  74 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/header/header.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/thex/templates/template-parts/header/header.html.twig");
    }
}
