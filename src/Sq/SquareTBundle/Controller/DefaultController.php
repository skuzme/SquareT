<?php

namespace Sq\SquareTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/aq")
     */
    public function indexAction()
    {
        return $this->render('SqSquareTBundle:Default:index.html.twig');
    }
}
