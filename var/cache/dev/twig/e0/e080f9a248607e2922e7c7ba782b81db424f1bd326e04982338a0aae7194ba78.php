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
        $__internal_1818d9498df953b8f5697c26ad0726c6ab0672c89d539114c3d7384884671e4a = $this->env->getExtension("native_profiler");
        $__internal_1818d9498df953b8f5697c26ad0726c6ab0672c89d539114c3d7384884671e4a->enter($__internal_1818d9498df953b8f5697c26ad0726c6ab0672c89d539114c3d7384884671e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        
        $__internal_1818d9498df953b8f5697c26ad0726c6ab0672c89d539114c3d7384884671e4a->leave($__internal_1818d9498df953b8f5697c26ad0726c6ab0672c89d539114c3d7384884671e4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32fa1db1e76be9646e09ff6538de4bd91a19abc1aacb615d924e5a73aed067e1 = $this->env->getExtension("native_profiler");
        $__internal_32fa1db1e76be9646e09ff6538de4bd91a19abc1aacb615d924e5a73aed067e1->enter($__internal_32fa1db1e76be9646e09ff6538de4bd91a19abc1aacb615d924e5a73aed067e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32fa1db1e76be9646e09ff6538de4bd91a19abc1aacb615d924e5a73aed067e1->leave($__internal_32fa1db1e76be9646e09ff6538de4bd91a19abc1aacb615d924e5a73aed067e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d62e624a9300aa8c238e470ab1f953d826e6c4542f0c7b88bbbeaf4a8d3a2a68 = $this->env->getExtension("native_profiler");
        $__internal_d62e624a9300aa8c238e470ab1f953d826e6c4542f0c7b88bbbeaf4a8d3a2a68->enter($__internal_d62e624a9300aa8c238e470ab1f953d826e6c4542f0c7b88bbbeaf4a8d3a2a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d62e624a9300aa8c238e470ab1f953d826e6c4542f0c7b88bbbeaf4a8d3a2a68->leave($__internal_d62e624a9300aa8c238e470ab1f953d826e6c4542f0c7b88bbbeaf4a8d3a2a68_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e0c2552b59d3dc6dc48249ea4e4fa4ff4aad1637857d21a2f60d5d00de4d039 = $this->env->getExtension("native_profiler");
        $__internal_1e0c2552b59d3dc6dc48249ea4e4fa4ff4aad1637857d21a2f60d5d00de4d039->enter($__internal_1e0c2552b59d3dc6dc48249ea4e4fa4ff4aad1637857d21a2f60d5d00de4d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e0c2552b59d3dc6dc48249ea4e4fa4ff4aad1637857d21a2f60d5d00de4d039->leave($__internal_1e0c2552b59d3dc6dc48249ea4e4fa4ff4aad1637857d21a2f60d5d00de4d039_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9a4d79e149569dbe54801889bec39f74ae080f660673cc2d72e9ec3047db223 = $this->env->getExtension("native_profiler");
        $__internal_b9a4d79e149569dbe54801889bec39f74ae080f660673cc2d72e9ec3047db223->enter($__internal_b9a4d79e149569dbe54801889bec39f74ae080f660673cc2d72e9ec3047db223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        ";
        
        $__internal_b9a4d79e149569dbe54801889bec39f74ae080f660673cc2d72e9ec3047db223->leave($__internal_b9a4d79e149569dbe54801889bec39f74ae080f660673cc2d72e9ec3047db223_prof);

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
