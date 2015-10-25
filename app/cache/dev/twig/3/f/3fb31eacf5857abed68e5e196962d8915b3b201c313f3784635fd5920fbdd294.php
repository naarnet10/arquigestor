<?php

/* AdminBundle:Usuario:login.html.twig */
class __TwigTemplate_3fb31eacf5857abed68e5e196962d8915b3b201c313f3784635fd5920fbdd294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Base:base.html.twig", "AdminBundle:Usuario:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67ab6f554f4e8c9498f02579891afcc50b85150530b9925c2ec51fa8547c17a0 = $this->env->getExtension("native_profiler");
        $__internal_67ab6f554f4e8c9498f02579891afcc50b85150530b9925c2ec51fa8547c17a0->enter($__internal_67ab6f554f4e8c9498f02579891afcc50b85150530b9925c2ec51fa8547c17a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuario:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ab6f554f4e8c9498f02579891afcc50b85150530b9925c2ec51fa8547c17a0->leave($__internal_67ab6f554f4e8c9498f02579891afcc50b85150530b9925c2ec51fa8547c17a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d3d7ff53d499bd0cd8401efa6237bbe4be348212f4d5f857c282115c55d04b = $this->env->getExtension("native_profiler");
        $__internal_05d3d7ff53d499bd0cd8401efa6237bbe4be348212f4d5f857c282115c55d04b->enter($__internal_05d3d7ff53d499bd0cd8401efa6237bbe4be348212f4d5f857c282115c55d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <body style=\"background:#F7F7F7;\">
    
    <div class=\"\">
        <a class=\"hiddenanchor\" id=\"toregister\"></a>
        <a class=\"hiddenanchor\" id=\"tologin\"></a>

        <div id=\"wrapper\">
            <div id=\"login\" class=\"animate form\">
                <section class=\"login_content\">
                    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_admin_security_check");
        echo "\" method=\"post\">
                        <h1>Login Form</h1>
                        ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                            <div style=\"color:red;margin-left:100px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
                        ";
        }
        // line 19
        echo "                        <div>
                            <input type=\"email\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email\" required=\"true\" />
                        </div>
                        <div>
                            <input type=\"password\" name=\"_password\"  class=\"form-control\" placeholder=\"Password\" required=\"true\" />
                        </div>
                        <div>
                            <button type=\"submit\" class=\"btn btn-default submit\" >Log in</button>
                            <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"separator\">

                            <p class=\"change_link\">New to site?
";
        // line 34
        echo "                            </p>
                            <div class=\"clearfix\"></div>
                            <br />
                            <div>
                                <h1><i class=\"fa fa-hospital-o\" style=\"font-size: 26px;\"></i> Arquigestor!</h1>

                                <p>©2015 Derechos Reservados. Arquigestor ! Empresa Gestora de Obras Urbanas . Distrito Federal</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
        </div>
    </div>

</body>

";
        
        $__internal_05d3d7ff53d499bd0cd8401efa6237bbe4be348212f4d5f857c282115c55d04b->leave($__internal_05d3d7ff53d499bd0cd8401efa6237bbe4be348212f4d5f857c282115c55d04b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  68 => 20,  65 => 19,  59 => 17,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
