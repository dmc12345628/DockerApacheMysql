<?php

namespace AdminBundle\Controller\Cinema;

use AdminBundle\Entity\Salle;
use AdminBundle\Form\Type\SalleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AdminBundle\Controller\DefaultController as WS;

class SalleController extends Controller
{
    /**
     * @Route("/addSalle/{cinema_id}")
     */
    public function addSalleAction(Request $request)
    {
        $cinemaId = $request->get('cinema_id');

        $salle = new Salle();

        $form = $this->get('form.factory')->create(SalleType::class, $salle);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {

                $url = 'http://cine.ws/cinemas/' . $cinemaId . '/salles';
                $requestBody = json_encode([
                  "nom" => $salle->getNom(),
                  "capacite" => $salle->getCapacite()
                ]);
                $headers = [
                  'Content-Type: application/json'
                ];

                WS::postHttp($url, $requestBody, $headers);
            }
        }

        return $this->redirect('/detailCinema/' . $cinemaId);
    }

    /**
     * @Route("/modifySalle/{salle_id}/{cinema_id}")
     */
    public function modifyCinemaAction(Request $request)
    {
        $cinemaId = $request->get('cinema_id');
        $salleId = $request->get('salle_id');

        $headers = ['Accept' => 'application/json'];

        $salle = new Salle();

        $form = $this->get('form.factory')->create(SalleType::class, $salle);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                //$requestBody = '{"nom":"Gran Plaza 1","adresse":"Calle 1","accessibilite": 0}"';
                $url = 'http://cine.ws/cinemas/salles/' . $salleId;
                $requestBody = json_encode([
                  "nom" => $salle->getNom(),
                  "capacite" => $salle->getCapacite()
                ]);
                $headers = [
                  'Content-Type: application/json'
                ];

                WS::patchHttp($url, $requestBody, $headers);

                return $this->redirect('../../detailCinema/' . $cinemaId);
            }
        }
    }

    /**
     * @Route("/deleteSalle/{salle_id}/{cinema_id}")
    */
    public function removeSalleAction(Request $request) {
        $headers = ['Accept' => 'application/json'];

        $cinemasResponse = WS::deleteHttp('http://cine.ws/cinemas/salles/' . $request->get('salle_id'));

        return $this->redirect('/detailCinema/' . $request->get('cinema_id'));
    }
}
