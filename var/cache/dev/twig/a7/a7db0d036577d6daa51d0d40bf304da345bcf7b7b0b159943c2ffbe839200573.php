<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dcb61ba72c29c9c4f378fce8c50a32c7cbc7c6301dab8322ba4f0c87062d3267 extends Twig_Template
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
        $__internal_25a4828154fc75c8d5ab879ca0aecef90eda7912cc339ac09362656e89edd595 = $this->env->getExtension("native_profiler");
        $__internal_25a4828154fc75c8d5ab879ca0aecef90eda7912cc339ac09362656e89edd595->enter($__internal_25a4828154fc75c8d5ab879ca0aecef90eda7912cc339ac09362656e89edd595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_25a4828154fc75c8d5ab879ca0aecef90eda7912cc339ac09362656e89edd595->leave($__internal_25a4828154fc75c8d5ab879ca0aecef90eda7912cc339ac09362656e89edd595_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
