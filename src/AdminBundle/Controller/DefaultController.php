<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:testpage.html.twig');
    }

    public function clientsAction()
    {
        return $this->render('AdminBundle:Default:clientsView.html.twig');
    }
}
