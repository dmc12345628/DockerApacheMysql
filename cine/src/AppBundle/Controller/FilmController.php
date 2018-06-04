<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;
use AppBundle\Form\Type\FilmType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;

class FilmController extends Controller
{
    /**
     * @Get("/films")
     */
    public function getCinemasAction(Request $request)
    {
        $films = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Film')
            ->findAll();

        $formatted = [];
        foreach ($films as $film) {
            $formatted[] = [
                'id' => $film->getId(),
                'titre' => $film->getTitre(),
                'adresse' => $film->getAdresse(),
                'duree' => $film->getDuree(),
            ];
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Get("/cinema/{id}")
     */
    public function getCinemaAction(Request $request)
    {
        $unCinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

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

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/cinema")
     */
    public function postCinemaAction(Request $request)
    {
        $cinema = new Cinema();
        $form = $this->createForm(CinemaType::class, $cinema);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');

            $em->persist($cinema);
            $em->flush();

            return $cinema;
        } else
            return $form;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/cinema/{id}")
     */
    public function removeCinemaAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $cinema = $em->getRepository('AppBundle:Cinema')->find($request->get('id'));

        if ($cinema) {
            $em->remove($cinema);
            $em->flush();
        }
    }

    /**
     * @Rest\View()
     * @Rest\Put("/cinema/{id}")
     */
    public function updateCinemaAction(Request $request)
    {
        return $this->updateCinema($request, true);
    }

    /**
     * @Rest\View()
     * @Rest\Patch("/cinema/{id}")
     */
    public function patchCinemaAction(Request $request)
    {
        return $this->updateCinema($request, false);
    }

    public function updateCinema(Request $request, $clearMissing)
    {
        $cinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        if (empty($cinema)) {
            return new JsonResponse(['message' => 'Cinema not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CinemaType::class, $cinema);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->merge($cinema);
            $em->flush();

            return $cinema;
        } else
            return $form;
    }
}
