<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3f803c4bdae11ef1e696cd00d74d0666acd4eed519cd28fb7ae5fd62c7f65d80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e9b43c183b2b205b81168dfc218f777adfa5a7353e086f6c2de45b406ea05976 = $this->env->getExtension("native_profiler");
        $__internal_e9b43c183b2b205b81168dfc218f777adfa5a7353e086f6c2de45b406ea05976->enter($__internal_e9b43c183b2b205b81168dfc218f777adfa5a7353e086f6c2de45b406ea05976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b43c183b2b205b81168dfc218f777adfa5a7353e086f6c2de45b406ea05976->leave($__internal_e9b43c183b2b205b81168dfc218f777adfa5a7353e086f6c2de45b406ea05976_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_811d20a1165a897b7292aa81d28eea9ba48cae6fb0d74c224666fc71d305370b = $this->env->getExtension("native_profiler");
        $__internal_811d20a1165a897b7292aa81d28eea9ba48cae6fb0d74c224666fc71d305370b->enter($__internal_811d20a1165a897b7292aa81d28eea9ba48cae6fb0d74c224666fc71d305370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_811d20a1165a897b7292aa81d28eea9ba48cae6fb0d74c224666fc71d305370b->leave($__internal_811d20a1165a897b7292aa81d28eea9ba48cae6fb0d74c224666fc71d305370b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad255d52cd857576367845ffbc75f269bc3f5258b57658b7302b0787bfc84959 = $this->env->getExtension("native_profiler");
        $__internal_ad255d52cd857576367845ffbc75f269bc3f5258b57658b7302b0787bfc84959->enter($__internal_ad255d52cd857576367845ffbc75f269bc3f5258b57658b7302b0787bfc84959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad255d52cd857576367845ffbc75f269bc3f5258b57658b7302b0787bfc84959->leave($__internal_ad255d52cd857576367845ffbc75f269bc3f5258b57658b7302b0787bfc84959_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c952e43007b2460e00e671a2c1af443cf209fb348aa65b627cf4c6d70944f51 = $this->env->getExtension("native_profiler");
        $__internal_0c952e43007b2460e00e671a2c1af443cf209fb348aa65b627cf4c6d70944f51->enter($__internal_0c952e43007b2460e00e671a2c1af443cf209fb348aa65b627cf4c6d70944f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0c952e43007b2460e00e671a2c1af443cf209fb348aa65b627cf4c6d70944f51->leave($__internal_0c952e43007b2460e00e671a2c1af443cf209fb348aa65b627cf4c6d70944f51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
