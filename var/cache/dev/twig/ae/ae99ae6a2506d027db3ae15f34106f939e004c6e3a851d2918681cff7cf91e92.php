<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5dab2f71dcf08dfebb8b69f9e1ae6dccaf807833d66a7a1308b2f75648970012 extends Twig_Template
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
        $__internal_cac0f6bc38a9e0503b6692d60e3ac25ebaa71960325beb32768096173c02a73d = $this->env->getExtension("native_profiler");
        $__internal_cac0f6bc38a9e0503b6692d60e3ac25ebaa71960325beb32768096173c02a73d->enter($__internal_cac0f6bc38a9e0503b6692d60e3ac25ebaa71960325beb32768096173c02a73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_cac0f6bc38a9e0503b6692d60e3ac25ebaa71960325beb32768096173c02a73d->leave($__internal_cac0f6bc38a9e0503b6692d60e3ac25ebaa71960325beb32768096173c02a73d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
