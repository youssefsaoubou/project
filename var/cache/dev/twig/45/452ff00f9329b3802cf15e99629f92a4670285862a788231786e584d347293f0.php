<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_cad4d46687f9642e90d4f0ae7b8c36ed24284147d38f1742c3ee259072604aa3 extends Twig_Template
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
        $__internal_b908fb2eda17c8ad9f4a76d63aef6fdfbc2b4638b13d4cd2cec1b473f02907b6 = $this->env->getExtension("native_profiler");
        $__internal_b908fb2eda17c8ad9f4a76d63aef6fdfbc2b4638b13d4cd2cec1b473f02907b6->enter($__internal_b908fb2eda17c8ad9f4a76d63aef6fdfbc2b4638b13d4cd2cec1b473f02907b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b908fb2eda17c8ad9f4a76d63aef6fdfbc2b4638b13d4cd2cec1b473f02907b6->leave($__internal_b908fb2eda17c8ad9f4a76d63aef6fdfbc2b4638b13d4cd2cec1b473f02907b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
