<?php

namespace Foot\PronosticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FootPronosticBundle:Default:index.html.twig', array());
    }
}
