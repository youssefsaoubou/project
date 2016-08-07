<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_82c0c81fd964e39bcde9f815f952d2c31dd43ad3a30ababf099801c06cda4e7d extends Twig_Template
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
        $__internal_c4f8c8fbe2a1ed64b1679cc71ef8344f62f35a1d667b413e27719c08729dc955 = $this->env->getExtension("native_profiler");
        $__internal_c4f8c8fbe2a1ed64b1679cc71ef8344f62f35a1d667b413e27719c08729dc955->enter($__internal_c4f8c8fbe2a1ed64b1679cc71ef8344f62f35a1d667b413e27719c08729dc955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c4f8c8fbe2a1ed64b1679cc71ef8344f62f35a1d667b413e27719c08729dc955->leave($__internal_c4f8c8fbe2a1ed64b1679cc71ef8344f62f35a1d667b413e27719c08729dc955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
