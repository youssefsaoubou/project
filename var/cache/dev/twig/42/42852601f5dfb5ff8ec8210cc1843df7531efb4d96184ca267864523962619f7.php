<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9b4667c93bfdc0cf66dd0919b9754c90eab20c29adfcce7c8594c59e075e51a extends Twig_Template
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
        $__internal_a7e9a9169b90f8449bba1a10dd5a88623e6b74f677236e317324923a5257d003 = $this->env->getExtension("native_profiler");
        $__internal_a7e9a9169b90f8449bba1a10dd5a88623e6b74f677236e317324923a5257d003->enter($__internal_a7e9a9169b90f8449bba1a10dd5a88623e6b74f677236e317324923a5257d003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e9a9169b90f8449bba1a10dd5a88623e6b74f677236e317324923a5257d003->leave($__internal_a7e9a9169b90f8449bba1a10dd5a88623e6b74f677236e317324923a5257d003_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc177ba353de745dd49b57bc79eac4d7cfff04d66a95a083d61c8eab4a228fda = $this->env->getExtension("native_profiler");
        $__internal_fc177ba353de745dd49b57bc79eac4d7cfff04d66a95a083d61c8eab4a228fda->enter($__internal_fc177ba353de745dd49b57bc79eac4d7cfff04d66a95a083d61c8eab4a228fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc177ba353de745dd49b57bc79eac4d7cfff04d66a95a083d61c8eab4a228fda->leave($__internal_fc177ba353de745dd49b57bc79eac4d7cfff04d66a95a083d61c8eab4a228fda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b07bdd934637c8cc631afeb5c6427cd94fd73764772e69e9386ab72ac8f84d9 = $this->env->getExtension("native_profiler");
        $__internal_3b07bdd934637c8cc631afeb5c6427cd94fd73764772e69e9386ab72ac8f84d9->enter($__internal_3b07bdd934637c8cc631afeb5c6427cd94fd73764772e69e9386ab72ac8f84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b07bdd934637c8cc631afeb5c6427cd94fd73764772e69e9386ab72ac8f84d9->leave($__internal_3b07bdd934637c8cc631afeb5c6427cd94fd73764772e69e9386ab72ac8f84d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a429946e8d7f64a40a5580f4f53a3575fa64370841f0f41eaeafcd47dfe36768 = $this->env->getExtension("native_profiler");
        $__internal_a429946e8d7f64a40a5580f4f53a3575fa64370841f0f41eaeafcd47dfe36768->enter($__internal_a429946e8d7f64a40a5580f4f53a3575fa64370841f0f41eaeafcd47dfe36768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a429946e8d7f64a40a5580f4f53a3575fa64370841f0f41eaeafcd47dfe36768->leave($__internal_a429946e8d7f64a40a5580f4f53a3575fa64370841f0f41eaeafcd47dfe36768_prof);

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
