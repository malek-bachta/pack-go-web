<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelsController extends AbstractController
{
    /**
     * @Route("/hotels", name="app_hotels")
     */
    public function index(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'HotelsController',
        ]);
    }


    /**
     * @Route("/hotels/newhotel", name="newHotel")
     */
    public function newEvent(Request $request): Response
    {
        $hotel = new hotel();
        $form = $this->createForm(HotelFormType::class,$hotel);
        $form->add('add',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('HotelsList');
        }
        return $this->render('hotels/index.html.twig', [
            'formHotel' => $form->createView(),
        ]);
    }
}
