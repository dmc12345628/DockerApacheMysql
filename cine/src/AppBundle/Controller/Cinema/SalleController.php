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

        return $cinema->getSalles();
    }

    /**
     * @Rest\View(serializerGroups = {"salle"})
     * @Rest\Get("/cinemas/salles/{id}")
    */
    public function getSalleAction(Request $request) {
        $salle = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Salle')
            ->find($request->get('id'));

        /* @var $cinema Cinema */
        if (empty($salle)) {
            return $this->salleNotFound();
        }

        return $salle;
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

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT,  serializerGroups= {"salle"})
     * @Rest\Delete("/cinemas/salles/{id}")
     */
    public function removeSalleAction(Request $request) {
        $em = $this->get('doctrine.orm.entity_manager');
        $salle = $em->getRepository('AppBundle:Salle')->find($request->get('id'));

        if (!$salle) {
            return $this->salleNotFound();
        }

        $em->remove($salle);
        $em->flush();

        return $this->salleDeleted();
    }

    /**
     * @Rest\View( serializerGroups= {"salle"})
     * @Rest\Put("cinemas/salles/{id}")
     */
    public function updateSalleAction(Request $request)
    {
        return $this->updateSalle($request, true);
    }

    /**
     * @Rest\View( serializerGroups= {"salle"})
     * @Rest\Patch("/cinemas/salles/{id}")
     */
    public function patchSalleAction(Request $request)
    {
        return $this->updateSalle($request, false);
    }

    private function updateSalle(Request $request, $clearMissing) {
        $em = $this->get('doctrine.orm.entity_manager');
        $salle = $em->getRepository('AppBundle:Salle')
            ->find($request->get('id'));

        if (empty($salle)) {
            return $this->salleNotFound();
        }

        $form = $this->createForm(SalleType::class, $salle);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em->merge($salle);
            $em->flush();

            return $salle;
        } else
          return $form;
    }

    private function salleNotFound() {
        return \FOS\RestBundle\View\View::create(['message' => 'Salle not found'],
            Response::HTTP_NOT_FOUND);
    }

    private function salleDeleted() {
        return \FOS\RestBundle\View\View::create(['message' => 'Salle deleted'],
            Response::HTTP_NO_CONTENT);
    }

    private function cinemaNotFound() {
        return \FOS\RestBundle\View\View::create(['message' => 'Cinema not found'],
            Response::HTTP_NOT_FOUND);
    }

// - Récupérer toutes les salles d'un cinéma        GET         /cinemas/{id}/salles
// - Récupérer une salle d'un cinéma                GET         /cinemas/{id}/salles/{id}
// - Créer une nouvelle salle pour un cinéma        POST         /cinemas/{id}/salles
// - Supprimer une salle d'un cinéma                DELETE         /cinemas/{id}/salles/{id}
// - MAJ complète d'une salle d'un cinéma            PUT         /cinemas/{id}/salles/{id}
// - MAJ partielle d'une salle d'un cinéma            PATCH         /cinemas/{id}/salles/{id}
}
