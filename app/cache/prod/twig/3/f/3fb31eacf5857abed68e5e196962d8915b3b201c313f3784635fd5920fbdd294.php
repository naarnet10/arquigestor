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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 17
            echo "                            <div style=\"color:red;margin-left:100px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
                        ";
        }
        // line 19
        echo "                        <div>
                            <input type=\"email\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  75 => 34,  59 => 20,  56 => 19,  50 => 17,  48 => 16,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
