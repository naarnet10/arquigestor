<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_72ef89609827c09da1dd286c804ac740b60a55d76df5f8ab35d5dce05c49afc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a08ed88c3da33bb04047fbada06c8c54bbad6e8bf95b5ad1425b9a487d278a2 = $this->env->getExtension("native_profiler");
        $__internal_7a08ed88c3da33bb04047fbada06c8c54bbad6e8bf95b5ad1425b9a487d278a2->enter($__internal_7a08ed88c3da33bb04047fbada06c8c54bbad6e8bf95b5ad1425b9a487d278a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a08ed88c3da33bb04047fbada06c8c54bbad6e8bf95b5ad1425b9a487d278a2->leave($__internal_7a08ed88c3da33bb04047fbada06c8c54bbad6e8bf95b5ad1425b9a487d278a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_320f67c532a8c70f8f5ee540e19b39f4005c3f2778f41742d288de16da874a16 = $this->env->getExtension("native_profiler");
        $__internal_320f67c532a8c70f8f5ee540e19b39f4005c3f2778f41742d288de16da874a16->enter($__internal_320f67c532a8c70f8f5ee540e19b39f4005c3f2778f41742d288de16da874a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_320f67c532a8c70f8f5ee540e19b39f4005c3f2778f41742d288de16da874a16->leave($__internal_320f67c532a8c70f8f5ee540e19b39f4005c3f2778f41742d288de16da874a16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1950fafb6797aedbfb0b9db5cfb93ea9a9d108b563b9d8203bfb3ea40050d607 = $this->env->getExtension("native_profiler");
        $__internal_1950fafb6797aedbfb0b9db5cfb93ea9a9d108b563b9d8203bfb3ea40050d607->enter($__internal_1950fafb6797aedbfb0b9db5cfb93ea9a9d108b563b9d8203bfb3ea40050d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1950fafb6797aedbfb0b9db5cfb93ea9a9d108b563b9d8203bfb3ea40050d607->leave($__internal_1950fafb6797aedbfb0b9db5cfb93ea9a9d108b563b9d8203bfb3ea40050d607_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bae828c0c5487dab394ca331df0766504c1bad5c326f6c2ec1f84f99a039c5a = $this->env->getExtension("native_profiler");
        $__internal_4bae828c0c5487dab394ca331df0766504c1bad5c326f6c2ec1f84f99a039c5a->enter($__internal_4bae828c0c5487dab394ca331df0766504c1bad5c326f6c2ec1f84f99a039c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4bae828c0c5487dab394ca331df0766504c1bad5c326f6c2ec1f84f99a039c5a->leave($__internal_4bae828c0c5487dab394ca331df0766504c1bad5c326f6c2ec1f84f99a039c5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
