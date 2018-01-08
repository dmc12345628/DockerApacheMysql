<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;

class CinemaController extends Controller
{
    /**
     * @Get("/cinemas")
     */
    public function getCinemasAction(Request $request)
    {
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

    /**
     * @Get("/cinema")
     */
    public function getCinemaAction(Request $request)
    {
        $unCinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('cinema_id'));

        if (empty($unCinema)) {
            return new JsonResponse(['message' => 'Cinema not found',
                'status' => Response::HTTP_NOT_FOUND]);
        }

        $formatted = [
            'id' => $unCinema->getId(),
            'nom' => $unCinema->getNom(),
            'adresse' => $unCinema->getAdresse(),
            'cp' => $unCinema->getCp(),
            'ville' => $unCinema->getVille()
        ];

        return new JsonResponse($formatted);
    }
}