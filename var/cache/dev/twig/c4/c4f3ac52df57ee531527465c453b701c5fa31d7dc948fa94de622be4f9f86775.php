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
        $__internal_6073fa750fdf0008b128243aed16c6cd35fd23b93e88456e019a41512d71564f = $this->env->getExtension("native_profiler");
        $__internal_6073fa750fdf0008b128243aed16c6cd35fd23b93e88456e019a41512d71564f->enter($__internal_6073fa750fdf0008b128243aed16c6cd35fd23b93e88456e019a41512d71564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6073fa750fdf0008b128243aed16c6cd35fd23b93e88456e019a41512d71564f->leave($__internal_6073fa750fdf0008b128243aed16c6cd35fd23b93e88456e019a41512d71564f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9413b78aebc507b2d3d10df5c9eb04c10f588f47ee3686e263df3c19b3ebadd = $this->env->getExtension("native_profiler");
        $__internal_a9413b78aebc507b2d3d10df5c9eb04c10f588f47ee3686e263df3c19b3ebadd->enter($__internal_a9413b78aebc507b2d3d10df5c9eb04c10f588f47ee3686e263df3c19b3ebadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9413b78aebc507b2d3d10df5c9eb04c10f588f47ee3686e263df3c19b3ebadd->leave($__internal_a9413b78aebc507b2d3d10df5c9eb04c10f588f47ee3686e263df3c19b3ebadd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1f2943d05ac4e842c9708dcda32426e190ba79d30ef888db46c6e75f7f157e2 = $this->env->getExtension("native_profiler");
        $__internal_d1f2943d05ac4e842c9708dcda32426e190ba79d30ef888db46c6e75f7f157e2->enter($__internal_d1f2943d05ac4e842c9708dcda32426e190ba79d30ef888db46c6e75f7f157e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1f2943d05ac4e842c9708dcda32426e190ba79d30ef888db46c6e75f7f157e2->leave($__internal_d1f2943d05ac4e842c9708dcda32426e190ba79d30ef888db46c6e75f7f157e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eedd9dc30c5a286fe3e210291117e4f7f104a63f5ad5c574e765f12d0eb74f06 = $this->env->getExtension("native_profiler");
        $__internal_eedd9dc30c5a286fe3e210291117e4f7f104a63f5ad5c574e765f12d0eb74f06->enter($__internal_eedd9dc30c5a286fe3e210291117e4f7f104a63f5ad5c574e765f12d0eb74f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eedd9dc30c5a286fe3e210291117e4f7f104a63f5ad5c574e765f12d0eb74f06->leave($__internal_eedd9dc30c5a286fe3e210291117e4f7f104a63f5ad5c574e765f12d0eb74f06_prof);

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
