<?php

namespace App\Controller;

use App\Entity\Hotels;
use App\Entity\Reservationh;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ApiReservationHotelController extends AbstractController
{
    /**
     * @Route("/api/reservation/hotel", name="app_api_reservation_hotel")
     */
    public function index(): Response
    {
        return $this->render('api_reservation_hotel/index.html.twig', [
            'controller_name' => 'ApiReservationHotelController',
        ]);
    }


    /**
     * @Route("/api/addreserh", name="api_reSER")
     */
    public function newReservh(Request $request )
    {

        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reservationh();
        $user = $em
            ->getRepository(User::class)
            ->find($request->get('idu'));
        $hotel = $em
            ->getRepository(Hotels::class)
            ->find(3);

        $reclamation->setEtatService($request->get('etats'));
        $reclamation->setIdu($user);
        $reclamation->setEtat("en attent");
        $reclamation->setDated(new \DateTime((String)$request->get('dated')));
        $reclamation->setDatef(new \DateTime((String)$request->get('datef')));
        $reclamation->setIdhotel($hotel);

        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize($reclamation);
        return new JsonResponse($formated);
    }



    /**
     * @Route("/api/reservatinoByUser/{id}", name="reservationByUser")
     */
    public function AfficheReser(EntityManagerInterface $entityManager,NormalizerInterface $normalizer,$id)
    {

        $comments = $entityManager->getRepository(Reservationh::class)
            ->findBy(array('idu'=>$id));
        $jsonContent = $normalizer->normalize($comments,'json',['groups'=>'post:reservationh']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }

    /**
     * @Route("/api/reservatinoAll/{id}", name="reservationAll")
     */
    public function AfficheReserALL(EntityManagerInterface $entityManager,NormalizerInterface $normalizer,$id)
    {

        $comments = $entityManager->getRepository(Reservationh::class)
            ->findAll();
        $jsonContent = $normalizer->normalize($comments,'json',['groups'=>'post:reservationh']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }



    /**
     * @Route("/api/deleteres/{id}", name="delete_reser")
     */
    public function deleteType(Request $request,$id,EntityManagerInterface $entityManager)
    {

        $em=$this->getDoctrine()->getManager();
        $res = $entityManager->getRepository(Reservationh::class)
            ->find($id);
        $em->remove($res);
        $em->flush();
        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);
    }


    /**
     * @Route("/api/updateRehh", name="update_rhhhc")
     */
    public function UpdateRec(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reservationh::class)->find($request->get('id'));

        $reclamation->setDated(new \DateTime((String)$request->get('dated')));
        $reclamation->setDatef(new \DateTime((String)$request->get('datef')));


        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);

    }

}
