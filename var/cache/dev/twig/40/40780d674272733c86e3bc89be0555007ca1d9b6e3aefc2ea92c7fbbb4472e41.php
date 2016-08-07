<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a8f9396cdd6dbb17891db5ea86a65aa26bec0153e184f7814e2fd3b1c7846a7d extends Twig_Template
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
        $__internal_581f189ef6f6e621f6f000b8d299098b4138c74187a0353101525373bd28570e = $this->env->getExtension("native_profiler");
        $__internal_581f189ef6f6e621f6f000b8d299098b4138c74187a0353101525373bd28570e->enter($__internal_581f189ef6f6e621f6f000b8d299098b4138c74187a0353101525373bd28570e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_581f189ef6f6e621f6f000b8d299098b4138c74187a0353101525373bd28570e->leave($__internal_581f189ef6f6e621f6f000b8d299098b4138c74187a0353101525373bd28570e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
