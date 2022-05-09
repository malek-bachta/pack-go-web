<?php

namespace App\Controller;

use App\Entity\Payment;
use App\Entity\Reservationh;
use App\Form\PaymentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/payment")
 */
class PaymentController extends AbstractController
{
    /**
     * @Route("/", name="app_payment_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $payments = $entityManager
            ->getRepository(Payment::class)
            ->findAll();

        return $this->render('payment/index.html.twig', [
            'payments' => $payments,
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_payment_new", methods={"GET", "POST"})
     */
    public function new(Request $request,$id, EntityManagerInterface $entityManager): Response
    {
        $payment = new Payment();
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);
        $reservation = $entityManager
            ->getRepository(Reservationh::class)
            ->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $payment->setIdReservation($reservation);
            $entityManager->persist($payment);
            $entityManager->flush();

            return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('payment/new.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idP}", name="app_payment_show", methods={"GET"})
     */
    public function show(Payment $payment): Response
    {
        return $this->render('payment/show.html.twig', [
            'payment' => $payment,
        ]);
    }

    /**
     * @Route("/{idP}/edit", name="app_payment_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Payment $payment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('payment/edit.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/annuler/{id}", name="payment_annuler")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Payment::class)->find($id);
        $em->remove($res);
        $em->flush();
        return $this->redirectToRoute('mes_reservation_index');
    }
}
