<?php

/* AdminBundle:Base:base.html.twig */
class __TwigTemplate_ed5c1296ed4e148f2fc6fe9fd343d2a3ea5825837acd5605520239ac20b0bfe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript1' => array($this, 'block_javascript1'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f66c1df21dd9e2b8f1fb53284246ce66839fcf600c37306e8077f827b977ac7 = $this->env->getExtension("native_profiler");
        $__internal_8f66c1df21dd9e2b8f1fb53284246ce66839fcf600c37306e8077f827b977ac7->enter($__internal_8f66c1df21dd9e2b8f1fb53284246ce66839fcf600c37306e8077f827b977ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Base:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('javascript1', $context, $blocks);
        // line 41
        echo "        
    

</head>

<body>
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "   
</body>

</html>";
        
        $__internal_8f66c1df21dd9e2b8f1fb53284246ce66839fcf600c37306e8077f827b977ac7->leave($__internal_8f66c1df21dd9e2b8f1fb53284246ce66839fcf600c37306e8077f827b977ac7_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b684ddc8d46ebadc6d4634cf89118c1f1ed8f1df34d76ce26b3b6ec9137ec0 = $this->env->getExtension("native_profiler");
        $__internal_66b684ddc8d46ebadc6d4634cf89118c1f1ed8f1df34d76ce26b3b6ec9137ec0->enter($__internal_66b684ddc8d46ebadc6d4634cf89118c1f1ed8f1df34d76ce26b3b6ec9137ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestoría Arquitectónica de la Ciudad de México";
        
        $__internal_66b684ddc8d46ebadc6d4634cf89118c1f1ed8f1df34d76ce26b3b6ec9137ec0->leave($__internal_66b684ddc8d46ebadc6d4634cf89118c1f1ed8f1df34d76ce26b3b6ec9137ec0_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06e7e5ed8a04cae9bea0f241948f4ebf70d9b85d406e2ceb1b10ccfa1893b975 = $this->env->getExtension("native_profiler");
        $__internal_06e7e5ed8a04cae9bea0f241948f4ebf70d9b85d406e2ceb1b10ccfa1893b975->enter($__internal_06e7e5ed8a04cae9bea0f241948f4ebf70d9b85d406e2ceb1b10ccfa1893b975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/animate.min.css"), "html", null, true);
        echo "\">
   
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/custom/css/custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/css/jquery-jvectormap-2.0.1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/green.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/floatexamples.css"), "html", null, true);
        echo "\">

    
    ";
        
        $__internal_06e7e5ed8a04cae9bea0f241948f4ebf70d9b85d406e2ceb1b10ccfa1893b975->leave($__internal_06e7e5ed8a04cae9bea0f241948f4ebf70d9b85d406e2ceb1b10ccfa1893b975_prof);

    }

    // line 26
    public function block_javascript1($context, array $blocks = array())
    {
        $__internal_f55be84660218d146d020fffe085c53bcdfdf320136bc42c2b98a49f2347201a = $this->env->getExtension("native_profiler");
        $__internal_f55be84660218d146d020fffe085c53bcdfdf320136bc42c2b98a49f2347201a->enter($__internal_f55be84660218d146d020fffe085c53bcdfdf320136bc42c2b98a49f2347201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript1"));

        // line 27
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <!--[if lt IE 9]>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/ie8-responsive-file-warning.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/html5shiv/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/respond/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        
        $__internal_f55be84660218d146d020fffe085c53bcdfdf320136bc42c2b98a49f2347201a->leave($__internal_f55be84660218d146d020fffe085c53bcdfdf320136bc42c2b98a49f2347201a_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_13dae60fdb3a1643890ad99b9bb6a3b73265f1d7394374e73045f812f45dade0 = $this->env->getExtension("native_profiler");
        $__internal_13dae60fdb3a1643890ad99b9bb6a3b73265f1d7394374e73045f812f45dade0->enter($__internal_13dae60fdb3a1643890ad99b9bb6a3b73265f1d7394374e73045f812f45dade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "        
    
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    ";
        
        $__internal_13dae60fdb3a1643890ad99b9bb6a3b73265f1d7394374e73045f812f45dade0->leave($__internal_13dae60fdb3a1643890ad99b9bb6a3b73265f1d7394374e73045f812f45dade0_prof);

    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5137356b5b76508a650ecfaf9e6f2140da2f788730abdb309ce4802fdc633e6 = $this->env->getExtension("native_profiler");
        $__internal_b5137356b5b76508a650ecfaf9e6f2140da2f788730abdb309ce4802fdc633e6->enter($__internal_b5137356b5b76508a650ecfaf9e6f2140da2f788730abdb309ce4802fdc633e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 49
        echo "        
        ";
        
        $__internal_b5137356b5b76508a650ecfaf9e6f2140da2f788730abdb309ce4802fdc633e6->leave($__internal_b5137356b5b76508a650ecfaf9e6f2140da2f788730abdb309ce4802fdc633e6_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99df87a11d90bce910766a55e78bf8b4a2b091ab31f2f435761da55c21d5f72b = $this->env->getExtension("native_profiler");
        $__internal_99df87a11d90bce910766a55e78bf8b4a2b091ab31f2f435761da55c21d5f72b->enter($__internal_99df87a11d90bce910766a55e78bf8b4a2b091ab31f2f435761da55c21d5f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- gauge js -->
            ";
        // line 59
        echo "            <!-- chart js -->
            ";
        // line 61
        echo "            <!-- bootstrap progress js -->
            <script src=\"src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/progressbar/js/bootstrap-progressbar.min.js"), "html", null, true);
        echo "></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/nicescroll/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- icheck -->
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/icheck/js/icheck.min.js"), "html", null, true);
        echo "\"></script>

            <!-- daterangepicker -->
            ";
        // line 70
        echo "
            <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/custom/js/custom.js"), "html", null, true);
        echo "\"></script>

            <!-- flot js -->
            <!--[if lte IE 8]><script type=\"text/javascript\" src=\"js/excanvas.min.js\"></script><![endif]-->        
            ";
        // line 91
        echo "

        ";
        
        $__internal_99df87a11d90bce910766a55e78bf8b4a2b091ab31f2f435761da55c21d5f72b->leave($__internal_99df87a11d90bce910766a55e78bf8b4a2b091ab31f2f435761da55c21d5f72b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Base:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 91,  236 => 71,  233 => 70,  227 => 65,  222 => 63,  218 => 62,  215 => 61,  212 => 59,  205 => 54,  199 => 53,  191 => 49,  185 => 48,  178 => 94,  176 => 53,  172 => 51,  169 => 48,  163 => 47,  150 => 35,  146 => 34,  138 => 29,  132 => 27,  126 => 26,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  98 => 17,  94 => 16,  88 => 14,  82 => 13,  70 => 12,  60 => 95,  58 => 47,  50 => 41,  47 => 26,  45 => 13,  41 => 12,  28 => 1,);
    }
}
