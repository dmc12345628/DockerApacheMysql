<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use AppBundle\Form\Type\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;

class CinemaController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"cinema"})
     * @Rest\Get("/cinemas")
     */
    public function getCinemasAction(Request $request)
    {
        $cinemas = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->findAll();

        return $cinemas;
    }

    /**
     * @Rest\View(serializerGroups= {"cinema"})
     * @Rest\Get("/cinemas/{id}")
     */
    public function getCinemaAction(Request $request)
    {
        $cinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        if (empty($cinema)) {
            return $this->cinemaNotFound();
        }

        return $cinema;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups= {"cinema"})
     * @Rest\Post("/cinemas")
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
     * @Rest\View(serializerGroups= {"cinema"})
     * @Rest\Delete("/cinemas/{id}")
     */
    public function removeCinemaAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $cinema = $em->getRepository('AppBundle:Cinema')->find($request->get('id'));

        if (empty($cinema)) {
            return $this->cinemaNotFound();
        }

        foreach ($cinema->getSalles() as $salle) {
            $em->remove($salle);
        }

        $em->remove($cinema);
        $em->flush();

        return $this->cinemaDeleted();
    }

    /**
     * @Rest\View( serializerGroups= {"cinema"})
     * @Rest\Put("/cinemas/{id}")
     */
    public function updateCinemaAction(Request $request)
    {
        return $this->updateCinema($request, true);
    }

    /**
     * @Rest\View( serializerGroups= {"cinema"})
     * @Rest\Patch("/cinemas/{id}")
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
            return $this->cinemaNotFound();
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

    private function cinemaDeleted() {
        return \FOS\RestBundle\View\View::create(['message' => 'Cinema deleted'],
            Response::HTTP_NO_CONTENT);
    }

    private function cinemaNotFound() {
        return \FOS\RestBundle\View\View::create(['message' => 'Cinema not found'],
            Response::HTTP_NOT_FOUND);
    }
}
