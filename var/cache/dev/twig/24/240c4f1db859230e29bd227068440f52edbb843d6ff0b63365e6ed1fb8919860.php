<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e3521da3730d5202ccc1ac0f366884b280b0840d446a818c029e4c2fade4da23 extends Twig_Template
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
        $__internal_44123c7dc936de1a09128ab221178090eabd9c7f1673b39dba22a46fff7e3e10 = $this->env->getExtension("native_profiler");
        $__internal_44123c7dc936de1a09128ab221178090eabd9c7f1673b39dba22a46fff7e3e10->enter($__internal_44123c7dc936de1a09128ab221178090eabd9c7f1673b39dba22a46fff7e3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_44123c7dc936de1a09128ab221178090eabd9c7f1673b39dba22a46fff7e3e10->leave($__internal_44123c7dc936de1a09128ab221178090eabd9c7f1673b39dba22a46fff7e3e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
