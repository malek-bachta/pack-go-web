<?php

namespace App\Controller;

use App\Entity\Hotels;
use App\Entity\Reservation;
use App\Entity\Reservationh;
use App\Entity\Transport;
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

class ReservationTrasportApiController extends AbstractController
{



    /**
     * @Route("/api/addresertra", name="api_reTran")
     */
    public function newReservh(Request $request )
    {

        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reservation();
        $user = $em
            ->getRepository(User::class)
            ->find($request->get('idu'));
        $hotel = $em
            ->getRepository(Transport::class)
            ->find(3);

        $reclamation->setEtatGuide($request->get('etats'));
        $reclamation->setIdu($user);
        $reclamation->setEtat("en attent");
        $reclamation->setDateDeb(new \DateTime((String)$request->get('dated')));
        $reclamation->setDateFin(new \DateTime((String)$request->get('datef')));
        $reclamation->setIdTrasp($hotel);

        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize($reclamation);
        return new JsonResponse($formated);
    }



    /**
     * @Route("/api/reservatinoTrannsportByUser/{id}", name="reservationByUserTransport")
     */
    public function AfficheReser(EntityManagerInterface $entityManager,NormalizerInterface $normalizer,$id)
    {

        $comments = $entityManager->getRepository(Reservation::class)
            ->findBy(array('idU'=>$id));
        $jsonContent = $normalizer->normalize($comments,'json',['groups'=>'post:reservation']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }

    /**
     * @Route("/api/reservatinoTransportAll", name="reservationAllTransport")
     */
    public function AfficheReserALL(EntityManagerInterface $entityManager,NormalizerInterface $normalizer)
    {
        $comments = $entityManager->getRepository(Reservation::class)
            ->findAll();
        $jsonContent = $normalizer->normalize($comments,'json',['groups'=>'post:reservation']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }



    /**
     * @Route("/api/deleteresTransp/{id}", name="delete_reserTransp")
     */
    public function deleteType(Request $request,$id,EntityManagerInterface $entityManager)
    {

        $em=$this->getDoctrine()->getManager();
        $res = $entityManager->getRepository(Reservation::class)
            ->find($id);
        $em->remove($res);
        $em->flush();
        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);
    }


    /**
     * @Route("/api/updateReTransport", name="update_tRANSPORT")
     */
    public function UpdateRec(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reservation::class)->find($request->get('id'));

        $reclamation->setDateDeb(new \DateTime((String)$request->get('dated')));
        $reclamation->setDateFin(new \DateTime((String)$request->get('datef')));

        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);

    }





}
