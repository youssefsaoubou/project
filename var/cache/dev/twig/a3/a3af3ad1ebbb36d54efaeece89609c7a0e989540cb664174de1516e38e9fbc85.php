<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d159f4cc35e64c719327c3e6c1521f8b6200ba2cb8f98700e8025e98c960f4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_411f0a540961e55dc9791a1dc8a7c805338d2ce11d658d44559e9fba4d7f14b0 = $this->env->getExtension("native_profiler");
        $__internal_411f0a540961e55dc9791a1dc8a7c805338d2ce11d658d44559e9fba4d7f14b0->enter($__internal_411f0a540961e55dc9791a1dc8a7c805338d2ce11d658d44559e9fba4d7f14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411f0a540961e55dc9791a1dc8a7c805338d2ce11d658d44559e9fba4d7f14b0->leave($__internal_411f0a540961e55dc9791a1dc8a7c805338d2ce11d658d44559e9fba4d7f14b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8e0643f608b38ca686ef0ac192aae96dbe9198ef4bbb5f8a3fc2fb629c50704 = $this->env->getExtension("native_profiler");
        $__internal_e8e0643f608b38ca686ef0ac192aae96dbe9198ef4bbb5f8a3fc2fb629c50704->enter($__internal_e8e0643f608b38ca686ef0ac192aae96dbe9198ef4bbb5f8a3fc2fb629c50704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e8e0643f608b38ca686ef0ac192aae96dbe9198ef4bbb5f8a3fc2fb629c50704->leave($__internal_e8e0643f608b38ca686ef0ac192aae96dbe9198ef4bbb5f8a3fc2fb629c50704_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8877ab276b64cd9f5dd0fa87da1fad75b061fa1e890f0cd2f2807b725e53f9ea = $this->env->getExtension("native_profiler");
        $__internal_8877ab276b64cd9f5dd0fa87da1fad75b061fa1e890f0cd2f2807b725e53f9ea->enter($__internal_8877ab276b64cd9f5dd0fa87da1fad75b061fa1e890f0cd2f2807b725e53f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8877ab276b64cd9f5dd0fa87da1fad75b061fa1e890f0cd2f2807b725e53f9ea->leave($__internal_8877ab276b64cd9f5dd0fa87da1fad75b061fa1e890f0cd2f2807b725e53f9ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec762f184a82abda0e9386630f64d03b3a1593fe87caaf3fdb415bf7517b8601 = $this->env->getExtension("native_profiler");
        $__internal_ec762f184a82abda0e9386630f64d03b3a1593fe87caaf3fdb415bf7517b8601->enter($__internal_ec762f184a82abda0e9386630f64d03b3a1593fe87caaf3fdb415bf7517b8601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ec762f184a82abda0e9386630f64d03b3a1593fe87caaf3fdb415bf7517b8601->leave($__internal_ec762f184a82abda0e9386630f64d03b3a1593fe87caaf3fdb415bf7517b8601_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
