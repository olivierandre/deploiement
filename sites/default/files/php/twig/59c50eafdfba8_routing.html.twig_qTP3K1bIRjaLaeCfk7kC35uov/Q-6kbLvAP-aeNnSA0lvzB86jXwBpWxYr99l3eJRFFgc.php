<?php

/* @webprofiler/Collector/routing.html.twig */
class __TwigTemplate_b5c59f2b2607c464f33102a14343e6a74b403177099ab834666a936b2add2e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_220bd8d123da96b78b2ad6e84fa5d1d4d5bc61fdec6424d5059c53f09095cdd4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_220bd8d123da96b78b2ad6e84fa5d1d4d5bc61fdec6424d5059c53f09095cdd4->enter($__internal_220bd8d123da96b78b2ad6e84fa5d1d4d5bc61fdec6424d5059c53f09095cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/routing.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 19);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_220bd8d123da96b78b2ad6e84fa5d1d4d5bc61fdec6424d5059c53f09095cdd4->leave($__internal_220bd8d123da96b78b2ad6e84fa5d1d4d5bc61fdec6424d5059c53f09095cdd4_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ad4d45f5534fdefbf409d474492bc6cfd2b9ca18ff3c7779ed788c0123695ac = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad4d45f5534fdefbf409d474492bc6cfd2b9ca18ff3c7779ed788c0123695ac->enter($__internal_5ad4d45f5534fdefbf409d474492bc6cfd2b9ca18ff3c7779ed788c0123695ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "routing")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </a>

    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routes")));
        echo "</b>
        <span>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_5ad4d45f5534fdefbf409d474492bc6cfd2b9ca18ff3c7779ed788c0123695ac->leave($__internal_5ad4d45f5534fdefbf409d474492bc6cfd2b9ca18ff3c7779ed788c0123695ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d8ed3ecf2c209c7a2e4e2df7a9c62f76e9ccde6da491fb2f959a8036bd8e607 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8ed3ecf2c209c7a2e4e2df7a9c62f76e9ccde6da491fb2f959a8036bd8e607->enter($__internal_9d8ed3ecf2c209c7a2e4e2df7a9c62f76e9ccde6da491fb2f959a8036bd8e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <script id=\"routing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <tr>
                    <th>";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("name")));
        echo "</th>
                    <th>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("path")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( data.routing, function( item ){ %>
                    <tr>
                        <td>
                            <%- item.name %>
                        </td>
                        <td>
                            <%- item.path %>
                        </td>
                    </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
    </script>
";
        
        $__internal_9d8ed3ecf2c209c7a2e4e2df7a9c62f76e9ccde6da491fb2f959a8036bd8e607->leave($__internal_9d8ed3ecf2c209c7a2e4e2df7a9c62f76e9ccde6da491fb2f959a8036bd8e607_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/routing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  144 => 31,  136 => 26,  133 => 25,  127 => 24,  117 => 20,  113 => 19,  109 => 17,  103 => 14,  99 => 13,  96 => 12,  94 => 11,  91 => 10,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 24,  50 => 23,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/routing.html.twig", "/home/four/www/d8/local/modules/contrib/devel/webprofiler/templates/Collector/routing.html.twig");
    }
}
