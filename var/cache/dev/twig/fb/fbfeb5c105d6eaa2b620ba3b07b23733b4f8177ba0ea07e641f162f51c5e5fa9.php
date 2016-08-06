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
        $__internal_524620f7d96f7c064fedd9ffb43e640962815d44b1168a9c5ad830262f4969d1 = $this->env->getExtension("native_profiler");
        $__internal_524620f7d96f7c064fedd9ffb43e640962815d44b1168a9c5ad830262f4969d1->enter($__internal_524620f7d96f7c064fedd9ffb43e640962815d44b1168a9c5ad830262f4969d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524620f7d96f7c064fedd9ffb43e640962815d44b1168a9c5ad830262f4969d1->leave($__internal_524620f7d96f7c064fedd9ffb43e640962815d44b1168a9c5ad830262f4969d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f141f08e818121f51a4bf1cfcd1d241b0b67f00fa158a3950ff5c198a899a402 = $this->env->getExtension("native_profiler");
        $__internal_f141f08e818121f51a4bf1cfcd1d241b0b67f00fa158a3950ff5c198a899a402->enter($__internal_f141f08e818121f51a4bf1cfcd1d241b0b67f00fa158a3950ff5c198a899a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f141f08e818121f51a4bf1cfcd1d241b0b67f00fa158a3950ff5c198a899a402->leave($__internal_f141f08e818121f51a4bf1cfcd1d241b0b67f00fa158a3950ff5c198a899a402_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f27446884743f7d6231d72a78553f50421fedee6647176786fec2fcc204b4e42 = $this->env->getExtension("native_profiler");
        $__internal_f27446884743f7d6231d72a78553f50421fedee6647176786fec2fcc204b4e42->enter($__internal_f27446884743f7d6231d72a78553f50421fedee6647176786fec2fcc204b4e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f27446884743f7d6231d72a78553f50421fedee6647176786fec2fcc204b4e42->leave($__internal_f27446884743f7d6231d72a78553f50421fedee6647176786fec2fcc204b4e42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_caed4ec475fcb68ba5d9d3b408b4b6db6afeb857c71022b32eb42b7854b8a5ed = $this->env->getExtension("native_profiler");
        $__internal_caed4ec475fcb68ba5d9d3b408b4b6db6afeb857c71022b32eb42b7854b8a5ed->enter($__internal_caed4ec475fcb68ba5d9d3b408b4b6db6afeb857c71022b32eb42b7854b8a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_caed4ec475fcb68ba5d9d3b408b4b6db6afeb857c71022b32eb42b7854b8a5ed->leave($__internal_caed4ec475fcb68ba5d9d3b408b4b6db6afeb857c71022b32eb42b7854b8a5ed_prof);

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
