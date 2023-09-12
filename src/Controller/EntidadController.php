<?php

namespace App\Controller;

use App\Entity\Entidad;
use App\Form\EntidadType;
use App\Repository\EntidadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entidad')]
class EntidadController extends AbstractController
{
    #[Route('/', name: 'app_entidad_index', methods: ['GET'])]
    public function index(EntidadRepository $entidadRepository): Response
    {
        return $this->render('entidad/index.html.twig', [
            'entidads' => $entidadRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_entidad_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entidad = new Entidad();
        $form = $this->createForm(EntidadType::class, $entidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entidad);
            $entityManager->flush();

            return $this->redirectToRoute('app_entidad_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entidad/new.html.twig', [
            'entidad' => $entidad,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entidad_show', methods: ['GET'])]
    public function show(Entidad $entidad): Response
    {
        return $this->render('entidad/show.html.twig', [
            'entidad' => $entidad,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entidad_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entidad $entidad, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntidadType::class, $entidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_entidad_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entidad/edit.html.twig', [
            'entidad' => $entidad,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entidad_delete', methods: ['POST'])]
    public function delete(Request $request, Entidad $entidad, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entidad->getId(), $request->request->get('_token'))) {
            $entityManager->remove($entidad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_entidad_index', [], Response::HTTP_SEE_OTHER);
    }
}
