<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\ServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="app_services")
     */
    public function index(): Response
    {
        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }


    /**
     * @Route("/services/showing", name="list_service")
     */
    public function getAllServices(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Services::class);
        $liste=$repo->findAll();
        return $this->render('services/servicesList.html.twig', [
            'liste' => $liste,
        ]);
    }


    /**
     * @Route("/services/adding", name="add_service")
     */

    public function addService(Request $req)
    {
        $services=new Services();
        $form=$this->createForm(ServiceFormType::class,$services);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($services);
            $em->flush();
            return $this->redirectToRoute("list_service");
        }
        return $this->render('services/addS.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/services/updating/{idS}", name="update_service")
     */

    public function updateService($idS,Request $req): Response
    {
        $repo=$this->getDoctrine()->getRepository(Services::class);
        $services=$repo->find($idS);
        $form=$this->createForm(ServiceFormType::class,$services);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_service");
        }
        return $this->render('services/addS.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/services/deleting/{idS}", name="delete_service")
     */

    public function deleteService($idS): Response
    {    $repo=$this->getDoctrine()->getRepository(Services::class);
        $services=$repo->find($idS);
        $em=$this->getDoctrine()->getManager();
        $em->remove($services);
        $em->flush();
        return $this->redirectToRoute("list_service");

    }

}
