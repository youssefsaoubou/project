<?php

/* @Admin/Default/index.html.twig */
class __TwigTemplate_db6fbf2ed3d8cb42fe47568343ca7bb7ab03e5ec10cceaba5a3921a4579d4a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Default/index.html.twig", 1);
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
        $__internal_387efbe7a53d688631ee66f446d014d706a887e0899b600c6ca98c6d7236356b = $this->env->getExtension("native_profiler");
        $__internal_387efbe7a53d688631ee66f446d014d706a887e0899b600c6ca98c6d7236356b->enter($__internal_387efbe7a53d688631ee66f446d014d706a887e0899b600c6ca98c6d7236356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387efbe7a53d688631ee66f446d014d706a887e0899b600c6ca98c6d7236356b->leave($__internal_387efbe7a53d688631ee66f446d014d706a887e0899b600c6ca98c6d7236356b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4b621e2b7122ef51fe0294e9ed130b006bfb4cefd5fa9ed3c1adf3c61c2f45 = $this->env->getExtension("native_profiler");
        $__internal_9e4b621e2b7122ef51fe0294e9ed130b006bfb4cefd5fa9ed3c1adf3c61c2f45->enter($__internal_9e4b621e2b7122ef51fe0294e9ed130b006bfb4cefd5fa9ed3c1adf3c61c2f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_9e4b621e2b7122ef51fe0294e9ed130b006bfb4cefd5fa9ed3c1adf3c61c2f45->leave($__internal_9e4b621e2b7122ef51fe0294e9ed130b006bfb4cefd5fa9ed3c1adf3c61c2f45_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Default/index.html.twig";
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
