<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_62822134614f5872c17a51df5c2f601517cffcda2d3f9562c84a6da79ce84976 extends Twig_Template
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
        $__internal_d320d1b60dd2abb8ecc9b1dcf71d323d732199a59d2fdcbfccd3d782f1038212 = $this->env->getExtension("native_profiler");
        $__internal_d320d1b60dd2abb8ecc9b1dcf71d323d732199a59d2fdcbfccd3d782f1038212->enter($__internal_d320d1b60dd2abb8ecc9b1dcf71d323d732199a59d2fdcbfccd3d782f1038212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d320d1b60dd2abb8ecc9b1dcf71d323d732199a59d2fdcbfccd3d782f1038212->leave($__internal_d320d1b60dd2abb8ecc9b1dcf71d323d732199a59d2fdcbfccd3d782f1038212_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
