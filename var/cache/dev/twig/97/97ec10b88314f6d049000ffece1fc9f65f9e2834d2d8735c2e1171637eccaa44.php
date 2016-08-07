<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_54d70ca919ad34b957b8e1e138df4f492eb255173b04e4319d1e616b2d33081a extends Twig_Template
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
        $__internal_981b3c8919fa703cfc37bc665663d9fad61f7eb8afbb5c5c62daa33109da00b1 = $this->env->getExtension("native_profiler");
        $__internal_981b3c8919fa703cfc37bc665663d9fad61f7eb8afbb5c5c62daa33109da00b1->enter($__internal_981b3c8919fa703cfc37bc665663d9fad61f7eb8afbb5c5c62daa33109da00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_981b3c8919fa703cfc37bc665663d9fad61f7eb8afbb5c5c62daa33109da00b1->leave($__internal_981b3c8919fa703cfc37bc665663d9fad61f7eb8afbb5c5c62daa33109da00b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
