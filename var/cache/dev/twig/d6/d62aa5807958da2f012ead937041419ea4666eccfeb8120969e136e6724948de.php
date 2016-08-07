<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b671b01204341d728935428b5fe65f8ba17cf05f0dc1bea2d4b67ac428d1e5be extends Twig_Template
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
        $__internal_45e3150371b532ae7aba6d40e3f23e72c260eb5c156c61802cac66eeaa2a9721 = $this->env->getExtension("native_profiler");
        $__internal_45e3150371b532ae7aba6d40e3f23e72c260eb5c156c61802cac66eeaa2a9721->enter($__internal_45e3150371b532ae7aba6d40e3f23e72c260eb5c156c61802cac66eeaa2a9721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_45e3150371b532ae7aba6d40e3f23e72c260eb5c156c61802cac66eeaa2a9721->leave($__internal_45e3150371b532ae7aba6d40e3f23e72c260eb5c156c61802cac66eeaa2a9721_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
