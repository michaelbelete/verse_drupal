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

/* @thex/template-parts/footer/footer.html.twig */
class __TwigTemplate_b2b313aaae7f08eefb133304b5ae4f082a04fd7c644c4ed0a3297413090eb6ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "include" => 2];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@thex/template-parts/footer/footer.html.twig", 2)->display($context);
        }
        // line 4
        if (((($this->getAttribute(($context["page"] ?? null), "footer_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_four", []))) {
            // line 5
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@thex/template-parts/footer/footer.html.twig", 5)->display($context);
        }
        // line 7
        if (($this->getAttribute(($context["page"] ?? null), "footer_bottom_left", []) || $this->getAttribute(($context["page"] ?? null), "footer_bottom_right", []))) {
            // line 8
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@thex/template-parts/footer/footer.html.twig", 8)->display($context);
        }
        // line 10
        $this->loadTemplate("@thex/template-parts/footer/footer-bottom.html.twig", "@thex/template-parts/footer/footer.html.twig", 10)->display($context);
        // line 11
        if (($context["scrolltotop_on"] ?? null)) {
            // line 12
            echo "  ";
            $this->loadTemplate("@thex/template-parts/components/scrolltotop.html.twig", "@thex/template-parts/footer/footer.html.twig", 12)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  75 => 11,  73 => 10,  69 => 8,  67 => 7,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/footer/footer.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/thex/templates/template-parts/footer/footer.html.twig");
    }
}
