<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Cinema;
use AdminBundle\Form\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CinemaControllerController extends Controller
{
    /**
     * @Route("/detailCinema/{id}")
     */
    public function detailCinemaAction($id)
    {
        $cinemaRepo = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Cinema');
        $cinema = $cinemaRepo->find($id);

        $salleRepo = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Salle');
        $salles = $salleRepo->findBy(array('cinema' => $cinema));

        if ($cinema === null)
            throw new NotFoundHttpException("Ce ninema n'existe pas");

        return $this->render('AdminBundle:CinemaController:detail_cinema.html.twig', array(
            'cinema' => $cinema,
            'salles' => $salles
        ));
    }

    /**
     * @Route("/detailFilm/{id}")
     */
    public function detailFilmAction($id)
    {
        $filmRepo = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Film');
        $film = $filmRepo->find($id);

        return $this->render('AdminBundle:CinemaController:detail_film.html.twig', array(
            'film' => $film
        ));
    }

    /**
     * @Route("/addCinema")
     */
    public function addCinemaAction(Request $request)
    {
        $cinema = new Cinema();
        $form = $this->get('form.factory')->create(CinemaType::class, $cinema);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cinema);
                $em->flush();

                return $this->redirectToRoute('accueil');
            }
        }

        return $this->render('AdminBundle:CinemaController:add_cinema.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/addFilm")
     */
    public function addFilmAction()
    {
        return $this->render('AdminBundle:CinemaController:add_film.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/gestFilm")
     */
    public function gestFilmAction()
    {
        return $this->render('AdminBundle:CinemaController:gest_film.html.twig', array(
            // ...
        ));
    }

}
