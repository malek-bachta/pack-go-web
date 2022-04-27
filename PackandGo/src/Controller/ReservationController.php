<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Transport;
use App\Entity\User;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/", name="app_reservation_index")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findAll();

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }


    /**
     * @Route("/mesReservation", name="mes_reservation_index")
     */
    public function reservationFront(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findBy(array('idU'=>$this->getUser()));

        return $this->render('reservation/front.html.twig', [
            'reservations' => $reservations,
        ]);
    }


    /**
     * @Route("/front", name="front", methods={"GET"})
     */
    public function test(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findAll();

        return $this->render('front.html.twig', [
            'reservations' => $reservations,
        ]);
    }


        /**
     * @Route("/back", name="back", methods={"GET"})
     */
    public function back(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findAll();

        return $this->render('back.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    /**
     * @Route("/new", name="app_reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $transport = $this->getDoctrine()->getRepository(Transport::class)->find(1);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setEtat("En attent");
            $reservation->setIdU($this->getUser());
            $reservation->setIdTrasp($transport);
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('mes_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRes}", name="app_reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{idRes}/edit", name="app_reservation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('mes_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="reservation_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservation::class)->find($id);
        $em->persist($res);
        $em->flush();
        return $this->redirectToRoute('mes_reservation_index');
    }


    /**
     * @Route("/accepter/{id}", name="reservation_accepter")
     */
    public function accepter($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservation::class)->find($id);
        $res->setEtat("accepter");
        $em->flush();
        return $this->redirectToRoute('app_reservation_index');
    }


    /**
     * @Route("/refuser/{id}", name="reservation_refuser")
     */
    public function refuser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reservation::class)->find($id);
        $res->setEtat("refuser");
        $em->flush();
        return $this->redirectToRoute('app_reservation_index');
    }
}
