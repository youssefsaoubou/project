<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_896a4f99afbdc0620508e9feba0e8693c4b684d3fe069f33963534d1b2407cf7 extends Twig_Template
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
        $__internal_79e74d683e0712a79e783ed9889c93bbc6ec025897daac4bafd892b641f5551f = $this->env->getExtension("native_profiler");
        $__internal_79e74d683e0712a79e783ed9889c93bbc6ec025897daac4bafd892b641f5551f->enter($__internal_79e74d683e0712a79e783ed9889c93bbc6ec025897daac4bafd892b641f5551f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_79e74d683e0712a79e783ed9889c93bbc6ec025897daac4bafd892b641f5551f->leave($__internal_79e74d683e0712a79e783ed9889c93bbc6ec025897daac4bafd892b641f5551f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
