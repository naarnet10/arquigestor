<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_admin_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_admin_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestoria_admin_admin_pdf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\AdminController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\AdminBundle\\Controller\\CompanyController::companyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestoria_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestoria\\GestoriaBundle\\Controller\\GestoriaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
