<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{


    /**
     * @Route("/edit/{idReclamation}", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('mes_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/", name="app_reclamation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, Request $request ,PaginatorInterface $paginator): Response
    {
             $donnees = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

            $reclamations = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/Mesreclamation", name="mes_reclamation_index", methods={"GET"})
     */
    public function reclamationUser(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findBy(array('idUser'=>$this->getUser()));

        return $this->render('reclamation/MesReclamation.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }



    function filterwords($text){
        $filterWords = array('fuck', 'shit', 'pute','bitch');
        $filterCount = sizeof($filterWords);
        for ($i = 0; $i < $filterCount; $i++) {
            $text = preg_replace_callback('/\b' . $filterWords[$i] . '\b/i', function($matches){return str_repeat('*', strlen($matches[0]));}, $text);
        }
        return $text;
    }



    /**
     * @Route("/new", name="app_reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setContenue($this->filterwords($reclamation->getContenue()));
            $reclamation->setIdUser($this->getUser());
            $reclamation->setEtat("en attent");
            $reclamation->setDateenv(new \DateTime());
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('mes_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="app_reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/MesPayment.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }


    /**
     * @Route("/delete/{id}", name="reclamation_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reclamation::class)->find($id);
        $em->remove($res);
        $em->flush();
        return $this->redirectToRoute('mes_reclamation_index');
    }


    /**
     * @Route("/traiteReclamation/{id}", name="reclamation_traiter")
     */
    public function traiter($id, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reclamation::class)->find($id);
        $user = $em->getRepository(User::class)->find($res->getIdUser()->getIdC());
        $res->setEtat("Traitée");
        $em->persist($res);
        $em->flush();

        $message = (new \Swift_Message('Reclamation'))
            ->setFrom('pack.go05@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'reclamation/email.html.twig',
                    ['reclamation' => $res, 'user'=>$user]
                ),
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails
            ->addPart(
                $this->renderView(
                // templates/emails/registration.txt.twig
                    'reclamation/email.html.twig',
                    ['reclamation' => $res, 'user'=>$user]
                ),
                'text/plain'
            )
        ;

        $mailer->send($message);

        return $this->redirectToRoute('app_reclamation_index');
    }
}
