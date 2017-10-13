<?php

namespace ActivoBundle\Controller;

use ActivoBundle\Entity\categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorium controller.
 *
 */
class categoriaController extends Controller
{
    /**
     * Lists all categorium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorias = $em->getRepository('ActivoBundle:categoria')->findAll();

        return $this->render('categoria/index.html.twig', array(
            'categorias' => $categorias,
        ));
    }

    /**
     * Creates a new categorium entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoria = new Categoria();
        $form = $this->createForm('ActivoBundle\Form\categoriaType', $categoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoria);
            $em->flush();

            return $this->redirectToRoute('categoria_show', array('id' => $categoria->getId()));
        }

        return $this->render('categoria/new.html.twig', array(
            'categoria' => $categoria,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorium entity.
     *
     */
    public function showAction(categoria $categoria)
    {
        $deleteForm = $this->createDeleteForm($categorium);

        return $this->render('categoria/show.html.twig', array(
            'categoria' => $categoria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorium entity.
     *
     */
    public function editAction(Request $request, categoria $categoria)
    {
        $deleteForm = $this->createDeleteForm($categorium);
        $editForm = $this->createForm('ActivoBundle\Form\categoriaType', $categorium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoria_edit', array('id' => $categoria->getId()));
        }

        return $this->render('categoria/edit.html.twig', array(
            'categoria' => $categoria,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorium entity.
     *
     */
    public function deleteAction(Request $request, categoria $categoria)
    {
        $form = $this->createDeleteForm($categoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoria);
            $em->flush();
        }

        return $this->redirectToRoute('categoria_index');
    }

    /**
     * Creates a form to delete a categorium entity.
     *
     * @param categoria $categorium The categorium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(categoria $categoria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $categoria->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
