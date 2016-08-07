<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f754365c000892db95cdb1c3e387ce79f4c4bf81a42aa79c240803bd74f16310 extends Twig_Template
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
        $__internal_e3f437aaad94b3782a573f2981f4f6657357beaa7625380272924798e0943885 = $this->env->getExtension("native_profiler");
        $__internal_e3f437aaad94b3782a573f2981f4f6657357beaa7625380272924798e0943885->enter($__internal_e3f437aaad94b3782a573f2981f4f6657357beaa7625380272924798e0943885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e3f437aaad94b3782a573f2981f4f6657357beaa7625380272924798e0943885->leave($__internal_e3f437aaad94b3782a573f2981f4f6657357beaa7625380272924798e0943885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
