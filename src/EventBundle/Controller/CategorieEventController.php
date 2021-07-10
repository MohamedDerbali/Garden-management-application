<?php

namespace EventBundle\Controller;

use EventBundle\Entity\CategorieEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorieevent controller.
 *
 */
class CategorieEventController extends Controller
{
    /**
     * Lists all categorieEvent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorieEvents = $em->getRepository('EventBundle:CategorieEvent')->findAll();

        return $this->render('categorieevent/index.html.twig', array(
            'categorieEvents' => $categorieEvents,
        ));
    }

    /**
     * Creates a new categorieEvent entity.
     *
     */
    public function newAction(Request $request)
    {
        $categorieEvent = new Categorieevent();
        $form = $this->createForm('EventBundle\Form\CategorieEventType', $categorieEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorieEvent);
            $em->flush();

            return $this->redirectToRoute('categorieevent_index');
        }

        return $this->render('categorieevent/new.html.twig', array(
            'categorieEvent' => $categorieEvent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorieEvent entity.
     *
     */
    public function showAction(CategorieEvent $categorieEvent)
    {
        $deleteForm = $this->createDeleteForm($categorieEvent);

        return $this->render('categorieevent/show.html.twig', array(
            'categorieEvent' => $categorieEvent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorieEvent entity.
     *
     */
    public function editAction(Request $request, $id )
    {$em = $this->getDoctrine()->getManager();

        $categorieEvent = $em->getRepository('EventBundle:CategorieEvent')->find($id);
  //      $deleteForm = $this->createDeleteForm($categorieEvent);
        $editForm = $this->createForm('EventBundle\Form\CategorieEventType', $categorieEvent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorieevent_index');
        }

        return $this->render('categorieevent/edit.html.twig', array(
            'categorieEvent' => $categorieEvent,
            'edit_form' => $editForm->createView(),
      //      'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorieEvent entity.
     *
     */
    public function deleteAction($id)
    {  $em = $this->getDoctrine()->getManager();

        $cat = $em->getRepository('EventBundle:CategorieEvent')->find($id);
      //  $form = $this->createDeleteForm($categorieEvent);
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {

            $em->remove($cat);
            $em->flush();
        //}

        return $this->redirectToRoute('categorieevent_index');
    }

}
