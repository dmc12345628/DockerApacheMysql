<?php

namespace AppBundle\Controller\Cinema;

use AppBundle\Entity\Cinema;
use AppBundle\Entity\Salle;
use AppBundle\Form\Type\SalleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;

class SalleController extends Controller
{
    /**
     * @Rest\View(serializerGroups = {"salle"})
     * @Rest\Get("/cinemas/{id}/salles")
    */
    public function getSallesAction(Request $request) {
        $cinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        /* @var $cinema Cinema */
        if (empty($cinema)) {
            return $this->cinemaNotFound();
        }

        return $cinema;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,
     *     serializerGroups = {"salle"})
     * @Rest\Post("/cinemas/{id}/salles")
    */
    public function postSallesAction(Request $request) {
        $em = $this->get('doctrine.orm.entity_manager');
        $cinema = $em->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        /* @var $cinema Cinema */
        if (empty($cinema)) {
            return $this->cinemaNotFound();
        }

        $salle = new Salle();
        $salle->setCinema($cinema);
        $form = $this->createForm(SalleType::class, $salle);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em->persist($salle);
            $em->flush();
            return $salle;
        } else {
            return $form;
        }
    }

    private function cinemaNotFound() {
        return \FOS\RestBundle\View\View::create(['message' => 'Cinema not found'],
            Response::HTTP_NOT_FOUND);
    }
}