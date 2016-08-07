<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b2298236859616b4610b1bc61ed80efae5df94824338b2f1a1745cf84a222e2e extends Twig_Template
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
        $__internal_4d1025da724f86cde7b7cd03ddd5895bd8d35eb1d10576eece9ace61ecb76771 = $this->env->getExtension("native_profiler");
        $__internal_4d1025da724f86cde7b7cd03ddd5895bd8d35eb1d10576eece9ace61ecb76771->enter($__internal_4d1025da724f86cde7b7cd03ddd5895bd8d35eb1d10576eece9ace61ecb76771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4d1025da724f86cde7b7cd03ddd5895bd8d35eb1d10576eece9ace61ecb76771->leave($__internal_4d1025da724f86cde7b7cd03ddd5895bd8d35eb1d10576eece9ace61ecb76771_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
