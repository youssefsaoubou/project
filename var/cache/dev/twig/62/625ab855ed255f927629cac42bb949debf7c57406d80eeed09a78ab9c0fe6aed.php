<?php

/* @Admin/base.html.twig */
class __TwigTemplate_45812a1d2148342be1d42a6767726f01091669bf05854825fed369ed9e9f3c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3c68c0d97e3c67838c5d55ea0f630a68213a267e5301b344b5dce3e436a147d = $this->env->getExtension("native_profiler");
        $__internal_a3c68c0d97e3c67838c5d55ea0f630a68213a267e5301b344b5dce3e436a147d->enter($__internal_a3c68c0d97e3c67838c5d55ea0f630a68213a267e5301b344b5dce3e436a147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"nav-md\">
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_a3c68c0d97e3c67838c5d55ea0f630a68213a267e5301b344b5dce3e436a147d->leave($__internal_a3c68c0d97e3c67838c5d55ea0f630a68213a267e5301b344b5dce3e436a147d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b1e8f79e69bdccb8b4c15c0f1a6b432b8212e99faada248ae83d727b36bc3d = $this->env->getExtension("native_profiler");
        $__internal_57b1e8f79e69bdccb8b4c15c0f1a6b432b8212e99faada248ae83d727b36bc3d->enter($__internal_57b1e8f79e69bdccb8b4c15c0f1a6b432b8212e99faada248ae83d727b36bc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57b1e8f79e69bdccb8b4c15c0f1a6b432b8212e99faada248ae83d727b36bc3d->leave($__internal_57b1e8f79e69bdccb8b4c15c0f1a6b432b8212e99faada248ae83d727b36bc3d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5e46fffffd4c0f6015206b94ce372d97d9a02209deebcf06adb98fca97578f8 = $this->env->getExtension("native_profiler");
        $__internal_a5e46fffffd4c0f6015206b94ce372d97d9a02209deebcf06adb98fca97578f8->enter($__internal_a5e46fffffd4c0f6015206b94ce372d97d9a02209deebcf06adb98fca97578f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "               <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- jVectorMap -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_a5e46fffffd4c0f6015206b94ce372d97d9a02209deebcf06adb98fca97578f8->leave($__internal_a5e46fffffd4c0f6015206b94ce372d97d9a02209deebcf06adb98fca97578f8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa8c0827b82f7e557947a2db059213fee4f5b6ba251c6caea3aeae4b6e8faf2 = $this->env->getExtension("native_profiler");
        $__internal_4aa8c0827b82f7e557947a2db059213fee4f5b6ba251c6caea3aeae4b6e8faf2->enter($__internal_4aa8c0827b82f7e557947a2db059213fee4f5b6ba251c6caea3aeae4b6e8faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4aa8c0827b82f7e557947a2db059213fee4f5b6ba251c6caea3aeae4b6e8faf2->leave($__internal_4aa8c0827b82f7e557947a2db059213fee4f5b6ba251c6caea3aeae4b6e8faf2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7376971124455ac1cb478b9f6062f11d3ded37dff6a4317943476c1777b8748 = $this->env->getExtension("native_profiler");
        $__internal_b7376971124455ac1cb478b9f6062f11d3ded37dff6a4317943476c1777b8748->enter($__internal_b7376971124455ac1cb478b9f6062f11d3ded37dff6a4317943476c1777b8748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        ";
        
        $__internal_b7376971124455ac1cb478b9f6062f11d3ded37dff6a4317943476c1777b8748->leave($__internal_b7376971124455ac1cb478b9f6062f11d3ded37dff6a4317943476c1777b8748_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 25,  124 => 24,  113 => 23,  104 => 18,  98 => 15,  93 => 13,  88 => 11,  83 => 9,  77 => 7,  71 => 6,  59 => 5,  50 => 27,  47 => 24,  45 => 23,  38 => 20,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*                <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap-progressbar -->*/
/*     <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">*/
/*     <!-- jVectorMap -->*/
/*     <link href="{{asset('css/maps/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet"/>*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="nav-md">*/
/*         {% block body  %}{% endblock %}*/
/*         {% block javascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
