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

/* profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_8f72050d32c60442b681fcbffa8b142335e5d7653216860378523895a5d612ae extends \Twig\Template
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
        $context["classes"] = [0 => "control-label", 1 => (((        // line 23
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 2 => (((        // line 24
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")), 3 => (((        // line 25
($context["title_display"] ?? null) == "above")) ? ("control-label--above") : ("")), 4 => ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), 5 => ((        // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null)), "html", null, true);
        // line 32
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 33
            echo "<label";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            // line 35
            if ((($context["required"] ?? null) && (($context["title_display"] ?? null) != "invisible"))) {
                // line 36
                echo "<span class=\"form-required\" title=\"";
                echo t("This field is required", array());
                echo "\">*</span>";
            }
            // line 38
            if (($context["description"] ?? null)) {
                // line 39
                echo "<p class=\"help-block\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
                echo "</p>";
            }
            // line 41
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 41,  59 => 39,  57 => 38,  52 => 36,  50 => 35,  48 => 34,  43 => 33,  41 => 32,  39 => 31,  37 => 27,  36 => 26,  35 => 25,  34 => 24,  33 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "if" => 32, "trans" => 36];
        static $filters = ["escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
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
}
