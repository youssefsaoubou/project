<?php

/* base.html.twig */
class __TwigTemplate_922663a99dc7e74180368bc55ba4fd5840ff76f289527e23f0680d88840dd048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f89d9f89e151e4678acf571e76937a90a0928e8e5290209ee70e0988aaada5e = $this->env->getExtension("native_profiler");
        $__internal_8f89d9f89e151e4678acf571e76937a90a0928e8e5290209ee70e0988aaada5e->enter($__internal_8f89d9f89e151e4678acf571e76937a90a0928e8e5290209ee70e0988aaada5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"nav-md\">
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8f89d9f89e151e4678acf571e76937a90a0928e8e5290209ee70e0988aaada5e->leave($__internal_8f89d9f89e151e4678acf571e76937a90a0928e8e5290209ee70e0988aaada5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75a6b234ac3804c6a36876b1d82932b764d66bc06bb031f3b689f5fb159a4975 = $this->env->getExtension("native_profiler");
        $__internal_75a6b234ac3804c6a36876b1d82932b764d66bc06bb031f3b689f5fb159a4975->enter($__internal_75a6b234ac3804c6a36876b1d82932b764d66bc06bb031f3b689f5fb159a4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75a6b234ac3804c6a36876b1d82932b764d66bc06bb031f3b689f5fb159a4975->leave($__internal_75a6b234ac3804c6a36876b1d82932b764d66bc06bb031f3b689f5fb159a4975_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_692204886d208568e82e9c509a1417b4fa3d0779acc5e9266b4c372abc8de5d1 = $this->env->getExtension("native_profiler");
        $__internal_692204886d208568e82e9c509a1417b4fa3d0779acc5e9266b4c372abc8de5d1->enter($__internal_692204886d208568e82e9c509a1417b4fa3d0779acc5e9266b4c372abc8de5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_692204886d208568e82e9c509a1417b4fa3d0779acc5e9266b4c372abc8de5d1->leave($__internal_692204886d208568e82e9c509a1417b4fa3d0779acc5e9266b4c372abc8de5d1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e6f58ecc1b29a35490e8c21bab320fe977346a9e19f822b979c0fad8ce85c3 = $this->env->getExtension("native_profiler");
        $__internal_84e6f58ecc1b29a35490e8c21bab320fe977346a9e19f822b979c0fad8ce85c3->enter($__internal_84e6f58ecc1b29a35490e8c21bab320fe977346a9e19f822b979c0fad8ce85c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84e6f58ecc1b29a35490e8c21bab320fe977346a9e19f822b979c0fad8ce85c3->leave($__internal_84e6f58ecc1b29a35490e8c21bab320fe977346a9e19f822b979c0fad8ce85c3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec63c2b0a9218563021a3b3ad164d10b8a060d070b277fdaa3dfe4b31022529e = $this->env->getExtension("native_profiler");
        $__internal_ec63c2b0a9218563021a3b3ad164d10b8a060d070b277fdaa3dfe4b31022529e->enter($__internal_ec63c2b0a9218563021a3b3ad164d10b8a060d070b277fdaa3dfe4b31022529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec63c2b0a9218563021a3b3ad164d10b8a060d070b277fdaa3dfe4b31022529e->leave($__internal_ec63c2b0a9218563021a3b3ad164d10b8a060d070b277fdaa3dfe4b31022529e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="nav-md">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
