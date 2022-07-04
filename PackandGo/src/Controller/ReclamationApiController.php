<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ReclamationApiController extends AbstractController
{
    /**
     * @Route("/api/addrec", name="api_rec")
     */
    public function newRec(Request $request )
    {

        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();
        $user = $em
            ->getRepository(User::class)
            ->find($request->get('idu'));

        $reclamation->setContenue($request->get('contenue'));
        $reclamation->setIdUser($user);
        $reclamation->setEtat("en attent");
        $reclamation->setSujet($request->get('sujet'));
        $reclamation->setDateenv(new \DateTime());
        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize($reclamation);
        return new JsonResponse($formated);
    }



    /**
     * @Route("/api/allrecuser/{id}", name="all_USER")
     */
    public function AfficheRecUser(NormalizerInterface $normalizer,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository(Reclamation::class)->findBy(array('idUser'=>$id));
        $jsonContent = $normalizer->normalize($reclamations,'json',['groups'=>'post:rec']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }

    /**
     * @Route("/api/alladminrec", name="all_recuser")
     */
    public function AllReclamtion(NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository(Reclamation::class)->findAll();

        $jsonContent = $normalizer->normalize($reclamations,'json',['groups'=>'post:rec']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }


    /**
     * @Route("/api/updateRec", name="update_rec")
     */
    public function UpdateRec(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($request->get('id'));

        $reclamation->setContenue($request->get('contenue'));
        $reclamation->setSujet($request->get('sujet'));


        $em->persist($reclamation);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);

    }

    /**
     * @Route("/api/recdelete/{id}", name="delete_rec")
     */
    public function deleteRec(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        $em->remove($reclamation);
        $em->flush();
        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);
    }



    /**
     * @Route("/api/traiteapi/{id}", name="reclamation_traiterapi")
     */
    public function traiter($id, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(Reclamation::class)->find($id);
        $user = $em->getRepository(User::class)->find($res->getIdUser()->getIdC());
        $res->setEtat("Traitée");

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

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);
    }

}
