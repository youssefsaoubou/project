<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_506d522b91458c6bc01c888b129a6ad88cbec3937775b2f13e695268ad47f152 extends Twig_Template
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
        $__internal_ee175ae9cd2230d4708ff068ff39a3c4da57bd44d5a2f915cc9ac016380850db = $this->env->getExtension("native_profiler");
        $__internal_ee175ae9cd2230d4708ff068ff39a3c4da57bd44d5a2f915cc9ac016380850db->enter($__internal_ee175ae9cd2230d4708ff068ff39a3c4da57bd44d5a2f915cc9ac016380850db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ee175ae9cd2230d4708ff068ff39a3c4da57bd44d5a2f915cc9ac016380850db->leave($__internal_ee175ae9cd2230d4708ff068ff39a3c4da57bd44d5a2f915cc9ac016380850db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
