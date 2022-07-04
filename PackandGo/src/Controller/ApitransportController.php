<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Entity\Transport;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ApitransportController extends AbstractController
{
    /**
     * @Route("/apitransport", name="app_apitransport")
     */
    public function index(): Response
    {
        return $this->render('apitransport/index.html.twig', [
            'controller_name' => 'ApitransportController',
        ]);
    }

    /**
     * @Route("/api/transport/show", name="api_list_transport")
     */
    public function getAllTransportmobile(Request $request,NormalizerInterface $normalizer){
        $repo = $this->getDoctrine()
            ->getRepository(Transport::class);
        $liste = $repo->findAll();


        $jsonContent = $normalizer->normalize($liste,'json',['groups'=> 'post:read']);

        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/api/transport/add",name="APIaddtransport")
     */
    public function APIAddTransport(Request $request,NormalizerInterface $normalizer){

        $em = $this->getDoctrine()->getManager();
        $transport = new Transport() ;
        $transport->setNomagence($request->get('nomagence'));
        $transport->setType($request->get('type'));
        $transport->setPrix($request->get('prix'));
        $transport->setDuree($request->get('duree'));
        $transport->setDestination($request->get('destination'));
        $repo=$this->getDoctrine()->getRepository(Guide::class);
        $guide=$repo->find(1);
        $transport->setGuide($guide);

        $em->persist($transport);
        $em->flush();
        $jsonContent = $normalizer->normalize($transport,'json',['groups'=> 'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/API/transport/deletetransport/{id}" ,name="API_delete_transport")
     */
    public function deletetransport($id, EntityManagerInterface $em)
    {
        $data= $em->getRepository(Transport::class)->find($id);
        $em->remove($data);
        $em->flush();
        return new Response('transport deleted successfully');

    }
}
