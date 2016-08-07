<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e780cb526f59118fa56c6d433c3f7b8cafa96211c6909f5feacf123a9d1611d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef77213d348278648fc3b7e9b839723c0930254bc1cabdc356a34ce783bfe44d = $this->env->getExtension("native_profiler");
        $__internal_ef77213d348278648fc3b7e9b839723c0930254bc1cabdc356a34ce783bfe44d->enter($__internal_ef77213d348278648fc3b7e9b839723c0930254bc1cabdc356a34ce783bfe44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ef77213d348278648fc3b7e9b839723c0930254bc1cabdc356a34ce783bfe44d->leave($__internal_ef77213d348278648fc3b7e9b839723c0930254bc1cabdc356a34ce783bfe44d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
