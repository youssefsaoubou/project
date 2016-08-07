<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b3c2fb9de395b1014346cbcecc7063a36e8a391fd8b4ff7e001d5a9ec96d30e0 extends Twig_Template
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
        $__internal_571ec824b64da4f8895d5fe09ada91cacfbb45ee96bce88fefb970fe95aa829b = $this->env->getExtension("native_profiler");
        $__internal_571ec824b64da4f8895d5fe09ada91cacfbb45ee96bce88fefb970fe95aa829b->enter($__internal_571ec824b64da4f8895d5fe09ada91cacfbb45ee96bce88fefb970fe95aa829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_571ec824b64da4f8895d5fe09ada91cacfbb45ee96bce88fefb970fe95aa829b->leave($__internal_571ec824b64da4f8895d5fe09ada91cacfbb45ee96bce88fefb970fe95aa829b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
