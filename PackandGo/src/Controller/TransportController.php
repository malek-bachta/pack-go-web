<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TransportController extends AbstractController
{
    /**
     * @Route("/transport", name="app_transport")
     */
    public function index(): Response
    {
        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }


    /**
     * @Route("/transport/show", name="list_transport")
     */
   public function getAllClasses(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste=$repo->findAll();
        return $this->render('transport/transport.html.twig', [
            'list' => $liste,
        ]);
    }
    /**
     * @Route("/transport/add", name="add_transport")
     */

    public function add(Request $req)
    {
        $transport=new Transport();
        $form=$this->createForm(TransportFormType::class,$transport);
        $form->add('Add', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transport);
            $em->flush();
            return $this->redirectToRoute("list_transport");
        }
        return $this->render('transport/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    }
