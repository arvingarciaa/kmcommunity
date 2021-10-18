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

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig */
class __TwigTemplate_c98661d1530aa6dc25658cbd5adc6cf2517bf21da05f9838bb439c45593d5731 extends \Twig\Template
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true);
        echo "
";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/section.hero"), "html", null, true);
        echo "

";
        // line 45
        $context["cover_classes"] = [0 => ("paragraph--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", [])))), 1 => "cover", 2 => "brand-bg-primary", 3 => "cover--landing", 4 => "hero", 5 => ((        // line 51
($context["hero_styled_image_url"] ?? null)) ? ("cover-img cover-img-gradient") : (""))];
        // line 54
        echo "
<div";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["cover_classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["hero_styled_image_url"] ?? null)) {
            echo " style=\"background-image: url('";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_styled_image_url"] ?? null)), "html", null, true);
            echo "');\" ";
        }
        echo ">
  <div class=\"hero__bgimage-overlay\"></div>
  ";
        // line 57
        if (($context["node_edit_url"] ?? null)) {
            // line 58
            echo "    <div class=\"hero-action-button\">
      <a href=\"";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_edit_url"] ?? null)), "html", null, true);
            echo "\"  title=\"Edit content\" class=\"btn btn-default btn-floating waves-effect waves-circle\">
        <svg class=\"icon-gray icon-medium\">
          <use xlink:href=\"#icon-edit\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 66
        echo "
  <div class=\"cover-wrap container\">
    <div class=\"cover-small\">
      <h1 class=\"page-title\">";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_title", [])), "html", null, true);
        echo "</h1>
      <h3 class=\"page-subtitle\">";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_subtitle", [])), "html", null, true);
        echo "</h3>
      <footer class=\"hero-footer\">
        ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_buttons", [])), "html", null, true);
        echo "
      </footer>
    </div>
  </div> ";
        // line 76
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 76,  88 => 72,  83 => 70,  79 => 69,  74 => 66,  64 => 59,  61 => 58,  59 => 57,  48 => 55,  45 => 54,  43 => 51,  42 => 46,  41 => 45,  36 => 42,  32 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/paragraph--hero--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 45, "if" => 55];
        static $filters = ["escape" => 41, "clean_class" => 46];
        static $functions = ["attach_library" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class'],
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
