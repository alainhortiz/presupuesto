<?php

namespace App\Controller;

use App\Entity\Cargo;
use App\Form\CargoType;
use App\Repository\CargoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cargo')]
class CargoController extends AbstractController
{
    #[Route('/', name: 'app_cargo_index', methods: ['GET'])]
    public function index(CargoRepository $cargoRepository): Response
    {
        return $this->render('cargo/index.html.twig', [
            'cargos' => $cargoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cargo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cargo = new Cargo();
        $form = $this->createForm(CargoType::class, $cargo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cargo);
            $entityManager->flush();

            return $this->redirectToRoute('app_cargo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cargo/new.html.twig', [
            'cargo' => $cargo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cargo_show', methods: ['GET'])]
    public function show(Cargo $cargo): Response
    {
        return $this->render('cargo/show.html.twig', [
            'cargo' => $cargo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cargo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cargo $cargo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CargoType::class, $cargo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cargo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cargo/edit.html.twig', [
            'cargo' => $cargo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cargo_delete', methods: ['POST'])]
    public function delete(Request $request, Cargo $cargo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cargo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cargo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cargo_index', [], Response::HTTP_SEE_OTHER);
    }
}
