<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2d859805368237f5c6d35955dc7a1ea417139a75b02cd06b1bd992ced810a40f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbba84ad4b9705340b12796056ccfd9208e361776dcee66750a8b6b3625928cb = $this->env->getExtension("native_profiler");
        $__internal_dbba84ad4b9705340b12796056ccfd9208e361776dcee66750a8b6b3625928cb->enter($__internal_dbba84ad4b9705340b12796056ccfd9208e361776dcee66750a8b6b3625928cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dbba84ad4b9705340b12796056ccfd9208e361776dcee66750a8b6b3625928cb->leave($__internal_dbba84ad4b9705340b12796056ccfd9208e361776dcee66750a8b6b3625928cb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f0dba066bb1a329bf62fffe5fd82fdbeb8c77e0bb05ab5a8e82002516bd742e = $this->env->getExtension("native_profiler");
        $__internal_0f0dba066bb1a329bf62fffe5fd82fdbeb8c77e0bb05ab5a8e82002516bd742e->enter($__internal_0f0dba066bb1a329bf62fffe5fd82fdbeb8c77e0bb05ab5a8e82002516bd742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0f0dba066bb1a329bf62fffe5fd82fdbeb8c77e0bb05ab5a8e82002516bd742e->leave($__internal_0f0dba066bb1a329bf62fffe5fd82fdbeb8c77e0bb05ab5a8e82002516bd742e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
