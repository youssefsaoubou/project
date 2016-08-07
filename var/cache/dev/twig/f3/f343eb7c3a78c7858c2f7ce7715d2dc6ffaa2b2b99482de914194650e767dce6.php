<?php

/* AdminBundle::menu.html.twig */
class __TwigTemplate_1058e66c8e0a17e77fa1a39fc0d6397e47e2db9794536b65825611f70135d188 extends Twig_Template
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
        $__internal_98985383d6e070fc35be1fd127416db6c46069594852689e1114fe3a49cce7d4 = $this->env->getExtension("native_profiler");
        $__internal_98985383d6e070fc35be1fd127416db6c46069594852689e1114fe3a49cce7d4->enter($__internal_98985383d6e070fc35be1fd127416db6c46069594852689e1114fe3a49cce7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::menu.html.twig"));

        // line 1
        echo "      <div class=\"col-md-3 left_col\">
     <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>SITE X</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
           ";
        // line 19
        echo "            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                ";
        // line 27
        echo "                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Gestion Clients <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"index.html\">Dashboard</a>
                      </li>
                      <li><a href=\"index2.html\">Dashboard2</a>
                      </li>
                      <li><a href=\"index3.html\">Dashboard3</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Gestion Annonces<span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a>
                      </li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a>
                      </li>
                      <li><a href=\"form_validation.html\">Form Validation</a>
                      </li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a>
                      </li>
                      <li><a href=\"form_upload.html\">Form Upload</a>
                      </li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> Gestion Categories <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a>
                      </li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a>
                      </li>
                      <li><a href=\"typography.html\">Typography</a>
                      </li>
                      <li><a href=\"icons.html\">Icons</a>
                      </li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a>
                      </li>
                      <li><a href=\"widgets.html\">Widgets</a>
                      </li>
                      <li><a href=\"invoice.html\">Invoice</a>
                      </li>
                      <li><a href=\"inbox.html\">Inbox</a>
                      </li>
                      <li><a href=\"calendar.html\">Calendar</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Gestion Regions <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a>
                      </li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a>
                      </li>
                    </ul>
                  </li>
                 
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
        ";
        
        $__internal_98985383d6e070fc35be1fd127416db6c46069594852689e1114fe3a49cce7d4->leave($__internal_98985383d6e070fc35be1fd127416db6c46069594852689e1114fe3a49cce7d4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 27,  36 => 19,  27 => 4,  22 => 1,);
    }
}
/*       <div class="col-md-3 left_col">*/
/*      <div class="left_col scroll-view">*/
/*             <div class="navbar nav_title" style="border: 0;">*/
/*               <a href="{{path('homepage')}}" class="site_title"><i class="fa fa-paw"></i> <span>SITE X</span></a>*/
/*             </div>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- menu profile quick info -->*/
/*            {#  <div class="profile">*/
/*               <div class="profile_pic">*/
/*                 <img src="images/img.jpg" alt="..." class="img-circle profile_img">*/
/*               </div>*/
/*               <div class="profile_info">*/
/*                 <span>Welcome,</span>*/
/*                 <h2>John Doe</h2>*/
/*               </div>*/
/*             </div> #}*/
/*             <!-- /menu profile quick info -->*/
/* */
/*             <br />*/
/* */
/*             <!-- sidebar menu -->*/
/*             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*               <div class="menu_section">*/
/*                 {# <h3>General</h3> #}*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-home"></i> Gestion Clients <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="index.html">Dashboard</a>*/
/*                       </li>*/
/*                       <li><a href="index2.html">Dashboard2</a>*/
/*                       </li>*/
/*                       <li><a href="index3.html">Dashboard3</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-edit"></i> Gestion Annonces<span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="form.html">General Form</a>*/
/*                       </li>*/
/*                       <li><a href="form_advanced.html">Advanced Components</a>*/
/*                       </li>*/
/*                       <li><a href="form_validation.html">Form Validation</a>*/
/*                       </li>*/
/*                       <li><a href="form_wizards.html">Form Wizard</a>*/
/*                       </li>*/
/*                       <li><a href="form_upload.html">Form Upload</a>*/
/*                       </li>*/
/*                       <li><a href="form_buttons.html">Form Buttons</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-desktop"></i> Gestion Categories <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="general_elements.html">General Elements</a>*/
/*                       </li>*/
/*                       <li><a href="media_gallery.html">Media Gallery</a>*/
/*                       </li>*/
/*                       <li><a href="typography.html">Typography</a>*/
/*                       </li>*/
/*                       <li><a href="icons.html">Icons</a>*/
/*                       </li>*/
/*                       <li><a href="glyphicons.html">Glyphicons</a>*/
/*                       </li>*/
/*                       <li><a href="widgets.html">Widgets</a>*/
/*                       </li>*/
/*                       <li><a href="invoice.html">Invoice</a>*/
/*                       </li>*/
/*                       <li><a href="inbox.html">Inbox</a>*/
/*                       </li>*/
/*                       <li><a href="calendar.html">Calendar</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-table"></i> Gestion Regions <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="tables.html">Tables</a>*/
/*                       </li>*/
/*                       <li><a href="tables_dynamic.html">Table Dynamic</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                  */
/*                   */
/*                 </ul>*/
/*               </div>*/
/* */
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/*             <!-- /menu footer buttons -->*/
/*             <div class="sidebar-footer hidden-small">*/
/*               <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*                 <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*                 <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Logout">*/
/*                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*               </a>*/
/*             </div>*/
/*             <!-- /menu footer buttons -->*/
/*         */
