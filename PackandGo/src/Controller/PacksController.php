<?php

namespace App\Controller;

use App\Entity\Packs;
use App\Form\Packs1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/packs")
 */
class PacksController extends AbstractController
{
    /**
     * @Route("/", name="app_packs_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $packs = $entityManager
            ->getRepository(Packs::class)
            ->findAll();

        return $this->render('packs/index.html.twig', [
            'packs' => $packs,
        ]);
    }

    /**
     * @Route("/add2", name="app_packs_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pack = new Packs();
        $form = $this->createForm(Packs1Type::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pack);
            $entityManager->flush();

            return $this->redirectToRoute('app_packs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('packs/new.html.twig', [
            'pack' => $pack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/view", name="app_packs_show", methods={"GET"})
     */
    public function show(EntityManagerInterface $entityManager): Response
    {
        $packs = $entityManager
            ->getRepository(Packs::class)
            ->findAll();

        return $this->render('packs/show.html.twig', [
            'packs' => $packs,
        ]);
    }


    /**
     * @Route("/edit/{idPack}", name="app_packs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, $idPack, EntityManagerInterface $entityManager): Response
    {
        $Pack=new Packs();
        $Pack=$this->getDoctrine()->getRepository(Packs::class)->find($idPack);
        $form = $this->createForm(Packs1Type::class, $Pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_packs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('packs/edit.html.twig', [
            'pack' => $Pack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{idPack}", name="app_packs_delete", methods={"POST"})
     */
    public function delete(Request $request, $idPack , EntityManagerInterface $entityManager): Response
    { $Pack=new Packs();
        $Pack=$this->getDoctrine()->getRepository(Packs::class)->find($idPack);
        if ($this->isCsrfTokenValid('delete'.$Pack->getIdPack(), $request->request->get('_token'))) {
            $entityManager->remove($Pack);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_packs_index', [], Response::HTTP_SEE_OTHER);
    }
}
