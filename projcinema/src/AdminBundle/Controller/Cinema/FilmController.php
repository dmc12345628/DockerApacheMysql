<?php

namespace AdminBundle\Controller\Cinema;

use AdminBundle\Entity\Cinema;
use AdminBundle\Form\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Unirest\Request as WS;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FilmController extends Controller
{
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
