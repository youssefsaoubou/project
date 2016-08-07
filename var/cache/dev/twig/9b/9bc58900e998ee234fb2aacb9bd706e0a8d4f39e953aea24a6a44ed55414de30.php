<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1626fe70fd54e1a9838ca44d64c619bc93351e9fc4c5c43cc20ce58f41aeec20 extends Twig_Template
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
        $__internal_7b50f6a3065e6a2c297385c846f89139e0829ecd420894a8deeb6510227c063b = $this->env->getExtension("native_profiler");
        $__internal_7b50f6a3065e6a2c297385c846f89139e0829ecd420894a8deeb6510227c063b->enter($__internal_7b50f6a3065e6a2c297385c846f89139e0829ecd420894a8deeb6510227c063b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7b50f6a3065e6a2c297385c846f89139e0829ecd420894a8deeb6510227c063b->leave($__internal_7b50f6a3065e6a2c297385c846f89139e0829ecd420894a8deeb6510227c063b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
