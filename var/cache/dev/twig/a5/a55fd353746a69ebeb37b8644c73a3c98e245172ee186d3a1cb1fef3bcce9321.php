<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5d96784d45cac578ec38ec3209a702e9b9f15bdf01eb15e979ac84c6514332ef extends Twig_Template
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
        $__internal_33a2478ceaa58ba379c87b091478f0222e3e9a756e6070d3393c0f219af810b9 = $this->env->getExtension("native_profiler");
        $__internal_33a2478ceaa58ba379c87b091478f0222e3e9a756e6070d3393c0f219af810b9->enter($__internal_33a2478ceaa58ba379c87b091478f0222e3e9a756e6070d3393c0f219af810b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_33a2478ceaa58ba379c87b091478f0222e3e9a756e6070d3393c0f219af810b9->leave($__internal_33a2478ceaa58ba379c87b091478f0222e3e9a756e6070d3393c0f219af810b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
