<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_89375643dcb81e146e8697cd6bfb38d1d3654988b712d6857f9a92c9279daf79 extends Twig_Template
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
        $__internal_665105153eea5737c26a47a747173f18c8c3b5d0345394200509078af8b7ea0b = $this->env->getExtension("native_profiler");
        $__internal_665105153eea5737c26a47a747173f18c8c3b5d0345394200509078af8b7ea0b->enter($__internal_665105153eea5737c26a47a747173f18c8c3b5d0345394200509078af8b7ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_665105153eea5737c26a47a747173f18c8c3b5d0345394200509078af8b7ea0b->leave($__internal_665105153eea5737c26a47a747173f18c8c3b5d0345394200509078af8b7ea0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
