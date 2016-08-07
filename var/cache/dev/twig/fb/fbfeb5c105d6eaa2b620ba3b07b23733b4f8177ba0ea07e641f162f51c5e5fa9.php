<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16f12e533497b9870410ee3baaff200f601bdf84e0807c8f90142260e3534e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_456dac3fde76c3c69fa5f8e0ab8edc03d7219f00cf5f35b08c8e59438fbdab9d = $this->env->getExtension("native_profiler");
        $__internal_456dac3fde76c3c69fa5f8e0ab8edc03d7219f00cf5f35b08c8e59438fbdab9d->enter($__internal_456dac3fde76c3c69fa5f8e0ab8edc03d7219f00cf5f35b08c8e59438fbdab9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456dac3fde76c3c69fa5f8e0ab8edc03d7219f00cf5f35b08c8e59438fbdab9d->leave($__internal_456dac3fde76c3c69fa5f8e0ab8edc03d7219f00cf5f35b08c8e59438fbdab9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_545373341b4da37bc6da687313db643861e44e2cc06a2d6c2cd565d1c1b0d80f = $this->env->getExtension("native_profiler");
        $__internal_545373341b4da37bc6da687313db643861e44e2cc06a2d6c2cd565d1c1b0d80f->enter($__internal_545373341b4da37bc6da687313db643861e44e2cc06a2d6c2cd565d1c1b0d80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_545373341b4da37bc6da687313db643861e44e2cc06a2d6c2cd565d1c1b0d80f->leave($__internal_545373341b4da37bc6da687313db643861e44e2cc06a2d6c2cd565d1c1b0d80f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1239e6fee20ed8f19eb5ea0c4b4c1c1cd69c608f854f46ed64d912cb438f435b = $this->env->getExtension("native_profiler");
        $__internal_1239e6fee20ed8f19eb5ea0c4b4c1c1cd69c608f854f46ed64d912cb438f435b->enter($__internal_1239e6fee20ed8f19eb5ea0c4b4c1c1cd69c608f854f46ed64d912cb438f435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1239e6fee20ed8f19eb5ea0c4b4c1c1cd69c608f854f46ed64d912cb438f435b->leave($__internal_1239e6fee20ed8f19eb5ea0c4b4c1c1cd69c608f854f46ed64d912cb438f435b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_798d1af25fb3f0fd82e88a44590f13725dbfcca305ad6f50e6cbcecc73f76dd4 = $this->env->getExtension("native_profiler");
        $__internal_798d1af25fb3f0fd82e88a44590f13725dbfcca305ad6f50e6cbcecc73f76dd4->enter($__internal_798d1af25fb3f0fd82e88a44590f13725dbfcca305ad6f50e6cbcecc73f76dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_798d1af25fb3f0fd82e88a44590f13725dbfcca305ad6f50e6cbcecc73f76dd4->leave($__internal_798d1af25fb3f0fd82e88a44590f13725dbfcca305ad6f50e6cbcecc73f76dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
