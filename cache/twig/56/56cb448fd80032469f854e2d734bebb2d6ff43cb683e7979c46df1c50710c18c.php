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

/* partials/javascript-config.html.twig */
class __TwigTemplate_1e7cfb101b284b4ce7af2063d826ceb161065d9e1d80c406ca1b7f56e0ab21a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 2
            $context["notifications"] = ((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), "dashboard-notifications", [], "array") || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "dashboard", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "plugins", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "themes", []))) ? (1) : (0));
            // line 3
            switch (($context["template_route"] ?? null)) {
                case "dashboard":
                {
                    // line 5
                    echo "        ";
                    $context["notifications_filters"] = "['feed', 'dashboard', 'top']";
                    // line 6
                    echo "    ";
                    break;
                }
                case "plugins":
                {
                    // line 7
                    echo "        ";
                    $context["notifications_filters"] = "['plugins', 'top']";
                    // line 8
                    echo "    ";
                    break;
                }
                case "themes":
                {
                    // line 9
                    echo "        ";
                    $context["notifications_filters"] = "['themes', 'top']";
                    // line 10
                    echo "    ";
                    break;
                }
                default:
                {
                    // line 11
                    echo "        ";
                    $context["notifications_filters"] = "['top']";
                }
            }
            // line 13
            echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method"), "html", null, true);
            echo "',
        base_url_relative: '";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "',
        base_url_simple: '";
            // line 18
            echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
            echo "',
        route: '";
            // line 19
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo "',
        param_sep: '";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo "',
        ";
            // line 21
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 22
                echo "        enable_auto_updates_check: '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "enable_auto_updates_check", []), "html", null, true);
                echo "',
        ";
            }
            // line 24
            echo "        admin_timeout: '";
            (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", []), "html", null, true))) : (print (1800)));
            echo "',
        admin_nonce: '";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "getNonce", []), "html", null, true);
            echo "',
        language: '";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", []), "en")) : ("en")), "html", null, true);
            echo "',
        pro_enabled: '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", []), "html", null, true);
            echo "',
        notifications: {
            enabled: ";
            // line 29
            echo twig_escape_filter($this->env, ($context["notifications"] ?? null), "html", null, true);
            echo ",
            filters: ";
            // line 30
            echo ($context["notifications_filters"] ?? null);
            echo "
        },
        local_notifications: '";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", []), false)) : (false)), "html", null, true);
            echo "',
        site: {
            delimiter: '";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", []), "===")) : ("===")), "html", null, true);
            echo "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "params", [0 => null, 1 => true], "method"));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 40
                echo "        window.GravAdmin.uri_params.";
                echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                echo " = \"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["value"], ["\\" => "/"]), "html", null, true);
                echo "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 42,  147 => 40,  143 => 39,  135 => 34,  130 => 32,  125 => 30,  121 => 29,  116 => 27,  112 => 26,  108 => 25,  103 => 24,  97 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  70 => 13,  65 => 11,  59 => 10,  56 => 9,  50 => 8,  47 => 7,  41 => 6,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/javascript-config.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/admin/themes/grav/templates/partials/javascript-config.html.twig");
    }
}
