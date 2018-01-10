<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use AppBundle\Form\Type\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class CinemaController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/cinemas")
     */
    public function postCinemasAction(Request $request)
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
     * @Rest\Delete("/cinemas/{id}")
     */
    public function removeCinemasAction(Request $request)
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
     * @Rest\Put("/cinemas/{id}")
     */
    public function updateCinemasAction(Request $request)
    {
        $cinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        if (empty($cinema)) {
            return new JsonResponse(['message' => 'Cinema not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CinemaType::class, $cinema);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->merge($cinema);
            $em->flush();

            return $cinema;
        } else
            return $form;
    }
}