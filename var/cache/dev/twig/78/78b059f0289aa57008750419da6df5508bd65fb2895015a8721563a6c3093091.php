<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bb5dc3f46b2cf5afd3c92a1d8cb11ce07374bdb261f072038c5fbee7e816ff95 extends Twig_Template
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
        $__internal_eaef73c9558d1690ea7be9dee998c18be683368ee018bc156005af96348c7b75 = $this->env->getExtension("native_profiler");
        $__internal_eaef73c9558d1690ea7be9dee998c18be683368ee018bc156005af96348c7b75->enter($__internal_eaef73c9558d1690ea7be9dee998c18be683368ee018bc156005af96348c7b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eaef73c9558d1690ea7be9dee998c18be683368ee018bc156005af96348c7b75->leave($__internal_eaef73c9558d1690ea7be9dee998c18be683368ee018bc156005af96348c7b75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
