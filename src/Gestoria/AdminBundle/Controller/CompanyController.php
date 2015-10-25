<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompanyController
 *
 * @author Néstor Alain
 */

namespace Gestoria\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller{
    
    
    /**
     * @Route("/company",name="company")
     */
    public function companyAction(){
        return $this->render('AdminBundle:Company:company.html.twig');
    }
}



