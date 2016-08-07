<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_68849042234958ad77227b253f5ebf4bdaff99c0007651b9a4da558616ce99b3 extends Twig_Template
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
        $__internal_dfe90d4893386321470ab78cc61f36d1a455721f92e09bbce0f3b9589f165b10 = $this->env->getExtension("native_profiler");
        $__internal_dfe90d4893386321470ab78cc61f36d1a455721f92e09bbce0f3b9589f165b10->enter($__internal_dfe90d4893386321470ab78cc61f36d1a455721f92e09bbce0f3b9589f165b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_dfe90d4893386321470ab78cc61f36d1a455721f92e09bbce0f3b9589f165b10->leave($__internal_dfe90d4893386321470ab78cc61f36d1a455721f92e09bbce0f3b9589f165b10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
