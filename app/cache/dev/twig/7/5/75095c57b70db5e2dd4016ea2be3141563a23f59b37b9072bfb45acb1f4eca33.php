<?php

/* GestoriaBundle:Gestoria:index.html.twig */
class __TwigTemplate_75095c57b70db5e2dd4016ea2be3141563a23f59b37b9072bfb45acb1f4eca33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestoriaBundle:Gestoria:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c7a29b2a48250a75568f9dee333a669a7453c4f5d9ef92b54b214ce8a9c8c2f = $this->env->getExtension("native_profiler");
        $__internal_7c7a29b2a48250a75568f9dee333a669a7453c4f5d9ef92b54b214ce8a9c8c2f->enter($__internal_7c7a29b2a48250a75568f9dee333a669a7453c4f5d9ef92b54b214ce8a9c8c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestoriaBundle:Gestoria:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c7a29b2a48250a75568f9dee333a669a7453c4f5d9ef92b54b214ce8a9c8c2f->leave($__internal_7c7a29b2a48250a75568f9dee333a669a7453c4f5d9ef92b54b214ce8a9c8c2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59dfcdef83e178b7afa67ebbf1568800ba24b1139a3ace15693326bd743627ab = $this->env->getExtension("native_profiler");
        $__internal_59dfcdef83e178b7afa67ebbf1568800ba24b1139a3ace15693326bd743627ab->enter($__internal_59dfcdef83e178b7afa67ebbf1568800ba24b1139a3ace15693326bd743627ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t
<div id=\"home\" class=\"header\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"logo\">
                <a href=\"#\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/logo.png"), "html", null, true);
        echo "\"  title=\"Johndeo\" /></a>
            </div>
            <!----start-top-nav---->
            <nav class=\"top-nav\">
                <ul class=\"top-nav\">
                    <li><a href=\"#home\" class=\"scroll\">Inicio</a><span> </span></li>
                    <li><a href=\"#about\" class=\"scroll\">About ME </a></li>
                    <li><a href=\"#services\" class=\"scroll\">Servicios</a></li>
                    <li><a href=\"#work\" class=\"scroll\">Mi funcion</a><span> </span></li>
                    <li><a href=\"#contact\" class=\"scroll\">Contactarme</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_admin_login");
        echo "\" class=\"\">Login</a></li>
                    <div class=\"clearfix\"> </div>
                </ul>
                <a href=\"#\" id=\"pull\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/nav-icon.png"), "html", null, true);
        echo "\" title=\"menu\" /></a>
            </nav>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
<!----- //End-header---->
<!----banner---->
<div class=\"banner\">
    <!---- banner-info ---->
    <div class=\"banner-info text-center\">
        <p>Lorem ipsum dolor sit iusmod tempor </p>
        <h1>incididunt bore</h1>
        <span>Orem ipsum dolor sit amet, consectetur</span>
        <label> </label>
        <div class=\"clearfix\"> </div>
        <a class=\"bannner-btn\" href=\"#\">KNOW MORE</a>
    </div>
    <!-- //banner-info ---->
</div>
<!--//banner---->
<!---- about --->
<div id=\"about\" class=\"about\">
    <div class=\"about-head text-center\">
        <div class=\"container\">
            <h2>ABOUT ME</h2>
            <span> </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <label>quis nostrud exercitation ullamco</label> laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
        </div>
    </div>
    <!--- about-grids --->
    <div class=\"about-grids text-center\">
        <div class=\"container\">
            <div class=\"col-md-3 about-grid\">
                <span class=\"light-icon\"> </span>
                <h3><a href=\"#\">Title goes here</a></h3>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                <label> </label>
            </div>
            <div class=\"col-md-3 about-grid\">
                <span class=\"pen-icon\"> </span>
                <h3><a href=\"#\">Title goes here</a></h3>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                <label> </label>
            </div>
            <div class=\"col-md-3 about-grid\">
                <span class=\"cog-icon\"> </span>
                <h3><a href=\"#\">Title goes here</a></h3>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                <label> </label>
            </div>
            <div class=\"col-md-3 about-grid\">
                <span class=\"mon-icon\"> </span>
                <h3><a href=\"#\">Title goes here</a></h3>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    <!--- about-grids --->
