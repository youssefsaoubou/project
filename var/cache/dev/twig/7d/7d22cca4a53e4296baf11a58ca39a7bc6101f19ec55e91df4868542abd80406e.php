<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_30e5c151cfb74cae7a47925f04b7def462f385cee22425176b4b5221b72f0d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93d9c2c5a2740e05c6210e781f6015ea19c4cd71463b035c2cc9292817f7f6be = $this->env->getExtension("native_profiler");
        $__internal_93d9c2c5a2740e05c6210e781f6015ea19c4cd71463b035c2cc9292817f7f6be->enter($__internal_93d9c2c5a2740e05c6210e781f6015ea19c4cd71463b035c2cc9292817f7f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d9c2c5a2740e05c6210e781f6015ea19c4cd71463b035c2cc9292817f7f6be->leave($__internal_93d9c2c5a2740e05c6210e781f6015ea19c4cd71463b035c2cc9292817f7f6be_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fab81095a1367c0cfe88919628aa101f05ab1d711bc3ed2749d48a74f07b2bb0 = $this->env->getExtension("native_profiler");
        $__internal_fab81095a1367c0cfe88919628aa101f05ab1d711bc3ed2749d48a74f07b2bb0->enter($__internal_fab81095a1367c0cfe88919628aa101f05ab1d711bc3ed2749d48a74f07b2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_fab81095a1367c0cfe88919628aa101f05ab1d711bc3ed2749d48a74f07b2bb0->leave($__internal_fab81095a1367c0cfe88919628aa101f05ab1d711bc3ed2749d48a74f07b2bb0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* Hello World!*/
/* {% endblock %}*/
/* */
