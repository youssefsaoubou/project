<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d806907ba73da32bdb706a394222605f44da6c8fe102a5aed703e057c50f6c04 extends Twig_Template
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
        $__internal_be1e2f299e548850e7fcaeb1e114b34b64b6d83d7a7f744bd9194655ec64c47b = $this->env->getExtension("native_profiler");
        $__internal_be1e2f299e548850e7fcaeb1e114b34b64b6d83d7a7f744bd9194655ec64c47b->enter($__internal_be1e2f299e548850e7fcaeb1e114b34b64b6d83d7a7f744bd9194655ec64c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be1e2f299e548850e7fcaeb1e114b34b64b6d83d7a7f744bd9194655ec64c47b->leave($__internal_be1e2f299e548850e7fcaeb1e114b34b64b6d83d7a7f744bd9194655ec64c47b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
