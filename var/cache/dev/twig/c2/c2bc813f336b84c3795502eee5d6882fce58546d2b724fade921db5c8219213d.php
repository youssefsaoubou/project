<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_043ffef64a09d2f0d430e92136950824ddf80e6d1839d89e17f321fffee431a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_391a859bc4e8e3d793e97484c690975c64981c589cda6054fb0d4b311b85fb9f = $this->env->getExtension("native_profiler");
        $__internal_391a859bc4e8e3d793e97484c690975c64981c589cda6054fb0d4b311b85fb9f->enter($__internal_391a859bc4e8e3d793e97484c690975c64981c589cda6054fb0d4b311b85fb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391a859bc4e8e3d793e97484c690975c64981c589cda6054fb0d4b311b85fb9f->leave($__internal_391a859bc4e8e3d793e97484c690975c64981c589cda6054fb0d4b311b85fb9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ce884c96c5372d1cbc10b8ee8136e6caec0c9c42d37bad6cc11d8f7d273c1ec = $this->env->getExtension("native_profiler");
        $__internal_5ce884c96c5372d1cbc10b8ee8136e6caec0c9c42d37bad6cc11d8f7d273c1ec->enter($__internal_5ce884c96c5372d1cbc10b8ee8136e6caec0c9c42d37bad6cc11d8f7d273c1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ce884c96c5372d1cbc10b8ee8136e6caec0c9c42d37bad6cc11d8f7d273c1ec->leave($__internal_5ce884c96c5372d1cbc10b8ee8136e6caec0c9c42d37bad6cc11d8f7d273c1ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f2dca628196ad02f8ddb320bd1bc26cfb7a96206943b98252ca8b0825bac2b3 = $this->env->getExtension("native_profiler");
        $__internal_0f2dca628196ad02f8ddb320bd1bc26cfb7a96206943b98252ca8b0825bac2b3->enter($__internal_0f2dca628196ad02f8ddb320bd1bc26cfb7a96206943b98252ca8b0825bac2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f2dca628196ad02f8ddb320bd1bc26cfb7a96206943b98252ca8b0825bac2b3->leave($__internal_0f2dca628196ad02f8ddb320bd1bc26cfb7a96206943b98252ca8b0825bac2b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_497ce78b1f5d7097b03ea21d1a7bb4cbc0a28293963c72662dcfbbee70dcf4f4 = $this->env->getExtension("native_profiler");
        $__internal_497ce78b1f5d7097b03ea21d1a7bb4cbc0a28293963c72662dcfbbee70dcf4f4->enter($__internal_497ce78b1f5d7097b03ea21d1a7bb4cbc0a28293963c72662dcfbbee70dcf4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_497ce78b1f5d7097b03ea21d1a7bb4cbc0a28293963c72662dcfbbee70dcf4f4->leave($__internal_497ce78b1f5d7097b03ea21d1a7bb4cbc0a28293963c72662dcfbbee70dcf4f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
