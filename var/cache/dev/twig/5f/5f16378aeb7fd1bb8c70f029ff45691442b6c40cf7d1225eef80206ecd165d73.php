<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b03e0318265c58e4dcbb9a2665617e2ab595fe5697dd04acc98616c2b9508af0 extends Twig_Template
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
        $__internal_be35a2368ccb153406cc71edb29d125f4424e377b46ee01167eb0a3af19435db = $this->env->getExtension("native_profiler");
        $__internal_be35a2368ccb153406cc71edb29d125f4424e377b46ee01167eb0a3af19435db->enter($__internal_be35a2368ccb153406cc71edb29d125f4424e377b46ee01167eb0a3af19435db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_be35a2368ccb153406cc71edb29d125f4424e377b46ee01167eb0a3af19435db->leave($__internal_be35a2368ccb153406cc71edb29d125f4424e377b46ee01167eb0a3af19435db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
