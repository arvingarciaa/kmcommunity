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

/* profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig */
class __TwigTemplate_e5d4bba7c026f55509834a3613dd9d82db83012ae44a81d47bdff8e577c23a00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'nodefull_body' => [$this, 'block_nodefull_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 66
        echo "
";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true);
        echo "
";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_landing_page/landing_page"), "html", null, true);
        echo "

";
        // line 71
        $context["classes"] = [0 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 1 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 76
        echo "
<article";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 78
        if ( !($context["is_front"] ?? null)) {
            // line 79
            echo "  <h1 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  <div class=\"hero-action-button\">
    ";
        // line 84
        if (($context["node_edit_url"] ?? null)) {
            // line 85
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_edit_url"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo t("Edit content", array());
            echo "\" class=\"waves-effect waves-light btn btn-raised btn-default btn-floating\">
      <svg class=\"icon-gray icon-medium\">
        <use xlink:href=\"#icon-edit\"></use>
      </svg>
    </a>
    ";
        }
        // line 91
        echo "  </div>
  ";
        // line 92
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", [], "method")) {
            // line 93
            echo "    <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            echo "</div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        $this->displayBlock('nodefull_body', $context, $blocks);
        // line 99
        echo "</article>
";
    }

    // line 96
    public function block_nodefull_body($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "flag_follow_content"), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 97,  109 => 96,  104 => 99,  102 => 96,  99 => 95,  93 => 93,  91 => 92,  88 => 91,  76 => 85,  74 => 84,  69 => 82,  64 => 81,  58 => 79,  56 => 78,  52 => 77,  49 => 76,  47 => 73,  46 => 72,  45 => 71,  40 => 68,  36 => 67,  33 => 66,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig", "/home/arvin/www/opensocialkm/html/profiles/contrib/social/modules/social_features/social_landing_page/templates/node--landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 71, "if" => 78, "trans" => 85, "block" => 96];
        static $filters = ["escape" => 67, "without" => 97];
        static $functions = ["attach_library" => 67];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'block'],
                ['escape', 'without'],
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
