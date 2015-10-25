<?php

namespace Gestoria\ConsultorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ConsultorController extends Controller
{
    public function loginAction()
    {
        
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
//        var_dump($error);

        return $this->render('ConsultorBundle:Usuario:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
    public function checkAction()
    {
        
    }
    
    public function adminAction()
    {
        $vars = "alain";
        
       $html = $this->renderView('ConsultorBundle:Admin:admin.html.twig', array(
            'name' => $vars
        ));


        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="file.pdf"'
                )
        );
    }
    
}
