<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a4c8283ec04485ea9a59ce24f924662ff00655a4460fcff0f3e4ed045cfdd54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_0d35a0c3a06e5d4a95d19da77c1c33e38ef238a5d8baa63637b7da320979df04 = $this->env->getExtension("native_profiler");
        $__internal_0d35a0c3a06e5d4a95d19da77c1c33e38ef238a5d8baa63637b7da320979df04->enter($__internal_0d35a0c3a06e5d4a95d19da77c1c33e38ef238a5d8baa63637b7da320979df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d35a0c3a06e5d4a95d19da77c1c33e38ef238a5d8baa63637b7da320979df04->leave($__internal_0d35a0c3a06e5d4a95d19da77c1c33e38ef238a5d8baa63637b7da320979df04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ed23dbdd55d82a0cd3e006cda25a4276143c4b9353436b4fd718e0181578cb = $this->env->getExtension("native_profiler");
        $__internal_a1ed23dbdd55d82a0cd3e006cda25a4276143c4b9353436b4fd718e0181578cb->enter($__internal_a1ed23dbdd55d82a0cd3e006cda25a4276143c4b9353436b4fd718e0181578cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a1ed23dbdd55d82a0cd3e006cda25a4276143c4b9353436b4fd718e0181578cb->leave($__internal_a1ed23dbdd55d82a0cd3e006cda25a4276143c4b9353436b4fd718e0181578cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7cd4c43839ff6b12f89b74b43613ac843a434bc165dad5b84e108791fd13a0c = $this->env->getExtension("native_profiler");
        $__internal_f7cd4c43839ff6b12f89b74b43613ac843a434bc165dad5b84e108791fd13a0c->enter($__internal_f7cd4c43839ff6b12f89b74b43613ac843a434bc165dad5b84e108791fd13a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7cd4c43839ff6b12f89b74b43613ac843a434bc165dad5b84e108791fd13a0c->leave($__internal_f7cd4c43839ff6b12f89b74b43613ac843a434bc165dad5b84e108791fd13a0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
