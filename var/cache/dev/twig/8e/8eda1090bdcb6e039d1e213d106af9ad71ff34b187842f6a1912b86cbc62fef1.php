<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_50e1c6ba55b7f2bf240ca9028143e8ed4c9d4c2f6839038e9b4101853f416206 extends Twig_Template
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
        $__internal_0ceb8a0910958401ddadaded40597519e04371691d2df7d6234b167296aeadd8 = $this->env->getExtension("native_profiler");
        $__internal_0ceb8a0910958401ddadaded40597519e04371691d2df7d6234b167296aeadd8->enter($__internal_0ceb8a0910958401ddadaded40597519e04371691d2df7d6234b167296aeadd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0ceb8a0910958401ddadaded40597519e04371691d2df7d6234b167296aeadd8->leave($__internal_0ceb8a0910958401ddadaded40597519e04371691d2df7d6234b167296aeadd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
