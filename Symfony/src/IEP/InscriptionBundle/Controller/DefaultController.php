<?php

namespace IEP\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IEPInscriptionBundle:Default:index.html.twig', array('name' => $name));
    }
}
