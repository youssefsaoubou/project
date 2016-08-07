<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_08a4d62e7e6b870483f47fb0421ebccc03b1b42c03a01473eb3d6074585ce0de extends Twig_Template
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
        $__internal_fcfc19d59ed214d2c22d7ada5ed4dcaa900e193d519fa25675a97b5820e159d1 = $this->env->getExtension("native_profiler");
        $__internal_fcfc19d59ed214d2c22d7ada5ed4dcaa900e193d519fa25675a97b5820e159d1->enter($__internal_fcfc19d59ed214d2c22d7ada5ed4dcaa900e193d519fa25675a97b5820e159d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fcfc19d59ed214d2c22d7ada5ed4dcaa900e193d519fa25675a97b5820e159d1->leave($__internal_fcfc19d59ed214d2c22d7ada5ed4dcaa900e193d519fa25675a97b5820e159d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
