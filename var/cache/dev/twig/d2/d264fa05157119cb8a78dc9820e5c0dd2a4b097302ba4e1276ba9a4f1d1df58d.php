<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_37d83209af984fd8f62a70fdd47a6dc1e38f821a6d1aca965004415a78ba78eb extends Twig_Template
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
        $__internal_b79fe650c82a38c7179faad9dd041dbf5061a5c747828113501b5ae3b911663e = $this->env->getExtension("native_profiler");
        $__internal_b79fe650c82a38c7179faad9dd041dbf5061a5c747828113501b5ae3b911663e->enter($__internal_b79fe650c82a38c7179faad9dd041dbf5061a5c747828113501b5ae3b911663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b79fe650c82a38c7179faad9dd041dbf5061a5c747828113501b5ae3b911663e->leave($__internal_b79fe650c82a38c7179faad9dd041dbf5061a5c747828113501b5ae3b911663e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
