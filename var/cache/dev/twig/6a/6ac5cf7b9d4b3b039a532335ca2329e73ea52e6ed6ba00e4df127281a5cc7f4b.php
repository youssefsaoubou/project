<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a0e71308984da3747a9b87b03f87fb919344ab709c4c5110964cdadc95b544e3 extends Twig_Template
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
        $__internal_88f284003bba887ea5bac6c99191cf1a8243b2b645ea9830a3c8b5d6702f75ee = $this->env->getExtension("native_profiler");
        $__internal_88f284003bba887ea5bac6c99191cf1a8243b2b645ea9830a3c8b5d6702f75ee->enter($__internal_88f284003bba887ea5bac6c99191cf1a8243b2b645ea9830a3c8b5d6702f75ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_88f284003bba887ea5bac6c99191cf1a8243b2b645ea9830a3c8b5d6702f75ee->leave($__internal_88f284003bba887ea5bac6c99191cf1a8243b2b645ea9830a3c8b5d6702f75ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
