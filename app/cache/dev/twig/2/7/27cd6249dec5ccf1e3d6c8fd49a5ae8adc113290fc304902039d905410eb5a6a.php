<?php

/* AdminBundle:Company:company.html.twig */
class __TwigTemplate_27cd6249dec5ccf1e3d6c8fd49a5ae8adc113290fc304902039d905410eb5a6a extends Twig_Template
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
        $__internal_633c368127932b3faa4b0b72e8651ccdf0d0ea6da11874c7d0e8e2d7bdc43232 = $this->env->getExtension("native_profiler");
        $__internal_633c368127932b3faa4b0b72e8651ccdf0d0ea6da11874c7d0e8e2d7bdc43232->enter($__internal_633c368127932b3faa4b0b72e8651ccdf0d0ea6da11874c7d0e8e2d7bdc43232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Company:company.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/css/dataTables.tableTools.css"), "html", null, true);
        echo "\">
<div class=\"\">
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>
                Lista de Constructoras 
                <small>
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
                    <h2>Daily active users <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a href=\"#\"><i class=\"fa fa-chevron-up\"></i></a>
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
                        <li><a href=\"#\"><i class=\"fa fa-close\"></i></a>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <table id=\"example\" class=\"table table-striped responsive-utilities jambo_table\">
                        <thead>
                            <tr class=\"headings\">
                                <th>
                                    <input type=\"checkbox\" class=\"tableflat\">
                                </th>
                                <th>Invoice </th>
                                <th>Invoice Date </th>
                                <th>Order </th>
                                <th>Bill to Name </th>
                                <th>Status </th>
                                <th>Amount </th>
                                <th class=\" no-link last\"><span class=\"nobr\">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class=\"even pointer\">
                                <td class=\"a-center \">
                                    <input type=\"checkbox\" class=\"tableflat\">
                                </td>
                                <td class=\" \">121000040</td>
                                <td class=\" \">May 23, 2014 11:47:56 PM </td>
                                <td class=\" \">121000210 <i class=\"success fa fa-long-arrow-up\"></i>
                                </td>
                                <td class=\" \">John Blank L</td>
                                <td class=\" \">Paid</td>
                                <td class=\"a-right a-right \">\$7.45</td>
                                <td class=\" last\"><a href=\"#\">View</a>
                                </td>
                            </tr>
                            <tr class=\"odd pointer\">
                                <td class=\"a-center \">
                                    <input type=\"checkbox\" class=\"tableflat\">
                                </td>
                                <td class=\" \">121000039</td>
                                <td class=\" \">May 23, 2014 11:30:12 PM</td>
                                <td class=\" \">121000208 <i class=\"success fa fa-long-arrow-up\"></i>
                                </td>
                                <td class=\" \">John Blank L</td>
                                <td class=\" \">Paid</td>
                                <td class=\"a-right a-right \">\$741.20</td>
                                <td class=\" last\"><a href=\"#\">View</a>
                                </td>
                            </tr>
                            <tr class=\"even pointer selected\">
                                <td class=\"a-center \">
                                    <input type=\"checkbox\" checked class=\"tableflat\">
                                </td>
                                <td class=\" \">121000038</td>
                                <td class=\" \">May 24, 2014 10:55:33 PM</td>
                                <td class=\" \">121000203 <i class=\"success fa fa-long-arrow-up\"></i>
                                </td>
                                <td class=\" \">Mike Smith</td>
                                <td class=\" \">Paid</td>
                                <td class=\"a-right a-right \">\$432.26</td>
                                <td class=\" last\"><a href=\"#\">View</a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <br />
        <br />
        <br />

    </div>
</div>

<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/js/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
<script>
            \$(document).ready(function () {
                \$('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            \$(document).ready(function () {
                var oTable = \$('#example').dataTable({
                    ";
        // line 140
        echo "                    \"aoColumnDefs\": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    \"sPaginationType\": \"full_numbers\",
                    \"dom\": 'T<\"clear\">lfrtip',
                    \"tableTools\": {
                        \"sSwfPath\": \"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/swf/copy_csv_xls_pdf.swf"), "html", null, true);
        echo "\",
                    }
                });
                \$(\"tfoot input\").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, \$(\"tfoot th\").index(\$(this).parent()));
                });
                \$(\"tfoot input\").each(function (i) {
                    asInitVals[i] = this.value;
                });
                \$(\"tfoot input\").focus(function () {
                    if (this.className == \"search_init\") {
                        this.className = \"\";
                        this.value = \"\";
                    }
                });
                \$(\"tfoot input\").blur(function (i) {
                    if (this.value == \"\") {
                        this.className = \"search_init\";
                        this.value = asInitVals[\$(\"tfoot input\").index(this)];
                    }
                });
            });
        </script>";
        
        $__internal_633c368127932b3faa4b0b72e8651ccdf0d0ea6da11874c7d0e8e2d7bdc43232->leave($__internal_633c368127932b3faa4b0b72e8651ccdf0d0ea6da11874c7d0e8e2d7bdc43232_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Company:company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 150,  169 => 140,  154 => 125,  150 => 124,  25 => 2,  22 => 1,);
    }
}
