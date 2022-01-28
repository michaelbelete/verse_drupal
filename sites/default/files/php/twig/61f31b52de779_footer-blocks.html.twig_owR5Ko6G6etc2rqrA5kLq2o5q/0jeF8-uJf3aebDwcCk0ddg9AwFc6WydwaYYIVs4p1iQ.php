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

/* @thex/template-parts/footer/footer-blocks.html.twig */
class __TwigTemplate_3380f53591b490edcfd025557808fd24c53e3c0b7885950ba37c59add8204a6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<footer class=\"footer-blocks footer\">
  <div class=\"container\">
    <div class=\"footer-blocks-container\">
      ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "footer_one", [])) {
            // line 5
            echo "        <div class=\"footer-block footer-one\">
          ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_one", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 9
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_two", [])) {
            // line 10
            echo "        <div class=\"footer-block footer-two\">
          ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_two", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 14
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_three", [])) {
            // line 15
            echo "        <div class=\"footer-block footer-three\">
          ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_three", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 19
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_four", [])) {
            // line 20
            echo "        <div class=\"footer-block footer-four\">
          ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_four", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 24
        echo "    </div><!-- /footer-top-container -->
  </div><!-- /container -->
</footer><!-- /footer-top -->
";
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/footer/footer-blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 21,  98 => 20,  95 => 19,  89 => 16,  86 => 15,  83 => 14,  77 => 11,  74 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/footer/footer-blocks.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/thex/templates/template-parts/footer/footer-blocks.html.twig");
    }
}
