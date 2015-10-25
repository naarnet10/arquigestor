<?php

/* AdminBundle:Admin:dashboard.html.twig */
class __TwigTemplate_51949eca85c569898991462299966ae3fc8df1135aced8132d18749797e5e286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Base:base.html.twig", "AdminBundle:Admin:dashboard.html.twig", 1);
        $this->blocks = array(
            'javascript1' => array($this, 'block_javascript1'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab6125387fa7e0d47906d2c64ca01ec767606a3a3e625b606d468eb7f812c766 = $this->env->getExtension("native_profiler");
        $__internal_ab6125387fa7e0d47906d2c64ca01ec767606a3a3e625b606d468eb7f812c766->enter($__internal_ab6125387fa7e0d47906d2c64ca01ec767606a3a3e625b606d468eb7f812c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6125387fa7e0d47906d2c64ca01ec767606a3a3e625b606d468eb7f812c766->leave($__internal_ab6125387fa7e0d47906d2c64ca01ec767606a3a3e625b606d468eb7f812c766_prof);

    }

    // line 3
    public function block_javascript1($context, array $blocks = array())
    {
        $__internal_d46645b17a6fbc9f897e6aa638dd27e823e338b2ad81ea0ce75aa702652a25d7 = $this->env->getExtension("native_profiler");
        $__internal_d46645b17a6fbc9f897e6aa638dd27e823e338b2ad81ea0ce75aa702652a25d7->enter($__internal_d46645b17a6fbc9f897e6aa638dd27e823e338b2ad81ea0ce75aa702652a25d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript1"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascript1", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/nprogress.js"), "html", null, true);
        echo "\"></script>
    <script>
        NProgress.start();
    </script>
";
        
        $__internal_d46645b17a6fbc9f897e6aa638dd27e823e338b2ad81ea0ce75aa702652a25d7->leave($__internal_d46645b17a6fbc9f897e6aa638dd27e823e338b2ad81ea0ce75aa702652a25d7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_33acf9b9abc2d8dfde1aa299db4086a7d388e3e0e3fc6271090ef4d081014f67 = $this->env->getExtension("native_profiler");
        $__internal_33acf9b9abc2d8dfde1aa299db4086a7d388e3e0e3fc6271090ef4d081014f67->enter($__internal_33acf9b9abc2d8dfde1aa299db4086a7d388e3e0e3fc6271090ef4d081014f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    <body class=\"nav-md\">

        <div class=\"container body\">
            <div class=\"main_container\">
                <div class=\"col-md-3 left_col\">
                    <div class=\"left_col scroll-view\">

                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Arquigestor!</span></a>
                        </div>
                        <div class=\"clearfix\"></div>

                        <!-- menu prile quick info -->
                        <div class=\"profile\">
                            <div class=\"profile_pic\">
                                ";
        // line 29
        echo "                                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/images/img.jpg"), "html", null, true);
        echo "\" class=\"img-circle profile_img\"  />
                            </div>
                            <div class=\"profile_info\">
                                <span>Bienvenido,</span>
                                <h2>Rafael Hernandez</h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

                            <div class=\"menu_section\">
                                <h3>General</h3>
                                <ul class=\"nav side-menu\">
                                    <li><a><i class=\"fa fa-home\"></i> Principal <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li id=\"main\" data-url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("company");
        echo "\"><a>Empresas o Clientes</a>
                                            </li>
                                            <li data-url=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("obras");
        echo "\"><a>Obras Arquitectónicas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
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
                                    <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
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
                                            <li><a href=\"calender.html\">Calender</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li><a href=\"tables.html\">Tables</a>
                                            </li>
                                            <li><a href=\"tables_dynamic.html\">Table Dynamic</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li><a href=\"chartjs.html\">Chart JS</a>
                                            </li>
                                            <li><a href=\"chartjs2.html\">Chart JS2</a>
                                            </li>
                                            <li><a href=\"morisjs.html\">Moris JS</a>
                                            </li>
                                            <li><a href=\"echarts.html\">ECharts </a>
                                            </li>
                                            <li><a href=\"other_charts.html\">Other Charts </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"menu_section\">
                                <h3>Live On</h3>
                                <ul class=\"nav side-menu\">
                                    <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li><a href=\"e_commerce.html\">E-commerce</a>
                                            </li>
                                            <li><a href=\"projects.html\">Projects</a>
                                            </li>
                                            <li><a href=\"project_detail.html\">Project Detail</a>
                                            </li>
                                            <li><a href=\"contacts.html\">Contacts</a>
                                            </li>
                                            <li><a href=\"profile.html\">Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li><a href=\"page_404.html\">404 Error</a>
                                            </li>
                                            <li><a href=\"page_500.html\">500 Error</a>
                                            </li>
                                            <li><a href=\"plain_page.html\">Plain Page</a>
                                            </li>
                                            <li><a href=\"login.html\">Login Page</a>
                                            </li>
                                            <li><a href=\"pricing_tables.html\">Pricing Tables</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a>
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
                                        <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/images/img.jpg"), "html", null, true);
        echo "\" />Rafael 
                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
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
                                        <li><a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("_admin_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>

                                <li role=\"presentation\" class=\"dropdown\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <span class=\"badge bg-green\">6</span>
                                    </a>
                                    <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list animated fadeInDown\" role=\"menu\">
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
                                                    <strong><a href=\"inbox.html\">See All Alerts</strong>
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
                <div class=\"right_col\" role=\"main\" id=\"content\">

                   
                    <br />
                    <!-- footer content -->

                    <footer>
                        <div class=\"\">
                            <p class=\"pull-right\">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                                <span class=\"lead\"> <i class=\"fa fa-paw\"></i> Gentelella Alela!</span>
                            </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>

        </div>

        <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
            <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
            </ul>
            <div class=\"clearfix\"></div>
            <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
        </div>
        ";
        // line 315
        $this->displayBlock('javascripts', $context, $blocks);
        // line 323
        echo "        <!-- /datepicker -->
        <!-- /footer content -->
    </body>
";
        
        $__internal_33acf9b9abc2d8dfde1aa299db4086a7d388e3e0e3fc6271090ef4d081014f67->leave($__internal_33acf9b9abc2d8dfde1aa299db4086a7d388e3e0e3fc6271090ef4d081014f67_prof);

    }

    // line 315
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a38ad5fe0bd2d55953a00e26fc9c5ecdfb8f09983683fdca0584c3bbd971d84 = $this->env->getExtension("native_profiler");
        $__internal_3a38ad5fe0bd2d55953a00e26fc9c5ecdfb8f09983683fdca0584c3bbd971d84->enter($__internal_3a38ad5fe0bd2d55953a00e26fc9c5ecdfb8f09983683fdca0584c3bbd971d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 316
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "         
           
            <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/admin.js"), "html", null, true);
        echo "\"></script>
            <script>
                NProgress.done();
            </script>
        ";
        
        $__internal_3a38ad5fe0bd2d55953a00e26fc9c5ecdfb8f09983683fdca0584c3bbd971d84->leave($__internal_3a38ad5fe0bd2d55953a00e26fc9c5ecdfb8f09983683fdca0584c3bbd971d84_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 318,  405 => 316,  399 => 315,  389 => 323,  387 => 315,  271 => 202,  253 => 187,  113 => 50,  108 => 48,  85 => 29,  75 => 21,  59 => 12,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
