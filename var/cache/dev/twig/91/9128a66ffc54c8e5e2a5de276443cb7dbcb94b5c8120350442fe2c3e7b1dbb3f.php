<?php

/* @Admin/Default/clientsView.html.twig */
class __TwigTemplate_ac379d3a424519cf15ffaa4b65e6f8c1067f302314f1b214a9efdd1bbce44673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "@Admin/Default/clientsView.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd2ff0837011c2f345c35d628bb8bd2b66500ac5d122fa00e05167120872ceb3 = $this->env->getExtension("native_profiler");
        $__internal_bd2ff0837011c2f345c35d628bb8bd2b66500ac5d122fa00e05167120872ceb3->enter($__internal_bd2ff0837011c2f345c35d628bb8bd2b66500ac5d122fa00e05167120872ceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/clientsView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd2ff0837011c2f345c35d628bb8bd2b66500ac5d122fa00e05167120872ceb3->leave($__internal_bd2ff0837011c2f345c35d628bb8bd2b66500ac5d122fa00e05167120872ceb3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36285ae4a395c8e4e6056b47611efc905ce6170ab90802520c12965f646548dd = $this->env->getExtension("native_profiler");
        $__internal_36285ae4a395c8e4e6056b47611efc905ce6170ab90802520c12965f646548dd->enter($__internal_36285ae4a395c8e4e6056b47611efc905ce6170ab90802520c12965f646548dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>DataTables | Gentallela</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_36285ae4a395c8e4e6056b47611efc905ce6170ab90802520c12965f646548dd->leave($__internal_36285ae4a395c8e4e6056b47611efc905ce6170ab90802520c12965f646548dd_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_acc9b57af44fd33e37096bbc0fae9e374149575ecff94c60795a28612dcf83fb = $this->env->getExtension("native_profiler");
        $__internal_acc9b57af44fd33e37096bbc0fae9e374149575ecff94c60795a28612dcf83fb->enter($__internal_acc9b57af44fd33e37096bbc0fae9e374149575ecff94c60795a28612dcf83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
        <!-- top navigation and sidebar -->
           ";
        // line 31
        $this->loadTemplate("AdminBundle::menu.html.twig", "@Admin/Default/clientsView.html.twig", 31)->display($context);
        // line 32
        echo "        
  </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">

          <div class=\"nav_menu\">
            <nav class=\"\" role=\"navigation\">
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/img.jpg\" alt=\"\">John Doe
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\">  Profile</a>
                    </li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"javascript:;\">Help</a>
                    </li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"images/img.jpg\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
        
        
        <!-- /top navigation and sidebar -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>
                      Admin
                      <small>
                          La liste des clients
                      </small>
                  </h3>
              </div>

              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Liste des Clients <small></small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    
                    \t<form method =\"POST\" action=\"\">
                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>IdClient</th>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Sexe</th>
                          <th>Age</th>
                          <th>Longueur</th>
                           <th>Largeur</th>
                            <th>Hauteur</th>
                            <th>numTel</th>
                        </tr>
                      </thead>


                      <tbody>

                      \t ";
        // line 221
        echo "\t\t\t\t\t\t
  \t\t\t\t\t\t<tr>

                          <td> <input type=\"checkbox\" name=\"clientsIdList[]\" value=\"\"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                              <td></td>
                                  <td></td>    
                                      <td></td>
                        </tr>
                    ";
        // line 234
        echo " 
                      
                        
                      </tbody>

                    </table>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"1\" >Add new</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"2\" >Remove</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"3\" >Update</button>
                     <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"4\" >Passer une commande</button>
                  </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Datatables -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script>
      \$(document).ready(function() {
        var handleDataTableButtons = function() {
          if (\$(\"#datatable-buttons\").length) {
            \$(\"#datatable-buttons\").DataTable({
              dom: \"Bfrtip\",
              buttons: [
                {
                  extend: \"copy\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"csv\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"excel\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"pdfHtml5\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"print\",
                  className: \"btn-sm\"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          \"use strict\";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        \$('#datatable').dataTable();
        \$('#datatable-keytable').DataTable({
          keys: true
        });

        \$('#datatable-responsive').DataTable();

        \$('#datatable-scroller').DataTable({
          ajax: \"js/datatables/json/scroller-demo.json\",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = \$('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  
  ";
        
        $__internal_acc9b57af44fd33e37096bbc0fae9e374149575ecff94c60795a28612dcf83fb->leave($__internal_acc9b57af44fd33e37096bbc0fae9e374149575ecff94c60795a28612dcf83fb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Default/clientsView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 291,  426 => 288,  422 => 287,  418 => 286,  414 => 285,  410 => 284,  406 => 283,  402 => 282,  398 => 281,  394 => 280,  390 => 279,  386 => 278,  382 => 277,  378 => 276,  374 => 275,  370 => 274,  365 => 272,  360 => 270,  355 => 268,  350 => 266,  316 => 234,  301 => 221,  111 => 32,  109 => 31,  104 => 28,  98 => 27,  89 => 25,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  62 => 16,  57 => 14,  52 => 12,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>DataTables | Gentallela</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- Datatables -->*/
/*     <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*   {% endblock %}*/
/*   {% block body  %}*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*         <!-- top navigation and sidebar -->*/
/*            {% include 'AdminBundle::menu.html.twig' %}*/
/*         */
/*   </div>*/
/*         </div>*/
/* */
/*         <!-- top navigation -->*/
/*         <div class="top_nav">*/
/* */
/*           <div class="nav_menu">*/
/*             <nav class="" role="navigation">*/
/*               <div class="nav toggle">*/
/*                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*               </div>*/
/* */
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="">*/
/*                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                     <img src="images/img.jpg" alt="">John Doe*/
/*                     <span class=" fa fa-angle-down"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                     <li><a href="javascript:;">  Profile</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="javascript:;">*/
/*                         <span class="badge bg-red pull-right">50%</span>*/
/*                         <span>Settings</span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="javascript:;">Help</a>*/
/*                     </li>*/
/*                     <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li role="presentation" class="dropdown">*/
/*                   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">*/
/*                     <i class="fa fa-envelope-o"></i>*/
/*                     <span class="badge bg-green">6</span>*/
/*                   </a>*/
/*                   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="images/img.jpg" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="images/img.jpg" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="images/img.jpg" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="images/img.jpg" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <div class="text-center">*/
/*                         <a>*/
/*                           <strong>See All Alerts</strong>*/
/*                           <i class="fa fa-angle-right"></i>*/
/*                         </a>*/
/*                       </div>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/* */
/*               </ul>*/
/*             </nav>*/
/*           </div>*/
/* */
/*         </div>*/
/*         */
/*         */
/*         <!-- /top navigation and sidebar -->*/
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <div class="">*/
/*             <div class="page-title">*/
/*               <div class="title_left">*/
/*                 <h3>*/
/*                       Admin*/
/*                       <small>*/
/*                           La liste des clients*/
/*                       </small>*/
/*                   </h3>*/
/*               </div>*/
/* */
/*               <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                   <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for...">*/
/*                     <span class="input-group-btn">*/
/*                               <button class="btn btn-default" type="button">Go!</button>*/
/*                           </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/* */
/*             <div class="row">*/
/* */
/*               <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Liste des Clients <small></small></h2>*/
/*                     <ul class="nav navbar-right panel_toolbox">*/
/*                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                       </li>*/
/*                       <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                           <li><a href="#">Settings 1</a>*/
/*                           </li>*/
/*                           <li><a href="#">Settings 2</a>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </li>*/
/*                       <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                       </li>*/
/*                     </ul>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="x_content">*/
/*                     */
/*                     	<form method ="POST" action="">*/
/*                     <table id="datatable" class="table table-striped table-bordered">*/
/*                       <thead>*/
/*                         <tr>*/
/*                           <th>IdClient</th>*/
/*                           <th>Nom</th>*/
/*                           <th>Prenom</th>*/
/*                           <th>Sexe</th>*/
/*                           <th>Age</th>*/
/*                           <th>Longueur</th>*/
/*                            <th>Largeur</th>*/
/*                             <th>Hauteur</th>*/
/*                             <th>numTel</th>*/
/*                         </tr>*/
/*                       </thead>*/
/* */
/* */
/*                       <tbody>*/
/* */
/*                       	 {# {% for client in clients %} #}*/
/* 						*/
/*   						<tr>*/
/* */
/*                           <td> <input type="checkbox" name="clientsIdList[]" value=""></td>*/
/*                           <td></td>*/
/*                           <td></td>*/
/*                           <td></td>*/
/*                           <td></td>*/
/*                           <td></td>*/
/*                               <td></td>*/
/*                                   <td></td>    */
/*                                       <td></td>*/
/*                         </tr>*/
/*                     {#   {% endfor %} #} */
/*                       */
/*                         */
/*                       </tbody>*/
/* */
/*                     </table>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="1" >Add new</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="2" >Remove</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="3" >Update</button>*/
/*                      <button class="btn btn-default btn-lg" name="submitbtn" value="4" >Passer une commande</button>*/
/*                   </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- /page content -->*/
/* */
/*         <!-- footer content -->*/
/*         <footer>*/
/*           <div class="pull-right">*/
/*             Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
/*         <!-- /footer content -->*/
/*       </div>*/
/*     </div>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/*     <!-- Datatables -->*/
/*     <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/* */
/*     <!-- Datatables -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var handleDataTableButtons = function() {*/
/*           if ($("#datatable-buttons").length) {*/
/*             $("#datatable-buttons").DataTable({*/
/*               dom: "Bfrtip",*/
/*               buttons: [*/
/*                 {*/
/*                   extend: "copy",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "csv",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "excel",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "pdfHtml5",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "print",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*               ],*/
/*               responsive: true*/
/*             });*/
/*           }*/
/*         };*/
/* */
/*         TableManageButtons = function() {*/
/*           "use strict";*/
/*           return {*/
/*             init: function() {*/
/*               handleDataTableButtons();*/
/*             }*/
/*           };*/
/*         }();*/
/* */
/*         $('#datatable').dataTable();*/
/*         $('#datatable-keytable').DataTable({*/
/*           keys: true*/
/*         });*/
/* */
/*         $('#datatable-responsive').DataTable();*/
/* */
/*         $('#datatable-scroller').DataTable({*/
/*           ajax: "js/datatables/json/scroller-demo.json",*/
/*           deferRender: true,*/
/*           scrollY: 380,*/
/*           scrollCollapse: true,*/
/*           scroller: true*/
/*         });*/
/* */
/*         var table = $('#datatable-fixed-header').DataTable({*/
/*           fixedHeader: true*/
/*         });*/
/* */
/*         TableManageButtons.init();*/
/*       });*/
/*     </script>*/
/*     <!-- /Datatables -->*/
/*   */
/*   {% endblock %}*/
/* */
