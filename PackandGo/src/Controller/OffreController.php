<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/offre")
 */
class OffreController extends AbstractController
{
    /**
     * @Route("/", name="app_offre_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offres = $entityManager
            ->getRepository(Offre::class)
            ->findAll();

        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
        ]);
    }
    /**
     * @Route("/listpdf", name="offre_list", methods={"GET"})
     */
    public function listp(EntityManagerInterface $entityManager): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $offres = $entityManager
            ->getRepository(Offre::class)
            ->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('offre/pdf.html.twig', [
            'offres' => $offres,
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

    }
    /**
     * @Route("/add", name="app_offre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_index');
        }

        return $this->render('offre/new.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/edit/{idOf}", name="app_offre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, $idOf , EntityManagerInterface $entityManager): Response
    {
        $offre=new Offre();
        $offre=$this->getDoctrine()->getRepository(offre::class)->find($idOf);
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_index');
        }

        return $this->render('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{idOf}", name="app_offre_delete", methods={"POST"})
     */
    public function delete(Request $request, $idOf, EntityManagerInterface $entityManager): Response
    {
        $offre=new Offre();
        $offre=$this->getDoctrine()->getRepository(offre::class)->find($idOf);
        if ($this->isCsrfTokenValid('delete'.$offre->getIdOf(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
    }
}
