<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_28e369284748aaf293abb0e79339fbb4c7f5042c15482396ae7fd4232942634c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a1c79bcf49f08fa148b349de7f6e320820811b491c3ba1eece7850a5ee2062a5 = $this->env->getExtension("native_profiler");
        $__internal_a1c79bcf49f08fa148b349de7f6e320820811b491c3ba1eece7850a5ee2062a5->enter($__internal_a1c79bcf49f08fa148b349de7f6e320820811b491c3ba1eece7850a5ee2062a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c79bcf49f08fa148b349de7f6e320820811b491c3ba1eece7850a5ee2062a5->leave($__internal_a1c79bcf49f08fa148b349de7f6e320820811b491c3ba1eece7850a5ee2062a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efd14901fb112b5030a704e1ae47286ecdc70d0a9fc51c13638afd8f1b24766a = $this->env->getExtension("native_profiler");
        $__internal_efd14901fb112b5030a704e1ae47286ecdc70d0a9fc51c13638afd8f1b24766a->enter($__internal_efd14901fb112b5030a704e1ae47286ecdc70d0a9fc51c13638afd8f1b24766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efd14901fb112b5030a704e1ae47286ecdc70d0a9fc51c13638afd8f1b24766a->leave($__internal_efd14901fb112b5030a704e1ae47286ecdc70d0a9fc51c13638afd8f1b24766a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ca0ea41ed3e28403ef471db8d2a1006a5c8f526676748a0bb90ead06561a87a = $this->env->getExtension("native_profiler");
        $__internal_1ca0ea41ed3e28403ef471db8d2a1006a5c8f526676748a0bb90ead06561a87a->enter($__internal_1ca0ea41ed3e28403ef471db8d2a1006a5c8f526676748a0bb90ead06561a87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ca0ea41ed3e28403ef471db8d2a1006a5c8f526676748a0bb90ead06561a87a->leave($__internal_1ca0ea41ed3e28403ef471db8d2a1006a5c8f526676748a0bb90ead06561a87a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53c36f4871fca75fd8ff99543b387417d6568de1fccc16b389894bd2fab47ef9 = $this->env->getExtension("native_profiler");
        $__internal_53c36f4871fca75fd8ff99543b387417d6568de1fccc16b389894bd2fab47ef9->enter($__internal_53c36f4871fca75fd8ff99543b387417d6568de1fccc16b389894bd2fab47ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53c36f4871fca75fd8ff99543b387417d6568de1fccc16b389894bd2fab47ef9->leave($__internal_53c36f4871fca75fd8ff99543b387417d6568de1fccc16b389894bd2fab47ef9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
