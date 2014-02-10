<?php

namespace Foot\PronosticBundle\Controller;

use Foot\PronosticBundle\Entity\Teams;
use Foot\PronosticBundle\Form\TeamsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FootPronosticBundle:Default:index.html.twig', array());
    }

    public function AjoutTeamsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $t= new Teams();
        $form=$this->createForm(new TeamsType());


        return $this->render('FootPronosticBundle:Default:ajouterteam.html.twig',array(
            'form' => $form->createView()
        ));


    }
}
