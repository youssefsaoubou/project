<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d98d08da5deeb344ed876b10b93ac130e42aa48e580683ed3f466ad940acdb88 extends Twig_Template
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
        $__internal_11071d3d77de9f92157e29fbaa08af131753230fb8d4a1317e24c4ee810066bd = $this->env->getExtension("native_profiler");
        $__internal_11071d3d77de9f92157e29fbaa08af131753230fb8d4a1317e24c4ee810066bd->enter($__internal_11071d3d77de9f92157e29fbaa08af131753230fb8d4a1317e24c4ee810066bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_11071d3d77de9f92157e29fbaa08af131753230fb8d4a1317e24c4ee810066bd->leave($__internal_11071d3d77de9f92157e29fbaa08af131753230fb8d4a1317e24c4ee810066bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
