<?php

namespace App\Controller;

use App\Entity\Classes;
use App\Form\ClassesType;
use App\Repository\ClassesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/classes")
 */
class ClassesController extends AbstractController
{
    /**
     * @Route("/", name="classes_index", methods={"GET"})
     * @param ClassesRepository $classesRepository
     * @return Response
     */
    public function index(ClassesRepository $classesRepository): Response
    {
        return $this->render('classes/index.html.twig', [
            'classes' => $classesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="classes_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $classes = new Classes();
        $form = $this->createForm(ClassesType::class, $classes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($classes);
            $entityManager->flush();

            return $this->redirectToRoute('classes_index');
        }

        return $this->render('classes/new.html.twig', [
            'class' => $classes,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="classes_show", methods={"GET"})
     * @param Classes $class
     * @return Response
     */
    public function show(Classes $class): Response
    {
        return $this->render('classes/show.html.twig', [
            'class' => $class,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="classes_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Classes $class
     * @return Response
     */
    public function edit(Request $request, Classes $class): Response
    {
        // Ici le simple fait de passer le $class en paramètre à notre formulaire
        // Suffit à Symfony pour faire le binding de notre objet au formulaire
        // Afin d'avoir un formulaire initialisé
        $form = $this->createForm(ClassesType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classes_index');
        }

        return $this->render('classes/edit.html.twig', [
            'class' => $class,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="classes_delete", methods={"DELETE"})
     * @param Request $request
     * @param Classes $class
     * @return Response
     */
    public function delete(Request $request, Classes $class): Response
    {
        if ($this->isCsrfTokenValid('delete'.$class->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($class);
            $entityManager->flush();
        }

        return $this->redirectToRoute('classes_index');
    }
}
