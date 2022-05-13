<?php

namespace App\Controller;

use App\Entity\Hotels;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApihotelsController extends AbstractController
{


    /**
     * @Route("/api/hotels/show", name="api_list_hotels")
     */
    public function APIgetAllHotels(Request $request,NormalizerInterface $normalizer){
        $repo = $this->getDoctrine()
            ->getRepository(Hotels::class);
        $liste = $repo->findBy([], [
            'nomh' => 'asc']);

        $jsonContent = $normalizer->normalize($liste,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

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

        $em->persist($hotel);
        $em->flush();
        $jsonContent = $normalizer->normalize($hotel,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/API/hotels/deleteHotel/{idH}" ,name="API_delete_hotel")
     */
    public function deleteReclamation($idH, EntityManagerInterface $em)
    {
        $data= $em->getRepository(Hotels::class)->find($idH);
        $em->remove($data);
        $em->flush();
        return new Response('hotel deleted successfully');

    }






}
