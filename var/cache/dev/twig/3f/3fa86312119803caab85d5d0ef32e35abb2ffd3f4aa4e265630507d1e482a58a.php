<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7900bba13682b7268e2a101e70bb652c8ecf6cce43ee15223529c7e2fe404704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cd29a1bb9b85adc0607571953a06f33305282c84a2c5567e2b3619997f8e78ce = $this->env->getExtension("native_profiler");
        $__internal_cd29a1bb9b85adc0607571953a06f33305282c84a2c5567e2b3619997f8e78ce->enter($__internal_cd29a1bb9b85adc0607571953a06f33305282c84a2c5567e2b3619997f8e78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd29a1bb9b85adc0607571953a06f33305282c84a2c5567e2b3619997f8e78ce->leave($__internal_cd29a1bb9b85adc0607571953a06f33305282c84a2c5567e2b3619997f8e78ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3b3a5165ccb9466393451b40cd88e83cf3ed19f6cb44a25c6cddce8030f6d8 = $this->env->getExtension("native_profiler");
        $__internal_6f3b3a5165ccb9466393451b40cd88e83cf3ed19f6cb44a25c6cddce8030f6d8->enter($__internal_6f3b3a5165ccb9466393451b40cd88e83cf3ed19f6cb44a25c6cddce8030f6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f3b3a5165ccb9466393451b40cd88e83cf3ed19f6cb44a25c6cddce8030f6d8->leave($__internal_6f3b3a5165ccb9466393451b40cd88e83cf3ed19f6cb44a25c6cddce8030f6d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65407c9e05097ca10423d16e99fbf52f0f87666b7df0409f99b700a90fad9d7e = $this->env->getExtension("native_profiler");
        $__internal_65407c9e05097ca10423d16e99fbf52f0f87666b7df0409f99b700a90fad9d7e->enter($__internal_65407c9e05097ca10423d16e99fbf52f0f87666b7df0409f99b700a90fad9d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_65407c9e05097ca10423d16e99fbf52f0f87666b7df0409f99b700a90fad9d7e->leave($__internal_65407c9e05097ca10423d16e99fbf52f0f87666b7df0409f99b700a90fad9d7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
