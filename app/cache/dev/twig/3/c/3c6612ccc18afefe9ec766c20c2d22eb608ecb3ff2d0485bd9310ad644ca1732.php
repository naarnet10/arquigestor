<?php

/* ::base.html.twig */
class __TwigTemplate_3c6612ccc18afefe9ec766c20c2d22eb608ecb3ff2d0485bd9310ad644ca1732 extends Twig_Template
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
        $__internal_b7225da3662e271238c07e3f75d465765b9d53c9335460ebe96ba7f52cc07611 = $this->env->getExtension("native_profiler");
        $__internal_b7225da3662e271238c07e3f75d465765b9d53c9335460ebe96ba7f52cc07611->enter($__internal_b7225da3662e271238c07e3f75d465765b9d53c9335460ebe96ba7f52cc07611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>

";
        
        $__internal_b7225da3662e271238c07e3f75d465765b9d53c9335460ebe96ba7f52cc07611->leave($__internal_b7225da3662e271238c07e3f75d465765b9d53c9335460ebe96ba7f52cc07611_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e5efa240678fe342e5eb777b342f17d44eb9eb1b2673a027cebd5f7be1ea2ce = $this->env->getExtension("native_profiler");
        $__internal_1e5efa240678fe342e5eb777b342f17d44eb9eb1b2673a027cebd5f7be1ea2ce->enter($__internal_1e5efa240678fe342e5eb777b342f17d44eb9eb1b2673a027cebd5f7be1ea2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestoría Arquitectónica de la Ciudad de México";
        
        $__internal_1e5efa240678fe342e5eb777b342f17d44eb9eb1b2673a027cebd5f7be1ea2ce->leave($__internal_1e5efa240678fe342e5eb777b342f17d44eb9eb1b2673a027cebd5f7be1ea2ce_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d8f06a444cea1b87b5575dcc66b4914e1868f477f14419eeeef2db1640ad85c = $this->env->getExtension("native_profiler");
        $__internal_6d8f06a444cea1b87b5575dcc66b4914e1868f477f14419eeeef2db1640ad85c->enter($__internal_6d8f06a444cea1b87b5575dcc66b4914e1868f477f14419eeeef2db1640ad85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/css/fontgoogleapis.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/css/italic.css"), "html", null, true);
        echo "\">

        ";
        
        $__internal_6d8f06a444cea1b87b5575dcc66b4914e1868f477f14419eeeef2db1640ad85c->leave($__internal_6d8f06a444cea1b87b5575dcc66b4914e1868f477f14419eeeef2db1640ad85c_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e1eba8a6c6dbc57f66f3a99f8e6184c1bf86c59af6bdf6b7dd97ce0782f0c2f = $this->env->getExtension("native_profiler");
        $__internal_1e1eba8a6c6dbc57f66f3a99f8e6184c1bf86c59af6bdf6b7dd97ce0782f0c2f->enter($__internal_1e1eba8a6c6dbc57f66f3a99f8e6184c1bf86c59af6bdf6b7dd97ce0782f0c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "

        ";
        
        $__internal_1e1eba8a6c6dbc57f66f3a99f8e6184c1bf86c59af6bdf6b7dd97ce0782f0c2f->leave($__internal_1e1eba8a6c6dbc57f66f3a99f8e6184c1bf86c59af6bdf6b7dd97ce0782f0c2f_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf00cffcfdf9c10498dda187ced4f442964c6dda962e89f406852a6025fd9709 = $this->env->getExtension("native_profiler");
        $__internal_bf00cffcfdf9c10498dda187ced4f442964c6dda962e89f406852a6025fd9709->enter($__internal_bf00cffcfdf9c10498dda187ced4f442964c6dda962e89f406852a6025fd9709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/js/easing.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/js/gestoria.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bf00cffcfdf9c10498dda187ced4f442964c6dda962e89f406852a6025fd9709->leave($__internal_bf00cffcfdf9c10498dda187ced4f442964c6dda962e89f406852a6025fd9709_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  141 => 32,  137 => 31,  133 => 30,  130 => 29,  124 => 28,  115 => 25,  109 => 24,  99 => 17,  95 => 16,  91 => 15,  85 => 13,  83 => 12,  77 => 11,  65 => 10,  56 => 35,  53 => 28,  51 => 24,  43 => 20,  41 => 11,  37 => 10,  26 => 1,);
    }
}
