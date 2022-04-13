<?php

namespace App\Controller;

use App\Form\HotelFormType;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hotels;



class HotelsController extends AbstractController
{
    /**
     * @Route("/hotels", name="app_hotels")
     */
    public function index(): Response
    {
        return $this->render('hotels/index.html.twig', [
            'controller_name' => 'HotelsController',
        ]);
    }


    /**
     * @Route("/hotels/show", name="list_hotels")
     */
    public function getAllHotels(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Hotels::class);
        $liste=$repo->findAll();
        return $this->render('hotels/HotelList.html.twig', [
            'list' => $liste,
        ]);
    }


    /**
     * @Route("/hotels/add", name="add_hotel")
     */
     public function addHotel(Request $req)
     {
         $hotels=new Hotels();
         $form=$this->createForm(HotelFormType::class,$hotels);
         $form->handleRequest($req);
         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($hotels);
             $em->flush();
             return $this->redirectToRoute("list_hotels");
         }
         return $this->render('hotels/addH.html.twig', [
                 'form' => $form->createView(),
         ]);
     }

    /**
     * @Route("/hotels/update/{idh}", name="update_hotel")
     */
    public function updateHotel($idh,Request $req): Response
    {
        $repo=$this->getDoctrine()->getRepository(hotels::class);
        $hotels=$repo->find($idh);
        $form=$this->createForm(HotelFormType::class,$hotels);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_hotels");
        }
        return $this->render('hotels/addH.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/hotels/delete/{idh}", name="delete_hotel")
     */
    public function deleteHotel($idh): Response
    {    $repo=$this->getDoctrine()->getRepository(hotels::class);
        $hotels=$repo->find($idh);
        $em=$this->getDoctrine()->getManager();
        $em->remove($hotels);
        $em->flush();
        return $this->redirectToRoute("list_hotels");

    }



}
