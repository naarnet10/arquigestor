<?php

namespace Gestoria\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{
    
    /**
     * @Route("/login",name="_admin_login")
     * @Template()
     */
    public function loginAction()
    {
        
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('AdminBundle:Usuario:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
    /**
     * @Route("/login_check", name="_admin_security_check")
     */
    public function securityCheckAction() {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_admin_logout")
     */
    public function logoutAction() {
        // ...
    }
    /**
     * @Route("/pdf")
     */
    public function pdfAction()
    {
        $name = "Ahora si estamos jugando s";
        
       $html = $this->renderView('AdminBundle:Admin:pdf.html.twig', array(
            'name' => $name
        ));


        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="file.pdf"'
                )
        );
    }
    /**
     * @Route("/dashboard",name="dashboard")
     */
    public function dashboardAction(){
        return $this->render('AdminBundle:Admin:dashboard.html.twig');
    }
    
}
