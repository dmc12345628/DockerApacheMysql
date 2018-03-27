<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Unirest\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     *
    public function indexAction()
    {
        $cinemaRepo = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Cinema');
        $cinemas = $cinemaRepo->myFindNomDQL();

        $filmRepo = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Film');
        $films = $filmRepo->findAll();

        return $this->render('AdminBundle:Default:index.html.twig',
            array(
                'cinemas' => $cinemas,
                'films' => $films
            ));
    }*/

    /**
     * @Route("/")
    */
    public function indexAction() {
        $headers = array('Accept' => 'application/json');

        $cinemasResponse = Request::get('http://cine.ws/cinemas', $headers, null);
        $cinemas = $cinemasResponse->body;

        return $this->render('AdminBundle:Default:index.html.twig',
            array(
                'cinemas' => $cinemas,
                'films' => []
            ));
    }
}
