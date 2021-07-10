<?php

namespace ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

        public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findAll();
        $notification =$em ->getRepository('ProduitBundle:Notification')->findAll();
        return $this->render('Produit/shop.html.twig', array(
            'produits' => $produit,
            'notifications'=>$notification,
        ));
    }
    public function indexxAction()
    {
        return $this->render('@Produit/Default/index.html.twig');
    }

    public function indexADAction()
    {
        return $this->render('@Produit/Default/index_admin.html.twig');
    }

}

