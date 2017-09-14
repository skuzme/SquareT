<?php

namespace Sq\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/aa")
     */
    public function indexAction()
    {
        return $this->render('SqSiteBundle:Default:index.html.twig');
    }
}
