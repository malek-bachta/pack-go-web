<?php

namespace App\Controller;

use App\Entity\Hotels;
use App\Entity\Reservationh;
use App\Form\ReservationhType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationh")
 */
class ReservationhController extends AbstractController
{

    /**
         * @Route("/mesReservationHotel", name="mes_reservation_hotel")
     */
    public function reservationFront(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservationh::class)
            ->findBy(array('idu'=>$this->getUser()));

        return $this->render('reservationh/front.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * @Route("/", name="app_reservationh_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservationhs = $entityManager
            ->getRepository(Reservationh::class)
            ->findAll();

        return $this->render('reservationh/index.html.twig', [
            'reservationhs' => $reservationhs,
        ]);
    }

    /**
     * @Route("/new", name="app_reservationh_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationh = new Reservationh();
        $form = $this->createForm(ReservationhType::class, $reservationh);
        $form->handleRequest($request);
        $hotel = $this->getDoctrine()->getRepository(Hotels::class)->find(1);


        if ($form->isSubmitted() && $form->isValid()) {
            $reservationh->setIdu($this->getUser());
            $reservationh->setIdhotel($hotel);
            $reservationh->setEtat("En Attent");
            $reservationh->setEtatService(1);

            $entityManager->persist($reservationh);
            $entityManager->flush();

            return $this->redirectToRoute('mes_reservation_hotel', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationh/new.html.twig', [
            'reservationh' => $reservationh,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idreh}", name="app_reservationh_show", methods={"GET"})
     */
    public function show(Reservationh $reservationh): Response
    {
        return $this->render('reservationh/show.html.twig', [
            'reservationh' => $reservationh,
        ]);
    }

    /**
     * @Route("/{idreh}/edit", name="app_reservationh_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservationh $reservationh, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationhType::class, $reservationh);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('mes_reservation_hotel', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationh/edit.html.twig', [
            'reservationh' => $reservationh,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="app_reservationh_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservationh::class)->find($id);
        $em->remove($res);
        $em->flush();
        return $this->redirectToRoute('mes_reservation_hotel');
    }


    /**
     * @Route("/accepterh/{id}", name="reservationH_accepter")
     */
    public function accepter($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservationh::class)->find($id);
        $res->setEtat("accepter");
        $em->flush();
        return $this->redirectToRoute('app_reservationh_index');
    }


    /**
     * @Route("/refuserh/{id}", name="reservationH_refuser")
     */
    public function refuser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservationh::class)->find($id);
        $res->setEtat("refuser");
        $em->flush();
        return $this->redirectToRoute('app_reservationh_index');
    }




}
