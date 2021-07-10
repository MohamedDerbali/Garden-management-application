<?php

namespace ProduitBundle\Controller;

use ProduitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function displayAction()
    {
        $notification=$this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render("notifo.html.twig",array('notifications'=>$notification));
    }
}
