<?php

namespace ActivoBundle\Controller;

use ActivoBundle\Entity\activo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * activo controller.
 *
 * @Route("activo")
 */
class activoController extends Controller
{
  /**
     * Lists all activo entities.
     *
     * @Route("/", name="activo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $activos = $em->getRepository('ActivoBundle:activo')->findAll();

        return $this->render('activo/index.html.twig', array(
            'activos' => $activos,
        ));
    }


    /**
     * Creates a new activo entity.
     *
     * @Route("/new", name="activo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $activo = new Activo();
        $form = $this->createForm('ActivoBundle\Form\activoType', $activo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activo);
            $em->flush();

            return $this->redirectToRoute('activo_new', array('id' => $activo->getId()));
        }

        return $this->render('activo/new.html.twig', array(
            'activo' => $activo,
            'form' => $form->createView(),
        ));
    }
 /**
     * Finds and displays a activo entity.
     *
     * @Route("/{activo_id}", name="activo_show")
     * @Method("GET")
     */
    public function showAction(activo $activo)
    {
        $deleteForm = $this->createDeleteForm($activo);

        return $this->render('activo/show.html.twig', array(
            'activo' => $activo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing activo entity.
     *
     * @Route("/{id}/edit", name="activo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, activo $activo)
    {
        $deleteForm = $this->createDeleteForm($activo);
        $editForm = $this->createForm('ActivoBundle\Form\activoType', $activo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activo_edit', array('id' => $activo->getId()));
        }

        return $this->render('activo/edit.html.twig', array(
            'activo' => $activo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

     /**
     * Deletes a activo entity.
     *
     * @Route("/{id}", name="activo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, activo $activo)
    {
        $form = $this->createDeleteForm($activo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activo);
            $em->flush();
        }

        return $this->redirectToRoute('activo_index');
    }

    /**
     * Creates a form to delete a activo entity.
     *
     * @param activo $activo The activo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(activo $activo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activo_delete', array('id' => $activo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
