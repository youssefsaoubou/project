<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_152ed04695776afc7993a27ba091728ccffe8249259f4ad0c049ad1b6b329192 extends Twig_Template
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
        $__internal_994561ec2773c2276c54b3a6e6057cf96b7784429679086b9c497e522c1b84de = $this->env->getExtension("native_profiler");
        $__internal_994561ec2773c2276c54b3a6e6057cf96b7784429679086b9c497e522c1b84de->enter($__internal_994561ec2773c2276c54b3a6e6057cf96b7784429679086b9c497e522c1b84de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_994561ec2773c2276c54b3a6e6057cf96b7784429679086b9c497e522c1b84de->leave($__internal_994561ec2773c2276c54b3a6e6057cf96b7784429679086b9c497e522c1b84de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bfdc655a02b25ea025ef5705b7558972a262e70ddc5d3190f57fadd0c402048 = $this->env->getExtension("native_profiler");
        $__internal_8bfdc655a02b25ea025ef5705b7558972a262e70ddc5d3190f57fadd0c402048->enter($__internal_8bfdc655a02b25ea025ef5705b7558972a262e70ddc5d3190f57fadd0c402048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8bfdc655a02b25ea025ef5705b7558972a262e70ddc5d3190f57fadd0c402048->leave($__internal_8bfdc655a02b25ea025ef5705b7558972a262e70ddc5d3190f57fadd0c402048_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
