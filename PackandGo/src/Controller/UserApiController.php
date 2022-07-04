<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class UserApiController extends AbstractController
{
    /**
     * @Route("/user/api", name="app_user_api")
     */
    public function index(): Response
    {
        return $this->render('user_api/index.html.twig', [
            'controller_name' => 'UserApiController',
        ]);
    }


    /**
     * @Route("/api/addUser", name="api_User")
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $userPasswordEncoder)
    {

        $roles[] = 'ROLE_USER';
        $em = $this->getDoctrine()->getManager();
        $users = new User();
        $users->setNomC($request->get('nom'));
        $users->setEmail($request->get('email'));
        $users->setAgeC($request->get('age'));
        $users->setPrenomC($request->get('prenom'));
        $users->setRoles($roles);

        $users->setPassword($userPasswordEncoder->encodePassword(
            $users,
            $request->get('plainPassword')
        )
        );
        $users->setIsActive(true);
        $users->setTelC($request->get('numtel'));
        $users->setNumPass($request->get('numpass'));
        $em->persist($users);
        $em->flush();

        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize($users);
        return new JsonResponse($formated);
    }


    /**
     * @Route("/api/allUser", name="all_User")
     */
    public function AfficheUser(EntityManagerInterface $entityManager,NormalizerInterface $normalizer)
    {

        $users = $entityManager
            ->getRepository(User::class)
            ->findAll();
        $jsonContent = $normalizer->normalize($users,'json',['groups'=>'post:users']);
        // $serializer = new Serializer( [new ObjectNormalizer()]);
        return new JsonResponse($jsonContent);

    }


    /**
     * @Route("/api/blocker/{id}", name="apiblocker")
     */
    public function blocke($id)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository(User::class)->find($id);
        $res->setIsActive(0);
        $em->persist($res);
        $em->flush();
        $serializer = new Serializer( [new ObjectNormalizer()]);
        $formated = $serializer->normalize("ok");
        return new JsonResponse($formated);
    }


}