</div>
<!----//about --->
<!--- services ---->
<div id=\"services\" class=\"services\">
    <!---services-grids--->
    <div class=\"services-grids\">
        <div class=\"col-md-6 services-grid-left\">
            <div class=\"service-head\">
                <h2>SERVICES</h2>
                <span> </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!----- services-grid-left-grids ---->
            <div class=\"services-grid-left-grids\">
                <div class=\"col-md-6 services-grid-left-grid\">
                    <span> </span>
                    <h3><a href=\"#\">Title goes here</a></h3>
                    <p>Onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                </div>
                <div class=\"col-md-6 services-grid-left-grid\">
                    <span class=\"search\"> </span>
                    <h3><a href=\"#\">Title goes here</a></h3>
                    <p>Onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                </div>
                <div class=\"col-md-6 services-grid-left-grid\">
                    <span class=\"clock\"> </span>
                    <h3><a href=\"#\">Title goes here</a></h3>
                    <p>Onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                </div>
                <div class=\"col-md-6 services-grid-left-grid\">
                    <span class=\"chart\"> </span>
                    <h3><a href=\"#\">Title goes here</a></h3>
                    <p>Onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
                </div>
            </div>
            <!----- services-grid-left-grids ---->
        </div>
        <div class=\"col-md-6 services-grid-right\">

        </div>
        <div class=\"clearfix\"> </div>
    </div>
    <!---services-grids--->
</div>
<!---//services ---->
<!---- works ---->
<div id=\"work\" class=\"works\">
    <div class=\"conatiner\">
        <div class=\"works-head text-center\">
            <h2>MY WORK</h2>
            <span> </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!---works-grids--->
    <div class=\"works-grids\">
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w1.jpg"), "html", null, true);
        echo "\"src=\"images/w1.jpg\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w2.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w3.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w4.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w5.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w6.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w7.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"works-grid col-md-3\">
            <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestoria/images/w8.jpg"), "html", null, true);
        echo "\" title=\"name\" />
            <div class=\"caption\">
                <h4>Title goes here</h4>
                <p>onsectetur adipisicing elit, sedo eiusmod tempor incidiet dolorerserss eerhfre mag.</p>
            </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
    <!--//works-grids--->
</div>
</div>
<!----//works ---->
<!---- contact ----->
<div id=\"contact\" class=\"contact\">
    <div class=\"conatiner\">
        <div class=\"contact-head text-center\">
            <h2>CONTACT ME</h2>
            <span> </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!----Contact-form---->
    <div class=\"Contact-form\">
        <div class=\"send-form text-center\">
            <form>
                <span class=\"text-box1\">
                    <label>NAME</label>
                    <input type=\"text\" value=\"Enter your name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                                                            this.value = 'Enter your name';
                                                                        }\">
                </span>
                <span class=\"text-box2\">
                    <label>EMAIL ADDRESS</label>
                    <input type=\"text\" value=\"Enter your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                                                            this.value = 'Enter your Email';
                                                                        }\">
                </span>
                <span class=\"text-box3\">
                    <label>MESSAGE</label>
                    <textarea>Type yor message</textarea>
                </span>
                <div class=\"clearfix\"> 
                    <input type=\"submit\" value=\"Submit\" />
            </form>
        </div>
    </div>
    <!----Contact-form---->
</div>
<!----//contact ----->
<!----copy-right---->
<div class=\"copy-right text-center\">
    <div class=\"container\">
        <p>Template by <a href=\"#\">W3layouts</a></p>
        <a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
    </div>
</div>
<!---//copy-right---->
</body>

";
        
        $__internal_59dfcdef83e178b7afa67ebbf1568800ba24b1139a3ace15693326bd743627ab->leave($__internal_59dfcdef83e178b7afa67ebbf1568800ba24b1139a3ace15693326bd743627ab_prof);

    }

    public function getTemplateName()
    {
        return "GestoriaBundle:Gestoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 187,  245 => 180,  235 => 173,  225 => 166,  215 => 159,  205 => 152,  195 => 145,  185 => 138,  65 => 21,  59 => 18,  46 => 8,  34 => 3,  11 => 1,);
    }
}
