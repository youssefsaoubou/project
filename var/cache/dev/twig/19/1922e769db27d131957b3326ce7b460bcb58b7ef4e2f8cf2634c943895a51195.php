<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1137103b039cfa006824b781703d459b0cd54cc5a142752b0c53b459cf802ba0 extends Twig_Template
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
        $__internal_f20e06a99a03427845f61712f7ed08166ce09a0719d2fe554642788043731c0d = $this->env->getExtension("native_profiler");
        $__internal_f20e06a99a03427845f61712f7ed08166ce09a0719d2fe554642788043731c0d->enter($__internal_f20e06a99a03427845f61712f7ed08166ce09a0719d2fe554642788043731c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f20e06a99a03427845f61712f7ed08166ce09a0719d2fe554642788043731c0d->leave($__internal_f20e06a99a03427845f61712f7ed08166ce09a0719d2fe554642788043731c0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
