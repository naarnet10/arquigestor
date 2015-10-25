<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // _admin_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::loginAction',  '_route' => '_admin_login',);
                    }

                    // _admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::securityCheckAction',  '_route' => '_admin_security_check',);
                    }

                }

                // _admin_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::logoutAction',  '_route' => '_admin_logout',);
                }

            }

            // gestoria_admin_admin_pdf
            if ($pathinfo === '/admin/pdf') {
                return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::pdfAction',  '_route' => 'gestoria_admin_admin_pdf',);
            }

            // dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'dashboard',);
            }

            // company
            if ($pathinfo === '/admin/company') {
                return array (  '_controller' => 'Gestoria\\AdminBundle\\Controller\\CompanyController::companyAction',  '_route' => 'company',);
            }

        }

        // gestoria_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestoria_homepage');
            }

            return array (  '_controller' => 'Gestoria\\GestoriaBundle\\Controller\\GestoriaController::indexAction',  '_route' => 'gestoria_homepage',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
