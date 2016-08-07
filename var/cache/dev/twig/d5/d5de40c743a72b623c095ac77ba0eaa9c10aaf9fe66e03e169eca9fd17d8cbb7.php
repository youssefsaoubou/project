<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_83c4d56b55b3aac0d7b400aff61eab360592a79cac887bb40f28dc8645f4d6ce extends Twig_Template
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
        $__internal_05736c77758fd6419d865253a23a631e2ce77c21d5690acf16f32f67ac7d17eb = $this->env->getExtension("native_profiler");
        $__internal_05736c77758fd6419d865253a23a631e2ce77c21d5690acf16f32f67ac7d17eb->enter($__internal_05736c77758fd6419d865253a23a631e2ce77c21d5690acf16f32f67ac7d17eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_05736c77758fd6419d865253a23a631e2ce77c21d5690acf16f32f67ac7d17eb->leave($__internal_05736c77758fd6419d865253a23a631e2ce77c21d5690acf16f32f67ac7d17eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
