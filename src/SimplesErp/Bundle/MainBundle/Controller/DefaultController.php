<?php

namespace SimplesErp\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplesErpMainBundle:Default:index.html.twig');
    }
}
