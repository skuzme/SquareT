<?php

namespace Sq\SquareTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MembersController extends Controller
{
    /**
     * @Route("/members")
     */
    public function memberAction(){
        
        return $this->render('SqSquareTBundle:default:members.html.twig');
    }
}
