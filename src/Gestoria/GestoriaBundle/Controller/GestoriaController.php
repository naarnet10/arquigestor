<?php

namespace Gestoria\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestoriaController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestoriaBundle:Gestoria:index.html.twig');
    }
}
