<?php

namespace App\Controller;

use App\Entity\Hotels;
use App\Entity\Services;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApihotelsController extends AbstractController
{


    /**
     * @Route("/api/hotels/show", name="api_list_hotels")
     */
    public function APIgetAllHotels(EntityManagerInterface $entityManager,NormalizerInterface $normalizer){

        $repo = $entityManager->getRepository(Hotels::class)
            ->findAll();
        $jsonContent = $normalizer->normalize($repo,'json',['groups'=> 'post:hotel']);
        return new JsonResponse($jsonContent);

    }

    /**
     * @Route("/api/hotels/add",name="APIaddhotel")
     */
    public function APIAddEHotel(Request $request,NormalizerInterface $normalizer){

        $em = $this->getDoctrine()->getManager();
        $hotel = new Hotels() ;
        $hotel->setNomh($request->get('nomh'));
        $hotel->setCategorie($request->get('categorie'));
        $hotel->setAdresse($request->get('adresse'));
        $hotel->setEmail($request->get('email'));
        $hotel->setTelh($request->get('telh'));
        $hotel->setEquipement($request->get('equipement'));
        $repo=$this->getDoctrine()->getRepository(Services::class);
        $services=$repo->find(1);
        $hotel->setService($services);

        $em->persist($hotel);
        $em->flush();
        $jsonContent = $normalizer->normalize($hotel,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/API/hotels/deleteHotel/{idh}" ,name="API_delete_hotel")
     */
    public function deleteReclamation($idh, EntityManagerInterface $em)
    {
        $data= $em->getRepository(Hotels::class)->find($idh);
        $em->remove($data);
        $em->flush();
        return new Response('hotel deleted successfully');

    }






}
