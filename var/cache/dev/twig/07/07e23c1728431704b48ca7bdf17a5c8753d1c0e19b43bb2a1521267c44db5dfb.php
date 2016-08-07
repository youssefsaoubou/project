<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e5091f959fc216f81f8f9e720816269e6c48ab76bab533a8272bef899c30e6a8 extends Twig_Template
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
        $__internal_207dd886cfdbb80d428a2c9d80db040ca5f542de84ac449a74514afe4f15311a = $this->env->getExtension("native_profiler");
        $__internal_207dd886cfdbb80d428a2c9d80db040ca5f542de84ac449a74514afe4f15311a->enter($__internal_207dd886cfdbb80d428a2c9d80db040ca5f542de84ac449a74514afe4f15311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_207dd886cfdbb80d428a2c9d80db040ca5f542de84ac449a74514afe4f15311a->leave($__internal_207dd886cfdbb80d428a2c9d80db040ca5f542de84ac449a74514afe4f15311a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
