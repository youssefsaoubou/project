<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_0819d324ff95b1e8f0ea66fbb6fc716fe7caf5e1a95e3cb3d673d4625ece7f56 extends Twig_Template
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
        $__internal_15f9e5195e354996892c98cdcddc87a91dc3441bcc87a224391395b63f7087c7 = $this->env->getExtension("native_profiler");
        $__internal_15f9e5195e354996892c98cdcddc87a91dc3441bcc87a224391395b63f7087c7->enter($__internal_15f9e5195e354996892c98cdcddc87a91dc3441bcc87a224391395b63f7087c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_15f9e5195e354996892c98cdcddc87a91dc3441bcc87a224391395b63f7087c7->leave($__internal_15f9e5195e354996892c98cdcddc87a91dc3441bcc87a224391395b63f7087c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2dcc2f00e327a225502e5a69e5822aff5777bbd74af582aa23a1ecad51924f4 = $this->env->getExtension("native_profiler");
        $__internal_e2dcc2f00e327a225502e5a69e5822aff5777bbd74af582aa23a1ecad51924f4->enter($__internal_e2dcc2f00e327a225502e5a69e5822aff5777bbd74af582aa23a1ecad51924f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e2dcc2f00e327a225502e5a69e5822aff5777bbd74af582aa23a1ecad51924f4->leave($__internal_e2dcc2f00e327a225502e5a69e5822aff5777bbd74af582aa23a1ecad51924f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a53a6577fa7960e1a42081831405f90fb415586d896208a151c661389d860dff = $this->env->getExtension("native_profiler");
        $__internal_a53a6577fa7960e1a42081831405f90fb415586d896208a151c661389d860dff->enter($__internal_a53a6577fa7960e1a42081831405f90fb415586d896208a151c661389d860dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a53a6577fa7960e1a42081831405f90fb415586d896208a151c661389d860dff->leave($__internal_a53a6577fa7960e1a42081831405f90fb415586d896208a151c661389d860dff_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c17c3f7365d132154cc7beb07d2e1e73530a3acd22bbe2b66440835c40ed920 = $this->env->getExtension("native_profiler");
        $__internal_7c17c3f7365d132154cc7beb07d2e1e73530a3acd22bbe2b66440835c40ed920->enter($__internal_7c17c3f7365d132154cc7beb07d2e1e73530a3acd22bbe2b66440835c40ed920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c17c3f7365d132154cc7beb07d2e1e73530a3acd22bbe2b66440835c40ed920->leave($__internal_7c17c3f7365d132154cc7beb07d2e1e73530a3acd22bbe2b66440835c40ed920_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_406e19cb41c9296a9a6a446161aba217e8c670e3eb16febcdb7097be59da6acc = $this->env->getExtension("native_profiler");
        $__internal_406e19cb41c9296a9a6a446161aba217e8c670e3eb16febcdb7097be59da6acc->enter($__internal_406e19cb41c9296a9a6a446161aba217e8c670e3eb16febcdb7097be59da6acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        ";
        
        $__internal_406e19cb41c9296a9a6a446161aba217e8c670e3eb16febcdb7097be59da6acc->leave($__internal_406e19cb41c9296a9a6a446161aba217e8c670e3eb16febcdb7097be59da6acc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
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
