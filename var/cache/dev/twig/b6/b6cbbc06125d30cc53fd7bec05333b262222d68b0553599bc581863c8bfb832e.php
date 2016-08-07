<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1705f64bb1a8ff70b2b720a015c3712ada99032e83c8a5192cd2ef6a17362c9c extends Twig_Template
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
        $__internal_e2ff58198ae93fcd0e833a8a396da8c6f23fbd457418b1d47896e5f80a7975a7 = $this->env->getExtension("native_profiler");
        $__internal_e2ff58198ae93fcd0e833a8a396da8c6f23fbd457418b1d47896e5f80a7975a7->enter($__internal_e2ff58198ae93fcd0e833a8a396da8c6f23fbd457418b1d47896e5f80a7975a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e2ff58198ae93fcd0e833a8a396da8c6f23fbd457418b1d47896e5f80a7975a7->leave($__internal_e2ff58198ae93fcd0e833a8a396da8c6f23fbd457418b1d47896e5f80a7975a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
