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

/* @ekam/system/footer.html.twig */
class __TwigTemplate_8ffb9a947e642d0a7e35155ceb3cdde659609a7136d4a87b14c40e90c0e7c1cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<footer class=\"footer bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-sm-12 footer-columns\"> ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "\t</div>
\t\t\t<div class=\"col-md-4 col-sm-12 footer-columns\">\t";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo " </div>
\t\t\t<div class=\"col-md-4 col-sm-12 footer-columns\">\t";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\"> ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo " </div>
\t\t</div>
\t</div>

\t<div class=\"bottom-footer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-6 col-sm-12 footer-bottom-columns\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t<p>&copy; <script>document.write(new Date().getFullYear())</script>\t<a href=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ptiwebtech"] ?? null)), "html", null, true);
        echo "\"> Prerna Trimurty Infotech Pvt. Ltd. </a>
\t\t\t\t\t\tAll Rights Reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-6 col-sm-12 footer-bottom-columns\">
\t\t\t\t<div class=\"social\">
\t\t\t\t<h6>Stay Connected</h6>
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" class=\"twitter\"> <i class=\"fa fa-twitter\"></i> </a>
\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\" class=\"facebook\"> <i class=\"fa fa-facebook\"></i>\t</a>
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null)), "html", null, true);
        echo "\" class=\"instagram\"> <i class=\"fa fa-instagram\"></i> </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "@ekam/system/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 26,  96 => 25,  86 => 18,  74 => 9,  68 => 6,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@ekam/system/footer.html.twig", "/home/vol11_8/iceiy.com/icei_30923225/htdocs/themes/ekam/templates/system/footer.html.twig");
    }
}
