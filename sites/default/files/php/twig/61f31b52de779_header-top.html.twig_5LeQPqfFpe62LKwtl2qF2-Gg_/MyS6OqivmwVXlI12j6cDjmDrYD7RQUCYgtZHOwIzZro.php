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

/* @thex/template-parts/header/header-top.html.twig */
class __TwigTemplate_4018394a8efc227846257349c04e3c1a69506408a1cad351853d5e580d4ebdc7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 4];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        echo "<div class=\"header-top\">
  <div class=\"container\">
    <div class=\"header-top-container\">
      ";
        // line 4
        $this->loadTemplate("@thex/template-parts/header/header-top-left.html.twig", "@thex/template-parts/header/header-top.html.twig", 4)->display($context);
        // line 5
        echo "      ";
        $this->loadTemplate("@thex/template-parts/header/header-top-right.html.twig", "@thex/template-parts/header/header-top.html.twig", 5)->display($context);
        // line 6
        echo "    </div><!-- /header-top-container -->
  </div><!-- /container -->
</div><!-- /header-top -->
";
    }

    public function getTemplateName()
    {
        return "@thex/template-parts/header/header-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/header/header-top.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/thex/templates/template-parts/header/header-top.html.twig");
    }
}
