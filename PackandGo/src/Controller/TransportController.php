<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportFormType;
use App\Repository\TransportRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class TransportController extends AbstractController
{
    /**
     * @Route("/", name="home")
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
   public function getAllTransport(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste=$repo->findAll();
        return $this->render('transport/transport.html.twig', [
            'list' => $liste,
        ]);
    }

    /**
     * @Route("/transport/show1", name="list_transport1")
     */
    public function ShowTransport(Request $request , PaginatorInterface $paginator): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste=$repo->findAll();
        $liste =$paginator->paginate(
            $liste,
            $request->query->getInt('page',1),
            6
        );
        return $this->render('transport/flight.html.twig', [
            'list' => $liste,
        ]);
    }
    /**
     * @Route("/transport/show2", name="list_transport2")
     */
    public function ShowTranspor2 (Request $request, PaginatorInterface $paginator): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste=$repo->findAll();
        $liste =$paginator->paginate(
            $liste,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('transport/cars.html.twig', [
            'list' => $liste,
        ]);
    }

    /**
     * @Route("/transport/show3", name="list_transport3")
     */
    public function ShowTranspor3(Request $request , PaginatorInterface $paginator): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste=$repo->findAll();
        $liste =$paginator->paginate(
            $liste,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('transport/train.html.twig', [
            'list' => $liste,
        ]);
    }



    /**
     * @Route("/transport/add", name="add_transporte")
     */

    public function add(Request $req)
    {
        $transport=new Transport();
        $form=$this->createForm(TransportFormType::class,$transport);
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
    /**
     * @Route("/transport/update/{id}", name="update_transport")
     */
    public function updatetransport($id,Request $req): Response
    {
        $repo=$this->getDoctrine()->getRepository(transport::class);
        $transport=$repo->find($id);
        $form=$this->createForm(TransportFormType::class,$transport);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_transport");
        }
        return $this->render('transport/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/transport/delete/{id}", name="delete_transport")
     */
    public function deleteHotel($id): Response
    {    $repo=$this->getDoctrine()->getRepository(transport::class);
        $transport=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($transport);
        $em->flush();
        return $this->redirectToRoute("list_transport");

    }
    /**
     * @Route("/transport/showi/{id}", name="details" )
     */
    public function ShowparId($id ,TransportRepository $repo): Response
    {


        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $transport = $repo->find($id);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('transport/pdf.html.twig', [
            'list' => $transport,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);



        return $this;
    }


}
