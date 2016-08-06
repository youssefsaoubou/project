<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_30e5c151cfb74cae7a47925f04b7def462f385cee22425176b4b5221b72f0d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37fa931505cbb0b32f274341177f2cd8c8e1430b1dc07179bc7df3c769626104 = $this->env->getExtension("native_profiler");
        $__internal_37fa931505cbb0b32f274341177f2cd8c8e1430b1dc07179bc7df3c769626104->enter($__internal_37fa931505cbb0b32f274341177f2cd8c8e1430b1dc07179bc7df3c769626104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37fa931505cbb0b32f274341177f2cd8c8e1430b1dc07179bc7df3c769626104->leave($__internal_37fa931505cbb0b32f274341177f2cd8c8e1430b1dc07179bc7df3c769626104_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c57eac771259c934e716208a13a03ec2d07a0027082512801ef4f0f3ad262aa8 = $this->env->getExtension("native_profiler");
        $__internal_c57eac771259c934e716208a13a03ec2d07a0027082512801ef4f0f3ad262aa8->enter($__internal_c57eac771259c934e716208a13a03ec2d07a0027082512801ef4f0f3ad262aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_c57eac771259c934e716208a13a03ec2d07a0027082512801ef4f0f3ad262aa8->leave($__internal_c57eac771259c934e716208a13a03ec2d07a0027082512801ef4f0f3ad262aa8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* Hello World!*/
/* {% endblock %}*/
/* */
