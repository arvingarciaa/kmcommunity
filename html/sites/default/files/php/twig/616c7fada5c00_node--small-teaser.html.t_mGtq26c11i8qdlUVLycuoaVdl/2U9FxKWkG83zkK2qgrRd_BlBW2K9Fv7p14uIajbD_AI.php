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

/* profiles/contrib/social/themes/socialbase/templates/node/node--small-teaser.html.twig */
class __TwigTemplate_25e722b97e967852c979b68d1ac63213b1389ac6b8783e6281434f54a338bbba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'teaser_image' => [$this, 'block_teaser_image'],
            'text' => [$this, 'block_text'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true);
        echo "
";
        // line 70
        $context["classes"] = [0 => "teaser--small"];
        // line 74
        echo "
<div ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 77
        $this->displayBlock('teaser_image', $context, $blocks);
        // line 89
        echo "
  <div class=\"teaser--small__details small\">
  ";
        // line 91
        $this->displayBlock('text', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        $this->displayBlock('extra_text', $context, $blocks);
        // line 106
        echo "  </div>

</div>
";
    }

    // line 77
    public function block_teaser_image($context, array $blocks = [])
    {
        // line 78
        echo "    <div class=\"teaser--small__media\">
      ";
        // line 79
        if ( !twig_test_empty(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), (("field_" . $this->getAttribute(($context["node"] ?? null), "bundle", [])) . "_image"), [], "array")), "<img>"))) {
            // line 80
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), (("field_" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))) . "_image"), [], "array")), "html", null, true);
            echo "
      ";
        } else {
            // line 82
            echo "        <svg class=\"teaser--small__type-icon\">
          <title>";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", [])))), "html", null, true);
            echo "</title>
          <use xlink:href=\"#icon-";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))), "html", null, true);
            echo "\"></use>
        </svg>
      ";
        }
        // line 87
        echo "    </div>
  ";
    }

    // line 91
    public function block_text($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    <div";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
        echo " class=\"card__text teaser--small__title\">
      <a href=\"";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 99
    public function block_extra_text($context, array $blocks = [])
    {
        // line 100
        echo "    <div class=\"teaser--small__meta\">
      ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
        echo " &middot; ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "

      ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), (("field_" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))) . "_image")), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/node/node--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 103,  132 => 101,  129 => 100,  126 => 99,  120 => 96,  113 => 94,  109 => 93,  104 => 92,  101 => 91,  96 => 87,  90 => 84,  86 => 83,  83 => 82,  77 => 80,  75 => 79,  72 => 78,  69 => 77,  62 => 106,  60 => 99,  57 => 98,  55 => 91,  51 => 89,  49 => 77,  44 => 75,  41 => 74,  39 => 70,  35 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/node/node--small-teaser.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/themes/socialbase/templates/node/node--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70, "block" => 77, "if" => 79];
        static $filters = ["escape" => 68, "striptags" => 79, "render" => 79, "capitalize" => 83, "clean_class" => 83, "without" => 103];
        static $functions = ["attach_library" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'striptags', 'render', 'capitalize', 'clean_class', 'without'],
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
