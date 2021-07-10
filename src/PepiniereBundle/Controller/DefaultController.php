<?php

namespace PepiniereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Pepiniere/Default/shop.html.twig');
    }
}
