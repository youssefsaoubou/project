<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9706f57078bac20f86f47da2c509172db63ee249b36dd1fc169d22e731452cb0 extends Twig_Template
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
        $__internal_34825957741d14b303929916bcbda63f06ccd0923ef64905f9169e19b96caa73 = $this->env->getExtension("native_profiler");
        $__internal_34825957741d14b303929916bcbda63f06ccd0923ef64905f9169e19b96caa73->enter($__internal_34825957741d14b303929916bcbda63f06ccd0923ef64905f9169e19b96caa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_34825957741d14b303929916bcbda63f06ccd0923ef64905f9169e19b96caa73->leave($__internal_34825957741d14b303929916bcbda63f06ccd0923ef64905f9169e19b96caa73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
