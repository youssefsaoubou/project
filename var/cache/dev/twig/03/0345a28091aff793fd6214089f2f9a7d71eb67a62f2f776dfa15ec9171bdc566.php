<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_18db92c685b5aac1734340ab086f417613db38297d7117dacf36b15852617140 extends Twig_Template
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
        $__internal_0d8185c666ea6417466a9761e1376a52abf1343b2b6fa475eecb131baf140686 = $this->env->getExtension("native_profiler");
        $__internal_0d8185c666ea6417466a9761e1376a52abf1343b2b6fa475eecb131baf140686->enter($__internal_0d8185c666ea6417466a9761e1376a52abf1343b2b6fa475eecb131baf140686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d8185c666ea6417466a9761e1376a52abf1343b2b6fa475eecb131baf140686->leave($__internal_0d8185c666ea6417466a9761e1376a52abf1343b2b6fa475eecb131baf140686_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
