<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec38cad7d48c4530766ddef8c24c7aa7d5c4d25eecee6293f551e7b4c4e42c4f extends Twig_Template
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
        $__internal_01557ba83601a9a65772fba1192753c8dfae2329b30312ab925a65144789d407 = $this->env->getExtension("native_profiler");
        $__internal_01557ba83601a9a65772fba1192753c8dfae2329b30312ab925a65144789d407->enter($__internal_01557ba83601a9a65772fba1192753c8dfae2329b30312ab925a65144789d407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_01557ba83601a9a65772fba1192753c8dfae2329b30312ab925a65144789d407->leave($__internal_01557ba83601a9a65772fba1192753c8dfae2329b30312ab925a65144789d407_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
