<?php

namespace PlantsittingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlantsittingBundle:Default:index.html.twig');
    }
}
