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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Gestoría Arquitectónica de la Ciudad de México";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 26
    public function block_javascript1($context, array $blocks = array())
    {
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
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "        
        ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "AdminBundle:Base:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 91,  197 => 71,  194 => 70,  188 => 65,  183 => 63,  179 => 62,  176 => 61,  173 => 59,  166 => 54,  163 => 53,  158 => 49,  155 => 48,  151 => 94,  149 => 53,  145 => 51,  142 => 48,  139 => 47,  129 => 35,  125 => 34,  117 => 29,  111 => 27,  108 => 26,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  83 => 17,  79 => 16,  73 => 14,  70 => 13,  64 => 12,  57 => 95,  55 => 47,  47 => 41,  44 => 26,  42 => 13,  38 => 12,  25 => 1,);
    }
}
