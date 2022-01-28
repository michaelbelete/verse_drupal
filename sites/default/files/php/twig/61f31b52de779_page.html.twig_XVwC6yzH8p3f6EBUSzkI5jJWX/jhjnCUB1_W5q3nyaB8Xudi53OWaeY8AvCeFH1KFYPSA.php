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

/* themes/ekam/templates/system/page.html.twig */
class __TwigTemplate_74afc3b2d8567e98feac32d2ace837ffdfa41781e0d7fd63fc7dc6f7062873cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 2, "if" => 17];
        $filters = ["escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        echo "<!-- HEADER SECTION-->
";
        // line 2
        $this->loadTemplate("@ekam/system/header.html.twig", "themes/ekam/templates/system/page.html.twig", 2)->display($context);
        // line 3
        echo "<!-- END HEADER SECTION -->

<div class=\"clearfix\"></div>
<section id=\"main-wrapper\" class=\"pt-3 pb-3 clearfix\">
\t<div class=\"container\">
\t\t";
        // line 9
        echo "\t\t<div id=\"main\" class=\"row clearfix\">
\t\t\t<div id=\"content\" class=\"col-12 col-md-8 col-sm-12\" role=\"main\">
\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bread_crumb", [])), "html", null, true);
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 18
            echo "\t\t\t\t<section id=\"sidebar\" class=\"col-12 col-md-4 col-sm-12 \">
\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t";
        }
        // line 24
        echo "\t\t</div>
\t</div>
</section>

<div class=\"clearfix\"></div>
<!-- FOOTER SECTION-->
";
        // line 30
        $this->loadTemplate("@ekam/system/footer.html.twig", "themes/ekam/templates/system/page.html.twig", 30)->display($context);
        // line 31
        echo "<!-- END FOOTER SECTION -->";
    }

    public function getTemplateName()
    {
        return "themes/ekam/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  107 => 30,  99 => 24,  92 => 20,  88 => 18,  86 => 17,  80 => 14,  76 => 13,  72 => 12,  67 => 9,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ekam/templates/system/page.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/ekam/templates/system/page.html.twig");
    }
}
