<?php

namespace Tuto\AnimeauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tuto\AnimeauxBundle\Entity\Animal;
use Tuto\AnimeauxBundle\Form\AnimalType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $animeaux = $em->getRepository('TutoAnimeauxBundle:Animal')->findAll();

        return $this->render('TutoAnimeauxBundle:Default:index.html.twig', array(
            'animeaux' => $animeaux
        ));
    }
    public function ajouterAction()
    {
        //entity manager
        $em=$this->getDoctrine()->getManager();//j ai remplacé le getEntityManager par getManager

        $a=new Animal();
        $form=$this->createForm(new AnimalType() );
        $request = $this->get('request_stack')->getCurrentRequest();
        if($request->ismethod('POST'))
        {
            $form->submit($request);
            $a=$form->getData();
            $em->persist($a);
            $em->flush();

            return $this->redirect($this->generateUrl('tuto_animeaux_homepage'));

        }


       /* $a=new Animal();
        $a->setTitre('un chat')
          ->setDescreption('text description')
          ->setDate(new \DateTime())
          ->setUrl('http://fr.questmachine.org/encyclopedie/illustrations/illustrations_articles/chat61291545533.jpg');

        $em->persist($a);
       $em->flush();
       */




        return $this->render('TutoAnimeauxBundle:Default:ajouter.html.twig',array(
            'form' => $form->createView()

        ));
    }
}
