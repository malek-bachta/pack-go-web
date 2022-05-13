<?php

namespace App\Controller;

use App\Entity\Offre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class APIoffreController extends AbstractController
{
    /**
     * @Route("/api/showOffre", name="api_list_Offre")
     */
    public function getAllOffre(Request $request,NormalizerInterface $normalizer){
        $repo = $this->getDoctrine()
            ->getRepository(Offre::class);
        $liste = $repo->findAll();


        $jsonContent = $normalizer->normalize($liste,'json',['groups'=> 'post:read']);

        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("API/addOffre",name="APIaddOffre")
     */
    public function APIAddOffre(Request $request,NormalizerInterface $normalizer){

        $em = $this->getDoctrine()->getManager();
        $offre = new Offre() ;
        $offre->setNomOffre($request->get('nomOffre'));
        $offre->setBudget($request->get('budget'));


        $em->persist($offre);
        $em->flush();
        $jsonContent = $normalizer->normalize($offre,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/API/edit/{idOf}",name="editOffre")
     */
    public function editOffre(Request $request,NormalizerInterface $normalizer,$idOf){

        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository(Offre::class)->find($idOf) ;
        $offre->setNomOffre($request->get('nomOffre'));
        $offre->setBudget($request->get('budget'));
        $em->persist($offre);
        $em->flush();
        $jsonContent = $normalizer->normalize($offre,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/API/deleteOffre/{idOf}",name="deleteOffre")
     */
    public function delete(Request $request, $idOf, EntityManagerInterface $entityManager): Response
    {
        $offre=new Offre();
        $offre=$this->getDoctrine()->getRepository(offre::class)->find($idOf);
            $entityManager->remove($offre);
            $entityManager->flush();

        return new Response("aaaaaaaaaaaaaaaaaaaaaaa");

    }
}
