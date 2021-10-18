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

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig */
class __TwigTemplate_5f5c0bc683116d4da63f797d4f48f7308dad2f732a734b54a3c573b2c0c0f92e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        echo "
";
        // line 31
        $context["classes"] = [0 => "row"];
        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 37
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
";
        }
        // line 39
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 43
        echo "  ";
        // line 44
        echo "  ";
        // line 45
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", [])) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_navigation", [])), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 49
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
  ";
        }
        // line 51
        echo "  ";
        // line 52
        echo "  <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
  </section>

</main>

";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 65
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        // line 56
        echo "      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 57,  108 => 56,  105 => 55,  97 => 65,  95 => 64,  88 => 59,  85 => 55,  83 => 54,  78 => 52,  76 => 51,  70 => 49,  67 => 48,  61 => 46,  58 => 45,  56 => 44,  54 => 43,  49 => 39,  43 => 37,  41 => 36,  38 => 35,  36 => 31,  33 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/page--node--landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 36, "block" => 55];
        static $filters = ["escape" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
