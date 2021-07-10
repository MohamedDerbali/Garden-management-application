<?php

namespace EventBundle\Controller;
use EventBundle\Entity\CategorieEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EventBundle\Entity\Events;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Event controller.
 *
 */
class EventsController extends Controller
{
    /**
     * Lists all event entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('EventBundle:Events')->findAll();

        return $this->render('events/index.html.twig', array(
            'events' => $events,
        ));
    }
    public function indexxoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('EventBundle:Events')->findAll();

        return $this->render('events/indexi.html.twig', array(
            'events' => $events,
        ));
    }

    public function newAction(Request $request)
    {
        $event = new Events();
        $form = $this->createForm('EventBundle\Form\EventsType', $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $event->getImg();

            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            var_dump($fileName);

            $event->setImg($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('events_indexad');
        }

        return $this->render('events/new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),
        ));
    }




    /**
     * @return string
     */
    private function generateUniqueFileName()
{
    return md5(uniqid());

}
    /**
     * Finds and displays a event entity.
     *
     */
    public function showAction(Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);

        return $this->render('events/show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        ));
    }

   public function printfazaAction(Events $event)
    {
        $em= $this->getDoctrine();

            $x=$em->getRepository(Events::class)->findAll();



        return $this->render('events/index.html.twig', $x);
    }

    public function participeAction($idEvent)
    {
        $em= $this->getDoctrine();
        $Asso = $em->getRepository(Events::class)->find((int)$idEvent);
       if($Asso->getNbreParticipant()>=90){
           $this->get('session')->getFlashBag()->add(
               'notice',
               'vous ne pouvez pas participer a cette evenement car elle est pleine!!!!'
           );
       }
       else {
           $Asso->setNbreParticipant($Asso->getNbreParticipant()+1);
           $em= $this->getDoctrine()->getManager();
           $em->persist($Asso);
           $em->flush();
           $this->getDoctrine()->getManager()->flush();
       }
           return $this->redirectToRoute('events_indexad');
    }
    /**
     * Displays a form to edit an existing event entity.
     *
     */
    public function editAction(Request $request, Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('EventBundle\Form\EventsType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $file = $event->getImg();

            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            var_dump($fileName);

            $event->setImg($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('events_edit', array('idEvent' => $event->getIdevent()));
        }

        return $this->render('events/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a event entity.
     *
     */
    public function deleteAction($idEvent)
    {$em = $this->getDoctrine()->getManager();

        $emm = $em->getRepository('EventBundle:Events')->find($idEvent);
var_dump($emm);

            $em->remove($emm);
            $em->flush();
        return $this->redirectToRoute('events_indexad');
    }

    public function chartAction()
    {   $pieChart = new ColumnChart();
        $em= $this->getDoctrine();
        $Asso = $em->getRepository(CategorieEvent::class)->findAll();
      //  var_dump($Asso);
        $data= array();
        $stat=['Les Catégories', 'Nombre des évenement Per Catégorie'];
        //  var_dump($Asso);
        array_push($data,$stat);
       foreach ($Asso as $b){
        $x=$em->getRepository(Events::class)->findFF($b->getId());
        //   var_dump($x);
          $stat=array();
         foreach ($x as $i) {
             foreach ($i as $o) {
                 $p = $o + 0;

                 array_push($stat, $b->getNom(), $p);//$classe->get());
                 $stat = [$b->getNom(), $p];
                 array_push($data, $stat);

             }
         }
       }
       $pieChart->getData()->setArrayToDataTable(
            $data
        );
        $pieChart->getOptions()->setTitle('Nombre Evenement / cat');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('events/stat.html.twig', array('piechart' => $pieChart));
    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Events $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Events $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('events_delete', array('idEvent' => $event->getIdevent())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
