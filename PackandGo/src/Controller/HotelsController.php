<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Form\HotelFormType;
use App\Form\RatingFormType;
use App\Repository\WorkshopRepository;
use Doctrine\ORM\EntityManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hotels;
use App\Entity\Services;


class HotelsController extends AbstractController
{
    /**
     * @Route("/hotels", name="app_hotels")
     */
    public function showHotels(Request $request, PaginatorInterface $paginator)
    {
        $repo = $this->getDoctrine()
            ->getRepository(Hotels::class);
        $hotels=$repo->findBy([],[
            'nomh'=> 'asc']);

        $liste =$paginator->paginate(
            $hotels,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('hotels/hotelListFront.html.twig', [
            'list' => $liste,
        ]);
    }


    /**
     * @Route("/hotels/details/{idh}", name="details")
     */
    public function details($idh, Request $req)
    {
        $repo=$this->getDoctrine()
            ->getRepository(Hotels::class);
        $hotels=$repo->find($idh);
        $rating=new Rating();
        $form=$this->createForm(RatingFormType::class,$rating);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rating);
            $em->flush();
        }

        return $this->render('hotels/hoteldetails.html.twig', [
            'hotel'=>$hotels,
            'rate' => $form->createView(),
        ]);
    }




    /**
     * @Route("/", name="home")
     */
    public function showsHotels(): Response
    {

        return $this->render('hotels/index.html.twig', [

        ]);
    }


    /**
     * @Route("/hotels/show", name="list_hotels")
     */
    public function getAllHotels(): Response
    {
        $repo = $this->getDoctrine()
            ->getRepository(Hotels::class);
        $liste=$repo->findAll();
        return $this->render('hotels/HotelList.html.twig', [
            'list' => $liste,
        ]);
    }



    /**
     * @Route("/hotels/add", name="add_hotel")
     */
    public function addHotel(Request $req)
    {
        $hotels=new Hotels();
        $form=$this->createForm(HotelFormType::class,$hotels);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get("image")->getData();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('$uploads'),
                $fileName);
            $hotels->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($hotels);
            $em->flush();
            return $this->redirectToRoute("list_hotels");
        }
        return $this->render('hotels/addH.html.twig', [
            'hotel' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/hotels/update/{idh}", name="update_hotel")
     */
    public function updateHotel($idh,Request $req): Response
    {
        $repo=$this->getDoctrine()->getRepository(hotels::class);
        $hotels=$repo->find($idh);
        $form=$this->createForm(HotelFormType::class,$hotels);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $file = $form->get("image")->getData();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('$uploads'),
                $fileName);
            $hotels->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list_hotels");
        }
        return $this->render('hotels/addH.html.twig', [
            'hotel' => $form->createView(),
        ]);
    }


    /**
     * @Route("/hotels/delete/{idh}", name="delete_hotel")
     */
    public function deleteHotel($idh): Response
    {    $repo=$this->getDoctrine()->getRepository(hotels::class);
        $hotels=$repo->find($idh);
        $em=$this->getDoctrine()->getManager();
        $em->remove($hotels);
        $em->flush();
        return $this->redirectToRoute("list_hotels");

    }

    /**
     * @Route("/cat85a2d8d", name="searchformation")
     */
    public function search(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $input = $request->get('search');

        $tab = $em->getRepository(Hotels::class)->search($input);
        return $this->render('hotels/HotelList.html.twig', [

            'result' => $tab,
        ]);
    }






}
