<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a4d461c426b64ce60f1392dc2b85b122f186917d9806d66e53aad0473a29a8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fce9c3aef0ce2367e64f1a5c7c22a49f1feff1146ef4a3b0897994f90f06ed48 = $this->env->getExtension("native_profiler");
        $__internal_fce9c3aef0ce2367e64f1a5c7c22a49f1feff1146ef4a3b0897994f90f06ed48->enter($__internal_fce9c3aef0ce2367e64f1a5c7c22a49f1feff1146ef4a3b0897994f90f06ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fce9c3aef0ce2367e64f1a5c7c22a49f1feff1146ef4a3b0897994f90f06ed48->leave($__internal_fce9c3aef0ce2367e64f1a5c7c22a49f1feff1146ef4a3b0897994f90f06ed48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
