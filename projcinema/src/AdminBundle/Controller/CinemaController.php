<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Cinema;
use AdminBundle\Entity\Salle;
use AdminBundle\Form\Type\CinemaType;
use AdminBundle\Form\Type\SalleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AdminBundle\Controller\DefaultController as WS;

class CinemaController extends Controller
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

        $salle = new Salle();

        $form = $this->get('form.factory')->create(SalleType::class, $salle);

        return $this->render('AdminBundle:CinemaController:detail_cinema.html.twig', array(
            'salleForm' => $form->createView(),
            'cinema' => $cinema,
            'salles' => $salles
        ));
    }

    /**
     * @Route("/modifyCinema/{id}/{form_detail}")
     */
    public function modifyCinemaAction(Request $request)
    {
        $headers = ['Accept' => 'application/json'];

        $cinema = new Cinema();
        if ($request->isMethod('GET')) {
            $response = WS::getHttp('http://cine.ws/cinemas/' . $request->get('id'));

            $cinema->setNom($response->nom);
            $cinema->setAdresse($response->adresse);
            $cinema->setAccessibilite($response->accessibilite);
        }

        $form = $this->get('form.factory')->create(CinemaType::class, $cinema);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {

                //$requestBody = '{"nom":"Gran Plaza 1","adresse":"Calle 1","accessibilite": 0}"';
                $url = "http://cine.ws/cinemas/" . $request->get('id');
                $requestBody = json_encode([
                  "nom" => $cinema->getNom(),
                  "adresse" => $cinema->getAdresse(),
                  "accessibilite" => $cinema->getAccessibilite()
                ]);
                $headers = [
                  'Content-Type: application/json'
                ];

                WS::patchHttp($url, $requestBody, $headers);

                return $this->redirect('/');
            }
        }

        $fromDetail = $request->get('form_detail');

        return $this->render('AdminBundle:CinemaController:add_cinema.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Modifier',
            'idCinema' => $request->get('id'),
            'fromDetail' => $fromDetail
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
                $headers = [
                  'Content-Type: application/json'
                ];
                $requestBody = json_encode([
                  'nom' => $cinema->getNom(),
                  'adresse' => $cinema->getAdresse(),
                  'accessibilite' => $cinema->getAccessibilite()
                ]);

                $cinemasResponse = WS::postHttp('http://cine.ws/cinemas', $requestBody, $headers);
                //$cinema = $cinemasResponse->body;

                return $this->redirect('/');
            }
        }

        return $this->render('AdminBundle:CinemaController:add_cinema.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Ajout',
            'idCinema' => -1
        ));
    }

    /**
     * @Route("/deleteCinema/{id}")
    */
    public function removeCinemaAction(Request $request) {
        $headers = ['Accept' => 'application/json'];

        $cinemasResponse = WS::deleteHttp('http://cine.ws/cinemas/' . $request->get('id'));

        return $this->redirect('/');
    }
}
