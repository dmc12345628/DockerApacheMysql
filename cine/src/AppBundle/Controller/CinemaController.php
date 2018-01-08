<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class CinemaController extends Controller
{
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