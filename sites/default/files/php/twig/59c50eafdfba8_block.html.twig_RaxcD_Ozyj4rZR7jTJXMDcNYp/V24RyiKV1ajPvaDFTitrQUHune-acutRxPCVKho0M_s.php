<?php

/* @block/block.html.twig */
class __TwigTemplate_154e81599978adb20b11b1773903a6e6e73aa850eef10b6c00a7cc922296b5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f332ed3db29532ae31486912d472eb35b03121bf20470d389888f6e8fdc8e20 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f332ed3db29532ae31486912d472eb35b03121bf20470d389888f6e8fdc8e20->enter($__internal_4f332ed3db29532ae31486912d472eb35b03121bf20470d389888f6e8fdc8e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@block/block.html.twig"));

        $tags = array("if" => 32, "block" => 36);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array()
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

        // line 30
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 32
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 33
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 35
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</div>
";
        
        $__internal_4f332ed3db29532ae31486912d472eb35b03121bf20470d389888f6e8fdc8e20->leave($__internal_4f332ed3db29532ae31486912d472eb35b03121bf20470d389888f6e8fdc8e20_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_c24ebe783ff3e4e0a43aa3b427327d826c7ae21b26468daa003259a3c6426366 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24ebe783ff3e4e0a43aa3b427327d826c7ae21b26468daa003259a3c6426366->enter($__internal_c24ebe783ff3e4e0a43aa3b427327d826c7ae21b26468daa003259a3c6426366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_c24ebe783ff3e4e0a43aa3b427327d826c7ae21b26468daa003259a3c6426366->leave($__internal_c24ebe783ff3e4e0a43aa3b427327d826c7ae21b26468daa003259a3c6426366_prof);

    }

    public function getTemplateName()
    {
        return "@block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  81 => 36,  73 => 39,  71 => 36,  66 => 35,  58 => 33,  56 => 32,  52 => 31,  47 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@block/block.html.twig", "/home/four/www/d8/local/core/modules/block/templates/block.html.twig");
    }
}
