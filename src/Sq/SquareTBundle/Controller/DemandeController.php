<?php

namespace Sq\SquareTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sq\SquareTBundle\Entity\Demande;
use Sq\SquareTBundle\Form\DemandeType;
use Symfony\Component\HttpFoundation\Request;

class DemandeController extends Controller
{
    /**
     * @Route("/Demande")
     */
    public function DemandeAction(Request $request)
    {
        $demande = new Demande();
        $form = $this->createForm(DemandeType::class,$demande);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();
        }

        return $this->render('SqSquareTBundle:DemandeController:demande.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/Afficher")
     */
    public function AfficherAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('SqSquareTBundle:Demande');
        $et = $repo->findAll();
        return $this->render('SqSquareTBundle:DemandeController:afficher.html.twig', array('entites' => $et));
        
    }
    
    /**
     * @Route("/updatestate/{id}", name="updatestate")
     */
    public function UpdateStateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('SqSquareTBundle:Demande');
        dump($repo);die();
        return new \Symfony\Component\BrowserKit\Response('zz');
    }

}
