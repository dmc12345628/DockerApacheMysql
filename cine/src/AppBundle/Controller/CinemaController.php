<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CinemaController extends Controller
{
    /**
     * @Route ("/cinemas", name="list_cinemas")
     * @Method ({"GET"})
     * @param Request $request
     * @return JsonResponse
    */
    public function getCinemasAction(Request $request) {
        $cinemas = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->findAll();

        $formatted = [];
        foreach ($cinemas as $unCinema) {
            $formatted[] = [
                'id' => $unCinema->getId(),
                'nom' => $unCinema->getNom(),
                'adresse' => $unCinema->getAdresse(),
                'cp' => $unCinema->getCp(),
                'ville' => $unCinema->getVille(),
            ];
        }

        return new JsonResponse($formatted);
    }
}