<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cb8da6a9984e6d5296406890203c7df885813e20a6232a07599f1537ce9f2ac9 extends Twig_Template
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
        $__internal_5700f6c952da90ddca02dcc9aa6bb02eaf76458c485fd383944646800876b065 = $this->env->getExtension("native_profiler");
        $__internal_5700f6c952da90ddca02dcc9aa6bb02eaf76458c485fd383944646800876b065->enter($__internal_5700f6c952da90ddca02dcc9aa6bb02eaf76458c485fd383944646800876b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5700f6c952da90ddca02dcc9aa6bb02eaf76458c485fd383944646800876b065->leave($__internal_5700f6c952da90ddca02dcc9aa6bb02eaf76458c485fd383944646800876b065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
