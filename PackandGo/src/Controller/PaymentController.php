<?php

namespace App\Controller;

use App\Entity\Payment;
use App\Entity\Reservationh;
use App\Form\PaymentType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
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
     * @Route("/pdfPayment/{id}", name="pdfpayment")
     */
    public function pdf($id)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Payment::class)->find($id);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('payment/pdfpayment.html.twig', [
            'res' => $res
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }



    /**
     * @Route("/", name="app_payment_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, Request $request ,PaginatorInterface $paginator): Response
    {
        $donnees = $entityManager
            ->getRepository(Payment::class)
            ->findAll();

        $payments = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('payment/index.html.twig', [
            'payments' => $payments,
        ]);
    }


    /**
     * @Route("/mesPyment", name="mes_payment_payment", methods={"GET"})
     */
    public function indexClient(EntityManagerInterface $entityManager, Request $request ,PaginatorInterface $paginator): Response
    {
        $payments = $entityManager
            ->getRepository(Payment::class)
            ->findAll();

        return $this->render('payment/MesPayment.html.twig', [
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
            $reservation->setEtat('payer');
            $payment->setSomme(120);
            $entityManager->persist($reservation);
            $entityManager->persist($payment);
            $entityManager->flush();

            return $this->redirectToRoute('mes_reservation_hotel', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('payment/new.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/MesPayment", name="app_payment_show", methods={"GET"})
     */
    public function show(Payment $payment, EntityManagerInterface $entityManager): Response
    {

        $payments = $entityManager
            ->getRepository(Payment::class)
            ->findAll();
        return $this->render('payment/MesPayment.html.twig', [
            'payment' => $payments,
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
