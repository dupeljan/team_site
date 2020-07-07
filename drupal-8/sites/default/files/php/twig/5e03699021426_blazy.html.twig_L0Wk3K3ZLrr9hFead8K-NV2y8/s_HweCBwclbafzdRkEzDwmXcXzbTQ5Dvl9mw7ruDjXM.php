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

/* modules/blazy/templates/blazy.html.twig */
class __TwigTemplate_d9ed02ca49e4ae64ac12b45daa40abb41fab8b18841ce3d35a48bd8a6149fc5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'blazy_player' => [$this, 'block_blazy_player'],
            'blazy_media' => [$this, 'block_blazy_media'],
            'blazy_content' => [$this, 'block_blazy_content'],
            'blazy_caption' => [$this, 'block_blazy_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 27, "if" => 46, "block" => 47, "for" => 89];
        $filters = ["clean_class" => 31, "escape" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['clean_class', 'escape'],
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
        // line 27
        $context["classes"] = [0 => "media", 1 => (($this->getAttribute(        // line 29
($context["settings"] ?? null), "namespace", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "namespace", [])))) : ("")), 2 => (($this->getAttribute(        // line 30
($context["settings"] ?? null), "lazy", [])) ? ("media--loading") : ("")), 3 => (($this->getAttribute(        // line 31
($context["settings"] ?? null), "media_switch", [])) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 4 => (($this->getAttribute(        // line 32
($context["settings"] ?? null), "player", [])) ? ("media--player") : ("")), 5 => (($this->getAttribute(        // line 33
($context["settings"] ?? null), "ratio", [])) ? (("media--ratio media--ratio--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ratio", [])))) : ("")), 6 => (($this->getAttribute(        // line 34
($context["settings"] ?? null), "responsive_image_style_id", [])) ? ("media--responsive") : ("")), 7 => (($this->getAttribute(        // line 35
($context["settings"] ?? null), "type", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "type", [])))) : (""))];
        // line 39
        $context["iframe_classes"] = [0 => "media__iframe", 1 => (($this->getAttribute(        // line 41
($context["settings"] ?? null), "ratio", [])) ? ("media__element") : (""))];
        // line 44
        echo "
";
        // line 45
        ob_start(function () { return ''; });
        // line 46
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "player", [])) {
            // line 47
            echo "    ";
            $this->displayBlock('blazy_player', $context, $blocks);
            // line 54
            echo "  ";
        }
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start(function () { return ''; });
        // line 58
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "
";
        // line 67
        ob_start(function () { return ''; });
        // line 68
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 85
        echo "
  ";
        // line 86
        if ((($context["captions"] ?? null) && $this->getAttribute(($context["captions"] ?? null), "inline", [], "any", true, true))) {
            // line 87
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 96
            echo "  ";
        }
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
";
        // line 99
        if (($context["wrapper_attributes"] ?? null)) {
            // line 100
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
            echo ">
    ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 104
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    // line 47
    public function block_blazy_player($context, array $blocks = [])
    {
        // line 48
        echo "      <iframe";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["iframe_attributes"] ?? null), "addClass", [0 => ($context["iframe_classes"] ?? null)], "method")), "html", null, true);
        echo " allowfullscreen></iframe>
      ";
        // line 49
        if ($this->getAttribute(($context["settings"] ?? null), "media_switch", [])) {
            // line 50
            echo "        <span class=\"media__icon media__icon--close\"></span>
        <span class=\"media__icon media__icon--play\" data-url=\"";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "autoplay_url", [])), "html", null, true);
            echo "\"></span>
      ";
        }
        // line 53
        echo "    ";
    }

    // line 58
    public function block_blazy_media($context, array $blocks = [])
    {
        // line 59
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
        echo "
      ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["player"] ?? null)), "html", null, true);
        echo "
      ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "icon", [])), "html", null, true);
        echo "
    </div>
  ";
    }

    // line 68
    public function block_blazy_content($context, array $blocks = [])
    {
        // line 69
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_attributes"] ?? null)), "html", null, true);
            echo ">";
        }
        // line 70
        echo "      ";
        if ((($context["url"] ?? null) &&  !$this->getAttribute(($context["settings"] ?? null), "player", []))) {
            // line 71
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
            echo "</a>

        ";
            // line 74
            echo "        ";
            if ((($context["captions"] ?? null) &&  !twig_test_empty($this->getAttribute(($context["captions"] ?? null), "lightbox", [])))) {
                // line 75
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["captions"] ?? null), "lightbox", [])), "html", null, true);
                // line 77
                echo "</div>
        ";
            }
            // line 79
            echo "
      ";
        } else {
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
        }
        // line 83
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "</div>";
        }
        // line 84
        echo "  ";
    }

    // line 87
    public function block_blazy_caption($context, array $blocks = [])
    {
        // line 88
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_attributes"] ?? null)), "html", null, true);
        echo ">
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["captions"] ?? null), "inline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 90
            echo "          ";
            if ($this->getAttribute($context["caption"], "content", [])) {
                // line 91
                echo "            <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "content", [])), "html", null, true);
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo ">
          ";
            }
            // line 93
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 94,  261 => 93,  249 => 91,  246 => 90,  242 => 89,  237 => 88,  234 => 87,  230 => 84,  225 => 83,  222 => 81,  218 => 79,  214 => 77,  212 => 76,  210 => 75,  207 => 74,  197 => 71,  194 => 70,  187 => 69,  184 => 68,  177 => 62,  173 => 61,  169 => 60,  164 => 59,  161 => 58,  157 => 53,  152 => 51,  149 => 50,  147 => 49,  142 => 48,  139 => 47,  131 => 104,  125 => 101,  120 => 100,  118 => 99,  115 => 98,  111 => 96,  108 => 87,  106 => 86,  103 => 85,  100 => 68,  98 => 67,  95 => 66,  91 => 58,  89 => 57,  86 => 56,  82 => 54,  79 => 47,  76 => 46,  74 => 45,  71 => 44,  69 => 41,  68 => 39,  66 => 35,  65 => 34,  64 => 33,  63 => 32,  62 => 31,  61 => 30,  60 => 29,  59 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/blazy/templates/blazy.html.twig", "/var/www/test.site/public_html/drupal-8/modules/blazy/templates/blazy.html.twig");
    }
}
