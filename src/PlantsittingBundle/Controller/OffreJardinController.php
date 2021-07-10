<?php

namespace PlantsittingBundle\Controller;

use PlantsittingBundle\Entity\OffreJardin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Offrejardin controller.
 *
 */
class OffreJardinController extends Controller
{
    /**
     * Lists all offreJardin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offreJardins = $em->getRepository('PlantsittingBundle:OffreJardin')->findAll();

        return $this->render('offrejardin/index.html.twig', array(
            'offreJardins' => $offreJardins,
        ));
    }

    /**
     * Creates a new offreJardin entity.
     *
     */
    public function newAction(Request $request)
    {
        $offreJardin = new Offrejardin();
        $form = $this->createForm('PlantsittingBundle\Form\OffreJardinType', $offreJardin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offreJardin);
            $em->flush();

            return $this->redirectToRoute('offrejardin_show', array('idOffreJardin' => $offreJardin->getIdoffrejardin()));
        }

        return $this->render('offrejardin/new.html.twig', array(
            'offreJardin' => $offreJardin,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a offreJardin entity.
     *
     */
    public function showAction(OffreJardin $offreJardin)
    {
        $deleteForm = $this->createDeleteForm($offreJardin);

        return $this->render('offrejardin/show.html.twig', array(
            'offreJardin' => $offreJardin,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing offreJardin entity.
     *
     */
    public function editAction(Request $request, OffreJardin $offreJardin)
    {
        $deleteForm = $this->createDeleteForm($offreJardin);
        $editForm = $this->createForm('PlantsittingBundle\Form\OffreJardinType', $offreJardin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offrejardin_edit', array('idOffreJardin' => $offreJardin->getIdoffrejardin()));
        }

        return $this->render('offrejardin/edit.html.twig', array(
            'offreJardin' => $offreJardin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a offreJardin entity.
     *
     */
    public function deleteAction(Request $request, OffreJardin $offreJardin)
    {
        $form = $this->createDeleteForm($offreJardin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offreJardin);
            $em->flush();
        }

        return $this->redirectToRoute('offrejardin_index');
    }

    /**
     * Creates a form to delete a offreJardin entity.
     *
     * @param OffreJardin $offreJardin The offreJardin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OffreJardin $offreJardin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offrejardin_delete', array('idOffreJardin' => $offreJardin->getIdoffrejardin())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
