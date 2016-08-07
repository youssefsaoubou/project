<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_304b8194920e32b5279ec1ad4a09f147fd2f61adfe73f40b71b0a2fe85300dd0 extends Twig_Template
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
        $__internal_29685f8c482d2191b718f2bebc8b63f056525b9cf4750277634e31ec0c227341 = $this->env->getExtension("native_profiler");
        $__internal_29685f8c482d2191b718f2bebc8b63f056525b9cf4750277634e31ec0c227341->enter($__internal_29685f8c482d2191b718f2bebc8b63f056525b9cf4750277634e31ec0c227341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_29685f8c482d2191b718f2bebc8b63f056525b9cf4750277634e31ec0c227341->leave($__internal_29685f8c482d2191b718f2bebc8b63f056525b9cf4750277634e31ec0c227341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
