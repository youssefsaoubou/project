<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_22ceb4c659bb7f97f80278c8a8b54b89e7fab31a301e7ec3f69c20ccad4248a4 extends Twig_Template
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
        $__internal_f68c926d036af202d78e7a4a163f6c0a0309fd71c128997631665f01b1b5d5b7 = $this->env->getExtension("native_profiler");
        $__internal_f68c926d036af202d78e7a4a163f6c0a0309fd71c128997631665f01b1b5d5b7->enter($__internal_f68c926d036af202d78e7a4a163f6c0a0309fd71c128997631665f01b1b5d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f68c926d036af202d78e7a4a163f6c0a0309fd71c128997631665f01b1b5d5b7->leave($__internal_f68c926d036af202d78e7a4a163f6c0a0309fd71c128997631665f01b1b5d5b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
