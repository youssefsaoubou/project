<?php

/* AdminBundle:Default:testpage.html.twig */
class __TwigTemplate_0d70788848f84f97a7e41ba9ca6145c4ebc84da2ae576efeee9025d6af0618b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Default:testpage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3be40e6628a769215fd1117990d51304847ac59971fcc9cf6687ab62588b9b1 = $this->env->getExtension("native_profiler");
        $__internal_c3be40e6628a769215fd1117990d51304847ac59971fcc9cf6687ab62588b9b1->enter($__internal_c3be40e6628a769215fd1117990d51304847ac59971fcc9cf6687ab62588b9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:testpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3be40e6628a769215fd1117990d51304847ac59971fcc9cf6687ab62588b9b1->leave($__internal_c3be40e6628a769215fd1117990d51304847ac59971fcc9cf6687ab62588b9b1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e9116ede9644cda22f534228f064b3e95faba7978b9cd4795a7348783e9f0eb = $this->env->getExtension("native_profiler");
        $__internal_9e9116ede9644cda22f534228f064b3e95faba7978b9cd4795a7348783e9f0eb->enter($__internal_9e9116ede9644cda22f534228f064b3e95faba7978b9cd4795a7348783e9f0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_9e9116ede9644cda22f534228f064b3e95faba7978b9cd4795a7348783e9f0eb->leave($__internal_9e9116ede9644cda22f534228f064b3e95faba7978b9cd4795a7348783e9f0eb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8b360f8ec7de4a656a20d7ec1f06073530289777c4f3fa05a0724b6284c80ba = $this->env->getExtension("native_profiler");
        $__internal_d8b360f8ec7de4a656a20d7ec1f06073530289777c4f3fa05a0724b6284c80ba->enter($__internal_d8b360f8ec7de4a656a20d7ec1f06073530289777c4f3fa05a0724b6284c80ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

   
    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/bin/prettify.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_d8b360f8ec7de4a656a20d7ec1f06073530289777c4f3fa05a0724b6284c80ba->leave($__internal_d8b360f8ec7de4a656a20d7ec1f06073530289777c4f3fa05a0724b6284c80ba_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_e02429f0ce7b00786cb208f7fa653f7c99dc13739ab0e4b8697ebaff8f863c1a = $this->env->getExtension("native_profiler");
        $__internal_e02429f0ce7b00786cb208f7fa653f7c99dc13739ab0e4b8697ebaff8f863c1a->enter($__internal_e02429f0ce7b00786cb208f7fa653f7c99dc13739ab0e4b8697ebaff8f863c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
      ";
        // line 34
        $this->loadTemplate("AdminBundle::menu.html.twig", "AdminBundle:Default:testpage.html.twig", 34)->display($context);
        // line 35
        echo "            <!-- /menu footer buttons -->
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
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">

            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Form Elements</h3>
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
                    <h2>Form Design <small>different form elements</small></h2>
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
                    <br />
                    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"first-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Last Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"last-name\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Middle Name / Initial</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"middle-name\" class=\"form-control col-md-7 col-xs-12\" type=\"text\" name=\"middle-name\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Gender</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"male\"> &nbsp; Male &nbsp;
                            </label>
                            <label class=\"btn btn-primary\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"female\"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                    
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"birthday\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Design <small>different form elements</small></h2>
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
                    <br />
                    <form class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" placeholder=\"First Name\">
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\" placeholder=\"Last Name\">
                        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" placeholder=\"Email\">
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess5\" placeholder=\"Phone\">
                        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Star Rating</h2>
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
                    <h4>Star Ratings<small> Hover and click on a star</small></h4>
                    <div>
                      <div class=\"starrr stars\"></div>
                      You gave a rating of <span class=\"stars-count\">0</span> star(s)
                    </div>

                    <p>Also you can give a default rating by adding attribute data-rating</p>
                    <div class=\"starrr stars-existing\" data-rating='4'></div>
                    You gave a rating of <span class=\"stars-count-existing\">4</span> star(s)
                  </div>
                </div>

                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Registration Form <small>Click to validate</small></h2>
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

                    <!-- start form for validation -->
                    <form id=\"demo-form\" data-parsley-validate>
                      <label for=\"fullname\">Full Name * :</label>
                      <input type=\"text\" id=\"fullname\" class=\"form-control\" name=\"fullname\" required />

                      <label for=\"email\">Email * :</label>
                      <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />

                      <label>Gender *:</label>
                      <p>
                        M:
                        <input type=\"radio\" class=\"flat\" name=\"gender\" id=\"genderM\" value=\"M\" checked=\"\" required /> F:
                        <input type=\"radio\" class=\"flat\" name=\"gender\" id=\"genderF\" value=\"F\" />
                      </p>

                      <label>Hobbies (2 minimum):</label>
                      <p style=\"padding: 5px;\">
                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby1\" value=\"ski\" data-parsley-mincheck=\"2\" required class=\"flat\" /> Skiing
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby2\" value=\"run\" class=\"flat\" /> Running
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby3\" value=\"eat\" class=\"flat\" /> Eating
                        <br />

                        <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby4\" value=\"sleep\" class=\"flat\" /> Sleeping
                        <br />
                        <p>

                          <label for=\"heard\">Heard us by *:</label>
                          <select id=\"heard\" class=\"form-control\" required>
                            <option value=\"\">Choose..</option>
                            <option value=\"press\">Press</option>
                            <option value=\"net\">Internet</option>
                            <option value=\"mouth\">Word of mouth</option>
                          </select>

                          <label for=\"message\">Message (20 chars min, 100 max) :</label>
                          <textarea id=\"message\" required=\"required\" class=\"form-control\" name=\"message\" data-parsley-trigger=\"keyup\" data-parsley-minlength=\"20\" data-parsley-maxlength=\"100\" data-parsley-minlength-message=\"Come on! You need to enter at least a 20 caracters long comment..\"
                            data-parsley-validation-threshold=\"10\"></textarea>

                          <br/>
                          <span class=\"btn btn-primary\">Validate form</span>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>

              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Basic Elements <small>different form elements</small></h2>
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
                    <br />
                    <form class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <textarea class=\"form-control\" rows=\"3\" placeholder='rows=\"3\"'></textarea>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Password</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"password\" class=\"form-control\" value=\"passwordonetwo\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">AutoComplete</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" name=\"country\" id=\"autocomplete-custom-append\" class=\"form-control col-md-10\" style=\"float: left;\" />
                          <div id=\"autocomplete-container\" style=\"position: relative; float: left; width: 400px; margin: 10px;\"></div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"form-control\">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Custom</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_single form-control\" tabindex=\"-1\">
                            <option></option>
                            <option value=\"AK\">Alaska</option>
                            <option value=\"HI\">Hawaii</option>
                            <option value=\"CA\">California</option>
                            <option value=\"NV\">Nevada</option>
                            <option value=\"OR\">Oregon</option>
                            <option value=\"WA\">Washington</option>
                            <option value=\"AZ\">Arizona</option>
                            <option value=\"CO\">Colorado</option>
                            <option value=\"ID\">Idaho</option>
                            <option value=\"MT\">Montana</option>
                            <option value=\"NE\">Nebraska</option>
                            <option value=\"NM\">New Mexico</option>
                            <option value=\"ND\">North Dakota</option>
                            <option value=\"UT\">Utah</option>
                            <option value=\"WY\">Wyoming</option>
                            <option value=\"AR\">Arkansas</option>
                            <option value=\"IL\">Illinois</option>
                            <option value=\"IA\">Iowa</option>
                            <option value=\"KS\">Kansas</option>
                            <option value=\"KY\">Kentucky</option>
                            <option value=\"LA\">Louisiana</option>
                            <option value=\"MN\">Minnesota</option>
                            <option value=\"MS\">Mississippi</option>
                            <option value=\"MO\">Missouri</option>
                            <option value=\"OK\">Oklahoma</option>
                            <option value=\"SD\">South Dakota</option>
                            <option value=\"TX\">Texas</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Grouped</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_group form-control\">
                            <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                              <option value=\"AK\">Alaska</option>
                              <option value=\"HI\">Hawaii</option>
                            </optgroup>
                            <optgroup label=\"Pacific Time Zone\">
                              <option value=\"CA\">California</option>
                              <option value=\"NV\">Nevada</option>
                              <option value=\"OR\">Oregon</option>
                              <option value=\"WA\">Washington</option>
                            </optgroup>
                            <optgroup label=\"Mountain Time Zone\">
                              <option value=\"AZ\">Arizona</option>
                              <option value=\"CO\">Colorado</option>
                              <option value=\"ID\">Idaho</option>
                              <option value=\"MT\">Montana</option>
                              <option value=\"NE\">Nebraska</option>
                              <option value=\"NM\">New Mexico</option>
                              <option value=\"ND\">North Dakota</option>
                              <option value=\"UT\">Utah</option>
                              <option value=\"WY\">Wyoming</option>
                            </optgroup>
                            <optgroup label=\"Central Time Zone\">
                              <option value=\"AL\">Alabama</option>
                              <option value=\"AR\">Arkansas</option>
                              <option value=\"IL\">Illinois</option>
                              <option value=\"IA\">Iowa</option>
                              <option value=\"KS\">Kansas</option>
                              <option value=\"KY\">Kentucky</option>
                              <option value=\"LA\">Louisiana</option>
                              <option value=\"MN\">Minnesota</option>
                              <option value=\"MS\">Mississippi</option>
                              <option value=\"MO\">Missouri</option>
                              <option value=\"OK\">Oklahoma</option>
                              <option value=\"SD\">South Dakota</option>
                              <option value=\"TX\">Texas</option>
                              <option value=\"TN\">Tennessee</option>
                              <option value=\"WI\">Wisconsin</option>
                            </optgroup>
                            <optgroup label=\"Eastern Time Zone\">
                              <option value=\"CT\">Connecticut</option>
                              <option value=\"DE\">Delaware</option>
                              <option value=\"FL\">Florida</option>
                              <option value=\"GA\">Georgia</option>
                              <option value=\"IN\">Indiana</option>
                              <option value=\"ME\">Maine</option>
                              <option value=\"MD\">Maryland</option>
                              <option value=\"MA\">Massachusetts</option>
                              <option value=\"MI\">Michigan</option>
                              <option value=\"NH\">New Hampshire</option>
                              <option value=\"NJ\">New Jersey</option>
                              <option value=\"NY\">New York</option>
                              <option value=\"NC\">North Carolina</option>
                              <option value=\"OH\">Ohio</option>
                              <option value=\"PA\">Pennsylvania</option>
                              <option value=\"RI\">Rhode Island</option>
                              <option value=\"SC\">South Carolina</option>
                              <option value=\"VT\">Vermont</option>
                              <option value=\"VA\">Virginia</option>
                              <option value=\"WV\">West Virginia</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Select Multiple</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <select class=\"select2_multiple form-control\" multiple=\"multiple\">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                            <option>Option five</option>
                            <option>Option six</option>
                          </select>
                        </div>
                      </div>

                      <div class=\"control-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Input Tags</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input id=\"tags_1\" type=\"text\" class=\"tags form-control\" value=\"social, adverts, sales\" />
                          <div id=\"suggestions-container\" style=\"position: relative; float: left; width: 250px; margin: 10px;\"></div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-md-3 col-sm-3 col-xs-12 control-label\">Checkboxes and radios
                          <br>
                          <small class=\"text-navy\">Normal Bootstrap elements</small>
                        </label>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" value=\"\"> Option one. select more than one options
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" value=\"\"> Option two. select more than one options
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" checked=\"\" value=\"option1\" id=\"optionsRadios1\" name=\"optionsRadios\"> Option one. only select one option
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" value=\"option2\" id=\"optionsRadios2\" name=\"optionsRadios\"> Option two. only select one option
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"col-md-3 col-sm-3 col-xs-12 control-label\">Checkboxes and radios
                          <br>
                          <small class=\"text-navy\">Normal Bootstrap elements</small>
                        </label>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" checked=\"checked\"> Checked
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\"> Unchecked
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" disabled=\"disabled\"> Disabled
                            </label>
                          </div>
                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" class=\"flat\" disabled=\"disabled\" checked=\"checked\"> Disabled & checked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" checked name=\"iCheck\"> Checked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck\"> Unchecked
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck\" disabled=\"disabled\"> Disabled
                            </label>
                          </div>
                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" class=\"flat\" name=\"iCheck3\" disabled=\"disabled\" checked> Disabled & Checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Switch</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" checked /> Checked
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" /> Unchecked
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" /> Disabled
                            </label>
                          </div>
                          <div class=\"\">
                            <label>
                              <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" checked=\"checked\" /> Disabled Checked
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>


              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Form Buttons <small>Sessions</small></h2>
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

                    <form class=\"form-horizontal form-label-left\">

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Button addons</label>

                        <div class=\"col-sm-9\">
                          <div class=\"input-group\">
                            <span class=\"input-group-btn\">
                                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                                          </span>
                            <input type=\"text\" class=\"form-control\">
                          </div>
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <span class=\"input-group-btn\">
                                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                                          </span>
                          </div>
                        </div>
                      </div>
                      <div class=\"divider-dashed\"></div>

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Button addons</label>

                        <div class=\"col-sm-9\">
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" aria-label=\"Text input with dropdown button\">
                            <div class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Action <span class=\"caret\"></span>
                              </button>
                              <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                <li><a href=\"#\">Action</a>
                                </li>
                                <li><a href=\"#\">Another action</a>
                                </li>
                                <li><a href=\"#\">Something else here</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a>
                                </li>
                              </ul>
                            </div>
                            <!-- /btn-group -->
                          </div>
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\">
                            <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-primary\">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Text areas<small>Sessions</small></h2>
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
                  <div id=\"alerts\"></div>
                  <div class=\"btn-toolbar editor\" data-role=\"editor-toolbar\" data-target=\"#editor\">
                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Font\"><i class=\"fa fa-font\"></i><b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                      </ul>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Font Size\"><i class=\"fa fa-text-height\"></i>&nbsp;<b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li>
                          <a data-edit=\"fontSize 5\">
                            <p style=\"font-size:17px\">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit=\"fontSize 3\">
                            <p style=\"font-size:14px\">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit=\"fontSize 1\">
                            <p style=\"font-size:11px\">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"bold\" title=\"Bold (Ctrl/Cmd+B)\"><i class=\"fa fa-bold\"></i></a>
                      <a class=\"btn\" data-edit=\"italic\" title=\"Italic (Ctrl/Cmd+I)\"><i class=\"fa fa-italic\"></i></a>
                      <a class=\"btn\" data-edit=\"strikethrough\" title=\"Strikethrough\"><i class=\"fa fa-strikethrough\"></i></a>
                      <a class=\"btn\" data-edit=\"underline\" title=\"Underline (Ctrl/Cmd+U)\"><i class=\"fa fa-underline\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"insertunorderedlist\" title=\"Bullet list\"><i class=\"fa fa-list-ul\"></i></a>
                      <a class=\"btn\" data-edit=\"insertorderedlist\" title=\"Number list\"><i class=\"fa fa-list-ol\"></i></a>
                      <a class=\"btn\" data-edit=\"outdent\" title=\"Reduce indent (Shift+Tab)\"><i class=\"fa fa-dedent\"></i></a>
                      <a class=\"btn\" data-edit=\"indent\" title=\"Indent (Tab)\"><i class=\"fa fa-indent\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"justifyleft\" title=\"Align Left (Ctrl/Cmd+L)\"><i class=\"fa fa-align-left\"></i></a>
                      <a class=\"btn\" data-edit=\"justifycenter\" title=\"Center (Ctrl/Cmd+E)\"><i class=\"fa fa-align-center\"></i></a>
                      <a class=\"btn\" data-edit=\"justifyright\" title=\"Align Right (Ctrl/Cmd+R)\"><i class=\"fa fa-align-right\"></i></a>
                      <a class=\"btn\" data-edit=\"justifyfull\" title=\"Justify (Ctrl/Cmd+J)\"><i class=\"fa fa-align-justify\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"Hyperlink\"><i class=\"fa fa-link\"></i></a>
                      <div class=\"dropdown-menu input-append\">
                        <input class=\"span2\" placeholder=\"URL\" type=\"text\" data-edit=\"createLink\" />
                        <button class=\"btn\" type=\"button\">Add</button>
                      </div>
                      <a class=\"btn\" data-edit=\"unlink\" title=\"Remove Hyperlink\"><i class=\"fa fa-cut\"></i></a>
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" title=\"Insert picture (or just drag & drop)\" id=\"pictureBtn\"><i class=\"fa fa-picture-o\"></i></a>
                      <input type=\"file\" data-role=\"magic-overlay\" data-target=\"#pictureBtn\" data-edit=\"insertImage\" />
                    </div>

                    <div class=\"btn-group\">
                      <a class=\"btn\" data-edit=\"undo\" title=\"Undo (Ctrl/Cmd+Z)\"><i class=\"fa fa-undo\"></i></a>
                      <a class=\"btn\" data-edit=\"redo\" title=\"Redo (Ctrl/Cmd+Y)\"><i class=\"fa fa-repeat\"></i></a>
                    </div>
                  </div>

                  <div id=\"editor\" class=\"editor-wrapper\"></div>

                  <textarea name=\"descr\" id=\"descr\" style=\"display:none;\"></textarea>
                  
                  <br />

                  <div class=\"ln_solid\"></div>

                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Resizable Text area</label>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                      <textarea class=\"resizable_textarea form-control\" placeholder=\"This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out...\"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Form Input Grid <small>form input </small></h2>
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

                <div class=\"row\">

                  <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-12\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
                  </div>


                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>

                  <div class=\"col-md-1 col-sm-12 col-xs-12 form-group\">
                    <input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
                  </div>
                </div>

              </div>
            </div>


            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Form Design <small>different form elements</small></h2>
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
                <br />

                <h4>Horizontal labels</h4>
                <p class=\"font-gray-dark\">
                  Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
                </p>
                <form class=\"form-horizontal form-label-left\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3\" for=\"first-name\">First Name <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-7\">
                      <input type=\"text\" id=\"first-name2\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3\" for=\"last-name\">Last Name <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-7\">
                      <input type=\"text\" id=\"last-name2\" name=\"last-name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                </form>


                <h4>Vertical labels</h4>
                <p class=\"font-gray-dark\">
                  For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                </p>
                <div class=\"col-md-8 center-margin\">
                  <form class=\"form-horizontal form-label-left\">
                    <div class=\"form-group\">
                      <label>Email address</label>
                      <input type=\"email\" class=\"form-control\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"form-group\">
                      <label>Password</label>
                      <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                    </div>

                  </form>
                </div>

                <h4>Inline Form </h4>
                <p class=\"font-gray-dark\">
                  For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                </p>
                <form class=\"form-inline\">
                  <div class=\"form-group\">
                    <label for=\"ex3\">Email address</label>
                    <input type=\"text\" id=\"ex3\" class=\"form-control\" placeholder=\" \">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"ex4\">Email address</label>
                    <input type=\"email\" id=\"ex4\" class=\"form-control\" placeholder=\" \">
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\"> Remember me
                    </label>
                  </div>
                  <button type=\"submit\" class=\"btn btn-default\">Send invitation</button>
                </form>
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
";
        
        $__internal_e02429f0ce7b00786cb208f7fa653f7c99dc13739ab0e4b8697ebaff8f863c1a->leave($__internal_e02429f0ce7b00786cb208f7fa653f7c99dc13739ab0e4b8697ebaff8f863c1a_prof);

    }

    // line 1201
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a85dbe703950080b003ed47ec893e8bd5ffee61e9ac2063a04c5f3410b6b08f7 = $this->env->getExtension("native_profiler");
        $__internal_a85dbe703950080b003ed47ec893e8bd5ffee61e9ac2063a04c5f3410b6b08f7->enter($__internal_a85dbe703950080b003ed47ec893e8bd5ffee61e9ac2063a04c5f3410b6b08f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1202
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 1203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 1204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 1206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 1210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 1212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 1216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"js/datepicker/daterangepicker.js')}}\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 1219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 1223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 1225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 1229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 1231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 1233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 1235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 1238
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>


<script >
  \$(\"#last-name\").numeric();
  \$(\".integer\").numeric(false, function() { alert(\"Integers only\"); this.value = \"\"; this.focus(); });
  \$(\".positive\").numeric({ negative: false }, function() { alert(\"No negative values\"); this.value = \"\"; this.focus(); });
  \$(\".positive-integer\").numeric({ decimal: false, negative: false }, function() { alert(\"Positive integers only\"); this.value = \"\"; this.focus(); });
    \$(\".decimal-2-places\").numeric({ decimalPlaces: 2 });
  \$(\"#remove\").click(
    function(e)
    {
      e.preventDefault();
      \$(\".numeric,.integer,.positive,.positive-integer,.decimal-2-places\").removeNumeric();
    }
  );
  </script>
    <!-- bootstrap-daterangepicker -->
    <script>
      \$(document).ready(function() {
        \$('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: \"picker_4\"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
      \$(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
          \$.each(fonts, function(idx, fontName) {
            fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
          });
          \$('a[title]').tooltip({
            container: 'body'
          });
          \$('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              \$(this).change();
            });

          \$('[data-role=magic-overlay]').each(function() {
            var overlay = \$(this),
              target = \$(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
            var editorOffset = \$('#editor').offset();

            \$('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + \$('#editor').innerWidth() - 35
            });
          } else {
            \$('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = \"Unsupported format \" + detail;
          } else {
            console.log(\"error uploading file\", reason, detail);
          }
          \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        \$('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
      \$(document).ready(function() {
        \$(\".select2_single\").select2({
          placeholder: \"Select a state\",
          allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
          maximumSelectionLength: 4,
          placeholder: \"With Max Selection limit 4\",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- jQuery Tags Input -->
    <script>
      function onAddTag(tag) {
        alert(\"Added a tag: \" + tag);
      }

      function onRemoveTag(tag) {
        alert(\"Removed a tag: \" + tag);
      }

      function onChangeTag(input, tag) {
        alert(\"Changed a tag: \" + tag);
      }

      \$(document).ready(function() {
        \$('#tags_1').tagsInput({
          width: 'auto'
        });
      });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Parsley -->
    <script>
      \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
          validateFront();
        });
        \$('#demo-form .btn').on('click', function() {
          \$('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === \$('#demo-form').parsley().isValid()) {
            \$('.bs-callout-info').removeClass('hidden');
            \$('.bs-callout-warning').addClass('hidden');
          } else {
            \$('.bs-callout-info').addClass('hidden');
            \$('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
          validateFront();
        });
        \$('#demo-form2 .btn').on('click', function() {
          \$('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === \$('#demo-form2').parsley().isValid()) {
            \$('.bs-callout-info').removeClass('hidden');
            \$('.bs-callout-warning').addClass('hidden');
          } else {
            \$('.bs-callout-info').addClass('hidden');
            \$('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
      \$(document).ready(function() {
        autosize(\$('.resizable_textarea'));
      });
    </script>
    <!-- /Autosize -->

    <!-- jQuery autocomplete -->
    <script>
      \$(document).ready(function() {
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

        var countriesArray = \$.map(countries, function(value, key) {
          return {
            value: value,
            data: key
          };
        });

        // initialize autocomplete with custom appendTo
        \$('#autocomplete-custom-append').autocomplete({
          lookup: countriesArray,
          appendTo: '#autocomplete-container'
        });
      });
    </script>
    <!-- /jQuery autocomplete -->

    <!-- Starrr -->
    <script>
      \$(document).ready(function() {
        \$(\".stars\").starrr();

        \$('.stars-existing').starrr({
          rating: 4
        });

        \$('.stars').on('starrr:change', function (e, value) {
          \$('.stars-count').html(value);
        });

        \$('.stars-existing').on('starrr:change', function (e, value) {
          \$('.stars-count-existing').html(value);
        });
      });
    </script>
    <!-- /Starrr -->
 ";
        
        $__internal_a85dbe703950080b003ed47ec893e8bd5ffee61e9ac2063a04c5f3410b6b08f7->leave($__internal_a85dbe703950080b003ed47ec893e8bd5ffee61e9ac2063a04c5f3410b6b08f7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:testpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1393 => 1238,  1387 => 1235,  1382 => 1233,  1377 => 1231,  1372 => 1229,  1367 => 1227,  1362 => 1225,  1357 => 1223,  1352 => 1221,  1348 => 1220,  1344 => 1219,  1338 => 1216,  1333 => 1214,  1328 => 1212,  1323 => 1210,  1318 => 1208,  1313 => 1206,  1308 => 1204,  1304 => 1203,  1301 => 1202,  1295 => 1201,  123 => 35,  121 => 34,  117 => 32,  111 => 31,  102 => 28,  96 => 25,  91 => 23,  86 => 21,  81 => 19,  76 => 17,  71 => 15,  66 => 13,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* {% block title %}Dashboard{% endblock %}*/
/*  {% block stylesheets %}*/
/* */
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*    */
/*     <!-- Bootstrap -->*/
/*     <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap-wysiwyg -->*/
/*     <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">*/
/*     <!-- Select2 -->*/
/*     <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">*/
/*     <!-- Switchery -->*/
/*     <link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">*/
/*     <!-- starrr -->*/
/*     <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*   {% endblock %}*/
/* */
/*     {% block body %}*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*       {% include 'AdminBundle::menu.html.twig' %}*/
/*             <!-- /menu footer buttons -->*/
/*           </div>*/
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
/*         <!-- /top navigation -->*/
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <div class="">*/
/* */
/*             <div class="page-title">*/
/*               <div class="title_left">*/
/*                 <h3>Form Elements</h3>*/
/*               </div>*/
/* */
/*               <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                   <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for...">*/
/*                     <span class="input-group-btn">*/
/*                       <button class="btn btn-default" type="button">Go!</button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="row">*/
/*               <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Form Design <small>different form elements</small></h2>*/
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
/*                     <br />*/
/*                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <div id="gender" class="btn-group" data-toggle="buttons">*/
/*                             <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;*/
/*                             </label>*/
/*                             <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="female"> Female*/
/*                             </label>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     */
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="ln_solid"></div>*/
/*                       <div class="form-group">*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                           <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                           <button type="submit" class="btn btn-success">Submit</button>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*               <div class="col-md-6 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Form Design <small>different form elements</small></h2>*/
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
/*                     <br />*/
/*                     <form class="form-horizontal form-label-left input_mask">*/
/* */
/*                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">*/
/*                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">*/
/*                         <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>*/
/*                       </div>*/
/* */
/*                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">*/
/*                         <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>*/
/*                       </div>*/
/* */
/*                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">*/
/*                         <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">*/
/*                         <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>*/
/*                       </div>*/
/* */
/*                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">*/
/*                         <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>*/
/*                       </div>*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" placeholder="Default Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="ln_solid"></div>*/
/*                       <div class="form-group">*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">*/
/*                           <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                           <button type="submit" class="btn btn-success">Submit</button>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </form>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Star Rating</h2>*/
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
/*                     <h4>Star Ratings<small> Hover and click on a star</small></h4>*/
/*                     <div>*/
/*                       <div class="starrr stars"></div>*/
/*                       You gave a rating of <span class="stars-count">0</span> star(s)*/
/*                     </div>*/
/* */
/*                     <p>Also you can give a default rating by adding attribute data-rating</p>*/
/*                     <div class="starrr stars-existing" data-rating='4'></div>*/
/*                     You gave a rating of <span class="stars-count-existing">4</span> star(s)*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Registration Form <small>Click to validate</small></h2>*/
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
/* */
/*                     <!-- start form for validation -->*/
/*                     <form id="demo-form" data-parsley-validate>*/
/*                       <label for="fullname">Full Name * :</label>*/
/*                       <input type="text" id="fullname" class="form-control" name="fullname" required />*/
/* */
/*                       <label for="email">Email * :</label>*/
/*                       <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />*/
/* */
/*                       <label>Gender *:</label>*/
/*                       <p>*/
/*                         M:*/
/*                         <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:*/
/*                         <input type="radio" class="flat" name="gender" id="genderF" value="F" />*/
/*                       </p>*/
/* */
/*                       <label>Hobbies (2 minimum):</label>*/
/*                       <p style="padding: 5px;">*/
/*                         <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing*/
/*                         <br />*/
/* */
/*                         <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running*/
/*                         <br />*/
/* */
/*                         <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating*/
/*                         <br />*/
/* */
/*                         <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping*/
/*                         <br />*/
/*                         <p>*/
/* */
/*                           <label for="heard">Heard us by *:</label>*/
/*                           <select id="heard" class="form-control" required>*/
/*                             <option value="">Choose..</option>*/
/*                             <option value="press">Press</option>*/
/*                             <option value="net">Internet</option>*/
/*                             <option value="mouth">Word of mouth</option>*/
/*                           </select>*/
/* */
/*                           <label for="message">Message (20 chars min, 100 max) :</label>*/
/*                           <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."*/
/*                             data-parsley-validation-threshold="10"></textarea>*/
/* */
/*                           <br/>*/
/*                           <span class="btn btn-primary">Validate form</span>*/
/* */
/*                     </form>*/
/*                     <!-- end form for validations -->*/
/* */
/*                   </div>*/
/*                 </div>*/
/* */
/* */
/*               </div>*/
/* */
/*               <div class="col-md-6 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Form Basic Elements <small>different form elements</small></h2>*/
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
/*                     <br />*/
/*                     <form class="form-horizontal form-label-left">*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" placeholder="Default Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="password" class="form-control" value="passwordonetwo">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />*/
/*                           <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <select class="form-control">*/
/*                             <option>Choose option</option>*/
/*                             <option>Option one</option>*/
/*                             <option>Option two</option>*/
/*                             <option>Option three</option>*/
/*                             <option>Option four</option>*/
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <select class="select2_single form-control" tabindex="-1">*/
/*                             <option></option>*/
/*                             <option value="AK">Alaska</option>*/
/*                             <option value="HI">Hawaii</option>*/
/*                             <option value="CA">California</option>*/
/*                             <option value="NV">Nevada</option>*/
/*                             <option value="OR">Oregon</option>*/
/*                             <option value="WA">Washington</option>*/
/*                             <option value="AZ">Arizona</option>*/
/*                             <option value="CO">Colorado</option>*/
/*                             <option value="ID">Idaho</option>*/
/*                             <option value="MT">Montana</option>*/
/*                             <option value="NE">Nebraska</option>*/
/*                             <option value="NM">New Mexico</option>*/
/*                             <option value="ND">North Dakota</option>*/
/*                             <option value="UT">Utah</option>*/
/*                             <option value="WY">Wyoming</option>*/
/*                             <option value="AR">Arkansas</option>*/
/*                             <option value="IL">Illinois</option>*/
/*                             <option value="IA">Iowa</option>*/
/*                             <option value="KS">Kansas</option>*/
/*                             <option value="KY">Kentucky</option>*/
/*                             <option value="LA">Louisiana</option>*/
/*                             <option value="MN">Minnesota</option>*/
/*                             <option value="MS">Mississippi</option>*/
/*                             <option value="MO">Missouri</option>*/
/*                             <option value="OK">Oklahoma</option>*/
/*                             <option value="SD">South Dakota</option>*/
/*                             <option value="TX">Texas</option>*/
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <select class="select2_group form-control">*/
/*                             <optgroup label="Alaskan/Hawaiian Time Zone">*/
/*                               <option value="AK">Alaska</option>*/
/*                               <option value="HI">Hawaii</option>*/
/*                             </optgroup>*/
/*                             <optgroup label="Pacific Time Zone">*/
/*                               <option value="CA">California</option>*/
/*                               <option value="NV">Nevada</option>*/
/*                               <option value="OR">Oregon</option>*/
/*                               <option value="WA">Washington</option>*/
/*                             </optgroup>*/
/*                             <optgroup label="Mountain Time Zone">*/
/*                               <option value="AZ">Arizona</option>*/
/*                               <option value="CO">Colorado</option>*/
/*                               <option value="ID">Idaho</option>*/
/*                               <option value="MT">Montana</option>*/
/*                               <option value="NE">Nebraska</option>*/
/*                               <option value="NM">New Mexico</option>*/
/*                               <option value="ND">North Dakota</option>*/
/*                               <option value="UT">Utah</option>*/
/*                               <option value="WY">Wyoming</option>*/
/*                             </optgroup>*/
/*                             <optgroup label="Central Time Zone">*/
/*                               <option value="AL">Alabama</option>*/
/*                               <option value="AR">Arkansas</option>*/
/*                               <option value="IL">Illinois</option>*/
/*                               <option value="IA">Iowa</option>*/
/*                               <option value="KS">Kansas</option>*/
/*                               <option value="KY">Kentucky</option>*/
/*                               <option value="LA">Louisiana</option>*/
/*                               <option value="MN">Minnesota</option>*/
/*                               <option value="MS">Mississippi</option>*/
/*                               <option value="MO">Missouri</option>*/
/*                               <option value="OK">Oklahoma</option>*/
/*                               <option value="SD">South Dakota</option>*/
/*                               <option value="TX">Texas</option>*/
/*                               <option value="TN">Tennessee</option>*/
/*                               <option value="WI">Wisconsin</option>*/
/*                             </optgroup>*/
/*                             <optgroup label="Eastern Time Zone">*/
/*                               <option value="CT">Connecticut</option>*/
/*                               <option value="DE">Delaware</option>*/
/*                               <option value="FL">Florida</option>*/
/*                               <option value="GA">Georgia</option>*/
/*                               <option value="IN">Indiana</option>*/
/*                               <option value="ME">Maine</option>*/
/*                               <option value="MD">Maryland</option>*/
/*                               <option value="MA">Massachusetts</option>*/
/*                               <option value="MI">Michigan</option>*/
/*                               <option value="NH">New Hampshire</option>*/
/*                               <option value="NJ">New Jersey</option>*/
/*                               <option value="NY">New York</option>*/
/*                               <option value="NC">North Carolina</option>*/
/*                               <option value="OH">Ohio</option>*/
/*                               <option value="PA">Pennsylvania</option>*/
/*                               <option value="RI">Rhode Island</option>*/
/*                               <option value="SC">South Carolina</option>*/
/*                               <option value="VT">Vermont</option>*/
/*                               <option value="VA">Virginia</option>*/
/*                               <option value="WV">West Virginia</option>*/
/*                             </optgroup>*/
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <select class="select2_multiple form-control" multiple="multiple">*/
/*                             <option>Choose option</option>*/
/*                             <option>Option one</option>*/
/*                             <option>Option two</option>*/
/*                             <option>Option three</option>*/
/*                             <option>Option four</option>*/
/*                             <option>Option five</option>*/
/*                             <option>Option six</option>*/
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                       <div class="control-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />*/
/*                           <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios*/
/*                           <br>*/
/*                           <small class="text-navy">Normal Bootstrap elements</small>*/
/*                         </label>*/
/* */
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" value=""> Option one. select more than one options*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" value=""> Option two. select more than one options*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option*/
/*                             </label>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios*/
/*                           <br>*/
/*                           <small class="text-navy">Normal Bootstrap elements</small>*/
/*                         </label>*/
/* */
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" class="flat" checked="checked"> Checked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" class="flat"> Unchecked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" class="flat" disabled="disabled"> Disabled*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" class="flat" checked name="iCheck"> Checked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" class="flat" name="iCheck"> Unchecked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked*/
/*                             </label>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                           <div class="">*/
/*                             <label>*/
/*                               <input type="checkbox" class="js-switch" checked /> Checked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="">*/
/*                             <label>*/
/*                               <input type="checkbox" class="js-switch" /> Unchecked*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="">*/
/*                             <label>*/
/*                               <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled*/
/*                             </label>*/
/*                           </div>*/
/*                           <div class="">*/
/*                             <label>*/
/*                               <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked*/
/*                             </label>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/* */
/*                       <div class="ln_solid"></div>*/
/*                       <div class="form-group">*/
/*                         <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">*/
/*                           <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                           <button type="submit" class="btn btn-success">Submit</button>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/* */
/*               <div class="col-md-6 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Form Buttons <small>Sessions</small></h2>*/
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
/* */
/*                     <form class="form-horizontal form-label-left">*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">Button addons</label>*/
/* */
/*                         <div class="col-sm-9">*/
/*                           <div class="input-group">*/
/*                             <span class="input-group-btn">*/
/*                                               <button type="button" class="btn btn-primary">Go!</button>*/
/*                                           </span>*/
/*                             <input type="text" class="form-control">*/
/*                           </div>*/
/*                           <div class="input-group">*/
/*                             <input type="text" class="form-control">*/
/*                             <span class="input-group-btn">*/
/*                                               <button type="button" class="btn btn-primary">Go!</button>*/
/*                                           </span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="divider-dashed"></div>*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">Button addons</label>*/
/* */
/*                         <div class="col-sm-9">*/
/*                           <div class="input-group">*/
/*                             <input type="text" class="form-control" aria-label="Text input with dropdown button">*/
/*                             <div class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>*/
/*                               </button>*/
/*                               <ul class="dropdown-menu dropdown-menu-right" role="menu">*/
/*                                 <li><a href="#">Action</a>*/
/*                                 </li>*/
/*                                 <li><a href="#">Another action</a>*/
/*                                 </li>*/
/*                                 <li><a href="#">Something else here</a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a>*/
/*                                 </li>*/
/*                               </ul>*/
/*                             </div>*/
/*                             <!-- /btn-group -->*/
/*                           </div>*/
/*                           <div class="input-group">*/
/*                             <input type="text" class="form-control">*/
/*                             <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-primary">Go!</button>*/
/*                             </span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Text areas<small>Sessions</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <div id="alerts"></div>*/
/*                   <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">*/
/*                     <div class="btn-group">*/
/*                       <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>*/
/*                       <ul class="dropdown-menu">*/
/*                       </ul>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>*/
/*                       <ul class="dropdown-menu">*/
/*                         <li>*/
/*                           <a data-edit="fontSize 5">*/
/*                             <p style="font-size:17px">Huge</p>*/
/*                           </a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a data-edit="fontSize 3">*/
/*                             <p style="font-size:14px">Normal</p>*/
/*                           </a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a data-edit="fontSize 1">*/
/*                             <p style="font-size:11px">Small</p>*/
/*                           </a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>*/
/*                       <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>*/
/*                       <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>*/
/*                       <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>*/
/*                       <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>*/
/*                       <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>*/
/*                       <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>*/
/*                       <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>*/
/*                       <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>*/
/*                       <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>*/
/*                       <div class="dropdown-menu input-append">*/
/*                         <input class="span2" placeholder="URL" type="text" data-edit="createLink" />*/
/*                         <button class="btn" type="button">Add</button>*/
/*                       </div>*/
/*                       <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>*/
/*                       <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                       <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>*/
/*                       <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div id="editor" class="editor-wrapper"></div>*/
/* */
/*                   <textarea name="descr" id="descr" style="display:none;"></textarea>*/
/*                   */
/*                   <br />*/
/* */
/*                   <div class="ln_solid"></div>*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>*/
/*                     <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                       <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="x_panel">*/
/*               <div class="x_title">*/
/*                 <h2>Form Input Grid <small>form input </small></h2>*/
/*                 <ul class="nav navbar-right panel_toolbox">*/
/*                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                   </li>*/
/*                   <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                       <li><a href="#">Settings 1</a>*/
/*                       </li>*/
/*                       <li><a href="#">Settings 2</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                   </li>*/
/*                 </ul>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*               <div class="x_content">*/
/* */
/*                 <div class="row">*/
/* */
/*                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-12" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-6 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-6" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-6 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-6" class="form-control">*/
/*                   </div>*/
/* */
/* */
/*                   <div class="col-md-4 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-4" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-4 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-4" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-4 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-4" class="form-control">*/
/*                   </div>*/
/* */
/* */
/*                   <div class="col-md-3 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-3" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-3 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-3" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-3 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-3" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-3 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-3" class="form-control">*/
/*                   </div>*/
/* */
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-2 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-2" class="form-control">*/
/*                   </div>*/
/* */
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/* */
/*                   <div class="col-md-1 col-sm-12 col-xs-12 form-group">*/
/*                     <input type="text" placeholder=".col-md-1" class="form-control">*/
/*                   </div>*/
/*                 </div>*/
/* */
/*               </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="x_panel">*/
/*               <div class="x_title">*/
/*                 <h2>Form Design <small>different form elements</small></h2>*/
/*                 <ul class="nav navbar-right panel_toolbox">*/
/*                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                   </li>*/
/*                   <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                       <li><a href="#">Settings 1</a>*/
/*                       </li>*/
/*                       <li><a href="#">Settings 2</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                   </li>*/
/*                 </ul>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*               <div class="x_content">*/
/*                 <br />*/
/* */
/*                 <h4>Horizontal labels</h4>*/
/*                 <p class="font-gray-dark">*/
/*                   Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.*/
/*                 </p>*/
/*                 <form class="form-horizontal form-label-left">*/
/*                   <div class="form-group">*/
/*                     <label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>*/
/*                     </label>*/
/*                     <div class="col-md-7">*/
/*                       <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="control-label col-md-3" for="last-name">Last Name <span class="required">*</span>*/
/*                     </label>*/
/*                     <div class="col-md-7">*/
/*                       <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*                   </div>*/
/*                 </form>*/
/* */
/* */
/*                 <h4>Vertical labels</h4>*/
/*                 <p class="font-gray-dark">*/
/*                   For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.*/
/*                 </p>*/
/*                 <div class="col-md-8 center-margin">*/
/*                   <form class="form-horizontal form-label-left">*/
/*                     <div class="form-group">*/
/*                       <label>Email address</label>*/
/*                       <input type="email" class="form-control" placeholder="Enter email">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label>Password</label>*/
/*                       <input type="password" class="form-control" placeholder="Password">*/
/*                     </div>*/
/* */
/*                   </form>*/
/*                 </div>*/
/* */
/*                 <h4>Inline Form </h4>*/
/*                 <p class="font-gray-dark">*/
/*                   For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.*/
/*                 </p>*/
/*                 <form class="form-inline">*/
/*                   <div class="form-group">*/
/*                     <label for="ex3">Email address</label>*/
/*                     <input type="text" id="ex3" class="form-control" placeholder=" ">*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label for="ex4">Email address</label>*/
/*                     <input type="email" id="ex4" class="form-control" placeholder=" ">*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       <input type="checkbox"> Remember me*/
/*                     </label>*/
/*                   </div>*/
/*                   <button type="submit" class="btn btn-default">Send invitation</button>*/
/*                 </form>*/
/*               </div>*/
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
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*        <script src="{{asset('vendors/jquery.numeric.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/*     <!-- bootstrap-progressbar -->*/
/*     <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script src="{{asset('js/moment/moment.min.js')}}"></script>*/
/*     <script src="js/datepicker/daterangepicker.js')}}"></script>*/
/*     <!-- bootstrap-wysiwyg -->*/
/*     <script src="{{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>*/
/*     <script src="{{asset('vendors/google-code-prettify/src/prettify.js')}}"></script>*/
/*     <!-- jQuery Tags Input -->*/
/*     <script src="{{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>*/
/*     <!-- Switchery -->*/
/*     <script src="{{asset('vendors/switchery/dist/switchery.min.js')}}"></script>*/
/*     <!-- Select2 -->*/
/*     <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <!-- Parsley -->*/
/*     <script src="{{asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>*/
/*     <!-- Autosize -->*/
/*     <script src="{{asset('vendors/autosize/dist/autosize.min.js')}}"></script>*/
/*     <!-- jQuery autocomplete -->*/
/*     <script src="{{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>*/
/*     <!-- starrr -->*/
/*     <script src="{{asset('vendors/starrr/dist/starrr.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/* */
/* */
/* <script >*/
/*   $("#last-name").numeric();*/
/*   $(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });*/
/*   $(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });*/
/*   $(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });*/
/*     $(".decimal-2-places").numeric({ decimalPlaces: 2 });*/
/*   $("#remove").click(*/
/*     function(e)*/
/*     {*/
/*       e.preventDefault();*/
/*       $(".numeric,.integer,.positive,.positive-integer,.decimal-2-places").removeNumeric();*/
/*     }*/
/*   );*/
/*   </script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $('#birthday').daterangepicker({*/
/*           singleDatePicker: true,*/
/*           calender_style: "picker_4"*/
/*         }, function(start, end, label) {*/
/*           console.log(start.toISOString(), end.toISOString(), label);*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /bootstrap-daterangepicker -->*/
/* */
/*     <!-- bootstrap-wysiwyg -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         function initToolbarBootstrapBindings() {*/
/*           var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',*/
/*               'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',*/
/*               'Times New Roman', 'Verdana'*/
/*             ],*/
/*             fontTarget = $('[title=Font]').siblings('.dropdown-menu');*/
/*           $.each(fonts, function(idx, fontName) {*/
/*             fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));*/
/*           });*/
/*           $('a[title]').tooltip({*/
/*             container: 'body'*/
/*           });*/
/*           $('.dropdown-menu input').click(function() {*/
/*               return false;*/
/*             })*/
/*             .change(function() {*/
/*               $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');*/
/*             })*/
/*             .keydown('esc', function() {*/
/*               this.value = '';*/
/*               $(this).change();*/
/*             });*/
/* */
/*           $('[data-role=magic-overlay]').each(function() {*/
/*             var overlay = $(this),*/
/*               target = $(overlay.data('target'));*/
/*             overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());*/
/*           });*/
/* */
/*           if ("onwebkitspeechchange" in document.createElement("input")) {*/
/*             var editorOffset = $('#editor').offset();*/
/* */
/*             $('.voiceBtn').css('position', 'absolute').offset({*/
/*               top: editorOffset.top,*/
/*               left: editorOffset.left + $('#editor').innerWidth() - 35*/
/*             });*/
/*           } else {*/
/*             $('.voiceBtn').hide();*/
/*           }*/
/*         }*/
/* */
/*         function showErrorAlert(reason, detail) {*/
/*           var msg = '';*/
/*           if (reason === 'unsupported-file-type') {*/
/*             msg = "Unsupported format " + detail;*/
/*           } else {*/
/*             console.log("error uploading file", reason, detail);*/
/*           }*/
/*           $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +*/
/*             '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');*/
/*         }*/
/* */
/*         initToolbarBootstrapBindings();*/
/* */
/*         $('#editor').wysiwyg({*/
/*           fileUploadError: showErrorAlert*/
/*         });*/
/* */
/*         window.prettyPrint;*/
/*         prettyPrint();*/
/*       });*/
/*     </script>*/
/*     <!-- /bootstrap-wysiwyg -->*/
/* */
/*     <!-- Select2 -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $(".select2_single").select2({*/
/*           placeholder: "Select a state",*/
/*           allowClear: true*/
/*         });*/
/*         $(".select2_group").select2({});*/
/*         $(".select2_multiple").select2({*/
/*           maximumSelectionLength: 4,*/
/*           placeholder: "With Max Selection limit 4",*/
/*           allowClear: true*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /Select2 -->*/
/* */
/*     <!-- jQuery Tags Input -->*/
/*     <script>*/
/*       function onAddTag(tag) {*/
/*         alert("Added a tag: " + tag);*/
/*       }*/
/* */
/*       function onRemoveTag(tag) {*/
/*         alert("Removed a tag: " + tag);*/
/*       }*/
/* */
/*       function onChangeTag(input, tag) {*/
/*         alert("Changed a tag: " + tag);*/
/*       }*/
/* */
/*       $(document).ready(function() {*/
/*         $('#tags_1').tagsInput({*/
/*           width: 'auto'*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /jQuery Tags Input -->*/
/* */
/*     <!-- Parsley -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $.listen('parsley:field:validate', function() {*/
/*           validateFront();*/
/*         });*/
/*         $('#demo-form .btn').on('click', function() {*/
/*           $('#demo-form').parsley().validate();*/
/*           validateFront();*/
/*         });*/
/*         var validateFront = function() {*/
/*           if (true === $('#demo-form').parsley().isValid()) {*/
/*             $('.bs-callout-info').removeClass('hidden');*/
/*             $('.bs-callout-warning').addClass('hidden');*/
/*           } else {*/
/*             $('.bs-callout-info').addClass('hidden');*/
/*             $('.bs-callout-warning').removeClass('hidden');*/
/*           }*/
/*         };*/
/*       });*/
/* */
/*       $(document).ready(function() {*/
/*         $.listen('parsley:field:validate', function() {*/
/*           validateFront();*/
/*         });*/
/*         $('#demo-form2 .btn').on('click', function() {*/
/*           $('#demo-form2').parsley().validate();*/
/*           validateFront();*/
/*         });*/
/*         var validateFront = function() {*/
/*           if (true === $('#demo-form2').parsley().isValid()) {*/
/*             $('.bs-callout-info').removeClass('hidden');*/
/*             $('.bs-callout-warning').addClass('hidden');*/
/*           } else {*/
/*             $('.bs-callout-info').addClass('hidden');*/
/*             $('.bs-callout-warning').removeClass('hidden');*/
/*           }*/
/*         };*/
/*       });*/
/*       try {*/
/*         hljs.initHighlightingOnLoad();*/
/*       } catch (err) {}*/
/*     </script>*/
/*     <!-- /Parsley -->*/
/* */
/*     <!-- Autosize -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         autosize($('.resizable_textarea'));*/
/*       });*/
/*     </script>*/
/*     <!-- /Autosize -->*/
/* */
/*     <!-- jQuery autocomplete -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };*/
/* */
/*         var countriesArray = $.map(countries, function(value, key) {*/
/*           return {*/
/*             value: value,*/
/*             data: key*/
/*           };*/
/*         });*/
/* */
/*         // initialize autocomplete with custom appendTo*/
/*         $('#autocomplete-custom-append').autocomplete({*/
/*           lookup: countriesArray,*/
/*           appendTo: '#autocomplete-container'*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /jQuery autocomplete -->*/
/* */
/*     <!-- Starrr -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $(".stars").starrr();*/
/* */
/*         $('.stars-existing').starrr({*/
/*           rating: 4*/
/*         });*/
/* */
/*         $('.stars').on('starrr:change', function (e, value) {*/
/*           $('.stars-count').html(value);*/
/*         });*/
/* */
/*         $('.stars-existing').on('starrr:change', function (e, value) {*/
/*           $('.stars-count-existing').html(value);*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /Starrr -->*/
/*  {% endblock %}*/
/* */
