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

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--introduction--default.html.twig */
class __TwigTemplate_ec5727c2eb9dbfb24d73497589e7875c62f5f84b39c4887cf9067d4e64ade5e4 extends \Twig\Template
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
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/section.introduction"), "html", null, true);
        echo "

";
        // line 44
        $context["classes"] = [0 => "introduction"];
        // line 48
        echo "
<div";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  <div class=\"card__body\">
    ";
        // line 52
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_introduction_title", [])))) {
            // line 53
            echo "      <h2 class=\"card__title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_introduction_title", [])), "html", null, true);
            echo "</h2>
    ";
        }
        // line 55
        echo "    <div class=\"card__text\">
      ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_introduction_text", [])), "html", null, true);
        echo "
    </div>
    ";
        // line 58
        if (((($context["logged_in"] ?? null) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_introduction_link_lu", [])))) || ( !($context["logged_in"] ?? null) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_introduction_link_an", [])))))) {
            // line 59
            echo "      <footer class=\"card__actionbar\">
        <div class=\"card__link\">
          ";
            // line 61
            if (($context["logged_in"] ?? null)) {
                // line 62
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_introduction_link_lu", [])), "html", null, true);
                echo "
          ";
            } else {
                // line 64
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_introduction_link_an", [])), "html", null, true);
                echo "
          ";
            }
            // line 66
            echo "        </div>
      </footer>
    ";
        }
        // line 69
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--introduction--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 69,  84 => 66,  78 => 64,  72 => 62,  70 => 61,  66 => 59,  64 => 58,  59 => 56,  56 => 55,  50 => 53,  48 => 52,  42 => 49,  39 => 48,  37 => 44,  32 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--introduction--default.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--introduction--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 44, "if" => 52];
        static $filters = ["escape" => 41, "render" => 52];
        static $functions = ["attach_library" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render'],
                ['attach_library']
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
