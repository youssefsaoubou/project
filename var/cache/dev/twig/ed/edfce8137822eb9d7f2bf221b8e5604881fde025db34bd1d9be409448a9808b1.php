<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_49bff6eff1ae0cb546bcdba4349bb703173b1d889b5130937f30f05e3ce8e1c5 extends Twig_Template
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
        $__internal_f4112472357565bb59b83c2d839e3bcd010c8465ebdc894ad2c02851dfaa4e55 = $this->env->getExtension("native_profiler");
        $__internal_f4112472357565bb59b83c2d839e3bcd010c8465ebdc894ad2c02851dfaa4e55->enter($__internal_f4112472357565bb59b83c2d839e3bcd010c8465ebdc894ad2c02851dfaa4e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f4112472357565bb59b83c2d839e3bcd010c8465ebdc894ad2c02851dfaa4e55->leave($__internal_f4112472357565bb59b83c2d839e3bcd010c8465ebdc894ad2c02851dfaa4e55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
