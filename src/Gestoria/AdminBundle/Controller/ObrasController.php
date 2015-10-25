<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObrasController
 *
 * @author Néstor Alain
 */

namespace Gestoria\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class ObrasController extends Controller{
    
    
    /**
     * @Route("/obras",name="obras")
     */
    public function obrasAction(){
        return $this->render('AdminBundle:Obras:index.html.twig');
    }
}



