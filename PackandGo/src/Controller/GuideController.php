<?php

namespace App\Controller;

use App\Entity\Guide;
use Symfony\Component\HttpFoundation\Request;

use App\Form\GuideFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GuideController extends AbstractController
{
    /**
     * @Route("/guide", name="app_guide")
     */
    public function index(): Response
    {
        return $this->render('guide/index.html.twig', [
            'controller_name' => 'GuideController',
        ]);
    }
    /**
     * @Route("/guide/showg", name="list_guide")
     */
    public function getAllClasses(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Guide::class);
        $liste=$repo->findAll();
        return $this->render('guide/show.html.twig', [
            'list' => $liste,
        ]);
    }
    /**
     * @Route("/guide/addg", name="add_guide")
     */

    public function addg(Request $req)
    {
        $guide=new guide();
        $form=$this->createForm(GuideFormType::class,$guide);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($guide);
            $em->flush();
            return $this->redirectToRoute("list_guide");
        }
        return $this->render('guide/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/guide/edit/{id}", name="update_guide")
     */
    public function updateguide($id,Request $req): Response
    {
        $repo=$this->getDoctrine()->getRepository(guide::class);
        $guide=$repo->find($id);
        $form=$this->createForm(GuideFormType::class,$guide);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_guide");
        }
        return $this->render('guide/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/guide/supp/{id}", name="delete_guide")
     */
    public function deleteGuide($id): Response
    {    $repo=$this->getDoctrine()->getRepository(guide::class);
        $guide=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($guide);
        $em->flush();
        return $this->redirectToRoute("list_guide");

    }

}
